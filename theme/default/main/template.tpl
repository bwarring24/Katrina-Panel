<!DOCTYPE >
<html>
<head>
    <meta http-equiv="ContetType" content="text/html; charset=utf-8" />
    <title>{lang:pageName-pageTitle}</title>
    <link href="theme/default/main/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <div id="mainContainer">
        <div id="headerBar">
                      
            <div id="leftRivet">
                <img src="theme/default/main/images/rivets.png" alt="" />
            </div>
            
            
            <div id="rightRivet">
                <img src="theme/default/main/images/rivets.png" alt="" />
            </div>
            
            
            <div id="headerTitle">
                Intranet Server
            </div>
            
            
            <div id="search">
                <div id="searchLeft">
                    <img src="theme/default/main/images/searchLeft.png" alt="" />
                </div>
                
                <div id="searchRight">
                    <img src="theme/default/main/images/searchRight.png" alt="" />
                </div>
                
                <div id="searchCenter">
                    <form name="frmSearch" method="GET">
                        <input id="txtQuery type="text" name="query" style="background-color: #7C7B7B; height: 20px; width: 100%; color: #FFFFFF; border: 0px;" />
                    </form>
                </div>
            </div>
            
            <div id="shortcuts">
                <img src="theme/default/main/images/home-icon.png" alt="Home" />
            </div> 
        </div>
        
        <div id="headerBanner">
            <img id="bannerLeft" src="theme/default/main/images/bannerLeft.png" alt="Katrina Panel" />
            <img id="bannerRight" src="theme/default/main/images/bannerRight.png" alt="Katrina Panel" />
        </div>
        
        <div id="sidebarLeft">
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
            
            <div class="c1">
                <div class="row">
                    <div class="label" align="left"><h3>{lang:mod-serverNameTitle}</h3></div>
                    <div class="description">{lang:mod-serverName}</div>
                </div>
            </div>
            
            <div class="c2">
                <div class="row">
                    <div class="label" align="left"><h3>{lang:mod-panelVersionTitle}</h3></div>
                    <div class="description">{lang:mod-panelVersion}</div>
                </div>
            </div>
            
            <div class="c1">
                <div class="row">
                    <div class="label" align="left"><h3>{lang:mod-apacheVersionTitle}</h3></div>
                    <div class="description">{lang:mod-apacheVersion}</div>
                </div>
            </div>
            
            <div class="c2">
                <div class="row">
                    <div class="label" align="left"><h3>{lang:mod-phpVersionTitle}</h3></div>
                    <div class="description">{lang:mod-phpVersion}</div>
                </div>
            </div>
        </div>
        
      
        
        <div id="content">
            {page}
        </div>
        
        
          <div id="sidebarRight">
            <div class="header">
                <div id="leftRivet">
                    <img src="theme/default/main/images/rivets.png" alt="" />
                </div>
                                
                <div id="rightRivet">
                    <img src="theme/default/main/images/rivets.png" alt="" />
                </div>
                                
                <div id="headerTitle">
                    {lang:mod-account}
                </div>
            </div>
            
            <div class="c1">
                <div class="row">
                    <div class="label" align="left"><h3><a href="?p=profile">{lang:mod-viewProfile}</a></h3></div>
                </div>
            </div>
            
            <div class="c2">
                <div class="row">
                    <div class="label" align="left"><h3><a href="?p=shortcuts">{lang:mod-shortcuts}</a></h3></div>
                </div>
            </div>
            
            <div class="c1">
                <div class="row">
                    <div class="label" align="left"><h3><a href="?p=logout">{lang:mod-logout}</a></h3></div>
                </div>
            </div>
        </div>
        
        
        <br />
        <br />
        
        <div id="footer">
            <a href="">KatrinaPanel</a> |
            <a href="">Documentation</a> |
            <a href="index.php?p=logout">Logout</a>
            
            <br />
            
            <div id="copyright">
                This software is provided free under the Creative Commons Open Source License
            </div>
        </div>
    </div>
</body>
</html>