<form name="login" method="POST">
    <div id="login">
        <h1>{lang:login-title}</h1>
    </div>
        
    <div id="line">
    </div>
     
    <div id="login">
        <h2>{lang:login-username}<input id="txtUser" type="text" name="username" size="20" /></h2>
    </div>
        
    <div id="login">
        <h2>{lang:login-password}<input id="txtPass" type="password" name="password" size="20" /></h2>
    </div>
        
    <div id="line">
    </div>
    
    <br />
    
    <div align="center">
        <input id="btn" type="submit" name="btnSubmit" value="{lang:login-submit}" />
        
        <br />
    
        <a href="?p=register">{lang:login-createAccount}</a>
    </div>
</form>