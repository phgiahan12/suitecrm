<?php
$dictionary['Lead']['fields']['title']['type'] = 'enum';
$dictionary['Lead']['fields']['title']['options'] = 'job_title_list';
$dictionary['Lead']['fields']['title']['len'] = '100';
$dictionary['Lead']['fields']['title']['required'] = false;
$dictionary['Lead']['fields']['title']['importable'] = true;
$dictionary['Lead']['fields']['department']['type'] = 'enum';
$dictionary['Lead']['fields']['department']['options'] = 'department_list';
$dictionary['Lead']['fields']['department']['len'] = '150';
$dictionary['Lead']['fields']['department']['required'] = false;
$dictionary['Lead']['fields']['department']['importable'] = true;
$dictionary['Lead']['fields']['email']['required'] = true;
$dictionary['Lead']['fields']['description']['rows'] = 3;
$dictionary['Lead']['fields']['phone_mobile']['required'] = true;
$dictionary['Lead']['fields']['lead_source_description']['rows'] = 2;
$dictionary['Lead']['fields']['email1']['required'] = true;
$dictionary['Lead']['fields']['account_name']['required'] = true;
$dictionary['Lead']['fields']['lead_source']['required'] = true;

$dictionary['Lead']['fields']['legal_name'] = array(
    'name'     => 'legal_name',
    'vname'    => 'LBL_LEGAL_NAME',
    'type'     => 'varchar',
    'len'      => '255',
    'required' => false,
);
$dictionary['Lead']['fields']['tax_code'] = array(
    'name'     => 'tax_code',
    'vname'    => 'LBL_TAX_CODE',
    'type'     => 'varchar',
    'len'      => '100',
    'required' => false,
);

$dictionary['Lead']['fields']['account_email'] = array (
    'required'   => false,
    'name'       => 'account_email',
    'vname'      => 'LBL_EMAIL',
    'type'       => 'varchar',
    'len'        => 150,
    'comment'    => '',
    'importable' => 'true',
);
$dictionary['Lead']['fields']['institution_type'] = array(
    'name'    => 'institution_type',
    'vname'   => 'LBL_INSTITUTION_TYPE',
    'type'    => 'enum',
    'options' => 'institution_type_options',
    'default' => '',
    'len'     => '100'
);
$dictionary['Lead']['fields']['employees'] = array(
    'name'    => 'employees',
    'vname'   => 'LBL_EMPLOYEES',
    'type'    => 'enum',
    'options' => 'lead_number_of_employees_options',
    'default' => '',
    'len'     => '100'
);
$dictionary['Lead']['fields']['number_of_students'] = array(
    'name'    => 'number_of_students',
    'vname'   => 'LBL_NUMBER_OF_STUDENTS',
    'type'    => 'enum',
    'options' =>'number_of_students_options',
    'default' => '',
);
$dictionary['Lead']['fields']['prefer_product'] = array(
    'name'    => 'prefer_product',
    'vname'   => 'LBL_PREFER_PRODUCT',
    'type'    => 'enum',
    'options' => 'prefer_product_options',
    'default' => '',
);
$dictionary['Lead']['fields']['prefer_duration'] = array(
    'name'    => 'prefer_duration',
    'vname'   => 'LBL_PREFER_DURATION',
    'type'    => 'enum',
    'options' => 'prefer_duration_options',
    'default' => '',
);
$dictionary["Lead"]["fields"]['number_of_users'] = array(
    'name'  => 'number_of_users',
    'vname' => 'LBL_NUMBER_OF_USER',
    'type'  => 'varchar',
    'len'   => '100',
);
$dictionary["Lead"]["fields"]['bonus_services'] = array(
    'name'  => 'bonus_services',
    'vname' => 'LBL_BONUS_SERVICES',
    'type'  => 'text',
    'rows'  => 3,
);
$dictionary["Lead"]["fields"]['billing_address'] = array(
    'name'  => 'billing_address',
    'vname' => 'LBL_BILLING_ADDRESS',
    'type'  => 'text',
    'rows'  => 3,
);
$dictionary['Lead']['fields']['school_type'] = array(
    'name'    => 'school_type',
    'vname'   => 'LBL_SCHOOL_TYPE',
    'type'    => 'enum',
    'options' => 'school_type_options',
    'default' => '',
    'len'     => '100'
);
$dictionary['Lead']['fields']['other_mobile'] = array(
    'name' => 'other_mobile',
    'vname' => 'LBL_OTHER_MOBILE',
    'type' => 'phone',
    'dbType' => 'varchar',
    'len' => '50',
    'required' => false,
);
$dictionary['Lead']['fields']['channel'] = array (
    'name' => 'channel',
    'vname' => 'LBL_CHANNEL',
    'type' => 'enum',
    'len' => 100,
    'options' => 'marketing_channel_dom',
    'importable' => true,
);