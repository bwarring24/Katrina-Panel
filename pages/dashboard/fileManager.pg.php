<h3>{lang:fileManager-title}</h3>

<div class="line">
</div>

<br />

<?php
    echo $navigationURL;
?>

<br />
<br />

<table width="100%" cellspacing="0" cellpading="0" id="fileTable">
    <thead>
        <tr>
            <td>{lang:fileManager-type}</td>
            <td>{lang:fileManager-name}</td>
            <td>{lang:fileManager-size}</td>
            <td>{lang:fileManager-perm}</td>
            <td>{lang:fileManager-date}</td>
            <td>{lang:fileManager-uid}</td>
            <td>{lang:fileManager-gid}</td>
            <td>{lang:fileManager-action}</td>
            <td>{lang:fileManager-select}</td>
        </tr>
    </thead> 
    <?php
        echo $output;
    ?>
</table>