var tripflow = "returnTrip";
numberofadultv = 1;
numberofyouthv = 0;
numberofchildv = 0;
numberofinfantv = 0;
$(document).on("click", "#findFlights", (e) => {
    e.preventDefault();
    // console.log("delete clicked length=", $(".mltcity").length);
    selectedCountry = $("#selectedCountry").val();
    selectedLanguage = $("#selectedLanguage").val();
    selectedCurrency = $("#selectedCurrency").val();
    // console.log(
    //     "onClick errorsContent=",
    //     !$("#errorsContent").hasClass("d-none")
    // );
    // $("#errorsList").html("");
    // if (!$(".errorsContent").hasClass("d-none")) {
    //     $("#errorsContent").addClass("d-none");
    // }

    SearchBook(
        e,
        selectedCurrency,
        selectedLanguage,
        selectedCountry,
        tripflow
    );
});

function SearchBook(event, selectedCurrency, selectedLanguage, selectedCountry, selectedTripflow) {
    const airportName = $("#selectFrom").val();
    const berCode = airportName.split(',')[1].trim();
    console.log(berCode); // Output: BER

    var error = "";

    var tripflow = selectedTripflow.charAt(0).toUpperCase();
    var eventLabel = tripflow;
    console.log("tripflow=", tripflow);
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
    console.log("numberofadult=", numberofadult);

    // var focusSet = false;
    // //Start of initialization
    //
    // if (tripflow === "M") {
    //     for (i = 1; i <= 6; i++) {
    //         if (i === 1) {
    //             eventLabel = $(`#selectFrom${i}`).val() + "-" + $(`#selectTo${i}`).val();
    //         }
    //         $(form).append(
    //             `<input id="B_LOCATION_${i}" name="B_LOCATION_${i}" type="text" value="${
    //                 $(`#selectFrom${i}`).length > 0 && $(`#selectFrom${i}`) !== null
    //                     ? $(`#selectFrom${i}`).val()
    //                     : ""
    //             }"  />`
    //         );
    //         $(form).append(
    //             `<input id="E_LOCATION_${i}" name="E_LOCATION_${i}" type="text" value="${
    //                 $(`#selectTo${i}`).length > 0 && $(`#selectTo${i}`).val() !== null
    //                     ? $(`#selectTo${i}`).val()
    //                     : ""
    //             }"  />`
    //         );
    //     }
    // }
    if (tripflow === "R") {
        for (i = 1; i <= 2; i++) {
            let origin = i === 1 ? "#selectFrom" : "#selectTo";
            let destination = i === 1 ? "#selectTo" : "#selectFrom";
            if (i === 1) {
                eventLabel = $(origin).val().split(',')[1].trim() + "-" + $(destination).val().split(',')[1].trim();
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
    // if (tripflow === "O") {
    //     for (i = 1; i <= 1; i++) {
    //         let origin = i === 1 ? "#selectFrom" : "#selectTo";
    //         let destination = i === 1 ? "#selectTo" : "#selectFrom";
    //         if (i === 1) {
    //             eventLabel = $(origin).val() + "-" + $(destination).val();
    //         }
    //         $(form).append(
    //             `<input id="B_LOCATION_${i}" name="B_LOCATION_${i}" type="text" value="${
    //                 $(origin).length > 0 && $(`#selectFrom${i}`) !== null
    //                     ? $(origin).val()
    //                     : ""
    //             }"  />`
    //         );
    //         $(form).append(
    //             `<input id="E_LOCATION_${i}" name="E_LOCATION_${i}" type="text" value="${
    //                 $(destination).length > 0 && $(destination).val() !== null
    //                     ? $(destination).val()
    //                     : ""
    //             }"  />`
    //         );
    //     }
    // }
    //
    // if (tripflow === "M") {
    //     for (i = 1; i <= 6; i++) {
    //         $(form).append(
    //             `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
    //                 $(`#departDate${i}`).length > 0
    //                     ? $(`#departDate${i}`).datepicker("getDate") !== null
    //                         ? moment($(`#departDate${i}`).datepicker("getDate")).format(
    //                         "YYYYMMDD"
    //                     ) + "0000"
    //                         : ""
    //                     : ""
    //             }"  />`
    //         );
    //     }
    // }
    if (tripflow === "R") {
        for (i = 1; i <= 2; i++) {
            let date = i === 1 ? "#DepartDate" : "#ArrivalDate";
            var dateString = $(date).val();
            var selectedDate = moment($.datepicker.parseDate("dd M yy", dateString)).format("YYYYMMDD");
            $(form).append(
                `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
                    $(date).length > 0
                        ? $(date).datepicker("getDate") !== null
                            ? moment(selectedDate).format("YYYYMMDD") +
                            "0000"
                            : ""
                        : ""
                }"  />`
            );
        }
    }
    // if (tripflow === "O") {
    //     for (i = 1; i <= 1; i++) {
    //         let date = "#DepartDate";
    //         $(form).append(
    //             `<input id="B_DATE_${i}" name="B_DATE_${i}" type="text" value="${
    //                 $(date).length > 0
    //                     ? $(date).val() !== null
    //                         ? moment($(date).datepicker("getDate")).format("YYYYMMDD") +
    //                         "0000"
    //                         : ""
    //                     : ""
    //             }"  />`
    //         );
    //     }
    // }
    //
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
        console.log("#numberofyouthtmp=" + numberofyouthtmp);
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
        console.log("#numberofchildtmp=" + numberofchildtmp);
        $(form).find(`#TRAVELLER_TYPE_${numberofchildtmp}`).val("CHD");

        numberofchild = numberofchild - 1;
    }
    numberofchild = parseInt($("#numberofchild").val());
    console.log("numberofchild=", numberofchild)
    numberofinfanttmp = numberofadult + numberofchild;
    //console.log("#numberofinfanttmp:"+numberofinfanttmp);

    //numberofinfant = parseInt($("#numberofinfant").val());
    console.log("numberofinfant=", numberofinfant)
    numberofinfanttmp = numberofinfant;
    //console.log(5);
    if (numberofinfanttmp === 0) {
        $(form).append(
            `<input id="HAS_INFANT_1" name="HAS_INFANT_1" type="text" value="FALSE"  />`
        );
    }
    console.log("numberofinfanttmp=", numberofinfanttmp)
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
    console.log("param=", param);

    if (tripflow === "M") {
        let totalDestination = $(".mltcity").length;

        for (i = 1; i <= totalDestination; i++) {
            console.log(
                `loop condition B_LOCATION_${i}=`,
                $(form).find(`#B_LOCATION_${i}`).length
                    ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
                    $(form).find(`#B_LOCATION_${i}`).val().length === 0
                    : true
            );
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
            console.log("trip flow origin=", origin);
            console.log("trip flow date=", date);
            console.log("trip flow=", $(date).datepicker("getDate"));
            let destination = i === 1 ? "#selectTo" : "#selectFrom";
            console.log(
                `loop condition B_LOCATION_${i}=`,
                $(form).find(`#B_LOCATION_${i}`).length
                    ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
                    $(form).find(`#B_LOCATION_${i}`).val().length === 0
                    : true
            );
            if (
                $(form).find(`#B_LOCATION_${i}`).length
                    ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
                    $(form).find(`#B_LOCATION_${i}`).val() === "null" ||
                    $(form).find(`#B_LOCATION_${i}`).val().length === 0
                    : true
            ) {
                console.log("$(origin)=", $(origin));
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
            console.log(
                `loop condition B_LOCATION_${i}=`,
                $(form).find(`#B_LOCATION_${i}`).length
                    ? $(form).find(`#B_LOCATION_${i}`).val() === null ||
                    $(form).find(`#B_LOCATION_${i}`).val().length === 0
                    : true
            );
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
    console.log("param=", param);
    console.log("focusSet=", focusSet);
    console.log(error);
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


    // if ($("#possibleRedemption").val().trim() == "true") {
    //
    //
    //     $('#milemessage').html(`You have enough miles (${new Intl.NumberFormat().format($("#awardMiles").val())}) to  book a Flight!<br>Do you want to pay with Miles?`);
    //
    //     console.log("buttonsearchbookId clicked!");
    //     var modalConfirm = function (callback) {
    //
    //
    //         $("#mi-modal").modal('show');
    //
    //
    //         $("#modal-btn-ok").on("click", function () {
    //             callback(true);
    //             $("#mi-modal").modal('hide');
    //         });
    //
    //         $("#modal-btn-no").on("click", function () {
    //             callback(false);
    //             $("#mi-modal").modal('hide');
    //         });
    //     }
    //
    //
    //     return modalConfirm(function (confirm) {
    //         if (confirm) {
    //
    //             console.log("OK confirmed");
    //             $(form).append(
    //                 `<input id="IS_REDEMPTION" name="IS_REDEMPTION" type="text" value="TRUE"
	// 		).val()}  />`
    //             );
    //             $(event.target)
    //                 .html(
    //                     '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
    //                 )
    //                 .attr("disabled", true);
    //
    //
    //             return $(form).appendTo("body").submit();
    //
    //         } else {
    //             $(form).append(
    //                 `<input id="IS_REDEMPTION" name="IS_REDEMPTION" type="text" value="FALSE"
	// 		).val()}  />`
    //             );
    //             $(event.target)
    //                 .html(
    //                     '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
    //                 )
    //                 .attr("disabled", true);
    //
    //
    //             return $(form).appendTo("body").submit();
    //         }
    //     });
    // }
    $(event.target)
        .html(
            '<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>Loading...'
        )
        .attr("disabled", true);
    console.log('gtag');
    console.log(gtag);
    gtag('event', `Tripflow ${tripflow} Form`, {
        'event_category': eventLabel,
        'event_label': 'Search',
    });


    return $(form).appendTo("body").submit();
}
