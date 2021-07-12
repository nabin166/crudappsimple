<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM crud WHERE `id` = $id";
mysqli_query($conn,$sql);
header("location:homepage.php?successfullydeleted");
?>