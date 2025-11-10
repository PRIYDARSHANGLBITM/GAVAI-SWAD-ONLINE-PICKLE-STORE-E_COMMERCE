<?php
$order_id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_order where order_id='$order_id'";
mysqli_query($con,$query);
header("Location:sold_item.php");
?>