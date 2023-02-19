<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodavail";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    // echo "connection is done successfully";
}
else
{
    echo "connection is not done successfully";
}

?>