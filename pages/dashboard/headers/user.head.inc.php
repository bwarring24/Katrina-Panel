<?php
    $DB = DB::getInstance();
    
    $sql = "SELECT * FROM `users`";
    
    $DB->query($sql);
    $result = $DB->allRecords();

    $data = "";
    
    foreach($result as $user){        
        $data .= '<tr class="tableStyle">
                  <td>'.$user['firstName'].' '.$user['lastName'].'</td>
                  <td>'.$user['email'].'</td>
                  <td>'.$user['language'].'</td>
                  <td>'.$user['lastIP'].'</td>
                  <td>'.$user['lastLogin'].'</td>
                  <td>'.$user['emcreationDateail'].'</td>
                  <td>'.$user['groupName'].'</td></tr>';
    }
?>