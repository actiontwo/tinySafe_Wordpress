</div>
<footer id="footer">
    <div class="container">
        <div class="first_footer">
            <figure id="logo_footer">
                <a href='<?php get_home_url() ?>'>
                    <?php if (get_option('logo')) { ?>
                        <img src="<?= get_home_url() . "/wp-content/" . get_option('logo'); ?>">
                    <?php } else { ?>
                        <img src="<?php print IMAGES; ?>logo.png">
                    <?php } ?>
                </a>
            </figure>
            <ul id="social_icon">
                <li><a href="<?php echo get_option('facebook') ?>" target='_blank'><i class="icon-facebook"></i></a></li>
                <li><a href="<?php echo get_option('twitter') ?>" target='_blank'><i class="icon-twitter"></i></a></li>
                <li><a href="<?php echo get_option('youtube') ?>" target='_blank'><i class="icon-youtube"></i></a></li>
            </ul>
            <div id="copyright">
                <?php
                if (get_option('copyright')) {
                   echo get_option('copyright');
                } else { ?>
                    &copy; 2014 TinySafe.com<span>All rights reserved.</span>
                <?php } ?>
                
            </div>
        </div>
        <?php
        $leftBottomMenu = array(
            'theme_location' => 'leftBottomMenu',
            'container' => 'div',
            'container_class' => 'second_footer',
            'container_id' => '',
            'menu_class' => 'menu_footer',
            'menu_id' => 'first_menu_footer',
            'menu' => ''
        );
         $rightBottomMenu = array(
            'theme_location' => 'rightBottomMenu',
            'container' => 'div',
            'container_class' => 'second_footer',
            'container_id' => '',
            'menu_class' => 'menu_footer',
            'menu_id' => 'second_menu_footer',
            'menu' => ''
        );
        wp_nav_menu($leftBottomMenu);
        wp_nav_menu($rightBottomMenu);
        ?> 
<!--        <div class="second_footer">
            <ul id="first_menu_footer" class="menu_footer">
                <li><a href="#">Home</a></li>
                <li><a href="#">TinySafe Revolution</a></li>
                <li><a href="#">How TinySafe works</a></li>
                <li><a href="#">TinySafe Products</a></li>
            </ul>
        </div>
        <div class="second_footer">
            <ul id="seconde_menu_footer" class="menu_footer">
                <li><a href="#">Articles</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>-->
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>