<?php
//Session Start
session_start();

//Include Configuration
require_once ('../config/config.php');

//Helper Function files
require_once ('../helpers/db_helper.php');
require_once ('../helpers/format_helper.php');
require_once ('../helpers/system_helper.php');

/*Autoload Classes
 *
 * __autoload — Attempt to load undefined class
 */
function __autoload($class_name){
    require_once ('../libraries/'.$class_name.".php");
}