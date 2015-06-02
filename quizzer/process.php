<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Check to see if score is set
if(!isset($_SESSION['score'])) {
	$_SESSION['score'] = 0;
}
if($_POST) {
	$number = $_POST['number'];
	$selected = $_POST['choice'];
	$next = $number+1;

	//get total questions
	$query = "select * from questions";
	$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $result->num_rows;
	
	//Get correct choice
	$query = "select * from choices where question_number = $number and is_correct = 1";
	
	//Results	
	$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	
	//get row
	$row = $result->fetch_assoc();

	//set correct choice
	$correct = $row['id'];

	//compare
	if($correct == $selected) {
		$_SESSION['score']++;
	}

	if($number == $total) {
		header("Location: final.php");
		exit();
	}
	else {
		header("Location: question.php?n=".$next);
	}
	
}
?>
