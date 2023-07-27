<?php 
	// require 'connect.php';
	$mysqli = new mysqli ('localhost', 'f0661629_comment', '7lu5aSHr', 'f0661629_comment');


	$name = $_POST['name'];
	$com = $_POST['comment'];


	print_r('$name', '$com')
	 $sql = "INSERT INTO form ('id', 'name', 'comment')
	 VALUES ('$name', '$com')";

	  if ($mysqli->query($sql) === TRUE) {
	  	echo "Все окей!";
	  }
	  else {
	  	echo "пздц";
	  }

	// $mysqli = close();
?>