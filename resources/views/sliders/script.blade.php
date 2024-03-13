<script>
function addSlider() {
    $("#add_slider").modal('show').modal('hide');
}
</script>
<script>
    function submitSlider(){
        event.preventDefault();
        $("#main_content_slider").hide();
        $("#main_loader_slider").show();

        // Create FormData object to handle file uploads
        var formData = new FormData();
        formData.append('title', document.getElementById('title').value);
        formData.append('url', document.getElementById('url').value);
        formData.append('description', document.getElementById('description').value);
        formData.append('position', document.getElementById('position').value);
        formData.append('language', document.getElementById('language').value);
        formData.append('_token', "{{ csrf_token() }}");
        // _token: $('meta[name="csrf-token"]').attr("content"),


        // Add image file to FormData object
        var imageFile = document.getElementById('image').files[0];
        formData.append('image', imageFile);

        $.ajax({
            type: "POST",
            url: "sliders/store",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.status ==='success')
                {
                    toastr.success(response.message);
                    $("#add_slider").modal('hide');
                    document.getElementById('title').value = ""
                    document.getElementById('url').value = ""
                    document.getElementById('description').value = ""
                    window.location.reload();
                }
            },
            error: function (error) {
                if (error.responseJSON && error.responseJSON.error) {
                    const errors = error.responseJSON.error;
                    displayErrors(errors);
                }
                $("#main_loader_slider").hide();
                $("#main_content_slider").show();
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
    function updateSlider(id) {
        $("#update_slider"+id).modal('show').modal('hide');
    }
</script>
<script>
    function SliderUpdate(id) {
        event.preventDefault();
        $("#main_content_slider"+id).hide();
        $("#main_loader_slider"+id).show();

        // Create FormData object to handle file uploads
        var formData = new FormData();
        formData.append('title', document.getElementById('title'+id).value);
        formData.append('url', document.getElementById('url'+id).value);
        formData.append('description', document.getElementById('description'+id).value);
        formData.append('position', document.getElementById('position'+id).value);
        formData.append('language', document.getElementById('language'+id).value);
        formData.append('_token', "{{ csrf_token() }}");

        // Add image file to FormData object
        var imageFile = document.getElementById('image'+id).files[0];
        formData.append('image', imageFile);

        $.ajax({
            type: "POST",
            url: "sliders/update/"+id,
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.status ==='success')
                {
                    toastr.success(response.message);
                    $("#add_slider"+id).modal('hide');
                    window.location.reload();
                }
            },
            error: function (error) {
                if (error.responseJSON && error.responseJSON.error) {
                    const errors = error.responseJSON.error;
                    displayErrors(errors);
                }
                $("#main_loader_slider").hide();
                $("#main_content_slider").show();
            }
        });
    }
</script>

<script>
    function DeleteSlider(id) {
        $.ajax({
            type: 'DELETE',
            url: "/sliders/delete/" + id,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (response) {
                if (response.message) {
                    toastr.success(response.message);
                    window.location.reload();
                } else {
                    toastr.error(response.error);
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
                toastr.error('Failed to delete slider');
            }
        });
    }
</script>

