<?php
include("all_dashboard.php");
include("connection.php");
$query = "select * from tbl_cart";
$result = mysqli_query($con, $query);

?>
<table class="table border border-2 border-dark">
    <thead >
        <th>SR. NO.</th>
        <th>User Name</th>
        <th>Product Name</th>
        <th>Product Image</th>
        <th>Category Name</th>
        <th>Status</th>
        <th>Date Of Order</th>
        <th>Remove</th>
    </thead>
    <tbody>
						<?php
						$a=1;
                         while($row=mysqli_fetch_array($result)){
						?>
                        <tr>
                                <td><?php echo $a;?></td>
								<?php $user_id=$row['user_id']; 
								$query2="select * from tbl_user where user_id='$user_id'";
								$res2=mysqli_query($con, $query2);
								$row2=mysqli_fetch_array($res2);
								?>
                                <td><?php echo $row2['name']; ?></td>
								<!--product access-->
								<?php $pro_id=$row['pro_id']; 
								$query3="select * from tbl_product where pro_id='$pro_id'";
								$res3=mysqli_query($con, $query3);
								$row3=mysqli_fetch_array($res3);
								?>
								
                                <td><?php echo $row3['pro_name']; ?></td>
                                <td><img src="product/<?php echo $row3['file_name']; ?>" style="height:100px; width:100px;"></td>
                                
								<?php $cate_id=$row['cate_id']; 
								$query4="select * from tbl_category where cat_id='$cate_id'";
								$res4=mysqli_query($con, $query4);
								$row4=mysqli_fetch_array($res4);
								?>
								
                                <td><?php echo $row4['name']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                
								<td><?php echo $row['date']; ?></td>
								<td><a href="deleteuser.php?id=<?php echo $row['user_id']; ?>">Remove</a></td>
								
                                
                        </tr>
                        
                       <?php
					   $a++;
						 }
						?>
                    </tbody>
</table>