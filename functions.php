<?php

if ( ! function_exists('sicep_setup')){
    function sicep_setup(){
    add_theme_support("title-tag");
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

    /**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
    }
    // This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Main menu', 'primario' ),
		) );
}
add_action('after_setup_theme', 'sicep_setup');

/* include css end js */

if (! function_exists('sicep_styles_scripts')){
    function sicep_styles_scripts(){
        wp_enqueue_script('jquery');

        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'),'',true);
        wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'),'',true);
        wp_enqueue_script('new-age', get_template_directory_uri() . '/js/new-age.js', array('jquery'),'',true);


        wp_enqueue_style( 'miostyle', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.css');
        wp_enqueue_style( 'style-age', get_template_directory_uri() . '/css/new-age.css',false,'1.1','all');
        wp_enqueue_style( 'icon', get_template_directory_uri() . '/vendor/simple-line-icons/css/simple-line-icons.css',false,'1.1','all');
        wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css',false,'1.1','all');

    }
}

add_action('wp_enqueue_scripts', 'sicep_styles_scripts');



