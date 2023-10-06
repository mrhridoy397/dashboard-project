<?php
session_start();
require_once('./api/core.php');
include_once('./partials/header.php')
?>
<!-- Breadcump Start -->
<section>
    <div class="breadcump shadow">
        <h6 class="text-light mt-2"> <a href="dashboard.php" class="text-dark">Dashboard</a><span class="text-first text-light"> / Category </span></h6>
    </div>
</section>
<!-- Breadcump End -->
<section>
    <div class="container">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Manage Category</div>
                    <a href="#addCategoryModal" class="btn shadow brand_b" data-toggle="modal"><i class="fa fa-plus-circle"></i> Add Category</a>
                </div>
                <div class="card-body">
                    <table id="ManageCategoryTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category</th>
                                <th>isActive</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Category -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="add-Category-messages"></div>
                <form method="post" id="submitCategoryForm" action="./api/category.php">
                    <div class="form-group">
                        <label for="categoryname">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="categoryname" id="categoryname" class="form-control" placeholder="Category Name">
                        <small class="categories_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="isActive">Category Active <span class="text-danger">*</span></label>
                        <select name="isActive" id="isActive" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>
                        </select>
                        <small class="categories_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="status">Category Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="0">Deactive</option>
                            <option value="1">Active</option>

                        </select>
                        <small class="categories_msg"></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="createCategoryBtn" data-loding-text="Loading" autocomplete="off">Save Change</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Category -->

<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="categories_name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="categories_name" id="categories_name" class="form-control" placeholder="Category Name">
                        <small class="categories_name_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="categories_active">Category Active <span class="text-danger">*</span></label>
                        <select name="categories_active" id="categories_active" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>


                        </select>
                        <small class="categories_active_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="categories_status">Category Status <span class="text-danger">*</span></label>
                        <select name="categories_status" id="categories_status" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="0">Deactive</option>
                            <option value="1">Active</option>
                        </select>
                        <small class="categories_status_msg"></small>
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

<!-- Delete category -->

<div class="modal fade" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Remove Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">No</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>

<script>
    // new DataTable('#example');
</script>
<script src="./app/category.js"></script>


<?php
include_once('./partials/footer.php')
?>