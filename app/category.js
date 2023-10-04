var ManageCategoryTable;
$(document).ready(function () {
    // show Brand in Data Table
    ManageCategoryTable = $("#ManageCategoryTable").DataTable({
		'ajax': 'api/fetchCategory.php',
		'order': [],
        "dataSrc": ""
	});
    //insert Category
    $("#submitCategoryForm").unbind('submit').bind('submit', function () {
        // remove the error text
        $(".text-danger").remove();
        // remove the form error
        $('.form-group').removeClass('has-error').removeClass('has-success');
        // get value form
        var categoryname = $("#categoryname").val();
        var isActive = $("#isActive").val();
        var status = $("#status").val();
        // validation
        if (categoryname == "") {
            $("#categoryname").after('<p class="text-danger">Category Name field is required</p>');
            $('#categoryname').closest('.form-group').addClass('has-error');
        } else {
            // remov error text field
            $("#categoryname").find('.text-danger').remove();
            // success out for form 
            $("#categoryname").closest('.form-group').addClass('has-success');
        }
        if (isActive == "") {
            $("#isActive").after('<p class="text-danger">Category Active field is required</p>');

            $('#isActive').closest('.form-group').addClass('has-error');
        } else {
            // remov error text field
            $("#isActive").find('.text-danger').remove();
            // success out for form 
            $("#isActive").closest('.form-group').addClass('has-success');
        }

        if (status == "") {
            $("#status").after('<p class="text-danger">Category Status field is required</p>');

            $('#status').closest('.form-group').addClass('has-error');
        } else {
            // remov error text field
            $("#status").find('.text-danger').remove();
            // success out for form 
            $("#status").closest('.form-group').addClass('has-success');
        }
        //create ajax request
        if (categoryname && isActive && status) {
            var form = $(this);
            //create Button Loading
            $("#createCategoryBtn").button('loading');
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'JSON',
                success: function (response) {
                    $("#createCategoryBtn").button('reset');
                    if (response.success == true) {
                        // reload the manage member table 
                        ManageCategoryTable.ajax.reload();
                        // reset the form text
                        $("#submitCategoryForm")[0].reset();
                        // remove the error text
                        $(".text-danger").remove();
                        // remove the form error
                        $('.form-group').removeClass('has-error').removeClass('has-success');
                        //add flash massage
                        $('#add-Category-messages').html('<div class="alert alert-success">' +
                            '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                            '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> ' + response.messages +
                            '</div>');
                        $(".alert-success").delay(500).show(10, function () {
                            $(this).delay(3000).hide(10, function () {
                                $(this).remove();
                            });
                        });
                    }
                }
            });
        }
        return false;
    });
});