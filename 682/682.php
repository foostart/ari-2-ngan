<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home – STEEL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/827.less', 'css/827.css');
        ?>
        <link href="css/827.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-827">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class=" wpb_row slider-wrapper">  
                            <div class="carousel slide" data-ride="carousel">
                                <div class=" camera_wrap camera_azure_skin">
                                    <div class="camera_target">
                                        <div class="cameraCont">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="images/slider-3.jpg" class="imgLoaded">
                                                    <div class="camerarelative" ></div>
                                                    <div class=" carousel-caption">
                                                        <h1>ALL KINDS OF STEEL PRODUCTS</h1>
                                                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="images/slider-1.jpg" class="imgLoaded">
                                                    <div class="camerarelative"></div>
                                                    <div class="carousel-caption">
                                                        <h1>STEEL’S BRANDED PRODUCTS AND SOLUTIONS</h1>
                                                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="images/slider-2.jpg" class="imgLoaded">
                                                    <div class="camerarelative"></div>
                                                    <div class="carousel-caption">
                                                        <h1>OUR MAIN GOAL IS CONTINUOUSLY SATISFY OUR CLIENTS</h1>
                                                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="camera_prev" href="#carousel-example-generic" data-slide="prev"><span></span></div>
                                    <div class="camera_next" href="#carousel-example-generic" data-slide="next" ><span></span></div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                            <span><span>0</span></span>
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1">
                                            <span><span>1</span></span>
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2">
                                            <span><span>2</span></span>
                                        </li>
                                        <div class="timer"></div>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>