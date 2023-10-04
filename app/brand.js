var ManageBrandTable;
$(document).ready(function () {
    // show Brand in Data Table
    ManageBrandTable = $("#ManageBrandTable").DataTable({
		'ajax': 'api/fetchBrand.php',
		'order': [],
        "dataSrc": ""
	});
    //insert Brand
    $("#submitBrandForm").unbind('submit').bind('submit', function () {
        // remove the error text
        $(".text-danger").remove();
        // remove the form error
        $('.form-group').removeClass('has-error').removeClass('has-success');
        // get value form
        var brandname = $("#brandname").val();
        var isActive = $("#isActive").val();
        var status = $("#status").val();
        // validation
        if (brandname == "") {
            $("#brandname").after('<p class="text-danger">Brand Name field is required</p>');
            $('#brandname').closest('.form-group').addClass('has-error');
        } else {
            // remov error text field
            $("#brandname").find('.text-danger').remove();
            // success out for form 
            $("#brandname").closest('.form-group').addClass('has-success');
        }
        if (isActive == "") {
            $("#isActive").after('<p class="text-danger">Brand Active field is required</p>');

            $('#isActive').closest('.form-group').addClass('has-error');
        } else {
            // remov error text field
            $("#isActive").find('.text-danger').remove();
            // success out for form 
            $("#isActive").closest('.form-group').addClass('has-success');
        }

        if (status == "") {
            $("#status").after('<p class="text-danger">Brand Status field is required</p>');

            $('#status').closest('.form-group').addClass('has-error');
        } else {
            // remov error text field
            $("#status").find('.text-danger').remove();
            // success out for form 
            $("#status").closest('.form-group').addClass('has-success');
        }
        //create ajax request
        if (brandname && isActive && status) {
            var form = $(this);
            //create Button Loading
            $("#createBrandBtn").button('loading');
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {
                    $("#createBrandBtn").button('reset');
                    if (response.success == true) {
                        // reload the manage member table 
                        ManageBrandTable.ajax.reload();
                        // reset the form text
                        $("#submitBrandForm")[0].reset();
                        // remove the error text
                        $(".text-danger").remove();
                        // remove the form error
                        $('.form-group').removeClass('has-error').removeClass('has-success');
                        //add flash massage
                        $('#add-brand-messages').html('<div class="alert alert-success">' +
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