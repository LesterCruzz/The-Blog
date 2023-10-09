<?php 

function theBlogSupport() {

register_nav_menus(array(
        'primary' => __('Primary', 'text_domain'),
        'header-menu' => __('Header Menu', 'text_domain'),
        'footer-menu' => __('Footer Menu', 'text_domain')
    ));
    

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('html5',array('search-form'));

}
add_action('after_setup_theme', 'theBlogSupport');