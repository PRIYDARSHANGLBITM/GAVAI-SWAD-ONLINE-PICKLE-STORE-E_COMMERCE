<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_category where cat_id='$id'";
mysqli_query($con,$query);
header("Location:category.php");
?>