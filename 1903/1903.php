<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/1903.less', 'css/1903.css');
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Module 1903</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!--        JS-->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/swiper.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/kinetic.js" type="text/javascript"></script>
        <script src="js/jquery.final-countdown.js" type="text/javascript"></script>
        <script src="js/1903.js" type="text/javascript"></script>
<!--        Css-->
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>      
        <link href="css/imagehover.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/1903.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php include '../1903/1903-content.php'; ?>
    </body>
</html>