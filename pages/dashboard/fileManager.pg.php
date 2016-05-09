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

    <div class="row">
        <div class="frmLabel"><h2>{lang:fileManager-deleteAction}</h2></div>
        <div class="frmInput"><h3><input type="submit" value="{lang:fileManager-deleteItem}" /></h3></div>
    </div>