<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-335">
    <div class="container">
        <div class="row">
            <div class="progess">
                <h2>    
                    Skills & Progress Bar
                </h2>
            </div>
            <div class="small">
                <h3>Small Style</h3>
            </div>
            <div class="skillbar" data-percent="70%">
                <div class="skillbar-title">Photoshop</div>
                <div class="skillbar-bar photoshop"></div>
            </div>

            <div class="skillbar" data-percent="85%">
                <div class="skillbar-title">Illustrator
                </div>
                <div class="skillbar-bar iilus"></div>
            </div>

            <div class="skillbar" data-percent="55%">
                <div class="skillbar-title">HTML/CSS</div>
                <div class="skillbar-bar ht"></div>
            </div>

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <span class="glyphicon glyphicon-plus"></span>
                                Get the code
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>[gdlr_skill_bar percent="70" size="small" text_color="#333333" background_color="#e9e9e9" </p>
                            <p>progress_color="#a9e16e"]Photoshop[/gdlr_skill_bar]</p>
                            <p>[gdlr_skill_bar percent="85" size="small" text_color="#333333" background_color="#e9e9e9" </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>