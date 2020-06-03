<?php
	session_start();
	include('../script/conn.php');
	$name = $_SESSION['user'];
	$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
	stripslashes($_POST['message']);

	mysqli_query($conn, "INSERT INTO `chat`(`name`, `message`,`time`) VALUES ('$name','$message',Now())");
	header("Location: ../home.php");
?>
