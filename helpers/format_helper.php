<?php
//Date format
function dateFormat($date){
    return date('F j, Y, g:i a',strtotime($date));
}
/*
 * Format Shorten Text in posts
 */
function shortenText($text, $chars = 450){
    $text = $text." ";                                      // dodajemo razmak na kraju texta
    $text = substr($text, 0, $chars);                  //idemo do 450 karaktera
    $text = substr($text, 0, strrpos($text, ' '));//strrpod(stopira substr)->broji od pozadi(da ne bi slomio rec na pola 450 karaktera) i kad naidje na prvi razmak
    $text = $text."...";                                    //dodajemo na kraju tri tacke
    return $text;
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

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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

