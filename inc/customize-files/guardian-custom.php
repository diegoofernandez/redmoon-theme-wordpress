<?php 
	require_once get_template_directory().'/inc/customize-files/cabecera-custom.php';

	//CARGADOR DE ARCHIVOS CON CONFIGURACIONES CUSTOM
	function redmoon_customize_register($wp_customize){

		redmoon_logo($wp_customize);

	}
	add_action('customize_register', 'redmoon_customize_register');

?>