<?php
///////////////////////////////////
// index.php v1                  //
//                               //
// Date Created: 03/08/16        //
// Last Modified: 03/08/16       //
// Contact: Blake Warrington     //
// Email: bwarring24@gmail.com   //
///////////////////////////////////


// Lets check to make sure our config file exists
if(!file_exists("includes/config.inc.php")){
    die("Config file can not be located.");
}else{
    require_once("includes/config.inc.php");
}

// Check to see if maintenance mode should be enabled
if($setting['maintenance']){
    die("System is down for maintenance. Please check back later");
}

// Check to see if debug mode should be enalbed
if($setting['debug']){
    ini_set('display_errors',1);
    error_reporting(E_ALL);
}

// Check to see if there is a specified language requested
if($setting['language'] != null){
    require_once("includes/lang/lang.class.php");
}else{
    die("Must specify a default language!");
}

// Check to see if there was a page requested
if(isset($_GET['p'])){
    
}




?>