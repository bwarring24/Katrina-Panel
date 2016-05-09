<?php
    $DB = DB::getInstance();
    
    if(isset($_POST['submit'])){
        $groups = $_POST['group'];

        $i = 0;
        
        foreach($groups as $group){
            $group2 = explode('&', $group);
            $groupName = $group2[0];
            $id = $group2[1];

            if($id != ""){
                $sql = "UPDATE `users` SET groupName='".$groupName."' WHERE id='".$id."'";           
                $DB->query($sql);
                
                $sql = "DELETE FROM `moduleView` WHERE userID='".$id."'";
                $DB->query($sql);
                
                $sql = "DELETE FROM `categoryView` WHERE userID='".$id."'";
                $DB->query($sql);
            }
           
            $i++;
        }
    }
    
    
    $sql = "SELECT * FROM `users`";
    
    $DB->query($sql);
    $result = $DB->allRecords();

    $sql = "SELECT * FROM `groups`";
    $DB->query($sql);
    $result2 = $DB->allRecords();
    
    
    $data = "";
    
    foreach($result as $user){
        $groups = "";
        $groupMatch = false;
        foreach($result2 as $group){
            if($user['groupName'] == $group['name']){
                $groups .= '<option value="'.$group['name'].'&'.$user['id'].'" selected>'.$group['name'].'</option>';
                $groupMatch = true;
            }else{
                $groups .= '<option value="'.$group['name'].'&'.$user['id'].'">'.$group['name'].'</option>';    
            }
        }
        
        if(!$groupMatch){
            $groups = '<option value="" selected></option>' . $groups;  
        }
        
            
        $data .= '<tr class="tableStyle">
                  <td>'.$user['firstName'].' '.$user['lastName'].'</td>
                  <td>'.$user['email'].'</td>
                  <td>'.$user['language'].'</td>
                  <td>'.$user['lastIP'].'</td>
                  <td>'.$user['lastLogin'].'</td>
                  <td>'.$user['creationDate'].'</td>
                  <td><select name="group[]">'.$groups.'</select></td></tr>';
    }
?>