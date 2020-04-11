<?php
$db=new PDO('mysql:host=localhost;dbname=bloodbank','root','');
if($db)
{
    //echo "Connected";
}
else{
    echo "Not connected";
}

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
?>