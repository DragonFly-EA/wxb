$(document).ready(function () {
    $('.modal-toggle').on('click', function (e) {
        e.preventDefault();
        $('.modal').toggleClass('is-visible');
    });
});


$(document).ready(function () {

    $(".mobile-menu-icon.fi-rr-bars-sort").click(function () {
        $(".hidden-mobile").slideDown();
    });


    $(".mobile-menu-icon.fi-rr-cross").click(function () {
        $(".hidden-mobile").slideUp();
    });

    $(".view-more-vacancies button").click(function () {
        $(".invisible-vacant-positions").slideToggle();
    });
});


$(".faqs .question").bind('click', function (e) {
    if (!$(this).parent("li").hasClass("content-visible")) {
        $(".faqs li").removeClass("content-visible");
        $(".faqs .desc").slideUp(200);
    }
    $(this).next('.desc').slideToggle(200).end().parent('li').toggleClass('content-visible');
    e.preventDefault();
});

// $(function() {
//     $('#file-7').checkFileType({
//         allowedExtensions: ['', ''],
//         success: function() {
//             alert('Success');
//         },
//         error: function() {
//             alert('Error');
//         }
//     });

// });

var button, list;

button = $(".dropdown-button");

list = $(".dropdown-list");

button.on("click", function () {
    list.toggle();
    return button.toggleClass("active");
});

list.children().on("click", function () {
    button.html($(this).html());
    button.css("color", "#72d2ff");
    list.toggle();
    return button.toggleClass("active");
});


window.onload = function () {
    crear_select();
}

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};


var li = new Array();

function crear_select() {
    var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
    var select_ = '';
    for (var e = 0; e < div_cont_select.length; e++) {
        div_cont_select[e].setAttribute('data-indx-select', e);
        div_cont_select[e].setAttribute('data-selec-open', 'false');
        var ul_cont = document.querySelectorAll("[data-indx-select='" + e + "'] > .cont_list_select_mate > ul");
        select_ = document.querySelectorAll("[data-indx-select='" + e + "'] >select")[0];
        if (isMobileDevice()) {
            select_.addEventListener('change', function () {
                _select_option(select_.selectedIndex, e);
            });
        }
        var select_optiones = select_.options;
        document.querySelectorAll("[data-indx-select='" + e + "']  > .selecionado_opcion ")[0].setAttribute('data-n-select', e);
        document.querySelectorAll("[data-indx-select='" + e + "']  > .icon_select_mate ")[0].setAttribute('data-n-select', e);
        for (var i = 0; i < select_optiones.length; i++) {
            li[i] = document.createElement('li');
            if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML) {
                li[i].className = 'active';
                document.querySelector("[data-indx-select='" + e + "']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
            }
            ;
            li[i].setAttribute('data-index', i);
            li[i].setAttribute('data-selec-index', e);
// funcion click al selecionar
            li[i].addEventListener('click', function () {
                _select_option(this.getAttribute('data-index'), this.getAttribute('data-selec-index'));
            });

            li[i].innerHTML = select_optiones[i].innerHTML;
            ul_cont[0].appendChild(li[i]);

        }
        ; // Fin For select_optiones
    }
    ; // fin for divs_cont_select
} // Fin Function


var cont_slc = 0;

function open_select(idx) {
    var idx1 = idx.getAttribute('data-n-select');
    var ul_cont_li = document.querySelectorAll("[data-indx-select='" + idx1 + "'] .cont_select_int > li");
    var hg = 0;
    var slect_open = document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].getAttribute('data-selec-open');
    var slect_element_open = document.querySelectorAll("[data-indx-select='" + idx1 + "'] select")[0];
    if (isMobileDevice()) {
        if (window.document.createEvent) { // All
            var evt = window.document.createEvent("MouseEvents");
            evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            slect_element_open.dispatchEvent(evt);
        } else if (slect_element_open.fireEvent) { // IE
            slect_element_open.fireEvent("onmousedown");
        } else {
            slect_element_open.click();
        }
    } else {


        for (var i = 0; i < ul_cont_li.length; i++) {
            hg += ul_cont_li[i].offsetHeight;
        }
        ;
        if (slect_open == 'false') {
            document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute('data-selec-open', 'true');
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0].style.height = hg + "px";
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style.transform = 'rotate(180deg)';
        } else {
            document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute('data-selec-open', 'false');
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
            document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0].style.height = "0px";
        }
    }

} // fin function open_select

