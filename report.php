<?php
include_once('./partials/header.php')
?>
<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php" class="text-dark">Dashboard</a><span class="text-first text-light"> / Report </span></h6>
    </div>
</section>
<!-- Breadcump End -->

<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i>Order Report</div>
                    <!-- <a href="#addProductModal" class="btn shadow brand_b" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Product</a> -->
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="order_date">Start Date </label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="date" name="order_date" id="order_date" class="form-control" placeholder="Start Date">
                                        <small class="order_date_msg"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="order_date">End Date </label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="date" name="order_date" id="order_date" class="form-control" placeholder="Start End">
                                        <small class="order_date_msg"></small>
                                    </div>
                                    <button type="button" class="btn btn-success">Generate Report</button>
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