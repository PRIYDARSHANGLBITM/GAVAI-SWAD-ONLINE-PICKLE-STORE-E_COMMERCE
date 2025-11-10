<?php
include("all_dashboard.php");
session_start();
if($_SESSION['admin']=="")
{
    header("location:index.php?msg=3");
}
?>

                        <div class="row  mt-4" align="center">
                            <div class="col-sm-4 ">
                                <a href="#" style="text-decoration: none;">
                                <div class="card text-dark bg-primary border border-2 border-dark mb-3 border border-2 " style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Dashboard</b> </h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div></a>
                            </div>
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark bg-light border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><i class="bi bi-bookmarks" style="font-size:30px;"></i></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Add Category</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark  bg-success border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><i class="bi bi-cart3" style="font-size:30px;"></i></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Add product</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>

                        </div>
                        <!-- 2 -->
                        <div class="row  mt-4" align="center">
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark bg-info border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>View Product</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark  bg-warning border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>View Users</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark  bg-primary border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header"><i class="bi bi-bell-fill " style="font-size:30px;"></i></div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Add Notification</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                        <!-- 1 -->
                        <div class="row  mt-4" align="center">
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark  bg-light border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>View Cart</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark  bg-success border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>View Contact Us</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-sm-4 ">
                            <a href="#" style="text-decoration: none;">
                                <div class="card text-dark  bg-info border border-2 border-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><b>Generate Report</b></h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </a>
                            </div>

                        </div>
                                    <!--  -->
                    
                
            </div>
        </div>
        <div class="row bg-dark text-light">
            <div class="col-sm-12 text-center mt-2">
                <p>copyright &copy; 2022-2023 Designed Devloped By : Ranjan Kumar Under the Mr. Rohit Kumar Softpro India PVT. LTD.</p>
            </div>
        </div>
    </div>
    </div>
</body>

</html>