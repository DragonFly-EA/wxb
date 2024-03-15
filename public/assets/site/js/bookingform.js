let ticket_prices = '';

function getSelectedValue(value, element, appendTo, classes) {
    var roundTripOptions = document.querySelectorAll('.' + classes + ' .round-trip-hide span');
    roundTripOptions.forEach(function (option) {
        option.classList.remove('active');
    });
    var roundTripValueElement = document.getElementById(appendTo);
    roundTripValueElement.innerText = value;
    element.classList.add('active')
    getTrip(value)

}

function getTrip(value) {
    console.log(value);
    if (value === "Multi City") {
        $("#other_trips").hide();
        $("#multi_city").show();
    } else {
        $("#other_trips").show();
        $("#multi_city").hide();
    }
}

$(document).ready(function () {
    // Fetch current location and airport data, countries data, and route fares
    $.when(
        $.getJSON("https://wb.digilab.co.ke/api/geolocation"),
        $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/phpActions/retrieveAirportsInfo.php"),
        $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/db/countries.json"),
        $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/db/routeFares.json")
    ).done(function (location, airports, countries_data, fares) {
        current_location = location;
        airport_data = airports[0];
        countries = countries_data[0];
        fullDeals = fares[0].deals;
        appendAirportData(airport_data, countries, current_location)
        appendAirportDataFlightStatus(airport_data, countries, current_location)
        appendAirportDataSchedule(airport_data, countries, current_location)
    });
});

function loadAirports() {
    airport = $("#selectFromDestinations").val();
    appendDestinationJson(
        airport_data.filter((x) =>
            fullDeals
                .find((deal) => deal.city === airport)
                .routes.map((route) => route.city)
                .includes(x.iata_code)
        ),
        countries,
        "#selectToDestination",
        current_location
    );
}

function appendAirportData(airports, countries_data, current_location) {
    let select = $("#selectFromDestinations");
    let options = [];

    airports.forEach(airport => {
        try {
            let listItem = document.createElement("li"); // Create new list item for each airport
            let div = document.createElement("div");
            let div1 = document.createElement('div');
            div1.className = "float-group-airport";
            div.className = "float-group-country";

            let heading = document.createElement("h5");
            heading.textContent = countries_data.find((x) => x.code === airport.iso_country).name;
            let paragraph = document.createElement("p");
            paragraph.textContent = airport.municipality;
            div.appendChild(heading);
            div.appendChild(paragraph);
            let heading1 = document.createElement("h5");
            heading1.textContent = airport.iata_code;
            let p1 = document.createElement("p");
            p1.textContent = airport.name;
            div1.appendChild(heading1)
            div1.appendChild(p1)

            listItem.appendChild(div);
            listItem.appendChild(div1);
            listItem.addEventListener("click", function () {
                document.querySelector(".float-group-first input").value = airport.name + ", " + airport.iata_code + ", " + airport.municipality;
                appendToData(airports.filter((x) =>
                    fullDeals
                        .find((deal) => deal.city === airport.iata_code)
                        .routes.map((route) => route.city)
                        .includes(x.iata_code)
                ), countries_data, airport.iata_code)
                $(".hide-float-group-first").slideUp();
                let secondInput = $(".float-group-second input");
                if (secondInput.val() !== "") {
                    secondInput.val("");
                }
            });
            options.push(listItem);
        } catch (e) {
            // Handle error
        }
    });
    select.empty();
    select.append(options);
}

function appendAirportDataFlightStatus(airports, countries_data, current_location) {
    let select = $("#selectFromDestinationsStatus");
    let options = [];

    airports.forEach(airport => {
        try {
            let listItem = document.createElement("li"); // Create new list item for each airport
            let div = document.createElement("div");
            let div1 = document.createElement('div');
            div1.className = "float-group-airport";
            div.className = "float-group-country";

            let heading = document.createElement("h5");
            heading.textContent = countries_data.find((x) => x.code === airport.iso_country).name;
            let paragraph = document.createElement("p");
            paragraph.textContent = airport.municipality;
            div.appendChild(heading);
            div.appendChild(paragraph);
            let heading1 = document.createElement("h5");
            heading1.textContent = airport.iata_code;
            let p1 = document.createElement("p");
            p1.textContent = airport.name;
            div1.appendChild(heading1)
            div1.appendChild(p1)

            listItem.appendChild(div);
            listItem.appendChild(div1);
            listItem.addEventListener("click", function () {
                document.querySelector(".flight-status-first input").value = airport.name + ", " + airport.iata_code + ", " + airport.municipality;
                appendToDataFlightStatus(airports.filter((x) =>
                    fullDeals
                        .find((deal) => deal.city === airport.iata_code)
                        .routes.map((route) => route.city)
                        .includes(x.iata_code)
                ), countries_data)
                $(".hide-float-group-first").slideUp();
                let secondInput = $(".flight-status-second input");
                if (secondInput.val() !== "") {
                    secondInput.val("");
                }
            });
            options.push(listItem);
        } catch (e) {
            // Handle error
        }
    });
    select.empty();
    select.append(options);
}

