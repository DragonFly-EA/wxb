<script>
    function addFleet() {
        $("#add_fleet").modal('show').modal('hide');
    }
</script>



<script>
    function submitFleet(){
        event.preventDefault();
        $("#main_content_fleet").hide();
        $("#main_loader_fleet").show();

        // Create FormData object to handle file uploads
        var formData = new FormData();
        formData.append('title', document.getElementById('title').value);
        formData.append('title_1', document.getElementById('title_1').value);
        formData.append('input_1', document.getElementById('input_1').value);
        formData.append('title_2', document.getElementById('title_2').value);
        formData.append('input_2', document.getElementById('input_2').value);
        formData.append('content', document.getElementById('content').value);
        formData.append('description', document.getElementById('description').value);
        formData.append('_token', "{{ csrf_token() }}");

        // Add image file to FormData object
        var imageFile = document.getElementById('image').files[0];
        formData.append('image', imageFile);

        $.ajax({
            type: "POST",
            url: "fleet/store",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.status ==='success')
                {
                    toastr.success(response.message);
                    $("#add_fleet").modal('hide');
                     document.getElementById('title').value = ""
                    document.getElementById('title_1').value = ""
                    document.getElementById('input_1').value = ""
                    document.getElementById('title_2').value = ""
                    document.getElementById('input_2').value = ""
                    document.getElementById('content').value = ""
                    document.getElementById('description').value = ""
                    window.location.reload();
                }
            },
            error: function (error) {
                if (error.responseJSON && error.responseJSON.error) {
                    const errors = error.responseJSON.error;
                    displayErrors(errors);
                }
                $("#main_loader_fleet").hide();
                $("#main_content_fleet").show();
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



<script>
    function UpdateFleet(id) {
        $("#update_fleet"+id).modal('show').modal('hide');
    }
</script>


{{--<script>--}}
{{--    function FleetUpdate(id) {--}}
{{--        event.preventDefault();--}}
{{--        $("#main_content_fleet"+id).hide();--}}
{{--        $("#main_loader_fleet"+id).show();--}}

{{--        // Create FormData object to handle file uploads--}}
{{--        var formData = new FormData();--}}
{{--        formData.append('title', document.getElementById('title'+id).value);--}}
{{--        formData.append('title_1', document.getElementById('title_1'+id).value);--}}
{{--        formData.append('input_1', document.getElementById('input_1'+id).value);--}}
{{--        formData.append('title_2', document.getElementById('title_2'+id).value);--}}
{{--        formData.append('input_2', document.getElementById('input_2'+id).value);--}}
{{--        formData.append('content', document.getElementById('content'+id).value);--}}
{{--        formData.append('description', document.getElementById('description'+id).value);--}}
{{--        formData.append('_token', "{{ csrf_token() }}");--}}

{{--        // Add image file to FormData object--}}
{{--        // var imageFile = document.getElementById('image'+id).files[0];--}}
{{--        // formData.append('image', imageFile);--}}

{{--        $.ajax({--}}
{{--            type: "POST",--}}
{{--            url: "fleet/update/"+id,--}}
{{--            data: formData,--}}
{{--            contentType: false,--}}
{{--            processData: false,--}}
{{--            success: function (response) {--}}
{{--                if(response.status ==='success')--}}
{{--                {--}}
{{--                    toastr.success(response.message);--}}
{{--                    $("#add_fleet"+id).modal('hide');--}}
{{--                    window.location.reload();--}}
{{--                }--}}
{{--            },--}}
{{--            error: function (error) {--}}
{{--                if (error.responseJSON && error.responseJSON.error) {--}}
{{--                    const errors = error.responseJSON.error;--}}
{{--                    displayErrors(errors);--}}
{{--                }--}}
{{--                $("#main_loader_fleet").hide();--}}
{{--                $("#main_content_fleet").show();--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}

{{--<script>--}}
{{--    function DeleteFleet(id) {--}}
{{--        $.ajax({--}}
{{--            type: 'DELETE',--}}
{{--            url: "fleet/delete/" + id,--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': "{{ csrf_token() }}"--}}
{{--            },--}}
{{--            success: function (response) {--}}
{{--                if (response.message) {--}}
{{--                    toastr.success(response.message);--}}
{{--                    window.location.reload();--}}
{{--                } else {--}}
{{--                    toastr.error(response.error);--}}
{{--                }--}}
{{--            },--}}
{{--            error: function (xhr, status, error) {--}}
{{--                console.error(xhr.responseText);--}}
{{--                toastr.error('Failed to delete slider');--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}

