<?php
ob_start();
include('connection.php');
?>
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
<body style="background-image: url('image/bg.jpg');">

  <!-- topnav -->
<nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php" style="font-family: 'castellar';">My Bl<i class="fas fa-tint"></i>od Bank</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <!-- <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a> -->
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='userlogin.php'"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Users</button>
    </li>
  </ul>
</nav>
<br><br><br>

<!-- form -->
  <div class="container p-4 border border-dark">
          <form action="#" method="POST">
            <div class="col-md-4 offset-4"><h2>User Registration</h2></div>
            <div class="row">
              <div class="col">
                <label for="name">Name: </label>
                <input type="text" class="form-control" name="nm" placeholder="Name" required>
              </div>
              <div class="col">
                <label for="email">Email: </label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
              <label for="username">UserName: </label>
              <input type="text" class="form-control" name="uname" placeholder="Username" required>
              </div>  
              <div class="col">
              <label for="username">Password: </label>
              <input type="password" class="form-control" name="pwd" placeholder="Password" required>
              </div>  
            </div><br>
            <div class="form-group">
              <label for="inputAddress2">Address:</label>
              <input type="text" class="form-control" name="inputAddress" placeholder="Address">
            </div><br>
            <div class="row">
              <div class="col">Gender:&ensp;
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male" checked>
              <label class="form-check-label" for="inlineRadio1">Male</label>
            &emsp;
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div> 
              </div>
            <div class="col">
            <div class="form-check form-check-inline">
                <label for="">Age: </label>&ensp;
                <input type="number" class="form-control" name="age" placeholder="" min="18">
            </div>
            </div>
            <div class="col">Blood Group: &ensp;<select name="bg">
                
                <option>O+</option>
                    <option>A+</option>
                    <option>B+</option>
                    <option>AB+</option>
                    <option>O-</option>
                    <option>A-</option>
                    <option>B-</option>
                    <option>AB-</option>
              </select>
            </div>
            </div><br>
              <button type="submit" class="btn btn-primary" name="signin">Sign Up</button>
          </form>
    </div>

<?php
ob_start();
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
              echo "<script>if(confirm('Signup successful. Login now.')){document.location.href='userlogin.php'};</script>";
              
                
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