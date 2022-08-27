<?php 
/**
 * Red Moon functions and definitions
 * 
 * @package Red Moon Portfolio
 * @since Red Moon Portfolio 1.0.0
 * @version 1.0.0
 */

 //setup del tema
 if(!function_exists('redmoon_setup')):
    function redmoon_setup(){

        //cargando nombre de dominio del tema
        load_theme_textdomain( 'redmoon', get_template_directory(  ).'/languages' ); 

        //Feed automático
        add_theme_support('automatic-feed-links'); 

        //Thumbnails
        add_theme_support( 'post-thumbnails' ); 

        //opciones d post's
        add_theme_support( 'post-formats', array('aside', 'gallery', 'quote', 'image', 'video') );

        //registramos los distintos menus
        register_nav_menus( array(
            'main_menu'            => __('Menú principal', 'redmoon'),
            'responsive_main_menu' => __('Responsive Menú', 'redmoon'),
            'social_header'        => __('Social Cabecera', 'redmoon'),
            'footer_social'        => __('Social Pie de Página', 'redmoon')
        ) );

        require_once get_template_directory(  ).'/inc/theme-options/setup-options-theme.php';
        setup_options_theme();

    }
 endif;

 add_action( 'after_setup_theme', 'redmoon_setup' ); 

 //remove [...]
 function removePuntos($text){
     return '...';
 }
 add_filter('excerpt_more', 'removePuntos');


 //requires 
 //carga de estilos para el frontend
 require_once get_template_directory(  ).'/inc/load-styles-scripts.php';

 //carga de theme options
 require_once get_template_directory(  ).'/inc/theme-options/main-options.php';

 //carga de CUSTOMIZER's
 require_once get_template_directory(  ).'/inc/customize-files/guardian-custom.php';


