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
    }

    public function connect(){
        // Create connection
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
        
        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }    
    
    public function query($sql){
        $this->connect();
        
        if ($this->result = mysqli_query($this->conn, $sql)) {
            return true;
        }
        
        return false;
    }
    
    public function rowCount(){
        return mysqli_num_rows($this->result); 
    }
    
    public function singleRecord(){
        $this->Record = mysql_fetch_array($this->result);
        $stat = is_array($this->Record);
        return $stat;
    }
    
    public function nextRecord(){
        
    }
    
    public function error(){
        return mysqli_error($this->conn);
    }
    
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
            echo "NEW INSTANCE";
            self::$instance = new DB();
        }
        
        return self::$instance;
    }
}