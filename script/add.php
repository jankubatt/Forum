<?php
session_start();    //start session
include_once 'conn.php';    //make connection

//storing input from form
$title = htmlspecialchars($_POST["title"], ENT_QUOTES, 'UTF-8');
$_SESSION["addTitle"] = $title;
$desc = htmlspecialchars($_POST["desc"], ENT_QUOTES, 'UTF-8');
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
		$file = "../posts.log";
		$current = file_get_contents($file);
		$txt = "\n----------------" . "\nUID: " .$row["uid"] . "\nID: " . $row["id"] . "\nTITLE: " . $row["title"] . "\nDESC: " .$row["description"] . "\n SUB: " .$row["subject"] . "\nDATE: " .$row["date"] . "\nDUE: " .$row["duedate"] . "\nUSER: " .$row["user"];
		$current .= $txt;
		file_put_contents($file, $current);
	}
}

header("Location: ../home.php");

$conn->close(); //close connection
?>
