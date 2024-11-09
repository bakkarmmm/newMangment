<?php
include 'connection.php';
$id =$_GET['ID'];
$sql = "DELETE FROM `products` WHERE `item_id`=".$id;
mysqli_query($con,$sql);
mysqli_close($con);
header('location:manegment.php');
?>