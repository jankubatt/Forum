<?php
	session_start();    //start session
    include_once 'conn.php';    //make connection
    
    //storing input from form
	$title = $_POST["title"];
	$_SESSION["addTitle"] = $title;
	$desc = $_POST["desc"];
	$subject = $_POST["subject"];
	$dueDate = $_POST["dueDate"];
	$username = $_SESSION["user"];
	$uid = uniqid();
	
	$sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $user = $row["nickname"];
            $workCount = $row["workCount"];
        }
    }
    
	$sql = "INSERT INTO work (title, description, subject, duedate, user, uid) VALUES ('$title','$desc','$subject','$dueDate','$user', '$uid')";
    mysqli_query($conn, $sql);
    
    $sql = "SELECT * FROM work WHERE uid = '$uid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["uid"];
            
            $file = "../posts/" . $title . $uid . ".php";
            $current = file_get_contents($file);
            $txt = $row["id"] . "\n" . $row["title"] . "\n" .$row["description"] . "\n" .$row["subject"] . "\n" .$row["date"] . "\n" .$row["duedate"] . "\n" .$row["user"] . "\n" .$row["uid"];
            $current .= $txt;
            file_put_contents($file, $current);
        }
    }

    
    
    
    header("Location: ../homedasfkljhlfajhsdůafslhjnkůfasdiholůfasliohůofihůasoihafůoafhisůpoijuhúfas+654fg4dfs564g56sd.php");
    
	$conn->close(); //close connection
?>