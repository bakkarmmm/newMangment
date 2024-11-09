<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add users</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .container{
            display: flex;
            justify-content:center;
            flex-wrap :wrap;
        }
    </style>
</head>
<body>
<h1 class="bg-secondary text-light" style="text-align:center; padding-bottom:10px;">Add Users</h1>
<div class="container">
    <?php
    
    include 'connection.php';
    $sql = "SELECT * FROM `register`";
    $ruslte = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($ruslte)){
        echo "<div class='card m-1' style='width: 18rem;'>";
            echo "<div class='card-body'>";
                echo "<h5 class='card-title'>Card User</h5>";
                echo "<h6 class='card-subtitle mb-2 text-body-secondary'>Name user : ".$row['name_u']." </h6>";
                echo "<h6 class='card-subtitle mb-2 text-body-secondary'>email user :".$row['email_u']."</h6>";
                echo "<h6 class='card-subtitle mb-2 text-body-secondary'>Password :".$row['pass_u']."</h6>";
                echo "<a href='newUser.php?ID=".$row['id_regis']."' class='card-link btn btn-primary'>Add users</a>";
                echo "<a href='deleteRegister.php?ID=".$row['id_regis']."' class='card-link btn btn-warning'>Delete users</a>";
            echo "</div>";
        echo "</div>";
    }
    ?>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>