<?php
include_once('./partials/header.php')
?>
<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php" class="text-dark">Dashboard</a><span class="text-first text-light"> / Settings </span></h6>
    </div>
</section>
<!-- Breadcump End -->

<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-wrench" aria-hidden="true"></i> Settings</div>
                    <!-- <a href="#addProductModal" class="btn shadow brand_b" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Product</a> -->
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-4 pl-2 py-3">
                                    <h5>Changes Username</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 ">
                                    <label for="username">Username</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                        <small class="username_msg"></small>
                                    </div>
                                    <button type="button" class="btn btn-success">Save Changes</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pl-2 py-3">
                                    <h5>Change Password</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 ">
                                    <label for="password">Current Password</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Current Password">
                                        <small class="Password_msg"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 ">
                                    <label for="password">New Password</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" name="password" id="password" class="form-control" placeholder="New Password">
                                        <small class="Password_msg"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 ">
                                    <label for="password">Confirm Password</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" name="password" id="password" class="form-control" placeholder="Confirm Password">
                                        <small class="Password_msg"></small>
                                    </div>
                                    <button type="button" class="btn btn-info">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>






<?php
include_once('./partials/footer.php')
?>