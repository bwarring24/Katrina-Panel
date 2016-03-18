<form name="login" method="POST" >
  <div id="login">
    <h1>{lang:register-title}</h1>
  </div>

  <div id="line">
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-firstName}</h2></div>
    <div class="frmInput"><h2><input id="txtFirstName" type="text" name="firstName" pattern="^[a-zA-Z]+$" placeholder="i.e. Bill" oninput="check(this)" size="20" required /><span class="error">*</h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-lastName}</h2></div>
    <div class="frmInput"><h2><input id="txtLastName" type="text" name="lastName" pattern="^[a-zA-Z]+$" placeholder="i.e. Gates" oninput="check(this)" size="20" required/><span class="error">*</span></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-email}</h2></div>
    <div class="frmInput"><h2><input id="txtEmail" type="email" name="email" placeholder="bgates@microsoft.com" size="20" required/><span class="error">*</span></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-password}</h2></div>
    <div class="frmInput"><h2><input id="txtPass" type="password" name="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$" placeholder="i.e. I<3Microsoft" oninput="check(this)" size="20" required/><span class="error">*</span></h2></div>
  </div>
  
  <div id="login">
    <div class="frmLabel"><h2>{lang:register-retypePassword}</h2></div>
    <div class="frmInput"><h2><input id="txtPass" type="password" name="password2" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$" placeholder="i.e. I<3Microsoft" oninput="check(this)" size="20" required/><span class="error">*</span></h2></div>
  </div>

  <div id="line">
  </div>

  <br />

  <div align="center">
    <input id="btn" type="submit" name="btnSubmit" value="{lang:register-submit}" />
  </div>
</form>
