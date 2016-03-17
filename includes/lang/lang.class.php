<?php
///////////////////////////////////
// lang.class.php v1             //
//                               //
// Date Created: 03/09/16        //
// Last Modified: 03/17/16       //
// Contact: Blake Warrington     //
// Email: bwarring24@gmail.com   //
///////////////////////////////////

class Lang{
    private static $instance;
    private $coreError;
    private $lang;
    private $langPack;
    
    private function __construct(){
        // TODO allow users to change their language via settings
        
        //Temporary variable until user settings override
        require_once("includes/config.inc.php");
        
        $setting['language'] = "en";
        $this->lang = $setting['language'];
        
        if(file_exists("includes/lang/packs/" .$this->lang.".lang.php")){
            // Language pack exists, lets go ahead and load it.
            require_once("includes/lang/packs/" .$this->lang.".lang.php");
            $this->langPack = $langPack;
        }else{
            // Well since we do not have a language that is bad so lets die
            
            // TODO report this error to our coreError reporting mechanism
            
            // Replace error message with coreError Message
            die("Language pack not found. Unsupported language");
        }
    }
    
    public function getLangString($subject, $description){
        return $this->langPack[$subject][$description];
    }
    
    public function replaceBlock($string){
        if(preg_match_all("/{(lang:pageName[^{]*)}/i", $string, $array)){
            $page = null;
            if(isset($_GET['p'])){
                $page = $_GET['p'];
            }else{
                $page = "login";
            }
            
            $array = $array[0];
			$newString = $string;
			foreach($array as $key => $value)
			{
				$newValue = str_replace('{', '', str_replace('}', '', str_replace('lang:', '', $value)));
				$explosion = explode('-', $newValue);
				$subject = $page;
				$option = $explosion[1];
				$newString = str_replace($value, $this->langPack[$subject][$option], $newString);	
			}
			
			$newString = str_replace('{lang}', $this->lang, $newString);
			
			return $newString;
        }
        elseif (preg_match_all("/{(lang:[^{]*)}/i", $string, $array))
		{
			$array = $array[0];
			$newString = $string;
			foreach($array as $key => $value)
			{
				$newValue = str_replace('{', '', str_replace('}', '', str_replace('lang:', '', $value)));
				$explosion = explode('-', $newValue);
				$subject = $explosion[0];
				$option = $explosion[1];
				$newString = str_replace($value, $this->langPack[$subject][$option], $newString);	
			}
			
			$newString = str_replace('{lang}', $this->lang, $newString);
			
			return $newString;
		}
		else
		{
			return $string;
		}  
    }    
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Lang();
        }
        
        return self::$instance;
    }
}

?>