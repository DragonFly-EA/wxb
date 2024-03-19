var tripflow = "returnTrip";
numberofadultv = 1;
numberofyouthv = 0;
numberofchildv = 0;
numberofinfantv = 0;

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
    //console.log("focusSet=", focusSet);
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

function SearchBook(
    event,
    selectedCurrency,
    selectedLanguage,
    selectedCountry,
    selectedTripflow
) {
    var error = "";

    var tripflow = selectedTripflow.charAt(0).toUpperCase();
    var eventLabel = tripflow;


//    console.log("tripflow=", tripflow);
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

    var numberofadult = numberofadultv;
    var numberofyouth = numberofyouthv;
    var numberofchild = numberofchildv;
    var numberofinfant = numberofinfantv;
    var numberofchildtmp = numberofchild;
    var numberofyouthtmp = numberofyouth;
    var numberofadulttmp = numberofadult;
    var numberofinfanttmp = numberofinfant;
//    console.log("numberofadult=", numberofadult);

    var focusSet = false;
    //Start of initialization

    if (tripflow === "M") {
        for (i = 1; i <= 6; i++) {
            if (i === 1) {
                eventLabel = $(`#selectFrom${i}`).val() + "-" + $(`#selectTo${i}`).val();
            }
            $(form).append(
                `<input id="B_LOCATION_${i}" name="B_LOCATION_${i}" type="text" value="${
                    $(`#selectFrom${i}`).length > 0 && $(`#selectFrom${i}`) !== null
                        ? $(`#selectFrom${i}`).val()
                        : ""
                }"  />`
            );
            $(form).append(
                `<input id="E_LOCATION_${i}" name="E_LOCATION_${i}" type="text" value="${
                    $(`#selectTo${i}`).length > 0 && $(`#selectTo${i}`).val() !== null
                        ? $(`#selectTo${i}`).val()
                        : ""
                }"  />`
            );
        }
    }
    if (tripflow === "R") {
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

    if (tripflow === "M") {
        for (i = 1; i <= 6; i++) {
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
                    $(`#departDate${i}`).length > 0
                        ? $(`#departDate${i}`).datepicker("getDate") !== null
                            ? moment($(`#departDate${i}`).datepicker("getDate")).format(
                            "YYYYMMDD"
                        ) + "0000"
                            : ""
                        : ""
                }"  />`
            );
        }
    }
    if (tripflow === "R") {
        for (i = 1; i <= 2; i++) {
            let date = i === 1 ? "#DepartDate" : "#ArrivalDate";
            // console.log(
            //     "$(date).datepicker(getDate) formation=",
            //     $(date).datepicker("getDate")
            // );
            // console.log('h');
            // console.log(date);
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
                    $(date).length > 0
                        ? $(date).datepicker("getDate") !== null
                            ? moment($(date).datepicker("getDate")).format("YYYYMMDD") +
                            "0000"
                            : ""
                        : ""
                }"  />`
            );
        }
    }
    if (tripflow === "O") {
        for (i = 1; i <= 1; i++) {
            let date = "#DepartDate";
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
                    $(date).length > 0
                        ? $(date).val() !== null
                            ? moment($(date).datepicker("getDate")).format("YYYYMMDD") +
                            "0000"
                            : ""
                        : ""
                }"  />`
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

    /*while (countinf > 0) {
        $(form).append(
            `<input id="HAS_INFANT_${countinf}" name="HAS_INFANT_${countinf}" type="text" value=""  />`
        );

        countinf--;
    }
    */
    //console.log(3);
    //End of initialization
    while (numberofadulttmp >= 1) {
        $(form).find(`#TRAVELLER_TYPE_${numberofadulttmp}`).val("ADT");

        numberofadulttmp = numberofadulttmp - 1;
    }

    numberofyouthtmp = numberofadult;
    //console.log(4);
    while (numberofyouth >= 1) {
        numberofyouthtmp = numberofyouthtmp + 1;
        // console.log("#numberofyouthtmp=" + numberofyouthtmp);
        $(form)
            .find(
                `
                TRAVELLER_TYPE_${numberofyouthtmp}`
            )
            .val("B15");

        numberofyouth = numberofyouth - 1;
    }
    numberofchildtmp = numberofadult + numberofyouth;
    //console.log(4);
    while (numberofchild >= 1) {
        numberofchildtmp = numberofchildtmp + 1;
        // console.log("#numberofchildtmp=" + numberofchildtmp);
        $(form).find(`#TRAVELLER_TYPE_${numberofchildtmp}`).val("CHD");

        numberofchild = numberofchild - 1;
    }
    numberofchild = parseInt($("#numberofchild").val());
    // console.log("numberofchild=", numberofchild)
    numberofinfanttmp = numberofadult + numberofchild;
    //console.log("#numberofinfanttmp:"+numberofinfanttmp);

    //numberofinfant = parseInt($("#numberofinfant").val());
    // console.log("numberofinfant=", numberofinfant)
    numberofinfanttmp = numberofinfant;
    //console.log(5);
    if (numberofinfanttmp === 0) {
        $(form).append(
            `<input id="HAS_INFANT_1" name="HAS_INFANT_1" type="text" value="FALSE"  />`
        );
    }
    // console.log("numberofinfanttmp=", numberofinfanttmp)
    while (numberofinfanttmp >= 1) {
        //$(form).find(`#HAS_INFANT_ ${numberofinfanttmp}`).val("TRUE");
        $(form).append(
            `<input id="HAS_INFANT_${numberofinfanttmp}" name="HAS_INFANT_${numberofinfanttmp}" type="text" value="TRUE"  />`
        );

        numberofinfanttmp = numberofinfanttmp - 1;
    }
    //console.log(6);

    //console.log(7);
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
    // console.log("param=", param);

    if (tripflow === "M") {
        let totalDestination = $(".mltcity").length;

        for (i = 1; i <= totalDestination; i++) {
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
                if (
                    $(`#selectFrom${i}`).val() !== null
                        ? $(`#selectFrom${i}`).val().length === 0
                        : true
                ) {
                    error += `<li>${selectedLanguage === "FR" ? "Veuillez entrer un départ valide" : "Please enter valid departure"}${i} </li>`;
                    if (!$(`#selectFrom${i}`).hasClass("focusedCustomized"))
                        $(`#selectFrom${i}`).addClass("focusedCustomized");

                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(`#selectFrom${i}`).hasClass("focusedCustomized"))
                        $(`#selectFrom${i}`).removeClass("focusedCustomized");
                }
            } else {
                if ($(`#selectFrom${i}`).removeClass("focusedCustomized"))
                    $(`#selectFrom${i}`).addClass("focusedCustomized");
            }

            if (
                $(form).find(`#E_LOCATION_${i}`).length
                    ? $(form).find(`#E_LOCATION_${i}`).val() === null ||
                    $(form).find(`#E_LOCATION_${i}`).val().length === 0
                    : true
            ) {
                if (
                    $(`#selectTo${i}`).val() !== null
                        ? $(`#selectTo${i}`).val().length === 0
                        : true
                ) {
                    error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir une destination valide" : "Please enter valid Arrival"} ${i} </li>`;
                    if (!$(`#selectTo${i}`).hasClass("focusedCustomized"))
                        $(`#selectTo${i}`).addClass("focusedCustomized");

                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(`#selectTo${i}`).hasClass("focusedCustomized"))
                        $(`#selectTo${i}`).removeClass("focusedCustomized");
                }
            } else {
                if ($(`#selectTo${i}`).hasClass("focusedCustomized"))
                    $(`#selectTo${i}`).removeClass("focusedCustomized");
            }

            if (
                $(form).find(`#B_DATE_${i}`).length
                    ? $(form).find(`#B_DATE_${i}`).val() === null ||
                    $(form).find(`#B_DATE_${i}`).val().length === 0
                    : true
            ) {
                if (
                    $(`#departDate${i}`).val() !== null
                        ? $(`#departDate${i}`).val().length === 0
                        : true
                ) {
                    error += `<li>${selectedLanguage === "FR" ? "Veuillez saisir une date de départ valide" : "Please enter valid Departure Date"} ${i} </li>`;
                    if (!$(`#departDate${i}`).hasClass("focusedCustomized"))
                        $(`#departDate${i}`).addClass("focusedCustomized");
                    if (!focusSet) {
                        if ($(`#departDate${i}`).hasClass("focusedCustomized"))
                            $(`#departDate${i}`).removeClass("focusedCustomized");
                    }
                    focusSet = true;
                    event.preventDefault();
                } else {
                    if ($(`#departDate${i}`).hasClass("focusedCustomized"))
                        $(`#departDate${i}`).removeClass("focusedCustomized");
                }
            } else {
                if ($(`#departDate${i}`).hasClass("focusedCustomized"))
                    $(`#departDate${i}`).removeClass("focusedCustomized");
            }
        }
    }
    // trip flow
    if (tripflow === "R") {
        let totalDestination = 2;

        for (i = 1; i <= totalDestination; i++) {
            let date = i === 1 ? "#DepartDate" : "#ArrivalDate";
            let origin = i === 1 ? "#selectFrom" : "#selectTo";
            // console.log("trip flow origin=", origin);
            // console.log("trip flow date=", date);
            // console.log("trip flow=", $(date).datepicker("getDate"));
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
                // console.log("$(origin)=", $(origin));
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


            if ($(date).datepicker("getDate") === null) {
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


            if ($(date).datepicker("getDate") === null) {
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
    //console.log(`$("#possibleRedemption").val()=`, $("#possibleRedemption").val().trim());


    if ($("#possibleRedemption").val().trim() == "true") {


        $('#milemessage').html(`You have enough miles (${new Intl.NumberFormat().format($("#awardMiles").val())}) to  book a Flight!<br>Do you want to pay with Miles?`);

        //console.log("buttonsearchbookId clicked!");
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

                //console.log("OK confirmed");
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
    // $(event.target)
    //     .html(
    //         '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
    //     )
    //     .attr("disabled", true);
    // console.log('gtag');
    // console.log(gtag);
    // gtag('event', `Tripflow ${tripflow} Form`, {
    //     'event_category': eventLabel,
    //     'event_label': 'Search',
    // });


 //   return $(form).appendTo("body").submit();
}

function add_more_ROWs_multiple() {
    //Set Up the template
    //Set Up the template
    var s = $("#addMoreMultiInputsTemplate")[0].innerHTML.trim();
    id = $("#grmltcity").find(".mltcity").length + 1;
    //console.log("flightForm grmltcity", $("#grmltcity").find(".mltcity"));

    var holder = document.createElement("div");
    holder.innerHTML = s;
    var template = holder.childNodes;

    var member = document.getElementById("newgmembers");
    //console.log("flightForm.js data.city=", data);

    //Clone TemplatedepartDate2
    var newItem = $(template).clone();

    //Populate it "routes":[
    // eg. {"city":"ADD","priceFrom":200,"currency":"USD" ,"description":"Best Price","discount":10,"badges":["HOT"]},
    $(newItem).attr("id", "mltcity" + id);
    $(newItem).attr("rel", id);

    $(newItem)
        .find(".input-group")
        .find(".float1")
        .find("select")
        .attr("id", "selectFrom" + id)
        .attr("rel", id.toString())
        .attr("name", "selectFrom" + id);
    $(newItem)
        .find(".input-group")
        .find(".float1")
        .find("label")
        .attr("for", "selectFrom" + id);
    $(newItem)
        .find(".input-group")
        .find(".float2")
        .find("select")
        .attr("id", "selectTo" + id)
        .attr("rel", id.toString())
        .attr("name", "selectTo" + id);
    $(newItem)
        .find(".input-group")
        .find(".float2")
        .find("label")
        .attr("for", "selectTo" + id);
    $(newItem)
        .find(".input-group")
        .find(".float3")
        .find(".departDate")
        .attr("id", "departDate" + id);
    $(newItem)
        .find(".input-group")
        .find(".float3")
        .find("label")
        .attr("for", "departDate" + id);
    $("#grmltcity").append(newItem);
    $("#selectFrom" + id).select2({
        selectOnClose: true,
        dropdownAutoWidth: true,
    });
    $("#selectTo" + id).select2({
        selectOnClose: true,
        dropdownAutoWidth: true,
    });

    return id;
}

//console.log("flightForm.js reached");
$(function () {
    $(document).on("click", ".delete", () => {
        $("#errorsList").html("");
        if (!$("#errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }
        //console.log("delete clicked length=", $(".mltcity").length);

        $("#mltcity" + $(".mltcity").length).remove();

        if ($(".mltcity").length >= 3) {
            $(".delete").removeClass("d-none");
        } else if ($(".mltcity").length < 3) {
            $(".delete").addClass("d-none");
        }
        if (
            $(".mltcity").length >= 6 &&
            !$("#addMoreMultiInputs").hasClass("d-none")
        ) {
            $("#addMoreMultiInputs").addClass("d-none");
        } else if (
            $(".mltcity").length < 6 &&
            $("#addMoreMultiInputs").hasClass("d-none")
        ) {
            $("#addMoreMultiInputs").removeClass("d-none");
        }
    });
    $(document).on("click", ".tripflow", (e) => {
        e.preventDefault();
        if (!$("#errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }
        tripflow = e.target.getAttribute("rel");
        //console.log("tripflow tripflow", tripflow);
        if (tripflow === "oneWayTrip") {
            $("#ArrivalDateWrapper").hide();
            if ($("#ArrivalDate").parent().next(".validation").length) {
                $("#ArrivalDate").parent().next(".validation").hide();
            } else if ($("#DepartureDateWrapper").hasClass("col-md-6")) {
                $("#DepartureDateWrapper").addClass("col-md-12");
            }

        } else {
            $("#ArrivalDateWrapper").show();
            if ($("#ArrivalDate").parent().next(".validation").length) {
                $("#ArrivalDate").parent().next(".validation").show();
            } else if ($("#DepartureDateWrapper").hasClass("col-md-6")) {
                $("#DepartureDateWrapper").removeClass("col-md-12");
            }

        }
    });
    $(document).on("click", "#closeError", (e) => {
        $("#errorsContent").addClass("d-none");
    });
    $(document).on("click", "#addMoreMultiInputs", (e) => {
        e.preventDefault();
        $("#errorsList").html("");
        $("#errorsContent").addClass("d-none");

        // console.log("delete clicked length=", $(".mltcity").length);
        // console.log("flightForm.js addMoreMultiInputs clicked");
        let selectId = add_more_ROWs_multiple();
        //console.log("flightForm.js selectId=", "#selectId" + selectId);
        append_destination_json(airports, countries, "#selectFrom" + selectId);
        $("#departDate" + selectId).datepicker({
            startDate: new Date(),
            orientation: "auto",
            todayHighlight: true,
            autoclose: true,
            format: "d M yyyy",
            startView: "days",
            minViewDate: 0,
            maxViewDate: 0,
            weekStart: 1,
        });
        if (selectId >= 3 && $(".delete").hasClass("d-none")) {
            $(".delete").removeClass("d-none");
        } else if (selectId < 3 && !$(".delete").hasClass("d-none")) {
            $(".delete").addClass("d-none");
        }
        if (selectId >= 6 && !$("#addMoreMultiInputs").hasClass("d-none")) {
            $("#addMoreMultiInputs").addClass("d-none");
        } else if (selectId < 6 && $("#addMoreMultiInputs").hasClass("d-none")) {
            $("#addMoreMultiInputs").removeClass("d-none");
        }
    });
    $(document).on("click", "#findFlights", (e) => {
        e.preventDefault();

        //console.log("delete clicked length=", $(".mltcity").length);
        selectedCountry = $("#selectedCountry").val();
        selectedLanguage = $("#selectedLanguage").val();
        selectedCurrency = $("#selectedCurrency").val();
        // console.log(
        //     "onClick errorsContent=",
        //     !$("#errorsContent").hasClass("d-none")
        // );
        $("#errorsList").html("");
        if (!$(".errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }

        SearchBook(
            e,
            selectedCurrency,
            selectedLanguage,
            selectedCountry,
            tripflow
        );
    });

    $(document).on("click", "#flightstatus_SearchFlex", (e) => {
        e.preventDefault();
        $("#errorsList").html("");
        if (!$("#errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }
        //console.log("delete clicked length=", $(".mltcity").length);
        selectedCountry = $("#selectedCountry").val();
        selectedLanguage = $("#selectedLanguage").val();
        selectedCurrency = $("#selectedCurrency").val();

        findflightstatus(e, selectedLanguage, tripflow);
    });

    $(document).on("click", "#checkinbtn", function (e) {
        e.preventDefault();
        $(e.target)
            .html(
                '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
            )
            .attr("disabled", true);
        var form = document.createElement("form");
        $(form).attr("action", "https://www.rwandair.com/checkin/");
        $(form).attr("method", "GET");
        $(form).css("display", "none");
        return $(form).appendTo("body").submit();

    });


    $(document).on("click", "#retreivepnr_SearchFlex", (e) => {
        e.preventDefault();
        $("#errorsList").html("");
        if (!$("#errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }
        //console.log("delete clicked length=", $(".mltcity").length);
        selectedCountry = $("#selectedCountry").val();
        selectedLanguage = $("#selectedLanguage").val();
        selectedCurrency = $("#selectedCurrency").val();

        retreiveBooking(e, selectedLanguage, tripflow);
    });
    $(document).on("click", "#timetable_SearchFlex", (e) => {
        e.preventDefault();
        $("#errorsList").html("");
        if (!$("#errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }
        //console.log("delete clicked length=", $(".mltcity").length);
        selectedCountry = $("#selectedCountry").val();
        selectedLanguage = $("#selectedLanguage").val();
        selectedCurrency = $("#selectedCurrency").val();

        timetable_SearchFlex(e, selectedLanguage, tripflow);
    });
    $(document).on("click", ".bookingMainTab", (e) => {
        //ingroupbooking
        $("#errorsList").html("");
        if (!$("#errorsContent").hasClass("d-none")) {
            $("#errorsContent").addClass("d-none");
        }
        // console.log("delete clicked length=", $(".mltcity").length);
        // console.log("bookingMainTab clicked e.target.id=", e.target.id);
        // console.log(
        //     "bookingMainTab clicked=",
        //     $(e.target).attr("rel")
        // );

        if (e.target.id === "booking-tab") {
            //console.log(`e.target.id === "booking-tab" meet`);
            tripflow = $(".tripflow").parent().find(".active").attr("rel");
        } else {
            tripflow = $(e.target).parent().parent().attr("rel");
        }

        //tripflow = e.target.getAttribute("rel");
    });

    $(document).on("click", "#removeAdult", function (event) {
        let total = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0 + parseInt($("#numberofadult").val());
        if (total > 1 && parseInt($("#numberofadult").val()) > 0) {
            numberadult = parseInt($("#numberofadult").val()) - 1;
            $("#numberofadult").val(numberadult);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#addAdult", (event) => {
        let total =
            parseInt($("#numberofinfant").val()) +
            parseInt($("#numberofchild").val()) +
            parseInt($("#numberofadult").val());

        if (total < 9) {
            numberadult = parseInt($("#numberofadult").val()) + 1;
            $("#numberofadult").val(numberadult);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#removeyouth", function (event) {
        let total =
            parseInt($("#numberofyouth").val()) + parseInt($("#numberofadult").val());
        if (total > 1 && parseInt($("#numberofyouth").val()) > 0) {
            numberyouth = parseInt($("#numberofyouth").val()) - 1;
            $("#numberofyouth").val(numberyouth);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#addyouth", function (event) {
        let total =
            parseInt($("#numberofinfant").val()) +
            parseInt($("#numberofchild").val()) +
            parseInt($("#numberofadult").val()) +
            parseInt($("#numberofyouth").val());

        if (total < 9) {
            numberyouth = parseInt($("#numberofyouth").val()) + 1;
            $("#numberofyouth").val(numberyouth);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#removeChild", function (event) {
        if ($("#numberofchild").val() > 0) {
            numberchild = parseInt($("#numberofchild").val()) - 1;
            $("#numberofchild").val(numberchild);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#addChild", function (event) {
        let total =
            parseInt($("#numberofinfant").val()) +
            parseInt($("#numberofchild").val()) +
            parseInt($("#numberofadult").val());
        if (total < 9) {
            numberchild = parseInt($("#numberofchild").val()) + 1;
            $("#numberofchild").val(numberchild);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#removeInfant", function (event) {
        if ($("#numberofinfant").val() > 0) {
            numberinfant = parseInt($("#numberofinfant").val()) - 1;
            $("#numberofinfant").val(numberinfant);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    $(document).on("click", "#addInfant", function (event) {
        let total =
            parseInt($("#numberofinfant").val()) +
            parseInt($("#numberofchild").val()) +
            parseInt($("#numberofadult").val());

        if (
            total < 9 &&
            parseInt($("#numberofinfant").val()) < parseInt($("#numberofadult").val())
        ) {
            numberinfant = parseInt($("#numberofinfant").val()) + 1;
            $("#numberofinfant").val(numberinfant);
        }
        $("#passenger").val(
            `${$("#numberofadult").val()} adults, ${$(
                "#numberofchild"
            ).val()} children, ${$("#numberofinfant").val()} infants`
        );
        numberofadultv = parseInt($("#numberofadult").val());
        numberofyouthv = $("#numberofyouth").length
            ? parseInt($("#numberofyouth").val())
            : 0;
        numberofchildv = parseInt($("#numberofchild").val());
        numberofinfantv = parseInt($("#numberofinfant").val());
    });

    //var result=route.ABJ;
    //console.log(result);

    $(document).on("change", ".fromselection", function (event) {
        // console.log(
        //     "fromselection change event.target.id=",
        //     event.target.getAttribute("rel")
        // );
        var selectTo =
            "#selectTo" +
            (event.target.getAttribute("rel") === "0"
                ? ""
                : event.target.getAttribute("rel"));
        // console.log("selectTo=", "#selectTo" + selectTo);
        $("#selectTo" + selectTo).html(
            "<option value='' disabled >Select your Destination</option>"
        );
        // console.log("flightForm.js airports airports=>", airports);
        // console.log(
        //     "flightForm.js fullDeals filtered=",
        //     fullDeals.find((x) => x.city === this.value)
        // );
        // console.log(this.value);
        append_destination_json(
            airports.filter((x) =>
                fullDeals
                    .find((x) => x.city === this.value)
                    .routes.map((x) => x.city)
                    .includes(x.iata_code)
            ),
            countries,
            selectTo
        );
    });
    $(document).on("change", "#flightstatus_departure", function (event) {
        var selectTo = "#flightstatus_arrival";
        //console.log("selectTo=", "#selectTo" + selectTo);
        $("#flightstatus_arrival").html(
            "<option value='' disabled >Select your Destination</option>"
        );
        // console.log("flightForm.js airports airports=<", airports);
        // console.log(
        //     "flightForm.js fullDeals filtered=",
        //     fullDeals.find((x) => x.city === this.value)
        // );
        append_destination_json(
            airports.filter((x) =>
                fullDeals
                    .find((x) => x.city === this.value)
                    .routes.map((x) => x.city)
                    .includes(x.iata_code)
            ),
            countries,
            selectTo
        );
    });
    $(document).on("change", "#timetable_departure", function (event) {
        var selectTo = "#timetable_arrival";
        //console.log("selectTo=", "#selectTo" + selectTo);
        $("#timetable_arrival").html(
            "<option value='' disabled >Select your Destination</option>"
        );
        // console.log("flightForm.js airports airports=>>", airports);
        // console.log(
        //     "flightForm.js fullDeals filtered=",
        //     fullDeals.find((x) => x.city === this.value)
        // );
        append_destination_json(
            airports.filter((x) =>
                fullDeals
                    .find((x) => x.city === this.value)
                    .routes.map((x) => x.city)
                    .includes(x.iata_code)
            ),
            countries,
            selectTo
        );
    });
});
$(function () {
    $(document).on('select2:open', () => {
        document.querySelector('.select2-search__field').focus();
    });
});
