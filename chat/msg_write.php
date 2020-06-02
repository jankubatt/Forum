<?php
	session_start();
	include('../script/conn.php');
	$jmeno = $_SESSION['user'];
	$zprava = $_POST['zprava']; 

	mysqli_query($conn, "INSERT INTO `chat`(`jmeno`, `zprava`,`cas`) VALUES ('$jmeno','$zprava',Now())");
	header("Location: ../homedasfkljhlfajhsdůafslhjnkůfasdiholůfasliohůofihůasoihafůoafhisůpoijuhúfas%2B654fg4dfs564g56sd.php");
?>