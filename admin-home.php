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

    <title>Admin Home</title>
</head>

<body style="background-image: url('image/bg.jpg');">
    <!-- topnav -->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php" style="font-family: 'castellar';">My Bl<i class="fas fa-tint"></i>od Bank</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <!-- <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a> -->
      <button type="button" class="btn btn-outline-light btn-lg" onclick="window.location='admin.php'">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></button>
    </li>
  </ul>
</nav>

   
<br>
    <h1 class="adminh1">Welcome Admin!</h1><br><br>
    <div class="container-fluid">
        <form action="#" method="POST">
            <button type="submit" class="btn btn-outline-dark col-sm-2 offset-3" name="all">View all Users</button>
            <button type="submit" class="btn btn-outline-dark col-sm-2 offset-2" name="req">View Blood Requests</button><br><br><br>
            <button type="submit" class="btn btn-outline-dark col-sm-2 offset-3" name="don">View Donation Appointments</button>
            <button type="submit" class="btn btn-outline-dark col-sm-2 offset-2" name="bl">Check Blood Stock</button><br><br><br>
            <button type="submit" class="btn btn-outline-dark col-sm-2 offset-3" name="add">Add Blood Stock</button>
            <button type="submit" class="btn btn-outline-dark col-sm-2 offset-2" name="del">Delete a User</button>
        </form><br><br><br>
    </div>

    


    <?php
    ob_start();
        if(isset($_POST['all']))
        {
            $sql = "SELECT * FROM user";

            $res = mysqli_query($conn,$sql);

            echo " <table border='1' align='center' width='100%' cellpadding='8' bgcolor='wheat'>

                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Email</th>
                </tr>";

                while($row = mysqli_fetch_assoc($res))
                {

                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nam'] . "</td>";
                    echo "<td>" . $row['addres'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['bgroup'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";

                }

                echo "</table>";

            $conn->close();
        }


        if(isset($_POST['req']))
        {
            $sql = "SELECT * FROM request";

            $res = mysqli_query($conn,$sql);

            echo "<table border='1' align='center' width='100%' cellpadding='8' bgcolor='wheat'>

                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Blood Group</th>
                <th>Required till Date</th>
                </tr>";

                while($row = mysqli_fetch_assoc($res))
                {

                    echo "<tr>";
                    echo "<td>" . $row['r_name'] . "</td>";
                    echo "<td>" . $row['r_email'] . "</td>";
                    echo "<td>" . $row['r_bgroup'] . "</td>";
                    echo "<td>" . $row['r_date'] . "</td>";
                    echo "</tr>";

                }

                echo "</table>";

            $conn->close();
        }

        if(isset($_POST['don']))
        {
            $sql = "SELECT * FROM donate";

            $res = mysqli_query($conn,$sql);

            echo " <table border='1' align='center' width='60%' cellpadding='8' bgcolor='wheat'>

                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Donation Date</th>
                </tr>";

                while($row = mysqli_fetch_assoc($res))
                {

                    echo "<tr>";
                    echo "<td>" . $row['d_name'] . "</td>";
                    echo "<td>" . $row['d_email'] . "</td>";
                    echo "<td>" . $row['d_date'] . "</td>";
                    echo "</tr>";

                }

                echo "</table>";

            $conn->close();
        }


         if(isset($_POST['bl']))
        {
            $sql = "SELECT * FROM blood";

            $res = mysqli_query($conn,$sql);

            echo "<table border='1' align='center' width='10%' cellpadding='8' bgcolor='wheat'>

                <tr>
                <th>Blood Group</th>
                <th>Stocks</th>
                </tr>";

                while($row = mysqli_fetch_assoc($res))
                {

                    echo "<tr>";
                    echo "<td>" . $row['bgroup'] . "</td>";
                    echo "<td>" . $row['stocks'] . "</td>";
                    echo "</tr>";

                }

                echo "</table>";

            $conn->close();
        }

        if(isset($_POST['add']))
        {
            
            header("Location:addstocks.php");
        }

        if(isset($_POST['del']))
        {
            
            header("Location:deleteuser.php");
        }
        
    ?>
    
<br><br><br><br><br>
    
    <!-- bottomnav -->
<?php include 'footer.php';?>
</body>

</html>