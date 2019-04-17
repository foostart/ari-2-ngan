$(document).ready(function () {
    $d = 2500;
    $w = $('.imgLoaded').width();
    $i = 0;
    $n = $('.imgLoaded').length; //number of slides
    $f = 1000; // fade in/out speed

    function timer() {
        $('.timer').animate({"width": $w}, $d);
        $('.timer').animate({"width": 0}, 0);
    }

    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.carousel-indicators',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    timer();
    setInterval(function () {
        timer();
        $('.imgLoaded').eq($i).fadeOut($f);
        if ($i == $n - 1) {
            $i = 0;
        } else {
            $i++;
        }
        $('.imgLoaded').eq($i).fadeIn($f, function () {
            $('.timer').css({'width': '0'});
        });

    }, $d);
})