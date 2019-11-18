<?php
// enable custom menus
add_theme_support('menus'); // tells wordpress that we can use custom menus in our website

// hooking css
function theme_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css'); // normalize stylesheet
    wp_enqueue_style('grid', get_template_directory_uri() . '/css/grid.css'); // grid stylesheet
    wp_enqueue_style('googlefonts', 'http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic'); // google fonts
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css'); // main stylesheet
    wp_enqueue_style('webfonts', get_template_directory_uri() . '/css/webfonts/ss-social.css'); // social icons stylesheet

    wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css'); // load flex slide in homepage only
    if( is_page( 'home' ) ){
        wp_enqueue_style( 'flexslider' );
    }
    wp_enqueue_script('main',get_template_directory_uri() . '/js/theme.js', array( 'jquery' ), '', true );
}

// hooking js
function theme_js(){
    wp_register_script('flexslider', get_template_directory_uri() . '/js/flexslider.js', array('jquery'), '', true);
    if( is_page ( 'home' ) ){
        wp_enqueue_script('flexslider');
    }
}
add_action('wp_enqueue_scripts', 'theme_js');
add_action('wp_enqueue_scripts', 'theme_styles');