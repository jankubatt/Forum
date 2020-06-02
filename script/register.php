<?php
	session_start();    //start session
    include_once 'conn.php';    //make connection
    $_SESSION['error'] = "";
    
    //storing input from form
	$username = $_POST['username'];
    $nickname = $_POST['lmao'];
	$password = $_POST['pwd']; 
	$passwordCheck = $_POST['pwdCfm'];
	$hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT); //hash the password
	
	$sqlSelect = "SELECT username FROM users WHERE username = '$username'"; //select username from table users where username is equal to current username
	$result = mysqli_query($conn, $sqlSelect);  //query
	$resultCheck = mysqli_num_rows($result);    //check
	$usernameCheck = "";    //creating variable in case our query has 0 results
    
    //store username to username check
	if($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$usernameCheck = $row['username'];
		}
	}
    
    //input check
	if ($username == "") {
	    $_SESSION["error"] = "Invalid Username";
	    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
		exit();
	}
	
	if ($usernameCheck == $username) {
	    $_SESSION["error"] = "Username exists";
		header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
		exit();
	}
	
	if ($password == "") {
	    $_SESSION["error"] = "Invalid password";
	    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
		exit();
	}
	
	if ($password != $passwordCheck) {
	    $_SESSION["error"] = "Passwords aren't matching";
	    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
		exit();
	}

	if ($password == $passwordCheck) {
		header("Location: ../index.php");
	}

	$_SESSION["usr"] = $username;   //username in session is equal to username here
	$vkey = md5(time().$username);  //generate verification key

	$sql = "INSERT INTO users (username, password, nickname ) VALUES ('$username','$hash','$nickname')";
    mysqli_query($conn, $sql);
    
	$conn->close(); //close connection
?>