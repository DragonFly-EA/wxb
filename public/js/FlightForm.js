var tripflow = "returnTrip";
numberofadultv = 1;
numberofyouthv = 0;
numberofchildv = 0;
numberofinfantv = 0;

/*
* Submit Form
* */
$(document).ready(function () {
    let tripsData = document.getElementsByClassName('inputs');
    $(".inputs").on('click', function () {
        let trip_flow = [];

        for (let i = 0; i < tripsData.length; i++) {
            if (tripsData[i].checked) {
                trip_flow.push(tripsData[i].value);
            }
        }
        //console.log(trip_flow[0].charAt(0).toUpperCase())
        if (trip_flow[0].charAt(0).toUpperCase() == "M") {
            $("#other_trips").hide()
            $("#multi_city").show()
        } else {
            $("#other_trips").show()
            $("#multi_city").hide()
        }
        if (trip_flow[0].charAt(0).toUpperCase() == "O") {
            $("#date-range").hide()
            $("#one_date").show()
        }
        if (trip_flow[0].charAt(0).toUpperCase() == "R") {
            $("#date-range").show()
            $("#one_date").hide()
        }
    })
});
$(document).on("click", "#retreivepnr_SearchFlex", (e) => {
    e.preventDefault();
    $("#errorsList").html("");
    if (!$("#errorsContent").hasClass("d-none")) {
        $("#errorsContent").addClass("d-none");
    }
    //console.log("delete clicked length=", $(".mltcity").length);
    selectedCurrency = "USD"
    selectedLanguage = "GB"
    selectedCountry = "KE"
    // selectedCountry = $("#selectedCountry").val();
    // selectedLanguage = $("#selectedLanguage").val();
    // selectedCurrency = $("#selectedCurrency").val();

    retreiveBooking(e, selectedLanguage, tripflow);
});
$(document).on("click", "#flightstatus_SearchFlex", (e) => {
    e.preventDefault();
    $("#errorsList").html("");
    if (!$("#errorsContent").hasClass("d-none")) {
        $("#errorsContent").addClass("d-none");
    }
    //console.log("delete clicked length=", $(".mltcity").length);
    selectedCurrency = "USD"
    selectedLanguage = "GB"
    selectedCountry = "KE"
    // selectedCountry = $("#selectedCountry").val();
    // selectedLanguage = $("#selectedLanguage").val();
    // selectedCurrency = $("#selectedCurrency").val();

    findflightstatus(e, selectedLanguage, tripflow);
});
document.getElementById('findFlights').addEventListener('click', (event) => {
    event.preventDefault();
    selectedCurrency = "USD"
    selectedLanguage = "GB"
    selectedCountry = "KE"
    tripflowData = document.getElementsByClassName('inputs');
    // Array to store values
    let tripflow = [];

// Loop through the collection of elements
    for (let i = 0; i < tripflowData.length; i++) {
        if (tripflowData[i].checked) {
            tripflow.push(tripflowData[i].value);
        }
    }
    SearchBook(
        event,
        selectedCurrency,
        selectedLanguage,
        selectedCountry,
        tripflow[0]
    );
});
document.getElementById('findFlightsMultiCity').addEventListener('click',(event)=>{
    event.preventDefault();
    selectedCurrency = "USD"
    selectedLanguage = "GB"
    selectedCountry = "KE"
    tripflowData = document.getElementsByClassName('inputs');
    // Array to store values
    let tripflow = [];

// Loop through the collection of elements
    for (let i = 0; i < tripflowData.length; i++) {
        if (tripflowData[i].checked) {
            tripflow.push(tripflowData[i].value);
        }
    }
    SearchBook(
        event,
        selectedCurrency,
        selectedLanguage,
        selectedCountry,
        tripflow[0]
    );
})

function multiCity(tripFlow) {
    //console.log(tripFlow.charAt(0).toUpperCase())
}

