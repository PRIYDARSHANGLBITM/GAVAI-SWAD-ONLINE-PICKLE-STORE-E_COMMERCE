<?php
include("all_dashboard.php");
include("connection.php");
$query = "select * from tbl_contact";
$res = mysqli_query($con, $query);

?>  
<div class="col-sm-12 ">
    <h1 class="text-center mt-2"><i>View Contacts's</i></h1>
    <hr style="height:5px; background-color:black">
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table">
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Message</th>


            </tr>
            <?php
            $a = 1;
            while ($row = mysqli_fetch_array($res)) {

            ?>
                <tr>
                    <td><?php echo $a; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                </tr>
            <?php
                $a++;
            }
            ?>
        </table>
    </div>
</div>