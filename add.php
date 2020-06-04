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

<body style="background-color: lightblue;">
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
        <li class="nav-item">
          <a class="nav-link" href="ranking.php">Ranking</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="add.php">Add</a>
        </li>
      </ul>
    </div>
  </nav>



  <form action="script/add.php" method="POST">
    <div class="container mt-3">
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group" style="width: 5rem;">
        <label>Subject</label>
        <select class="form-control" name="subject">
          <option>None1</option>
          <option>None2</option>
          <option>None3</option>
        </select>
      </div>
      <div class="form-group" style="width: 10rem;">
        <label>Date</label>
        <input class="form-control" type="date" name="dueDate">
      </div>
      <div class="form-group">
        <label for="popis">Description</label>
        <textarea class="form-control" id="popis" name="desc" rows="10"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-primary mt-4" name=""submit2>Submit</button>
    </div>
  </form>
</body>
</html>
