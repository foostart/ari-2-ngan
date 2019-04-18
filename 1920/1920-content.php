<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1920">
    <div class="container">
        <div class="row">
            <div class="about-review">
                <div class="col-sm-12">
                    <div class="about">
                        <h2 class="tittle-default">Customer Review</h2>
                    </div>

                    <div class="customer">
                        <div class="col-sm-6">
                            <div class="review">
                                <div class="item-about-review">
                                    <div class="about-review-img">
                                        <a href="#"><img src="images/cus2.jpg"/></a>
                                    </div>
                                    <div class="about-review-info">
                                        <h3>
                                            <a href="#">Stenve Johnson</a>
                                        </h3>
                                        <p>Donec vitae sapien ut libero venenatis faucibus. 
                                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                                            Duis leo. Sed fringilla mauris consectetuer adipiscing
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="item-about-review">
                                    <div class="about-review-img">
                                        <a href="#"><img src="images/cus1.jpg"/></a>
                                    </div>
                                    <div class="about-review-info">
                                        <h3>
                                            <a href="#">Charlie McGlynn</a>
                                        </h3>
                                        <p>Donec vitae sapien ut libero venenatis faucibus. 
                                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                                            Duis leo. Sed fringilla mauris consectetuer adipiscing
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="review">
                                <div class="item-about-review">
                                    <div class="about-review-img">
                                        <a href="#"><img src="images/cus3.jpg" width="80" height="80"/></a>
                                    </div>
                                    <div class="about-review-info">
                                        <h3>
                                            <a href="#">Madison Knight</a>
                                        </h3>
                                        <p>Donec vitae sapien ut libero venenatis faucibus. 
                                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                                            Duis leo. Sed fringilla mauris consectetuer adipiscing
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="item-about-review">
                                    <div class="about-review-img">
                                        <a href="#"><img src="images/cus4.jpg"/></a>
                                    </div>
                                    <div class="about-review-info">
                                        <h3>
                                            <a href="#">Alina Rouch</a>
                                        </h3>
                                        <p>Donec vitae sapien ut libero venenatis faucibus. 
                                            Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                                            Duis leo. Sed fringilla mauris consectetuer adipiscing
                                        </p>
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