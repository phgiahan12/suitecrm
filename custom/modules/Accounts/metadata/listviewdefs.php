<?php
$listViewDefs ['Accounts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'LEGAL_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LEGAL_NAME',
    'width' => '25%',
    'default' => true,
  ),
  'TAX_CODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TAX_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => true,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
  ),
  'DIRECTOR_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_DIRECTOR_NAME',
    'id' => 'DIRECTOR_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTANT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTANT_NAME',
    'id' => 'ACCOUNTANT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CAMPAIGN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'INSTITUTION_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_INSTITUTION_TYPE',
    'width' => '10%',
  ),
  'SCHOOL_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_SCHOOL_TYPE',
    'width' => '10%',
  ),
  'PREFER_PRODUCT' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PREFER_PRODUCT',
    'width' => '10%',
  ),
  'PREFER_DURATION' => 
  array (
    'type' => 'enum',
    'default' => false,
    'label' => 'LBL_PREFER_DURATION',
    'width' => '10%',
  ),
  'NUMBER_OF_CENTERS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMBER_OF_CENTERS',
    'width' => '10%',
    'default' => false,
  ),
  'NUMBER_OF_USERS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMBER_OF_USER',
    'width' => '10%',
    'default' => false,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'INDUSTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_INDUSTRY',
    'default' => false,
  ),
  'ANNUAL_REVENUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ANNUAL_REVENUE',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'default' => false,
  ),
  'SHIPPING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'EMPLOYEES' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMPLOYEES',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);
;
?>
