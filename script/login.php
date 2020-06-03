<?php
	include_once 'conn.php';
  session_start();    //start session

	$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
	$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
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
		$_SESSION["error"] = "";
		exit();
	}

    if (!password_verify($password, $passwordCheck)) {
				$_SESSION["error"] = "Wrong password";
				header("Location: ../index.php");
				exit();
    }

	$conn->close();
?>
