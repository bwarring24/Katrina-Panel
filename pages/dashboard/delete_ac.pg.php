<?php
if (!isset($_SESSION['email'])){
  header('Location: index.php?p=login');
  }

$email = $_SESSION['email'];
$DB = new DB();
$action = isset($_GET['action']) ? $_GET['action'] : "";

if($action=='yes'){
  $sql="DELETE  FROM  users  WHERE  email='$email'";
  if($DB->query($sql)){
    echo "<div class='success'>{lang:delete-success}</div>";
  }
  else{
    echo "<strong> Unable to delete your account.</strong>";
  }
}
?>
<h1>{lang: profile-title}</h1>
<div> Are you sure you want to delete your account?</div>
<button onclick="location.href='index.php?p=delete_ac&action=yes';">Yes, DELETE IT!</button>
<button onclick="location.href='index.php?p=profile';">NO! TAKE ME BACK!</button>
