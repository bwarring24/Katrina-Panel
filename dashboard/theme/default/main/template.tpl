<!DOCTYPE >
<html>
<head>
    <meta http-equiv="ContetType" content="text/html; charset=utf-8" />
    <title>{lang:pageName-pageTitle}</title>
    <link href="theme/default/main/css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <div id="mainContainer">
        <div id="headerBar">
                      
            <div id="leftRivet">
                <img src="theme/default/main/images/rivets.png" alt="" />
            </div>
            
            <div id="headerTitle">
                Intranet Server
            </div>
            
            <div id="shortcuts">
                <a href="dashboard/"><img src="theme/default/main/images/home-icon.gif" alt="" /></a>
            </div>
            
            <div id="search">
                <img src="theme/default/main/images/search-left.png" alt="" />
                <form name="frmSearch" method="POST">
                    <input type="text" name="txtQuery" />
                </form>
                <img src="theme/default/main/images/search-right.png" alt="" />
            </div>
            
            <div id="rightRivet">
                <img src="theme/default/main/images/rivets.png" alt="" />
            </div>
            
        </div>
        
        <div id="headerBanner">
            <img src="theme/default/main/images/banner.png" alt="Katrina Panel" />
        </div>
        
        
        <div id="content">
            {page}
        </div>
        
        <div id="foot">
            <a href="">KatrinaPanel</a> |
            <a href="">Documentation</a> |
            <a href="">Logout</a>
            
            <br />
            
            <div id="copyright">
                This software is provided free under the Creative Commons Open Source License
            </div>
        </div>
    </div>
</body>
</html>