
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
    <div style="width:500px;">
      <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
      <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
        <tr class="tableheader">
          <td colspan="2">Change Password</td>
        </tr>
        <tr>
          <td width="40%"><label>Current Password</label></td>
          <td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
        </tr>
        <tr>
          <td><label>New Password</label></td>
          <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
        </tr>
        <td><label>Confirm Password</label></td>
        <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
      </tr>
    </table>
  </div>
</form>
</body></html>
