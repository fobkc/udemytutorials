<?php
//connect to MySQL
$servername="52.5.179.80";
$username="guest1";
$password="demoday";
$db="quizzer";
//$conn = mysqli_connect($servername, $username, $password, $db);

$mysqli = new mysqli($servername, $username, $password, $db);

//Error Handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

