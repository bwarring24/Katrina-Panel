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

        if($DB->rowCount() >= 1){
            $validated = false;
            echo "<span class='error'>{lang:register-userExists}</span>";
        }
        
        if($validated){
            $sql = "INSERT INTO users (firstname, lastname, password, email) VALUES ('$firstName', '$lastName','$password', '$email')";
            
            if ($DB->query($sql)) {
                echo "<span class='success'>{lang:register-success}</span>";
            } else {
                echo "Error: " . $sql . "<br>" . $DB->error();
            }
        }
        
        $DB->close();
    }
?>