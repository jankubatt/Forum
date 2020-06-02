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
		        		<a class="nav-link" href="predmetydfaghisafhgughsfaghiasfihgasfighasifghighsafghsafighsafghsaf.php">Předměty</a>
		      		</li>
				    <li class="nav-item active">
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
    				    <div class="card mb-3">
                            <div class="card-body">
                                <div id="table">
                                <table style="width:100%">
                                <h1>Lichej tejden</h1>
                                <tr>
                                    <th>CJL Mádle S122</th>
                                    <th>MAT Rys S129</th>
                                    <th>FYZ Balín S327</th>
                                    <th>WEA Haberzettl S420</th>
                                    <th>WEA Haberzettl S420</th>
                                    <th>ZPV Neustupa S221</th>
                                    <th>TEV Dostál SHAL</th>
                                </tr>
                                <tr>
                                    <th>TVY Balín S327</th>
                                    <th>CJL Mádle S122</th>
                                    <th>ANJ Kršňáková S425</th>
                                    <th>DEJ Horáček S131</th>
                                    <th>NEJ2 Horáček S419</th>
                                    <th>OBN Dostál S322</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>DAS Balín C24</th>
                                    <th>DAS Balín C24</th>
                                    <th>ANJ Kršňáková S425</th>
                                    <th>MAT Rys S129</th>
                                    <th>TEV Dostál SKRY</th>
                                    <th>ALG Beneš S225</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>CJL Mádle S122</th>
                                    <th>DEJ Horáček S131</th>
                                    <th>NEJ2 Horáček S419</th>
                                    <th>MAT Rys S129</th>
                                    <th>FYZ Balín S327</th>
                                    <th>APS Rácová S421</th>
                                    <th>APS Rácová S421</th>
                                </tr>
                                <tr>
                                    <th>ANJ Kršňáková S425</th>
                                    <th>ALG Beneš S225</th>
                                    <th>PVA Pokorný S420</th>
                                    <th>PVA Pokorný S420</th>
                                    <th>MAT Rys S129</th>
                                    <th>TVY Balín S327</th>
                                    <th></th>
                                </tr>
                                </table>
                                <br><br>
                                <table style="width:100%">
                                <h1>Sudej tejden</h1>
                                <tr>
                                    <th>FYZ Balín S327</th>
                                    <th>CJL Mádle S122</th>
                                    <th>ANJ Kršňáková S425</th>
                                    <th>NEJ2 Horáček S419</th>
                                    <th>TEV Dostál SHAL</th>
                                    <th>MAT Rys S129</th>
                                    <th>ZPV Neustupa S221</th>
                                </tr>
                                <tr>
                                    <th>MAT Rys S129</th>
                                    <th>ALG Beneš S225</th>
                                    <th>ANJ Kršňáková S425</th>
                                    <th>NEJ2 Horáček S419</th>
                                    <th>TVY Balín S327</th>
                                    <th>PVA Pokorný S420</th>
                                    <th>PVA Pokorný S420</th>
                                </tr>
                                <tr>
                                    <th>CJL Mádle S122</th>
                                    <th>DEJ Horáček S131</th>
                                    <th>WEA Haberzettl S420</th>
                                    <th>WEA Haberzettl S420</th>
                                    <th>MAT Rys S129</th>
                                    <th>OBN Dostál S222</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>DAS Balín C24</th>
                                    <th>DAS Balín C24</th>
                                    <th>TEV Dostál SKRY</th>
                                    <th>ALG Beneš S225</th>
                                    <th>FYZ Balín S327</th>
                                    <th>ANJ Kršňáková S425</th>
                                    <th>CJL Mádle S122</th>
                                </tr>
                                <tr>
                                    <th>APS Rácová S421</th>
                                    <th>APS Rácová S421</th>
                                    <th>TVY Balín C3</th>
                                    <th>TVY Balín C3</th>
                                    <th>MAT Rys S129</th>
                                    <th>TVY Balín S327</th>
                                    <th>DEJ Horáček S131</th>
                                </tr>
                                </table>
                                </div>
                            </div>
                        </div>
				    </div>
			    </div>
			    
			    <?php
    				        include_once 'script/conn.php';    //make connection
    				        $today = date("Y-m-d");
                            $week = date("Y-m-d", strtotime($today." +1 Weeks"));
                            
                            
    				        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            
                            
                            
                            $sql = "SELECT COUNT(*) FROM work WHERE isHanded = 0";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $work = $row["COUNT(*)"];
                                }
                                
                            }
                            
                            
                            
                            $sql = "SELECT COUNT(*) FROM work WHERE isHanded = 0 AND duedate < '$week'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $weekWork = $row["COUNT(*)"];
                                }
                                
                            }
                            
                            $sql = "SELECT COUNT(*) FROM work WHERE isHanded = 0 AND duedate = '$today'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $todayWork = $row["COUNT(*)"];
                                }
                                
                            }
                            
                            $conn->close();
    				    ?>

    			<div class="col-lg-3 sidebar">
    			    <div class="mt-3">
    			        <div class="card mb-3">
                            <div class="card-body">
                                <h3 class="card-title">Informace!</h3>
                                <h5 class="mb-5">Dnes je: <?php echo date("d.m") ?></h5>
                                <h5 id="txt"></h5>
                                <h6 class="text-muted">Úkoly do dneška: <?php echo $todayWork; ?></h6>
                                <h6 class="text-muted">Úkoly tento týden: <?php echo $weekWork; ?></h6>
                                <h6 class="text-muted">Úkoly všechny: <?php echo $work; ?></h6>
                            </div>
                        </div>
    			    </div>

    			</div>
                    
    		</div>
    		
        </div>
        
	</body>
</html>