$(document).ready(function () {
    $('.countdown').final_countdown({
        'start': 1362139200,
        'end': 1388461320,
        'now': 1387461319
    });
// Get the element with id="defaultOpen" and click on it
    document.getElementById("furniture").click();
    var swiper = new Swiper('.swiper-container-3', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            960: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        }
    });
    document.getElementById("fashion").click();
    var swiper = new Swiper('.swiper-container-2', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            960: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        }
    });
    document.getElementById("electronis").click();
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            960: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        }
    });
});
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}