<?php
///////////////////////////////////
// page.class.php v1                //
//                               //
// Date Created: 03/15/16        //
// Last Modified: 03/15/16       //
// Contact: Blake Warrington     //
// Email: bwarring24@gmail.com   //
///////////////////////////////////

class Page{
    private static $instance;
    
    private $Lang, $Auth, $User;
    private $page = null;
    private $pageFullPath = null;
    
    function __construct(){
        $this->Lang = Lang::getInstance();
        $this->Auth = Auth::getInstance();
        
        if($this->Auth->isAuthenticated()){
            // User is logged in
        }else{
            // User isn't logged in
            
            if(isset($_GET['p'])){
                $page = $_GET['p'];
                
                if(file_exists("pages/" .$page. ".pg.php")){
                    // Page exists so we can set the class var now
                    $this->page = $page;
                    $this->pageFullPath = "pages/" .$page. ".ph.php";
                }else{
                    // Page doesnt exist for un-athenticated users; Redirect to login\
                    $this->page = "login";
                    $this->pageFullPath = "pages/login.pg.php";
                }
            }else{
                // No page request specified so lets default to the login page
                $this->page = "login";
                $this->pageFullPath = "pages/login.pg.php";
            }
        }
    }
    
    public function execPage()
	{
		$oldOutput = ob_get_clean();
		ob_start();
		include $this->pageFullPath;
		$myContent = ob_get_clean();
		ob_start();
		$myContent = $this->Lang->replaceBlock($myContent);
		echo $oldOutput;
		return $myContent;
	}
    
    public function getPage(){
        return $this->page;
    }
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Page();
        }
        
        return self::$instance;
    }
}

?>