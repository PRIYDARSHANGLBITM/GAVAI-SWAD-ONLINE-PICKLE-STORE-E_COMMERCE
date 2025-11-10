<?php
$notification=$_POST['notification'];
// echo $notification;
include("connection.php");
$query="insert into tbl_notification(notification,date) values('$notification',now())";
mysqli_query($con,$query);
// echo "inserted";
header("Location:notification.php");
?>