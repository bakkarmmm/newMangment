<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
include 'connection.php';
if(isset($_GET['ID'])){
$id = $_GET['ID'];
//echo $id;
// get elment item for add in sales data base
$sql = "SELECT `item_id`, `item_name`, `code_item`,
`item_price`, `Purchase_price`, `Quantity`, `disc`, `img` FROM `products` WHERE `item_id` = ".$id;
$sql2 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($sql2);
    $id_item= $row['item_id'];
    $item_name = $row['item_name'];
    $item_price = $row['item_price'];
    $item_purchase = $row['Purchase_price'];
    // insert information sales in data base 
    $sql3 = "INSERT INTO `sales`(`id_item`, `item_Name`, `item_price`, `item_pur`) VALUES
     ('$id_item','$item_name','$item_price','$item_purchase')";
     $sql4 = mysqli_query($con,$sql3);
     Header ('location:index.php');
     // Quantite
     $Qauntite = $row['Quantity'] - 1;
     $mysql = "UPDATE `products` SET `Quantity`='$Qauntite' WHERE `item_id` = ".$id;
     mysqli_query($con,$mysql);
}
// show data sales in table 
    $sql5 = "SELECT * FROM `sales`";
    $sql6=mysqli_query($con,$sql5);
    echo "<div class='table-responsive'>";
    echo "<table class='table'>
    <thead>
     <tr>
       <th scope='col'>#</th>
       <th scope='col'>number of sale</th>
       <th scope='col'>id item</th>
       <th scope='col'>name item</th>
       <th scope='col'>price of item</th>
       <th scope='col'>purchase</th>
       <th scope='col'>date of sale</th>
     </tr>
    </thead>";
    echo "<tbody>";
    $sum = 0 ;
    $sum_price = 0;
    while($row = mysqli_fetch_array($sql6)){
       echo "<tr>";
       echo "<th>#</th>";
       echo "<td scope='row'>".$row['id_sales']."</td>";
       echo "<td>".$row['id_item']."</td>";
       echo "<td>".$row['item_Name']."</td>";
       echo "<td>".$row['item_price']."</td>";
       echo "<td>".$row['item_pur']."</td>";
       echo "<td>".$row['sales_date']."</td>";
       $pur = $row['item_pur'];
       $price = $row['item_price'];
       $sum += $pur;
       $sum_price += $price;
       $total = $sum_price - $sum ;
    }
    echo "<tr>";
    echo "<th scope='row'>#</th>";
    echo "<th class='bg-warning'>Total</th>";
    echo "<th class='bg-primary'>...</th>";
    echo "<th class='bg-warning'>...</th>";
    echo "<th class='bg-primary' style='letter-spacing: 2px;'>".$sum_price."L.L</th>";
    echo "<th class='bg-warning' style='letter-spacing: 2px;'>".$sum."L.L</th>";
    echo "<th class='bg-primary' colspan='2' style='letter-spacing: 2px;'>".$total."&nbsp L.L</th>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    mysqli_close($con);
    
    ?>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>