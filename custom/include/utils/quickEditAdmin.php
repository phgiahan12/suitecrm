<?php
switch ($_POST['type']) {
    case 'quickAdminEdit':
        $result = quickAdminEdit();
        echo $result;
        break;
}

// ----------------------------------------------------------------------------------------------------------\\

function quickAdminEdit(){
    global $timedate;
    $bean = BeanFactory::getBean($_POST['module']);
    $field_defs = $bean->field_defs;
    $field_type = $field_defs[$_POST['field']]['type'];
    $value = $_POST['value'];
    if($field_type == 'date')
        $value = $timedate->convertToDBDate($_POST['value'],false);

    if(!empty($_POST['table']) && !empty($_POST['field']) && !empty($_POST['module'])){
        $bean = BeanFactory::getBean($_POST['module'],$_POST['record']);
        // prepare an array to audit the changes in parent module’s audit table

        if($bean->field_name_map[$_POST['field']]['audited'] && $bean->fetched_row[$_POST['field']] != $value){
            $aChange = array();
            $aChange['field_name']  = $_POST['field'];
            $aChange['data_type']   = $field_type;
            $aChange['before']      = $bean->fetched_row[$_POST['field']];
            $aChange['after']       = $value;
            // save audit entry
            $bean->db->save_audit_records($bean, $aChange);
        }

        $q1 = "UPDATE {$_POST['table']}
        SET {$_POST['field']} = '$value'
        WHERE id = '{$_POST['record']}'";
        $res = $GLOBALS['db']->query($q1);
        if(!empty($_POST['field2'])){

            $q1 = "UPDATE {$_POST['table']}
            SET {$_POST['field2']} = '{$_POST['value2']}'
            WHERE id = '{$_POST['record']}'";
            $res = $GLOBALS['db']->query($q1);


        }

        $bean_res = new $bean->object_name;
        $bean_res->retrieve($_POST['record']);

        $obj_name = $_POST['field'];
        $return = $bean_res->$obj_name;

        if($field_type == 'date')
            $return = $timedate->to_display_date($return,false);

        if($_POST['field'] == 'assigned_user_id')
            $return = $bean_res->assigned_user_name;

        if(!empty($_POST['field2'])){
            $obj_name2 = $_POST['field2'];
            $return2 = $bean_res->$obj_name2;
        }

        return json_encode(array(
            "success"   => "1",
            "value"     => $return,
            "value2"    => $return2,
        ));
    }
    else
        return json_encode(array(
            "success"         => "0",
            "error"         => "Some error occurred! Please, Try again later",
        ));

}


