<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="container">
    <div class="row">
        <div class="type-1921">
            <div class="col-md-4">
                <div class="img">
                    <div class="slide-band6">
                        <div class="img2">
                            <div class="item-adv-simple">
                                <div class="item-adv-simple">
                                    <a href="#">
                                        <img src="<?php echo $url_path ?>/images/ad1-2.jpg" class="img-responsive" alt="">
                                        <h3>
                                            LG 8803
                                            <p>Aliquam tempus rutum</p>
                                            <span class="money">
                                                <span class="icon">$</span>
                                                350.00
                                            </span>
                                        </h3>
                                    </a>
                                </div>
                            </div>

                            <div class="item-adv-simple item2">
                                <div class="item-adv-simple ">
                                    <a href="#">
                                        <img src="<?php echo $url_path ?>/images/ad2-2.jpg" class="img-responsive" alt="">
                                        <h3>
                                            iPOD APPLE
                                            <p>Aliquam tempus rutum</p>
                                            <span class="money">
                                                <span class="icon">$</span>
                                                170.00
                                            </span>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>