function salir_select(indx) {
    var select_ = document.querySelectorAll("[data-indx-select='" + indx + "'] > select")[0];
    document.querySelectorAll("[data-indx-select='" + indx + "'] > .cont_list_select_mate > ul")[0].style.height = "0px";
    document.querySelector("[data-indx-select='" + indx + "'] > .icon_select_mate").style.transform = 'rotate(0deg)';
    document.querySelectorAll("[data-indx-select='" + indx + "']")[0].setAttribute('data-selec-open', 'false');
}


function _select_option(indx, selc) {
    if (isMobileDevice()) {
        selc = selc - 1;
    }
    var select_ = document.querySelectorAll("[data-indx-select='" + selc + "'] > select")[0];

    var li_s = document.querySelectorAll("[data-indx-select='" + selc + "'] .cont_select_int > li");
    var p_act = document.querySelectorAll("[data-indx-select='" + selc + "'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
    var select_optiones = document.querySelectorAll("[data-indx-select='" + selc + "'] > select > option");
    for (var i = 0; i < li_s.length; i++) {
        if (li_s[i].className == 'active') {
            li_s[i].className = '';
        }
        ;
        li_s[indx].className = 'active';

    }
    ;
    select_optiones[indx].selected = true;
    select_.selectedIndex = indx;
    select_.onchange();
    salir_select(selc);
}


$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true,   // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);

            $name.text($tab.text());

            $info.show();
        }
    });

    $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });


    //Horizontal Tab
    $('#parentHorizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });

    // Child Tab
    $('#ChildVerticalTab_1').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true,
        tabidentify: 'ver_1', // The tab groups identifier
        activetab_bg: '#fff', // background color for active tabs in this group
        inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
        active_border_color: '#c1c1c1', // border color for active tabs heads in this group
        active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
    });

    //Vertical Tab
    $('#parentVerticalTab').easyResponsiveTabs({
        type: 'vertical', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        tabidentify: 'hor_1', // The tab groups identifier
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#nested-tabInfo2');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
});


$(window).on('load', function () { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow': 'visible'});
})

$(document).ready(function () {
    $(".lang-flag").click(function () {
        $(".language-dropdown").toggleClass("open");
    });
    $("ul.lang-list li").click(function () {
        $("ul.lang-list li").removeClass("selected");
        $(this).addClass("selected");
        if ($(this).hasClass('lang-en')) {
            $(".language-dropdown").find(".lang-flag").addClass("lang-en").removeClass("lang-es").removeClass("lang-pt");
            $("#lang_selected").html("<p>EN</p>")
        } else if ($(this).hasClass('lang-pt')) {
            $(".language-dropdown").find(".lang-flag").addClass("lang-pt").removeClass("lang-es").removeClass("lang-en");
            $("#lang_selected").html("<p>PT</p>")
        } else {
            $(".language-dropdown").find(".lang-flag").addClass("lang-es").removeClass("lang-en").removeClass("lang-pt");
            $("#lang_selected").html("<p>ES</p>")
        }
        $(".language-dropdown").removeClass("open");
    });
})

$(document).ready(function () {

    $('.bxslider').bxSlider();
});


//     $(function() {
//   $('input[name="daterange"]').daterangepicker({
//     opens: 'left',
//       locale: {
//       format: 'DD/MM/YYYY'
//     },
//     autoApply: false,
//   }, function(start, end, label) {
//     console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
//   });

// });


// Animate the scroll to top
$('.go-top').click(function (event) {
    event.preventDefault();

    $('html, body').animate({scrollTop: 0}, 300);
})

window.onscroll = function () {
    //scrollFunction()

};


// Initialize AOS
AOS.init({
    duration: 1200,
})


