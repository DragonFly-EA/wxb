<script>
    // Remove focus from input field when clicked outside
    document.addEventListener('click', function (event) {
        var input = document.getElementById('myInput');
        if (event.target !== input) {
            input.blur();
        }
    });
</script>
<!-- Scripts -->
<script type="text/javascript" src="{{asset('assets/site/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="{{asset(asset('assets/site/js/destinations.js'))}}"></script>
<script type="text/javascript" src="{{asset(asset('assets/site/js/deals.js'))}}"></script>
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
    document.addEventListener('click', function (event) {
        var input = document.getElementById('myInput');
        if (event.target !== input) {
            input.blur();
        }
    });
</script>
<script>
    class Quantity {
        constructor(containerId) {
            this.value = 1;
            this.container = document.getElementById(containerId);
            this.render();
        }

        increment() {
            this.value++;
            this.render();
        }

        decrement() {
            if (this.value > 1) {
                this.value--;
                this.render();
            }
        }

        render() {
            this.container.innerHTML = `
            <div>
                <p>Set the quantity</p>
                <div class="quantity-input">
                    <button class="quantity-input__modifier quantity-input__modifier--left" onclick="quantity.decrement()">—</button>
                    <input class="quantity-input__screen" type="text" value="${this.value}" readonly>
                    <button class="quantity-input__modifier quantity-input__modifier--right" onclick="quantity.increment()">+</button>
                </div>
            </div>
        `;
        }
    }

    const quantity = new Quantity('app');
    const quantity1 = new Quantity('app1');
    const quantity2 = new Quantity('app2');
    const quantity3 = new Quantity('app3');
    const quantity4 = new Quantity('app4');
    const quantity5 = new Quantity('app5');

</script>
