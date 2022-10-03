<?php

add_theme_support( 'post-thumbnails' );

 # code...
    register_nav_menus(
        array(
            'menu-header' => __( 'Main', 'main_menu' ),
        )
    );


function backpackers() {
    wp_enqueue_style( 'bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'slick', get_theme_file_uri('/assets/css/slick.css'), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'custom-css', get_theme_file_uri('/assets/css/custom-styles.css'), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'responsive-css', get_theme_file_uri('/assets/css/responsive.css'), array(), wp_get_theme()->get( 'Version' ) );

    wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/js/jquery-3.3.1.min.js' ), array(), '1.1', true );
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array(), '1.1', true );
    wp_enqueue_script( 'slick-js', get_theme_file_uri( '/assets/js/slick.min.js' ), array(), '1.1', true );
    wp_enqueue_script( 'custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array(), '1.1', true );
}

add_action( 'wp_enqueue_scripts', 'backpackers' );

define('IMG_PATH', get_template_directory_uri().'/assets/img/');




