<?php
session_start();
if(!(isset($_SESSION["error"]))) {
	$_SESSION["error"] = "";
}

$_SESSION["user"] = "";
?>



<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
	<meta charset="utf-8">
	<meta name="author" content="Jan Kubat">
  <meta name="description" content="simple lightweight forum">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: lightblue;">
	<div class="display-1 text-center mb-5">Welcome!</div>
	<div class="container">
		<form action="script/login.php" method="POST">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<button type="submit" class="btn btn-primary" name=""submit2>Login</button>
			<button class="btn bg-primary mb-1 text-white float-right"><a class="text-white" href="register.php">Register</a></button>
		</form>
		<br>
		<p><?php echo $_SESSION["error"]; ?></p>
	</div>

	<div style="height: 200px;"></div>

  <footer class="text-center text-muted">
    <p>&copy; Jan Kubat 2020</p>
  </footer>
</body>
</html>
