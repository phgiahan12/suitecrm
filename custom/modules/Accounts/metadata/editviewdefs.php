<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'legal_name',
            'label' => 'LBL_LEGAL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'director_name',
            'label' => 'LBL_DIRECTOR_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tax_code',
            'label' => 'LBL_TAX_CODE',
          ),
          1 => 
          array (
            'name' => 'institution_type',
            'label' => 'LBL_INSTITUTION_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'school_type',
            'label' => 'LBL_SCHOOL_TYPE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prefer_product',
            'label' => 'LBL_PREFER_PRODUCT',
          ),
          1 => 
          array (
            'name' => 'number_of_centers',
            'label' => 'LBL_NUMBER_OF_CENTERS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'prefer_duration',
            'label' => 'LBL_PREFER_DURATION',
          ),
          1 => 
          array (
            'name' => 'number_of_users',
            'label' => 'LBL_NUMBER_OF_USER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'bonus_services',
            'label' => 'LBL_BONUS_SERVICES',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'accountant_name',
            'label' => 'LBL_ACCOUNTANT_NAME',
          ),
          1 => 
          array (
            'name' => 'bank_name',
            'label' => 'LBL_BANK_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accountant_phone',
            'label' => 'LBL_ACCOUNTANT_PHONE',
          ),
          1 => 
          array (
            'name' => 'bank_account',
            'label' => 'LBL_BANK_ACCOUNT',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'campaign_name',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
