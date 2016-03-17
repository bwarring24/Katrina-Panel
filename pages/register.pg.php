
<?php
include 'pages/validate.php';

$validated = true;

if(!empty($firstNameErr) || !empty($lastNameErr) || !empty($emailErr) || !empty($passErr)){
    $validated = false;
}

if (isset($_POST['btnSubmit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $DB = DB::getInstance();

    $sql = "SELECT * FROM users WHERE email='".$email."'";
    $DB->query($sql);

    //echo $DB->rowCount();
    if($DB->rowCount() >= 1){
        $validated = false;
    }
    
    if($validated){
         $sql = "INSERT INTO users (firstname, lastname, password, email) VALUES ('$firstName', '$lastName','$password', '$email')";
        
        if ($DB->query($sql)) {
            echo "Successful Registration!";
        } else {
            echo "Error: " . $sql . "<br>" . $DB->error();
        }
    }
    
    $DB->close();
}

?>

<form name="login" method="POST" >
  <div id="login">
    <h1>{lang:register-title}</h1>
  </div>

  <div id="line">
  </div>

  <div id="login">
    <h2>{lang:register-firstName}<input id="txtFirstName" type="text" name="firstName" size="20" /><span class="error">* <?php echo $firstNameErr;?></span></h2>
  </div>

  <div id="login">
    <h2>{lang:register-lastName}<input id="txtLastName" type="text" name="lastName" size="20" /><span class="error">* <?php echo $lastNameErr;?></span></h2>
  </div>

  <div id="login">
    <h2>{lang:register-email}<input id="txtEmail" type="text" name="email" size="20" /><span class="error">* <?php echo $emailErr;?></span></h2>

  </div>

  <div id="login">
    <h2>{lang:login-password}<input id="txtPass" type="password" name="password" size="20" /><span class="error">* <?php echo $passErr;?></span></h2>
  </div>

  <div id="line">
  </div>

  <br />

  <div align="center">
    <input id="btn" type="submit" name="btnSubmit" value="{lang:register-submit}" />
  </div>
</form>