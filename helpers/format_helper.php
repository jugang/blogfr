<?php
//Date format
function dateFormat($date){
    return date('F j, Y, g:i a',strtotime($date));
}

//url Format
function urlformat($str){
    //Strip out all whitespace
    $str = preg_replace('/\s*/','',$str);
    //Convert the string to all lowercase
    $str = strtolower($str);
    //URL encode
    $str = urlencode($str);
    return $str;
}

//Add classname 'active' if category is active
function is_active($category){
    if(isset($_GET['category'])){
        if($_GET['category']==$category){
            return 'active';
        }else {
            return '';
        }
    }else {
        if($category == null){
            return 'active';
        }
    }
}