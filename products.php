<?php
include("header.php");
include("admin/connection.php");
$query = "select * from tbl_product";
$res = mysqli_query($con, $query);
?>
   
    <!-- staet service2-->
    <div class="row ravi ">
      <h1 align="center"><cite>OUR BEST PRODUCT</cite></h1>
    </div>
    <div class="container-fluid">
      <div class="row  m-3">
        <?php
        while ($row = mysqli_fetch_array($res)) {
        ?>


          <div class="col-sm-3">
            <div class="card h-100">
              <img src="admin/product/<?php echo $row['file_name']; ?>" class="card-img-top product" alt="...">
              <div class="card-body bg-warning bg-opacity-10">
                <h4 class="cart-tittle"><?php echo $row['pro_name']; ?></h4>
                <h5 class="card-title">Rs <?php echo $row['s_price']; ?>/-</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <button type="button" class="btn btn-warning">Add to card</button>
                <button type="button" class="btn btn-warning float-end">Buy now</button>
              </div>
            </div>
          </div>

        <?php
        }

        ?>
      </div>
    </div>
    <!--end service2-->


    <!--start footer-->

    <!-- <div class="row mt-3 bg-dark text-light">
      <div class="col-sm-2 "><b>ADDRESS</b><br />
        Name:Ranjan Kumar<br>
        Vinegar and Jaggery Store Private Limited,
        Buildings Patna, Begonia &
        Clove Embassy Tech Village,
        Outer Ring Road, Devarabeesanahalli Village,
        Bengaluru, 560103,
        Karnataka, India
        CIN:U51109KA2012PTC066107
        Contacts:6205231516
      </div>
      <div class="col-sm-2 "><b text-align="center">ABOUT</b><br>
        <p><a href="#" class="footer">Contact Us</a></p>
        <p><a href="#" class="footer">About Us</a></p>
        <p><a href="#" class="footer">Press</a></p>
        <p><a href="#" class="footer">Vinegar Store</a></p>
        <p><a href="#" class="footer">Vinegar Wholesale</a></p>
      </div>
      <div class="col-sm-2 "><b text-align="center">POLICY</b><br>
        <p><a href="#" class="footer">Return</a></p>
        <p><a href="#" class="footer">Terms Of Use</a></p>
        <p><a href="#" class="footer">Security</a></p>
        <p><a href="#" class="footer">Privacy</a></p>
      </div>

      <div class="col-sm-2  "><b text-align="center">HELP</b><br>
        <p><a href="#" class="footer">Payments</a></p>
        <p><a href="#" class="footer">Shipping</a></p>
        <p><a href="#" class="footer">Cancellation</a></p>
        <p><a href="#" class="footer">Report Infringement</a></p>
      </div>
      <div class="col-sm-1  "><b text-align="center">SOCIAL</b><br>
        <p><a href="#" class="footer">Facebook</a></p>
        <p><a href="#" class="footer">Twitter</a></p>
        <p><a href="#" class="footer">YouTube</a></p>
        <p><a href="#" class="footer">Instagram</a></p>
        <p><a href="#" class="footer">Linkdin</a></p>
      </div>
      <div class="col-sm-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57317.44419528678!2d85.35131734058022!3d26.120446419503544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed10e8a3175529%3A0x7c2d919680f759d!2z4KSu4KWB4KSc4KSr4KWN4KSr4KSw4KSq4KWB4KSwLCDgpKzgpL_gpLngpL7gpLA!5e0!3m2!1shi!2sin!4v1661317521045!5m2!1shi!2sin" width="360" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div> -->

    <?php
include("footer.php");
    ?>
    <!--end footer-->
  </div>
</body>

</html>