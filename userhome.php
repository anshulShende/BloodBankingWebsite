<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>User Home</title>
</head>

<body style="background-image: url('image/bg.jpg');">
    <!-- topnav -->
        <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php" style="font-family: 'castellar';">My Bl<i class="fas fa-tint"></i>od Bank</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <!-- <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a> -->
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='userlogin.php'">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
    </li>
  </ul>
</nav>

   
    <br><br><br>
    <h1 class="adminh1">Welcome!</h1><br><br><br>
    <div class="container-fluid">
        <button type="button" class="btn btn-light col-sm-2 offset-3" onclick="window.location='donate.php'">Book Appointment for Blood Donation</button>
        <button type="button" class="btn btn-light col-sm-2 offset-2" onclick="window.location='request.php'">Request for Blood</button>
    </div>

    <!-- bottomnav -->
    <?php include 'footer.php';?>

</body>

</html>