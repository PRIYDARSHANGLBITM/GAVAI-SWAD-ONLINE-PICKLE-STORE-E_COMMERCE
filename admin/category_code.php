<?php
$category=$_POST['category'];
// echo $category;
include("connection.php");
$query="insert into tbl_category(name,date) values('$category',now())";
mysqli_query($con,$query);
// echo "inserted";
header("Location:category.php");
?>