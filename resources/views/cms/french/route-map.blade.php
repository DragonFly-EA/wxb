@extends('layouts.main')
@section('content')
    <style>
        #map {
            height: 700px;
        }

        .travel-info-wrapper {
            padding: 20px;
        }

        .flight-info {
            position: absolute;
            left: 0;
            top: 0;
            background: white;
            min-width: 300px;
            max-width: 300px;
            overflow: scroll;
            height: 600px;
        }

        .flight-info #image {
            width: 100%;
            height: auto;
        }

        .flight-info #image img {
            width: 100%;
            height: 100%;
        }

        .travel-info-wrapper {
            padding: 20px;
        }

        .routemap-wrapper h2 {
            font-weight: 700;
            font-size: 20px;
            Line-height: 27.6px;
            color: #4F4F4F;
        }

        .routemap-wrapper label {
            color: #00529B;
            font-weight: 600;
        }

        .close-info {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
            color: #fff;
            background-color: #00509E;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            transition: all 0.9s ease;
        }

        .close-info:hover {
            transition: all 0.9s ease;
            background-color: #fff;
            color: #00509E;
        }

        .routemap-wrapper .carousel-caption {
            top: unset;
            bottom: 0px;
            width: 100%;
        }

        .routemap-wrapper .carousel-caption p {
            margin-bottom: 0;
            font-size: 14px;
        }

        .routemap-wrapper .cabin-small {
            margin-bottom: -25px !important;
        }

        .carousel-caption button {
            border-color: transparent;
        }
    </style>
    <section>
        <div class="route-map-page">
            <div class="no-banner-style">
                <figure><img src="{{asset('images/imigongo-new.jpg')}}"></figure>
                <div class="container-rigid">
                    <div class="no-banner-style-title">
                        <div class="display-caption">
                            <div class="slider-vertical">
                                <h1 data-aos="fade-up">Route Map</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="google-routemap" data-aos="zoom-in">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <form>
                            <div class="form-group pb-3">
                                <label for="from">From</label>
                                <select name="" id="from" class="form-control"></select>
                            </div>
                            <div class="form-group pb-3">
                                <label for="from">To</label>
                                <select name="" id="to" class="form-control"></select>
                            </div>
                            <div>
                                <h2>Popular Destinations From <span id="popular_destination">Berlin</span></h2>
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div id="carousel"></div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                            data-target="#carouselExampleCaptions" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-target="#carouselExampleCaptions" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-9" style="position:relative;">
                        <div class="card">
                            <div class="card-body">
                                <div id="map"></div>
                                <div class="flight-info" style="display:none;">
                                    <div id="image"></div>
                                    <p class="close-info" onclick="closeModal()">X</p>
                                    <div calss="travel-info-wrapper">
                                        <h5 id="">Price USD:<span id="priceFrom"></span></h5>
                                        <h2>Travel Information</h2>
                                        <div id="travelRequirements"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function closeModal() {
            $(".flight-info").toggle();
            // $(".flight-info").hide();
        }
    </script>
    <!--end chatbot script -->
    <script>
        var links = document.querySelectorAll(".panel-title a");
        links.forEach(link => {
            const postId = link.dataset.id;
            link.addEventListener("mouseenter", function () {
                console.log(postId);
                $("#58145-" + postId).removeClass("collapse");
            });
            link.addEventListener("mouseout", function () {
                console.log(postId);
                $("#58145-" + postId).addClass("collapse");
            });
        });
    </script>
    <script>
        var airports;
        var fullDeals;
        var markers = [];
        var map;
        var currentRoutePath = null; // Declare a global variable to store the current route path
        $(document).ready(function () {
            // Retrieve data from external sources
            $.getJSON("{{url('api/airports')}}", function (results) {
                airports = results;
                $.getJSON("{{asset('Db/countries.json')}}", function (countriesData) {
                    countries = countriesData;
                    $.getJSON("{{asset('Db/routeFares.json')}}", function (routeFares) {
                        fullDeals = routeFares.deals;
                        // Group airports by country
                        var airportsByCountry = airports.reduce(function (result, airport) {
                            var country = countries.find((c) => c.code === airport.iso_country);
                            if (country) {
                                result[country.name] = result[country.name] || [];
                                result[country.name].push(airport);
                            }
                            return result;
                        }, {});

                        // Populate the #from dropdown with optgroup
                        var options = Object.entries(airportsByCountry).map(([country, airports]) => {
                            var airportsOptions = airports.map((airport) => `<option value="${airport.iata_code}">${airport.iata_code}, ${airport.name} , ${airport.municipality}</option>`).join("");
                            return `<optgroup label="${country}">${airportsOptions}</optgroup>`;
                        });
                        $("#from").html(options.join(""));
                        initMap([]);
                        $("#from").click(function () {
                            var selectedValue = $(this).val();
                            var selectedToValue = $("#to").val();
                            updateDestinations(selectedValue, airports, selectedToValue);
                        });
                        $("#to").on("click", function () {
                            var selectedValue = $("#from").val(); // Get the current value of #from
                            var selectedToValue = $(this).val();
                            updateDestinations(selectedValue, airports, selectedToValue);
                        });
                    });
                });
            });
        });

        // Function to initialize the map with all destinations
        function initMap(selectedAirports) {
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 2,
                center: {
                    lat: 0,
                    lng: 0
                },
                styles: [{
                    featureType: "all",
                    elementType: "geometry",
                    stylers: [{
                        hue: "#ff4400"
                    }, // Adjust the hue value to change the overall color
                        {
                            saturation: -100
                        }, // Adjust the saturation value to control the intensity of colors
                        {
                            lightness: -10
                        } // Adjust the lightness value to control the brightness of the map
                    ]
                }]
            });
            // Add markers for all destinations
            airports.forEach(function (airport) {
                geocodeAddress(airport.municipality, function (city) {
                    var markerColor = selectedAirports.includes(airport.iata_code) ? "#95ca43" : "#00509E";
                    var marker = new google.maps.Marker({
                        position: city,
                        map: map,
                        title: airport.municipality,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            scale: 4,
                            fillColor: markerColor,
                            fillOpacity: 1,
                            strokeColor: markerColor,
                            strokeWeight: 1,
                        },
                    });
                    markers.push(marker);
                });
            });
        }

        // Function to update #to dropdown and the map based on the selected #from value
        function updateDestinations(selectedValue, airports, selectedToAirportCode) {
            $(".flight-info").show();
            var selectedAirports = selectedValue ? fullDeals.find((x) => x.city === selectedValue).routes.map((x) => x.city) : [];
            var airportsTo = airports.filter((x) => selectedAirports.includes(x.iata_code));

            // Clear existing markers on the map
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
            markers = [];
            // Clear the previous route paths
            if (currentRoutePath) {
                currentRoutePath.setMap(null);
                currentRoutePath = null;
            }
            if (selectedValue) {
                var selectedAirport = airports.find((x) => x.iata_code === selectedValue);
                document.getElementById("popular_destination").innerText = selectedAirport.municipality;
                geocodeAddress(selectedAirport.municipality, function (city) {
                    var marker = new google.maps.Marker({
                        position: city,
                        map: map,
                        title: selectedAirport.municipality,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            scale: 6, // Adjust the scale value to change the size of the circle
                            fillColor: "blue", // Customize the fill color
                            fillOpacity: 1, // Customize the fill opacity
                            strokeColor: "blue", // Customize the stroke color
                            strokeWeight: 1, // Customize the stroke weight
                        },
                    });
                    markers.push(marker);
                });
            }
            var selectedToAirportCode = $("#to").val();
            if (selectedToAirportCode) {
                var selectedToAirport = airports.find((x) => x.iata_code == selectedToAirportCode);
                var selectedDeal = fullDeals.find((deal) => deal.city === selectedValue);
                var priceFrom;

                if (selectedDeal) {
                    var selectedRoute = selectedDeal.routes.find((route) => route.city === selectedToAirportCode);
                    priceFrom = selectedRoute ? selectedRoute.priceFrom : null;
                }
                document.getElementById("priceFrom").innerText = Math.floor(priceFrom);
                var image = `<img src="https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/${selectedToAirportCode}.jpg" ${onerror = "handleImageError(event)"}>`
                document.getElementById("image").innerHTML = image;
                geocodeAddress(selectedToAirport.municipality, function (city) {
                    var toMarker = new google.maps.Marker({
                        position: city,
                        map: map,
                        title: selectedToAirport.municipality,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            scale: 6,
                            fillColor: "green",
                            fillOpacity: 1,
                            strokeColor: "green",
                            strokeWeight: 1,
                        },
                    });
                    markers.push(toMarker);
                    // routeCoordinates = [selectedAirport.municipality, selectedToAirport.municipality].map((airport) => new google.maps.LatLng(airport.latitude, airport.longitude));
                    var fromLatLng = new google.maps.LatLng(
                        parseFloat(selectedAirport.coordinates.split(",")[1]), // latitude
                        parseFloat(selectedAirport.coordinates.split(",")[0]) // longitude
                    );
                    var toLatLng = new google.maps.LatLng(
                        parseFloat(selectedToAirport.coordinates.split(",")[1]), // latitude
                        parseFloat(selectedToAirport.coordinates.split(",")[0]) // longitude
                    );
                    var routeCoordinates = [fromLatLng, toLatLng];
                    // console.log(routeCoordinates);
                    var routePath = new google.maps.Polyline({
                        path: routeCoordinates,
                        geodesic: true,
                        strokeColor: "blue",
                        strokeOpacity: 1.0,
                        strokeWeight: 2,
                    });
                    routePath.setMap(map);
                    currentRoutePath = routePath;
                })
                $.ajax({
                    type: "GET",
                    url: "https://flyingwithdragonfly.com/wp-content/themes/rwandairajax/destination_query.php",
                    data: {
                        municipality: selectedToAirport.municipality
                    },
                    success: function (response) {
                        if (response.trim() == '') {
                            document.getElementById("travelRequirements").innerHTML = "No Travel Requirements";
                        } else {
                            document.getElementById("travelRequirements").innerHTML = response;
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log("AJAX error:", error);
                    }
                });
            }
            // Add markers for airports in #to
            // Add markers for airports in #to (destinations)
            airportsTo.forEach(function (airport) {
                geocodeAddress(airport.municipality, function (city) {
                    var markerColor = selectedAirports.includes(airport.iata_code) ? "#fbe10a" : "#00509E";
                    var marker = new google.maps.Marker({
                        position: city,
                        map: map,
                        title: airport.municipality,
                        icon: {
                            path: google.maps.SymbolPath.CIRCLE,
                            scale: 4,
                            fillColor: markerColor,
                            fillOpacity: 1,
                            strokeColor: markerColor,
                            strokeWeight: 1,
                        },
                    });
                    markers.push(marker);
                });
            });

            // Update #to dropdown
            var options = airportsTo.map(function (airport) {
                return `<option value="${airport.iata_code}">${airport.iata_code}, ${airport.name} , ${airport.municipality}</option>`;
            });
            $("#to").html(options.join(""));
            // function handleImageError(event) {
            //         event.target.src = 'https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/destNotfound.sm.jpg'; // Replace with the URL of your fallback image
            //     }
            // var carousels = airportsTo.map(function(airport, index) {
            //     var active = index == 0 ? "active" : "";
            //     var imageUrl = `https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/${airport.iata_code}.jpg`;
            //     return `<div class="carousel-item ${active}">
            //     <img src="${imageUrl}" onerror="handleImageError(event)" class="d-block w-100" alt="...">
            //     <div class="carousel-caption d-none d-md-block">
            //                             <h5 class="mr-2">${airport.municipality} </h5>
            //                             <div class="mr-2">
            //                                 <p class="cabin text-white">Economy ${selectedValue}-${airport.iata_code}</p>
            //                                 <p class="text-white cabin-small">From <span itemprop="priceCurrency" content="USD">$</span><span itemprop="price" content="357">${priceFrom}</span></p>
            //                             </div>
            //                             <a class="btn  btn-link  text-white  pull-right card_btn" href="https://flyingwithdragonfly.com/destination/?destination=${airport.municipality}&route=${selectedValue}-${airport.iata_code}&origin=${selectedAirport.municipality}" style="text-decoration:none;" rel="KGL-BKZ">Learn more</a>

            //                         </div>
            //     </div>`;
            // })
            // Function to handle image load errors
            function handleImageError(event) {
                event.target.src = 'https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/destNotfound.sm.jpg';
                console.log('Image load error:', event.target.src);
                console.log('Fallback image set:', event.target.src);
            }

            var carousels = airportsTo.map(function (airport, index) {
                var active = index == 0 ? "active" : "";
                var imageUrl = `https://flyingwithdragonfly.com/dist/phoenix/V1.0/img/${airport.iata_code}.jpg`;

                var carouselItem = document.createElement('div');
                carouselItem.className = `carousel-item ${active}`;

                var image = document.createElement('img');
                image.className = 'd-block w-100';
                image.alt = '...';
                image.src = imageUrl;

                // Add the error event listener to the image element
                image.addEventListener('error', handleImageError);

                var carouselCaption = document.createElement('div');
                carouselCaption.className = 'carousel-caption d-none d-md-block';
                carouselCaption.innerHTML = `
        <h5 class="mr-2">${airport.municipality}</h5>
        <div class="mr-2">
            <p class="cabin text-white">Economy ${selectedValue}-${airport.iata_code}</p>
            <p class="text-white cabin-small">From <span itemprop="priceCurrency" content="USD">$</span><span itemprop="price" content="357">${Math.floor(priceFrom)}</span></p>
        </div>
        <a class="btn btn-link text-white pull-right card_btn" href="https://flyingwithdragonfly.com/destination/?destination=${airport.municipality}&route=${selectedValue}-${airport.iata_code}&origin=${selectedAirport.municipality}" style="text-decoration:none;" rel="KGL-BKZ">Learn more</a>
    `;

                carouselItem.appendChild(image);
                carouselItem.appendChild(carouselCaption);

                return carouselItem.outerHTML;
            });

            $("#carousel").html(carousels.join(""));
        }

        function geocodeAddress(address, callback) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                address: address
            }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    callback(location);
                } else {
                    //  console.error("Geocode was not successful for the following reason: " + status);
                }
            });
        }
    </script>

    <!-- Call the initMap function after the Google Maps API has loaded -->
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-qYg7ThZps3NmhSaw1jL1s8qcuknbkek&libraries=places&callback=initMap"></script>

@endsection































