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

    <title>Delete User</title>
</head>

<body>
    <!-- topnav -->
    <nav class="navbar nav1 navbar-expand-sm bg-danger navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">My Blood Bank</a>
    </nav>



    <div class="container-fluid form1 p-4 border border-dark col-md-2 offset-5">
            <form class='' action='#' method='POST'>
                <div class='form-group'>
                   <label>Enter id of user to delete:</label>
                    <input type='number' name='id' class='form-control' placeholder='Enter id'>
                </div>
                <button type='submit' name='dele' class='btn btn-outline-danger col-md-4 offset-4'>Delete</button>
            </form></div>

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
                if(isset($_POST['dele']))
                {
                        $id = $_POST['id'];
                        
                        $q=$db->prepare("SELECT * FROM user WHERE id='$id'");
                        $q->execute();
                        $res=$q->fetchAll(PDO::FETCH_OBJ);
                        if($res)
                        {
                            echo "<script>confirm('Are you sure you want to delete?')</script>";

                            $sql = "DELETE FROM user WHERE id='$id' ";

                            if ($conn->query($sql) === TRUE) 
                            {
                                echo "User Deleted";
                            } 
                            else 
                            {
                                echo "Error deleting record: " . $conn->error;
                            }
                            
                        }
                        else
                        {
                            echo "<script>alert('No such user');</script>";
                        }

                        $conn->close();
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
        <ul class="navbar-nav align-center">
            <li><a class="nav-link" href="index.php">Logout&nbsp;<i class="fa fa-power-off" aria-hidden="true"></i></a></li>
        </ul>
    </nav>

</body>

</html>