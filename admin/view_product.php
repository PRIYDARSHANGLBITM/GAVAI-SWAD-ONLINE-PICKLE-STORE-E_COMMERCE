<?php
include("all_dashboard.php");
include("connection.php");
$query = "select * from tbl_product";
$res = mysqli_query($con, $query);
?>
<div class="col-sm-12">
    <h1 class="text-center mt-2"><i><u>View Product</u></i></h1>
    <hr style="height:5px; background-color:black">
</div>
<div class="row text-center">
    <table class="table border border-dark border-2">
        <form action="">
            <tr>
                <th>Sr. No.</th>
                <th>Product Name</th>
                <th>category Id</th>
                <th>File Name</th>
                <th>Total Unit</th>
                <th>Cost Price</th>
                <th>Selling Price</th>
                <th>Expiry Date</th>
                <th>Description</th>
                <th>Date $ Time</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_array($res)) {
            ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $row['pro_name']; ?></td>
                    <?php $cat_id = $row['cat_id'];
                    $query2 = "select * from tbl_category where cat_id='$cat_id'";
                    $res2 = mysqli_query($con, $query2);
                    $row2 = mysqli_fetch_array($res2);
                    ?>
                    <td><?php echo $row2['name']; ?></td>
                    <td><img src="product/<?php echo $row['file_name']; ?>" style="height:50%;width:50%;" /></td>
                    <td><?php echo $row['total_unit']; ?></td>
                    <td><?php echo $row['c_price']; ?></td>
                    <td><?php echo $row['s_price']; ?></td>
                    <td><?php echo $row['expiry']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><a href="prod_edit.php?id=<?php echo $row['pro_id']; ?>" style="text-decoration:none; color:green;">edit</a></td>
                    <td><a href="prod_delete.php?id=<?php echo $row['pro_id']; ?>" style="text-decoration:none; color:red;">delete</a></td>
                </tr>
            <?php
                $a++;
            }
            ?>
        </form>
    </table>
</div>


</div>
</div>
</div>
</div>
<div class="row bg-dark  text-light mx-0">
    <div class="col-sm-12 text-center mt-2">
        <p>copyright &copy; 2022-2023 Designed Devloped By : Ranjan Kumar Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
    </div>
</div>
</div>
</body>

</html>