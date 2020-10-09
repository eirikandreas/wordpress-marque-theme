$(document).ready(function () {


    $(window).scroll(function () {
        if ($(this).scrollTop())  {
            $('.marque-scroll-top').fadeIn();
        } else {
            $('.marque-scroll-top').fadeOut();
        }
    });

    $(window).width(function () {
        if($(this).width() < 500) {
            $('.marque-scroll-top').fadeOut(); 
        }
    })

    $('.marque-scroll-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });



});