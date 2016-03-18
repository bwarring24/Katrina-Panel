<?php

class Auth{
    private static $instance;
    
    public function __construct(){
        
    }
    
    // Generates the hash for the given input
    public function hashPass($pass, $salt){
        return crypt($pass, '$6$rounds=5000$'.$salt.'$');
    }
    
    // Pulls the has for the user from the database
    public function getHash($id){
        
    }
    
    // Compares the two hashes
    // return true or false
    public function compareHash(){
        
    }
    
    public function genSalt(){
        return mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
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