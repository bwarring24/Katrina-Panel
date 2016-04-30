<?php

    $version = explode('~', phpversion()); 
    $version = explode('-', $version[0]); 


    $serverName = shell_exec("hostname");
    $panelVersion = $_SESSION['settings']['version'];
    $apacheVersion = apache_get_version();
    $phpVersion = $version[0];
    
	$memUsed = shell_exec("free -m | awk 'NR==2{print $3}'");
	$memTotal = shell_exec("free -m | awk 'NR==2{print $2}'");
	$freemem = ($memUsed / $memTotal) * 100;

	$storage = shell_exec("df -H | grep -vE '^Filesystem|tmpfs|cdrom' | awk '{ print $5}' | awk 'NR==1{print $1}'");
	$storage = explode("%", $storage);
    $storage = $storage[0];

    $homeDirectory = $_SERVER['DOCUMENT_ROOT'];

    $DB = DB::getInstance();
    $sql = "SHOW databases";
    $DB->query($sql);
    $databasesCount = $DB->rowCount();

?>