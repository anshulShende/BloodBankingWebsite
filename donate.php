    
<?php
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

    <title>Book Donation Appointment</title>
</head>

<body>
    <!-- topnav -->
    <nav class="navbar nav1 navbar-expand-sm bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">My Blood Bank</a>
    </nav>

   
    <div class="container-fluid form1 p-4 border border-dark col-md-4 offset-4">
        <form class="" action="#" method="POST">
            <div class="form-group">
                <label>Enter Name:</label>
                <input type="text" name="donn" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Enter Email:</label>
                <input type="email" name="done" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Enter Date of Appointment:</label>
                <input type="text" name="dond" class="form-control" placeholder="dd/mm/yy">
            </div>
            <button type="submit" name="don" class="btn btn-outline-danger col-md-3 offset-4">Book</button>
        </form>
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
        <ul class="navbar-nav align-center">
            <li><a class="nav-link" href="index.php">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></a></li>
        </ul>
    </nav>

</body>

</html>