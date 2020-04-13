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

  <link rel="stylesheet" media="all" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  

</head>
<body style="background-image: url('image/bg.jpg');">

  <!-- topnav -->
  <?php include 'navbar.php';?>

<!-- carousel -->
<div class="row">
<div id="demo" class="carousel slide col-sm-6" data-ride="carousel" data-interval="3000">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/b4.jpg" alt="Blood Groups" class="border border-dark">
    </div>
    <div class="carousel-item">
      <img src="image/b5.jpg" alt="Blood Bank" class="border border-dark">
    </div>
    <div class="carousel-item">
      <img src="image/b6.jpg" alt="Blood Donation" class="border border-dark">
    </div>
    <div class="carousel-item" >
      <img src="image/b2.png" alt="Blood Donation" class="border border-dark">
    </div>
    <div class="carousel-item">
      <img src="image/b1.jpg" alt="Doctors" class="border border-dark">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="container-fluid p-4 col-sm-4" style="font-size: 30px; text-align: justify;"><br>
  <p><h2>About Us</h2>
  My Blood Bank is a website which allows users to login and book an appointment for Blood Donation
   and also request for blood when needed. This website also gives information to users regarding Blood Groups, 
   Blood Donation and some related tips. </p>
</div>
</div>

  <button class="btn btn-link col-sm-2 offset-5" onclick="myFunction()" style="font-size: 20px; color: white; text-decoration: none;"><i class="fas fa-chevron-down"></i>&nbsp;View More</button>
  <script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "";
        window.location = "#myDIV";
      } else {
        x.style.display = "none";
        window.location = "index.php";
      }
    }
  </script>
<br><br><br>
<div class="row" id="myDIV" style="display: none;">
  <div class="col">
<div class="container" id="section1">
  <div class="card" style="width:400px;">
    <i class="fas fa-syringe text-center" style="font-size: 50px; color: red;"></i>
    <div class="card-body">
      <h4 class="card-title text-center">Blood Groups</h4>
      <p class="card-text" style="text-align: justify;">There are four main blood groups – A, B, AB and O.       
      Each group can be either RhD positive or RhD negative, which means in total there are eight main blood groups.</p>
    </div>
  </div>
</div>
  </div>
<div class="col">
  <div class="container" id="section1">
    <div class="card" style="width:400px">
      <i class="fas fas fa-tint text-center" style="font-size: 50px; color: red;"></i>
      <div class="card-body">
        <h4 class="card-title text-center">Who can give Blood</h4>
        <ul class="card-text"><li>Are fit and healthy</li>
         <li>Weigh over 45-50kg</li>
        <li>Are aged between 18 and 66</li>
      <li>Not pregnant</li></ul>
      </div>
    </div>
  </div>
</div>
  <div class="col">
    <div class="container" id="section1">
      <div class="card" style="width:400px">
        <i class="fas fa-plus text-center" style="font-size: 50px; color: red;"></i>
        <div class="card-body">
          <h4 class="card-title text-center">Tips for Blood Donation</h4>
          <ul class="card-text">
            <li>Get a good night’s sleep</li>
            <li>Eat a balanced meal and avoid fatty foods</li>
            <li>Drink plenty of fluids before and after</li>
            <li>In case of uneasiness, call the Doctor</li>
          </ul>
        </div>
      </div>
      </div>
    </div>
</div>




<br><br><br>
<!-- bottomnav -->
<?php include 'footer.php';?>
</body>
</html>