<?php

class DB{
    private static $instance;

    private $conn = null;    
    private $host = null;
    private $user = null;
    private $pass = null;
    private $name = null;
    private $result = null;
    private $record = null;
    private $CoreError;

    
    function __construct(){
        // Lets require our config file again because that is just life...
        require("includes/config.inc.php");
        
        $this->host = $db['host'];
        $this->user = $db['user'];
        $this->pass = $db['pass'];
        $this->name = $db['name'];
        
        $this->connect();
    }
    
    // Create teh MySQLi connection
    public function connect(){
        // Create connection
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
        
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }    
    
    // Execute query
    public function query($sql){       
        if ($this->result = mysqli_query($this->conn, $sql)) {
            return true;
        }
        
        return false;
    }
    
    // Return the row count from the previous query
    public function rowCount(){
        return mysqli_num_rows($this->result); 
    }
    
    // Fetch a single record from the last query
    public function singleRecord(){
        $this->Record = mysql_fetch_array($this->result);
        $stat = is_array($this->Record);
        return $stat;
    }
    
    // Grab the next record from the previous query
    public function nextRecord(){
        
    }
    
    // Sanatize given string to protect against MySQL injections
    public function sanatize($string){
        return mysqli_real_escape_string($this->conn, stripslashes($string));
    }
    
    // Return the error message if one had occured
    public function error(){
        return mysqli_error($this->conn);
    }
    
    // Cleanup our connection and close it
    public function close(){
        mysqli_close($this->conn);
        $this->conn = null;    
        $this->host = null;
        $this->user = null;
        $this->pass = null;
        $this->name = null;
    }
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new DB();
        }
        
        return self::$instance;
    }
}