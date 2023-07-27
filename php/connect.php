<?php
	require 'rb.php';
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$con = new mysqli ('localhost', 'f0661629_comment', '7lu5aSHr', 'f0661629_comment');
	R::setup('mysql:host=localhost;dbname=f0661629_comment', 'f0661629_comment', '7lu5aSHr');
	$con->close;

?>