<?php

//Include the enqueue header CSS
function wp_developer_theme_styles(){
    wp_enqueue_style( 'styles-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    wp_enqueue_style( 'styles-bxslider',  get_template_directory_uri() . 'assets/css/jquerybxslider.css');
    wp_enqueue_style( 'styles-theme',  get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'wp_developer_theme_styles' );

//Include the enqueue footer SCRIPTS
function wp_developer_theme_scripts(){
    wp_enqueue_script( 'bootstrap-script','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js','','',true);
    wp_enqueue_script('bxslider', get_template_directory_uri() . 'assets/js/jquerybxslider.js', '', '',true);
    wp_enqueue_script('main', get_template_directory_uri() . 'assets/js/main.js', '', '',true);
}
add_action( 'wp_enqueue_scripts', 'wp_developer_theme_scripts' );
