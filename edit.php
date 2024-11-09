<?php
include 'connection.php';
$id = $_GET['ID'];
$sql = "SELECT `item_id`, `item_name`, `code_item`, `item_price`,
 `Purchase_price`, `Quantity`, `disc`, `img` FROM `products` WHERE `item_id`=".$id ;
$sqlQ = mysqli_query($con,$sql);
$row = mysqli_fetch_array($sqlQ);
mysqli_close($con);
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

<h1 class="bg-secondary text-light" style="text-align:center; padding-bottom:10px;">edit items</h1>
<div class="container">
    <form action="edit2.php" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" autocomplete="off">
    <div class="col-6" hidden>
            <input type="hidden" class="form-control" id="validationCustom00" required name="id" value="<?php echo $row['item_id']?>" >
        </div>
        <div class="col-6">
            <label for="validationCustom01" class="form-label" >Item Name</label>
            <input type="text" class="form-control" id="validationCustom01" required name="Item_Name" value="<?php echo $row['item_name']?>" >
        </div>
        <div class="col-6">
            <label for="validationCustom02" class="form-label" >Code Items</label>
            <input type="number" class="form-control" id="validationCustom02" required name="Code_Items" value="<?php echo $row['code_item']?>">
        </div>
        <div class="col-6">
            <label for="validationCustom03" class="form-label" > Item price</label>
            <input type="number" class="form-control" id="validationCustom03" required name="Item_price" value="<?php echo $row['item_price']?>">
        </div>
        <div class="col-6">
            <label for="validationCustom04" class="form-label">Purchase price</label>
            <input type="number" class="form-control" id="validationCustom04" required  name="Purchase_price" value="<?php echo $row['Purchase_price']?>">
        </div>
        <div class="col-6">
            <label for="validationCustom05" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="validationCustom05" required  name="qauntity" value="<?php echo $row['Quantity']?>">
        </div>
        <div class="col-6">
            <label for="validationCustom06" class="form-label" >Discripation item</label>
            <input type="text" class="form-control" id="validationCustom06" required name="disc_item" value="<?php echo $row['disc']?>">
        </div>
        <div class="col-6">
            <label for="validationCustom07" class="form-label">up your iamge</label>
            <input type="file" name="img" class="form-control" id="validationCustom07" required >
        </div>
        <div class="col-8">
            <input type="submit" value="SAVE" class="btn btn-outline-primary">
        </div>
    </form>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>