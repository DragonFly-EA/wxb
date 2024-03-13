<!doctype html>
<html lang="en">
@include('layouts.admin.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('layouts.admin.sidebar')
    @yield('content')
    <div class="modal" id="helpModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row">
                    <div class="col-sm-4"
                         style="background-image:url('http://127.0.0.1/projectx/public/image/zhelp2.gif');background-repeat: no-repeat; background-size: cover; background-position: center;">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="mt-3"><strong>Hello {{ Auth::user()->first_name }}
                                !</strong></h5> <span class="text-muted"> This is Den<i>-help</i>, how can i help
                                you? Choose from the list below</span>
                        <ol>
                            <li><a href="#">You can See and receive your stock from the menu.</a></li>
                            <li><a href="#">You can see the reports</a>
                            </li>
                            <li><a href="#">You are able to see the clients</a>
                            </li>
                            <li><a href="#">While viewing the client, you are able to see client based on the activity of that client</a></li>
                            <li><a href="#">You are able to see the orders also and much more from shwari admin help</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio style="display: none;" id="notificationSound">
        <source src="{{ asset('/image/notification.mp3') }}" type="audio/mpeg">
    </audio>
    <!--help modal-->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy;
            <script type="text/javascript">
                document.write(new Date().getFullYear());
            </script>
            <a href="#"><strong class="text-warning">Designed And Developed By Dragonfly EA</strong></a> All Right Reserved. V.0.1.0
        </strong>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    <!-- /.control-sidebar -->
</div>
<script>
    function helpModal(){
        $("#helpModal").modal('show');
    }
</script>
@include('layouts.admin.footer')
</body>

</html>
