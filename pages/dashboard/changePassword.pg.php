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