<?php

    $version = explode('~', phpversion()); 
    $version = explode('-', $version[0]); 


    $serverName = shell_exec("hostname");
    $panelVersion = $_SESSION['settings']['version'];
    $apacheVersion = apache_get_version();
    $phpVersion = $version[0];
    


?>