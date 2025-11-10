<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_notification where sr_no='$id'";
mysqli_query($con,$query);
header("Location:notification.php");
?>