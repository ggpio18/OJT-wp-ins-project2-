<?php

function cvd_custom_post(){
    $servicePost_label = array(
        'name'          => __('Service Post','textdomain'),
        'singular_name' => __('Service Post','textdomain'),
        'add_new'       => __('Add Service Post', 'textdomain'),
        'add_new_item'  => __('Add new Service Post', 'textdomain'),
        'edit_item'     => __('Edit Service Post', 'textdomain'),
        'all_items'     => __('Service Post', 'textdomain'),
    );

    $servicePost_args = array(
        'labels'            => $servicePost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('servicePost', $servicePost_args);
}

add_action('init', 'cvd_custom_post'); 

//projects
function cvd_custom_post2(){
    $projects_label = array(
        'name'          => __('projects','textdomain'),
        'singular_name' => __('projects','textdomain'),
        'add_new'       => __('Add projects', 'textdomain'),
        'add_new_item'  => __('Add new projects', 'textdomain'),
        'edit_item'     => __('Edit projects', 'textdomain'),
        'all_items'     => __('projects', 'textdomain'),
    );

    $projects_args = array(
        'labels'            => $projects_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('projects', $projects_args);
}

add_action('init', 'cvd_custom_post2');