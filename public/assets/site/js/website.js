let countries = [];
let current_location = [];
//let fullDeals = [];
let airport_data = [];

$(document).ready(function () {
    // Fetch current location
    $.getJSON("https://wb.digilab.co.ke/api/geolocation", function (location) {
        current_location = location;
    });
    // Fetch airports, countries data, and route fares
    $.when(
        $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/phpActions/retrieveAirportsInfo.php"),
        $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/db/countries.json"),
        $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/db/routeFares.json")
    ).done(function (airports, countries_data, fares) {
        handleData(airports[0], countries_data[0], fares[0]);
    });
    $("#selectFrom").on("change", function () {
        loadAirports();
    });
    $("#offers").on("change", function () {
        loadOffers();
    });
});

function loadAirports() {
    airport = $("#selectFrom").val();
    appendDestinationJson(
        airport_data.filter((x) =>
            fullDeals
                .find((deal) => deal.city === airport)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries,
        "#selectTo",
        current_location
    );
}

function loadOffers() {
    let current_airport_location = $("#offers").val();
    appendOfferFrom(
        airport_data,
        countries,
        "#first_offer",
        current_airport_location
    );
}

function handleData(airports, countries_data, fares) {
    fullDeals = fares.deals;
    countries = countries_data;
    airport_data = airports;
    let defaultOrigin = $("#selectFrom").val();
    appendAirportData(airports, countries_data, current_location);
    appendAirportMultiCityData(airports, countries_data, current_location);
    appendAirportScheduleData(airports, countries_data, current_location);
    appendOffers(airports, countries_data, current_location);

    let current_city = "NBO";
    //Airport To
    appendDestinationJson(
        airports.filter((x) =>
            fullDeals
                .find((deal) => deal.city === current_city)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries_data,
        "#selectTo",
        current_location
    );
    appendDestinationMultiCityToJson(
        airports.filter((x) =>
            fullDeals
                .find((deal) => deal.city === current_city)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries_data,
        "#selectTo_multi_city" + multi_city_input,
        current_location
    );
    //Schedule To
    appendDestinationScheduleJson(
        airports.filter((x) =>
            fullDeals
                .find((deal) => deal.city === current_city)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries_data,
        "#timetable_arrival",
        current_location
    );

    appendOfferFrom(
        airports.filter((x) =>
            fullDeals
                .find((deal) => deal.city === current_city)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries_data,
        "#first_offer",
        current_city
    );
    appendAirportDataFlightStatus(airports, countries_data, current_location);
    appendFlightStatusJson(
        airports.filter((x) =>
            fullDeals
                .find((deal) => deal.city === current_city)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries_data,
        "#flightstatus_arrival",
        current_location
    );
}

function appendOfferFrom(airports, countries_data, select, current_location) {
    $("#other_offers").empty();
    $("#first_offer").empty();
    if (airports.length > 0) {
        const randomIndex = Math.floor(Math.random() * airports.length);
        const selectedAirport = airports[randomIndex];
        let option = "";
        option += `
                    <ul>
                        <li data-aos="fade-right">
                            <figure>
                                <img src="https://wb.digilab.co.ke/img/${selectedAirport.iata_code}.jpg" alt="${selectedAirport.municipality}" onerror = "handleImageError(event)">
                            </figure>
                            <div class="dont-miss-offer-details">
                                <div class="dont-miss-offer-details-hover">
                                    <div class="dont-miss-offer-details-visible">
                                        <b>
                                            <h4>${selectedAirport.municipality}</h4>
                                            <p>02 Nov 2023 - 07 Nov 2023</p>
                                        </b>
                                        <b>
                                            <p>Economy From</p>
                                            <h4>USD 297</h4>
                                        </b>
                                    </div>
                                    <div class="dont-miss-offer-details-invisible">
                                        <ul>
<!--                                            <li><a href="">Book Now</a></li>-->
                                            <li><a href="destination/${selectedAirport.municipality}/${selectedAirport.iata_code}">Explore</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           </li>
                         </ul>`;
        // document.getElementById("first_offer").innerHTML = option;
    }
    const numberOfAirportsToSelect = 8;
    const selected4Airports = [];

    while (selected4Airports.length < numberOfAirportsToSelect && airports.length > 0) {
        const randomIndex = Math.floor(Math.random() * airports.length);
        const selectedAirport = airports[randomIndex];

        // Check if the selected airport is not already in the selectedAirports array
        if (!selected4Airports.some((airport) => airport.iata_code === selectedAirport.iata_code)) {
            selected4Airports.push(selectedAirport);
        }
    }
    let other_offers = "";
    let offer_deals = fullDeals.filter((x) => {
        return x.city.includes(current_location);
    });
    console.log(offer_deals);

    for (let i = 0; i < selected4Airports.length; i++) {
        other_offers += `                        <li data-aos="fade-left">
                            <figure>
                                <img src="https://wb.digilab.co.ke/img/${selected4Airports[i].iata_code}.jpg" alt="${selected4Airports[i].municipality}" onerror = "handleImageError(event)">
                            </figure>
                            <div class="dont-miss-offer-details">
                                <div class="dont-miss-offer-details-hover">
                                    <div class="dont-miss-offer-details-visible">
                                        <b>
                                            <h4>${selected4Airports[i].municipality}</h4>
                                            <p>02 Nov 2023 - 07 Nov 2023</p>
                                        </b>
                                        <b>
                                            <p>Economy From</p>
                                            <h4>USD 200</h4>
                                        </b>
                                    </div>
                                    <div class="dont-miss-offer-details-invisible">
                                        <ul>
<!--                                            <li><a href="">Book Now</a></li>-->
                                            <li><a href="destination/${selected4Airports[i].municipality}/${selected4Airports[i].iata_code}">Explore</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           </li>`;
        document.getElementById("other_offers").innerHTML = other_offers;
    }
}

function appendDestinationJson(
    airports,
    countries_data,
    select,
    current_location
) {
    $(select).empty();
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));
    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    $(select).append(options);
}

function appendDestinationMultiCityToJson(
    airports,
    countries_data,
    select,
    current_location
) {
    $(select).empty();
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));
    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    $(select).append(options);
}

function appendDestinationScheduleJson(
    airports,
    countries_data,
    select,
    current_location
) {
    $(select).empty();
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));
    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    $(select).append(options);
}

