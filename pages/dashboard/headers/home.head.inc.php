<?php 

$val = $_POST['val']['val'];
$userID = $_SESSION['userID'];

if($userID != ""){
	echo "<input type='hidden' id='userID' value='".$userID."' />";
}


if($val != ""){
	// Lets require our config file again because that is just life...
	//include("/Katrina-Panel/includes/config.inc.php");
 	$db['host'] = "server.blakewarrington.net"; // Server IP of the database
    $db['user'] = "gthorson"; // The user who has access to the database
    $db['pass'] = "meowmeowKittyKat"; // The password for the above user
    $db['name'] = "kp"; // The name of our database
	
	$conn = mysqli_connect( $db['host'], $db['user'], $db['pass'], $db['name']);

    // Check connection
    if (!$conn) {
   		die("Connection failed: " . mysqli_connect_error());
   	}  
	   
	$userID = $_POST['val']['userID'];
	$data = str_replace('"', "", $val);
	$data = explode('&', $data);
	$customViewExists = false;
	$customModViewExists = false;
	
	$sql = "SELECT * FROM `categoryView` WHERE userID='".$userID."'";	
	$result = $conn->query($sql);
	$categoryViewCount = mysqli_num_rows($result);
	
	$sql = "SELECT * FROM `moduleView` WHERE userID='".$userID."'";
	$result = $conn->query($sql);
	$moduleViewCount = mysqli_num_rows($result);
	
	$i = 0;

	if($rowCcategoryViewCountount > 1){
		$customViewExists = true;
	}
	
	if($moduleViewCount > 1){
		$customModViewExists = true;
	}

	foreach ($data as $value) {
		$category = explode('=', $value);
		if($category[0] == "mod[]"){
			if($customModViewExists){
				// Custom view already exists lets do some complicated stuff
				$sql = "UPDATE `moduleView` SET moduleName='$category[1]' WHERE priority='$i' AND userID='$userID'";
				$conn->query($sql);
			}else{
				// No custom view created yet so go on with life			
				$sql = "INSERT INTO `moduleView` (userID, moduleName, priority) VALUES('$userID', '$category[1]', '$i')";
				$conn->query($sql);		
			}
		}else{
			if($category == ""){
				// Ignore this one...
			}else{
				if($customViewExists){
					// Custom view already exists lets do some complicated stuff
					$sql = "UPDATE `categoryView` SET categoryName='$category[1]' WHERE priority='$i' AND userID='$userID'";
					$conn->query($sql);
				}else{
					// No custom view created yet so go on with life			
					$sql = "INSERT INTO `categoryView` (userID, categoryName, priority) VALUES('$userID', '$category[1]', '$i')";
					$conn->query($sql);
				}
			}
		}
		$i++;	
	}
	
	$conn->close();
}else{
	// We know we didn't try to post and it's safe to run this code
	
	$DB = DB::getInstance();
	$User = User::getInstance();
	
	$userID = $User->getId();
	
	$sql = "SELECT * FROM `categoryView` WHERE userID='$userID' ORDER BY 'priority' ASC";
	
	$DB->query($sql);
	$categories = $DB->allRecords();
	
	if($DB->rowCount() < 1){
		// Choose default view
		$sql = "SELECT * FROM `categoryView` WHERE userID='0' ORDER BY 'priority' ASC";

		$DB->query($sql);
		$categories = $DB->allRecords();
	}
	
	
	$sql = "SELECT * FROM `moduleView` WHERE userID='$userID' ORDER BY 'priority' ASC";
	
	$DB->query($sql);
	$modules = $DB->allRecords();	
	
	if($DB->rowCount < 1){
		// Choose default view
		
		$sql = "SELECT * FROM `moduleView` WHERE userID='0' ORDER BY 'priority' ASC";
	
		$DB->query($sql);
		$modules = $DB->allRecords();
	}
	
	$output = "";
	
	foreach($categories as $category){
		$output .= '<div class="modules" id="cat-'.$category["categoryName"].'">
        <div class="headerBar">
            <img class="leftRivet" src="theme/default/login/images/rivets.png" alt="" />
                        
            <div class="headerTitle">
                {lang:home-'.$category["categoryName"].'}
            </div>
                        
            <img class="rightRivet" src="theme/default/login/images/rivets.png" alt="" />
        </div>
        <div class="sortable">';
		
		foreach($modules as $module){
			
			if($module['categoryName'] == $category['categoryName']){
				$output .= '<div class="module" id="mod-'.$module["moduleName"].'">
					<a href="?p='.$module["moduleName"].'">
						<img class="icon" src="theme/default/main/images/modules/'.$module["moduleName"].'.png" alt="{lang:mod-user}" />
						<div class="caption">{lang:mod-'.$module["moduleName"].'}</div>
					</a>
				</div>';
			}
		}
		
		$output .= "</div></div>";
	}
}


?>