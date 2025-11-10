<?php
include("header.php");
?>


<div class="row mt-3">
    <div class="col-sm-4 mx-auto ">
        <img src="assets/images/login.png" style="height:100%;width:100%; border-radius:10px;">
    </div>

    <div class="container1 mx-auto ">
        <div class="title">User Login</div>
        <form action="log_code.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email Id <sup class="text-danger">*</sup></span>
                    <input type="email" name="email" placeholder="Enter Your Email" required />
                </div>
                <div class="input-box">
                    <span class="details">Password <sup class="text-danger">*</sup></span>
                    <input type="password" name="password" placeholder="Enter Your Password" required />
                </div>
                <div class="col-sm-12">
                    <a href="forget.php" class="float-end">Forget Password</a>
                </div>
            </div>
            <div class="button">
                <input class="text-center" type="submit" name="" value="Login" />
            </div>

        </form>
        <a href="register.php">Not Yet Register</a>
        <a href="change_password.php" class="float-end">Change Password</a>
    </div>
</div>
<?php
include("footer.php");
?>
</div>
</body>

</html>