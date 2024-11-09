<?php
    include 'connection.php';
    
        $id = $_POST['id_user'];
        $name = $_POST['user_name'];
        $email = $_POST['email'];
        $pass = $_POST['user_pass'];
        $sql = "UPDATE `users` SET `user_name`='$name',`user_pass`='$pass',`email`='$email' WHERE `id_user` = '$id' ";
        mysqli_query($con,$sql);
        header('location:userMangment.php');
        mysqli_close($con);
    
    
    ?>