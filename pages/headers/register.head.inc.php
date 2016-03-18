<?php
    $validated = true;

    if (isset($_POST['btnSubmit'])) {
        $error = null;
        
        if (empty($_POST["firstName"])) {
            $error .= "Name is required\n";
        } else {
            $name = $_POST["firstName"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $error .= "Only letters and white space allowed\n";
            }
        }

        if (empty($_POST["firstName"])) {
            $error .= "Name is required\n";
        } else {
            $name = $_POST["lastName"];
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $error .= "Only letters and white space allowed\n";
            }
        }

        if (empty($_POST["email"])) {
            $error .= "Email is required\n";
        } else {
            $email = $_POST["email"];
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error .= "Invalid email format\n";
            }
        }

        if (empty($_POST["password"])) {
            $error .= "Password is required\n";
        } else {
            $pass = $_POST["password"];
            if (!preg_match("/^([a-zA-Z0-9_+-,.:\/!@&#$%\^*();\\|<>'?=-])+$/", $pass)) {
                $error .= "Password must be minimum 5 characters long with at least 1 alphabet and 1 number\n";
            }
        }
            
        if (empty($_POST["password2"])) {
            $error .= "Must retype password\n";
        } else {
            $pass = $_POST["password"];
            $pass2 = $_POST["password2"];
            if($pass != $pass2){
                $error .= "Passwords don't match!";
            }
        }

        // Lets invoke our two class instances since we will need them later
        $Auth = Auth::getInstance();
        $DB = DB::getInstance();
        
        
        $salt = $Auth->genSalt();
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $Auth->hashPass($DB->sanatize($_POST['password']), $salt);
        $password2 = $Auth->hashPass($DB->sanatize($_POST['password']), $salt);
        $email = $_POST['email'];
        $date = date('Y-m-d');
        
        $sql = "SELECT * FROM users WHERE email='".$email."'";
        $DB->query($sql);

        if($DB->rowCount() >= 1){
            $validated = false;
            $error .= "<div class='error'>{lang:register-userExists}</div>\n";
        }

        // Check to see if an errors were reported
        if(!empty($error)){
            $validated = false;
            echo $error;
        }

        // If validated is true we can continue and add the user into the database
        if($validated){
        $sql = "INSERT INTO users (email, firstName, lastName, password, salt, language, sessionID, lastIP, lastLogin, creationDate) VALUES ('$email', '$firstName', '$lastName','$password', '$salt', '', '', '', '', '$date')";

            if ($DB->query($sql)) {
                echo "<div class='success'>{lang:register-success}</div>";
            } else {
                echo "Error: " . $sql . "<br>" . $DB->error();
            }
        }

        // Close our database connection to keep things tidey
        $DB->close();
    }
?>
