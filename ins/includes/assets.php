<?php 

function cvd_assets(){
    wp_enqueue_style('cvd-style', get_template_directory_uri() . '/css/main.css', microtime());
}
add_action('wp_enqueue_scripts', 'cvd_assets');

function wp_add_script(){
    wp_register_script('wp-script-js', get_template_directory_uri() . '/js/script.js', array(), '0.1', true);
    wp_enqueue_script( 'wp-script-js');
}
add_action('wp_enqueue_scripts', 'wp_add_script');