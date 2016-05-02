
{mod:sidebarLeft}

{mod:sidebarRight}

<div class="content">
<h1>{lang:createGroup-title}</h1>

<div class="line">
</div>

<?php
    echo $error;
    echo $msg;
?>

<form name="frmChange" method="post" action="">
    <div class="row">
      <div class="frmLabel"><h2>{lang:createGroup-groupName}</h2></div>
      <div class="frmInput"><h2><input type="text" name="groupName" class="txtField" Placeholder="{lang:createGroup-groupNamePlaceholder}"/></h2></div>
    </div>
    
    <div class="row">
      <div class="frmLabel"><h2>{lang:createGroup-permissions}</h2></div>
      <div class="frmInput"><?php echo $chkBoxes; ?></div>
    </div>

    <div id="line">
    </div>

    <br />

    <div align="center">
      <input id="btn" type="submit" name="btnSubmit" value="Submit" />
    </div>
</form>
</div>