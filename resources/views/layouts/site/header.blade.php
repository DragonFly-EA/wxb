<!doctype html>
<html lang="en" dir="ltr">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/site/css/bootstrap-datepicker.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />--}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap')
    </style>

    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"/>


    <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/style3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/site/css/select2.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link href="{{asset('assets/site/css/jquery.bxslider.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Rwandair, Fly the Dream of Africa</title>
    <style>
        .skeleton-container {
            display: flex;
            flex-direction: column;
            position: relative;
            z-index: 100;
            background: #fff;
        }
        .skeleton {
            width: 100%;
            height: 20px;
            /* Adjust the height as needed */
            margin-bottom: 3em;
            /* Adjust the margin as needed */
            background-color: #f0f0f0;
            /* Skeleton color */
            border-radius: 4px;
        }
        .container-rigid {max-width: 1140px;min-width: 80%;margin: auto;}
        .skeleton-header-top{}
        .skeleton-header-main{height: 40px;}
        .skeleton-banner{height: 480px;}
        .skeleton-form{height: 130px;border-radius:20px;}
        .skeleton-book{background: transparent;height: auto;}
        .skeleton-book ul{display: flex;width: 100%;float: left;justify-content: space-between;}
        .skeleton-book ul li{list-style: none;height: 300px;background-color: #f0f0f0;width: 23%;}
        .skeleton-discover-header{height: 40px;}
        .skeleton-discover-lists{background: transparent;height: auto;}
        .skeleton-discover-lists ul{display: flex;justify-content: space-between;}
        .skeleton-discover-lists ul li{width: 32%;height: 300px;background: #f0f0f0;list-style: none;border-radius:20px;}
        .skeleton-offers-header{height: 40px;}
        .skeleton-offers-lists{background: transparent;height: auto;}
        .skeleton-offers-lists ul{display: flex;justify-content: space-between;}
        .skeleton-offers-lists ul li{width: 24%;height: 300px;background: #f0f0f0;list-style: none;border-radius:20px;}
        .skeleton-offer-price{height: 300px;}
        .skeleton-dreammiles{height: 300px;border-radius:20px;}
        .skeleton-destination-header{height: 40px;}
        .skeleton-destination-segments{background: transparent;height: auto;display: flex;justify-content: space-between;}
        .skeleton-destination-segment1{width: 30%;height: 400px;background: #f0f0f0;}
        .skeleton-destination-segment2{width: 68%;height: 400px;}
        .skeleton-destination-segment2 ul{display: flex;flex-wrap: wrap;justify-content: space-between;align-items: end;}
        .skeleton-destination-segment2 ul li{width: 48%;height: 80px;background: #f0f0f0;margin: 10px 0;list-style: none;border-radius:20px;}
        .skeleton-plan-travel{height: 300px;}
        .skeleton-news{height: 300px;}
        .skeleton-trip-planning{height: 300px;}
        .skeleton-footer{height: 400px;}
    </style>
</head>

<body>
<div class="skeleton-container">
    <div class="skeleton skeleton-header-top"></div>
    <div class="skeleton skeleton-header-main"></div>
    <div class="skeleton skeleton-banner"></div>
    <div class="container-rigid">
        <div class="skeleton skeleton-form"></div>
        <div class="skeleton skeleton-book">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="skeleton skeleton-discover-header"></div>
        <div class="skeleton skeleton-discover-lists">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="skeleton skeleton-offers-header"></div>
        <div class="skeleton skeleton-offers-lists">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="skeleton skeleton-offer-price"></div>
        <div class="skeleton skeleton-dreammiles"></div>
        <div class="skeleton skeleton-destination-header"></div>
        <div class="skeleton skeleton-destination-segments">
            <div class="skeleton-destination-segment1"></div>
            <div class="skeleton-destination-segment2">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="skeleton skeleton-plan-travel"></div>
        <div class="skeleton skeleton-news"></div>
        <div class="skeleton skeleton-trip-planning"></div>
        <div class="skeleton skeleton-footer"></div>
    </div>
    <!-- Add more skeleton divs as needed -->
</div>
{{--<div id="preloader">--}}
{{--    <div id="status">--}}
{{--        &nbsp;--}}
{{--    </div>--}}
{{--</div>--}}
