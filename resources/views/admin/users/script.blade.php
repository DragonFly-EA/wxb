

<script>

    function addUsers() {
        $("#add_users").modal('show').modal('hide');
    }

    function submitUser() {
        event.preventDefault();
        $("#main_content_user").hide();
        $("#main_loader_user").show();
        const userData = {
            fname: document.getElementById('fname').value,
            lname: document.getElementById('lname').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,

            _token: "{{ csrf_token() }}"
        };
        $.ajax({
            type: "POST",
            url: "users/store",
            data: userData,
            success: function(response) {
                toastr.options = {
                    progressBar: true
                };
                if(response.status ==='success')
                {
                    toastr.success(response.message);
                    $("#add_users").modal('hide');
                    document.getElementById('fname').value = ""
                    document.getElementById('lname').value = ""
                    document.getElementById('email').value = ""
                    document.getElementById('phone').value = ""

                    window.location.reload();
                }
            },
            error: function (error) {
                if (error.responseJSON && error.responseJSON.error) {
                    const errors = error.responseJSON.error;
                    displayErrors(errors);
                }
                $("#main_loader_users").hide();
                $("#main_content_users").show();
            }
        });
    }
    function displayErrors(errors) {
        $.each(errors, function (fieldName, fieldErrors) {
            fieldErrors.forEach(function (error) {
                toastr.error(error);
            });
        });
    }
</script>
