<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1922">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="form">
                    <div class="form-radio">
                        <h2>COMMUNITY POLL</h2>
                        <p>What is your favorite color</p>
                        <div class="radio">
                            <label class="text"><input type="radio" name="optradio">Green</label>
                        </div>
                        <div class="radio">
                            <label class="text"><input type="radio" name="optradio">Red</label>
                        </div>
                        <div class="radio">
                            <label class="text"><input type="radio" name="optradio">Black</label>
                        </div>
                        <div class="radio">
                            <label class="text"><input type="radio" name="optradio">Magenta</label>
                        </div>
                        <button>Vote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
