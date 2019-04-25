$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,

        navigation: {
            prevEl: '.swiper-button-prev',
            nextEl: '.swiper-button-next',
        },
        breakpoints: {
            767: {
                slidesPerView: 2,
                spaceBetween: 30,
            }
        }
    });
});