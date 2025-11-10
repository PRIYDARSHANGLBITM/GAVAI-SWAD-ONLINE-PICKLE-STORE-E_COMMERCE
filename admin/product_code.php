<?php
$pro_name=$_POST['pro_name'];
//  echo "$pro_name";
$category=$_POST['cat_id'];
//  echo "$id";
$product_image=$_FILES['photo']['name'];
//  echo "$product_image";
$tmp_name=$_FILES['photo']['tmp_name'];
// echo "$tmp_name";
$total_unit=$_POST['unit'];
// echo "$total_unit";
$cost_price=$_POST['c_price'];
// echo "$Cost_Price";
$selling_price=$_POST['s_price'];
// echo "$Selling_Price";
$expiry_date=$_POST['expiry'];
// echo "$Expiry_Date";
$description=$_POST['description'];
// echo "$Description";

$location="product/";
include("connection.php");
$query="insert into tbl_product(pro_name,cat_id,file_name,total_unit,c_price,s_price,expiry,description,date) values('$pro_name','$category','$product_image','$total_unit','$cost_price','$selling_price','$expiry_date','$description',now())";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$product_image);
header("Location:view_product.php");
?>