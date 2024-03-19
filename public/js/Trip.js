var airports = [];
var fullDeals = [];

var destinations = [{
    city: "DAR",
    destination: "KGL"
},
    {
        city: "LGW",
        destination: "LOS"
    },
    {
        city: "KGL",
        destination: "NBO"
    },
    {
        city: "LGW",
        destination: "JNB"
    }
];

var destinations2 = [{
    city: "KGL",
    destination: "BOM"
},
    {
        city: "KGL",
        destination: "LGW"
    },
    {
        city: "LOS",
        destination: "LGW"
    },
    {
        city: "DXB",
        destination: "LOS"
    }
];

function getDestinations(destinations, outputElementId) {
    $.getJSON("https://flyingwithdragonfly.com/dist/phoenix/V1.0/phpActions/retrieveAirportsInfo.php", function (results) {
        $.getJSON("https://typo.flyingwithdragonfly.com/countries.json", function (countriesData) {
            countries = countriesData;
            $.getJSON("https://typo.flyingwithdragonfly.com/routeFares.json", function (routeFares) {
                fullDeals = routeFares.deals;
                airports = results;
                get_json(airports, countries, fullDeals, destinations, outputElementId);
            });
        });
    });
}

function get_json(data, countries, fullDeals, destinations, outputElementId) {
    result = data.reduce(function (r, a) {
        r[a.iso_country] = r[a.iso_country] || [];
        r[a.iso_country].push(a);
        return r;
    }, Object.create(null));

    var output = document.getElementById(outputElementId);
    output.innerHTML = ""; // Clear previous content before appending new data
    var dealsFound = false;

    Object.entries(result).forEach(([key, value]) => {
        try {
            var label = countries.find((x) => x.code === key).name;
            value.map((y) => {
                var deals = data.filter((a) =>
                    fullDeals
                        .find((a) => a.city === y.iata_code)
                        .routes.map((a) => a.city)
                        .includes(a.iata_code)
                );

                // Filter deals based on destinations
                var filteredDeals = deals.filter((deal) =>
                    destinations.some(
                        (dest) =>
                            dest.city === y.iata_code &&
                            dest.destination === deal.iata_code
                    )
                );

                var outputCountryCityAirport = `${y.municipality}`;
                if (filteredDeals.length > 0) {
                    output.innerHTML += filteredDeals
                        .map((deal, index) => {
                            var priceFrom = getDealPriceFrom(y.iata_code, deal.iata_code);
                            return `<li><a href="https://flights.rwandair.com/en/flights-from-${y.municipality.replace(/\s+/g, "-")}-to-${deal.municipality}" target="_blank" class="mb-3"><h5 class="m-0">${outputCountryCityAirport} to<br/> ${deal.municipality}</h5><div><p class="p-0 m-0 fs-6 float-end" style="font-size:10px;">View&nbsp;<i class="fa fa-arrow-right"></i></p></div></a></li>`;
                        })
                        .join("");
                    dealsFound = true;
                }
            });
        } catch (e) {
            //console.log(e);
        }
    });

    if (!dealsFound) {
        get_json(data, countries, fullDeals, destinations, outputElementId);
    }
}

getDestinations(destinations, "output1");
getDestinations(destinations2, "output2");

function getDealPriceFrom(city, iata_code) {
    var fullDeal = fullDeals.find((d) => d.city === city);

    if (fullDeal && fullDeal.routes) {
        var route = fullDeal.routes.find((r) => r.city === iata_code);
        if (route) {
            return route.priceFrom;
        }
    }
    return "";
}
