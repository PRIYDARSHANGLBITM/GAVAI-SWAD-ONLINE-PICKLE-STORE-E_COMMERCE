<?php
include("header.php");
include("admin/connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);
?>
<!--
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project</title>
  <link href="assets/cs/bootstrap.css" rel="stylesheet" />
  <link href="assets/cs/style.css" rel="stylesheet" type="text/css" />
  <script src="assets/js/bootstrap.bundle.js" rel="stylesheet"></script>
   font-icon & font-awesome 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row sticky-top bg-light">
      <div class="col-sm-2 "><i class="bi bi-envelope"></i> roorax04@gmail.com</div>
      <?php
      // $con = mysqli_connect("localhost", "root", "", "os");
      // $query = "select * from tbl_notification order by sr_no desc limit 1";
      // $notice = mysqli_query($con, $query);
      // $notification = mysqli_fetch_array($notice);
      ?>
      <div class="col-sm-6 ">
        <marquee><span class="text-primary"><?php //echo $notification['notification']; ?></span></marquee>
      </div>
      <div class="col-sm-4 text-end ">
        Best a seller |
        <i class="fa fa-phone ms-2"></i> Contact us
        | Follow me |
        <a href="#"><i class="fa fa-facebook ms-2"></i></a>
        <a href="#"><i class="fa fa-whatsapp ms-2"></i></a>
        <a href="#"><i class="fa fa-instagram ms-2"></i></a>
        <a href="#"><i class="fa fa-twitter ms-2"></i></a>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-2">
        <img src="assets/images/logo.gif" height="70px" />

      </div>
      <div class="col-sm-6">

        <div class="row">
          <div class="col-sm-10 mt-2">
            <nav class="navbar ">
              <form class="container-fluid">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </form>
            </nav>

          </div>
          <div class="col-sm-2 mt-3 px-1 ">
            <input type="submit" value="Search" class="form-control bg-success" />
          </div>
        </div>
        </form>
      </div>
      <div class="col-sm-4 mt-3" id="fafa">
        <a class="px-3 ms-3 abc " href="#">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <a class="px-3 ms-3 abc " href="#">
            <i class="bi bi-bell"></i>
          </a>
          <a class="px-3 ms-3 abc" href="#">
            <i class="bi bi-heart"></i>
          </a>
          <a class="px-3 ms-3 abc" href="cart.php">
            <i class="bi bi-cart-plus"></i>
          </a>
          <a class="px-3 ms-3 abc" href="login.php">
            <i class="fa fa-user"></i></a>
      </div>
    </div>

    -Start Navbar
    <div class="row bg-warning sticky-top">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <nav class="navbar navbar-expand-lg ">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a class="navbar-brand" href="about.php"><i class="bi bi-person"></i> About Us</a>
            <a class="navbar-brand" href="contact.php"><i class="fa fa-phone"></i> Contuct Us</a>
            <a class="navbar-brand" href="contact.php"><i class=""></i> Products</a>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Loging Here
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    <li><a class="dropdown-item" href="profile.php">Profile Setting</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cart
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Add To Cart</a></li>
                    <li><a class="dropdown-item" href="#">Buy Now</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-sm-3"></div>
    </div>-->
    <!--end navbar-->
    <!--start slider-->
    <div class="row">
      <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/images/banners/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/banners/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/banners/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/banners/4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/banners/5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/images/banners/6.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!--end slider-->
    <!--start service-->
    <div class="row mt-3">
      <div class="col-sm-12">
        <img src="assets/images/jaggery1.png" style="height:100%;width:100%;" alt="">
      </div>
    </div>
    <div class="row ravi m-3">
      <div class="col-sm-3">
        <img src="assets/images/img8.jpg" />
      </div>
      <div class="col-sm-9 ">
        <h2 align="center"><i><u>ABOUT</u></i></h2>
        <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus officiis non asperiores excepturi, quasi mollitia beatae dolores sint maxime quia dignissimos provident ipsam dolorum quo magnam rem impedit laborum. Tempore corrupti, enim architecto animi molestias expedita, repellendus accusamus ut in dolor neque! Ea assumenda quos aperiam et exercitationem doloremque ipsum amet dolor consequuntur, in iure corrupti laborum quo. Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!</p>
      </div>
    </div>
    <!--end service-->
    <!--start service1-->
    <div class="row  mt-2 ravi">
      <h1 align="center"><cite>TODAY BEST OFFER</cite></h1>
    </div>
    <div class="row text-center best m-3">
      <div class="col-sm-3">
        <a href="#"><img src="assets/images/img10.jpg" class="rounded-circle border border-3 border-info" /></a>
        <button type="button" class="btn btn-warning mt-3">Add to card</button>
      </div>
      <div class="col-sm-3 ">
        <a href="#"><img src="assets/images/img11.jpg" class="rounded-circle border border-3 border-info" /></a>
        <button type="button" class="btn btn-warning mt-3">Add to card</button>
      </div>
      <div class="col-sm-3 ">
        <a href="#"><img src="assets/images/img5.jpg" class="rounded-circle border border-3 border-info" /></a>
        <button type="button" class="btn btn-warning mt-3">Add to card</button>
      </div>
      <div class="col-sm-3 ">
        <a href="#"><img src="assets/images/img8.jpg" class="rounded-circle border border-3 border-info" /></a>
        <button type="button" class="btn btn-warning mt-3">Add to card</button>
      </div>


    </div>
    <!--end service1-->
    <!-- staet service2-->
    
    <!--end service2-->
    <!--start service4-->
    <div class="container-fluid">

      <?php
      while ($row = mysqli_fetch_array($res)) {
      ?>
        <div class="row ravi mt-3">
          <h1 align="center"><cite><?php echo $row['name'];   ?></cite></h1>
        </div>
        <div class="row  m-3">
          <?php
          $cat_id = $row['cat_id'];
          $query2 = "select * from tbl_product where cat_id='$cat_id'";
          $res2 = mysqli_query($con, $query2);
          while ($row2 = mysqli_fetch_array($res2)) {

          ?>
            <div class="col-sm-3">
              <div class="card " style="height:100%;">
                <img src="admin/product/<?php echo $row2['file_name'];  ?>" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body bg-danger bg-opacity-10">
                  <h5 class="card-title"><?php echo $row2['pro_name'];  ?></h5>
                  <h6 class="card-title">Rs: <?php echo $row2['s_price'];  ?>/-</h6>
                  <p class="card-text"><?php echo $row2['description'];  ?></p>
                  <a href="cart_code.php?pro_id=<?php echo $row2['pro_id']; ?>&cate_id=<?php echo $row2['cat_id'];?>" class="btn btn-warning">Add to card</a>
                  <!-- <button type="button" class="btn btn-warning float-end text-decoration"> -->
                  <a href="single.php?pro_id=<?php echo $row2['pro_id']; ?>" class="btn btn-warning float-end">Buy now</a>

                </div>
              </div>
            </div>
            <?php
          }
          
          ?>
          </div>
    

  <?php
      }

  ?>
  </div>
  <!--end service4-->

  <!-- start footer-->
<!-- 
  <div class="row mt-3 bg-dark text-light">
    <div class="cl-sm-12">
    <div class="row m-3">
    <div class="col-sm-2 "><b class="text-warning">ADDRESS</b><br />
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
    <div class="col-sm-2"><b text-align="center" class="text-warning">ABOUT</b><br>
      <p><a href="#" class="footer">Contact Us</a></p>
      <p><a href="#" class="footer">About Us</a></p>
      <p><a href="#" class="footer">Press</a></p>
      <p><a href="#" class="footer">Vinegar Store</a></p>
      <p><a href="#" class="footer">Vinegar Wholesale</a></p>
    </div>
    <div class="col-sm-2 "><b text-align="center" class="text-warning">POLICY</b><br>
      <p><a href="#" class="footer">Return</a></p>
      <p><a href="#" class="footer">Terms Of Use</a></p>
      <p><a href="#" class="footer">Security</a></p>
      <p><a href="#" class="footer">Privacy</a></p>
    </div>

    <div class="col-sm-2  "><b text-align="center" class="text-warning">HELP</b><br>
      <p><a href="#" class="footer">Payments</a></p>
      <p><a href="#" class="footer">Shipping</a></p>
      <p><a href="#" class="footer">Cancellation</a></p>
      <p><a href="#" class="footer">Report Infringement</a></p>
    </div>
    <div class="col-sm-1  "><b text-align="center" class="text-warning">SOCIAL</b><br>
      <p><a href="#" class="footer">Facebook</a></p>
      <p><a href="#" class="footer">Twitter</a></p>
      <p><a href="#" class="footer">YouTube</a></p>
      <p><a href="#" class="footer">Instagram</a></p>
      <p><a href="#" class="footer">Linkdin</a></p>
    </div>
    <div class="col-sm-3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57317.44419528678!2d85.35131734058022!3d26.120446419503544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed10e8a3175529%3A0x7c2d919680f759d!2z4KSu4KWB4KSc4KSr4KWN4KSr4KSw4KSq4KWB4KSwLCDgpKzgpL_gpLngpL7gpLA!5e0!3m2!1shi!2sin!4v1661317521045!5m2!1shi!2sin" width="300" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  </div>
  </div>

  </div>  -->
<?php
include("footer.php");
?>
  <!--end footer -->

  </div>
</body>

</html>