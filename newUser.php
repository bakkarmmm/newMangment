<?php
include 'connection.php';
if(isset($_GET['ID'])){
    $id = $_GET['ID'];
    // get info by register
$sql = "SELECT * FROM `register` WHERE id_regis = '$id' ";
$ruslt = mysqli_query($con,$sql);
$row = mysqli_fetch_array($ruslt);
// save new user
$user_name = $row['name_u'];
$user_email = $row['email_u'];
$user_passwrod = $row['pass_u'];
$sql1 = "INSERT INTO `users`( `user_name`, `user_pass`, `email`) VALUES ('$user_name','$user_passwrod','$user_email')";
$rusulte = mysqli_query($con , $sql1);
//delte register
$sql2 = "DELETE FROM `register` WHERE id_regis = '$id'";
mysqli_query($con,$sql2);
header('location:userMangment.php');
mysqli_close($con);
}
?>