    
    <?php 
    include_once('./partial/header.php')
    ?>
    <!-- quantity section start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="product">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mt-2">Total product</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="quantity mt-1">0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="stock">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mt-2">Total Stock</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="quantity mt-1">0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="order">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="mt-2">Total Order</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="quantity mt-1">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- quantity section end -->
    <!-- total earning section start -->
    <section>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card amount-w shadow">
                        <div class="card-header amount-bg amount">25</div>
                        <div class="card-footer date">Monday 25,2023</div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header "><i class="fa fa-calendar" aria-hidden="true"></i> User Wish Order
                        </div>
                        <div class="card-footer">
                            <div class="row font-weight-bold">
                                <div class="col-md-6">Name</div>
                                <div class="col-md-6">Order In Taka</div>
                            </div>
                            <div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- total earning section end -->
    <!-- revenew section start -->
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="card revenew-w shadow">
                        <div class="card-header revenew-bg revenew">0</div>
                        <div class="card-footer date">INR Total Revenew</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- revenew section end -->

<?php
include_once('./partial/footer.php')
?>
