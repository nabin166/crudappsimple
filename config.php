<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("connection_error".mysqli_connect_error());
}else{
    
}

?>