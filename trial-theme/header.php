<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="uk-container-large main"><!--Main Container-->

        <div class="uk-container uk-card"><!--nav container-->
            <nav class="uk-navbar-container" uk-navbar style="background: white;">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="">
                                <img src="<?php echo get_parent_theme_file_uri('assets/img/mg-logo-mobile.png')?>" alt="" class="custom-logo">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right navmenu">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active">  <a href="#">Home</a></li>
                        <li><a href="#element-about" id="about-id" uk-scroll>PRICING</a></li>
                        <li><a href="#element-contact" id="contact-id" uk-scroll>EXAMPLES</a></li>
                        <li><a href="#">WHY CHOOSE US</a></li>
                    </ul>
                    <div>
                        <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
                        <div class="uk-navbar-dropdown" 
                            uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav" 
                            style="left:999px; width: 350px;">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                    </form>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-navbar-right navmenu-bar">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#offcanvas-slide" uk-icon="menu" uk-toggle></a></li>
                    </ul>
                </div>
            </nav>
        </div><!--end nav container-->

        <div id="offcanvas-slide" uk-offcanvas="overlay: true"><!-- nav-menu for mobile device -->
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    <li class="uk-active">  <a href="#">Home</a></li>
                    <li><a href="#element-about" id="about-id" uk-scroll>PRICING</a></li>
                    <li><a href="#element-contact" id="contact-id" uk-scroll>EXAMPLES</a></li>
                    <li><a href="#">WHY CHOOSE US</a></li>
                    <li>
                        <div class="uk-margin">
                            <div class="uk-inline">
                                <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>
                                <input class="uk-input" type="text">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- end nav-menu for mobile device -->
