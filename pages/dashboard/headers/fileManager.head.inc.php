<?php

    $homeDirectory = $_SERVER['DOCUMENT_ROOT'];
    $homeDir = $_SERVER['DOCUMENT_ROOT'];
    
    if(isset($_POST['submit'])){
        // go ahead and delete things
        $choice = $_POST['submit'];
        
        if($choice == "Yes"){
            $contentFullPath = $_SESSION['fullPath'];
            
            foreach($contentFullPath as $path){
                shell_exec("rm -rf " . $path);
            }
        }
    }
    
    
    if(isset($_POST['delete'])){
        $items = $_POST['delete'];
        $items = explode('&', $items);
        $itemFullPath = $items[0];
        $items = $items[1];
        $_SESSION['items'] = $items;
        $_SESSION['fullPath'] = $itemFullPath;
        $deleteItems = "";
        
        foreach($items as $item){
            $deleteItems .= $item . "; ";
        }
        
        $confirmDelete = '<form method="POST"><div class="row">
            <div class="frmLabel"><h2>{lang:fileManager-question} '.$deleteItems.'</h2></div>
            <div class="frmInput"><h3>
                <input type="submit" name="submit" value="{lang:fileManager-yes}" />
                <input type="submit" name="submit" value="{lang:fileManager-no}" />
            </h3></div>
        </div></form>
        ';
    }
    
    
    if(isset($_GET['f'])){
        $homeDirectory = $_GET['f'];
    }
    
    $contents = scandir($homeDirectory);
    $contentSize = "";
    $contentPermission = "";
    $contentFullPath = "";
    $contentDate = "";
    $contentUID = "";
    $contentGID = "";
    $output = "";
    $navigation = explode('/', $homeDirectory);
    $navigationURL = "";
    $builderPath = "";
    
    // Build the navigation.... oh joy
    foreach($navigation as $navItem){
        $homeDir = explode('/', $homeDir);
            
        if($navItem != $homeDir[0] && $navItem != $homeDir[1]){
            $builderPath .= $navItem . "/";
            $navigationURL .= '<a href="?p=fileManager&f=/'.$builderPath.'">'.$navItem.'</a> > ';
        }    
    }
    
    
    foreach($contents as $content){
        $image = false;
        $folder = false;
        
        if($content[0] == '.'){
            // Ignore these
        }else{
            $contentFullPath = $homeDirectory . "/" . $content;
            
            $contentSize = filesize($contentFullPath);
            $contentPermission = substr(decoct( fileperms($contentFullPath) ), 2);
            $contentDate = date ("F d Y H:i:s.", filemtime($contentFullPath));
            $contentUID = shell_exec("ls -l ".$homeDirectory." | grep ".$content." | awk '{print $3}'");
            $contentGID = shell_exec("ls -l ".$homeDirectory." | grep ".$content." | awk '{print $4}'");
            $cleanURL = str_replace("/var/www/Katrina-Panel/", "", $contentFullPath);
            
            if(is_dir($contentFullPath)){
                // Is a directory, take note         
                $folder = true;
            }else if(is_array(getimagesize($contentFullPath))){
                $image = true;
            }else{
                $image = false;
                
            }
        
            if($folder){
                // Is folder 
                $output .= '<tr class="tableStyle">
                            <td><a href="?p=fileManager&f='.$contentFullPath.'"><img src="theme/default/main/images/modules/folder.png" class="icon" alt="folder" /></a></td>
                            <td><a href="?p=fileManager&f='.$contentFullPath.'">'.$content.'</a></td>
                            <td>'.$contentSize.'</td>
                            <td>'.$contentPermission.'</td>
                            <td>'.$contentDate.'</td>
                            <td>'.$contentUID.'</td>
                            <td>'.$contentGID.'</td>
                            <td>Rename</td>
                            <td><input type="checkbox" name="delete[]" value="'.$contentFullPath.'&'.$content.'" /></td>
                            </tr>';
            }else if($image){
                // Is Image
                $output .= '<tr class="tableStyle">
                            <td><a href="'.$cleanURL.'"><img src="theme/default/main/images/modules/image.png" class="icon" alt="image" /></a></td>
                            <td><a href="'.$cleanURL.'">'.$content.'</a></td>
                            <td>'.$contentSize.'</td>
                            <td>'.$contentPermission.'</td>
                            <td>'.$contentDate.'</td>
                            <td>'.$contentUID.'</td>
                            <td>'.$contentGID.'</td>
                            <td>Rename</td>
                            <td><input type="checkbox" name="delete[]" value="'.$contentFullPath.'&'.$content.'" /></td>
                            </tr>';
            }else{
                // Treat as plain text
                $output .= '<tr class="tableStyle">
                            <td><a href="'.$cleanURL.'"><img src="theme/default/main/images/modules/file.png" class="icon" alt="image" /></a></td>
                            <td><a href="'.$cleanURL.'">'.$content.'</a></td>
                            <td>'.$contentSize.'</td>
                            <td>'.$contentPermission.'</td>
                            <td>'.$contentDate.'</td>
                            <td>'.$contentUID.'</td>
                            <td>'.$contentGID.'</td>
                            <td>Rename</td>
                            <td><input type="checkbox" name="delete[]" value="'.$contentFullPath.'&'.$content.'" /></td>
                            </tr>';
            }
        }
    }
?>