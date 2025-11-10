<?php
include("all_dashboard.php");
include("connection.php");
$query = "select * from tbl_user";
$res = mysqli_query($con, $query);
?>
<div class="col-sm-12">
    <h1 class="text-center mt-2"><i><u>View User</u></i></h1>
    <hr style="height:5px; background-color:black">
</div>

<div class="row text-center">
    <table class="table border border-dark border-2">
        <form action="">
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>City</th>
                <th>Addrress</th>
                <th>Date & Time</th>
            </tr>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_array($res)) {
            ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['dor']; ?></td>
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
<div class="row bg-dark text-light mx-0">
    <div class="col-sm-12 text-center mt-2">
        <p>copyright &copy; 2022-2023 Designed Devloped By : Ranjan Kumar Under the Guidance Mr. Rohit Kumar Softpro India PVT. LTD.</p>
    </div>
</div>
</div>
</body>

</html>