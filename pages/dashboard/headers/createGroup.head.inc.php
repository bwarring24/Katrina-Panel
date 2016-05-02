<?php

    $DB = DB::getInstance();
 
    if(isset($_POST['btnSubmit'])){
        $groupName = $_POST['groupName'];
        $modules = $_POST['modules'];
        $categories = $_POST['categories'];
        $validated = true;
        
        $sql = "SELECT * FROM `groups` WHERE name='".$groupName."'";
        $DB->query($sql);

        if($DB->rowCount() >= 1){
            $validated = false;
            $error .= "{lang:createGroup-groupNameExists}\n";
        }
        
        if($validated){
            // Insert the new group name into the database
            $sql = "INSERT INTO `groups` (name) VALUES('$groupName');";
            $DB->query($sql);
            
            $sql = "";
   
            foreach ($modules as $module) {
                foreach($categories as $category){
                    if($module == $category){
                        break;
                        
                    }
                }
                
                $sql .= "INSERT INTO `groupPermissions` (groupName, categoryName, moduleName) VALUES('$groupName', '$category', '$module');";
                $DB->query($sql);
            }
            
            $msg = "<div class='success'>{lang:createGroup-success}</div>";
            
        }else{
            $error = "<div class='error'>".$error."</div>";
        }
    }
        
    $sql = "SELECT * from `modules` ORDER BY category DESC";
    $DB->query($sql);
    $records = $DB->allRecords();

    $chkBoxes = "";
    $curCategory = "";
    $count = 0;
    foreach($records as $row){
        if($curCategory != $row['category']){
            // Create new category index
            if($count == 0){
                $count++;
            }else{
                $chkBoxes .= '</ul>';
            }
            
            $curCategory = $row['category'];
            $chkBoxes .= '<div class="row"><input type="checkbox" name="categories[]" value="'.$row['category'].'" /> '.$row['category'].'</div><ul>';
        }
        
        
        $chkBoxes .= '<li>';
        $chkBoxes .= '<div class="row"><input type="checkbox" name="modules[]" value="'.$row['name'].'" /> '.$row['prettyName'].' </div>';
        $chkBoxes .= '</li>';
    }
?>