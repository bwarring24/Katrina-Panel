<?php
///////////////////////////////////
// lang.class.php v1             //
//                               //
// Date Created: 03/09/16        //
// Last Modified: 03/09/16       //
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
        $this->lang = $settings['language'];
        
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
        if(preg_match_all("/{(lang:[^{]*)}/i", $strng, $array)){
            foreach($array as $key => $value){
                echo $value;
            }
        }   
    }    
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new lang();
        }
        
        return self::$instance;
    }
}

?>