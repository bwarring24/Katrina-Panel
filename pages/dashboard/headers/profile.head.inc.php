<?php

    $User = User::getInstance();

    $email = $User->getEmail();
    $fname = $User->getFirstName();
    $lname = $User->getLastName();
    $lastIP = $User->getLastIP();
    $creationDate = $User->getCreationDate();
    $lastLogin = $User->getLastLogin();

?>