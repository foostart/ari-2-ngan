<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1903">
    <div class="container">
        <div class="supperdeal-deal6">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="supperdeal-sidebar">
                        <div class="supperdeal-header">
                            <h2>SUPER DEALS</h2>
                            <span>UP TO 30% OFF</span>
                        </div>
                        <div class="supperdeal-tab">
                            <div class="tab">
                                <button class="tablinks active" onclick="openCity(event, 'Electronis')" id="electronis" >Electronis</button>
                                <button class="tablinks active" onclick="openCity(event, 'Fashion')" id="fashion">Fashion</button>
                                <button class="tablinks active" onclick="openCity(event, 'Furniture')" id="furniture">Furniture</button>
                            </div>
                        </div>
                        <div class="supperdeal-countdown">
                            <div class="countdown">
                                <div class="clock">
                                    <div class="clock-item clock-days countdown-time-value">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-days" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-days type-time">day</p>
                                                </div><!-- /.text -->
                                            </div><!-- /.inner -->
                                        </div><!-- /.wrap -->
                                    </div><!-- /.clock-item -->
                                    <div class="clock-item clock-hours countdown-time-value">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-hours" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-hours type-time">hou</p>
                                                </div><!-- /.text -->
                                            </div><!-- /.inner -->
                                        </div><!-- /.wrap -->
                                    </div><!-- /.clock-item -->
                                    <div class="clock-item clock-minutes countdown-time-value">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-minutes" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-minutes type-time">min</p>
                                                </div><!-- /.text -->
                                            </div><!-- /.inner -->
                                        </div><!-- /.wrap -->
                                    </div><!-- /.clock-item -->
                                    <div class="clock-item clock-seconds countdown-time-value">
                                        <div class="wrap">
                                            <div class="inner">
                                                <div id="canvas-seconds" class="clock-canvas"></div>
                                                <div class="text">
                                                    <p class="val">0</p>
                                                    <p class="type-seconds type-time">sec</p>
                                                </div><!-- /.text -->
                                            </div><!-- /.inner -->
                                        </div><!-- /.wrap -->
                                    </div><!-- /.clock-item -->
                                </div><!-- /.clock -->
                            </div>
                        </div>
                        <div class="item-adv-simple adv-home6">
                            <a href="#">
                                <img width="230" height="260" src="images/ad3-2.jpg" class="attachment-full size-full" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12 product">
                    <div class="row products">
                        <div id="Electronis" class="tabcontent">
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
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/10-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/0-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Macbook Air</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$899.00</span>
                                                            <span class="old_price">$968.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/2-2-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/3-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Backberry Passpost</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$646.00</span>
                                                            <span class="old_price">$686.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/7-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Macbook</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$866.00</span>
                                                            <span class="old_price">$889.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/3-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Sony Z5 Premium</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$620.00</span>
                                                            <span class="old_price">$648.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Asus 550a</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$486.00</span>
                                                            <span class="old_price">$512.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/5-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/9-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Galaxy S VII</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$567.00</span>
                                                            <span class="old_price">$688.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">          
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/0-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/3-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Dell Inspiron 15</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$226.00</span>
                                                            <span class="old_price">$234.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/12-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Macbook Air</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$899.00</span>
                                                            <span class="old_price">$968.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">         
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/0-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">BB Passport</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$646.00</span>
                                                            <span class="old_price">$686.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/7-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Macbook</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$866.00</span>
                                                            <span class="old_price">$889.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/10-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/3-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Macbook</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$866.00</span>
                                                            <span class="old_price">$889.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/7-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Sony Z5 Premium</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$620.00</span>
                                                            <span class="old_price">$648.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">        
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/7-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Asus 550a</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$486.00</span>
                                                            <span class="old_price">$512.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/5-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/9-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Galaxy S VII</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$567.00</span>
                                                            <span class="old_price">$688.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Fashion" class="tabcontent">
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
                            <div class="swiper-container-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/10.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Lacoste Sport</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$289.00</span>
                                                            <span class="old_price">$322.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/15-1-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/16-1-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">T-Shirt Sport</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$233.00</span>
                                                            <span class="old_price">$342.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/4-300x360.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/1-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Fashion Mangto</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$68.00</span>
                                                            <span class="old_price">$86.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/1-300x360.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/4-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Women's Woolen</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$386.00</span>
                                                            <span class="old_price">$421.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/10.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Men's Woolen</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$312.00</span>
                                                            <span class="old_price">$325.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/11-300x360.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Bag Goodsol model</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$289.00</span>
                                                            <span class="old_price">$323.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">          
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/3-300x360.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/1-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Fashion Mangto</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$75.00</span>
                                                            <span class="old_price">$95.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/4-300x360.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/1-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Women's Woolen</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$386.00</span>
                                                            <span class="old_price">$421.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/10.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Men's Woolen</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$312.00</span>
                                                            <span class="old_price">$325.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/11-300x360.png" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.png" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Bag Goodsol model</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$289.00</span>
                                                            <span class="old_price">$323.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Furniture" class="tabcontent">
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
                            <div class="swiper-container-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/6-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Hedgehogs</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$112.00</span>
                                                            <span class="old_price">$126.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/7-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/9-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Lipzor Light</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$187.00</span>
                                                            <span class="old_price">$234.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Pok Chair Classicle</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$245.00</span>
                                                            <span class="old_price">$466.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/9-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Light Classic</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$52.00</span>
                                                            <span class="old_price">$58.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/10-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/6-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Hedgehogs multicolor</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$244.00</span>
                                                            <span class="old_price">$288.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/6-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Hedgehogs multicolor</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$112.00</span>
                                                            <span class="old_price">$126.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">          
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/9-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/7-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Lipzor Light</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$187.00</span>
                                                            <span class="old_price">$234.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Chair Classicle</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$245.00</span>
                                                            <span class="old_price">$466.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/8-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/10-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Pok Chair Classicle</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$245.00</span>
                                                            <span class="old_price">$466.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <figure class="imghvr-push-up">
                                                    <img src="images/9-300x360.jpg" alt="#">
                                                    <figcaption class="image-hover">
                                                        <img src="images/8-300x360.jpg" alt="#">
                                                        <div class="bor_img">
                                                            <div class="like">
                                                                <a href="#">
                                                                    <div class="search">
                                                                        <i class="fa fa-heart"></i>
                                                                        <i class="fa fa-toggle-on"></i>
                                                                        <i class="fa fa-search"></i>
                                                                    </div>
                                                                </a>
                                                                <a href="#">
                                                                    <div class="cart">
                                                                        <i class="fa fa-shopping-basket"></i> Add to cart
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                                <!-- texxt -->
                                                <div class="product-info">
                                                    <h3 class="title-product">
                                                        <a href="#">Light Classic</a>
                                                    </h3>
                                                    <div class="info-price">
                                                        <span class="Price-amount">
                                                            <span class="new_price">$52.00</span>
                                                            <span class="old_price">$58.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