function appendOffers(airports, countries_data, current_location) {
    let select = $("#offers");
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));

    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y, index) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                if (
                    y.iso_country === current_location[0].iso_code &&
                    index === 0
                ) {
                    opt.selected = true;
                }
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    select.append(options);
}

function appendAirportData(airports, countries_data, current_location) {
    let select = $("#selectFrom");
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));

    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y, index) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name}, ${y.municipality}, ${optgroup.label}`;
                // if (y.iso_country === current_location[0].iso_code && index === 0) {
                //     opt.selected = true;
                // }
                // optgroup.append(opt);
                if (
                    y.iso_country === current_location[0].iso_code &&
                    index === 0
                ) {
                    opt.selected = true;
                    // Trigger change event after setting selected
                    $(opt).prop("selected", true).trigger("change");
                }
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    select.append(options);
}

function appendAirportMultiCityData(
    airports,
    countries_data,
    current_location
) {
    let select = $("#selectFrom_multi_city" + multi_city_input);
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));

    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y, index) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name}, ${y.municipality}, ${optgroup.label}`;
                if (
                    y.iso_country === current_location[0].iso_code &&
                    index === 0
                ) {
                    opt.selected = true;
                }
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    select.append(options);
}

function appendAirportScheduleData(airports, countries_data, current_location) {
    let select = $("#timetable_departure");
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));

    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y, index) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name}, ${y.municipality}, ${optgroup.label}`;
                if (
                    y.iso_country === current_location[0].iso_code &&
                    index === 0
                ) {
                    opt.selected = true;
                }
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    select.append(options);
}

function appendAirportDataFlightStatus(
    airports,
    countries_data,
    current_location
) {
    let flight_status_from = $("#flightstatus_departure");
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));

    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y, index) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                if (
                    y.iso_country === current_location[0].iso_code &&
                    index === 0
                ) {
                    opt.selected = true;
                }
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    flight_status_from.append(options);
}

function appendFlightStatusJson(
    airports,
    countries_data,
    select_flight_to,
    current_location
) {
    $(select_flight_to).empty();
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));
    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            // Handle error
        }
    });
    $(select_flight_to).append(options);
}

function handleImageError(event) {
    event.target.src =
        "https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/destNotfound.sm.jpg";
}

let multi_city_input = 0;

$(document).on("change", ".from_multi_city", function () {
    // console.log($(this).length)
    // console.log(multi_city_input)
    loadMultyCityData(this);
});

function loadMultyCityData(element) {
    let current_multy_city_location = $(element).val();
    let new_count = $(".from_multi_city").length;
    appendDestinationDataOnChange(
        airport_data.filter((x) =>
            fullDeals
                .find((deal) => deal.city === current_multy_city_location)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries,
        `#selectTo_multi_city${new_count - 1}`,
        current_multy_city_location,
        element
    );
}

