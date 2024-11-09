<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangment</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1 class="bg-secondary text-light" style="text-align:center; padding-bottom:10px;">Mangment Items</h1>
    <div class="container">
    <form action="addata.php" method="post" class="row g-3 needs-validation" enctype="multipart/form-data" autocomplete="off">
        <div class="col-6">
            <label for="validationCustom01" class="form-label" >Item Name</label>
            <input type="text" class="form-control" id="validationCustom01" required name="Item_Name">
        </div>
        <div class="col-6">
            <label for="validationCustom02" class="form-label" >Code Items</label>
            <input type="number" class="form-control" id="validationCustom02" required name="Code_Items">
        </div>
        <div class="col-6">
            <label for="validationCustom03" class="form-label" > Item price</label>
            <input type="number" class="form-control" id="validationCustom03" required name="Item_price">
        </div>
        <div class="col-6">
            <label for="validationCustom04" class="form-label">Purchase price</label>
            <input type="number" class="form-control" id="validationCustom04" required  name="Purchase_price">
        </div>
        <div class="col-6">
            <label for="validationCustom05" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="validationCustom05" required  name="qauntity">
        </div>
        <div class="col-6">
            <label for="validationCustom06" class="form-label" >Discripation item</label>
            <input type="text" class="form-control" id="validationCustom06" required name="disc_item">
        </div>
        <div class="col-6">
            <label for="validationCustom07" class="form-label">up your iamge</label>
            <input type="file" name="img" class="form-control" id="validationCustom07" required >
        </div>
        <div class="col-8">
            <input type="submit" value="SAVE" class="btn btn-outline-primary" onclick="tost()">
        </div>
    </form>
    <div class="table-responsive">
    <?php
    include 'connection.php';
    
    $resultat = mysqli_query($con,"SELECT * FROM `products`");
    echo "<table class='table'>
    <thead>
     <tr>
       <th scope='col'>#</th>
       <th scope='col'>Name</th>
       <th scope='col'>code</th>
       <th scope='col'>price</th>
       <th scope='col'>Purchase_price</th>
       <th scope='col'>Qauntity</th>
       <th scope='col'>discription</th>
       <th scope='col'>image</th>
       <th scope='col'>edit</th>
       <th scope='col'>delete</th>
     </tr>
    </thead>";
    echo "<tbody>";
    while($row = mysqli_fetch_array($resultat)){
       echo "<tr>";
       echo   "<th scope='row'>".$row['item_id']."</th>";
       echo "<td>".$row['item_name']."</td>";
       echo "<td>".$row['code_item']."</td>";
       echo "<td>".$row['item_price']."</td>";
       echo "<td>".$row['Purchase_price']."</td>";
       echo "<td>".$row['Quantity']."</td>";
       echo "<td>".$row['disc']."</td>";
       echo "<td>".$row['img']."</td>";
       echo "<td><a class='btn btn-outline-primary' href='edit.php?ID=".$row['item_id']."'>edit</a></td>";
       echo "<td><a class='btn btn-outline-warning' href='delete.php?ID=".$row['item_id']."'>delete</a></td>";
    }
    echo "</tbody>";
    echo "</table>";
    mysqli_close($con);
    ?>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>