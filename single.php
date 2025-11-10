<?php

session_start();
if ($_SESSION['user']=="") {
    header("location:login.php");
} else {
    $pro_id = $_REQUEST['pro_id'];
    // echo $pro_id;
    include('admin/connection.php');
    $query = "select * from tbl_product where pro_id='$pro_id'";
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $user = $_SESSION['user'];
    $query2 = "select * from tbl_user where email ='$user'";
    $res2 = mysqli_query($con, $query2);
    $row2 = mysqli_fetch_array($res2, MYSQLI_ASSOC);
    include("header.php");
    // if(mysqli_num_rows($res) > 0 ) {
    //     while($row = mysqli_fetch_assoc($res)){
        
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-1">
                            <img src="admin/product/<?php echo $row['file_name'];?> "class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-11">
                            <div class="card-body">
                                <h5 class="card-title"><?php  echo $row['pro_id']; ?> </h5>
                                <h5 class="card-title">Rs. <?php echo $row['s_price']; ?>/-</h5>
                                <p class="card-text"><?php  echo $row['description']; ?></p>
                                <small class="text-muted">Shipping Address :- <?php echo $row2['address']; ?></small><br><br>
                                <input type="radio" />Cash on delivery
                                <form action="single_code.php" method="post">
                                    <input type="hidden" name="user" value="<?php echo $row2['user_id']; ?>" />
                                    <input type="hidden" name="pro" value="<?php echo $row['pro_id']; ?>" />
                                    <input type="hidden" name="cat" value="<?php echo $row['cat_id']; ?>" />
                                    <input type="hidden" name="unit" value="<?php echo $row['total_unit']; ?>" id="" />
                                    <input type="hidden" name="amount" value="<?php  echo $row['s_price']; ?>" id="" />
                                    <button type="submit" class="btn btn-danger float-end">Place Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>
<?php
}