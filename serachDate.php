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
<h1 class="bg-secondary text-light" style="text-align:center; padding-bottom:10px;">Inventories</h1>
    <div class="container">
    <form action="serachDate.php" method="post" class="row g-3 needs-validation m-2" enctype="multipart/form-data">
        <div class="col-6">
            <label for="validationCustom01" class="form-label" >date</label>
            <input type="date" class=" form-control" id="validationCustom01" required name="sarch_date">
        </div>

        <a href="serach2Date.php" class="btn btn-outline-primary">Serach enter tow date</a>
        <input type="submit" value="Serach" class="btn btn-outline-primary">
    </form>
    </div>
    <?php
    include 'connection.php';
    if(isset($_POST['sarch_date'])){
      $data = $_POST['sarch_date'];
      $seprator = explode('-',$data);
      $year = $seprator[0];
      $month = $seprator[1];
      $day = $seprator[2];
      $date = $year.'-'.$month.'-'.$day ;
      $sql = "SELECT * FROM `sales` WHERE `sales_date`= '$date'";
      $result = mysqli_query($con,$sql);
      echo "<div class='table-responsive'>";
      echo "<table class='table'>
    <thead>
     <tr>
       <th scope='col'>#</th>
       <th scope='col'>number of sales</th>
       <th scope='col'>id_item</th>
       <th scope='col'>name_item</th>
       <th scope='col'>price of item</th>
       <th scope='col'>Purchasd</th>
       <th scope='col'>date of sale</th>
     </tr>
    </thead>";
    echo "<tbody>";
    $sum_pur = 0;
    $sum_price = 0;
    $total =0 ;
      while($row = mysqli_fetch_array($result)){
       echo "<tr>";
       echo  "<th scope='row'>#</th>";
       echo "<td>".$row['id_sales']."</td>";
       echo "<td>".$row['id_item']."</td>";
       echo "<td>".$row['item_Name']."</td>";
       echo "<td>".$row['item_price']."</td>";
       echo "<td>".$row['item_pur']."</td>";
       echo "<td>".$row['sales_date']."</td>";
       $pur = $row['item_pur'];
       $price = $row['item_price'];
       $sum_pur += $pur ;
       $sum_price += $price ;
       $total= $sum_price - $sum_pur;
      }
      echo "<tr>";
    echo "<th scope='row'>#</th>";
    echo "<th class='bg-warning'>Total</th>";
    echo "<th class='bg-primary'>...</th>";
    echo "<th class='bg-warning'>...</th>";
    echo "<th class='bg-primary' style='letter-spacing: 2px;'>".$sum_price."L.L</th>";
    echo "<th class='bg-warning' style='letter-spacing: 2px;'>".$sum_pur."L.L</th>";
    echo "<th class='bg-primary' colspan='2' style='letter-spacing: 2px;'>".$total."&nbsp L.L</th>";
    echo "</tr>";
      echo "</tbody>";
      echo "</table>";
      echo "</div>";
    }
    mysqli_close($con);
    ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>