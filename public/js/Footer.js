// $(".footer-title-hide").bind('click', function(e) {
//     if (!$(this).parent("div").hasClass("footer-content-show")) {
//         $("div").removeClass("footer-content-show");
//         $(".footer-content-show").slideUp(200);
//     }
//     $(this).next('.footer-content-show').slideToggle(200).end().parent('div').toggleClass('footer-content-show');
//     e.preventDefault();
// });
//     document.addEventListener("DOMContentLoaded", function() {
//     var columns = document.querySelectorAll(".footer-hide-show-bg");

//     columns.forEach(function(column) {
//         var title = column.querySelector(".footer-title-hide");
//         var content = column.querySelector(".footer-content-show");

//         title.addEventListener("click", function() {
//             if (content.classList.contains("open")) {
//                 content.classList.remove("open");
//             } else {
//                 closeOtherContents();
//                 content.classList.add("open");
//             }
//         });
//     });

//     function closeOtherContents() {
//         columns.forEach(function(column) {
//             var content = column.querySelector(".footer-content-show");
//             if (content.classList.contains("open")) {
//                 content.classList.remove("open");
//             }
//         });
//     }


//     content.slideToggle(function() {
//                     var isVisible = content.is(":open");
//                     if (isVisible) {
//                         icon.css({
//                             transform: "rotate(-180deg)",
//                             transition: "all 0.5s ease"
//                         });
//                     } else {
//                         icon.css({
//                             transform: "rotate(0deg)",
//                             transition: "all 0.5s ease"
//                         });
//                     }
//                 });
// });


$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        }
        ;
    }

    var accordion = new Accordion($('#accordion'), false);
});
// CLOSE THE COOKIE MESSAGE WHEN THE USER CLICKS ON THE "THAT'S FINE" BUTTON
document.querySelector("#cookies-btn").addEventListener("click", () => {
    document.querySelector("#cookies").style.display = "none";
// CALL THE SETCOOKIE() FUNCTION
    setCookie("cookie", true, 30);
})

// CREATES A COOKIE (EXPIRES IN 30 DAYS)
function setCookie(cName, cValue, expDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

// GRAB THE VALUE OF THE COOKIE
function getCookie(cName) {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split('; ');
    let res;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) res = val.substring(name.length);
    })
    return res;
}

// CHECK IF A COOKIE EXISTS
function cookieMessage() {
// IF A COOKIE DOESN'T EXIST THEN DISPLAY THE COOKIE MESSAGE
    if (!getCookie("cookie"))
        document.querySelector("#cookies").style.display = "block";
}

// CALL THE COOKIEMESSAGE() FUNCTION ON PAGE LOAD
window.addEventListener("load", cookieMessage);