$(document).ready(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop()) {
            $('nav').addClass('black').addClass('border-bottom');
        } else {
            $('nav').removeClass('black').removeClass('border-bottom');
        }
    });
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
})