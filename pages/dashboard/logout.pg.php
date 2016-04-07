<?php
    $Auth = Auth::getInstance();
    
    $Auth->deAuth();
    
    header('Location:' . $_SERVER['HTTP_REFERER']);
?>


<h1>You are being logged out. </h1>