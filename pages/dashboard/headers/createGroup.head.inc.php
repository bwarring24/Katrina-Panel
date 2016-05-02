<?php

    $DB = DB::getInstance();
    
    $sql = "SELECT * from `modules` ORDER BY category DESC";
    $DB->query($sql);
    $records = $DB->allRecords();

    $chkBoxes = "<ul>";
    $curCategory = "";
    $count = 0;
    foreach($records as $row){
        if($curCategory != $row['category']){
            // Create new category index
            if($count == 0){
                $count++;
            }else{
                $chkBoxes .= '</ul><ul>';
            }
            
            $curCategory = $row['category'];
            $chkBoxes .= $row['category'];
        }
        
        
        $chkBoxes .= '<li>';
        $chkBoxes .= '<div class="row"><input type="checkbox" name="modules" value="'.$row['name'].'" /> '.$row['prettyName'].' </div>';
        $chkBoxes .= '</li>';
    }
?>