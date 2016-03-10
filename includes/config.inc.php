<?php
    $db['host'] = "localhost"; // Server IP of the database
    $db['user'] = ""; // The user who has access to the database
    $db['pass'] = ""; // The password for the above user
    $db['name'] = ""; // The name of our database
    
    $setting['maintenance'] = false; // If set to true, website will be down and a maitnence page will be shown
    $setting['debug'] = true; // If set to true, error reporting will be enabled (a.k.a. debug mode)
    $setting['language'] = "en"; // Sets the default language
    $setting['version'] = "Ver. 0.1 [Pre-Alpha]"; // Sets the version number
    $setting['maxLoginAttempts'] = 10; // Specifies how many times the user can login incorrectly before getting locked out
    $setting['maxLoginAttemptsTimeOut'] = 60; // Specifies the length of the lockout period; Value in minutes
    
    $page['default'] = "Home";    
?>