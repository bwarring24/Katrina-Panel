<?php
class User{
	private static $instance;

	private $id = NULL;
	private $email = NULL;
	private $firstName = NULL;
	private $lastName = NULL;
	private $fullName = NULL;
	private $password = NULL;
	private $salt = NULL;
	private $language = NULL;
	private $lastIP = NULL;
	private $lastLogin = NULL;
	private $createdDate = NULL;

	function __construct(){ 

	}

	public function getId(){
		return $this->id;
	}	
	public function getEmail(){
		return $this->email;
	}
	public function getFirstName(){
		return $this->firstName;
	}
	public function getLastName(){
		return $this->lastName;
	}
	public function getFullName(){
		return $this->fullName;
	}
	public function getPassword(){
		return $this->password;
	}
	public function getSalt(){
		return $this->salt;
	}	
	public function getLanguage(){
		return $this->language;
	}
	public function getlastIP(){
		return $this->lastIP;
	}
	public function getLastLogin(){
		return $this->lastLogin;
	}
	public function getCreatedDate(){
		return $this->createdDate;
	}


	// Updates user information
	public function updateInfo($row){
		foreach ($row as $key => $value){
			$this->$key = $value;
		}
		$this->fullName = $this->firstName . ' ' . $this->lastName;
	}

    // Gets the current instance of the class
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new User();
        }
        
        return self::$instance;
    }
}
?>