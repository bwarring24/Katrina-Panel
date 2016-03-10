<?php
///////////////////////////////////
// en.lang.php v1                //
//                               //
// Date Created: 03/09/16        //
// Last Modified: 03/09/16       //
// Contact: Blake Warrington     //
// Email: bwarring24@gmail.com   //
///////////////////////////////////

// Core Errors
$langPack['coreError'][400] = "The request cannot be completed; malformed request syntax.";
$langPack['coreError'][401] = "The username/password that was entered is incorrect";
$langPack['coreError'][403] = "You do not have the permission to view this page.";
$langPack['coreError'][404] = "The resource requested could not be found.";

// Login Pack
$langPack['login']['pageTitle'] = "Login - Katrina Panel";
$langPack['login']['title'] = "Login";
$langPack['login']['username'] = "Username";
$langPack['login']['password'] = "Password";
$langPack['login']['submit'] = "Login";
$langPack['login']['logoutMsg'] = "You have been logged out.";
$langPack['login']['errorUserPass'] = "The username or password provided is incorrect";
$langPack['login']['errorMaxAttemps'] = "You have reached the maximum number of attempts to login, please wait approximently" .$setting['maxAttemptTimeout']. "minutes.";

?>