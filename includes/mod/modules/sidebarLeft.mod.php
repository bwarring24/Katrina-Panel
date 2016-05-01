<?php
    include("includes/mod/modules/headers/sidebarLeft.head.inc.php");
?>

<div id="sidebarLeft">
    <div class="sidebarContainer">
        <div class="header">
            <div id="leftRivet">
                <img src="theme/default/main/images/rivets.png" alt="" />
            </div>
                                
            <div id="rightRivet">
                <img src="theme/default/main/images/rivets.png" alt="" />
            </div>
                                
            <div id="headerTitle">
                {lang:mod-statistics}
            </div>
        </div>
            
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-serverNameTitle}</h3></div>
            <div class="description"><?php echo $serverName; ?></div>
        </div>
            
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-panelVersionTitle}</h3></div>
            <div class="description"><?php echo $panelVersion; ?></div>
        </div>

        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-OSTitle}</h3></div>
            <div class="description"><?php echo $os; ?></div>
        </div>

        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-apacheVersionTitle}</h3></div>
            <div class="description"><?php echo $apacheVersion; ?></div>
        </div>

        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-phpVersionTitle}</h3></div>
            <div class="description"><?php echo $phpVersion; ?></div>
        </div>
        
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-ipTitle}</h3></div>
            <div class="description"><?php echo $publicIP; ?></div>
        </div>
           
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-homeDirectoryTitle}</h3></div>
            <div class="description"><?php echo $homeDirectory; ?></div>
        </div>

        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-storageTitle}</h3></div>
            <div class="description"><meter value="<?php echo $storage; ?>" min="0"  max="100"></meter> <?php echo $storage; ?>%</div>
        </div>
            
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-memoryTitle}</h3></div>
            <div class="description"><meter value="<?php echo $freemem; ?>" min="0"  max="100"></meter> <?php echo $freemem; ?>%</div>
        </div>
            
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-cpuLoadTitle}</h3></div>
            <div class="description"><meter value="<?php echo $loadAverage; ?>" min="0"  max="100"></meter> <?php echo $loadAverage; ?>%</div>
        </div>
                    
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-sqlDatabasesTitle}</h3></div>
            <div class="description"><?php echo $databasesCount; ?> / &infin;</div>
        </div>
            
        <div class="row rowStyle">
            <div class="label" align="left"><h3>{lang:mod-uptimeTitle}</h3></div>
            <div class="description"><?php echo $uptime; ?> days</div>
        </div>
    </div>
</div>