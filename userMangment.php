<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        #new{
            width: 100%;
            margin-bottom:50px;
            
        }
        .row{
            display:flex;
            justify-content: center;
            align-items:center;
            
        }
        h1{
            width: 100vw;
        }
        @media (max-width:575px) {
            #new{
                width: 80%;
            }
        }
    </style>
</head>
<body>
<h1 class="bg-secondary text-light col-12" style="text-align:center; padding-bottom:10px;">Mangment Users</h1>
<div class="container">
<div class="row">
    
    <a href="showUserNew.php" class="btn btn-primary " id="new">New users</a>
</div>
    <div class="table-responsive">
    <?php
    include 'connection.php';
    $sql = "SELECT `id_user`, `user_name`, `user_pass`, `email` FROM `users`";
    $ruslat = mysqli_query($con,$sql);
    echo "<table class='table'>
    <thead>
     <tr>
       <th scope='col'>#</th>
       <th scope='col'>user id</th>
       <th scope='col'>user name</th>
       <th scope='col'>user email</th>
       <th scope='col'>user password</th>
       <th scope='col'>edit</th>
       <th scope='col'>delete user</th>
     </tr>
    </thead>";
    echo "<tbody>";
    while($row = mysqli_fetch_array($ruslat)){
       echo "<tr>";
       echo   "<th scope='row'>#</th>";
       echo "<td>".$row['id_user']."</td>";
       echo "<td>".$row['user_name']."</td>";
       echo "<td>".$row['email']."</td>";
       echo "<td>".$row['user_pass']."</td>";
       echo "<td><a class='btn btn-outline-primary' href='editUser.php?ID=".$row['id_user']."'>edit</a></td>";
       echo "<td><a class='btn btn-outline-warning' href='deleteUser.php?ID=".$row['id_user']."'>delete</a></td>";
    }
    echo "</tbody>";
    echo "</table>";
    mysqli_close($con);
    ?>
    </div>
</div>



<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scrpit.js"></script>
</body>
</html>