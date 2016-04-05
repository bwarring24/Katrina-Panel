<?php

class Auth{
    private static $instance;
    
	private $email = NULL;
	private $password = NULL;
    private $language = NULL;
	private $authenticated = false;
	private $DB = NULL;
    
    public function __construct(){
        $this->DB = DB::getInstance();
        
        $this->authenticate();
    }
    
    public function authenticate(){
        if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
            // User is not yet logged in so don't do anything
        }else{
            $this->email = $_SESSION['email'];
            $this->password = $this->hashPass($_SESSION['password'], $this->getSalt($this->email));
            
            echo "EMAIL: " . $this->email . "<br />";
            echo "PASSWORD: " . $this->password . "<br />";
            echo "SALT: " . $this->getSalt($this->email) . "<br />";
            echo "DATABASE: " . print_r($this->DB->singleRecord());
            
            $sql = "SELECT email, salt, password FROM users WHERE email='".$this->email."'";
            
            $this->DB->query($sql);
            
            $this->authenticated = $this->compareHash($this->DB->singleRecord());
            
            $this->DB->close();
        }
    }
    
    // Generates the hash for the given input
    public function hashPass($pass, $salt){
        return crypt($pass, '$6$rounds=5000$'.$salt.'$');
    }
    
    // Pulls the hash for the user from the database
    public function getHash($email){
        $sql = "SELECT * FROM users WHERE email='".$email."'";
        
        $this->DB->query($sql);
        $row = $this->DB->singleRecord();
        return $row['password'];
        
    }
    
    public function getSalt($email){
        $sql = "SELECT * FROM users WHERE email='".$email."'";
        
        $this->DB->query($sql);
        $row = $this->DB->singleRecord();
        return $row['salt'];
    }
    
    // Compares the two hashes
    // return true or false
    public function compareHash($row){
        if($this->password == $row['password']){
            return true;
        }
        
        return false;
    }
    
    // Create a 16 character random salt
    public function genSalt(){
        return mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
    }
    
    
    public function isAuthenticated(){
        return $this->authenticated;
    }
    
    // Gets the current instance of the class
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Auth();
        }
        
        return self::$instance;
    }
    
}

?>