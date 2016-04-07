
<?php
$email = $_SESSION["email"];
$Auth = Auth::getInstance();
$DB = new DB();

if(count($_POST)>0) {

  $sql = "SELECT * from users WHERE email='" .$email. "'";
  $salt = $Auth->getSalt($email);
  $newSalt = $Auth->genSalt();
  $password = $Auth->hashPass($DB->sanatize($_POST['currentPassword']), $salt);

  $Auth->authenticate();
  if($Auth->isAuthenticated()) {
    $password2 = $Auth->hashPass($DB->sanatize($_POST['newPassword']), $newSalt);
    $DB->query("UPDATE users set password='" . $password2 . "',salt='" . $newSalt . "' WHERE email='" . $email . "'");
    $message = "Password Changed";
  } else $message = "Current Password is not correct";

}
?>

<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
  <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
    <div class="message"><?php if(isset($message)) { echo $message; } ?></div>

    <div id="line">
    </div>

    <div><h2>Change Password</h2></div>

    <div id="login">
      <div class="frmLabel"><h2>Current Password</h2></div>
      <div class="frmInput"><h2><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></h2></div>
    </div>

    <div id="login">
      <div class="frmLabel"><h2>New Password</h2></div>
      <div class="frmInput"><h2><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></h2></div>
    </div>

    <div id="login">
      <div class="frmLabel"><h2>Confirm Password</h2></div>
      <div class="frmInput"><h2><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></h2></div>
    </div>


    <div id="line">
    </div>

    <br />

    <div align="center">
      <input id="btn" type="submit" name="btnSubmit" value="Submit" />
    </div>
</form>
</body></html>
