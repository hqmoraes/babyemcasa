<?php
    function babyemcasa_setup() {
        add_theme_support( 'automatic-feed-links' );
        register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'babyemcasa' ),
        'secondary' => __( 'Secondary Menu', 'babyemcasa' )
        ) );

        load_theme_textdomain( 'babyemcasa', get_template_directory() . '/languages' );
            
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', ) );
        add_theme_support( 'automatic-feed-links' );
    }

    function add_scripts(){
        wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js',array(),5,true);
    }
add_action('wp_enqueue_scripts','add_scripts');
add_action('after_setup_theme','babyemcasa_setup');