<?php
	include_once 'conn.php';
    session_start();    //start session

	$username = $_POST['username'];    
	$password = $_POST['password'];
	$_SESSION["user"] = $username;
	$passwordCheck = "";   
	
	$sql = "SELECT password FROM users WHERE username = '$username'";  
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);    
    
	if($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$passwordCheck = $row['password'];
		}
	}
    
	if (password_verify($password, $passwordCheck)) {
		header("Location: ../home.php");
		exit();
	}
	
    if (!password_verify($password, $passwordCheck)) {
		header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
		exit();
    }
	
	$conn->close();
?>