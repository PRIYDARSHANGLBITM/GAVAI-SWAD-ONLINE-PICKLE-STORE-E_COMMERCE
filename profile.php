<?php
include("user_all_profile.php");
session_start();
$email = $_SESSION['user'];
if ($_SESSION['user'] == "") {
    header("location:login.php");
} else {
    $con = mysqli_connect("localhost", "root", "", "os");
    $query = "select * from tbl_user where email='$email'";
    $res = mysqli_query($con, $query);

    if ($row = mysqli_fetch_array($res)) {

?>
        <table border="2px solid black;"  class="table mt-5">
            <tr>
                <th>Name :</th>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
                <th>Email :</th>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <th>Mobile :</th>
                <td><?php echo $row['mobile']; ?></td>
            </tr>
            <tr>
                <th>Address :</th>
                <td><?php echo $row['address']; ?></td>
            </tr>
        </table>

<?php
    }
}
?>
</div>
</div>

</body>

</html>