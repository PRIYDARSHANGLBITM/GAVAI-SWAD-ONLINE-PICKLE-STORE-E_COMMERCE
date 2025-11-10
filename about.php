<?php
include("header.php");
include("admin/connection.php");
$query = "select * from tbl_category";
$res = mysqli_query($con, $query);
?>
<!-- <!doctype html>
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
            <div class="col-sm-6 ">
                <marquee>Best offer for durga pooja</marquee>
            </div>
            <div class="col-sm-4 text-end ">
                Best a seller |
                <i class="fa fa-phone ms-2"></i> Contact us
                | Follow me |
                <a href=""><i class="fa fa-facebook ms-2"></i></a>
                <a href=""><i class="fa fa-whatsapp ms-2"></i></a>
                <a href=""><i class="fa fa-instagram ms-2"></i></a>
                <a href=""><i class="fa fa-twitter ms-2"></i></a>
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
                        <input type="button" value="Search" class="form-control bg-danger" />
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
                    <a class="px-3 ms-3 abc" href="#">
                        <i class="bi bi-cart-plus"></i>
                    </a>
                    <a class="px-3 ms-3 abc" href="#">
                        <i class="fa fa-user"></i></a>
            </div>
        </div>

        Start Navbar-
        <div class="row bg-warning sticky-top">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        <a class="navbar-brand" href="#"><i class="bi bi-person"></i> About Us</a>
                        <a class="navbar-brand" href="#"><i class="fa fa-phone"></i> Contuct Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Longout</a></li>
                            <li><a class="dropdown-item" href="#">Profile Setting</a></li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Loging Here
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Login</a></li>
                                        <li><a class="dropdown-item" href="#">Longout</a></li>
                                        <li><a class="dropdown-item" href="#">Profile Setting</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Prouuct
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Vinagar</a></li>
                                        <li><a class="dropdown-item" href="#">Jaggery</a></li>
                                        <li><a class="dropdown-item" href="#">Pickal</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cart
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Add To Cart</a></li>
                                        <li><a class="dropdown-item" href="#">Buy To Cart</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-3"></div>
        </div> -->
        <!--end navbar-->
        <!--start Aboutr-->
        <div class="row">
            <div class="col-sm-12 text-center mt-3 ">
                <img src="assets/images/logor.png"/>
            </div>
        <hr style="height:2px; background-color:black; margin-top:1%;">
            <h2  class="text-info text-center"><i>About Gavai Swad Agro Products (P) Limited</i></h2>
            <hr style="height:2px; background-color:black;">
            <div class="col-sm-4 ">
                <img src="assets/images/dow.png">
                <img src="assets/images/dow2.png">
            </div>
            <div class="col-sm-8">
            <p class="text-light " style="text-align:justify"><b><span class="text-info ">The Gavai Swad Agro Products P Limited (Gavai Swad) is a company founded in 2020</span></b>
                during the lockdown  period when the food services were not available in offline mode for
                window shopping.
                The vision behind starting “Gavai Swad” is to provide the real taste of India and the real
                products made out of desi raw material. Nowadays, getting Organic fruits and vegetables is
                next to impossible since adulteration has become a common practice. Unlike conventional
                ones which are coated with waxes and sprayed with chemicals, basically mummifying them.
                We, at Gavai Swad treat nature as it should be and provide a wide variety of the freshest
                possible products free from harmful pesticides and chemicals, that disrupt our physical health
                and mental wellbeing.<br><br>
                We offer a range of products like: <b><span class="text-info ">Sugarcane sirka, pickles, murabba, jaggery products</span></b> to our
                customers freshly made without using any chemicals &amp; pesticides. Since now all of us are
                getting more internet &amp; technology savvy and we all want the services at our doorstep and
                therefore gavaiswad.com portal came into existence.
                The products of Gavai Swad are available on Amazon, Flipkart, Swiggy &amp; other e-commerce
                based food portals.</p>
                </div>      
        </div>
        <hr>
        <div class="row m-3">
    
      <div class="col-sm-9 text-light">
        <h2 align="center"><i>Pickle</i></h2>
        <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus officiis non asperiores excepturi, quasi mollitia beatae dolores sint maxime quia dignissimos provident ipsam dolorum quo magnam rem impedit laborum. Tempore corrupti, enim architecto animi molestias expedita, repellendus accusamus ut in dolor neque! Ea assumenda quos aperiam et exercitationem doloremque ipsum amet dolor consequuntur, in iure corrupti laborum quo. Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!</p>
      </div>
      <div class="col-sm-3">
        <img src="assets/images/img8.jpg" style="height:100%; width:100%;" />
      </div>
    </div>

<hr>
    <div class="row m-3">
    <div class="col-sm-3">
      <img src="assets/images/jagg1.webp" style="height:100%; width:100%;" />
    </div>
    
    <div class="col-sm-9 text-light ">
      <h2 align="center"><i>Jaggery</i></h2>
      <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus officiis non asperiores excepturi, quasi mollitia beatae dolores sint maxime quia dignissimos provident ipsam dolorum quo magnam rem impedit laborum. Tempore corrupti, enim architecto animi molestias expedita, repellendus accusamus ut in dolor neque! Ea assumenda quos aperiam et exercitationem doloremque ipsum amet dolor consequuntur, in iure corrupti laborum quo. Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!</p>
    </div>
    
  </div>
<hr>
  <div class="row m-3">
    
    <div class="col-sm-9 text-light">
      <h2 align="center"><i>Vinegar</i></h2>
      <p style="text-align:justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus officiis non asperiores excepturi, quasi mollitia beatae dolores sint maxime quia dignissimos provident ipsam dolorum quo magnam rem impedit laborum. Tempore corrupti, enim architecto animi molestias expedita, repellendus accusamus ut in dolor neque! Ea assumenda quos aperiam et exercitationem doloremque ipsum amet dolor consequuntur, in iure corrupti laborum quo. Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!Beatae incidunt libero consequuntur, dolorum dignissimos, animi nihil tenetur repellendus voluptatum dolor quasi dolores blanditiis eum odit esse, dolore quidem aperiam maiores maxime velit non commodi amet architecto similique. Eum quasi harum at numquam, rerum voluptas suscipit provident nam quaerat nostrum amet!</p>
    </div>
    <div class="col-sm-3">
      <img src="assets/images/vin2.jpg" style="height:100%; width:100%;" />
    </div>
  </div>
        <!--end about-->


    
    <!--end service-->
<!-- 


    <div class="row mt-3 bg-dark text-light">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57317.44419528678!2d85.35131734058022!3d26.120446419503544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed10e8a3175529%3A0x7c2d919680f759d!2z4KSu4KWB4KSc4KSr4KWN4KSr4KSw4KSq4KWB4KSwLCDgpKzgpL_gpLngpL7gpLA!5e0!3m2!1shi!2sin!4v1661317521045!5m2!1shi!2sin" width="300" height="100%" style=" border:dotte red;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div> -->
<?php

include("footer.php");
?>
    <!--end footer-->
    </div>
</body>

</html>