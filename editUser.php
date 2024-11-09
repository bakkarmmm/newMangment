<?php
include 'connection.php';
if(isset($_GET['ID'])){
$id = $_GET['ID'];
$sql = "SELECT `id_user`, `user_name`, `user_pass`, `email` FROM `users` WHERE `id_user` = '$id'";
$sqlQ = mysqli_query($con,$sql);
$row = mysqli_fetch_array($sqlQ);
mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1 class="bg-secondary text-light" style="text-align:center; padding-bottom:10px;">edit User</h1>
<div class="container">
    <form action="editUser2.php" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" autocomplete="off">
    <div class="col-6" hidden>
            <input type="hidden" class="form-control" id="validationCustom00" required name="id_user" value="<?php echo $row['id_user']?>" >
        </div>
        <div class="col-6">
            <label for="validationCustom01" class="form-label" >User name</label>
            <input type="text" class="form-control" id="validationCustom01" required name="user_name" value="<?php echo $row['user_name']?>" >
        </div>
        <div class="col-6">
            <label for="validationCustom02" class="form-label" >email</label>
            <input type="text" class="form-control" id="validationCustom02" required name="email" value="<?php echo $row['email']?>">
        </div>
        <div class="col-6">
            <label for="validationCustom03" class="form-label" >password</label>
            <input type="text" class="form-control" id="validationCustom03" required name="user_pass" value="<?php echo $row['user_pass']?>">
        </div>
        
        <div class="col-8">
            <input type="submit" value="SAVE" class="btn btn-outline-primary">
        </div>
    </form>
    </div>
    
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>