<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/509.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/509.less', 'css/509.css');
        ?>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-509">
            <div class="container">
                <div class="row">
                    <!-----------------------Begin Slide Show-------------------------------------->
                    <div class="col-md-2">           
                        <h5 class="title"><span>OUR PARTNERS // TEHNOLOGIES USED</span></h5>
                        <div class="col-md-1">
                            <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#media" class="right carousel-control">›</a>
                        </div>
                    </div>

                    <div class='col-md-9'>
                        <div class="carousel slide media-carousel" id="media">
                            <div class="carousel-inner">
                                <div class="item  active">
                                    
                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure> 

                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>

                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>

                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>
                                    
                                </div><!--Slide 1-->

                                <div class="item">
                                    <div>
                                        
                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>  

                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>

                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>

                                    <figure class="col-md-3">
                                            <a class="thumbnail" href="#"><img alt="" src="images/joomla.png"></a>
                                    </figure>
                                    </div>
                                </div><!--Slide2-->
                            </div><!--end Carousel Inner-->
                        </div>                          
                    </div>
                    <!-----------------------------End Slide Show------------------------->
                    <div class="clear"></div>
                    <!-----------------------------Begin Key Word---------------------------->
                                    <div class="keywordbox">&nbsp;just some keywords here, services or what any text you want&nbsp;</div>
                    <!----------------------------End Key Word------------------------------>
                </div>
            </div>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>