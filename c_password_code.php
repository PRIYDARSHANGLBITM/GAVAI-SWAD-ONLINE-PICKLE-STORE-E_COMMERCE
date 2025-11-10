<?php
session_start();
$email=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","os");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pp=$row['password'];
}
$op=$_POST['op'];
// echo $op;
$np=$_POST['np'];
// echo $np;
$cnp=$_POST['cnp'];
// echo $cnp;
if($pp=$op)
{
    // echo "Old and new password is matched";
    if($op==$np)
    {
        header("location:change_password.php");
    }
    else if($np==$cnp)
    {
        $con=mysqli_connect("localhost","root","","os");
        $query="update tbl_user set password='$np'where email='$email'";
        mysqli_query($con,$query);
        session_destroy();
        header("Location:login.php");
    }
    else{
        header("location:change_password.php");
    }
}
else{
    header("location:change_password.php"); 
}

?>