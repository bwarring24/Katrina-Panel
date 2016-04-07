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
$langPack['login']['pageTitle'] = "Inicio de sesión - Panel de Katrina";
$langPack['login']['title'] = "Inicio de sesión";
$langPack['login']['email'] = "Correo electrónico";
$langPack['login']['password'] = "contraseña";
$langPack['login']['submit'] = "Inicio de sesión";
$langPack['login']['errorUserPass'] = "El nombre de usuario o contraseña es incorrecta";
$langPack['login']['errorMaxAttemps'] = "Han alcanzado el número máximo de intentos de login";
$langPack['login']['createAccount'] = "Crear una cuenta";


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
$langPack['mod']['serverName'] = "ARPAnet";
$langPack['mod']['panelVersionTitle'] = "Panel Version";
$langPack['mod']['panelVersion'] = "0.1 (Alpha)";
$langPack['mod']['apacheVersionTitle'] = "Apache Version";
$langPack['mod']['apacheVersion'] = "5.5";
$langPack['mod']['phpVersionTitle'] = "PHP Version";
$langPack['mod']['phpVersion'] = "5.3";
$langPack['mod']['nameTitle'] = "Name";
$langPack['mod']['viewProfile'] = "View Profile";
$langPack['mod']['emailTitle'] = "Email";
$langPack['mod']['logout'] = "Logout!";

?>