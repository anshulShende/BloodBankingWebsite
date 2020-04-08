    
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

    <title>User Login</title>
</head>

<body>
    <!-- topnav -->
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">My Blood Bank</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="admin.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userlogin.php">&ensp;<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Users</a>
            </li>
        </ul>
    </nav>

    <!-- form  -->
    <div class="container-fluid form1 p-4 border border-dark col-md-4 offset-4">
        <form class="" action="#" method="POST">
            <div class="form-group">
                <label for="uname">Enter Username:</label>
                <input type="text" name="un" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="pwd">Enter Password:</label>
                <input type="password" name="ps" class="form-control" placeholder="Password" >
            </div>
            <button type="submit" name="log" class="btn btn-outline-danger col-md-3 offset-4">Login</button>
        </form>
        <p>New User? <a href="user-registration.php">Register here</a></p>
    </div>


    <?php
    if(isset($_POST['log']))
    {
        $un=$_POST['un'];
        $ps=$_POST['ps'];
        $q=$db->prepare("SELECT * FROM user WHERE usern='$un' AND pwd='$ps'");
        $q->execute();
        $res=$q->fetchAll(PDO::FETCH_OBJ);
        if($res)
        {
            header("Location:userhome.php");
        }
        else
        {
            echo "<script>alert('Incorrect username or password');</script>";
        }
    }

    ?>



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
    </nav>

</body>

</html>