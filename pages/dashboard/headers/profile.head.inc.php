<?php
    $email = $_SESSION['email'];
    $DB = DB::getInstance();
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    $DB->query($sql);
    $row = $DB->singleRecord();

    $fname = $row['firstName'];
    $lname = $row['lastName'];
    $lastIP = $row['lastIP'];
    $creationDate = $row['creationDate'];
    $lastLogin = $row['lastLogin'];

?>