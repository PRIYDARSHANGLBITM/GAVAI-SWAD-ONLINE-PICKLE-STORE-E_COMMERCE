<?php
session_start();
if(!isset($_SESSION['user'])){
  $_SESSION["user"] = "";
}
include("admin/connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project</title>
  <link href="assets/cs/bootstrap.css" rel="stylesheet" />
  <link href="assets/cs/style.css" rel="stylesheet" type="text/css" />
  <script src="assets/js/bootstrap.bundle.js"></script>
  <!-- font-icon & font-awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row sticky-top bg-light">
      <div class="col-sm-2 "> priydarshan12345@gmail.com</div>
      <?php
      $con = mysqli_connect("localhost", "root", "", "os");
      $query = "select * from tbl_notification order by sr_no desc limit 1";
      $notice = mysqli_query($con, $query);
      $notification = mysqli_fetch_array($notice);
      ?>
      <div class="col-sm-6 ">
        <marquee><span class="text-primary"><?php echo $notification['notification']; ?></span></marquee>
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
        <img src="assets/images/logod.png" style="height: 100%; width:100%;" />

      </div>
      <div class="col-sm-6">

        <div class="row">
          <div class="col-sm-10">
            <nav class="navbar ">
              <form class="container-fluid">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </form>
            </nav>

          </div>
          <div class="col-sm-2  mt-2">
            <input type="submit" value="Search" class="form-control bg-success" />
          </div>
        </div>
        </form>
      </div>
      <div class="col-sm-4 mt-2" id="fafa">
        <a class="px-3 ms-3 abc " href="#">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <a class="px-3 ms-3 abc " href="#">
            <i class="bi bi-bell"></i>
          </a>
          <a class="px-3 ms-3 abc" href="#">
            <i class="bi bi-heart"></i>
          </a>
          <a class="px-3 ms-3 abc" href="single.php">
            <i class="bi bi-cart-plus"></i>
          </a>
          <a class="px-3 ms-3 abc" href="login.php">
            <i class="fa fa-user"></i></a>
      </div>
    </div>

    <!--Start Navbar-->

    <div class="row bg-warning sticky-top">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        <nav class="navbar navbar-expand-lg ">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a class="navbar-brand" href="about.php"><i class="bi bi-file-earmark-person"></i> About Us</a>
            <a class="navbar-brand" href="contact.php"><i class="fa fa-phone"></i> Contact Us</a>
            <a class="navbar-brand" href="products.php"><i class="bi bi-bag-check"></i> Products</a>
           
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="header.php" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-people"></i>
                  <?php 
                  if ($_SESSION['user']=="") {
                      echo 'Login Here';
                  } else {
                    echo 'Profile';
                  }
                    ?>
                  </a>
                  <ul class="dropdown-menu">
                    <?php
                  if ($_SESSION['user']=="") {
                      echo '
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="register.php">Register</a></li>
                      ';
                  } else {
                    echo '
                    <li><a class="dropdown-item" href="profile.php">Profile Setting</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    ';
                  }
                  ?>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cart
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="cart.php">Add To Cart</a></li>
                    <li><a class="dropdown-item" href="single.php">Buy To Cart</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-sm-3"></div>
    </div>
    <!--end navbar-->


 
 