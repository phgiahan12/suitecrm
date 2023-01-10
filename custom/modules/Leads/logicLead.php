<?php
if (!defined('dotbEntry') || !dotbEntry) die('Not A Valid Entry Point');

class logicLead{
    public function saveFullName(&$bean, $event, $arguments){
        //save full name
        $bean->last_name  = mb_convert_case(trim(preg_replace('/\s+/', ' ',str_replace(['ㅤ','ᅠ'], '',$bean->last_name))), MB_CASE_TITLE, "UTF-8");
        $bean->first_name  = mb_convert_case(trim(preg_replace('/\s+/', ' ',str_replace(['ㅤ','ᅠ'], '',$bean->first_name))), MB_CASE_TITLE, "UTF-8");
        $bean->full_lead_name = trim($bean->last_name . ' ' . $bean->first_name);
        $bean->phone_mobile   = formatPhoneNumber($bean->phone_mobile);

        if(strlen($bean->phone_mobile) >= 30){
            $string = $bean->phone_mobile;
            $bean->phone_mobile = substr($string,0,10);
            $bean->other_mobile = substr($string,20);
        }elseif(strlen($bean->phone_mobile) >= 20){
            $string = $bean->phone_mobile;
            $bean->phone_mobile = substr($string,0,10);
        }

        $bean->other_mobile  = formatPhoneNumber($bean->other_mobile);
        $bean->phone_work    = formatPhoneNumber($bean->phone_work);
        $bean->other_phone   = formatPhoneNumber($bean->other_phone);

        //Xu ly Import user_name
        if ($_POST['module'] == 'Import') {
            $user_id = $GLOBALS['db']->getOne("SELECT id FROM users WHERE user_name = '{$bean->assigned_user_name}' AND deleted = 0");
            if (!empty($user_id)){
                $bean->assigned_user_id = $user_id;
            }
        }

        //xử lí bàn giao
        if($bean->fetched_row['assigned_user_id'] != $bean->assigned_user_id){
            $bean->performed_user_id = $bean->modified_user_id;
            $bean->date_performed = $bean->date_modified;
        }
    }
}
