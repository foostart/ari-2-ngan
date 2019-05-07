<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1915">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar-left sidebar-post">
                    <div class="sidebar-widget widget widget_text">
                        <h3 class="widget-title">FAQS</h3>			
                        <div class="textwidget">
                            <ul class="list-post-faq">
                                <li class="active">
                                    <h3>Flyout Content Area 1</h3>
                                    <p>Porem ipsum dolor sit amet, ctetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna</p>
                                </li>
                                <li>
                                    <h3>Flyout Content Area 2</h3>
                                    <p>Porem ipsum dolor sit amet, ctetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna</p>
                                </li>
                                <li>
                                    <h3>Flyout Content Area 3</h3>
                                    <p>Porem ipsum dolor sit amet, ctetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna</p>
                                </li>
                                <li>
                                    <h3>Flyout Content Area 4</h3>
                                    <p>Porem ipsum dolor sit amet, ctetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna</p>
                                </li>
                                <li>
                                    <h3>Flyout Content Area 5</h3>
                                    <p>Porem ipsum dolor sit amet, ctetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>