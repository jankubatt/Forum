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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/forum.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body onload="startTime()" onload="setInterval('chat.update()', 1000)">
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

          //storing input from form
          $uid = $_GET["id"];

          $sql = "SELECT * FROM work WHERE uid = '$uid'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $solution = $row["solution"];

              echo "
              <div class='card mb-3'>
              <div class='card-body'>
              <h3 class='float-left d-inline-block'>" . $row["title"] . "</h3>
              <h6 class='text-muted float-right d-inline-block'>" . $row["subject"] . "</h6><br><br>
              <h5 class='card-subtitle mb-2 text-muted'>Solution: " . $solution . "</h5>
              <h6 class='text-muted float-right d-inline-block'>do " . $row["duedate"] . "</h6>
              <h6 class='text-muted float-left d-inline-block'>od " . $row["user"] . "</h6>
              </div>
              </div>";
            }
          }



          ?>

        </div>
      </div>


      <div class="col-lg-3 sidebar">
        <div class="mt-3">

          <div class="card mb-3" style="height:30rem;">
            <div class="card-body">
              <h3 class="card-title">Chat</h3>

              <script type="text/javascript" src="chat/messages.js"></script>
              <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
              <h5 style="height:19rem;" class="card-text chat" id="messages"></h5>
              <br><br>
              <form action="chat/msg_write.php" method="post">
                <input class="form-control d-inline-block" style="width:20rem;" type="text" name="message">
                <input class="form-control d-inline-block" style="width:4rem;" type="submit" value="Send">
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</div>
</body>
</html>
