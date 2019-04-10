
function openSearch() {
   document.getElementById("my_search_box").classList.toggle("show");
}

function changePosition(){
     if ($('#lms_header').length) {
       var scrollTrigger = 45, // px
            changePos = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#lms_header').css('position','fixed')
                } else {
                     $('#lms_header').css('position','absolute')
                }
            };
        changePos();
        $(window).on('scroll', function () {
            changePos();
        });
    }
}

function clipHeader(){
     if ($('.logo_container').length) {
        var scrollTrigger = 45, // px
            clip = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#lms_header').css('background','#1a1a1a');
                    $('.logo').css('padding','8px 0');
                    $('.par_dropdown_toggle').css('padding','30px 18px');
                    $('.lms_search_toggle').css('top','55px');

                } else {
                    $('#lms_header').css('background','rgba(255,255,255,0.1)');
                    $('.logo').css('padding','25px 0');
                    $('.par_dropdown_toggle').css('padding','50px 18px');
                    $('.lms_search_toggle').css('top','74px');
                }
            };
        clip();
        $(window).on('scroll', function () {
            clip();
        });
    }
}

function clickOpenMenu(){
    $('.main_item_click').click(function(e) {

            if (!$('.show_submenu').length) {
                 $(this).addClass('show_submenu');
            }else{
                $(this).removeClass('show_submenu');
            }
       
        });
}

$(document).ready(function(e){

		clickOpenMenu();
        changePosition();
        clipHeader();
});