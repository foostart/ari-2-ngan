$(document).ready(function () {
    $('.list-post-faq li h3').on('click', function (event) {
        $('.list-post-faq li').removeClass('active');
        $(this).parent().addClass('active');
    });
});
