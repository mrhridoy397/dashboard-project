<?php
include_once('./partials/header.php')
?>
    <!-- Breadcump Start -->
    <section>
        <div class="breadcump shadow">
            <h6 class="text-light mt-2"> <a href="dashboard.php">Dashboard</a><span class="text-first text-light"> / Category </span></h6>
        </div>
    </section>
    <!-- Breadcump End -->
    <section>
    <div class="container">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Manage Category</div>
                    <a href="#addCategoryModal" class="btn shadow brand_b" data-toggle="modal"><i
                            class="fa fa-plus-circle"></i> Add Category</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Category Name</th>
                                <th>isActive</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#editCategoryModal" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="#deleteCategoryModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                       
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
                <form method="post">
                    <div class="form-group">
                        <label for="categories_name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="categories_name" id="categories_name" class="form-control"
                            placeholder="Category Name">
                        <small class="categories_name_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="categories_active">Category Active <span class="text-danger">*</span></label>
                        <select name="categories_active" id="categories_active" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="0">Deactive</option>
                            <option value="1">Active</option>
                        </select>
                        <small class="categories_active_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="categories_status">Category Status <span class="text-danger">*</span></label>
                        <select name="categories_status" id="categories_status" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <<option value="0">Available</option>
                                <option value="1">Not Available</option>
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

<!-- Edit Category -->

<div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="categories_name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" name="categories_name" id="categories_name" class="form-control"
                            placeholder="Category Name">
                        <small class="categories_name_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="categories_active">Category Active <span class="text-danger">*</span></label>
                        <select name="categories_active" id="categories_active" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <option value="0">Deactive</option>
                            <option value="1">Active</option>

                        </select>
                        <small class="categories_active_msg"></small>
                    </div>
                    <div class="form-group">
                        <label for="categories_status">Category Status <span class="text-danger">*</span></label>
                        <select name="categories_status" id="categories_status" class="form-control">
                            <option value="">~~SELECT~~</option>
                            <<option value="0">Available</option>
                                <option value="1">Not Available</option>
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
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
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
new DataTable('#example');
</script>


    <?php 
    include_once('./partials/footer.php')
    ?>