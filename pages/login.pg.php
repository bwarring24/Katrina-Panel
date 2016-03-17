<form name="login" method="POST">
    <div id="login">
        <h1>{lang:login-title}</h1>
    </div>
        
    <div id="line">
    </div>
     
    <div id="login">
        <div class="frmLabel"><h2>{lang:login-username}</h2></div>
        <div class="frmInput"><h2><input id="txtUser" type="text" name="username" size="20" /></h2></div>
    </div>
        
    <div id="login">
        <div class="frmLabel"><h2>{lang:login-password}</h2></div>
        <dic class="frmInput"><h2><input id="txtPass" type="password" name="password" size="20" /></h2></div>
    </div>
        
    <div id="line">
    </div>
    
    <br />
    
    <div align="center">
        <input id="btn" type="submit" name="btnSubmit" value="{lang:login-submit}" />
        <br />
        <br />
    
        <a href="?p=register">{lang:login-createAccount}</a>
    </div>
</form>