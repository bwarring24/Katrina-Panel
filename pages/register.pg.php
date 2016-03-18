<form name="login" method="POST" >
  <div id="login">
    <h1>{lang:register-title}</h1>
  </div>

  <div id="line">
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-firstName}</h2></div>
    <div class="frmInput"><h2><input id="txtFirstName" type="text" name="firstName" pattern="^[a-zA-Z]+$" placeholder="i.e. John" oninput="check(this)" size="20" required /><span class="error"></span></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-lastName}</h2></div>
    <div class="frmInput"><h2><input id="txtLastName" type="text" name="lastName" pattern="^[a-zA-Z]+$" placeholder="i.e. Doe" oninput="check(this)" size="20" required/><span class="error"></span></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:register-email}</h2></div>
    <div class="frmInput"><h2><input id="txtEmail" type="email" name="email" placeholder="johndoe@gmail.com" size="20" required/><span class="error"></span></h2></div>
  </div>

  <div id="login">
    <div class="frmLabel"><h2>{lang:login-password}</h2></div>
    <div class="frmInput"><h2><input id="txtPass" type="password" name="password" pattern="^(?=.*[A-Za-z\W])(?=.*\d)[A-Za-z\d]{5,}$" placeholder="i.e. abcdef123" oninput="check(this)" size="20" required/><span class="error"></span></h2></div>
  </div>

  <div id="line">
  </div>

  <br />

  <div align="center">
    <input id="btn" type="submit" name="btnSubmit" value="{lang:register-submit}" />
  </div>
</form>
