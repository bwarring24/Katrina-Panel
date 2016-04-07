<?php
    $email = $_SESSION["email"];
    $Auth = Auth::getInstance();
    $DB = DB::getInstance();

    if(isset($_POST['btnSubmit'])) {

        $sql = "SELECT * from users WHERE email='" .$email. "'";
        $salt = $Auth->getSalt($email);
        $newSalt = $Auth->genSalt();
        $password = $Auth->hashPass($DB->sanatize($_POST['currentPassword']), $salt);

        $Auth->authenticate();
        if($Auth->isAuthenticated()) {
            $password2 = $Auth->hashPass($DB->sanatize($_POST['newPassword']), $newSalt);
            $DB->query("UPDATE users set password='" . $password2 . "',salt='" . $newSalt . "' WHERE email='" . $email . "'");
            $message = "Password Changed";
        } else{
            $message = "Current Password is not correct"; 
        }
    }
?>