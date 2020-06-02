
<!DOCTYPE html>
<html>
	<head>
		<title>FSA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/fsa.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="display-1 text-center mb-5">Vítej osrávači</div>

		<form action="script/login.php" method="POST">
			<div class="container">
				<div class="form-group">
			    	<label>Jméno ty kundo</label>
			    	<input type="text" class="form-control" name="username" placeholder="Jo sem to napiš">
			  	</div>
			  	<div class="form-group">
			    	<label>Doufám, že si pamatuješ heslo</label>
			    	<input type="password" class="form-control" name="password" placeholder="Jo sem ty slepá píčo">
			 	</div>
			  	<button type="submit" class="btn btn-primary" name=""submit2>Přejít do nebe</button>
			</div>
		</form>
	</body>
</html>