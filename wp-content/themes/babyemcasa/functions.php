<?php
    function babyemcasa_setup() {
        register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'babyemcasa' ),
        'secondary' => __( 'Secondary Menu', 'babyemcasa' )
        ) );

        load_theme_textdomain( 'babyemcasa', get_template_directory() . '/languages' );

        $themeSuport = array(
            'align-wide','automatic-feed-links','core-block-patterns','custom-header','custom-line-height',
            'custom-logo','customize-selective-refresh-widgets','custom-spacing','custom-units',
            'dark-editor-style','disable-custom-colors','editor-color-palette','editor-gradient-presets',            'editor-styles',
            'featured-content','html5','menus','post-formats','post-thumbnails','responsive-embeds',
            'starter-content','title-tag','wp-block-styles','widgets','widgets-block-editor'
        );

        foreach($themeSuport as $ts){
            if ($ts == 'html5'){
                add_theme_support( 'html5', array('style','script', ) );
            }
            else if($ts == 'post-formats'){
                add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
            }
            else{
                add_theme_support($ts);
            }
        }

    }

    function add_scripts(){
        wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js',array(),5,true);
        wp_enqueue_style('botstrap_css', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css',5);
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css',1);
        wp_enqueue_script('recursos',get_stylesheet_directory_uri() . '/js/recursos.js',array(),1,true);
    }
add_action('wp_enqueue_scripts','add_scripts');
add_action('after_setup_theme','babyemcasa_setup');