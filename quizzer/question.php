<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
//Set Question number
$number = (int)$_GET['n'];

//get total questions
$query = "select * from questions";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $result->num_rows;

//Get Question
$query = "select * from questions where question_number = $number";
//Get Query results
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

//Get Choices
$query = "select * from choices where question_number = $number";

$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8"  />
    <title>PHP Quizzer </title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  
  <body>
    
    <header>
      
      <div class="container" >
	<h1>PHP Quizzer</h1>
      </div>
      
    </header>
    
    <main>
      <div class="container" >
	<div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
	<p class="question">
		<?php echo $question['text']; ?>
	</p>
	<form method="post" action="process.php">
		<ul class="choices">
			<?php while($row = $choices->fetch_assoc()): ?>
				<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text']; ?></li>
			<?php endwhile; ?>
		</ul>
		<input type="submit" value="Submit" />
		<input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
      
    </main>
    
    <footer>
	    
      <div class="container" >
	Copyright &copy; 2014, PHP Quizzer
      </div>
      
    </footer>
    
  </body>
  
</html>
