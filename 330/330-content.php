<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-330">
    <div class="topheader">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="headerleft">
                        <img src="images/car.png" alt=""/>
                        <p>get free! shipping on order over <span>$100</span></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="header-right">
                        <p><a href="">login</a> / <a href="">register</a></p>
                        <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    USD
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">ENG</a></li>
                                    <li><a href="#">FR</a></li>
                                    <li><a>USK</a></li>
                                </ul>
                        </div>
                        <img src="<?php echo $url_path ?>/images/flag.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

