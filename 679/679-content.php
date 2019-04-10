<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-679">
    <header id="lms_header">
        <div class="lms_header_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lms_any_que_wrapper">
                            <p>Have any question?</p>
                            <div class="lms_mobile">
                                <i class="fa fa-phone"></i>
                                <span >(00) 123 456 789</span>
                            </div>
                            <div class="lms_email"><i class="fa fa-envelope"></i>
                                <a href="#">info@lms.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="lms_login_wrapper">
                            <ul>
                                <li> <a href="#" title="Register">Register </a></li>  
                                <li> <a href="#" title="Register">Login </a></li>                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container"> -->
            <div class="container logo_container">
                <h1 class="logo"> 
                    <a> <img alt="Porto" data-sticky-width="82" data-sticky-height="40" src="images/logo.png"> </a>
                </h1>
                <button class="lms_menu_toggle" data-toggle="collapse" data-target=".nav-main-collapse"><i class="fa fa-bars"></i></button> 

            </div>

            <!-- </div> -->
            <div class="navbar-collapse nav-main-collapse collapse navigation_menu">
                <div class="container mega_menu_container">
                    <nav class="nav-main mega-menu">
                        <ul id="mainMenu" class="nav navbar nav-pills nav-main">
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle" data-toggle="dropdown">Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">residential space</a></li>
                                    <li><a href="#">comercial space</a></li>
                                    <li><a href="#">office space</a></li>
                                    <li><a href="#">charges</a></li>         
                                </ul>
                            </li>
                            <li class="dropdown main_item mega_menu_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle active">Courses</a>
                            </li>
                            <li class="dropdown main_item  main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Element</a>
                            </li>
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Blog</a>
                            </li>
                            <li class="dropdown main_item main_item_click">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Pages</a>
                            </li>
                            <li class="dropdown main_item">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">About</a>
                            </li>
                            <li class="dropdown main_item">
                                <a href="#" class="dropdown-toggle par_dropdown_toggle">Contact Us</a>
                            </li>
                        </ul>

                    </nav>
                    <div class="lms_search_toggle" onclick="openSearch()" >
                        <a class="fa fa-search"></a>
                    </div>
                    <div class="lms_search_wrapper" id="my_search_box" style="display: none"> 
                        <form method="get" action="#">
                            <input type="search" value="" placeholder="Search..." name="s" id="cs" class="form-control">
                        </form> 
                    </div>
                </div>
            </div>
            <div style="clear: both;"></div>
        </header>

        <div class="lms_page_title">
            <div class="lms_page_title_bg" data-stellar-vertical-offset="-150" data-stellar-background-ratio="" style="">
                <div class="lms_page_title_bg_overlay">
                    <div class="container">
                        <div class="lms_title">Fundamentals of Project Management</div>
                        <div class="pull-right">
                            <ol class="breadcrumb">
                                <li><a>Home</a></li>
                                <li><a>lp_course</a></li>
                                <li>Fundamentals of Project Management</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>What is Lorem Ipsum?</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-md-6">
                <h3>Why do we use it?</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class="col-md-6">
                <h3>Where does it come from?</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>
            <div class="col-md-6">
                <h3>Where can I get some?</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
            <div class="col-md-6">
                <h3>What is Lorem Ipsum?</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-md-6">
                <h3>Why do we use it?</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class="col-md-6">
                <h3>Where does it come from?</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>
            <div class="col-md-6">
                <h3>Where can I get some?</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
        </div>
    </div>