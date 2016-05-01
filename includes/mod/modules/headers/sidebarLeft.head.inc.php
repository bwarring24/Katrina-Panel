<?php

    $version = explode('~', phpversion()); 
    $version = explode('-', $version[0]); 


    $serverName = shell_exec("hostname");
    $panelVersion = $_SESSION['settings']['version'];
    $apacheVersion = explode('/', apache_get_version());
    $apacheVersion = explode(' ', $apacheVersion[1]);
    $apacheVersion = $apacheVersion[0];
    $phpVersion = $version[0];
    
	$memUsed = shell_exec("free -m | awk 'NR==2{print $3}'");
	$memTotal = shell_exec("free -m | awk 'NR==2{print $2}'");
	$freemem = round(($memUsed / $memTotal) * 100);

	$storage = shell_exec("df -H | grep -vE '^Filesystem|tmpfs|cdrom' | awk '{ print $5}' | awk 'NR==1{print $1}'");
	$storage = explode("%", $storage);
    $storage = $storage[0];

    $homeDirectory = $_SERVER['DOCUMENT_ROOT'];

    $DB = DB::getInstance();
    $sql = "SHOW databases";
    $DB->query($sql);
    $databasesCount = $DB->rowCount();
    
    $os = shell_exec("lsb_release -a | grep Distributor | awk '{print $3}'");
    $os = $os . " " . shell_exec("lsb_release -a | grep Release | awk '{print $2}'");
    
    $uptime = shell_exec("uptime | awk '{print $3}'");
    
    $loadAverage = shell_exec("uptime | awk '{print $12}'") * 100;
    
    $publicIP = $_SERVER['REMOTE_ADDR'];
?>