<?php
    session_start();
    
    if(!(isset($_SESSION["user"]))) {
        header("Location: index.php");
        exit();
    }
    
    $chatUsername = $_SESSION["user"];
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
		<link rel="icon" href="css/img/fsa.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	</head>

	<body onload="startTime()">
		<nav class="navbar navbar-expand-md navbar-light bg-light navigace w-100">
		  	<a class="navbar-brand" href="homedasfkljhlfajhsdůafslhjnkůfasdiholůfasliohůofihůasoihafůoafhisůpoijuhúfas+654fg4dfs564g56sd.php">Fuck School Always</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item active">
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
    				    <?php
    				        include_once 'script/conn.php';    //make connection
    				        
    				        $user = $_SESSION["user"];
    				        
    				        $sql = "SELECT * FROM users WHERE username = '$user'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $nick = $row["nickname"];
                                }
                                
                            }
                                    
                            $sql = "SELECT COUNT(*) FROM work WHERE user = '$nick'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $workCount = $row["COUNT(*)"];
                                }
                            }
                            
                            $sql = "UPDATE users SET workCount='$workCount' WHERE nickname = '$nick'";
                            mysqli_query($conn, $sql);
    				        
    				        $today = date("Y-m-d");
                            $week = date("Y-m-d", strtotime($today." +1 Weeks"));
                            
                            
    				        if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            
                            $sql = "SELECT * FROM work ORDER BY duedate";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                    $string = $row["description"];
                                    if ($row["duedate"] >= $today) {
                                        if (strlen($string) >= 60) {
                                            $desc = substr($string, 0, 60). "... ";
                                        }
                                        else {
                                            $desc = $string;
                                        }
                                        
                                        $handed = date("Y-m-d", strtotime($row["duedate"]." +1 Days"));
    
                                        $collapse = "collapse" . $row["id"];
                                        $uid = $row['uid'];
                                        $title = $row['title'];
                                        
                                        if ($today >= $handed) {
                                            $sql = "UPDATE work SET isHanded='1' WHERE uid='$uid';";
                                            mysqli_query($conn, $sql);
                                        }
                                        
                                        echo "<a class='text-dark text-decoration-none' href='posts/". $title . $uid .".php?id=". $uid ."'>
                                                <div class='card mb-3'>
                                                    <div class='card-body'>
                                                        <h3 class='float-left d-inline-block'>" . $row["title"] . "</h3></a>
                                                        <h6 class='text-muted float-right d-inline-block'>" . $row["subject"] . "</h6><br><br>
                                                        <h5 class='card-subtitle mb-2 text-muted'>" . $desc . "
                                                
                                                        <button class='btn bg-light mb-1' type='button' data-toggle='collapse' data-target='#". $collapse ."' aria-expanded='false' aria-controls='collapseExample'>
                                                            <i class='fa fa-caret-down'></i>
                                                        </button>";
                                                
                                                        if ($row["isDone"] != 1) {
                                                        echo"    <a href='solution.php?id=". $row["uid"] ."'><button class='btn bg-success mb-1 text-white'>
                                                            Přidat řešení
                                                        </button></a>";
                                                        }
                                                        
                                                        if ($row["isDone"] == 1) {
                                                        echo"    <a href='showSolution.php?id=". $row["uid"] ."'><button class='btn bg-success mb-1 text-white'>
                                                            Zobrazit řešení
                                                        </button></a>";
                                                        }
                                                
                                                    echo "<div class='collapse' id='". $collapse ."'>
                                                            <div class='card' style='width: 70rem;'>
                                                                <div class='card-body'>
                                                                    ". $row["description"] ."
                                                                </div>
                                                            </div>
                                                        </div></h5>
                                                    <h6 class='text-muted float-right d-inline-block'>do " . $row["duedate"] . "</h6>
                                                    <h6 class='text-muted float-left d-inline-block'>od " . $row["user"] . "</h6>
                                                </div>
                                            </div>";
                                    }
                                }
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
    				    
				    </div>
			    </div>

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
                        
                        <div class="card mb-3" style="height:30rem;">
                            <div class="card-body">
                                <h3 class="card-title">Chat</h3>
                                
                                    <script type="text/javascript" src="chat/messages.js"></script>
                                    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                                    <h5 style="height:19rem;" class="card-text chat" id="messages"></h5>
                                    <br><br>
                                    <form action="chat/msg_write.php" method="post">
                                    <input class="form-control d-inline-block" style="width:20rem;" type="text" name="zprava">    
                                    <input class="form-control d-inline-block" style="width:4rem;" type="submit" value="Zmrd">
                                    </form>
                                
                            </div>
                        </div>
    			    </div>
    			</div>
    		</div>
    		<br>
    		<footer class="text-muted text-center">
    		    Tím, že jsi členem této stránky souhlasíš s tím, že úkoly, které jsou zde nebudeš nikam posílat. Tyto úkoly jsou pouze pro členy této stránky. Přeprodávat můžeš pouze vlastní úkoly. Prosím respektuj tuto komunitu.
    		</footer>
        </div>
	</body>
</html>