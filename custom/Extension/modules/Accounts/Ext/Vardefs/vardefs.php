<?php
$dictionary['Account']['fields']['institution_type'] = array(
    'name'    => 'institution_type',
    'vname'   => 'LBL_INSTITUTION_TYPE',
    'type'    => 'enum',
    'options' => 'institution_type_options',
    'default' => '',
    'len'     => '100'
);
$dictionary['Account']['fields']['school_type'] = array(
    'name'    => 'school_type',
    'vname'   => 'LBL_SCHOOL_TYPE',
    'type'    => 'enum',
    'options' => 'school_type_options',
    'default' => '',
    'len'     => '100'
);
$dictionary['Account']['fields']['employees'] = array(
    'name'    => 'employees',
    'vname'   => 'LBL_EMPLOYEES',
    'type'    => 'enum',
    'options' => 'number_of_employees_options',
    'default' => '',
    'len'     => '100'
);
$dictionary['Account']['fields']['prefer_product'] = array(
    'name'    => 'prefer_product',
    'vname'   => 'LBL_PREFER_PRODUCT',
    'type'    => 'enum',
    'options' => 'prefer_product_options',
    'default' => '',
);
$dictionary['Account']['fields']['prefer_duration'] = array(
    'name'    => 'prefer_duration',
    'vname'   => 'LBL_PREFER_DURATION',
    'type'    => 'enum',
    'options' => 'prefer_duration_options',
    'default' => '',
);
$dictionary["Account"]["fields"]['number_of_centers'] = array(
    'name'  => 'number_of_centers',
    'vname' => 'LBL_NUMBER_OF_CENTERS',
    'type'  => 'varchar',
    'len'   => '100',
);
$dictionary["Account"]["fields"]['number_of_users'] = array(
    'name'  => 'number_of_users',
    'vname' => 'LBL_NUMBER_OF_USER',
    'type'  => 'varchar',
    'len'   => '100',
);
$dictionary["Account"]["fields"]['bonus_services'] = array(
    'name'  => 'bonus_services',
    'vname' => 'LBL_BONUS_SERVICES',
    'type'  => 'text',
    'rows'  => 3,
);
$dictionary['Account']['fields']['bank_name'] = array(
    'name'    => 'bank_name',
    'vname'   => 'LBL_BANK_NAME',
    'type'    => 'enum',
    'options' => 'account_bank_name_options',
    'default' => '',
);
$dictionary["Account"]["fields"]['bank_account'] = array(
    'name'  => 'bank_account',
    'vname' => 'LBL_BANK_ACCOUNT',
    'type'  => 'varchar',
    'len'   => '100',
);
$dictionary['Account']['fields']['legal_name'] = array(
    'name'     => 'legal_name',
    'vname'    => 'LBL_LEGAL_NAME',
    'type'     => 'varchar',
    'len'      => '255',
    'required' => false,
);
$dictionary['Account']['fields']['tax_code'] = array(
    'name'     => 'tax_code',
    'vname'    => 'LBL_TAX_CODE',
    'type'     => 'varchar',
    'len'      => '100',
    'required' => false,
);
$dictionary["Account"]["fields"]['accountant_phone'] = array(
    'name' => 'accountant_phone',
    'vname' => 'LBL_ACCOUNTANT_PHONE',
    'type' => 'phone',
    'dbType' => 'varchar',
    'len' => 100,
    'unified_search' => true,
    'help' => '(Số điện thoại kế toán hoăc Phòng ban Kế toán)',
);

//Relationship - accountant
$dictionary["Account"]["fields"]['accountant_name'] = array(
    'importable' => 'true',
    'source'     => 'non-db',
    'name'       => 'accountant_name',
    'vname'      => 'LBL_ACCOUNTANT_NAME',
    'help'       => '',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'accountant_id',
    'massupdate' => false,
    'join_name'  => 'Contacts',
    'link'       => 'account_accountant_link',
    'table'      => 'contacts',
    'isnull'     => 'true',
    'module'     => 'Contacts',
    'auto_populate' => true,
    'populate_list' =>
        array (
            'phone_mobile' => 'accountant_phone',
        ),
);
$dictionary["Account"]["fields"]['accountant_id'] = array(
    'name'              => 'accountant_id',
    'rname'             => 'id',
    'vname'             => 'LBL_ACCOUNTANT_ID',
    'type'              => 'id',
    'table'             => 'contacts',
    'isnull'            => 'true',
    'module'            => 'Contacts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);
$dictionary["Account"]["fields"]['account_accountant_link'] = array(
    'name'          => 'account_accountant_link',
    'type'          => 'link',
    'relationship'  => 'account_accountant',
    'module'        => 'Contacts',
    'bean_name'     => 'Contact',
    'source'        => 'non-db',
    'vname'         => 'LBL_ACCOUNTANT_NAME',
);

//Relationship - Director Key Contact
$dictionary["Account"]["fields"]['director_name'] = array(
    'importable' => 'true',
    'source'     => 'non-db',
    'name'       => 'director_name',
    'vname'      => 'LBL_DIRECTOR_NAME',
    'help'       => '(CEO, Duty of Director, Director)',
    'type'       => 'relate',
    'rname'      => 'name',
    'id_name'    => 'director_id',
    'massupdate' => false,
    'join_name'  => 'Contacts',
    'link'       => 'account_director_link',
    'table'      => 'contacts',
    'isnull'     => 'true',
    'module'     => 'Contacts',
);
$dictionary["Account"]["fields"]['director_id'] = array(
    'name'              => 'director_id',
    'rname'             => 'id',
    'vname'             => 'LBL_DIRECTOR_ID',
    'type'              => 'id',
    'table'             => 'contacts',
    'isnull'            => 'true',
    'module'            => 'Contacts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);
$dictionary["Account"]["fields"]['account_director_link'] = array(
    'name'          => 'account_director_link',
    'type'          => 'link',
    'relationship'  => 'account_director',
    'module'        => 'Contacts',
    'bean_name'     => 'Contact',
    'source'        => 'non-db',
    'vname'         => 'LBL_DIRECTOR_NAME',
);