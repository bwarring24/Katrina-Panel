<?php 
$DB = DB::getInstance();
$User = User::getInstance();

$userID = $User->getId();

echo 'user ID: '. $userID;

//testing post output
$data = explode('&',$_POST['data']);
foreach ($data as $value) {
	echo ' post data: '. $value;
}
/*
foreach($data as $key => $value){
	$category = substr($value, 0, strpos($value, "[]"));
	$id = substr($value,strpos(value,"=") + 1);
	$sql = "UPDATE 'moduleView' SET priority = $key WHERE userID = $userID AND id = $id);";
	$DB->query($sql);
}
*/
?>