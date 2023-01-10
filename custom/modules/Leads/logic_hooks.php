<?php
/**
 * Add by Tuan Anh
 */
$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(2, 'Save full name', 'custom/modules/Leads/logicLead.php', 'logicLead', 'saveFullName');


//$hook_array['before_delete'] = Array();
//$hook_array['before_delete'][] = Array(1, 'Handle delete lead', 'custom/modules/Leads/logicLead.php', 'logicLead', 'handleDelete');

//$hook_array['process_record'] = Array();
//$hook_array['process_record'][] = Array(2, 'Contact Activity', 'custom/modules/Contacts/logicContact.php','logicContact', 'contactActivity');
?>