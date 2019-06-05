$(document).ready(function () {
    if ($('.supperdeal-countdown').length > 0) {
        $(".supperdeal-countdown").TimeCircles({
            fg_width: 0.03,
            bg_width: 1.2,
            text_size: 0.07,
            circle_bg_color: "#5f6062",
            time: {
                Days: {
                    show: true,
                    text: "day",
                    color: "#c6d43a"
                },
                Hours: {
                    show: true,
                    text: "hou",
                    color: "#c6d43a"
                },
                Minutes: {
                    show: true,
                    text: "min",
                    color: "#c6d43a"
                },
                Seconds: {
                    show: true,
                    text: "sec",
                    color: "#c6d43a"
                }
            }
        });
    }
// Get the element with id="defaultOpen" and click on it
    document.getElementById("furniture").click();
    var swiper4 = new Swiper('.swiper4', {
        slidesPerView: 4,
        slidesPerColumn: 2,
        spaceBetween: 30,
        navigation: {
            nextEl: '.next1903',
            prevEl: '.prev1903',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });
    document.getElementById("fashion").click();
    var swiper3 = new Swiper('.swiper3', {
        slidesPerView: 4,
        slidesPerColumn: 2,
        spaceBetween: 30,
        navigation: {
            nextEl: '.next1903',
            prevEl: '.prev1903',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });
    document.getElementById("electronis").click();
    var swiper2 = new Swiper('.swiper2', {
        slidesPerView: 4,
        slidesPerColumn: 2,
        spaceBetween: 10,
        navigation: {
            nextEl: '.next1903',
            prevEl: '.prev1903',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
        }
    });
});
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent1903");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks1903");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}