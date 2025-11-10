<?php
    $pro_id=$_POST['pro_id'];

    $pro_name=$_POST['pro_name'];

   $img_name=$_FILES['image']['name'];

   $tmp_name=$_FILES['image']['tmp_name'];

   $unit=$_POST['unit'];
   
   $c_price=$_POST['c_price'];

   $s_price=$_POST['s_price'];

$exp=$_POST['exp'];

   $descripation=$_POST['desc'];
   $location="product/";
   include("connection.php");
    if($img_name==""){
        $query="update tbl_product set pro_name='$pro_name', unit='$unit', c_price='$c_price', s_price='$s_price', expire='$exp', descripation='$descripation' where pro_id='$pro_id'";
        mysqli_query($con, $query);
        header("location:view_product.php");
    }else{

    unlink($location.$img_name);
    $query1="update tbl_product set pro_name='$pro_name', filename='$img_name', unit='$unit', c_price='$c_price', s_price='$s_price', expire='$exp', description='$descripation' where pro_id='$pro_id'";
    mysqli_query($con, $query1);
    move_uploaded_file($tmp_name,$location.$img_name);
    header("location:view_product.php");
    }

?>