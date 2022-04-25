<?php

function add_css()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}
function add_menu()
{
    register_nav_menus(array(
        'header-menu' => __('Header Menu'),
    ));
}
add_action('wp_enqueue_scripts', 'add_css');
add_action('init', 'add_menu');
