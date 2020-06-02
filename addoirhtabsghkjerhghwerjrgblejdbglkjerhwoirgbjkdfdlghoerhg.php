<?php
    session_start();
    
    if(!(isset($_SESSION["user"]))) {
        header("Location: index.php");
        exit();
    }
?>

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
		<nav class="navbar navbar-expand-md navbar-light bg-light navigace w-100">
		  	<a class="navbar-brand" href="homedasfkljhlfajhsdůafslhjnkůfasdiholůfasliohůofihůasoihafůoafhisůpoijuhúfas+654fg4dfs564g56sd.php">Fuck School Always</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item">
		        	<a class="nav-link" href="homedasfkljhlfajhsdůafslhjnkůfasdiholůfasliohůofihůasoihafůoafhisůpoijuhúfas+654fg4dfs564g56sd.php">Domov</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="predmetydfaghisafhgughsfaghiasfihgasfighasifghighsafghsafighsafghsaf.php">Předměty</a>
		      		</li>
				    <li class="nav-item">
				    	<a class="nav-link" href="rozvrhasdfghjklkjhgfdsasdertyhjmnbvcxsdfg.php">Rozvrh</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" href="rankingflahoihgagkjdsgnsjkshgoshg.php">Ranking</a>
				    </li>
				    <li class="nav-item active">
				    	<a class="nav-link" href="addoirhtabsghkjerhghwerjrgblejdbglkjerhwoirgbjkdfdlghoerhg.php">Přidej</a>
				    </li>
		    	</ul>
			</div>
		</nav>
        
        
        
        <form action="script/add.php" method="POST">
			<div class="container mt-3">
				<div class="form-group">
			    	<label>Nadpis</label>
			    	<input type="text" class="form-control" name="title">
			  	</div>
			  	<div class="form-group" style="width: 5rem;">
			  	    <label>Předmět</label>
			  	    <select class="form-control" name="subject">
                      <option>CJL</option>
                      <option>MAT</option>
                      <option>FYZ</option>
                      <option>WEA</option>
                      <option>ZPV</option>
                      <option>TVY</option>
                      <option>ANJ</option>
                      <option>DEJ</option>
                      <option>NEJ</option>
                      <option>OBN</option>
                      <option>DAS</option>
                      <option>ALG</option>
                      <option>APS</option>
                      <option>PVA</option>
                      <option>Trida</option>
                      <option>Chabri</option>
                    </select>
			  	</div>
			  	<div class="form-group" style="width: 10rem;">
                    <label>Date</label>
                    <input class="form-control" type="date" name="dueDate">
                </div>
			  	<div class="form-group">
                    <label for="popis">Popis</label>
                    <textarea class="form-control" id="popis" name="desc" rows="10"></textarea>
                </div>
                <br>
			  	<button type="submit" class="btn btn-primary mt-4" name=""submit2>Přejít do nebe</button>
			</div>
		</form>
	</body>
</html>