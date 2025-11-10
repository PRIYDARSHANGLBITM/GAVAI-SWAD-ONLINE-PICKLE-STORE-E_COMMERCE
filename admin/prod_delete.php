<?php
$id=$_REQUEST['id'];
// echo $id;

include("connection.php");
$query="delete  from tbl_product where pro_id='$id'";
mysqli_query($con,$query);

header("Location:view_product.php");
?>