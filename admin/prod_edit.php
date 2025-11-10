<?php
include("all_dashboard.php");
$pro_id=$_REQUEST['id'];

include("connection.php");

$query1 = "select * from tbl_product where pro_id='$pro_id'";

$res1=mysqli_query($con,$query1);

if($row1=mysqli_fetch_array($res1))
{
?>

    <div class="clo-sm-12">

        <table>
        <form action="update_product.php" method="post" enctype="multipart/form-data">
           

                
                    <input type="hidden" name="pro_id" id="" class="form-control my-2  inp"
                        value="<?php echo $row1['pro_id'];?>">
                    <p class="text-dark"><b>Product Name</b></p>
                    <input type="text" name="pro_name" id="" class="form-control  my-2 inp"
                        value="<?php echo $row1['pro_name'];?>">
                    <p class="text-dark"><b>Product Image</b></p>
                    <input type="file" name="image" id="" class="form-control   my-2 inp ">
                    <p class="text-dark"><b>Product Unit</b></p>
                    <input type="number" name="unit" id="" class="form-control my-2 inp "
                        value="<?php echo $row1['total_unit'];?>">
                    <p class="text-dark"><b>Cost Price</b></p>
                    <input type="number" name="c_price" id="" class="form-control my-2 inp "
                        value="<?php echo $row1['c_price'];?>">
                    <p class="text-dark"><b>Selling Price</b></p>
                    <input type="number" name="c_price" id="" class="form-control my-2 inp "
                        value="<?php echo $row1['c_price'];?>">
                    <p class="text-dark"><b>Discount selling Price</b></p>
                    <input type="number" name="s_price" id="" class="form-control my-2 inp "
                        value="<?php echo $row1['s_price'];?>">
                    <p class="text-dark"><b>Expire Date</b></p>
                    <input type="date" name="expari" id="" class="form-control my-2 inp" value="<?php echo $row1['expiry'];?>">
                    <p class="text-dark"><b>Description</b></p>
                    <textarea name="desc" class="form-control my-2 inp "><?php echo $row1['description'];?></textarea>
                    <input type="submit" class="btn main-btn btn-info inp" value="Update Product">
                </div>
            </div>
        </form>
        </table>
        <?php }?>
    </div>
</div>
