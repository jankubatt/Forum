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
	    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
        }
        </script>
		<title>FSA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/fsa.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style>
		    #table{
		        border: 2px solid black;
		        padding: 5px;
		    }
		    th{
		        border: 2px solid black;
		        padding: 1px;
		    }
		</style>
	</head>

	<body onload="startTime()">
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
		        		<a class="nav-link active" href="predmetydfaghisafhgughsfaghiasfihgasfighasifghighsafghsafighsafghsaf.php">Předměty</a>
		      		</li>
				    <li class="nav-item">
				    	<a class="nav-link" href="rozvrhasdfghjklkjhgfdsasdertyhjmnbvcxsdfg.php">Rozvrh</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" href="rankingflahoihgagkjdsgnsjkshgoshg.php">Ranking</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link" href="addoirhtabsghkjerhghwerjrgblejdbglkjerhwoirgbjkdfdlghoerhg.php">Přidej</a>
				    </li>
		    	</ul>
			</div>
		</nav>

        <div class="container-fluid">
            <div class="row">
    			<div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">CJL</h5>
                            <p class="card-text">Čeština</p>
                            <a href="openbysubject.php?subject=CJL" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">MAT</h5>
                            <p class="card-text">Matika</p>
                            <a href="openbysubject.php?subject=MAT" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">FYZ</h5>
                            <p class="card-text">Fyzika</p>
                            <a href="openbysubject.php?subject=FYZ" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">WEA</h5>
                            <p class="card-text">Webovky</p>
                            <a href="openbysubject.php?subject=WEA" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">ZPV</h5>
                            <p class="card-text">Základy přírodních věd</p>
                            <a href="openbysubject.php?subject=ZPV" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">TVY</h5>
                            <p class="card-text">Technické vybavení</p>
                            <a href="openbysubject.php?subject=TVY" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">ANJ</h5>
                            <p class="card-text">Angličtina</p>
                            <a href="openbysubject.php?subject=ANJ" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">ALG</h5>
                            <p class="card-text">Algoritmizace</p>
                            <a href="openbysubject.php?subject=ALG" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">DEJ</h5>
                            <p class="card-text">Dějepis</p>
                            <a href="openbysubject.php?subject=DEJ" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">NEJ</h5>
                            <p class="card-text">Němčina</p>
                            <a href="openbysubject.php?subject=NEJ" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
    		</div>
    		<div class="row">
    			<div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">APS</h5>
                            <p class="card-text">Aplikační software</p>
                            <a href="openbysubject.php?subject=APS" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">PVA</h5>
                            <p class="card-text">Programování</p>
                            <a href="openbysubject.php?subject=PVA" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">OBN</h5>
                            <p class="card-text">Občanka</p>
                            <a href="openbysubject.php?subject=OBN" class="btn btn-primary">Úkoly</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Třídní věci</h5>
                            <p class="card-text">Přihlášky, platby, události...</p>
                            <a href="openbysubject.php?subject=Trida" class="btn btn-primary">Přejít</a>
                          </div>
                        </div>
				    </div>
			    </div>
			    <div class="col">
    				<div class="mt-3">
    				    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Věci chábrů</h5>
                            <p class="card-text">Na koho si dát pozor, atd...</p>
                            <a href="openbysubject.php?subject=Chabri" class="btn btn-primary">Přejít</a>
                          </div>
                        </div>
				    </div>
			    </div>
    		</div>
        </div>
	</body>
</html>