function appendAirportDataSchedule(airports, countries_data, current_location) {
    let select = $("#flightFromSchedule");
    let options = [];

    airports.forEach(airport => {
        try {
            let listItem = document.createElement("li"); // Create new list item for each airport
            let div = document.createElement("div");
            let div1 = document.createElement('div');
            div1.className = "float-group-airport";
            div.className = "float-group-country";

            let heading = document.createElement("h5");
            heading.textContent = countries_data.find((x) => x.code === airport.iso_country).name;
            let paragraph = document.createElement("p");
            paragraph.textContent = airport.municipality;
            div.appendChild(heading);
            div.appendChild(paragraph);
            let heading1 = document.createElement("h5");
            heading1.textContent = airport.iata_code;
            let p1 = document.createElement("p");
            p1.textContent = airport.name;
            div1.appendChild(heading1)
            div1.appendChild(p1)

            listItem.appendChild(div);
            listItem.appendChild(div1);
            listItem.addEventListener("click", function () {
                document.querySelector(".flight-schedule-first input").value = airport.name + ", " + airport.iata_code + ", " + airport.municipality;
                appendToDataSchedule(airports.filter((x) =>
                    fullDeals
                        .find((deal) => deal.city === airport.iata_code)
                        .routes.map((route) => route.city)
                        .includes(x.iata_code)
                ), countries_data)
                $(".hide-float-group-first").slideUp();
                let secondInput = $(".flight-schedule-second input");
                if (secondInput.val() !== "") {
                    secondInput.val("");
                }
            });
            options.push(listItem);
        } catch (e) {
            // Handle error
        }
    });
    select.empty();
    select.append(options);
}

function searchFromDestinations() {
    let inputValue = $('.float-group-first input').val().trim().toLowerCase();
    let filteredAirports = airports.filter(airport => {
        if (airport.municipality && typeof airport.municipality === 'string') {
            return airport.municipality.toLowerCase().includes(inputValue) || airport.iata_code.toLowerCase().includes(inputValue);
        }
        return false;
    });
    appendAirportData(filteredAirports, countries, current_location);
}

function appendToData(airports, countries_data, iata_code) {
    let select = $("#selectToDestination");
    let options = [];
    airports.forEach(airport => {
        try {
            let listItem = document.createElement("li"); // Create new list item for each airport
            let div = document.createElement("div");
            let div1 = document.createElement('div');
            div1.className = "float-group-airport";
            div.className = "float-group-country";

            let heading = document.createElement("h5");
            heading.textContent = countries_data.find((x) => x.code === airport.iso_country).name;
            let paragraph = document.createElement("p");
            paragraph.textContent = airport.municipality;
            div.appendChild(heading);
            div.appendChild(paragraph);
            let heading1 = document.createElement("h5");
            heading1.textContent = airport.iata_code;
            let p1 = document.createElement("p");
            p1.textContent = airport.name;
            div1.appendChild(heading1)
            div1.appendChild(p1)

            listItem.appendChild(div);
            listItem.appendChild(div1);
            listItem.addEventListener("click", function () {
                document.querySelector(".float-group-second input").value = airport.name + ", " + airport.iata_code + ", " + airport.municipality;
                $(".hide-float-group-second").slideUp();
                ticket_prices = getTicketPrice(iata_code, airport.iata_code);
                console.log(ticket_prices)
            });
            options.push(listItem);
        } catch (e) {
        }
    })
    select.empty();
    select.append(options);
}

function appendToDataFlightStatus(airports, countries_data) {
    let select = $("#selectToDestinationStatus");
    let options = [];
    airports.forEach(airport => {
        try {
            let listItem = document.createElement("li"); // Create new list item for each airport
            let div = document.createElement("div");
            let div1 = document.createElement('div');
            div1.className = "float-group-airport";
            div.className = "float-group-country";

            let heading = document.createElement("h5");
            heading.textContent = countries_data.find((x) => x.code === airport.iso_country).name;
            let paragraph = document.createElement("p");
            paragraph.textContent = airport.municipality;
            div.appendChild(heading);
            div.appendChild(paragraph);
            let heading1 = document.createElement("h5");
            heading1.textContent = airport.iata_code;
            let p1 = document.createElement("p");
            p1.textContent = airport.name;
            div1.appendChild(heading1)
            div1.appendChild(p1)

            listItem.appendChild(div);
            listItem.appendChild(div1);
            listItem.addEventListener("click", function () {
                document.querySelector(".flight-status-second input").value = airport.name + ", " + airport.iata_code + ", " + airport.municipality;
                $(".hide-float-group-second").slideUp();
            });
            options.push(listItem);
        } catch (e) {
        }
    })
    select.empty();
    select.append(options);
}

