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
                    {lang:home-statistics}
                </div>
            </div>
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
                    {lang:home-account}
                </div>
            </div>
        </div>
        
        
        <div id="content">
            {page}
        </div>
        
        <div id="foot">
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