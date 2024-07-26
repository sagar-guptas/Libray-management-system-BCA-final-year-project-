<?php


$servername="localhost";
$username = "root";
$password="";
$database="library";


$conn = mysqli_connect($servername,$username,$password,$database);


if ($conn) {
    // echo"connected";
    
}
else {
    echo"connection failed";
}
?>