function appendToDataSchedule(airports, countries_data) {
    let select = $("#flightToSchedule");
    let options = [];
    airports.forEach(airport => {
        try {
            let listItem = document.createElement("li"); // Create new list item for each airport
            let div = document.createElement("div");
            let div1 = document.createElement('div');
            div1.className = "float-group-airport";
            div.className = "float-group-country";

            let heading = document.createElement("h5");
            heading.textContent = countries_data.find((x) => x.code === airport.iso_country).name;
            let paragraph = document.createElement("p");
            paragraph.textContent = airport.municipality;
            div.appendChild(heading);
            div.appendChild(paragraph);
            let heading1 = document.createElement("h5");
            heading1.textContent = airport.iata_code;
            let p1 = document.createElement("p");
            p1.textContent = airport.name;
            div1.appendChild(heading1)
            div1.appendChild(p1)

            listItem.appendChild(div);
            listItem.appendChild(div1);
            listItem.addEventListener("click", function () {
                document.querySelector(".flight-schedule-second input").value = airport.name + ", " + airport.iata_code + ", " + airport.municipality;
                $(".hide-float-group-second").slideUp();
            });
            options.push(listItem);
        } catch (e) {
        }
    })
    select.empty();
    select.append(options);

}

function appendDates() {
    event.preventDefault();
    let firstDate = new Date($('.first-date input').val()).toLocaleDateString('en-GB', {
        day: '2-digit',
        month: 'short',
        year: 'numeric'
    });
    let secondDate = new Date($('.second-date input').val()).toLocaleDateString('en-GB', {
        day: '2-digit',
        month: 'short',
        year: 'numeric'
    });

    document.getElementById("DepartDate").value = firstDate;
    document.getElementById("ArrivalDate").value = secondDate;
    $(".modalDialog1").modal('hide');
}

function getTicketPrice(city, iata_code) {
    let fullDeal = fullDeals.find(deal => deal.city === city);
    if (fullDeal && fullDeal.routes) {
        let route = fullDeal.routes.find(route => route.city === iata_code);
        if (route) {
            return route.priceFrom;
        }
    }
    return "";
}

// $(document).ready(function () {
//     $('#datepicker').datepicker({
//         format: 'yyyy-mm-dd',
//         autoclose: true,
//         startDate: '1d',
//         beforeShowDay: function (date) {
//             var price = Math.round(ticket_prices);
//             var currentDate = date.toISOString().slice(0, 10);
//             var cssClass = 'has-price';
//             var content = '<span class="date-price"><b></b><div class="date">' + date.getDate() + '</div> <div class="price">$' + price + '</div></span>';
//             return {
//                 classes: cssClass,
//                 tooltip: '',
//                 content: content
//             };
//         }
//     });
//     // Attach event listener to the 'changeDate' event
//     $('#datepicker').on('changeDate', function(e) {
//         var selectedDate = e.format('yyyy-mm-dd');
//         $('.first-date input').val(selectedDate);
//     });
//
//     $('#datepicker1').datepicker({
//         format: 'yyyy-mm-dd',
//         autoclose: true,
//         startDate: new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate() + 1), // Start from tomorrow
//         endDate: '+1m', // End after one week
//
//         beforeShowDay: function (date) {
//             var price = Math.round(ticket_prices);
//             var currentDate = date.toISOString().slice(0, 10);
//             var cssClass = 'has-price';
//             var content = '<span class="date-price"><b></b><div class="date">' + date.getDate() + '</div> <div class="price">$' + price + '</div></span>';
//             return {
//                 classes: cssClass,
//                 tooltip: '',
//                 content: content
//             };
//         }
//     });
//     $('#datepicker1').on('changeDate', function(e) {
//         var selectedDate = e.format('yyyy-mm-dd');
//         $('.second-date input').val(selectedDate);
//     });
// });

