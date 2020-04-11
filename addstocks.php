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

    <title>Add Stocks</title>
</head>

<body style="background-image: url('image/bg.jpg');">
    <!-- topnav -->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php" style="font-family: 'castellar';">My Bl<i class="fas fa-tint"></i>od Bank</a>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='admin-home.php'"><i class="fas fa-arrow-left"></i></i>&nbsp; Back</button>
    </li>&emsp;
    <li class="nav-item">
      <!-- <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a> -->
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='admin.php'">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
    </li>
  </ul>
</nav>



    <div class="container-fluid form1 p-4 border border-dark col-md-2 offset-5">
            <form class='' action='#' method='POST'>
                <div class="offset-1"><h2>Add Stocks</h2></div><br>
                <div class='form-group'>
                    <label>Select Blood Group: </label>
                    <select name='bgroup'>
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
                <div class='form-group '>
                    <label>Number of Stocks to add:</label>
                    <input type='number' name='stock' class='form-control' placeholder='Stocks' min="1" required>
                </div>
                <button type='submit' name='add1' class='btn btn-outline-light col-md-4 offset-4'>Add</button>
            </form></div>

           <?php
           ob_start();
                if(isset($_POST['add1']))
                {
                    $bg = $_POST['bgroup'];
                    $no = $_POST['stock'];

                    $sql = "UPDATE blood SET stocks=stocks+'$no' WHERE bgroup='$bg' ";

                    if ($conn->query($sql) === TRUE) 
                    {
                        echo "<p><center><h2>Stocks added successfully</h2></center></p>";
                    } 
                    else 
                    {
                        echo "Error updating record: " . $conn->error;
                    }

                    $conn->close();
                }
            ?>


 <!-- bottomnav -->
<?php include 'footer.php';?>
</body>

</html>