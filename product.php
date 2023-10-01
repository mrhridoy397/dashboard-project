<?php
session_start();
require_once('./api/core.php');
include_once('./partials/header.php')
?>
<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php" class="text-dark">Dashboard</a><span class="text-first text-light"> / Product </span></h6>
    </div>
</section>
<!-- Breadcump End -->

<section>
    <!-- <div class="container"> -->
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between">
                <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Manage Product Attribute</div>
                <a href="#addProductModal" class="btn shadow brand_b" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Product</a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Product Name</th>
                            <th>Product Attribute</th>
                            <th>M.R.P</th>
                            <th>Flat Rate</th>
                            <th>Quantity</th>
                            <th>Sample Quantity</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>

<!-- Add product -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product Attribute</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="product_image">Photo Attribute : Image </label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <img src="assets/img/blog2.png" alt="" class="img-thumbnail" height="100px" width="150px">
                                <small class="product_img_msg"></small>
                            </div>
                            <a href="" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa fa-times" aria-hidden="true"></i></a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-file" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="product_name">Product Name : </label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="product_name" id="product_name" class="form-control">
                                    <option value="">~~SELECT~~</option>
                                    <option value="">Halal</option>
                                    <option value="">modon</option>
                                </select>
                                <small class="product_name_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="brand_id">Product Attribute:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="brand_id" id="brand_id" class="form-control" placeholder="Product Attribute">
                                <small class="product_attribute_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="quantity">Quantity :</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
                                <small class="product_quantity_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="quantity">Sample Quantity :</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Sample Quantity">
                                <small class="product_sample_quantity_msg"></small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="total_amoun">M.R.P :</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="total_amoun" id="total_amoun" class="form-control" placeholder="M.R.P">
                                <small class="total_amoun_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="rate">Flat Rate :</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="rate" id="rate" class="form-control" placeholder="Flat Rate">
                                <small class="Flat_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="brand_name">Brand Name : </label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="brand_name" id="brand_name" class="form-control">
                                    <option value="">~~SELECT~~</option>
                                    <option value="0">Deactive</option>
                                    <option value="1">Active</option>
                                </select>
                                <small class="brand_name_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="categories_name">Category Name : </label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="categories_name" id="categories_name" class="form-control">
                                    <option value="">~~SELECT~~</option>
                                    <option value="0">Deactive</option>
                                    <option value="1">Active</option>
                                </select>
                                <small class="categories_name_msg"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="status">Status : </label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <select name="status" id="status" class="form-control">
                                    <option value="">~~SELECT~~</option>
                                    <option value="0">Deactive</option>
                                    <option value="1">Active</option>
                                </select>
                                <small class="status_msg"></small>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">Save Change</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>




<script>
    new DataTable('#example');
</script>

<?php
include_once('./partials/footer.php')
?>