<?php
include 'connection.php';
if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    $sql2 = "DELETE FROM `register` WHERE id_regis = '$id'";
    mysqli_query($con,$sql2);
    header('location:userMangment.php');
}


?>