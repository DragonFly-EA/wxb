<style>
    .highlight {
        background-color: #000; /* Adjust color as needed */
    }
    .first_date_input{
        width: 100%;
    }
</style>
<div class="home-form-wrapper">
    <div class="container-rigid">
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
                <li>
                    <figure><span></span></figure>
                    <h3>Book Flight</h3>
                    <b><img src="{{asset('assets/site/images/active-border-bottom.png')}}"></b>
                </li>
                <li>
                    <figure><span></span></figure>
                    <h3>My Trips</h3>
                    <b><img src="{{asset('assets/site/images/active-border-bottom.png')}}"></b>
                </li>
                <li>
                    <figure><span></span></figure>
                    <h3>Check In</h3>
                    <b><img src="{{asset('assets/site/images/active-border-bottom.png')}}"></b>
                </li>
                <li>
                    <figure><span></span></figure>
                    <h3>Flight Status</h3>
                    <b><img src="{{asset('assets/site/images/active-border-bottom.png')}}"></b>
                </li>
                <li>
                    <figure><span></span></figure>
                    <h3>Flight Schedule</h3>
                    <b><img src="{{asset('assets/site/images/active-border-bottom.png')}}"></b>
                </li>
            </ul>
            <div id="errorsContent"></div>
            <div class="resp-tabs-container">
                <div class="book-flight-tab">
                    <form>
                        <div class="form-tab-title">
                            <div class="form-tab-radio">
                                <div class="select-customize">
                                    <div class="customize-round-trip">
                                        <div class="show-customize-round-trip">
                                            <div class="select-customize-icon">
                                                <figure><img src="{{asset('assets/site/images/round-cust.png')}}">
                                                </figure>
                                            </div>
                                            <div class="select-round-trip">
                                                <span><h4 id="tripValue">Round Trip</h4><i
                                                        class="fi fi-rr-angle-small-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="hide-customize-round-trip trip" id="roundTripOptions"
                                             style="display: none;">
                                            <div class="round-trip-hide">
                                                <span class="tripflow active"
                                                      onclick="getSelectedValue('Round Trip',this,'tripValue','trip')"><i
                                                        class="fa-solid fa-check"></i><h4>Round Trip</h4></span>
                                                <span class="tripflow"
                                                    onclick="getSelectedValue('One Way',this,'tripValue','trip')"><i
                                                        class="fa-solid fa-check"></i><h4>One Way</h4></span>
                                                <span class="tripflow"
                                                    onclick="getSelectedValue('Multi City',this,'tripValue','trip')"><i
                                                        class="fa-solid fa-check"></i><h4>Multi-City</h4></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customize-round-trip">
                                        <div class="show-customize-passenger-trip">
                                            <div class="select-customize-icon">
                                                <figure><img
                                                        src="{{asset('assets/site/images/passenger-cust.png')}}">
                                                </figure>
                                            </div>
                                            <div class="select-round-trip">
                                                            <span><h4><b id="passenger_no"
                                                                         style="font-weight: normal">1</b> Passenger</h4><i
                                                                    class="fi fi-rr-angle-small-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="hide-customize-passenger-trip">
                                            <div class="passenger-hide">
                                                <ul>
                                                    <li>
                                                        <div class="passenger-hide-persons">
                                                            <h4>Adults</h4>
                                                            <p>Age 12+</p>
                                                        </div>
                                                        <div class="passenger-hide-numbers">
                                                            <div id="app"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="passenger-hide-persons">
                                                            <h4>Children</h4>
                                                            <p>Age 2 - 11 Years</p>
                                                        </div>
                                                        <div class="passenger-hide-numbers">
                                                            <div id="app1"></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="passenger-hide-persons">
                                                            <h4>Infants</h4>
                                                            <p>Under 2 Years</p>
                                                        </div>
                                                        <div class="passenger-hide-numbers">
                                                            <div id="app2"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="passenger-hide-ctn">
                                                    <button type="button">Cancel</button>
                                                    <button type="button">Done</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="customize-round-trip">
                                        <div class="show-customize-class-trip">
                                            <div class="select-customize-icon">
                                                <figure><img src="{{asset('assets/site/images/class-cust.png')}}">
                                                </figure>
                                            </div>
                                            <div class="select-round-trip"><span><h4 id="tripClassValue">Economy</h4><i
                                                        class="fi fi-rr-angle-small-down"></i></span></div>
                                        </div>
                                        <div class="hide-customize-class-trip tripclass" id="tripclass"
                                             style="display: none">
                                            <div class="round-trip-hide">
                                                <span class="active"
                                                      onclick="getSelectedValue('Economy',this,'tripClassValue','tripclass')"><i
                                                        class="fa-solid fa-check"></i><h4>Economy</h4></span>
                                                <span
                                                    onclick="getSelectedValue('Business Class',this,'tripClassValue','tripclass')"><i
                                                        class="fa-solid fa-check"></i><h4>Business Class</h4></span>
                                                <span
                                                    onclick="getSelectedValue('First Class',this,'tripClassValue','tripclass')"><i
                                                        class="fa-solid fa-check"></i><h4>First Class</h4></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="award-ticket">
                                <p>Book with miles?</p>
                                <div class="toggle-button-cover">
                                    <div class="button-cover">
                                        <div class="button r" id="button-3">
                                            <input type="checkbox" class="checkbox"/>
                                            <div class="knobs"></div>
                                            <div class="layer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-tab-lists" id="other_trips">
                            <ul>
                                <li>
                                    <div class="float-group-icon">
                                        <div class="float-group-bi"><i
                                                class="fa-solid fa-arrow-right-arrow-left"></i></div>
                                        <div
                                            class="float-group float-group-first show-float-group-first">
                                            <input autocomplete="off" id="selectFrom" oninput="searchFromDestinations()"
                                                   required
                                                   type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <label class="float-label float-label1">From</label>
                                        </div>
                                        <div
                                            class="float-group float-group-second show-float-group-second">
                                            <input autocomplete="off" id="selectTo" required type="text"
                                                   placeholder="Nairobi, NBP"/>
                                            <label class="float-label float-label2">To</label>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-first">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights from:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="selectFromDestinations"></span>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-second">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights To:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="selectToDestination"></span>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="open">
                                    <div class="date-inputs-wrapper">
                                        <div class="float-group-dr"><i class="fa-solid fa-minus"></i>
                                        </div>
                                        <div class="date-inputs date-inputs-first" id="DepartureDateWrapper">
                                            <label for="departureDate">Departure</label>
                                            <input type="text" id="DepartDate" readonly>
                                        </div>
                                        <div class="date-inputs date-inputs-second" id="ArrivalDateWrapper">
                                            <label for="returnDate">Returns</label>
                                            <input type="text" id="ArrivalDate" readonly>
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="submit-form-button">
                                        <button id="findFlights" type="button">Show Flights</button>
                                    </div>
                                    <div class="promo-code-form">
                                        <input id="promoCode" type="text"
                                               placeholder="+ Add Promo Code">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div id="openModal1" class="modalDialog1">
                            <div class="date-modal">
                                <div class="date-modal-bg">
                                    <div class="date-modal-header">
                                        <h4>Best Price per Month</h4>
                                        <i class="fa-solid fa-xmark close1"></i>
                                    </div>

                                    <div class="pop-check-date">
                                        <div action="#" class="pop-check">
                                            <p>
                                                <input type="checkbox" id="one_way_checkbox"/>
                                                <label for="one_way_checkbox">One Way</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" id="test2"/>
                                                <label for="test2">My dates are Flexibles(-/+3
                                                    days)</label>
                                            </p>
                                        </div>
                                        <div class="pop-date">
                                            <div class="dep-ret-input first-date">
                                                <input type="text" placeholder="07/07/07">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </div>
                                            <div class="dep-ret-input second-date">
                                                <input type="text" placeholder="07/07/07">
                                                <i class="fa-solid fa-calendar-days" id="calendar-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div id="datepicker"></div>
                                    </div>
                                    <div class="input-group">
                                        <div id="datepicker1"></div>
                                    </div>
                                    <div class="date-picker-continue">
                                        <a onclick="appendDates()">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="">
                        <div id="multi_city" class="form-tab-lists" style="display: none">
                            <ul>
                                <li>
                                    <div class="float-group-icon">
                                        <div class="float-group-bi"><i
                                                class="fa-solid fa-arrow-right-arrow-left"></i></div>
                                        <div
                                            class="float-group float-group-first show-float-group-first">
                                            <input autocomplete="off" id="selectFrom" oninput="searchFromDestinations()"
                                                   required
                                                   type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <label class="float-label float-label1">From</label>
                                        </div>
                                        <div
                                            class="float-group float-group-second show-float-group-second">
                                            <input autocomplete="off" id="selectTo" required type="text"
                                                   placeholder="Nairobi, NBP"/>
                                            <label class="float-label float-label2">To</label>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-first">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights from:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="selectFromDestinations"></span>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-second">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                                <span><h4>Flights To:</h4><i
                                                                        class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="selectToDestination"></span>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="open">
                                    <div class="date-inputs-wrapper">
                                        <div class="float-group-dr"><i class="fa-solid fa-minus"></i>
                                        </div>
                                        <div class="date-inputs date-inputs-first">
                                            <label for="departureDate">Departure</label>
                                            <input type="text" id="DepartDate" readonly>
                                        </div>
                                        <div class="date-inputs date-inputs-second">
                                            <label for="returnDate">Returns</label>
                                            <input type="text" id="ArrivalDate" readonly>
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="submit-form-button">
                                        <button id="findFlights" type="button">Show Flights</button>
                                    </div>
                                    <div class="promo-code-form">
                                        <input id="promoCode" type="text"
                                               placeholder="+ Add Promo Code">
                                    </div>
                                </li>
                            </ul>
                            {{--                            <ul class="multiCity">--}}
                            {{--                                <li>--}}
                            {{--                                    <div class="cont_select_center">--}}
                            {{--                                        <div>--}}
                            {{--                                            <select class="form-control from_multi_city" name=""--}}
                            {{--                                                    id="selectFrom_multi_city0">--}}
                            {{--                                            </select>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <div class="cont_select_center">--}}
                            {{--                                        <div>--}}
                            {{--                                            <select class="to_multi_city" name="" onchange=""--}}
                            {{--                                                    onclick="return false;"--}}
                            {{--                                                    id="selectTo_multi_city0">--}}
                            {{--                                            </select>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <div class="input-group">--}}
                            {{--                                        <input type="text" id="departDate0"--}}
                            {{--                                               class="form-control multy_city_date"--}}
                            {{--                                               placeholder="Select Date">--}}
                            {{--                                        <div class="input-group-append">--}}
                            {{--                                              <span class="input-group-text">--}}
                            {{--                                                <i class="fa fa-calendar"></i>--}}
                            {{--                                              </span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </li>--}}
                            {{--                                <span id="flight_inputs"></span>--}}
                            {{--                                <div class="add_flight_button">--}}
                            {{--                                    <button class="submit-form-button" id="add_multi_city_flight">--}}
                            {{--                                        Add Flight--}}
                            {{--                                        <i class="fi fi-rr-plus-small"></i>--}}
                            {{--                                    </button>--}}
                            {{--                                </div>--}}
                            {{--                                <li>--}}
                            {{--                                    <div class="cont_select_center">--}}
                            {{--                                        <!-- Custom select structure -->--}}
                            {{--                                        <div class="select_mate" data-mate-select="active">--}}
                            {{--                                            <select name="" onchange="" onclick="return false;"--}}
                            {{--                                                    id="passenger">--}}
                            {{--                                                <option value=""><h5>Passenger(s) </h5> 1 adult, 0--}}
                            {{--                                                    children, 0 infants--}}
                            {{--                                                </option>--}}
                            {{--                                                <option value="1"><h5>Passenger(s) </h5> 1 adult, 0--}}
                            {{--                                                    children, 0 infants--}}
                            {{--                                                </option>--}}
                            {{--                                                <option value="2"><h5>Passenger(s) </h5> 1 adult, 0--}}
                            {{--                                                    children, 0 infants--}}
                            {{--                                                </option>--}}
                            {{--                                                <option value="3"><h5>Passenger(s) </h5> 1 adult, 0--}}
                            {{--                                                    children, 0 infants--}}
                            {{--                                                </option>--}}
                            {{--                                            </select>--}}
                            {{--                                            <p class="selecionado_opcion"--}}
                            {{--                                               onclick="open_select(this)"></p>--}}
                            {{--                                            <span onclick="open_select(this)" class="icon_select_mate">--}}
                            {{--                                                                <i class="fi fi-rr-angle-small-down"></i>--}}
                            {{--                                                            </span>--}}
                            {{--                                            <div class="cont_list_select_mate">--}}
                            {{--                                                <ul class="cont_select_int"></ul>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div> <!-- End div center   -->--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <div class="cont_select_center">--}}
                            {{--                                        <!-- Custom select structure -->--}}
                            {{--                                        <div class="select_mate" data-mate-select="active">--}}
                            {{--                                            <select name="cabin" onchange="" onclick="return false;"--}}
                            {{--                                                    id="cabin">--}}
                            {{--                                                <option value="ECONOMY">Economy</option>--}}
                            {{--                                                <option value="BUSINESS">Business</option>--}}
                            {{--                                            </select>--}}
                            {{--                                            <p class="selecionado_opcion"--}}
                            {{--                                               onclick="open_select(this)"></p>--}}
                            {{--                                            <span onclick="open_select(this)" class="icon_select_mate">--}}
                            {{--                                                                <i class="fi fi-rr-angle-small-down"></i>--}}
                            {{--                                                            </span>--}}
                            {{--                                            <div class="cont_list_select_mate">--}}
                            {{--                                                <ul class="cont_select_int"></ul>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <div class="promo-code-form">--}}
                            {{--                                        <input id="promoCode" type="text"--}}
                            {{--                                               placeholder="+ Add Promo Code">--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="submit-form-button">--}}
                            {{--                                        <button id="findFlightsMultiCity" type="button">Show Flights--}}
                            {{--                                        </button>--}}
                            {{--                                    </div>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </div>
                    </form>
                </div>
                <div class="my-trips-tab">
                    <form>
                        <div class="form-tab-lists">
                            <ul>
                                <li><input type="text" placeholder="Booking Reference"
                                           id="retreivepnr_pnr"
                                           name="retreivepnr_pnr"></li>
                                <li><input type="text" placeholder="Last Name" id="retreivepnr_lastname"
                                           name="retreivepnr_lastname"></li>
                                <li>
                                    <div class="submit-form-button">
                                        <button type="submit" class="bottompdng"
                                                id="retreivepnr_SearchFlex"
                                                name="retreivepnr_SearchFlex">Retrieve Booking
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="my-trips-tab">
                    <form>
                        <div class="form-tab-lists">
                            <ul>
                                <li><input type="text" placeholder="Booking Reference"
                                           id="retreivepnr_pnr"
                                           name="retreivepnr_pnr"></li>
                                <li><input type="text" placeholder="Last Name" id="retreivepnr_lastname"
                                           name="retreivepnr_lastname"></li>
                                <li>
                                    <div class="submit-form-button">
                                        <button type="submit" class="bottompdng"
                                                id="retreivepnr_SearchFlex_Checkin"
                                                name="retreivepnr_SearchFlex">Check In
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="book-flight-tab">
                    <form>
                        <div class="form-tab-lists" id="other_trips">
                            <ul>
                                <li>
                                    <div class="float-group-icon">
                                        <div class="float-group-bi"><i
                                                class="fa-solid fa-arrow-right-arrow-left"></i></div>
                                        <div
                                            class="float-group float-group-first flight-status-first show-float-group-first">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <lable class="float-label float-label1">From</lable>
                                        </div>
                                        <div
                                            class="float-group float-group-second flight-status-second show-float-group-second">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Nairobi, NBP"/>
                                            <lable class="float-label float-label2">To</lable>
                                        </div>
                                    </div>
                                    <div class="hide-float-group-first">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights from:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="selectFromDestinationsStatus"></span>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-second">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights To:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="selectToDestinationStatus"></span>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="">
                                    <div class="date-inputs-wrapper">
                                        <div class="date-inputs date-inputs-first">
                                            <label for="departureDate">Departure Date</label>
                                            <input type="text" id="">
                                        </div>
                                        <div class="date-inputs date-inputs-second">
                                            <label for="returnDate">Flight Number</label>
                                            <input type="text" id="">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="submit-form-button">
                                        <button id="findFlights" type="submit">Search Flights</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="book-flight-tab">
                    <form>
                        <div class="form-tab-lists" id="other_trips_schedule">
                            <ul>
                                <li>
                                    <div class="float-group-icon">
                                        <div class="float-group-bi"><i
                                                class="fa-solid fa-arrow-right-arrow-left"></i></div>
                                        <div
                                            class="float-group float-group-first flight-schedule-first show-float-group-first">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <lable class="float-label float-label1">From</lable>
                                        </div>
                                        <div
                                            class="float-group float-group-second flight-schedule-second  show-float-group-second">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Nairobi, NBP"/>
                                            <lable class="float-label float-label2">To</lable>
                                        </div>
                                    </div>
                                    <div class="hide-float-group-first">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights from:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="flightFromSchedule"></span>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-second">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                    <span><h4>Flights To:</h4><i class="fa-solid fa-xmark"></i></span>
                                                </li>
                                                <span id="flightToSchedule"></span>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="open">
                                    <div class="date-inputs-wrapper">
                                        <div class="float-group-dr"><i class="fa-solid fa-minus"></i>
                                        </div>
                                        <div class="date-inputs date-inputs-first">
                                            <label for="departureDate">Departure</label>
                                            <input type="text" id="departureDate" readonly>
                                        </div>
                                        <div class="date-inputs date-inputs-second">
                                            <label for="returnDate">Return</label>
                                            <input type="text" id="returnDate" readonly>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="submit-form-button">
                                        <button id="findFlights" type="submit">Schedule</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="height-radius"></div>
        </div>
    </div>
</div>
<input type="hidden" id="selectedCountry">
<input type="hidden" id="selectedLanguage" value="GB">
<input type="hidden" id="selectedCurrency" value="USD">