class Details {
    constructor(el, settings) {
        this.group = el;
        this.details = this.group.getElementsByClassName("details");
        this.toggles = this.group.getElementsByClassName("details__summary");
        this.contents = this.group.getElementsByClassName("details__content");

        // Set default settings if necessary
        this.settings = Object.assign({
            speed: 300,
            one_visible: false
        }, settings);

        // Setup inital positions
        for (let i = 0; i < this.details.length; i++) {
            const detail = this.details[i];
            const toggle = this.toggles[i];
            const content = this.contents[i];

            // Set transition-duration to match JS setting
            detail.style.transitionDuration = this.settings.speed + "ms";

            // Set initial height to transition from
            if (!detail.hasAttribute("open")) {
                detail.style.height = toggle.clientHeight + "px";
            } else {
                detail.style.height = toggle.clientHeight + content.clientHeight + "px";
            }
        }

        // Setup click handler
        this.group.addEventListener("click", (e) => {
            if (e.target.classList.contains("details__summary")) {
                e.preventDefault();

                let num = 0;
                for (let i = 0; i < this.toggles.length; i++) {
                    if (this.toggles[i] === e.target) {
                        num = i;
                        break;
                    }
                }

                if (!e.target.parentNode.hasAttribute("open")) {
                    this.open(num);
                } else {
                    this.close(num);
                }
            }
        });
    }

    open(i) {
        const detail = this.details[i];
        const toggle = this.toggles[i];
        const content = this.contents[i];

        // If applicable, hide all the other details first
        if (this.settings.one_visible) {
            for (let a = 0; a < this.toggles.length; a++) {
                if (i !== a) this.close(a);
            }
        }

        // Update class
        detail.classList.remove("is-closing");

        // Get height of toggle
        const toggle_height = toggle.clientHeight;

        // Momentarily show the contents just to get the height
        detail.setAttribute("open", true);
        const content_height = content.clientHeight;
        detail.removeAttribute("open");

        // Set the correct height and let CSS transition it
        detail.style.height = toggle_height + content_height + "px";

        // Finally set the open attr
        detail.setAttribute("open", true);
    }

    close(i) {
        const detail = this.details[i];
        const toggle = this.toggles[i];

        // Update class
        detail.classList.add("is-closing");

        // Get height of toggle
        const toggle_height = toggle.clientHeight;

        // Set the height so only the toggle is visible
        detail.style.height = toggle_height + "px";

        setTimeout(() => {
            // Check if still closing
            if (detail.classList.contains("is-closing"))
                detail.removeAttribute("open");
            detail.classList.remove("is-closing");
        }, this.settings.speed);
    }
}

(() => {
    const els = document.getElementsByClassName("details-group");

    for (let i = 0; i < els.length; i++) {
        const details = new Details(els[i], {
            speed: 500,
            one_visible: true
        });
    }
})();



function searchModal() {
    var search  = document.getElementById('searches').value;
    $.ajax({
        type: "GET",
        url: "/search/results/"+search,
        success: function (response) {
            Object.keys(response).forEach(key=>{
                if(response[key].length>0)
                {
                    $("#my_search").show()
                    for(let i=0;i<response[key].length;i++)
                    {
                        try{
                            if(response[key][i].content1 !== undefined)
                            {
                                document.getElementById('search_content').innerHTML = response[key][i].content1
                            }
                            if(response[key][i].content !== undefined)
                            {
                                document.getElementById('search_content').innerHTML = response[key][i].content
                            }
                        }
                        catch (e) {
                            //console.log(e);
                        }
                    }
                }
            });
        }
    })
}


$(".desktop-main-links ul .question-link").bind('click', function(e){
    if(!$(this).parent("li").hasClass("desktop-main-links-visible")){
        $(".desktop-main-links ul li").removeClass("desktop-main-links-visible");
        $(".desktop-main-links ul .desktop-main-links-invisible").slideUp(200);
    }
    $(this).next('.desktop-main-links-invisible').slideToggle(200).end().parent('li').toggleClass('desktop-main-links-visible');
    e.preventDefault();
});







