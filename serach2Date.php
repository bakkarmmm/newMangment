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
<h1 class="bg-secondary text-light" style="text-align:center; padding-bottom:10px;">Inventories tow date</h1>
    <div class="container">
    <form action="serach2Date.php" method="post" class="row g-3 needs-validation m-2" enctype="multipart/form-data">
        <div class="col-6">
            <label for="validationCustom0" class="form-label" >FROM</label>
            <input type="date" class=" form-control" id="validationCustom0" required name="sarch_from_date">
        </div>
        <div class="col-6">
            <label for="validationCustom01" class="form-label" >TO</label>
            <input type="date" class=" form-control" id="validationCustom01" required name="sarch_to_date">
        </div>
        <input type="submit" value="Serach by two date" name="sb" class="btn btn-outline-primary">
    </form>
    </div>
    <?php
    include 'connection.php';
    if(isset($_POST['sb'])){
      $data = $_POST['sarch_from_date'];
      $seprator = explode('-',$data);
      $year = $seprator[0];
      $month = $seprator[1];
      $day = $seprator[2];
      $date = $year.'-'.$month.'-'.$day ;
      echo $date;
      $data1 = $_POST['sarch_to_date'];
      $seprator1 = explode('-',$data1);
      $year1 = $seprator1[0];
      $month1 = $seprator1[1];
      $day1 = $seprator1[2];
      $date1 = $year1.'-'.$month1.'-'.$day1 ;
      echo $date1;
      $sql = "SELECT * FROM `sales` WHERE `sales_date`>= '$date' AND `sales_date`<='$date1'";
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