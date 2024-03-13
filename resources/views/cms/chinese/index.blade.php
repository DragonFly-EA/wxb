@extends('layouts.main')
@section('content')
    <section>

        <div class="home-slider-form-wrapper">

            <div class="home-slider-wrapper" data-aos="fade-up">
                <ul class="bxslider">
                    <li>
                        <img src="images/London.jpg"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h1 data-aos="fade-right">Dreamiles</h1>
                                    <p data-aos="fade-right">Benefit from app-exclusive offers, personalised notifications,<br> seamless
                                        booking functions, journey tracking and more.</p>
                                    <a href="" data-aos="fade-right">Explore More</a>

                                </div>
                            </div>
                        </div>

                    </li>
                    <li>
                        <img src="images/Abuja.jpg"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h1 data-aos="fade-right">Dreamiles</h1>
                                    <p data-aos="fade-right">Benefit from app-exclusive offers, personalised notifications,<br> seamless
                                        booking functions, journey tracking and more.</p>
                                    <a href="" data-aos="fade-right">Explore More</a>
                                </div>
                            </div>
                        </div>

                    </li>

                    <li>
                        <img src="images/Doha.jpg"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h1 data-aos="fade-right">Dreamiles</h1>
                                    <p data-aos="fade-right">Benefit from app-exclusive offers, personalised notifications,<br> seamless
                                        booking functions, journey tracking and more.</p>
                                    <a href="" data-aos="fade-right">Explore More</a>

                                </div>
                            </div>
                        </div>

                    </li>
                    <li>
                        <img src="images/Dubai.jpg"/>
                        <div class="bx-caption">
                            <div class="display-caption">
                                <div class="slider-vertical">
                                    <h1 data-aos="fade-right">Dreamiles</h1>
                                    <p data-aos="fade-right">Benefit from app-exclusive offers, personalised notifications,<br> seamless
                                        booking functions, journey tracking and more.</p>
                                    <a href="" data-aos="fade-right">Explore More</a>
                                </div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

            <div class="home-form-wrapper" data-aos="fade-up">
                <div class="container-rigid">
                    <!--Horizontal Tab-->
                    <div id="horizontalTab">

                        <ul class="resp-tabs-list">
                            <li>
                                <figure data-aos="zoom-in"><i class="fi fi-tr-plane-departure"></i></figure>
                                <h3 data-aos="zoom-in">Book Flight</h3>
                            </li>
                            <li>
                                <figure data-aos="zoom-in"><i class="fi fi-sr-person-seat-reclined"></i></figure>
                                <h3 data-aos="zoom-in">My Trips</h3>
                            </li>
                            <li>
                                <figure data-aos="zoom-in"><i class="fi fi-rr-time-fast"></i></figure>
                                <h3 data-aos="zoom-in">Flight Status</h3>
                            </li>
                            <li>
                                <figure data-aos="zoom-in"><i class="fi fi-ts-tickets-airline"></i></figure>
                                <h3 data-aos="zoom-in">Flight Schedule</h3>
                            </li>
                        </ul>

                        <div class="resp-tabs-container">
                            <div class="book-flight-tab">
                                <form>
                                    <div class="form-tab-title" data-aos="zoom-in">
                                        <div class="form-tab-radio">
                                            <label class="showOverlay" for="check"></label>
                                            <!--<input id="check" class="check" type="checkbox">-->
                                            <div class="containerOuter">
                                                <div class="container-radio">
                                                    <input type="radio" class="hidden" id="input1" name="inputs">
                                                    <label class="entry" for="input1">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Return</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input2" name="inputs">
                                                    <label class="entry" for="input2">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">One Way</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input3" name="inputs">
                                                    <label class="entry" for="input3">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Stopover in Rwanda</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input4" name="inputs">
                                                    <label class="entry" for="input4">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Multi-city</div>
                                                    </label>
                                                    <div class="highlight"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                            <!--<svg width="0" height="0" viewBox="0 0 40 140">-->
                                            <!--  <defs>-->
                                            <!--    <mask id="holes">-->
                                            <!--      <rect x="0" y="0" width="100" height="140" fill="white" />-->
                                            <!--      <circle r="12" cx="20" cy="20" fill="black"/>-->
                                            <!--      <circle r="12" cx="20" cy="70" fill="black"/>-->
                                            <!--      <circle r="12" cx="20" cy="120" fill="black"/>-->
                                            <!--      <circle r="12" cx="20" cy="120" fill="black"/>-->
                                            <!--    </mask>-->
                                            <!--  </defs>-->
                                            <!--</svg>-->

                                        </div>
                                        <div class="award-ticket">
                                            <p><i class="fi fi-rr-arrow-up-right-from-square"></i><b>Award ticket - <a
                                                    href=""> Buy a ticket with Dreamiles</a></b></p>
                                        </div>

                                    </div>

                                    <div class="form-tab-lists" data-aos="zoom-in">
                                        <ul>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="1"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="2"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="3"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="1"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="2"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="3"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="date-picker-form">
                                                    <div class="date-picker-form-height">

                                                        <script type="text/javascript"
                                                                src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                                                        <script type="text/javascript"
                                                                src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                                        <script type="text/javascript"
                                                                src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                                                        <link rel="stylesheet" type="text/css"
                                                              href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

                                                        <link rel="stylesheet" type="text/css"
                                                              href="https://staysure.susa.uk/_william_dev/hotel-datepicker/dist/css/hotel-datepicker.css"/>
                                                        <!--<link rel="stylesheet" type="text/css" href="https://staysure.susa.uk/_william_dev/hotel-datepicker/demo/css/main.css" />-->


                                                        <div class="demo__item">
                                                            <div class="demo__input">
                                                                <input type="text" id="demo3" value="Select your dates"
                                                                       aria-label="Check-in and check-out dates"
                                                                       aria-describedby="demo3-input-description"/>

                                                            </div>
                                                        </div>

                                                        <script type="text/javascript"
                                                                src="https://staysure.susa.uk/_william_dev/hotel-datepicker/fecha.min.js"></script>
                                                        <script type="text/javascript"
                                                                src="https://staysure.susa.uk/_william_dev/hotel-datepicker/dist/js/hotel-datepicker.js"></script>

                                                        <script type="text/javascript">
                                                            (function () {
                                                                var demo3 = new HotelDatepicker(
                                                                    document.getElementById("demo3"), {

                                                                        format: 'dddd D MMM YYYY',
                                                                        inline: false,
                                                                        clearButton: true,
                                                                        submitButton: true,
                                                                        topbarPosition: 'bottom',
                                                                        autoClose: false,
                                                                        submitButtonName: 'submit',


                                                                    },
                                                                );
                                                                var open_datepicker_button =
                                                                    document.getElementById("open-datepicker");

                                                                open_datepicker_button.addEventListener(
                                                                    "click",
                                                                    open_datepicker_function
                                                                );

                                                                function open_datepicker_function() {
                                                                    console.log("Open!");
                                                                    demo3.open();
                                                                }
                                                            })();


                                                            document.getElementById("close-demo3").textContent = "Select Dates";
                                                        </script>

                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>Passenger(s) </h5> 1 adult, 0 children,
                                                                0 infants
                                                            </option>
                                                            <option value="1"><h5>Passenger(s) </h5> 1 adult, 0
                                                                children, 0 infants
                                                            </option>
                                                            <option value="2"><h5>Passenger(s) </h5> 1 adult, 0
                                                                children, 0 infants
                                                            </option>
                                                            <option value="3"><h5>Passenger(s) </h5> 1 adult, 0
                                                                children, 0 infants
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>Class </h5> Economy</option>
                                                            <option value="1"><h5>Class </h5> Business</option>
                                                            <option value="2"><h5>Class </h5> Economy</h5></option>
                                                            <option value="3"><h5>Class </h5> Business</h5></option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="promo-code-form">
                                                    <input type="text" placeholder="Promo Code">
                                                </div>
                                                <div class="submit-form-button">
                                                    <button type="submit">Show Flights</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>

                            <div class="my-trips-tab" data-aos="zoom-in">
                                <form>
                                    <div class="form-tab-title">
                                        <div class="form-tab-radio">
                                            <label class="showOverlay" for="check"></label>
                                            <!--<input id="check" class="check" type="checkbox">-->
                                            <div class="containerOuter">
                                                <div class="container-radio">
                                                    <input type="radio" class="hidden" id="input5" name="inputs">
                                                    <label class="entry" for="input5">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Return</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input6" name="inputs">
                                                    <label class="entry" for="input6">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">One Way</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input7" name="inputs">
                                                    <label class="entry" for="input7">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Stopover in Rwanda</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input8" name="inputs">
                                                    <label class="entry" for="input8">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Multi-city</div>
                                                    </label>
                                                    <div class="highlight"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>
                                            <!--<svg width="0" height="0" viewBox="0 0 40 140">-->
                                            <!--  <defs>-->
                                            <!--    <mask id="holes">-->
                                            <!--      <rect x="0" y="0" width="100" height="140" fill="white" />-->
                                            <!--      <circle r="12" cx="20" cy="20" fill="black"/>-->
                                            <!--      <circle r="12" cx="20" cy="70" fill="black"/>-->
                                            <!--      <circle r="12" cx="20" cy="120" fill="black"/>-->
                                            <!--      <circle r="12" cx="20" cy="120" fill="black"/>-->
                                            <!--    </mask>-->
                                            <!--  </defs>-->
                                            <!--</svg>-->

                                        </div>
                                        <div class="award-ticket">
                                            <p><i class="fi fi-rr-arrow-up-right-from-square"></i><b>Award ticket - <a
                                                    href=""> Buy a ticket with Dreamiles</a></b></p>
                                        </div>

                                    </div>

                                    <div class="form-tab-lists">
                                        <ul>


                                            <li><input type="text" placeholder="Booking Reference"></li>
                                            <li><input type="text" placeholder="Last Name"></li>

                                            <li>

                                                <div class="submit-form-button">
                                                    <button type="submit">Retrieve Booking</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </form>
                            </div>

                            <div class="flight-status-tab" data-aos="zoom-in">
                                <form>
                                    <div class="form-tab-title">
                                        <div class="form-tab-radio">
                                            <label class="showOverlay" for="check"></label>
                                            <!--<input id="check" class="check" type="checkbox">-->
                                            <div class="containerOuter">
                                                <div class="container-radio">
                                                    <input type="radio" class="hidden" id="input9" name="inputs">
                                                    <label class="entry" for="input9">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Return</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input10" name="inputs">
                                                    <label class="entry" for="input10">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">One Way</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input11" name="inputs">
                                                    <label class="entry" for="input11">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Stopover in Rwanda</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input12" name="inputs">
                                                    <label class="entry" for="input12">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Multi-city</div>
                                                    </label>
                                                    <div class="highlight"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="award-ticket">
                                            <p><i class="fi fi-rr-arrow-up-right-from-square"></i><b>Award ticket -</b>
                                                <a href=""> Buy a ticket with Dreamiles</a></p>
                                        </div>

                                    </div>

                                    <div class="form-tab-lists">
                                        <ul>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="1"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="2"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="3"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="1"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="2"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="3"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <input type="text" placeholder="Flight Number">
                                            </li>

                                            <li>

                                                <div class="submit-form-button">
                                                    <button type="submit">Show Flights</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>

                            <div class="flight-schedule-tab" data-aos="zoom-in">
                                <form>
                                    <div class="form-tab-title">
                                        <div class="form-tab-radio">
                                            <label class="showOverlay" for="check"></label>

                                            <div class="containerOuter">
                                                <div class="container-radio">
                                                    <input type="radio" class="hidden" id="input13" name="inputs">
                                                    <label class="entry" for="input13">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Return</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input14" name="inputs">
                                                    <label class="entry" for="input14">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">One Way</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input15" name="inputs">
                                                    <label class="entry" for="input15">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Stopover in Rwanda</div>
                                                    </label>
                                                    <input type="radio" class="hidden" id="input16" name="inputs">
                                                    <label class="entry" for="input16">
                                                        <div class="circle"></div>
                                                        <div class="entry-label">Multi-city</div>
                                                    </label>
                                                    <div class="highlight"></div>
                                                    <div class="overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="award-ticket">
                                            <p><i class="fi fi-rr-arrow-up-right-from-square"></i><b>Award ticket -</b>
                                                <a href=""> Buy a ticket with Dreamiles</a></p>
                                        </div>

                                    </div>

                                    <div class="form-tab-lists">
                                        <ul>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="1"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="2"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="3"><h5>From </h5> <br>
                                                                <p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="cont_select_center">

                                                    <!-- Custom select structure -->
                                                    <div class="select_mate" data-mate-select="active">

                                                        <select name="" onchange="" onclick="return false;" id="">
                                                            <option value=""><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="1"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="2"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                            <option value="3"><h5>To </h5><br>
                                                                <p>Nairobi </p> <br><h5>Jomo Kenyatta I...(NBO)</h5>
                                                            </option>
                                                        </select>
                                                        <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                                        <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                                        <div class="cont_list_select_mate">
                                                            <ul class="cont_select_int"></ul>
                                                        </div>
                                                    </div>

                                                    <!-- Custom select structure -->


                                                </div> <!-- End div center   -->
                                            </li>
                                            <li>
                                                <div class="date-picker-form">
                                                    <div class="date-picker-form-height">

                                                        <script type="text/javascript"
                                                                src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                                                        <script type="text/javascript"
                                                                src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                                        <script type="text/javascript"
                                                                src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                                                        <link rel="stylesheet" type="text/css"
                                                              href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

                                                        <link rel="stylesheet" type="text/css"
                                                              href="https://staysure.susa.uk/_william_dev/hotel-datepicker/dist/css/hotel-datepicker.css"/>
                                                        <!--<link rel="stylesheet" type="text/css" href="https://staysure.susa.uk/_william_dev/hotel-datepicker/demo/css/main.css" />-->

                                                        <div class="demo__item">
                                                            <div class="demo__input">
                                                                <input type="text" id="demo2" value="Select your dates"
                                                                       aria-label="Check-in and check-out dates"
                                                                       aria-describedby="demo2-input-description"/>

                                                            </div>
                                                        </div>

                                                        <script type="text/javascript"
                                                                src="https://staysure.susa.uk/_william_dev/hotel-datepicker/fecha.min.js"></script>
                                                        <script type="text/javascript"
                                                                src="https://staysure.susa.uk/_william_dev/hotel-datepicker/dist/js/hotel-datepicker.js"></script>

                                                        <script type="text/javascript">
                                                            (function () {
                                                                var demo3 = new HotelDatepicker(
                                                                    document.getElementById("demo2"), {

                                                                        format: 'dddd D MMM YYYY',
                                                                        inline: false,
                                                                        clearButton: true,
                                                                        submitButton: true,
                                                                        topbarPosition: 'bottom',
                                                                        autoClose: false,
                                                                        submitButtonName: 'submit',


                                                                    },
                                                                );
                                                                var open_datepicker_button =
                                                                    document.getElementById("open-datepicker");

                                                                open_datepicker_button.addEventListener(
                                                                    "click",
                                                                    open_datepicker_function
                                                                );

                                                                function open_datepicker_function() {
                                                                    console.log("Open!");
                                                                    demo3.open();
                                                                }
                                                            })();


                                                            document.getElementById("close-demo2").textContent = "Select Dates";
                                                        </script>

                                                    </div>
                                                </div>
                                            </li>
                                            <li>

                                                <div class="submit-form-button">
                                                    <button type="submit">Show Flights</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="home-plan-trip-wrapper">
            <div class="container-rigid">
                <h3 data-aos="zoom-in">Plan your trip</h3>
                <ul>
                    <li data-aos="zoom-in">
                        <a href="{{url('destination')}}">
                            <figure><img src="images/plan-explore.svg"></figure>
                            <div class="plan-trip-caption">
                                <p>Explore Destinations</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{ url('/travel-requirements')}}">
                            <figure><img src="images/plan-requirements.svg"></figure>
                            <div class="plan-trip-caption">
                                <p>Travel Requirements</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('/special-assistance')}}">
                            <figure><img src="images/plan-care.svg"></figure>
                            <div class="plan-trip-caption">
                                <p>Special Care</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('/travel-insurance')}}">
                            <figure><img src="images/plan-insurance.svg"></figure>
                            <div class="plan-trip-caption">
                                <p>Travel Insurance</p>
                                <i class="fi fi-ts-arrow-circle-right"></i>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>

        </div>

        <div class="cities-pattern" data-aos="zoom-in">
            <figure><img src="images/cities-pattern-lightblue.svg"></figure>
        </div>

        <div class="dont-miss-offer-wrapper">
            <div class="container-rigid">
                <div class="dont-miss-dropselect" data-aos="fade-right">
                    <h3>Don't miss our offers</h3>

                    <div class="cont_select_center">
                        <h5>From</h5>
                        <!-- Custom select structure -->
                        <div class="select_mate" data-mate-select="active">

                            <select name="" onchange="" onclick="return false;" id="">
                                <option value="">Nairobi NBO</option>
                                <option value="1">Kigali KGL</option>
                                <option value="2">Nairobi NBO</option>
                                <option value="3">Kigali KGL</option>
                            </select>
                            <p class="selecionado_opcion" onclick="open_select(this)"></p>
                            <span onclick="open_select(this)" class="icon_select_mate">
                                    <i class="fi fi-sr-pencil"></i>
                                </span>
                            <div class="cont_list_select_mate">
                                <ul class="cont_select_int"></ul>
                            </div>
                        </div>
                        <!-- Custom select structure -->


                    </div> <!-- End div center   -->

                </div>

                <div class="dont-miss-offer-columns">
                    <div class="dont-miss-offer-columns-style dont-miss-offer-column1">
                        <ul>
                            <li data-aos="fade-right">
                                <figure><img src="images/London_Thumbnail.jpg"></figure>
                                <div class="dont-miss-offer-details">
                                    <div class="dont-miss-offer-details-hover">
                                        <div class="dont-miss-offer-details-visible">
                                            <b>
                                                <h4>London</h4>
                                                <p>02 Nov 2023 - 07 Nov 2023</p>
                                            </b>
                                            <b>
                                                <p>Economy From</p>
                                                <h4>USD 297</h4>
                                            </b>
                                        </div>
                                        <div class="dont-miss-offer-details-invisible">
                                            <ul>
                                                <li><a href="{{url('book')}}">Book Now</a></li>
                                                <li><a href="{{url('destination')}}">Explore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>









                    <div class="dont-miss-offer-columns-style dont-miss-offer-column2">
                        <ul>
                            <li data-aos="fade-left">
                                <figure><img src="images/Abuja_Thumbnail.jpg"></figure>
                                <div class="dont-miss-offer-details">
                                    <div class="dont-miss-offer-details-hover">
                                        <div class="dont-miss-offer-details-visible">
                                            <b>
                                                <h4>Abuja</h4>
                                                <p>02 Nov 2023 - 07 Nov 2023</p>
                                            </b>
                                            <b>
                                                <p>Economy From</p>
                                                <h4>USD 297</h4>
                                            </b>
                                        </div>
                                        <div class="dont-miss-offer-details-invisible">
                                            <ul>
                                                <li><a href="{{url('book')}}">Book Now</a></li>
                                                <li><a href="{{url('destination')}}">Explore</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li data-aos="fade-left">
                                <figure><img src="images/Accra_Thumbnail.jpg"></figure>
                                <div class="dont-miss-offer-details">
                                    <div class="dont-miss-offer-details-hover">
                                        <div class="dont-miss-offer-details-visible">
                                            <b>
                                                <h4>Accra</h4>
                                                <p>02 Nov 2023 - 07 Nov 2023</p>
                                            </b>
                                            <b>
                                                <p>Economy From</p>
                                                <h4>USD 297</h4>
                                            </b>
                                        </div>
                                        <div class="dont-miss-offer-details-invisible">
                                            <ul>
                                                <li><a href="{{url('book')}}">Book Now</a></li>
                                                <li><a href="{{url('destination/')}}">Explore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-aos="fade-left">
                                <figure><img src="images/Ethiopia_Thumbnail.jpg"></figure>
                                <div class="dont-miss-offer-details">
                                    <div class="dont-miss-offer-details-hover">
                                        <div class="dont-miss-offer-details-visible">
                                            <b>
                                                <h4>Addis Ababa</h4>
                                                <p>02 Nov 2023 - 07 Nov 2023</p>
                                            </b>
                                            <b>
                                                <p>Economy From</p>
                                                <h4>USD 297</h4>
                                            </b>
                                        </div>
                                        <div class="dont-miss-offer-details-invisible">
                                            <ul>
                                                <li><a href="{{url('book')}}">Book Now</a></li>
                                                <li><a href="">Explore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li data-aos="fade-left">
                                <figure><img src="images/Nairobi_Thumbnail.jpg"></figure>
                                <div class="dont-miss-offer-details">
                                    <div class="dont-miss-offer-details-hover">
                                        <div class="dont-miss-offer-details-visible">
                                            <b>
                                                <h4>Nairobi</h4>
                                                <p>02 Nov 2023 - 07 Nov 2023</p>
                                            </b>
                                            <b>
                                                <p>Economy From</p>
                                                <h4>USD 297</h4>
                                            </b>
                                        </div>
                                        <div class="dont-miss-offer-details-invisible">
                                            <ul>
                                                <li><a href="{{url('book')}}">Book Now</a></li>
                                                <li><a href="{{url('destination')}}">Explore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="view-more-offers" data-aos="fade-right"><a href="">View More Offers</a></div>
                </div>
            </div>

        </div>

        <div class="home-offers-slider">
            <ul class="bxslider">

                <li>
                    <img src="images/Kamembe.jpg"/>
                    <div class="bx-caption">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h3 data-aos="fade-right">Kamembe exclusive holiday offer</h3>
                                <p data-aos="fade-right">Book your flight and enjoy special rates <br> at the Mantis Kivu Marina Bay hotel</p>
                                <a href="{{url('dreammiles')}}" data-aos="fade-right">Explore More</a>

                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <img src="images/Dreamiles.jpg"/>
                    <div class="bx-caption">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h3 data-aos="fade-right">Enroll, Fly and Earn</h3>
                                <p data-aos="fade-right">Delight in every mile, Unlock your dream</p>
                                <a href="{{url('offers')}}" data-aos="fade-right">Explore More</a>

                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <img src="images/Travel_Insurance.jpg"/>
                    <div class="bx-caption">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h3 data-aos="fade-right">Insure your dreams</h3>
                                <p data-aos="fade-right">Your family vacation is now on safe wings.</p>
                                <a href="{{url('offers')}}" data-aos="fade-right">Explore More</a>

                            </div>
                        </div>
                    </div>

                </li>

            </ul>
        </div>


        <div class="more-than-flight-wrapper">
            <div class="container-rigid">
                <h3 data-aos="zoom-in">Looking for more than a flight?</h3>
                <ul>
                    <li data-aos="zoom-in">
                        <a href="https://cars.cartrawler.com/rwandair/?ClientID=534058#/searchcars" target="_blank">
                            <figure><img src="images/rent-car.svg"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Rent a car at a favourable price</h4>
                                <p>with cartrawler</p>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="https://www.booking.com/index.html?aid=1469853#new_tab" target="_blank">
                            <figure><img src="images/book-accomodation.svg"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Book your accomodation</h4>
                                <p>with booking.com</p>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="http://www.rwandairdutyfree.com/" target="_blank">
                            <figure><img src="images/duty-free-shopping.svg"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Duty free shopping</h4>
                                <p>with ikaze boutique</p>
                            </div>
                        </a>
                    </li>

                    <li data-aos="zoom-in">
                        <a href="{{url('inzozi')}}">
                            <figure><img src="images/inzozi-magazine.svg"></figure>
                            <div class="more-than-flight-caption">
                                <h4>Inzozi Magazine</h4>
                                <p>with inzozi</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
@endsection
