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
  <title>Forum</title>
  <meta charset="utf-8">
  <meta name="author" content="Jan Kubat">
  <meta name="description" content="simple lightweight forum">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="startTime()" style="background-color: lightblue;">
  <nav class="navbar navbar-expand-md navbar-light bg-light navigace w-100">
    <a class="navbar-brand" href="home.php">Forum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="subjects.php">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timetable.php">Timetable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ranking.php">Ranking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add</a>
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

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $id = $_GET["id"];
          $_SESSION["solId"] = $id;
          $sql = "SELECT * FROM work WHERE uid = '$id'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {

              $title = $row['title'];
              $subject = $row['subject'];
              $desc = $row["description"];
              $user = $row["user"];
              $dueDate = $row['duedate'];

              echo "<form action=\"script/addSolution.php\" method=\"POST\">
              <div class=\"container mt-3\">


              <div class=\"form-group\">
              <label for=\"popis\">Solution</label>
              <textarea class=\"form-control\" id=\"reseni\" name=\"solution\" rows=\"10\"></textarea>
              </div>
              <button type=\"submit\" class=\"btn btn-success mt-4\">Add solution</button>
              </div>
              </form>";

            }
          }

          $conn->close();
          ?>

        </div>
      </div>


    </div>
    <br>
  </div>

  <div style="height: 200px;"></div>

  <footer class="text-center text-muted">
    <p>&copy; Jan Kubat 2020</p>
  </footer>
</body>
</html>
