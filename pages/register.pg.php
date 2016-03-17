
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
    <h2>{lang:register-firstName}<input id="txtFirstName" type="text" name="firstName" pattern ="^[a-zA-Z]+$" placeholder = "i.e. John" oninput = "check(this)" size="20" required /><span class="error">* <?php echo $firstNameErr;?></span></h2>
  </div>

  <div id="login">
    <h2>{lang:register-lastName}<input id="txtLastName" type="text" name="lastName" pattern = "^[a-zA-Z]+$" placeholder = "i.e. Doe" oninput = "check(this)" size="20" required/><span class="error">* <?php echo $lastNameErr;?></span></h2>
  </div>

  <div id="login">
    <h2>{lang:register-email}<input id="txtEmail" type="email" name="email" placeholder = "johndoe@gmail.com" size="20" required/><span class="error">* <?php echo $emailErr;?></span></h2>

  </div>

  <div id="login">
    <h2>{lang:login-password}<input id="txtPass" type="password" name="password" pattern = "^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$" placeholder="i.e. abcdef123" oninput="check(this)" size="20" required/><span class="error">* <?php echo $passErr;?></span></h2>
  </div>

  <div id="line">
  </div>

  <br />

  <div align="center">
    <input id="btn" type="submit" name="btnSubmit" value="{lang:register-submit}" />
  </div>
</form>
<script>
function check(input) {
    if(input.validity.patternMismatch){
      if(input.type ==  "password"){
        input.setCustomValidity("minimum 5 character, 1 number and 1 letter.");
      }
      if(input.type == "text"){
        input.setCustomValidity("Only alphabetical characters allowed.")
      }
  }
    else {
        input.setCustomValidity("");
    }
}

</script>
