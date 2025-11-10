<?php
include("user_all_profile.php");

?>
<div class="row">

        <div class="container1 mx-auto " style="margin-top:5%;">
            <div class="title">User Change Password</div>
            <form action="c_password_code.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Old Password <sup class="text-danger">*</sup></span>
                        <input type="password" name="op" placeholder="Enter Your Old Password" required />
                    </div>
                    <div class="input-box">
                        <span class="details">New Password <sup class="text-danger">*</sup></span>
                        <input type="password" name="np" placeholder="Enter Your New Password" required />
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm New Password <sup class="text-danger">*</sup></span>
                        <input type="password" name="cnp" placeholder="Enter Your Confirm New Password" required />
                    </div>
                </div>
                <div class="button">
                    <input class="text-center" type="submit" value="Change Password" />
                </div>
            </form>
            <a href="login.php" class="float-end mt-3">User Login</a>
        </div>
    </div>
</div>
</div>
</div>
</body>

</html>