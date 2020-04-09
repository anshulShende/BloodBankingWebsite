<?php
$db=new PDO('mysql:host=localhost;dbname=bloodbank','root','');
if($db)
{
    //echo "Connected";
}
else{
    echo "Not connected";
}
?>