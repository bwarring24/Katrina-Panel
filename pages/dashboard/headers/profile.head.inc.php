<?php

    $User = User::getInstance();

    $email = $User->email
    $fname = $User->getFirstName()
    $lname = $User->getLastName()
    $lastIP = $User->getLastIP()
    $creationDate = $User->getCreationDate()
    $lastLogin = $User->getLastLogin()

?>