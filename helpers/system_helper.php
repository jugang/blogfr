<?php
function redirect($page = false, $msg = NULL, $msg_type = NULL){
    if(is_string($page)){
        $location = $page;
    }else {
        $location = $_SERVER['SCRIPT_NAME'];
    }
    //check for message
    if($msg != NULL){
        $_SESSION['msg'] = $msg;
    }
    //check for type
    if($msg_type !=  NULL){
        $_SESSION['msg_type'] = $msg_type;
    }
    header("Location: ".$location);
    exit;
}
/*
 * Display Message
 */
function displayMessage(){
    if(!empty($_SESSION['msg'])){
        //Assign Message Var
        $msg = $_SESSION['msg'];

        if(!empty($_SESSION['msg_type'])){
            //Assign Type Var
            $msg_type = $_SESSION['msg_type'];
            //Create Output
            if($msg_type == 'error'){
                echo "<div class='alert alert-danger'>".$msg."</div>";
            }else {
                echo "<div class='alert alert-success'>".$msg."</div>";
            }
        }
        //Unset Mesage
        unset($_SESSION['msg']);
        unset($_SESSION['msg_type']);
    }else {
        echo '';
    }
}

/*
 * Check is User is Logged in
 */
function isLoggedIn(){
    if (isset($_SESSION['is_logged_in'])){
        return true;
    }else{
        return false;
    }
}

/*
 * Get Logged In User Info
 X
function getUser(){
    $userArray = array();
    $userArray['user_id'] = $_SESSION['user_id'];
    $userArray['username'] = $_SESSION['username'];
    return $userArray;
}
*/

