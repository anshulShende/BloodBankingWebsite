<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>

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
      <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a>
    </li>
  </ul>
</nav>

<div class="alert" role="alert">
            <br><br>
          </div>
  <div class="container p-4 border border-dark">

          <form action="#" method="POST">
            <div class="col-md-4 offset-4"><h2>User Registration</h2></div>
            <div class="row">
              <div class="col">
                <label for="name">Name </label>
                <input type="text" class="form-control" name="nm" placeholder="Name">
              </div>
              <div class="col">
                <label for="email">Email </label>
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="username">UserName </label>
              <input type="text" class="form-control" name="uname" placeholder="Username">
              <label for="username">Password </label>
              <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address</label>
              <input type="text" class="form-control" name="inputAddress" placeholder="Address">
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <label for="">Age </label>&ensp;
                <input type="number" class="form-control" name="age" placeholder="">
            </div><br>
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Blood Group</label>
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="bg">
                <option selected>Choose...</option>
                <option>O+</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>AB+</option>
                    <option>O-</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>AB-</option>
              </select>
              <button type="submit" class="btn btn-primary" name="signin">Sign in</button>
          </form>
    </div>

<?php

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['signin']))
{

            $nam=$_POST['nm'];
            $add=$_POST['inputAddress'];
            $gen=$_POST['inlineRadioOptions'];
            $bg=$_POST['bg'];
            $email=$_POST['email'];
            $un=$_POST['uname'];
            $pwd=$_POST['pwd'];
            $age=$_POST['age'];

$sql = "INSERT INTO user (nam,addres,age,gender,bgroup,email,usern,pwd) VALUES ('$nam','$add','$age','$gen','$bg','$email','$un','$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Signup successful. Go to users and Login')</script>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>


<!-- bottomnav -->
<?php include 'footer.php';?>
</body>
</html>