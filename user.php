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

<div class="container">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header d-flex justify-content-between">
                    <div class=""><i class="fa fa-pencil-square-o fs-w" aria-hidden="true"></i> Manage User</div>
                    <a href="#addUserModal" class="btn shadow brand_b" data-toggle="modal"><i
                            class="fa fa-plus-circle"></i> Add User</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped " style="width:100%">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th></th>
                                <th>Admin</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                <button type="button" class="btn "> 
                                    <select name="#exampleModalLabel" id="exampleModalLabel">
                                    <option value="">Action</option>
                                        <option value=""><a href="#editUserModal" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></option>
                                        <option value=""><a href="#deleteUserModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i>Remove</a></option>
                                    </select>
                                </button>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Add User -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="username">User Name:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Product Attribute">
                                <small class="User_name_msg"></small>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="password" id="password" class="form-control" placeholder="Product Attribute">
                                <small class="password_msg"></small>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email">Email:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Product Attribute">
                                <small class="email_msg"></small>
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

    <!-- Edit User -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="username">User Name:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Product Attribute">
                                <small class="User_name_msg"></small>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-4">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" name="password" id="password" class="form-control" placeholder="Product Attribute">
                                <small class="password_msg"></small>
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

<!-- Delete category -->

<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-hidden="true">
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