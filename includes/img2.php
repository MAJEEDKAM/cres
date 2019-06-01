<?php
require_once('config.php');
if(isset($_GET['id']){
$img=$_GET['id'];
$sql = "SELECT name FROM mednew Where Application_No = '$img' ;

									";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
echo '<img alt="no image" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" width="1600" height="1200">';
}

?>