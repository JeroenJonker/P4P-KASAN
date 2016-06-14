<?php
function basketbal_resources() {
    
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'basketbal_resources');

//theme setup
function basketbal_setup() {
    //Add naviagtion menu's
    register_nav_menus(array(
        'footer' => __('Footer Menu'),
        'primary' => __('Primary Menu'),
        ));

    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120,true);
    add_image_size('banner-image', 920, 210, true);
    add_image_size('post-thumbnail', 180, 120,true);
    
    // Add post-format support
    add_theme_support('post-formats', array('gallery','video','image'));
}

function extra_setup() {
    register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'twentythirteen' ));
}

function set_container_class ($args) {
$args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}

add_filter ('wp_nav_menu_args', 'set_container_class');

add_action('after_setup_theme', 'basketbal_setup');

add_action( 'after_setup_theme', 'extra_setup' );

?>