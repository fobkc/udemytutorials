<?php
include 'database.php';

//check if form submitted
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($conn, $_POST['user']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);
	
	//set timezone
	date_default_timezone_set('America/New_York');
	$time = date('h:i:s a',time());
	
	if(!isset($user) || $user == '' || !isset($message) || $message == '') {
		$error = "Please fill in your name and a message";
		header("Location: index.php?error=".urlencode($error));
		exit();
	}
	else {
		$query = "insert into shouts(user, message, time) values ('$user', '$message', '$time')";
		if(!mysqli_query($conn,$query)){
			die('Error: '.mysqli_error($conn));
		}
		else {
			header("Location: index.php");
			exit();
		}
	}
}
?>
