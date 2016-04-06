<form name="login" method="POST" >
  <div class="login">
    <h1>{lang:register-title}</h1>
  </div>

  <div id="line">
  </div>

  <div class="login">
    <div class="frmLabel"><h2>{lang:register-firstName}</h2></div>
    <div class="frmInput"><h2><input id="txtFirstName" type="text" name="firstName" pattern="^[a-zA-Z]+$" placeholder="{lang:register-firstNamePlaceholder}" oninput="check(this)" size="20" required /><span class="required">*</h2></div>
  </div>

  <div class="login">
    <div class="frmLabel"><h2>{lang:register-lastName}</h2></div>
    <div class="frmInput"><h2><input id="txtLastName" type="text" name="lastName" pattern="^[a-zA-Z]+$" placeholder="{lang:register-lastNamePlaceholder}" oninput="check(this)" size="20" required/><span class="required">*</span></h2></div>
  </div>

  <div class="login">
    <div class="frmLabel"><h2>{lang:register-email}</h2></div>
    <div class="frmInput"><h2><input id="txtEmail" type="email" name="email" placeholder="{lang:register-emailPlaceholder}" size="20" required/><span class="required">*</span></h2></div>
  </div>

  <div class="login">
    <div class="frmLabel"><h2>{lang:register-password}</h2></div>
    <div class="frmInput"><h2><input id="txtPass" type="password" name="password" pattern="^([a-zA-Z0-9_+-,.:\/!@#$%\^*();\\|<>'?=-])+$" placeholder="{lang:register-pass1Placeholder}" oninput="check(this)" size="20" required/><span class="required">*</span></h2></div>
  </div>
  
  <div class="login">
    <div class="frmLabel"><h2>{lang:register-retypePassword}</h2></div>
    <div class="frmInput"><h2><input id="txtPass" type="password" name="password2" pattern="^([a-zA-Z0-9_+-,.:\/!@#$%\^*();\\|<>'?=-])+$" placeholder="{lang:register-pass2Placeholder}" oninput="check(this)" size="20" required/><span class="required">*</span></h2></div>
  </div>

  <div id="line">
  </div>

  <br />

  <div align="center">
    <input id="btn" type="submit" name="btnSubmit" value="{lang:register-submit}" />
  </div>
</form>
