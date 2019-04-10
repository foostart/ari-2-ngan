$(document).ready(function (e) {
    if ($('.scrollToTop').length) {
        var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('.scrollToTop').css('display', 'block')
                    } else {
                        $('.scrollToTop').css('display', 'none')
                    }
                };
        //backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('.scrollToTop').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    $('a').tooltip();

});
