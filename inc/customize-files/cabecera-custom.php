<?php 

	//logo customize
	function redmoon_logo($wp_customize){

		$wp_customize->add_panel('redmoon_header_customize', array(

			'priority' => 10,
			'capability' => 'edit_theme_options',
			'title' => __('Header Red Moon custom', 'redmoon'),
			'description' => __('Modifica y personaliza el header de la web', 'redmoon')

		));


		//seccion para especificar si el logo será una imagen o un texto
		$wp_customize->add_section('redmoon_imagen_texto', array(

			'title' => __('Define si quieres texto o imagen', 'redmoon'),
			'description' => __('Definiendo estas opciones, el diseño se comportará mejor', 'redmoon'),
			'panel' => 'redmoon_header_customize',
			'capability' => 'edit_theme_options'

		));

		$wp_customize->add_setting('texto_imagen_logo', array(

			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', 
			'sanitize_callback' => 'sanitize_text_field'

		));

		$wp_customize->add_control('texto_imagen_logo', array(
			'type' => 'text',
			'section' => 'redmoon_imagen_texto',
			'label' => 'Logo texto o imagen',
			'description' => 'Ingrese el número 1 si va a utilizar una imagen, el número 2 si va a utilizar texto'
		));

		//LOGO EN TEXTO O EN IMAGEN
		$wp_customize->add_setting('redmoon_logo_texto', array(

			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', 
			'sanitize_callback' => 'sanitize_text_field'

		));
		$wp_customize->add_control('redmoon_logo_texto', array(
			'type' => 'text',
			'section' => 'redmoon_imagen_texto',
			'label' => 'Logo',
			'description' => 'Escribe el texto que se mostrará como logo de la web'
		));
		$wp_customize->add_setting('redmoon_logo_imagen', array(

			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', 
			'sanitize_callback' => 'esc_url_raw'

		));
		$wp_customize->add_control('redmoon_logo_imagen', array(
			'type' => 'url',
			'section' => 'redmoon_imagen_texto',
			'label' => 'Imagen logo',
			'description' => 'Selecciona la imagen que quieres como logo'
		));

	}


	//background cabecera customize
	function redmoon_bg_header($wp_customize){

		$wp_customize->add_section('redmoon_bg_cabecera_section', array(

			'title' => __('Define la imagen que deseas de fondo', 'redmoon'),
			'description' => __('Definiendo estas opciones, el diseño se comportará mejor', 'redmoon'),
			'panel' => 'redmoon_header_customize',
			'capability' => 'edit_theme_options'

		));
		$wp_customize->add_setting('redmoon_bg_header_url_setting', array(

			'type' => 'theme_mod',
			'capability' => 'edit_theme_options',
			'transport' => 'refresh', 
			'sanitize_callback' => 'esc_url_raw'

		));
		$wp_customize->add_control('redmoon_bg_header_url_setting', array(
			'type' => 'text',
			'section' => 'redmoon_bg_cabecera_section',
			'label' => 'Background header',
			'description' => 'Ingresa el url de la imagen que quieres como fondo'
		));

	}
?>