function SearchBook(event, selectedCurrency, selectedLanguage, selectedCountry, selectedTripflow) {
    var error = "";

    var tripflow = selectedTripflow.charAt(0).toUpperCase();
    var eventLabel = tripflow;
    var forceusdcurrency = selectedCurrency === "USD" ? true : false;
    var focusSet = false;
    var languageval = selectedLanguage;
    var form = document.createElement("form");
    $(form).attr("name", selectedTripflow);
    $(form).attr("action", "https://www.rwandair.com/bookingflow");
    $(form).attr("method", "GET");
    $(form).css("display", "none");
    $(form).append(
        `<input id="EMBEDDED_TRANSACTION" name="EMBEDDED_TRANSACTION" type="text" value="${
            tripflow === "M" ? "AirComplexAvailability" : "FlexPricerAvailability"
        }"  />`
    );
    $(form).append(
        `<input id="LANGUAGE" name="LANGUAGE" type="text" value="${selectedLanguage}"  />`
    );

    $(form).append(
        `<input id="TRIP_TYPE" name="TRIP_TYPE" value=${tripflow}  />`
    );
    $(form).append(
        `<input id="COUNTRY_SITE" name="COUNTRY_SITE" value=${selectedCountry}  />`
    );

    if ($("#promoCode").val().trim().length > 0) {
        $(form).append(
            `<input id="LIST_CORPORATE_NUMBER_1_1" name="LIST_CORPORATE_NUMBER_1_1"  value=${$("#promoCode").val()}  />`
        );

        $("#Searchmulti").append(
            '<input id="LIST_CORPORATE_NUMBER_1_1" name="TYPE_OF_CORPORATE_FARE_1" type="hidden" value="2" />'
        );
        $("#Searchmulti").append(
            '<input id="IS_PRICE_BY_INPUT_1" name="IS_PRICE_BY_INPUT_1" type="hidden" value="TRUE" />'
        );
    }
    let numberofadultv = 1;
    let numberofyouthv = 0;
    let numberofchildv = 0;
    let numberofinfantv = 0;
    var numberofadult = numberofadultv;
    var numberofyouth = numberofyouthv;
    var numberofchild = numberofchildv;
    var numberofinfant = numberofinfantv;
    var numberofchildtmp = numberofchild;
    var numberofyouthtmp = numberofyouth;
    var numberofadulttmp = numberofadult;
    var numberofinfanttmp = numberofinfant;



    if (tripflow === "M") {
        for (i = 1; i <= 6; i++) {
            if (i === 1) {
                eventLabel = $(`#selectFrom_multi_city${i}`).val() + "-" + $(`#selectTo_multi_city${i}`).val();
            }
            $(form).append(
                `<input id="B_LOCATION_${i}" name="B_LOCATION_${i}" type="text" value="${
                    $(`#selectFrom_multi_city${i}`).length > 0 && $(`#selectFrom_multi_city${i}`) !== null
                        ? $(`#selectFrom_multi_city${i}`).val()
                        : ""
                }"  />`
            );
            $(form).append(
                `<input id="E_LOCATION_${i}" name="E_LOCATION_${i}" type="text" value="${
                    $(`#selectTo_multi_city${i}`).length > 0 && $(`#selectTo_multi_city${i}`).val() !== null
                        ? $(`#selectTo_multi_city${i}`).val()
                        : ""
                }"  />`
            );
        }
    }
    //
    if (tripflow === "R") {
        $("#return_trip_date").show()
        $("#one_way_date").hide()
        for (i = 1; i <= 2; i++) {
            let origin = i === 1 ? "#selectFrom" : "#selectTo";
            let destination = i === 1 ? "#selectTo" : "#selectFrom";
            if (i === 1) {
                eventLabel = $(origin).val() + "-" + $(destination).val();
            }
            $(form).append(
                `<input id="B_LOCATION_${i}" name="B_LOCATION_${i}" type="text" value="${
                    $(origin).length > 0 && $(`#selectFrom${i}`) !== null
                        ? $(origin).val()
                        : ""
                }"  />`
            );
            $(form).append(
                `<input id="E_LOCATION_${i}" name="E_LOCATION_${i}" type="text" value="${
                    $(destination).length > 0 && $(destination).val() !== null
                        ? $(destination).val()
                        : ""
                }"  />`
            );
        }
    }
    if (tripflow === "O") {
        $("#return_trip_date").hide()
        $("#one_way_date").show()
        for (i = 1; i <= 1; i++) {
            let origin = i === 1 ? "#selectFrom" : "#selectTo";
            let destination = i === 1 ? "#selectTo" : "#selectFrom";
            if (i === 1) {
                eventLabel = $(origin).val() + "-" + $(destination).val();
            }
            $(form).append(
                `<input id="B_LOCATION_${i}" name="B_LOCATION_${i}" type="text" value="${
                    $(origin).length > 0 && $(`#selectFrom${i}`) !== null
                        ? $(origin).val()
                        : ""
                }"  />`
            );
            $(form).append(
                `<input id="E_LOCATION_${i}" name="E_LOCATION_${i}" type="text" value="${
                    $(destination).length > 0 && $(destination).val() !== null
                        ? $(destination).val()
                        : ""
                }"  />`
            );
        }
    }
    if (tripflow === "O") {
        $("#return_trip_date").hide()
        $("#one_way_date").show()
        for (i = 1; i <= 1; i++) {
            let date = "#DepartDate";
            let dateStr = $(date).val();
            let formattedDate = moment(dateStr, "DD MMM YYYY").format("YYYYMMDD") + "0000";
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${formattedDate}" />`
            );
        }
    }
    if (tripflow === "M") {
        for (i = 0; i < 6; i++) {
            let dateStr = $(`#departDate${i}`).val();
            let formatted =moment(dateStr, "DD MMM YYYY").format("YYYYMMDD") + "0000";
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
                    $(`#departDate${i}`).length > 0
                        ?formatted !== null? formatted:""
                        :""
                }"  />`
            );
        }
    }

