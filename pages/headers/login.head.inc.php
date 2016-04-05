<?php
    // Get our instances
    $Auth = Auth::getInstance();
    $DB = DB::getInstance();

    if(isset($_POST['btnSubmit'])){
        $_SESSION['email'] = $DB->sanatize($_POST['email']);
        $_SESSION['password'] = $DB->sanatize($_POST['password']);
        
        $Auth->authenticate();
        
        if($Auth->isAuthenticated()){
            // We are authenticated. Lets relocate to top secret pages
          //  header('Location:dashboard/');
        }else{
            $error .= "{lang:coreError-401}";
        }
    }
    
    echo "<div class='error'>".$error."</div>";
    
    if($Auth->isAuthenticated()){
        // User doesn't need to login just redirect to the top secret pages
      //  header('Location:dashboard/');
    }
?>