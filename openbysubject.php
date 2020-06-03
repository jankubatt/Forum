<?php
session_start();

if(!(isset($_SESSION["user"]))) {
  header("Location: index.php");
  exit();
}

$chatUsername = $_SESSION["user"];

$subject = $_GET["subject"];
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/forum.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="startTime()">
  <nav class="navbar navbar-expand-md navbar-light bg-light navigace w-100">
    <a class="navbar-brand" href="home.php">Forum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item active">
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
          $today = date("Y-m-d");
          $week = date("Y-m-d", strtotime($today." +1 Weeks"));

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM work WHERE subject='$subject' ORDER BY id DESC";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $string = $row["description"];

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
                Add solution
                </button></a>";
              }

              if ($row["isDone"] == 1) {
                echo"    <a href='showSolution.php?id=". $row["uid"] ."'><button class='btn bg-success mb-1 text-white'>
                Show solution
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
              <h3 class="card-title">Info!</h3>
              <h5 class="mb-5">Today is: <?php echo date("d.m") ?></h5>
              <h5 id="txt"></h5>
              <h6 class="text-muted">Homework today: <?php echo $todayWork; ?></h6>
              <h6 class="text-muted">Homework this week: <?php echo $weekWork; ?></h6>
              <h6 class="text-muted">Homework all: <?php echo $work; ?></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
  </div>
</body>
</html>
