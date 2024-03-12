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
                                                <span><h4 id="roundTripValue">Round Trip</h4><i
                                                        class="fi fi-rr-angle-small-down"></i></span>
                                            </div>
                                        </div>
                                        <div class="hide-customize-round-trip trip" id="roundTripOptions"
                                             style="display: none;">
                                            <div class="round-trip-hide">
                                                <span class="active"
                                                      onclick="getSelectedValue('Round Trip',this,'roundTripValue','trip')"><i
                                                        class="fa-solid fa-check"></i><h4>Round Trip</h4></span>
                                                <span
                                                    onclick="getSelectedValue('One Way',this,'roundTripValue','trip')"><i
                                                        class="fa-solid fa-check"></i><h4>One Way</h4></span>
                                                <span
                                                    onclick="getSelectedValue('Multi City',this,'roundTripValue','trip')"><i
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
                                                            <span><h4>1 Passenger</h4><i
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
                                            <input autocomplete="off" oninput="searchFromDestinations()" required type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <label class="float-label float-label1">From</label>
                                        </div>
                                        <div
                                            class="float-group float-group-second show-float-group-second">
                                            <input autocomplete="off" required type="text"
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
                                                <span id="selectFrom"></span>
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
                                                <span id="selectTo"></span>
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
                                        <button id="findFlights" type="submit">Show Flights</button>
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
                                                <input type="checkbox" id="test1"/>
                                                <label for="test1">One Way</label>
                                            </p>
                                            <p>
                                                <input type="checkbox" id="test2"/>
                                                <label for="test2">My dates are Flexibles(-/+3
                                                    days)</label>
                                            </p>
                                        </div>

                                        <div class="pop-date">
                                            <div class="dep-ret-input">
                                                <input type="" placeholder="07/07/07">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </div>
                                            <div class="dep-ret-input">
                                                <input type="" placeholder="07/07/07">
                                                <i class="fa-solid fa-calendar-days"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <div id="datepicker"></div>
                                    </div>
                                    <div class="date-picker-continue">
                                        <a href="">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="">
                        <div id="multi_city" class="form-tab-lists" style="display: none">
                            <ul class="multiCity">
                                <li>
                                    <div class="cont_select_center">
                                        <div>
                                            <select class="form-control from_multi_city" name=""
                                                    id="selectFrom_multi_city0">
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="cont_select_center">
                                        <div>
                                            <select class="to_multi_city" name="" onchange=""
                                                    onclick="return false;"
                                                    id="selectTo_multi_city0">
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="input-group">
                                        <input type="text" id="departDate0"
                                               class="form-control multy_city_date"
                                               placeholder="Select Date">
                                        <div class="input-group-append">
                                              <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                              </span>
                                        </div>
                                    </div>
                                </li>
                                <span id="flight_inputs"></span>
                                <div class="add_flight_button">
                                    <button class="submit-form-button" id="add_multi_city_flight">
                                        Add Flight
                                        <i class="fi fi-rr-plus-small"></i>
                                    </button>
                                </div>
                                <li>
                                    <div class="cont_select_center">
                                        <!-- Custom select structure -->
                                        <div class="select_mate" data-mate-select="active">
                                            <select name="" onchange="" onclick="return false;"
                                                    id="passenger">
                                                <option value=""><h5>Passenger(s) </h5> 1 adult, 0
                                                    children, 0 infants
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
                                            <p class="selecionado_opcion"
                                               onclick="open_select(this)"></p>
                                            <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                            <div class="cont_list_select_mate">
                                                <ul class="cont_select_int"></ul>
                                            </div>
                                        </div>
                                    </div> <!-- End div center   -->
                                </li>
                                <li>
                                    <div class="cont_select_center">
                                        <!-- Custom select structure -->
                                        <div class="select_mate" data-mate-select="active">
                                            <select name="cabin" onchange="" onclick="return false;"
                                                    id="cabin">
                                                <option value="ECONOMY">Economy</option>
                                                <option value="BUSINESS">Business</option>
                                            </select>
                                            <p class="selecionado_opcion"
                                               onclick="open_select(this)"></p>
                                            <span onclick="open_select(this)" class="icon_select_mate">
                                                                <i class="fi fi-rr-angle-small-down"></i>
                                                            </span>
                                            <div class="cont_list_select_mate">
                                                <ul class="cont_select_int"></ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="promo-code-form">
                                        <input id="promoCode" type="text"
                                               placeholder="+ Add Promo Code">
                                    </div>
                                    <div class="submit-form-button">
                                        <button id="findFlightsMultiCity" type="button">Show Flights
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
                                                id="retreivepnr_SearchFlex"
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
                                            class="float-group float-group-first show-float-group-first">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <lable class="float-label float-label1">From</lable>
                                        </div>
                                        <div
                                            class="float-group float-group-second show-float-group-second">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Nairobi, NBP"/>
                                            <lable class="float-label float-label2">To</lable>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-first">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                                <span><h4>Flights from:</h4><i
                                                                        class="fa-solid fa-xmark"></i></span>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>
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

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>
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
                        <div class="form-tab-title">
                            <div class="form-tab-radio">
                                <div class="select-customize">

                                    <div class="customize-round-trip">
                                        <div class="show-customize-round-trip">
                                            <div class="select-customize-icon">
                                                <figure><img
                                                        src="{{asset('assets/site/images/round-cust.png')}}">
                                                </figure>
                                            </div>
                                            <div class="select-round-trip">
                                                            <span><h4>Round Trip</h4><i
                                                                    class="fi fi-rr-angle-small-down"></i></span>
                                            </div>
                                        </div>

                                        <div class="hide-customize-round-trip">
                                            <div class="round-trip-hide">
                                                                <span class="active"><i
                                                                        class="fa-solid fa-check"></i><h4>Round Trip</h4></span>

                                                <span><i
                                                        class="fa-solid fa-check"></i><h4>One Way</h4></span>

                                                <span><i
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

                                                            <span><h4>1 Passenger</h4><i
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
                                                            <div id="app3"></div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="passenger-hide-persons">
                                                            <h4>Children</h4>
                                                            <p>Age 2 - 11 Years</p>
                                                        </div>
                                                        <div class="passenger-hide-numbers">
                                                            <div id="app4"></div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="passenger-hide-persons">
                                                            <h4>Infants</h4>
                                                            <p>Under 2 Years</p>
                                                        </div>
                                                        <div class="passenger-hide-numbers">
                                                            <div id="app5"></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="passenger-hide-ctn">
                                                    <button>Cancel</button>
                                                    <button>Done</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="customize-round-trip">
                                        <div class="show-customize-class-trip">
                                            <div class="select-customize-icon">
                                                <figure><img
                                                        src="{{asset('assets/site/images/class-cust.png')}}">
                                                </figure>
                                            </div>
                                            <div class="select-round-trip">

                                                            <span><h4>Economy</h4><i
                                                                    class="fi fi-rr-angle-small-down"></i></span>
                                            </div>
                                        </div>


                                        <div class="hide-customize-class-trip">
                                            <div class="round-trip-hide">
                                                                <span class="active"><i
                                                                        class="fa-solid fa-check"></i><h4>Economy</h4></span>

                                                <span><i
                                                        class="fa-solid fa-check"></i><h4>Business Class</h4></span>

                                                <span><i
                                                        class="fa-solid fa-check"></i><h4>First Class</h4></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="award-ticket">
                                <!--<p><i class="fi fi-rr-arrow-up-right-from-square"></i><b>Award ticket - <a-->
                                <!--        href=""> Buy a ticket with Dreamiles</a></b></p>-->
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
                                    <!--<div class="cont_select_center">-->
                                    <!--    <div>-->
                                    <!--        <select class="form-control data-select fromselection drop-select2" name=""-->
                                    <!--                id="selectFrom">-->
                                    <!--        </select>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                                    <!--<div class="cont_select_center">-->
                                    <!--    <div>-->
                                    <!--        <select name="" onchange=""-->
                                    <!--                class="form-control singleItem data-select toselection drop-select2"-->
                                    <!--                onclick="return false;" id="selectTo">-->
                                    <!--        </select>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="float-group-icon">
                                        <div class="float-group-bi"><i
                                                class="fa-solid fa-arrow-right-arrow-left"></i></div>
                                        <div
                                            class="float-group float-group-first show-float-group-first">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Kigali, KGL"/>
                                            <lable class="float-label float-label1">From</lable>
                                        </div>


                                        <div
                                            class="float-group float-group-second show-float-group-second">
                                            <input autocomplete="off" required type="text"
                                                   placeholder="Nairobi, NBP"/>
                                            <lable class="float-label float-label2">To</lable>
                                        </div>
                                    </div>

                                    <div class="hide-float-group-first">
                                        <div class="float-group-lists">
                                            <ul>
                                                <li>
                                                                <span><h4>Flights from:</h4><i
                                                                        class="fa-solid fa-xmark"></i></span>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>
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

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Berlin</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>BER</h5>
                                                        <p>Berlin Brandenburg Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Germany</h5>
                                                        <p>Frankfurt am Main</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>FRA</h5>
                                                        <p>FRA, Frankfurt am Main Airport</p>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="float-group-country">
                                                        <h5>Benin</h5>
                                                        <p>Cotoniu</p>
                                                    </div>
                                                    <div class="float-group-airport">
                                                        <h5>COO</h5>
                                                        <p>Cadjehoun Airport</p>
                                                    </div>
                                                </li>
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
