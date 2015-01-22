<?php
ob_start();
define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('IMAGES', TEMPPATH . "/images/");
define('CSS', TEMPPATH . "/css/");
define('JS', TEMPPATH . "/js/");

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

?>

<?php

/* Add menu */
add_theme_support('nav-menus');
if (function_exists('register_nav_menus')) {
    register_nav_menus(array('topMenu' => 'Top menu'));
    register_nav_menus(array('leftBottomMenu' => 'Left footer menu'));
    register_nav_menus(array('rightBottomMenu' => 'Right footer menu'));
}
?>

<?php

//Theme options
include_once 'include/theme-options.php';
?>