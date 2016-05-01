<?php
///////////////////////////////////
// en.lang.php v1                //
//                               //
// Date Created: 03/09/16        //
// Last Modified: 04/06/16       //
// Contact: Blake Warrington     //
// Email: bwarring24@gmail.com   //
///////////////////////////////////


// Core Errors
$langPack['coreError'][400] = "The request cannot be completed; malformed request syntax.";
$langPack['coreError'][401] = "The username/password that was entered is incorrect";
$langPack['coreError'][403] = "You do not have the permission to view this page.";
$langPack['coreError'][404] = "The resource requested could not be found.";
$langPack['coreError'][100] = "Only letters and white space allowed";
$langPack['coreError'][101] = "Invalid email format";
$langPack['coreError'][102] = "Password must be minimum 5 characters long with at least 1 alphabet and 1 number\n";


// Login Pack
$langPack['login']['pageTitle'] = "Login - Katrina Panel";
$langPack['login']['title'] = "Login";
$langPack['login']['email'] = "Email";
$langPack['login']['password'] = "Password";
$langPack['login']['submit'] = "Login";
$langPack['login']['logoutMsg'] = "You have been logged out.";
$langPack['login']['errorUserPass'] = "The username or password provided is incorrect";
$langPack['login']['errorMaxAttemps'] = "You have reached the maximum number of attempts to login";
$langPack['login']['createAccount'] = "Create an Account";


// Reigster Pack
$langPack['register']['pageTitle'] = "Register - Katrina Panel";
$langPack['register']['title'] = "Register";
$langPack['register']['firstName'] = "First Name";
$langPack['register']['lastName'] = "Last Name";
$langPack['register']['email'] = "Email";
$langPack['register']['password'] = "Password";
$langPack['register']['retypePassword'] = "Retype Password";
$langPack['register']['submit'] = "Create Account";
$langPack['register']['success'] = "Successful Registration!";
$langPack['register']['userExists'] = "Email is already registered";
$langPack['register']['firstNamePlaceholder'] = "i.e. Bill";
$langPack['register']['lastNamePlaceholder'] = "i.e. Gates";
$langPack['register']['emailPlaceholder'] = "bgates@microsoft.com";
$langPack['register']['pass1Placeholder'] = "i.e. I<3Microsoft";
$langPack['register']['pass2Placeholder'] = "i.e. I<3Microsoft";
$langPack['register']['firstNameRequired'] = "First name is required";
$langPack['register']['lastNameRequired'] = "Last name is required";
$langPack['register']['emailRequired'] = "Email is required";
$langPack['register']['passRequired'] = "Password is required";
$langPack['register']['passRetype'] = "Must retype password";
$langPack['register']['passDoesNotMatch'] = "Passwords do not match";


// Home Pack
$langPack['home']['pageTitle'] = "Dashboard - Katrina Panel";
$langPack['home']['title'] = "Dashboard";
$langPack['home']['userModules'] = "User Modules";
$langPack['home']['fileModules'] = "File Modules";
$langPack['home']['packages'] = "Packages";
$langPack['home']['thirdPartyPackages'] = "Third Party Packages";
$langPack['home']['logs'] = "Logs";
$langPack['home']['databases'] = "Databases";

//Profile
$langPack['profile']['pageTitle'] = "Profile - Katrina Panel";
$langPack['profile']['title'] = "Profile Information";
$langPack['profile']['firstName'] = "First Name";
$langPack['profile']['lastName'] = "Last Name";
$langPack['profile']['email'] = "Email";
$langPack['profile']['creationDate'] = "Account Created";
$langPack['profile']['lastIP'] = "Last IP";
$langPack['profile']['lastLogin'] = "Last Login";
$langPack['profile']['delete'] = "Delete Account";
$langPack['profile']['change'] = "Change Password";


// Delete Pack
$langPack['deleteAccount']['pageTitle'] = "Delete Account - Katrina Panel";
$langPack['deleteAccount']['title'] = "Delete Account";
$langPack['deleteAccount']['question'] = "Are you sure you want to delete your account?";
$langPack['deleteAccount']['yes'] = "Yes, delete it.";
$langPack['deleteAccount']['no'] = "No, take me back!";
$langPack['deleteAccount']['success'] = "Account successfully deleted!";


// Change Password Pack
$langPack['changePassword']['pageTitle'] = "Change Password - Katrina Panel";
$langPack['changePassword']['title'] = "Change Password";
$langPack['changePassword']['incorrectPassword'] = "Current password is incorrect.";
$langPack['changePassword']['success'] = "Password successfully changed!";


//Logout Pack
$langPack['logout']['pageTitle'] = "Logout - Katrina Panel";
$langPack['logout']['title'] = "Logout";
$langPack['logout']['description'] = "You are being logged out of the system.";
$langPack['logout']['manual'] = "Click here if you are not re-directed automatically";


// Modules Pack
$langPack['mod']['user'] = "User";
$langPack['mod']['userAdd'] = "Add User";
$langPack['mod']['userDelete'] = "Delete User";
$langPack['mod']['passwordProtect'] = "Password Protect";
$langPack['mod']['errorPages'] = "Error Pages";
$langPack['mod']['fileManager'] = "File Manager";
$langPack['mod']['statistics'] = "Statistics";
$langPack['mod']['account'] = "Account";
$langPack['mod']['serverNameTitle'] = "Server Name";
$langPack['mod']['panelVersionTitle'] = "Panel Version";
$langPack['mod']['apacheVersionTitle'] = "Apache Version";
$langPack['mod']['phpVersionTitle'] = "PHP Version";
$langPack['mod']['nameTitle'] = "Name";
$langPack['mod']['viewProfile'] = "View Profile";
$langPack['mod']['emailTitle'] = "Email";
$langPack['mod']['logout'] = "Logout!";
$langPack['mod']['databases'] = "Databases";
$langPack['mod']['groupDelete'] = "Delete Group";
$langPack['mod']['groupCreate'] = "Create Group";
$langPack['mod']['phpMyAdmin'] = "phpMyAdmin";
$langPack['mod']['database'] = "Database";
$langPack['mod']['logs'] - "Logs";
$langPack['mod']['pageHits'] = "Page Hits";
$langPack['mod']['bandwidth'] = "Bandwidth";
$langPack['mod']['errorLog'] = "Error Log";
$langPack['mod']['rawLog'] = "Raw Log";
$langPack['mod']['shortcuts'] = "Shortcuts";
$langPack['mod']['group'] = "Group";
$langPack['mod']['homeDirectoryTitle'] = "Home Directory";
$langPack['mod']['storageTitle'] = "Disk Space";
$langPack['mod']['sqlDatabasesTitle'] = "SQL Databases";
$langPack['mod']['memoryTitle'] = "RAM";
$langPack['mod']['OSTitle'] = "Operating System";
$langPack['mod']['uptimeTitle'] = "Uptime";
$langPack['mod']['cpuLoadTitle'] = "Average Load";
$langPack['mod']['ipTitle'] = "Public IP";

// Create Group pack
$langPack['createGroup']['title'] = "Create Group";
$langPack['createGroup']['groupNamePlaceholder'] = "Group Name";
?>