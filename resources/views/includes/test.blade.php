<div class="home-form-wrapper" >
    <div class="container-rigid">
        <!--Horizontal Tab-->
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
                                        <div class="select-customize-icon">
                                            <figure><img
                                                    src="{{asset('assets/site/images/round-cust.png')}}">
                                            </figure>
                                        </div>
                                        <div class="select-round-trip">

                                            <select>
                                                <option data-display=" Round Trip "> Round Trip</option>
                                                <option value="1">One Way</option>
                                                <option value="2">Multi-City</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="customize-round-trip">
                                        <div class="select-customize-icon">
                                            <figure><img
                                                    src="{{asset('assets/site/images/passenger-cust.png')}}">
                                            </figure>
                                        </div>
                                        <div class="select-round-trip">

                                            <select>
                                                <option data-display=" 1 Passenger"> 1 Passenger</option>
                                                <option value="1">One Way</option>
                                                <option value="2">Multi-City</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="customize-round-trip">
                                        <div class="select-customize-icon">
                                            <figure><img
                                                    src="{{asset('assets/site/images/class-cust.png')}}">
                                            </figure>
                                        </div>
                                        <div class="select-round-trip">

                                            <select>
                                                <option data-display=" Economy "> Economy</option>
                                                <option value="1">Business</option>
                                                <option value="2">Premium</option>
                                            </select>
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

                        <div class="form-tab-lists">
                            <ul>
                                <li>
                                    <div class="cont_select_center">

                                        <!-- Custom select structure -->
                                        <div class="select_mate select_mate1" data-mate-select="active">

                                            <select name="" onchange="" onclick="return false;" id="">
                                                <option value=""><h5>From </h5> <br>
                                                    <!--<p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>-->
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
                                                                <b class="icon_select_mate-round"><figure><img
                                                                            src="{{asset('assets/site/images/round-cust.png')}}"></figure></b>
                                                            </span>
                                            <div class="cont_list_select_mate">
                                                <ul class="cont_select_int"></ul>
                                            </div>
                                        </div>

                                        <!-- Custom select structure -->


                                    </div> <!-- End div center   -->


                                    <div class="cont_select_center">

                                        <!-- Custom select structure -->
                                        <div class="select_mate select_mate2" data-mate-select="active">

                                            <select name="" onchange="" onclick="return false;" id="">
                                                <option value=""><h5>To </h5> <br>
                                                    <!--<p> Nairobi </p> <br> <h5> Jomo Kenyatta I...(NBO)</h5>-->
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
                                    </div> <!-- End div center   -->
                                </li>
                                <li>
                                    <div class="date-picker-form">
                                        <div class="date-picker-form-height">
                                            <div class="demo__item">
                                                <div class="demo__input">
                                                    <input type="text" id="demo3" value="Select your dates"
                                                           aria-label="Check-in and check-out dates"
                                                           aria-describedby="demo3-input-description"/>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!--<div class="promo-code-form">-->
                                    <!--    <input type="text" placeholder="Promo Code">-->
                                    <!--</div>-->
                                    <div class="submit-form-button">
                                        <button type="submit">Show Flights</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="my-trips-tab">
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

                <div class="flight-status-tab" >
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

                <div class="flight-schedule-tab">
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
                                            <div class="demo__item">
                                                <div class="demo__input">
                                                    <input type="text" id="demo2" value="Select your dates"
                                                           aria-label="Check-in and check-out dates"
                                                           aria-describedby="demo2-input-description"/>

                                                </div>
                                            </div>
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
