let countries = [];
let current_location = [];
let airport_data = [];
// let fullDeals = [];

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
        handleData();
    });
});

function handleData() {
    let current_city = "NBO";
    airport_data.sort((a, b) => {
        const municipalityA = (a.municipality || "").toUpperCase();
        const municipalityB = (b.municipality || "").toUpperCase();
        return municipalityA.localeCompare(municipalityB, undefined, { ignorePunctuation: true });
    });
    let selectedAirports = airport_data.filter(airport =>
        fullDeals.find(deal => deal.city === current_city)
            .routes.some(route => route.city === airport.iata_code)
    ).slice(0, 7); // Limit to 7 airports

    let destinationsHTML = selectedAirports.map(airport => {
        let priceFrom = getDealPriceFrom(current_city, airport.iata_code);
        return `<li data-aos="fade-left">
                    <figure>
                        <img src="https://wb.digilab.co.ke/img/${airport.iata_code}.jpg" alt="${airport.municipality}" onerror="handleImageError(event)">
                    </figure>
                    <div class="dont-miss-offer-details">
                        <div class="dont-miss-offer-details-hover">
                            <div class="dont-miss-offer-details-visible">
                                <b>
                                    <h4>${airport.municipality}</h4>
                                    <p>${current_city}-${airport.iata_code}</p>
                                </b>
                                <b>
                                    <p>Economy From</p>
                                    <h4>USD ${priceFrom}</h4>
                                </b>
                            </div>
                            <div class="dont-miss-offer-details-invisible">
                                <ul>
                                    <li><a href="destination/${airport.municipality}/${airport.iata_code}">Explore</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>`;
    }).join("");

    $("#other_offers").html(destinationsHTML);
}

function handleImageError(event) {
    event.target.src = "https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/destNotfound.sm.jpg";
}

function getDealPriceFrom(city, iata_code) {
    let fullDeal = fullDeals.find(deal => deal.city === city);
    if (fullDeal && fullDeal.routes) {
        let route = fullDeal.routes.find(route => route.city === iata_code);
        if (route) {
            return route.priceFrom;
        }
    }
    return "";
}


// let countries = [];
// let current_location = [];
// let airport_data = [];
// /*
// * Getting All Destination Based on Current Country/City
// * */
// $(document).ready(function () {
//     // Fetch current location
//     $.getJSON("https://wb.digilab.co.ke/api/geolocation", function (location) {
//         current_location = location;
//     });
//     // Fetch airports, countries data, and route fares
//     $.when(
//         $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/phpActions/retrieveAirportsInfo.php"),
//         $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/db/countries.json"),
//         $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/db/routeFares.json")
//     ).done(function (airports, countries_data, fares) {
//         handleData(airports[0], countries_data[0], fares[0]);
//     });
//     // $("#offers").on("change", function () {
//     //     loadOffers();
//     // });
// });
//
// function handleData(airports, countries_data, fares) {
//     fullDeals = fares.deals;
//     countries = countries_data;
//     airport_data = airports;
//     let current_city = "NBO";
//     appendOfferFrom(
//         airports.filter((x) =>
//             fullDeals
//                 .find((deal) => deal.city === current_city)
//                 .routes.map((route) => route.city)
//                 .includes(x.iata_code)
//         ),
//         countries_data,
//         "#other_offers",
//         current_city,fullDeals
//     );
// }
//
// /*
// * Loading Destinations
// * */
// function appendOfferFrom(airports, countries_data, select, current_location,fullDeals) {
//     $("#other_offers").empty();
//     const numberOfAirportsToSelect = 7;
//     const selectedAirports = [];
//
//     //
//     airports.sort((a, b) => {
//         const municipalityA = a.municipality.toUpperCase();
//         const municipalityB = b.municipality.toUpperCase();
//         if (municipalityA < municipalityB) {
//             return -1;
//         }
//         if (municipalityA > municipalityB) {
//             return 1;
//         }
//         return 0;
//     });
//     //
//     for (let i = 0; i < airports.length && selectedAirports.length < numberOfAirportsToSelect; i++) {
//         const selectedAirport = airports[i];
//         // Check if the selected airport is not already in the selectedAirports array
//         if (!selectedAirports.some((airport) => airport.iata_code === selectedAirport.iata_code)) {
//             selectedAirports.push(selectedAirport);
//         }
//     }
//     //RoutesFares
//     result = selectedAirports.reduce(function (r, a) {
//         r[a.iso_country] = r[a.iso_country] || [];
//         r[a.iso_country].push(a);
//         return r;
//     }, Object.create(null));
//     let destinations = '';
//     for (let i = 0; i < selectedAirports.length; i++) {
//         var priceFrom = getDealPriceFrom(current_location,selectedAirports[i].iata_code);
//         destinations += `<li data-aos="fade-left">
//                             <figure>
//                                 <img src="https://wb.digilab.co.ke/img/${selectedAirports[i].iata_code}.jpg" alt="${selectedAirports[i].municipality}" onerror = "handleImageError(event)">
//                             </figure>
//                             <div class="dont-miss-offer-details">
//                                 <div class="dont-miss-offer-details-hover">
//                                     <div class="dont-miss-offer-details-visible">
//                                         <b>
//                                             <h4>${selectedAirports[i].municipality}</h4>
//                                             <p>${current_location+"-"+selectedAirports[i].iata_code}</p>
//                                         </b>
//                                         <b>
//                                             <p>Economy From</p>
//                                             <h4>USD ${priceFrom}</h4>
//                                         </b>
//                                     </div>
//                                     <div class="dont-miss-offer-details-invisible">
//                                         <ul>
//                                             <li><a href="destination/${selectedAirports[i].municipality}/${selectedAirports[i].iata_code}">Explore</a></li>
//                                         </ul>
//                                     </div>
//                                 </div>
//                             </div>
//                            </li>`;
//
//         document.getElementById("other_offers").innerHTML = destinations;
//     }
// }
// function handleImageError(event) {
//     event.target.src =
//         "https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/destNotfound.sm.jpg";
// }
// function getDealPriceFrom(city, iata_code) {
//     var fullDeal = fullDeals.find((d) => d.city === city);
//
//     if (fullDeal && fullDeal.routes) {
//         var route = fullDeal.routes.find((r) => r.city === iata_code);
//         if (route) {
//             return route.priceFrom;
//         }
//     }
//     return "";
// }
