<?php
$dictionary['Prospect']['fields']['title']['type'] = 'enum';
$dictionary['Prospect']['fields']['title']['options'] = 'job_title_list';
$dictionary['Prospect']['fields']['title']['len'] = '100';
$dictionary['Prospect']['fields']['title']['required'] = false;
$dictionary['Prospect']['fields']['title']['importable'] = true;
$dictionary['Prospect']['fields']['department']['type'] = 'enum';
$dictionary['Prospect']['fields']['department']['options'] = 'department_list';
$dictionary['Prospect']['fields']['department']['len'] = '150';
$dictionary['Prospect']['fields']['department']['required'] = false;
$dictionary['Prospect']['fields']['department']['importable'] = true;
$dictionary['Prospect']['fields']['email1']['required'] = true;
$dictionary['Prospect']['fields']['phone_mobile']['required'] = true;
$dictionary['Prospect']['fields']['description']['rows'] = 3;

$dictionary['Prospect']['fields']['status'] = array(
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'len' => '100',
    'options' => 'target_status_dom',
    'default' => 'New',
    'audited' => true,
    'comment' => 'Status of the target',
    'massupdate' => false,
    'duplicate_on_record_copy' => 'no',
);
$dictionary['Prospect']['fields']['other_mobile'] = array(
    'name' => 'other_mobile',
    'vname' => 'LBL_OTHER_MOBILE',
    'type' => 'phone',
    'dbType' => 'varchar',
    'len' => '50',
    'required' => false,
);