$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#scroll").fadeIn();
        } else {
            $("#scroll").fadeOut();
        }
    });
    $("#scroll").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
});

AOS.init();

$("#slide").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
    },
});

$("#promotion").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});

$("#game_partner").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 4,
        },
        768: {
            items: 8,
        },
        1000: {
            items: 10,
        },
    },
});
