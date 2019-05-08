<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-682">
    <div class="container">
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/slider-3.jpg" class="imgLoaded">
                        <div class="camerarelative" ></div>
                        <div class=" carousel-caption">
                            <h1>ALL KINDS OF STEEL PRODUCTS</h1>
                            <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/slider-1.jpg" class="imgLoaded">
                        <div class="camerarelative"></div>
                        <div class="carousel-caption">
                            <h1>STEEL’S BRANDED PRODUCTS AND SOLUTIONS</h1>
                            <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/slider-2.jpg" class="imgLoaded">
                        <div class="camerarelative"></div>
                        <div class="carousel-caption">
                            <h1>OUR MAIN GOAL IS CONTINUOUSLY SATISFY OUR CLIENTS</h1>
                            <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                        </div>
                    </div>
                </div>

                <!-- Add Arrows -->
                    <div class="swiper-button-next next682"><i class="fa fa-angle-right" style="color: #fff; font-size: 20px;"></i></div>
                    <div class="swiper-button-prev prev682"><i class="fa fa-angle-left" style="color: #fff; font-size: 20px;"></i></div>
                <!-- Add Pagination -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                        <span></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1">
                        <span></span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2">
                        <span></span>
                    </li>
                </ol>                   
                <div class="timer"></div>              
            </div>
        </div>
    </div>
</div>
