<?php

function brontestones_theme_support()
{
    //Add Dynamic Title Tag Support
    add_theme_support('title-tag');
    //adds custom logo upload to home
    add_theme_support('custom-logo');
    //adds post thumbnails
    add_theme_support('post-thumbnails');
    //add woocommerce support
    add_theme_support('woocommerce', array(
        "thumbnail_image_width" => 150
    ));
}

add_action('after_setup_theme', 'brontestones_theme_support');

function brontestones_menus()
{
    $locations = array(
        'primary' => "Top Nav",
        'footer' => "Footer Nav"
    );
    register_nav_menus($locations);
}

add_action('init', 'brontestones_menus');


function brontestones_register_styles()
{

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('brontestones-style', get_template_directory_uri() . "/style.css", array(
        'brontestones-bootstrap'
    ), $version, 'all');
    wp_enqueue_style('brontestones-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('brontestones-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'brontestones_register_styles');

function brontestones_register_scripts()
{
    $translation_array = array('templateUrl' => get_template_directory_uri());
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('brontestones-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    if (is_page('the-bronte-walk')) {
        wp_enqueue_script('brontestones-extra-js', get_template_directory_uri() . "/assets/js/bronte-walk.js", array('brontestones-jquery'), $version, true);
        wp_localize_script('brontestones-extra-js', 'object_name', $translation_array);
    }
    if (is_page('the-anne-walk')) {
        wp_enqueue_script('brontestones-anne-js', get_template_directory_uri() . "/assets/js/anne-walk.js", array('brontestones-jquery'), $version, true);
        wp_localize_script('brontestones-anne-js', 'object_name', $translation_array);
    }
    if (is_page('the-charlotte-walk')) {
        wp_enqueue_script('brontestones-charlotte-js', get_template_directory_uri() . "/assets/js/charlotte-walk.js", array('brontestones-jquery'), $version, true);
        wp_localize_script('brontestones-charlotte-js', 'object_name', $translation_array);
    }
    if (is_page('the-emily-walk')) {
        wp_enqueue_script('brontestones-emily-js', get_template_directory_uri() . "/assets/js/emily-walk.js", array('brontestones-jquery'), $version, true);
        wp_localize_script('brontestones-emily-js', 'object_name', $translation_array);
    }
    wp_enqueue_script('brontestones-main', get_template_directory_uri() . "/assets/js/main.js", array('brontestones-jquery'), $version, true);
    wp_enqueue_script('brontestones-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true);
    wp_enqueue_script('brontestones-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('brontestones-jquery', 'brontestones-popper'), '4.4.1', true);
}

add_action('wp_enqueue_scripts', 'brontestones_register_scripts');
