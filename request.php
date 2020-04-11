<?php
ob_start();
include('connection.php');
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

    <title>Request for Blood</title>
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

    <!-- form -->
    <div class="container-fluid form1 p-4 border border-dark col-md-4 offset-4">
        <form class="" action="#" method="POST">
            <div class="col-md-8 offset-2"><h2>Request for Blood</h2></div>
            <div class="form-group">
                <label>Enter Name:</label>
                <input type="text" name="reqn" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Enter Email:</label>
                <input type="email" name="reqe" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Select Blood Group:</label>
                <select name="bgroup">
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
            <div class="form-group">
                <label>Required till Date:</label>
                <input type="date" name="reqd" class="form-control" placeholder="dd/mm/yy" required>
            </div>
            <button type="submit" name="req" class="btn btn-outline-light col-md-3 offset-4">Request</button>
        </form>
    </div>

    <?php
    ob_start();
    if(isset($_POST['req']))
    {

        $reqn=$_POST['reqn'];
        $reqe=$_POST['reqe'];
        $bgroup=$_POST['bgroup'];
        $reqd=$_POST['reqd'];

        $sql = "INSERT INTO request (r_name,r_email,r_bgroup,r_date) VALUES ('$reqn','$reqe','$bgroup','$reqd')";

        if ($conn->query($sql) === TRUE) 
        {
            echo "<p><center><h2>Request Successful</h2></center></p>";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }


        // if(isset($_POST['req']))
        // {
        //     $reqn=$_POST['reqn'];
        //     $reqe=$_POST['reqe'];
        //     $bgroup=$_POST['bgroup'];
        //     $q=$db->prepare("INSERT INTO request (r_name,r_email,r_bgroup) VALUES (:reqn,:reqe,:bgroup)");
        //     $q->bindValue('r_name',$reqn);
        //     $q->bindValue('r_email',$reqe);
        //     $q->bindValue('r_bgroup',$bgroup);
        //     $q->execute();
            // if()
            // {
            //     echo "<script>alert('Request successful')</script>";
            // }
            // else{
            //     echo "<script>alert('Request unsuccessful')</script>";
            // }
            
    ?>
    

    <!-- bottomnav -->
<?php include 'footer.php';?>
</body>

</html>