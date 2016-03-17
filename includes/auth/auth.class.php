<?php

class Auth{
    private static $instance;
    
    public function __construct(){
        
    }
    
    // Generates the hash for the given input
    public function hashPass($pass, $salt){
        return hash('ripemd160', $pass.$salt);
    }
    
    // Pulls the has for the user from the database
    public function getHash($id){
        
    }
    
    // Compares the two hashes
    // return true or false
    public function compareHash(){
        
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