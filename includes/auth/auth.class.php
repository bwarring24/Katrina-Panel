<?php

class Auth{
    private static $instance;
    
    public function __construct(){
        
    }
    
    public function isAuthenticated(){
        
    }
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Auth();
        }
        
        return self::$instance;
    }
    
}

?>