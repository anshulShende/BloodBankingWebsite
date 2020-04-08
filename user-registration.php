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
  <?php include 'navbar.php';?>

  <div class="container">
        <div class="alert alert-danger" role="alert">
            User-Registration
          </div>
          <form action="#" method="POST">
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
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" name="inputAddress" placeholder="Address">
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div><br>
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Blood Group</label>
              <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="bg">
                <option selected>Choose...</option>
                <option value="O">O+</option>
                <option value="A">A+</option>
                <option value="B">B+</option>
                <option value="AB">AB+</option>
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

$sql = "INSERT INTO user (nam,addres,gender,bgroup,email,usern,pwd) VALUES ('$nam','$add','$gen','$bg','$email','$un','$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
    
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