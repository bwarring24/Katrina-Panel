<?php
  function getLog($type) {
    if($type == "php"){
    	$errorLog = fopen("/Applications/MAMP/logs/php_error.log", "r") or die("Unable to open file!");//change file paths
    }
    if($type == "mysql"){
    	$errorLog= fopen("/Applications/MAMP/logs/mysql_error_log.err", "r") or die("Unable to open file!");
    }
    if($type == "apache"){
    	$errorLog = fopen("/Applications/MAMP/logs/apache_error.log", "r") or die("Unable to open file!");
    }
    return $errorLog;
  }

function printLog($log){
	while(!feof($log)) {
       echo fgets($log) . "<br>";
   }
}
  if (isset($_GET['type'])) {
    $log=getLog($_GET['type']);
  }
?>