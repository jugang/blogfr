<?php
class Validator{

    /*
     * Check required Fields
     */
    function isRequired($field_array){
        foreach ($field_array as $field){
            if ($_POST[$field] == ''){
                return false;
            }
        }
        return true;
    }
}

    /*
     * Validate Email Field

    function isValidEmail($email){
        if (filter_var($email, 'FILTER_VALIDATE_EMAIL')){
            return true;
        }else{
            return false;
        }
}
     */
    /*
     * Check Password Mach

    function passwordMach($pw1, $pw2){
        if ($pw1 == $pw2){
            return true;
        }else{
            return false;
        }

}
    */