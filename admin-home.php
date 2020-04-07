    
<?php
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

    <title>Admin Home</title>
</head>

<body>
    <!-- topnav -->
    <nav class="navbar nav1 navbar-expand-sm bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">My Blood Bank</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a>
            </li>
        </ul>
    </nav>

    <?php
    $un=$_SESSION['un'];
    if(!$un)
    {
        header("Location:admin.php");
    }
    ?>

    <h1 class="adminh1">Welcome Admin!</h1>

    

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
                <a class="nav-link" href="#"><i class="fa fa-google-plus" aria-hidden="true">+</i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li><a class="nav-link" href="index.php">Logout</a></li>
        </ul>
    </nav>

</body>

</html>