// Append the input element with the formatted date value to the form
    if (tripflow === "R") {
        for (let i = 1; i <= 2; i++) {
            let date = i === 1 ? "#DepartDate" : "#ArrivalDate";
            // let selectedDate = $(date).datepicker("getDate");
            let dateStr = $(date).val();
            let formattedDate = moment(dateStr, "DD MMM YYYY").format("YYYYMMDD") + "0000";
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${formattedDate}" />`
            );
        }
    }
    var countpaxtype = 9;
    while (countpaxtype > 0) {
        $(form).append(
            `<input id="TRAVELLER_TYPE_${countpaxtype}" name="TRAVELLER_TYPE_${countpaxtype}" type="text" value=""  />`
        );

        countpaxtype--;
    }
    var countinf = 9;
    while (numberofadulttmp >= 1) {
        $(form).find(`#TRAVELLER_TYPE_${numberofadulttmp}`).val("ADT");
        numberofadulttmp = numberofadulttmp - 1;
    }
    numberofyouthtmp = numberofadult;
    while (numberofyouth >= 1) {
        numberofyouthtmp = numberofyouthtmp + 1;
        //console.log("#numberofyouthtmp=" + numberofyouthtmp);
        $(form)
            .find(
                `
                TRAVELLER_TYPE_${numberofyouthtmp}`
            )
            .val("B15");

        numberofyouth = numberofyouth - 1;
    }
    numberofchildtmp = numberofadult + numberofyouth;
    while (numberofchild >= 1) {
        numberofchildtmp = numberofchildtmp + 1;
        //console.log("#numberofchildtmp=" + numberofchildtmp);
        $(form).find(`#TRAVELLER_TYPE_${numberofchildtmp}`).val("CHD");

        numberofchild = numberofchild - 1;
    }
    numberofchild = parseInt($("#numberofchild").val());
    numberofinfanttmp = numberofadult + numberofchild;
    //console.log("numberofinfant=", numberofinfant)
    numberofinfanttmp = numberofinfant;
    if (numberofinfanttmp === 0) {
        $(form).append(
            `<input id="HAS_INFANT_1" name="HAS_INFANT_1" type="text" value="FALSE"  />`
        );
    }
    while (numberofinfanttmp >= 1) {
        $(form).append(
            `<input id="HAS_INFANT_${numberofinfanttmp}" name="HAS_INFANT_${numberofinfanttmp}" type="text" value="TRUE"  />`
        );

        numberofinfanttmp = numberofinfanttmp - 1;
    }
    $(form).append(
        `<input name="CABIN" name="CABIN" type="text" value=${$(
            `#cabin`
        ).val()}  />`
    );
    if (forceusdcurrency) {
        $(form).append(
            `<input id="CURRENCY_USD" name="CURRENCY_USD" type="text" value="TRUE" />`
        );
    } else {
        $(form).append(
            `<input id="CURRENCY_USD" name="CURRENCY_USD" type="text" value="FALSE" />`
        );
    }
    param = $(form).serialize();
    if (tripflow === "R") {
        let totalDestination = 2;

        for (i = 1; i <= totalDestination; i++) {
            let date = i === 1 ? "#DepartDate" : "#ArrivalDate";
            let origin = i === 1 ? "#selectFrom" : "#selectTo";
            // console.log("trip flow origin=", origin);
            // console.log("trip flow date=", date);
            // console.log("trip flow=", new Date($(date).val()));
            let destination = i === 1 ? "#selectTo" : "#selectFrom";
            // console.log(
            //     `loop condition B_LOCATION_${i}=`,
            //     $(form).find(`#B_LOCATION_${i}`).length
            //         ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
            //         $(form).find(`#B_LOCATION_${i}`).val().length === 0
            //         : true
            // );
            if (
                $(form).find(`#B_LOCATION_${i}`).length
                    ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
                    $(form).find(`#B_LOCATION_${i}`).val() === "null" ||
                    $(form).find(`#B_LOCATION_${i}`).val().length === 0
                    : true
            ) {
//                console.log("$(origin)=", $(origin));
                if ($(origin).val() === null) {
                    error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir un départ valide" : "Please enter valid Departure"} </li>`;
                    if (!$(origin).hasClass("focusedCustomized"))
                        $(origin).addClass("focusedCustomized");

                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(origin).hasClass("focusedCustomized"))
                        $(origin).removeClass("focusedCustomized");
                }
            } else {
                if ($(origin).hasClass("focusedCustomized"))
                    $(origin).removeClass("focusedCustomized");
            }

            if (
                $(form).find(`#E_LOCATION_${i}`).length
                    ? $(form).find(`#E_LOCATION_${i}`).val() === null ||
                    $(form).find(`#E_LOCATION_${i}`).val().length === 0
                    : true
            ) {
                if (
                    $(destination).val() !== null
                        ? $(destination).val().length === 0
                        : true
                ) {
                    error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer valide " : "Please enter valid "} ${i === 1 ? "Destination" : "Return"} </li>`;
                    if (!$(destination).hasClass("focusedCustomized"))
                        $(destination).addClass("focusedCustomized");

                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(destination).hasClass("focusedCustomized"))
                        $(destination).removeClass("focusedCustomized");
                }
            } else {
                if ($(destination).hasClass("focusedCustomized"))
                    $(destination).removeClass("focusedCustomized");
            }


            if (new Date($(date).val()) === null) {
                error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer valide " : "Please enter valid "} ${i === 1 ? "Depart Date" : "Return Date"}  </li>`;
                if (!$(date).hasClass("focusedCustomized")) ;
                $(date).addClass("focusedCustomized");

                if (!focusSet) {
                    if ($(date).hasClass("focusedCustomized")) ;
                    $(date).removeClass("focusedCustomized");
                }
                focusSet = true;
                event.preventDefault();
            } else {
                if ($(date).hasClass("focusedCustomized")) ;
                $(date).removeClass("focusedCustomized");
            }

        }
    }
    // trip flow
    if (tripflow === "O") {
        let totalDestination = 1;

        for (i = 1; i <= totalDestination; i++) {
            let date = "#DepartDate";
            let origin = i === 1 ? "#selectFrom" : "#selectTo";
            let destination = i === 1 ? "#selectTo" : "#selectFrom";
            // console.log(
            //     `loop condition B_LOCATION_${i}=`,
            //     $(form).find(`#B_LOCATION_${i}`).length
            //         ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
            //         $(form).find(`#B_LOCATION_${i}`).val().length === 0
            //         : true
            // );
            if (
                $(form).find(`#B_LOCATION_${i}`).length
                    ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
                    $(form).find(`#B_LOCATION_${i}`).val() === "null" ||
                    $(form).find(`#B_LOCATION_${i}`).val().length === 0
                    : true
            ) {
                if ($(origin).val() === null) {
                    error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir un départ valide" : "Please enter  valid Departure"} </li>`;
                    if (!$(origin).hasClass("focusedCustomized")) ;
                    $(origin).addClass("focusedCustomized");

                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(origin).hasClass("focusedCustomized")) ;
                    $(origin).removeClass("focusedCustomized");
                }
            } else {
                if (!$(origin).hasClass("focusedCustomized")) ;
                $(origin).addClass("focusedCustomized");
            }

            if (
                $(form).find(`#E_LOCATION_${i}`).length
                    ? $(form).find(`#E_LOCATION_${i}`).val() === null ||
                    $(form).find(`#E_LOCATION_${i}`).val().length === 0
                    : true
            ) {
                if (
                    $(destination).val() !== null
                        ? $(destination).val().length === 0
                        : true
                ) {
                    error += "<li>Please enter valid Arrival </li>";
                    if (!$(destination).hasClass("focusedCustomized")) ;
                    $(destination).addClass("focusedCustomized");

                    if (!focusSet) {
                        if ($(destination).hasClass("focusedCustomized")) ;
                        $(destination).removeClass("focusedCustomized");
                    }
                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(destination).hasClass("focusedCustomized")) ;
                    $(destination).removeClass("focusedCustomized");
                }
            } else {
                if ($(destination).hasClass("focusedCustomized")) ;
                $(destination).removeClass("focusedCustomized");
            }


            if (new Date($(date).val()) === null) {
                error += "<li>Please enter valid Departure Date</li>";
                if (!$(date).hasClass("focusedCustomized")) ;
                $(date).addClass("focusedCustomized");

                if (!focusSet) {
                    if ($(date).hasClass("focusedCustomized")) ;
                    $(date).removeClass("focusedCustomized");
                }
                focusSet = true;
                event.preventDefault();
            } else {
                if ($(date).hasClass("focusedCustomized")) ;
                $(date).removeClass("focusedCustomized");
            }

        }
    }
    param = $(form).serialize();
    // console.log("param=", param);
    // console.log("focusSet=", focusSet);
    if (focusSet) {
        $("#errorsContent").removeClass("d-none");
        $("#errorsList").html(error);
        $('html, body').animate({
            scrollTop: $("#errorsContent").offset().top
        }, 800, function () {
        });
        return;
    }
    // console.log(`$("#possibleRedemption").val()=`, $("#possibleRedemption").val().trim());
    if ($("#possibleRedemption").val().trim() == "true") {


        $('#milemessage').html(`You have enough miles (${new Intl.NumberFormat().format($("#awardMiles").val())}) to  book a Flight!<br>Do you want to pay with Miles?`);

        // console.log("buttonsearchbookId clicked!");
        var modalConfirm = function (callback) {


            $("#mi-modal").modal('show');


            $("#modal-btn-ok").on("click", function () {
                callback(true);
                $("#mi-modal").modal('hide');
            });

            $("#modal-btn-no").on("click", function () {
                callback(false);
                $("#mi-modal").modal('hide');
            });
        }


        return modalConfirm(function (confirm) {
            if (confirm) {

                // console.log("OK confirmed");
                $(form).append(
                    `<input id="IS_REDEMPTION" name="IS_REDEMPTION" type="text" value="TRUE"
    		).val()}  />`
                );
                $(event.target)
                    .html(
                        '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
                    )
                    .attr("disabled", true);


                return $(form).appendTo("body").submit();

            } else {
                $(form).append(
                    `<input id="IS_REDEMPTION" name="IS_REDEMPTION" type="text" value="FALSE"
    		).val()}  />`
                );
                $(event.target)
                    .html(
                        '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
                    )
                    .attr("disabled", true);


                return $(form).appendTo("body").submit();
            }
        });
    }
    $(event.target)
        .html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
        )
        .attr("disabled", true);
    // gtag('event', `Tripflow ${tripflow} Form`, {
    //     'event_category': eventLabel,
    //     'event_label': 'Search',
    // });

    return $(form).appendTo("body").submit();
}

