<?php
    $validated = true;

    if (isset($_POST['btnSubmit'])) {
        $error = null;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

            if (empty($_POST["firstName"])) {
                $error .= "Password is required\n";
            } else {
            $name = $_POST["password"];
            if (!preg_match("/^([a-zA-Z0-9_+-,.:\/!@&#$%\^*();\\|<>'?=-])+$/",$name)) {
                $error .= "Password must be minimum 5 characters long with at least 1 alphabet and 1 number\n";
            }
        }
        }



        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $DB = DB::getInstance();

        $sql = "SELECT * FROM users WHERE email='".$email."'";
        $DB->query($sql);

        if($DB->rowCount() >= 1){
            $validated = false;
            $error .= "<div class='error'>{lang:register-userExists}</div>\n";
        }

        if(!empty($error)){
            $validated = false;
            echo $error;
        }

        if($validated){
            $sql = "INSERT INTO users (firstname, lastname, password, email) VALUES ('$firstName', '$lastName','$password', '$email')";

            if ($DB->query($sql)) {
                echo "<div class='success'>{lang:register-success}</div>";
            } else {
                echo "Error: " . $sql . "<br>" . $DB->error();
            }
        }

        $DB->close();
    }
?>
