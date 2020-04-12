<?php
ob_start();
include('connection.php');
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

    <title>Book Donation Appointment</title>
</head>

<body style="background-image: url('image/bg.jpg');">
    <!-- topnav -->
<nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php" style="font-family: 'castellar';">My Bl<i class="fas fa-tint"></i>od Bank</a>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='userhome.php'"><i class="fas fa-arrow-left"></i></i>&nbsp; Back</button>
    </li>&emsp;
    <li class="nav-item">
      <!-- <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a> -->
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='userlogin.php'">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
    </li>
  </ul>
</nav>

   
    <div class="container-fluid form1 p-4 border border-dark col-md-4 offset-4">
        <form class="" action="#" method="POST">
            <div class="col-md-8 offset-2"><h2>Book Appointment</h2></div><br>
            <!-- <div class="form-group">
                <label>Enter Name:</label>
                <input type="text" name="donn" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Enter Email:</label>
                <input type="email" name="done" class="form-control" placeholder="Email">
            </div> -->
            <div class="form-group">
                <label>Enter Date of Appointment:</label>
                <input type="date" name="dond" class="form-control" placeholder="dd/mm/yy" required>
            </div>
            <button type="submit" name="don" class="btn btn-outline-light col-md-3 offset-4">Book</button>
        </form>
    </div>


    <?php
    ob_start();
    $un= $_SESSION["uname"];
    $sql="SELECT * FROM user WHERE usern='$un'";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($res))
    {
        $name=$row['nam'];
        $email=$row['email'];
    }
    if(isset($_POST['don']))
    {

        // $donn=$_POST['donn'];
        // $done=$_POST['done'];
        $dond=$_POST['dond'];

        $sql = "INSERT INTO donate (d_name,d_email,d_date) VALUES ('$name','$email','$dond')";

        if ($conn->query($sql) === TRUE) 
        {
            echo "<p><center><h2>Appointment Booked</h2></center></p>";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    ?>
    

    <!-- bottomnav -->
<?php include 'footer.php';?>

</body>

</html>