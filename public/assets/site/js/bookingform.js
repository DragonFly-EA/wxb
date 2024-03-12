function getSelectedValue(value, element, appendTo, classes) {
    var roundTripOptions = document.querySelectorAll('.' + classes + ' .round-trip-hide span');
    roundTripOptions.forEach(function (option) {
        option.classList.remove('active');
    });
    var roundTripValueElement = document.getElementById(appendTo);
    roundTripValueElement.innerText = value;
    element.classList.add('active')
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
        handleData(airport_data, countries, fullDeals);
        appendAirportData(airport_data,countries,current_location)
    });
    // $("#selectFrom").on("change", function () {
    //     loadAirports();
    // });
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
function handleData(airports, countries_data, fares) {
   appendAirportData(airports, countries_data, current_location);
}
function appendAirportData(airports, countries_data, current_location) {
    let select = $("#selectFrom");
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
            options.push(listItem); // Push each list item to the options array
        } catch (e) {
            // Handle error
        }
    });

    select.empty();
    select.append(options);
}
