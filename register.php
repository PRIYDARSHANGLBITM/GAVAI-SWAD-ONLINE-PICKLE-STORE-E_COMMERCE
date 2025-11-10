<?php
include("header.php")
?>


<div class="row mt-3">
    <div class="col-sm-4 mx-auto">
        <img src="assets/images/register2.jpg" style="height:100%;width:100%; border-radius:10px;">
    </div>
    <div class="container1 mx-auto">
        <div class="title">Registration</div>
        <form action="register_code.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">User Name<sup style="color:red;">*</sup></span>
                    <input type="text" name="name" placeholder="Enter Your Name" required />

                </div>
                <div class="input-box">
                    <span class="details">Email Id <sup style="color:red;">*</sup></span>
                    <input type="email" name="email" placeholder="Enter Your Email" required />

                </div>
                <div class="input-box">
                    <span class="details">Mobile No <sup style="color:red;">*</sup></span>
                    <input type="number" name="mobile" placeholder="Enter Mobile No." required />

                </div>
                <div class="input-box">
                    <span class="details">Password <sup style="color:red;">*</sup></span>
                    <input type="password" name="password" placeholder="Enter Your Name" required />

                </div>
                <div class="input-box">
                    <span class="details">City </span>
                    <select name="city">
                        <option value="">--Select City--</option>
                        <option>Lucknow</option>
                        <option>Patna</option>
                        <option>Allahabad</option>
                        <option>Muzaffarpur</option>
                        <option>Gonda</option>
                        <option>Ayodhya</option>
                        <option>Gorakhpur</option>
                    </select>

                </div>
                <div class="input-box">
                    <span class="details">Address <sup style="color:red;">*</sup></span>
                    <textarea name="address" style="width:100%" required></textarea>

                </div>

            </div>
            <div class="button">
                <input class="text-center" type="submit" name="" value="Register" />
            </div>

        </form>
        <a href="login.php">Login Here</a>
    </div>
</div>
<?php
include("footer.php");
?>
</div>
</body>

</html>