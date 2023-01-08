<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'last_name',
          1 => '',
        ),
        2 => 
        array (
          0 => 'phone_mobile',
          1 => 'title',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'other_mobile',
            'label' => 'LBL_OTHER_MOBILE',
          ),
          1 => 'department',
        ),
        4 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
            'type' => 'varchar',
            'validateDependency' => false,
            'customCode' => '<input name="account_name" id="EditView_account_name" {if ($fields.converted.value == 1)}disabled="true"{/if} size="30" maxlength="255" type="text" value="{$fields.account_name.value}">',
          ),
          1 => 
          array (
            'name' => 'institution_type',
            'label' => 'LBL_INSTITUTION_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'legal_name',
            'label' => 'LBL_LEGAL_NAME',
          ),
          1 => 
          array (
            'name' => 'school_type',
            'label' => 'LBL_SCHOOL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'website',
          1 => 
          array (
            'name' => 'employees',
            'label' => 'LBL_EMPLOYEES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tax_code',
            'label' => 'LBL_TAX_CODE',
          ),
          1 => 
          array (
            'name' => 'number_of_students',
            'label' => 'LBL_NUMBER_OF_STUDENTS',
          ),
        ),
        4 => 
        array (
          0 => 'phone_work',
          1 => 
          array (
            'name' => 'prefer_product',
            'label' => 'LBL_PREFER_PRODUCT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
          1 => 
          array (
            'name' => 'prefer_duration',
            'label' => 'LBL_PREFER_DURATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'account_email',
            'comment' => '',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'number_of_users',
            'label' => 'LBL_NUMBER_OF_USER',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 'description',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'billing_address',
            'label' => 'LBL_BILLING_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'bonus_services',
            'label' => 'LBL_BONUS_SERVICES',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'lead_source',
          1 => 'campaign_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'lead_source_description',
          ),
          1 => 
          array (
            'name' => 'channel',
            'label' => 'LBL_CHANNEL',
          ),
        ),
        2 => 
        array (
          0 => 'opportunity_amount',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
