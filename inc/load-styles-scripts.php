<?php

    if(!function_exists('redmoon_load_scripts_styles')):

        function redmoon_load_scripts_styles(){
            wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Felipa|Roboto+Condensed|Ubuntu', array(), '1', 'all');
            wp_register_style( 'icons', 'https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css', array(), '1', 'all' );
            wp_register_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all' );
            wp_deregister_script( 'jquery' );
            wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.3.1', true); 
            wp_register_script('core-carousel-propio', get_template_directory_uri().'/assets/js/propio-carousels.js', array('jquery'), '', true);
            wp_register_script( 'scroll-menu', get_template_directory_uri().'/assets/js/scroll-menu.js', array('jquery'), '', true );
            wp_register_script('typed', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.9', array(), '', true);
            wp_register_script('efects-theme', get_template_directory_uri(  ).'/assets/js/efects-theme.js', array('jquery'), '', true);

            wp_enqueue_style('fonts');
            wp_enqueue_style('icons');
            wp_enqueue_style('style');
            wp_enqueue_script('jquery');
            wp_enqueue_script('core-carousel-propio');
            wp_enqueue_script( 'scroll-menu' );
            wp_enqueue_script('typed');
            wp_enqueue_script('efects-theme');
        }

    endif;

    add_action('wp_enqueue_scripts', 'redmoon_load_scripts_styles');

    if(!function_exists('load_admin_scrips')):
        function load_admin_scripts(){
            wp_register_script('theme-option-script', get_template_directory_uri(  ).'/assets/js/options-theme.js', array('jquery'), '1', true);
            wp_enqueue_script('theme-option-script');
        }
    endif;

    add_action('admin_enqueue_scripts', 'load_admin_scripts');
