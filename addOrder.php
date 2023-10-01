<?php
session_start();
require_once('./api/core.php');
include_once('./partials/header.php')
?>

<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php" class="text-dark">Dashboard</a><span class="text-first text-light"> / AddOrder </span></h6>
    </div>
</section>
<!-- Breadcump End -->

<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Add Order</div>
                    <!-- <a href="#addProductModal" class="btn shadow brand_b" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Product</a> -->
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered mt-5" style="width:100%">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="order_date">Order Date </label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="date" name="order_date" id="order_date" class="form-control" placeholder="Date">
                                        <small class="order_date_msg"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="client_name">Client Name</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Client Name">
                                        <small class="client_name_msg"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="client_contact">Client Contact</label>
                                </div>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="number" name="client_contact" id="client_contact" class="form-control" placeholder="Client Contact">
                                        <small class="client_contact_msg"></small>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Product Size</th>
                                <th>M.R.P</th>
                                <th>Flat Rate</th>
                                <th>Available Quantity</th>
                                <th>Quantity</th>
                                <th>Sample Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="product_name" id="product_name" class="form-group">
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="">Halal</option>
                                                    <option value="">modon</option>
                                                </select>
                                                <small class="product_name_msg"></small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="product_name" id="product_name" class="form-group">
                                                    <option value="">~~SELECT~~</option>
                                                    <option value="">Halal</option>
                                                    <option value="">modon</option>
                                                </select>
                                                <small class="product_name_msg"></small>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="number" name="" id="" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <a href="#deleteaddOrderModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mt-5">
                        <div class="col-md-6 ">

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Sub Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="SubAmount" placeholder="Sub Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Total Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="TotalAmount" placeholder="Total Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Discount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="Discount" placeholder="Discount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">Grand Total</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="GrandTotal" placeholder="Grand Total">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="text" class="fs-w">GST 18%</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="GST" placeholder="GST">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="">

                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Paid Amount</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" id="PaidAmount" placeholder="Paid Amount">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Due Amount</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" id="DueAmount" placeholder="Due Amount">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Payment Type</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="isActive" id="isActive" class="form-control">
                                            <option value="">~~SELECT~~</option>
                                            <option value="">Cash</option>
                                            <option value="">Card</option>
                                            <option value="">Chake</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Payment Status</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="isActive" id="isActive" class="form-control">
                                            <option value="">~~SELECT~~</option>
                                            <option value="">Cash</option>
                                            <option value="">Card</option>
                                            <option value="">Chake</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="text" class="fs-w">Payment Please</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select name="isActive" id="isActive" class="form-control">
                                            <option value="">~~SELECT~~</option>
                                            <option value="">Cash</option>
                                            <option value="">Card</option>
                                            <option value="">Chake</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-4 align-center">
                        <a href="#addBandModal" class="btn shadow"><i class="fa fa-plus-circle"></i> Add Row</a>
                        <button type="button" class="btn shadow btn-success"><i class="fa fa-check-circle" aria-hidden="true"></i> Save Change</button>
                        <button type="button" class="btn shadow btn-info" data-dismiss="modal"><i class="fa fa-exchange" aria-hidden="true"></i> Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>



<?php
include_once('./partials/footer.php')
?>