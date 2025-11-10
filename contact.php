<?php
include("header.php");

?>

<div class="row mt-5">
    <div class="col-sm-4 mx-auto ">
        <img src="assets/images/contact.webp" style="height:100%;width:100%; border-radius:10px;">
    </div>

    <div class="container1 mx-auto ">
        <div class="title">Contact Us</div>
        <form action="contact_code.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">User Name <sup class="text-danger">*</sup></span>
                    <input type="password" name="name" placeholder="Enter Your Name..." required />
                </div>
                <div class="input-box">
                    <span class="details">Email Id <sup class="text-danger">*</sup></span>
                    <input type="email" name="email" placeholder="Enter Your Email..." required />
                </div>
                <div class="input-box">
                    <span class="details">Mobile No.<sup class="text-danger">*</sup></span>
                    <input type="password" name="password" placeholder="Enter Your number..." required />
                </div>
                <div class="input-box">
                    <span class="details">Massage <sup class="text-danger">*</sup></span>
                    <textarea type="password" name="address" placeholder="Enter Your address.." required></textarea>
                </div>
            </div>
            <div class="button">
                <input class="text-center" type="submit" name="" value="Submit Contact" />
            </div>
        </form>
    </div>
</div>
<!-- footer -->
<?php
include("footer.php");
?>
</div>
</body>

</html>