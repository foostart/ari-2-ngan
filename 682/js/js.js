/* Slider (work in progress)
 * 03/09/2015 by Andrew Errico
 */
$(function () {

    // slider type
    $t = "imgLoaded"; // opitions are fade and slide

    //variables
    $f = 1000, // fade in/out speed
            $s = 1000, // slide transition speed (for sliding carousel)
            $d = 5000;  // duration per slide

    $n = $('.imgLoaded').length; //number of slides
    $w = $('.imgLoaded').width(); // slide width
    $c = $('.container').width(); // container width
    $ss = $n * $w; // slideshow width


    function timer() {
        $('.timer').animate({"width": $w}, $d);
        $('.timer').animate({"width": 0}, 0);
    }


    // fading function
    function fadeInOut() {
        timer();
        $i = 0;
        var setCSS = {
            'position': 'absolute',
            'top': '0',
            'left': '0'
        }

        $('.imgLoaded').css(setCSS);

        //show first item
        $('.imgLoaded').eq($i).show();


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

    }

    function slide() {
        timer();
        var setSlideCSS = {
            'float': 'left',
            'display': 'inline-block',
            'width': $c
        }
        var setSlideShowCSS = {
            'width': $ss // set width of slideshow container
        }
        $('.imgLoaded').css(setSlideCSS);
        $('.carousel-inne').css(setSlideShowCSS);


        setInterval(function () {
            timer();
            $('.carousel-inne').animate({"left": -$w}, $s, function () {
                // to create infinite loop
                $('.carousel-inne').css('left', 0).append($('.imgLoaded:first'));
            });
        }, $d);

    }

    if ($t == "fade") {
        fadeInOut();

    }
    if ($t == "imgLoaded") {
        slide();

    } else {

    }
});