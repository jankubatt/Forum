<?php
	session_start();    //start session
    include_once 'conn.php';    //make connection
    
    //storing input from form
	$solution = $_POST["solution"];
    $id = $_SESSION["solId"];

    $sql = "UPDATE work SET isDone='1' WHERE uid='$id';";
    mysqli_query($conn, $sql);
    
    $sql = "UPDATE work SET solution='$solution' WHERE uid='$id';";
    mysqli_query($conn, $sql);
    
    $uploaddir = '../uploads/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    
    header("Location: ../homedasfkljhlfajhsdůafslhjnkůfasdiholůfasliohůofihůasoihafůoafhisůpoijuhúfas+654fg4dfs564g56sd.php");
    
	$conn->close(); //close connection
?>