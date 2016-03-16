<?php
$firstNameErr = $lastNameErr = $emailErr = $passErr =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["firstName"])) {
    $firstNameErr = "Name is required";
  } else {
    $name = $_POST["firstName"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $firstNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["firstName"])) {
      $lastNameErr = "Name is required";
    } else {
      $name = $_POST["lastName"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $lastNameErr = "Only letters and white space allowed";
      }
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["firstName"])) {
      $passErr = "Password is required";
    } else {
      $name = $_POST["password"];
      // check if name only contains letters and whitespace
      if (!preg_match("/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8,20}$/",$name)) {
        $passErr = "Password must be 8 characters long with:
                    \n2 Uppercase letters\n1 Special character\n2 Digits \n3 Lowercase letters";
      }
    }
}

 ?>
