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
        return municipalityA.localeCompare(municipalityB, undefined, {ignorePunctuation: true});
    });
    let selectedAirports = airport_data.filter(airport =>
        fullDeals.find(deal => deal.city === current_city)
            .routes.some(route => route.city === airport.iata_code)
    ).slice(0, 7); // Limit to 7 airports

    let destinationsHTML = selectedAirports.map(airport => {
        let priceFrom = getDealPriceFrom(current_city, airport.iata_code);
        return `
            <li>
                <a href="">
                    <figure>
                        <img src="https://wb.digilab.co.ke/img/${airport.iata_code}.jpg" loading="lazy" alt="${airport.municipality}" onerror="handleImageError(event)">
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
                </a>
            </li>`;
    }).join("");
    destinationsHTML +=
        `<li >
            <a href="">
                <figure style="opacity:0"><img
                        src="https://wb.digilab.co.ke/img/${current_city}.jpg" loading="lazy" alt="${current_city}"></figure>
                <div class="find-more-wrap">
                    <h5>Business Class accommodations on extended flights</h5>
                    <b>Enhanced, digital, sustainable, revamped dining.</b>
                    <span>Find out more</span>
                </div>
            </a>
        </li>`

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
