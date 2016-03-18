<form name="login" method="POST" >
  <div id="login">
    <h1>{lang:register-title}</h1>
  </div>

  <div id="line">
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-firstName}</h2></div>
    <div class="frmInput"><h2><input id="txtFirstName" type="text" name="firstName" pattern="^[a-zA-Z]+$" placeholder="i.e. Bill" oninput="check(this)" size="20" required /></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-lastName}</h2></div>
    <div class="frmInput"><h2><input id="txtLastName" type="text" name="lastName" pattern="^[a-zA-Z]+$" placeholder="i.e. Gates" oninput="check(this)" size="20" required/></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-email}</h2></div>
    <div class="frmInput"><h2><input id="txtEmail" type="email" name="email" placeholder="billgates@microsoft.com" size="20" required/></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:login-password}</h2></div>
    <div class="frmInput"><h2><input id="txtPass" type="password" name="password" pattern="^([a-zA-Z0-9_+-,.:\/!@#$%\^*();\\|<>'?=-])+$" placeholder="i.e. I<3Microsoft" oninput="check(this)" size="20" required/></h2></div>
  </div>

  <div id="line">
  </div>

  <br />

  <div align="center">
    <input id="btn" type="submit" name="btnSubmit" value="{lang:register-submit}" />
  </div>
</form>
