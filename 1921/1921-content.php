<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1921">
    <div class="container">
        <div class="row img">
            <div class="col-md-12 slide-band6">
                <div class="col-md-8 img1">
                </div>
                <div class="col-md-4 img2">
                    <div class="wrapper">
                        <div class="single-img item-adv-simple item1">
                            <div class="wrapper item-adv-simple">
                                <a href="#">
                                    <img src="images/ad1-2.jpg" class="img-responsive">
                                </a>
                            </div>

                            <div class="promotion info-2">
                                <h3>LG 8803</h3>
                                <p>Aliquam tempus rutum</p>
                                <span class="money">
                                    <span class="icon">$</span>
                                    350.00
                                </span>
                            </div>
                        </div>

                        <div class="single-img item-adv-simple item2">
                            <div class="wrapper item-adv-simple ">
                                <a href="#">
                                    <img src="images/ad2-2.jpg" class="img-responsive">
                                </a>
                                <div class="promotion info-3">
                                    <h3>iPOD APPLE</h3>
                                    <p>Aliquam tempus rutum</p>
                                    <span class="money">
                                        <span class="icon">$</span>
                                        170.00
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