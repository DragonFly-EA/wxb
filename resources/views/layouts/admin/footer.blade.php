<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- DataTables -->
<script src="{{ url('assets/dashboard/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ url('assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('resources/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ url('assets/dashboard/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/dashboard/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/dashboard/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/dashboard/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('assets/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<!-- Summernote -->
<script src="{{ asset('assets/dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('assets/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/dist/js/demo.js') }}"></script>
<script src="{{ asset('resources/select2/js/select2.full.js') }}"></script>
<script src="{{ asset('resources/sweetalert2/sweetalert2.min.js') }}"></script>
@include('sweetalert::alert')
<script>
    // function readNotifications() {
    //     $.ajax({
    //         type: "GET",
    //         url: "users/userRead",
    //         success: function(response) {
    //             console.log(response);
    //         }
    //     })
    // }
</script>
<script>
    var editor_config = {
        path_absolute: "http://test.com",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                'body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document
                .getElementsByTagName('body')[0].clientHeight;
            console.log(x)
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type === 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        },
        setup: function(ed) {
            var maxlength = parseInt($("#" + (ed.id)).attr("maxlength"));
            var count = 0;
            ed.on("keydown", function(e) {
                count++;
                if (count > maxlength) {
                    alert("You have reached the character limit");
                    e.stopPropagation();
                    return false;
                }
            });
        },
    };
    tinymce.init(editor_config);
    // editor_config.plugins.wordcount.getCount();
</script>
<script>
    var counter = setInterval(
        function() {
            $('#counterRead').load('http://127.0.0.1/agent/public/counter').change;
        }, 100000000
    )
    var newCounter = setInterval(
        function() {
            $('#readCounts').load('http://127.0.0.1/agent/public/readCounts').change
        }, 10000000
    )
</script>
<script>
    function renderTimeDesktop() {
        var currentTime = new Date();
        var diem = "AM"
        var h = currentTime.getHours();
        var m = currentTime.getMinutes();
        var s = currentTime.getSeconds();
        if (h === 0) {
            h = 12
        } else if (h > 12) {
            h = h - 12;
            diem = "PM";

        }
        if (h < 10) {
            h = "0" + h;

        }
        if (m < 10) {
            m = "0" + m;
        }

        if (s < 10) {
            s = "0" + s;

        }


        var myClock = document.getElementById('clockdisplayDesktop')
        //myClock.textContent = h + ":" + m + ":" + s + " " +diem;
        myClock.innerHTML = h + ":" + m + ":" + s + " " + "<sup style='font-size:12px;'>" + diem + "</sup>";
        setTimeout(renderTimeDesktop, 1000);
    }

    renderTimeDesktop();

    function makeEaseOut(timing) {
        return function(timeFraction) {
            return 1 - timing(1 - timeFraction);
        }
    }

    function bounce(timeFraction) {
        for (let a = 0, b = 1, result; 1; a += b, b /= 2) {
            if (timeFraction >= (7 - 4 * a) / 11) {
                return -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
            }
        }
    }

    let bounceEaseOut = makeEaseOut(bounce);
</script>
<script>
    // const notificationsContainer = document.querySelector('#notifications-container');
    // const source = new EventSource('users/notifications');

    // source.onmessage = function(event) {
    //     const notifications = JSON.parse(event.data);

    //     // Use the notifications data to update the client-side interface
    //     notifications.forEach(notification => {
    //         const notificationElement = document.createElement('div');
    //         notificationElement.textContent = notification.data.message;

    //         notificationsContainer.appendChild(notificationElement);
    //     });
    // };
</script>
