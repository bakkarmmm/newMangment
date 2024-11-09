<?php
session_start();
include 'connection.php';
if(isset($_POST['sbT'])){
$user = $_POST['user-name'];
//echo $user ;
$user_password = $_POST['user-pass'];
//echo $user_password;
$sql = "SELECT `id_user`, `user_name`, `user_pass` FROM `users` WHERE `user_name`= '$user' AND `user_pass`= '$user_password'";
$resulte = mysqli_query($con , $sql);
if(mysqli_num_rows($resulte)> 0){
    $row = mysqli_fetch_array($resulte);
    echo $_SESSION['user_id'] = $row['id_user'];
    header("location:index.php");
}else{
    header("location:login.php");
}
}
?>