// $(document).ready(function () {
//     $('#datepicker').datepicker({
//         format: 'yyyy-mm-dd',
//         autoclose: true,
//         // startDate: '1d',
//         opens: 'left', // Adjust this according to your preference
//         startDate: moment(), // Set initial start date to today
//         endDate: moment(), // Set initial end date to today
//        // autoclose: false,
//        // autoApply: false, // Keep the picker open after applying
//         locale: {
//             format: 'YYYY-MM-DD', // Adjust date format as needed
//         },
//         beforeShowDay: function (date) {
//             var price = Math.round(ticket_prices);
//             var currentDate = date.toISOString().slice(0, 10);
//             var cssClass = 'has-price';
//             var content = '<span class="date-price"><b></b><div class="date">' + date.getDate() + '</div> <div class="price">$' + price + '</div></span>';
//             return {
//                 classes: cssClass,
//                 tooltip: '',
//                 content: content
//             };
//         }
//     });
//     // Attach event listener to the 'changeDate' event
//     $('#datepicker').on('changeDate', function (e) {
//         var selectedDate = e.format('yyyy-mm-dd');
//         $('.first-date input').val(selectedDate);
//     });
// })
// JavaScript
// JavaScript
// JavaScript
// JavaScript
// $(document).ready(function () {
//     // Initialize date range picker
//     var datepicker = $('#datepicker').daterangepicker({
//         parentEl: '.first-date', // Set the parent element
//         format: 'yyyy-mm-dd',
//         autoclose: true,
//         opens: 'left', // Adjust this according to your preference
//         startDate: moment(), // Set initial start date to today
//         endDate: moment(), // Set initial end date to today
//         locale: {
//             format: 'YYYY-MM-DD', // Adjust date format as needed
//         },
//         beforeShowDay: function (date) {
//             var price = Math.round(ticket_prices);
//             var currentDate = date.toISOString().slice(0, 10);
//             var cssClass = 'has-price';
//             var content = '<span class="date-price"><b></b><div class="date">' + date.getDate() + '</div> <div class="price">$' + price + '</div></span>';
//             return {
//                 classes: cssClass,
//                 tooltip: '',
//                 content: content
//             };
//         }
//     }).data('daterangepicker');
//
//     // Keep the calendar open after applying
//     datepicker.hide = function () { };
//
//     // Attach event listener to the 'change' event
//     $('#datepicker').on('change', function (e) {
//         var selectedDate = e.target.value;
//         $('.first-date input').val(selectedDate);
//     });
// });
$(document).ready(function () {
    $('#datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        startDate: '1d',
        beforeShowDay: function (date) {
            var price = Math.round(ticket_prices);
            var currentDate = date.toISOString().slice(0, 10);
            var cssClass = 'has-price';
            var content = '<span class="date-price"><b></b><div class="date">' + date.getDate() + '</div> <div class="price">$' + price + '</div></span>';
            return {
                classes: cssClass,
                tooltip: '',
                content: content
            };
        }
    });
    // Attach event listener to the 'changeDate' event
    $('#datepicker').on('changeDate', function (e) {
        var selectedDate = e.format('yyyy-mm-dd');
        $('.first-date input').val(selectedDate);
    });
    $('#datepicker1').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        startDate: new Date(new Date().getFullYear(), new Date().getMonth() + 1, 1), // Start from the beginning of next month
        beforeShowDay: function (date) {
            var price = Math.round(ticket_prices);
            var currentDate = date.toISOString().slice(0, 10);
            var cssClass = 'has-price';
            var content = '<span class="date-price"><b></b><div class="date">' + date.getDate() + '</div> <div class="price">$' + price + '</div></span>';
            return {
                classes: cssClass,
                tooltip: '',
                content: content
            };
        }
    });
    $('#datepicker1').on('changeDate', function (e) {
        var selectedDate = e.format('yyyy-mm-dd');
        $('.second-date input').val(selectedDate);
    });
    $("#one_way_checkbox").on('click', function (e) {
        if (e.target.checked) {
            $("#ArrivalDateWrapper").hide();
            if ($("#ArrivalDate").parent().next(".validation").length) {
                $("#ArrivalDate").parent().next(".validation").hide();
            } else if ($("#DepartureDateWrapper").hasClass("col-md-6")) {
                $("#DepartureDateWrapper").addClass("col-md-12");
            }
            $(".float-group-dr").hide();
            $(".second-date").hide();
            $(".first-date").addClass('first_date_input');
            $("#calendar-icon").hide();
            $("#DepartureDateWrapper").css("border-right", "1px solid #666");
        } else {
            $("#ArrivalDateWrapper").show();
            if ($("#ArrivalDate").parent().next(".validation").length) {
                $("#ArrivalDate").parent().next(".validation").show();
            } else if ($("#DepartureDateWrapper").hasClass("col-md-6")) {
                $("#DepartureDateWrapper").removeClass("col-md-12");
            }
            $(".float-group-dr").show();
            $(".second-date").show();
            $(".first-date").removeClass('first_date_input');
            $("#calendar-icon").show();
            $("#DepartureDateWrapper").css("border-right", "");
        }
    })
    $()
});

