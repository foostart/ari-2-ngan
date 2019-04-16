$(function () {
    var swiper = new Swiper('.container', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.carousel-indicators',
            clickable: true,
        },
        navigation: {
            nextEl: '.camera_prevt',
            prevEl: '.camera_next',
        },
    });
});
