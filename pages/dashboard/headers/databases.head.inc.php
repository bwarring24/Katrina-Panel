<?php
    $DB = DB::getInstance();
    
    $sql = 'SELECT table_schema, 
 sum( data_length + index_length ) / 1024 / 
 1024 "size"
 FROM information_schema.TABLES
 GROUP BY table_schema';
    
    $DB->query($sql);
    $result = $DB->allRecords();
    
    $sql = "SHOW DATABASES";
    $DB->query($sql);
   // $result .= $DB->allRecords();
    
    $data = '<table width="100%" cellpadding="0" cellspacing="0" style="text-align: center;"><thead><tr>
        <th>{lang:database-databaseTitle}</th>
        <th>{lang:database-backupTitle}</th>
        <th>{lang:database-sizeTitle}</th>
        <th>{lang:database-deleteTitle}</th>
        </tr></thead>';
    
    foreach($result as $database){       
        $data .= '<tr class="rowStyle">
                  <td><div class="row">'.$database['table_schema'].'</div></td>
                  <td><a href="">{lang:database-downloadBackup}</a></td>
                  <td>'.$database['size'].' MB</td>
                  <td><input type="checkbox" value="'.$database['table_schema'].'" /></td></tr>';
    }
    
    $data .= '</table>'
    
?>