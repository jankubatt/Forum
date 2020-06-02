
<!DOCTYPE html>
<html>
	<head>
		<title>Forum</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/forum.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="display-1 text-center mb-5">Welcome!</div>

		<form action="script/login.php" method="POST">
			<div class="container">
				<div class="form-group">
			    	<label>Username</label>
			    	<input type="text" class="form-control" name="username">
			  	</div>
			  	<div class="form-group">
			    	<label>Password</label>
			    	<input type="password" class="form-control" name="password">
			 	</div>
			  	<button type="submit" class="btn btn-primary" name=""submit2>Login</button>
			</div>
		</form>
	</body>
</html>