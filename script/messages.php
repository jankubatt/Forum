<?php
include('../script/conn.php'); // Includuje údaje pro připojení k DB

$sql = "SELECT * FROM `chat` ORDER BY `time` DESC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
  echo "<textarea rows=\"14\" cols=\"42\">";
  while ($row = mysqli_fetch_assoc($result)) {
    echo htmlspecialchars($row['name'] . ": " . $row['message'] . "\n");;
  }
  echo "</textarea>";
}
?>
