<?php
$username=$_POST['name'];
// echo $username;
$useremail=$_POST['email'];
// echo $useremail;
$mobile=$_POST['mobile'];
// echo $mobile;
$password=$_POST['password'];
// echo $password;
$city=$_POST['city'];
// echo $city;
$address=$_POST['address'];
// echo $address;
//$date=$_POST['date'];
// echo $date;
 $con=mysqli_connect("localhost","root","","os");
 $query="insert into tbl_user(name,email,mobile,password,city,address,dor) values('$username','$useremail','$mobile','$password','$city','$address',curdate())";
 mysqli_query($con,$query);
 header("location:login.php");
?>