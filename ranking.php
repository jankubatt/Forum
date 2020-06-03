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
        <li class="nav-item">
          <a class="nav-link" href="subjects.php">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="timetable.php">Timetable</a>
        </li>
        <li class="nav-item active">
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
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Solutions</th>
              </tr>
            </thead>
            <tbody>

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


              $sql = "SELECT * FROM users ORDER BY workCount DESC";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                $i = 1;
                while($row = $result->fetch_assoc()) {

                  echo '

                  <tr>
                  <th scope="row">'. $i .'</th>
                  <td>'. $row["nickname"] .'</td>
                  <td>'. $row["workCount"] .'</td>
                  </tr>
                  ';
                  $i++;
                }

              }


              ?>

            </tbody>
          </table>


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
    <br>
  </div>
</body>
</html>
