<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

  <!-- topnav -->
  <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">My Blood Bank</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Admin</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="user.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a>
    </li>
  </ul>
</nav>


<!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/b1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="image/b2.png" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="image/b3.jpg" alt="New York">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>



<!-- bottomnav -->
<nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-bottom">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </li>
    <li>
      <a class="nav-link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
    </li>

  </ul>
  
  
  

</nav>
</body>
</html>