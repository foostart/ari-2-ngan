<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1904">
    <div class="container">
        <div class="row img">
            <div class="col-md-12 slide-band6">
                <div class="col-md-8 img1">
                    <div class="wrapper">
                        <div class="single-img item-adv-simple">
                            <div class="wrapper item-adv-simple">
                                <a href="#" class="img-sale">
                                    <img width="780" height="400" src="images/ad4-2.jpg" class="img-responsive">
                                </a>
                                <div class="promotion info-1">
                                    <h1>Siemens</h1>
                                    <p>Magnetom Avanto</p>
                                    <button class="button">
                                        <span>Shop Now</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 img2">
                    <div class="wrapper">
                        <div class="single-img item-adv-simple item1">
                            <div class="wrapper item-adv-simple">
                                <a href="#">
                                    <img src="images/ad5-1.jpg" class="img-responsive">
                                </a>
                            </div>

                            <div class="promotion info-2">
                                <h3>Cupcake Corer</h3>
                                <p>Commercial Cookware</p>
                                <span class="money">
                                    <span class="icon">$</span>
                                    200.00
                                </span>
                            </div>
                        </div>

                        <div class="single-img item-adv-simple item2">
                            <div class="wrapper item-adv-simple ">
                                <a href="#">
                                    <img src="images/ad6.jpg" class="img-responsive">
                                </a>
                                <div class="promotion info-3">
                                    <h3>Piece OXO</h3>
                                    <p>Holder with Tools Set</p>
                                    <span class="money">
                                        <span class="icon">$</span>
                                        80.00
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