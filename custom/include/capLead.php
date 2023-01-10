<?php
//Capture lead
$args = $_POST;

//first check
//if(empty($args))
//    die("Unable to connect to "."http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

//user create
if(empty($args['api_user'])) $args['api_user'] = 'apps_admin';
$args['api_user_id'] = $GLOBALS['db']->getOne("SELECT id FROM users WHERE user_name = '{$args['api_user']}'");
if(empty($args['api_user_id'])) $args['api_user_id'] = '1';
$GLOBALS['current_user'] = BeanFactory::getBean('Users', $args['api_user_id']);

//get utm_agent
//$mkt_user = $args['utm_agent'];
//if (empty($mkt_user)) {
//    $exploded = explode('_', $args['campaign_name']);
//    $mkt_user = end($exploded);
//    if (!empty($mkt_user)) $args['utm_agent_id'] = $GLOBALS['db']->getOne("SELECT id FROM users WHERE user_name = '$mkt_user'");
//}

//Check campaign_name
if (!empty($args['utm_campaign'])) {
    $args['campaign_id'] = $GLOBALS['db']->getOne("SELECT DISTINCT IFNULL(campaigns.id, '') primaryid FROM campaigns WHERE (campaigns.name LIKE '%{$args['utm_campaign']}%') AND campaigns.deleted = 0");
    if (empty($args['campaign_id'])) {
        $cam = new Campaign();
        $cam->name = $args['utm_campaign'];
        $cam->team_id = $args['team_id'];
        $cam->team_set_id = $args['team_id'];
        $cam->save();
        $args['campaign_id'] = $cam->id;
    }
}

//get data
if(empty($args['phone_mobile']))
    $args['phone_mobile'] = $args['phone'];

if(empty($args['phone_mobile']))
    $args['phone_mobile'] = $args['mobile_phone'];

if(!empty($args['full_lead_name']))
    $args['first_name']  = split_fullname($args['full_lead_name'],0);
if(!empty($args['full_lead_name']))
    $args['last_name']  = split_fullname($args['full_lead_name']);

//get module name
if(strtolower($args['type']) == 'lead' || strtolower($args['type']) == 'leads')
    $module_name = 'Lead';
else $module_name = 'Prospect';

//add Lead/Prospect
$lead = new $module_name();
$lead->disable_row_level_security =true;

foreach ($lead->getFieldDefinitions() as $field => $definition){
    if (!isset($args[$field]))
        continue;
    $lead->$field = $args[$field];
}


//trigger fields email template & Duplicate
$lead->name = trim($lead->last_name . ' ' . $lead->first_name);
$lead->id = '';
//Set birthdate
if(!empty($lead->birthdate))
    $lead->birthdate = $GLOBALS['timedate']->convertToDBDate($lead->birthdate);
$lead->email1          = $args['email'];
if(empty($lead->email1)) $lead->email1 = $args['email1'];
$lead->team_id          = $args['team_id'];
$lead->team_set_id      = $args['team_id'];

if(empty($lead->name) && empty($lead->phone_mobile) && empty($lead->email1)){
    ob_clean();
    die(json_encode(array(
        'success'   => 0,
        'messages'  => 'invalid_input',
    )));
}
////reference_logs
$reference_logs = json_encode(array(
    'lead_source'        => $lead->lead_source,
    'source_description' => $lead->source_description,
    'reference'          => $lead->reference,
    'channel'            => $lead->channel,
    'campaign_id'        => $lead->campaign_id,
    'utm_source'         => $lead->utm_source,
    'utm_content'        => $lead->utm_content,
    'utm_term'           => $lead->utm_term,
    'business_agent'     => $lead->business_agent,
));

//Check duplicate
$duplicates = $lead->findDuplicates();
if(count($duplicates['records']) > 0){
    //Update date modified by
    $dupId = $duplicates['records'][0]['id'];
    $beanName = $module_name.'s';
    $beanDup = BeanFactory::getBean($beanName, $dupId);
    if(!empty($beanDup->id)){
        if(empty($beanDup->email1)) $beanDup->email1 = $lead->email1;
        if(empty($beanDup->description)) $beanDup->description = $lead->description;
        else $beanDup->description .= "\n ".$lead->description;

        if(empty($beanDup->source_description)) $beanDup->source_description = $lead->source_description;
        else $beanDup->source_description .= "| ".$lead->source_description;

        $beanDup->reference_logs = $reference_logs;
        $beanDup->save();
    }
    ob_clean();
    die(json_encode(array(
        'success'   => 0,
        'messages'  => 'duplicated_found',
        'record'    => $duplicates['records'][0]['id'],
    )));
}

$lead->save();

ob_clean();
die(json_encode(array(
    'success'   => 1,
    'messages'  => 'created_new_'.$module_name,
    'record'    => $lead->id,
)));


