<?php
$dictionary['Contact']['fields']['title']['type'] = 'enum';
$dictionary['Contact']['fields']['title']['options'] = 'job_title_list';
$dictionary['Contact']['fields']['title']['len'] = '100';
$dictionary['Contact']['fields']['title']['required'] = false;
$dictionary['Contact']['fields']['title']['importable'] = true;
$dictionary['Contact']['fields']['department']['type'] = 'enum';
$dictionary['Contact']['fields']['department']['options'] = 'department_list';
$dictionary['Contact']['fields']['department']['len'] = '150';
$dictionary['Contact']['fields']['department']['required'] = false;
$dictionary['Contact']['fields']['department']['importable'] = true;
$dictionary['Contact']['fields']['email1']['required'] = true;
$dictionary['Contact']['fields']['phone_mobile']['required'] = true;
$dictionary['Contact']['fields']['description']['rows'] = 3;

$dictionary['Contact']['fields']['other_mobile'] = array(
    'name' => 'other_mobile',
    'vname' => 'LBL_OTHER_MOBILE',
    'type' => 'phone',
    'dbType' => 'varchar',
    'len' => '50',
    'required' => false,
);
$dictionary['Contact']['fields']['channel'] = array (
    'name' => 'channel',
    'vname' => 'LBL_CHANNEL',
    'type' => 'enum',
    'len' => 100,
    'options' => 'marketing_channel_dom',
    'importable' => true,
);

// Relationship: Referral contact
$dictionary["Contact"]["fields"]["referral_name"] = array (
    'name' => 'referral_name',
    'rname' => 'name',
    'id_name' => 'referral_id',
    'vname' => 'LBL_REFERRAL_NAME',
    'type' => 'relate',
    'isnull' => 'true',
    'module' => 'Contacts',
    'table' => 'contacts',
    'massupdate' => false,
    'source' => 'non-db',
    'len' => 36,
    'link' => 'referral_contact_link',
    'unified_search' => true,
    'importable' => 'true',
);
$dictionary["Contact"]["fields"]["referral_id"] = array (
    'name' => 'referral_id',
    'vname' => 'LBL_REFERRAL_ID',
    'type' => 'id',
    'required' => false,
    'reportable' => false,
    'audited' => true,
    'comment' => '',
);
$dictionary["Contact"]["fields"]["referral_contact_link"] = array (
    'name' => 'referral_contact_link',
    'type' => 'link',
    'relationship' => 'referral_contacts',
    'module' => 'Contacts',
    'bean_name' => 'Contacts',
    'link_type' => 'one',
    'source' => 'non-db',
    'vname' => 'LBL_REFERRAL_NAME',
    'side' => 'right',
);
$dictionary["Contact"]["fields"]["lead_source_description"] = array (
    'name' => 'lead_source_description',
    'vname' => 'LBL_LEAD_SOURCE_DESCRIPTION',
    'type' => 'text',
    'group' => 'lead_source',
    'comment' => 'Description of the lead source',
    'rows' => 2,
);