/**
 *
 */
function findflightstatus(event, selectedLanguage, selectedTripflow) {
    var error = "";
    var focusSet = false;
    //Start of initialization
    //Start of initialization
    var focusSet = false;
    var languageval = selectedLanguage;
    var form = document.createElement("form");
    $(form).attr("name", selectedTripflow);
    $(form).attr("action", "https://www.rwandair.com/bookingflow");
    $(form).attr("method", "GET");
    $(form).css("display", "none");
    $(form).append(
        `<input id="EMBEDDED_TRANSACTION" name="EMBEDDED_TRANSACTION" type="text" value="FlightStatusPopUp"  />`
    );
    $(form).append(
        `<input id="LANGUAGE" name="LANGUAGE" type="text" value="${selectedLanguage}"  />`
    );

    $(form).append(
        `<input id="EMBEDDED_TRANSACTION" name="EMBEDDED_TRANSACTION" type="text" value="FlightStatusPopUp"  />`
    );

    $(form).append(
        `<input id="B_DATE" name="B_DATE" type="text" value="${
            $(`#flightstatus_departuredate`).length > 0
                ? $(`#flightstatus_departuredate`).datepicker("getDate") !== null
                    ? moment(
                    $(`#flightstatus_departuredate`).datepicker("getDate")
                ).format("YYYYMMDD") + "0000"
                    : ""
                : ""
        }"  />`
    );
    $(form).append(
        `<input id="FLIGHT_NUMBER" name="FLIGHT_NUMBER" type="text" value="${
            $("#flightstatus_flightnumber").val().length > 0 &&
            $("#flightstatus_flightnumber").val() !== null
                ? $("#flightstatus_flightnumber").val()
                : ""
        }"  />`
    );

    $(form).append(
        `<input id="B_LOCATION_1" name="B_LOCATION_1" type="text" value="${
            $("#flightstatus_departure").length &&
            $("#flightstatus_departure").val() !== null
                ? $("#flightstatus_departure").val()
                : ""
        }"  />`
    );
    $(form).append(
        `<input id="E_LOCATION_1" name="E_LOCATION_1" type="text" value="${
            $("#flightstatus_arrival").length &&
            $("#flightstatus_arrival").val() !== null
                ? $("#flightstatus_arrival").val()
                : ""
        }"  />`
    );

    param = $(form).serialize();

    // console.log("param=", param);

    if (
        $(`#flightstatus_departuredate`).datepicker("getDate") !== null
            ? $(`#flightstatus_departuredate`).datepicker("getDate").length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer la date de départ" : "Please enter departure Date"}</li>`;
        if (!$(`#flightstatus_departuredate`).hasClass("focusedCustomized"))
            $(`#flightstatus_departuredate`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#flightstatus_departuredate`).hasClass("focusedCustomized"))
            $(`#flightstatus_departuredate`).removeClass("focusedCustomized");
    }

    if (
        $(`#flightstatus_flightnumber`).val() !== null
            ? $(`#flightstatus_flightnumber`).val().length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer le numéro de vol" : "Please enter Flight Number"}</li>`;
        if (!$(`#flightstatus_flightnumber`).hasClass("focusedCustomized"))
            $(`#flightstatus_flightnumber`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#flightstatus_flightnumber`).hasClass("focusedCustomized"))
            $(`#flightstatus_flightnumber`).removeClass("focusedCustomized");
    }

    if (
        $(`#flightstatus_departure`).val() !== null
            ? $(`#flightstatus_departure`).val().length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir un départ de vol valide" : "Please enter valid Flight departure"}</li>`;
        if (!$(`#flightstatus_departure`).hasClass("focusedCustomized"))
            $(`#flightstatus_departure`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        // console.log("valide 2");

        if ($(`#flightstatus_departure`).hasClass("focusedCustomized"))
            $(`#flightstatus_departure`).removeClass("focusedCustomized");
    }
    if (
        $(`#flightstatus_arrival`).val() !== null
            ? $(`#flightstatus_arrival`).val().length === 0
            : true
    ) {
        // only add if not added

        error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir une destination valide" : "Please enter valid Flight arrival"}</li>`;
        if (!$(`#flightstatus_arrival`).hasClass("focusedCustomized"))
            $(`#flightstatus_arrival`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if (!$(`#flightstatus_arrival`).hasClass("focusedCustomized"))
            $(`#flightstatus_arrival`).removeClass("focusedCustomized");
    }
    // console.log("focusSet=", focusSet);
    if (focusSet) {
        $("#errorsContent").removeClass("d-none");
        $("#errorsList").html(error);

        $('html, body').animate({
            scrollTop: $("#errorsContent").offset().top
        }, 800, function () {
        });
        return;

    }
    $(event.target)
        .html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
        )
        .attr("disabled", true);

    gtag('event', `Tripflow ${tripflow} Form`, {
        'event_category': 'FlightStatusPopUp',
        'event_label': 'Search',
    });

    return $(form).appendTo("body").submit();
}

function retreiveBooking(event, selectedLanguage, selectedTripflow) {
    //Start of initialization
    var error = "";
    var focusSet = false;
    var languageval = selectedLanguage;
    var form = document.createElement("form");
    $(form).attr("name", selectedTripflow);
    $(form).attr("action", "https://www.rwandair.com/bookingflow");
    $(form).attr("method", "GET");
    $(form).css("display", "none");
    $(form).append(
        `<input id="EMBEDDED_TRANSACTION" name="EMBEDDED_TRANSACTION" type="text" value="RetrievePNR"  />`
    );
    $(form).append(
        `<input id="LANGUAGE" name="LANGUAGE" type="text" value="${selectedLanguage}"  />`
    );
    $(form).append(
        `<input id="DIRECT_RETRIEVE_LASTNAME" name="DIRECT_RETRIEVE_LASTNAME" type="text" value="${
            $("#retreivepnr_lastname").val().length > 0 &&
            $("#retreivepnr_lastname").val() !== null
                ? $("#retreivepnr_lastname").val()
                : ""
        }"  />`
    );
    $(form).append(
        `<input id="REC_LOC" name="REC_LOC" type="text" value="${
            $("#retreivepnr_pnr").val().length > 0 &&
            $("#retreivepnr_pnr").val() !== null
                ? $("#retreivepnr_pnr").val()
                : ""
        }"  />`
    );
    //End of initialization

    if (
        $(`#retreivepnr_lastname`).val() !== null
            ? $(`#retreivepnr_lastname`).val().length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "veuillez saisir un nom de famille valide" : "Please enter valid lastname"}</li>`;
        if (!$(`#retreivepnr_lastname`).hasClass("focusedCustomized"))
            $(`#retreivepnr_lastname`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#retreivepnr_lastname`).hasClass("focusedCustomized"))
            $(`#retreivepnr_lastname`).removeClass("focusedCustomized");
    }

    if (
        $(`#retreivepnr_pnr`).val() !== null
            ? $(`#retreivepnr_pnr`).val().length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir une pièce d'identité de passager valide" : "Please enter valid Passenger ID"}</li>`;
        if (!$(`#retreivepnr_pnr`).hasClass("focusedCustomized"))
            $(`#retreivepnr_pnr`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#retreivepnr_pnr`).hasClass("focusedCustomized"))
            $(`#retreivepnr_pnr`).removeClass("focusedCustomized");
    }
    param = $(form).serialize();

    // console.log("retreivepnrFrm parameter:" + param);
    // console.log("focusSet=", focusSet);

    if (focusSet) {
        $("#errorsContent").removeClass("d-none");
        $("#errorsList").html(error);
        $('html, body').animate({
            scrollTop: $("#errorsContent").offset().top
        }, 800, function () {
        });
        return;
    }
    $(event.target)
        .html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
        )
        .attr("disabled", true);
    gtag('event', `RetrievePNR`, {
        'event_category': 'RetrievePNR',
        'event_label': 'Search',
    });
    $(form).appendTo("body").submit();
    return $(form).remove();
}

$(document).on("click", "#timetable_SearchFlex", (e) => {
    e.preventDefault();
    $("#errorsList").html("");
    if (!$("#errorsContent").hasClass("d-none")) {
        $("#errorsContent").addClass("d-none");
    }
    // console.log("delete clicked length=", $(".mltcity").length);
    selectedCountry = $("#selectedCountry").val();
    selectedLanguage = $("#selectedLanguage").val();
    selectedCurrency = $("#selectedCurrency").val();

    timetable_SearchFlex(e, selectedLanguage, tripflow);
});
function timetable_SearchFlex(event, selectedLanguage, selectedTripflow) {
    var error = "";
    var focusSet = false;
    var languageval = selectedLanguage;
    var form = document.createElement("form");
    $(form).attr("name", selectedTripflow);
    $(form).attr("action", "https://www.rwandair.com/bookingflow");
    $(form).attr("method", "GET");
    $(form).css("display", "none");
    //Start of initialization
    /*timetable_departure;
    timetable_arrival;
    timetable_departuredate;
    timetable_returndate;
    */
    $(form).append(
        `<input id="EMBEDDED_TRANSACTION" name="EMBEDDED_TRANSACTION" type="text" value="TimeTable"  />`
    );
    $(form).append(
        `<input id="LANGUAGE" name="LANGUAGE" type="text" value="${selectedLanguage}"  />`
    );
    $(form).append(
        `<input id="B_LOCATION" name="B_LOCATION" type="text" value="${
            $("#timetable_departure").length > 0 &&
            $("#timetable_departure").val() !== null
                ? $("#timetable_departure").val()
                : ""
        }"  />`
    );
    $(form).append(
        `<input id="E_LOCATION" name="E_LOCATION" type="text" value="${
            $("#timetable_arrival").length > 0 &&
            $("#timetable_arrival").val() !== null
                ? $("#timetable_arrival").val()
                : ""
        }"  />`
    );
    $(form).append(
        `<input id="B_DATE" name="B_DATE" type="text" value="${
            $(`#timetable_departuredate`).length > 0
                ? $(`#timetable_departuredate`).datepicker("getDate") !== null
                    ? moment($(`#timetable_departuredate`).datepicker("getDate")).format(
                    "YYYYMMDD"
                ) + "0000"
                    : ""
                : ""
        }"  />`
    );
    $(form).append(
        `<input id="E_DATE" name="E_DATE" type="text" value="${
            $(`#timetable_returndate`).length > 0
                ? $(`#timetable_returndate`).datepicker("getDate") !== null
                    ? moment($(`#timetable_returndate`).datepicker("getDate")).format(
                    "YYYYMMDD"
                ) + "0000"
                    : ""
                : ""
        }"  />`
    );
    //End of initialization
    if (
        $(`#timetable_returndate`).datepicker("getDate") !== null
            ? $(`#timetable_returndate`).datepicker("getDate").length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer une date de retour valide" : "Please enter valid return date"}</li>`;
        if (!$(`#timetable_returndate`).hasClass("focusedCustomized"))
            $(`#timetable_returndate`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#timetable_returndate`).hasClass("focusedCustomized"))
            $(`#timetable_returndate`).removeClass("focusedCustomized");
    }
    if (
        $(`#timetable_departuredate`).datepicker("getDate") !== null
            ? $(`#timetable_departuredate`).datepicker("getDate").length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer une date de départ valide" : "Please enter valid departure date"}</li>`;
        if (!$(`#timetable_departuredate`).hasClass("focusedCustomized"))
            $(`#timetable_departuredate`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#timetable_departuredate`).hasClass("focusedCustomized"))
            $(`#timetable_departuredate`).removeClass("focusedCustomized");
    }
    if (
        $(`#timetable_departure`).val() !== null
            ? $(`#timetable_departure`).val().length === 0
            : true
    ) {
        if ($(`#timetable_departure`).hasClass("focusedCustomized"))
            $(`#timetable_departure`).removeClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        if ($(`#timetable_departuredate`).hasClass("focusedCustomized"))
            $(`#timetable_departuredate`).removeClass("focusedCustomized");
    }

    if (
        $(`#timetable_arrival`).val() !== null
            ? $(`#timetable_arrival`).val().length === 0
            : true
    ) {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir une destination" : "Please enter valid Arrival"}</li>`;
        if (!$(`#timetable_arrival`).hasClass("focusedCustomized"))
            $(`#timetable_arrival`).addClass("focusedCustomized");

        focusSet = true;
        event.preventDefault();
    } else {
        error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir une destination" : "Please enter valid Arrival"}</li>`;
        if ($(`#timetable_arrival`).hasClass("focusedCustomized"))
            $(`#timetable_arrival`).removeClass("focusedCustomized");
    }

    param = $(form).serialize();
    // console.log(param);
    // console.log("focusSet=", focusSet);
    if (focusSet) {
        $("#errorsContent").removeClass("d-none");
        $("#errorsList").html(error);
        $('html, body').animate({
            scrollTop: $("#errorsContent").offset().top
        }, 800, function () {
        });
        return;
    }
    $(event.target)
        .html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
        )
        .attr("disabled", true);
    ga('send', 'event', 'TimeTable Form', 'submit');
    gtag('event', `TimeTable`, {
        'event_category': 'TimeTable',
        'event_label': 'Search',
    });
    $(form).appendTo("body").submit();


}
