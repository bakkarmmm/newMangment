<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangmentt Sales</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
      .divs{
        margin:30px auto 30px auto;
        flex-direction:row;
        justify-content:center;
      }
      .imgC{
        width: 12rem;
        display:flex;
        flex-direction:column;
        justify-content:space-between;
        transition:0.5s;
      }
      .imgC:hover{
        transform: scale(1.05);
      }
      .imgS{
        width: 192px;
      }
      @media (max-width: 423px) {
      .divs {
        flex-direction: column;
       }
       .imgC{
        width: 10rem;
        
       }
       .imgS{
        width: 160px;
       }
     }
    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary" style="margin-bottom:10px;">
  <div class="container-fluid" >
    <a class="navbar-brand">Sales Management</a>
    <form class="d-flex" role="search" method="post" action="index.php" autocomplete="off">
    <div class="dropdown m-1" >
   <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Manegment
  </button>
  <ul class="dropdown-menu" >
    <li><a class="dropdown-item" href="sales.php">Show all sales</a></li>
    <li><a class="dropdown-item" href="manegment.php">Manegment items</a></li>
    <li><a class="dropdown-item" href="serachDate.php">Inventories</a></li>
    <li><a class="dropdown-item" href="userMangment.php">User Mangment</a></li>
  </ul>
</div>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="input_serch">
      <button class="btn btn-outline-success" type="submit" name="btn_serch">Search</button>
    </form>
  </div>
</nav>
<div  style="display:flex;flex-direction: row;flex-wrap:wrap;" class="divs">
<?php
include 'connection.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:index.html');
}
  if(isset($_POST['btn_serch'])){
    $code = $_POST['input_serch'];
    // echo $code;
    $quere = mysqli_query($con,"SELECT * FROM `products` WHERE `code_item` LIKE '%$code%'");
    while($row = mysqli_fetch_array($quere)){
      echo "<div class='img-card imgC bg-light' style='border-radius:5px 5px 0 0;margin:10px;'>";
        echo "<img src='assets/image/".$row['img']."' class='imgS'>";
        echo "<div class='bg-secondary' style='padding:5px;border-radius:5px 5px 0 0;'>";
          echo "<h6 style='font-weight: 900;letter-spacing: 1px;' name='name'>Name :&nbsp &nbsp ".$row['item_name']."</h6>";
          echo "<div class='price-card' style='display: flex;justify-content: space-evenly;align-items: center;'>";
              echo "<h6 class='price' name='price' style='font-weight: 900;letter-spacing:1px ;'>Price : ".$row['item_price']."</h6>";
              echo "<input value='".$row['Purchase_price']."' style='display:none;' name='p_price'>";
              echo "<a class='btn btn-primary' href='sales.php?ID=".$row['item_id']."'>add</a>";
          echo "</div>";
          echo "</div>";
      echo "</div>";
    }
  }else{
$resultat = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_array($resultat)){
  echo "<div class='img-card imgC bg-light' style='border-radius:5px 5px 0 0;margin:10px;'>";
    echo "<img src='assets/image/".$row['img']."' class='imgS'>";
    echo "<div class='bg-secondary' style='padding:5px;border-radius:5px 5px 0 0;'>";
      echo "<h6 style='font-weight: 900;letter-spacing: 1px;' name='name'>Name :&nbsp &nbsp ".$row['item_name']."</h6>";
      echo "<div class='price-card' style='display: flex;justify-content: space-evenly;align-items: center;'>";
          echo "<h6 class='price' name='price' style='font-weight: 900;letter-spacing:1px ;'>Price : ".$row['item_price']."</h6>";
          echo "<input value='".$row['Purchase_price']."' style='display:none;' name='p_price'>";
          echo "<a class='btn btn-primary' href='sales.php?ID=".$row['item_id']."'>add</a>";
      echo "</div>";
      echo "</div>";
  echo "</div>";
}
}
?>
</div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/scrpit.js"></script>
</body>
</html>