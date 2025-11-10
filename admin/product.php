<?php
include("all_dashboard.php");
include("connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);
?>
<div class="col-sm-12">
    <h1 class="text-center mt-2"><i><u>Add Product</u></i></h1>
    <hr style="height:5px; background-color:black">
</div>
<div class="row">
    <form class="d-flex" role="input" action="product_code.php" method="post" enctype="multipart/form-data">
        <table class="table text-center mt-3" border="2px;">
            <tr>
                <th>Product Name<sup style="color:red;">*</sup></th>
                <td><input class="form-control me-2 text-center" type="text" name="pro_name" placeholder="Add your category...." required></td>
            </tr>
            <tr>
                <th>Category<sup style="color:red;">*</sup></th>
                <td>

                    <select name="cat_id" style="height:35px;width:100%; border:none; border-radius:5px;" required>
                        <option value="">--select Category--</option>
                        <?php
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <option value="<?php echo $row['cat_id']; ?>">
                                <?php echo $row['name']; ?>
                            </option>

                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Product Image<sup style="color:red;">*</sup></th>
                <td><input class="form-control text-center" type="file" name="photo" required></td>
            </tr>
            <tr>
                <th>Total Unit<sup style="color:red;">*</sup></th>
                <td><input class="form-control text-center" type="number" name="unit" placeholder="Add your unit...." required></td>
            </tr>
            <tr>
                <th>Cost Price<sup style="color:red;">*</sup></th>
                <td><input class="form-control text-center" type="text" name="c_price" placeholder="Add your cost Price" required></td>
            </tr>
            <tr>
                <th>Selling Price<sup style="color:red;">*</sup></th>
                <td><input class="form-control text-center" type="text" name="s_price" placeholder="Add your selling price...." required></td>
            </tr>
            <th>Expiry Date<sup style="color:red;">*</sup></th>
            <td><input class="form-control text-center" type="date" name="expiry" required></td>
            </tr>
            <th>Description<sup style="color:red;">*</sup></th>
            <td><textarea class="form-control me-2 text-center" type="text" placeholder="Add your description...." name="description" required></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input class="form-control text-center bg-danger mt-3" type="submit" value="Add Product"></td>
            </tr>

        </table>
    </form>
</div>
</div>
<div class="row bg-dark text-center text-light">
    <div class="col-sm-12">
        <p>copyright &copy; 2022-2023 Designed Devloped By : Ranjan Kumar Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
    </div>
</div>
</div>
</body>

</html>