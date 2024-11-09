<?php
include 'connection.php';
if(isset($_POST['sbT'])){
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $pass = $_POST['user-pass'];
    $sql = "INSERT INTO `register`(`name_u`, `email_u`, `pass_u`) VALUES
     ('$name','$email','$pass')";
     mysqli_query($con,$sql);
     header('location:login.php');
}
mysqli_close($con);
?>
