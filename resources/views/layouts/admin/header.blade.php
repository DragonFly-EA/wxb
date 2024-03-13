<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'WB Website')</title>
    <link rel="shortcut icon" href="{{ asset('admin_lte/images/logo.png') }}" type="image/png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Ionicons -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- JQVMap -->
    <!-- JQVMap -->

    <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/toastr/toastr.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/dist/css/zalegohrstyles.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/daterangepicker/daterangepicker.css') }}">
    <script src="{{ url('resources/tinymce/tinymce.min.js') }}"></script>
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/summernote/summernote-bs4.css') }}">
    <!--Select2 CSS-->
    <link rel="stylesheet" href="{{ url('resources/select2/css/select2.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/w3v3.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('assets/dashboard/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .badge-success {
            color: #ffffff;
            background-color: #28a745;
            height: 28px;
            align-content: center;
            display: grid;
        }

        .badge-warning {
            color: #fff;
            background-color: #00509e;
        }

        body {
            font-family: 'Poppins';
        }

        .nav-item .nav-link img {
            width: 25px;
        }

        .info-box-number {

            text-align: right;
            font-family: 'Poppins';
            font-size: 25px;
            color: #fff;

        }

        .info-box-text a {
            color: #fff;
            font-family: 'Poppins';
            text-align: right;
        }
        .depot-text{
            font-family: 'Poppins';
            color: #989898;
            font-size: 15px;
        }
    </style>
</head>
