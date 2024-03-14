<!-- Scripts -->
<script type="text/javascript" src="{{asset('assets/site/js/jquery-3.7.1.min.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64879055-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-64879055-1');
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
{{--<script src="https://flyingwithdragonfly.com/dist/phoenix/V1.0/js/bootstrap-datepicker.min.js"></script>--}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script type="text/javascript" src="{{asset(asset('assets/site/js/destinations.js'))}}"></script>
<script type="text/javascript" src="{{asset(asset('assets/site/js/deals.js'))}}"></script>
<script type="text/javascript" src="{{asset(asset('assets/site/js/bookingform.js'))}}"></script>
<script type="text/javascript" src="{{asset(asset('assets/site/js/flightform.js'))}}"></script>
<script type="text/javascript" src="{{asset('assets/site/js/gsap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/js/ScrollMagic.min.js')}}"></script>
<script src="https://kit.fontawesome.com/0c32daa30d.js" crossorigin="anonymous"></script>

<!-- Custom scripts -->
<script src="{{asset('assets/site/js/aos.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/site/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/site/js/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/site/js/jquery.nice-select.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/site/js/script.js')}}"></script>

<!-- Debugging scripts, if needed -->
<script src="{{asset('assets/site/js/debug.addIndicators.min.js')}}"></script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.min.js"></script>--}}

<script>
    // Remove focus from input field when clicked outside
    // document.addEventListener('click', function (event) {
    //     var input = document.getElementById('myInput');
    //     if (event.target !== input) {
    //         input.blur();
    //     }
    // });
</script>
<script>
    var startTime = performance.now();
    let loadTime;
    window.addEventListener('load', function () {
        // Measure the time when the page finishes loading
        var endTime = performance.now();
        loadTime = endTime - startTime;
    });
    // Simulate content loading delay

    setTimeout(function () {
        // Show the content
        document.getElementById('content1').classList.remove('hidden1');
        // Hide the skeleton
        document.querySelectorAll('.skeleton').forEach(function (skeleton) {
            skeleton.style.display = 'none';
        });
    }, loadTime);

</script>
<script src="{{asset('assets/site/js/passenger_input.js')}}"></script>

