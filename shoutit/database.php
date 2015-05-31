<?php
//connect to MySQL
$servername="52.5.179.80";
$username="guest1";
$password="demoday";
$db="shoutit";
$conn = mysqli_connect($servername, $username, $password, $db);

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed connection: '.mysqli_connect_error();
}
?>
