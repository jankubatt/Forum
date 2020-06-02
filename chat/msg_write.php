<?php
	session_start();
	include('../script/conn.php');
	$jmeno = $_SESSION['user'];
	$zprava = $_POST['message']; 

	mysqli_query($conn, "INSERT INTO `chat`(`name`, `message`,`time`) VALUES ('$jmeno','$zprava',Now())");
	header("Location: ../home.php");
?>