<?php
$name=$_POST['name'];
// echo $name;
$email=$_POST['email'];
// echo $email;
$mobile=$_POST['mobile'];
// echo $mobile;
$message=$_POST['massage'];
// echo $message;

$con=mysqli_connect("localhost","root","","os");
$query="insert into tbl_contact(name,email,mobile,message,date) values('$name','$email','$mobile','$message',now())";
mysqli_query($con,$query);
?>