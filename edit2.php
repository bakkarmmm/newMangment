<?php
include 'connection.php';
$id=$_POST['id'];
$item_name = $_POST['Item_Name'];
$code_items =$_POST['Code_Items'];
$Item_price =$_POST['Item_price'];
$Purchase_price = $_POST['Purchase_price'];
$qauntity =$_POST['qauntity'];
$disc_item =$_POST['disc_item'];
$image = $_FILES['img'];
$image_name = $_FILES['img']['name'];
$image_temp =$_FILES['img']['tmp_name'];
$image_ex = strtolower(end(explode('.' ,$image_name)));
$image_random = rand(0,100000000000000000).'.' . $image_ex ;
//echo $image_random;
move_uploaded_file($image_temp,'C:\xampp\htdocs\www\displayItem\assets\image\\'. $image_random);
//echo $image_name;
//echo $image_ex;
$sql = "UPDATE `products` SET `item_name`='$item_name',`code_item`='$code_items',`item_price`='$Item_price',
`Purchase_price`='$Purchase_price',
`Quantity`='$qauntity',`disc`='$disc_item',`img`='$image_random' WHERE `item_id`=".$id;
mysqli_query($con,$sql);
mysqli_close($con);
Header ('location:manegment.php');
?>  