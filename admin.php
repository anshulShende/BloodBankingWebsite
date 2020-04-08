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

    <title>Admin</title>
</head>

<body>
    <!-- topnav -->
    <?php include 'navbar.php';?>

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
            <button type="submit" name="sub" class="btn btn-outline-danger col-md-3 offset-4">Login</button>
        </form>
    </div>


    <?php
    if(isset($_POST['sub']))
    {
        $un=$_POST['un'];
        $ps=$_POST['ps'];
        $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'");
        $q->execute();
        $res=$q->fetchAll(PDO::FETCH_OBJ);
        if($res)
        {
            header("Location:admin-home.php");
        }
        else
        {
            echo "<script>alert('Incorrect username or password');</script>";
        }
    }

    ?>



    <!-- bottomnav -->
    <?php include 'footer.php';?>

</body>

</html>