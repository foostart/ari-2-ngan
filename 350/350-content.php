<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-350">
    <div class="container">
        <div class="row">
            <!-----------------------Begin Slide Show-------------------------------------->
            <div class="col-md-2">           
                <h5 class="title"><span>OUR PARTNERS // TEHNOLOGIES USED</span></h5>
                <div class="col-md-1 button">
                    <div class="owl-controls">
                        <div class="owl-buttons">
                            <div class="swiper-button-prev">
                                <span class="fa fa-angle-left"></span>
                            </div>
                            <div class="swiper-button-next">
                                <span class="fa fa-angle-right"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-md-9'>
                <div class="swiper-container">
                    <div class="swiper-wrapper" id="media">
                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/wordpress.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/css3.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/html5.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/themeforest.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/joomla.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/jquery.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/wordpress.png"/></a>
                        </div>

                        <div class="swiper-slide col-md-3">
                            <a class="thumbnail" href="#"><img src="images/html5.png"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-----------------------------End Slide Show------------------------->
            <div class="clear"></div>
            <!-----------------------------Begin Key Word---------------------------->
            <div class="keywordbox">&nbsp;just some keywords here, services or what any text you want&nbsp;</div>
            <!----------------------------End Key Word------------------------------>
        </div>
    </div>
</div>

