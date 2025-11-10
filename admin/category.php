<?php
include("all_dashboard.php");
include("connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);
?>

<div class="col-sm-12">
    <h1 class="text-center mt-2"><i>Add To Category</i></h1>
    <hr style="height:5px; background-color:black">
</div>
<div class="row">
    <div class="col-sm-12">
        <form action="category_code.php" method="post">
            <input class="form-control text-center mt-5" type="text" placeholder="Add your category...." name="category">
            <input class="form-control text-center bg-danger mt-3" type="submit" value="Add">
        </form>
    </div>
</div>
<div class="row text-center mt-5">
    <div class="col-sm-12">
        <h1><cite>See of the Category List</cite></h1>
    </div>
</div>
<!-- <div class="row"> -->
<table class="table text-center mt-3">
    <thead class="table-dark">
        <tr>
            <th>Sr. No.</th>
            <th>Name</th>
            <th>Date</th>
            <th>Remove</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $a = 1;
        while ($row = mysqli_fetch_array($res)) {
        ?>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><a href="cat_delete.php?id=<?php echo $row['cat_id']; ?>" style="text-decoration:none;color:red;">remove</a></td>
            </tr>
    </tbody>
<?php
            $a++;
        }
?>
</table>
<!-- </div> -->






<div class="row bg-dark text-center text-light mx-0">
    <div class="col-sm-12">
        <p>copyright &copy; 2022-2023 Designed Devloped By : Ranjan Kumar Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
    </div>
</div>
</div>
</body>

</html>