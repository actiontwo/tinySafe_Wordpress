<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>TinySafe</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="warpper-body">
            <header>
                <section id="wrapper_header">
                    <div id="header">
                      
                        <div id="header_logo">
                            <a class="header_logo" href="<?php get_home_url() ?>">
                                <?php if (get_option('logo')) { ?>
                                    <img src="<?= get_home_url() . "/wp-content/" . get_option('logo'); ?>">
                                <?php } else { ?>
                                    <img src="<?php print IMAGES; ?>logo.png">
                                <?php } ?>
                            </a>
                        </div>
                        <?php
                        $topMenu = array(
                            'theme_location' => 'topMenu',
                            'container' => 'nav',
                            'container_id' => 'header_menu',
                            'menu_class' => '',
                            'menu' => ''
                        );
                        wp_nav_menu($topMenu);
                        ?> 
<!--                        <nav id="header_menu">
                            <ul>
                                <li><a href="#">TinySafe Revolution</a></li>
                                <li><a href="#">How If Works</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>-->
                    </div>
                </section>
                <section id="slider_imgs">
                    <div class="single_slider">
                        <figure class="img_slider"><a><img src="<?php print IMAGES; ?>main_image_1.jpg"></a></figure>
                        <div class="wrapper_content_slider">
                            <div class="content_slider">
                                <p class="first_text">Protecting your baby</p>
                                <div></div>
                                <p class="second_text">Cellular Radiation Detector</p>
                            </div>
                        </div>
                    </div>
                </section>
            </header>

