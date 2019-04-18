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
        <div class="row">
            <div class="slide-band6 col-sm-8">
                <div class="wrapper">
                    <div class="single-img">
                        <figure class="wrapper item-adv-simple">
                            <a href="#" class="vc_single_image-wrapper   vc_box_border_grey">
                                <img width="780" height="400" src="images/ad4-2.jpg" class="responsive">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="wrapper">
                    <div class="single-img item-adv-simple">
                        <figure class="wrapper">
                            <a href="#">
                                <img width="370" height="190" src="images/ad5-1.jpg">
                            </a>
                        </figure>
                    </div>
                    
                    <div class="single-img item-adv-simple">
                        <figure class="wrapper">
                            <a href="#">
                                <img width="370" height="190" src="images/ad6.jpg">
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>