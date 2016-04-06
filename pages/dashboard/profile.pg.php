<?php
$email=$_SESSION['email'];
$DB = DB::getInstance();
$sql = "SELECT * FROM users WHERE email='".$email."'";
$DB->query($sql);
$row = $DB->singleRecord();

$fname=$row['firstName'];
$lname=$row['lastName'];
$date=$row['creationDate'];

?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
  </tr>
  <tr>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $fname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $lname ?></td>
  </tr>

  <tr>
    <td valign="top"><div align="left">Address:</div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Account Created: </div></td>
    <td valign="top"><?php echo $date ?></td>
  </tr>
</table>