function appendDestinationDataOnChange(
    airports,
    countries_data,
    select,
    current_to,
    element
) {
    // console.log(element)
    // console.log($(select))
    //console.log($(".from_multi_city").length)
    $(select).empty();
    let result = airports.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));
    let options = [];
    Object.entries(result).forEach(([key, value]) => {
        try {
            let optgroup = document.createElement("optgroup");
            optgroup.label = countries_data.find((x) => x.code === key).name;
            value.forEach((y) => {
                let opt = document.createElement("option");
                opt.value = y.iata_code;
                opt.innerHTML = `${y.iata_code}, ${y.name} , ${y.municipality} , ${optgroup.label}`;
                optgroup.append(opt);
            });
            options.push(optgroup);
        } catch (e) {
            //console.log(e)
            // Handle error
        }
    });
    //console.log(options);
    $(select).append(options);
    //let options = [];
}

$(document).on("click", "#add_multi_city_flight", (e) => {
    e.preventDefault();
    var count = $(".multiCity").length;
    multi_city_input = count; // Update the multi_city_input value
    let flightInputs = `<ul class="multiCity">
                            <li>
                                <div class="cont_select_center">
                                    <div>
                                        <select class="form-control from_multi_city" name="" id="selectFrom_multi_city${multi_city_input}">
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cont_select_center">
                                    <div>
                                        <select name="" onchange="" onclick="return false;" id="selectTo_multi_city${multi_city_input}">
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="input-group">
                                    <input type="text" id="departDate${multi_city_input}" class="form-control multy_city_date" placeholder="Select Date">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>`;
    $("#flight_inputs").append(flightInputs);
    initializeDateRangePicker(`#flight_inputs .multy_city_date:last`, true);
    appendAirportMultiCityData(airport_data, countries, current_location);
    appendDestinationMultiCityToJson(
        airport_data,
        countries,
        `#selectTo_multi_city${multi_city_input}`,
        current_location
    );
    multi_city_input++; // Increment the variable after using its current value
});

function initializeDateRangePicker(selector, isSingleDate = false) {
    $(selector)
        .daterangepicker({
            opens: "right",
            drops: "down",
            autoApply: true,
            singleDatePicker: isSingleDate,
            locale: {
                format: "D MMM YYYY",
                separator: " - ",
                applyLabel: "Apply",
                cancelLabel: "Cancel",
                fromLabel: "From",
                toLabel: "To",
                customRangeLabel: "Custom",
                daysOfWeek: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
                monthNames: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December",
                ],
                firstDay: 0,
            },
            minDate: moment(),
        })
        .on("apply.daterangepicker", function (ev, picker) {
            if (!isSingleDate) {
                document.getElementById("ArrivalDate").value =
                    picker.endDate.format("D MMM YYYY");
            }
            document.getElementById("DepartDate").value =
                picker.startDate.format("D MMM YYYY");
        });
}
