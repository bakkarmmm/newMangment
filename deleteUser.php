<?php
include 'connection.php';
if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    $sql = "DELETE FROM `users` WHERE `id_user` = '$id'";
    mysqli_query($con,$sql);
    header('location:userMangment.php');
}
?>