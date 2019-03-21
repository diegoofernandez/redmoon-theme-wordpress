<?php 

    function setup_options_theme(){

        //estilos generales
        if(!get_option('color-fuente-con-fondo')){
            update_option( 'color-fuente-con-fondo', '#fff' );
        }
        if(!get_option('color-fuente-sin-fondo')){
            update_option('color-fuente-sin-fondo', '#222');
        }
        if(!get_option('tipografia-principal')){
            update_option('tipografia-principal', 'Ubuntu');
        }
        if(!get_option('tipografia-secundaria')){
            update_option('tipografia-secundaria', 'Roboto Condensed');
        }
        if(!get_option('color-principal')){
            update_option('color-principal', '#ee5253');
        }

        //header contenido
        if(!get_option('titulo-header')){
            update_option('titulo-header', 'Yo soy "Diseñador Programador Full Stack"');
        }
        if(!get_option('parrafo-header')){
            update_option('parrafo-header', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
        }
        if(!get_option('imagen-header')){
            update_option('imagen-header', '');
        }

        //contacto seccion
        if(!get_option('background-contacto') && !defined(get_option('background-contacto'))){
            update_option('background-contacto', '');
        }
        if(!get_option('titulo-contacto')){
            update_option('titulo-contacto', 'Contacto');
        }
        if(!get_option('parrafo-contacto')){
            update_option('parrafo-contacto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
        }
        if(!get_option('direccion-contacto')){
            update_option('direccion-contacto', 'Av. Transilvania 078');
        }
        if(!get_option('telefono-contacto')){
            update_option('telefono-contacto', '549 3462 555555');
        }
        if(!get_option('email-contacto')){
            update_option('email-contacto', 'info@misitio.com');
        }

        //social menu
        if(!get_option('link-facebook')){
            update_option('link-facebook', 'https://facebook.com');
        }
        if(!get_option('link-twitter')){
            update_option('link-twitter', 'https://twitter.com');
        }
        if(!get_option('link-instagram')){
            update_option('link-instagram', 'https://instagram.com');
        }
        if(!get_option('link-linkedin')){
            update_option('link-linkedin', 'https://linkedin.com');
        }
        if(!get_option('link-youtube') && get_option('link-youtube') != ''){
            update_option('link-youtube', 'https://youtube.com');
        }

        //footer text
        if(!get_option('texto-footer')){
            update_option('texto-footer', 'Derechos reservados 2019 © Red Moon | Diego A. Fernandez');
        }
        //fondo footer
        if(!get_option('background-footer') && !defined(get_option('background-footer'))){
            update_option('background-footer', '');
        }

        //sobre mi
        if(!get_option('titulo-sobreMi') && !defined(get_option('titulo-sobreMi'))){
            update_option('titulo-sobreMi', '¡Hola! ¿Quieres saber de mi?');
        }
        if(!get_option('imagen-perfil-sobreMi') && !defined(get_option('imagen-perfil-sobreMi'))){
            update_option('imagen-perfil-sobreMi', ''); 
        }
        if(!get_option('parrafo-sobreMi') && !defined(get_option('parrafo-sobreMi'))){
            update_option('parrafo-sobreMi', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.');
        }
        if(!get_option('skill-one-sobreMi') && !defined(get_option('skill-one-sobreMi'))){
            update_option('skill-one-sobreMi', 10);
        }
        if(!get_option('skill-one-categoria-sobreMi') && !defined(get_option('skill-one-categoria-sobreMi'))){
            update_option('skill-one-categoria-sobreMi', 'HTML');
        }
        if(!get_option('skill-two-sobreMi') && !defined(get_option('skill-two-sobreMi'))){
            update_option('skill-two-sobreMi', 51);
        }
        if(!get_option('skill-two-categoria-sobreMi') && !defined(get_option('skill-two-categoria-sobreMi'))){
            update_option('skill-two-categoria-sobreMi', 'CSS');
        }
        if(!get_option('skill-three-sobreMi') && !defined(get_option('skill-three-sobreMi'))){
            update_option('skill-three-sobreMi', 21);
        }
        if(!get_option('skill-three-categoria-sobreMi') && !defined(get_option('skill-three-categoria-sobreMi'))){
            update_option('skill-three-categoria-sobreMi', 'JAVASCRIPT');
        }
        if(!get_option('skill-four-sobreMi') && !defined(get_option('skill-four-sobreMi'))){
            update_option('skill-four-sobreMi', 78);
        }
        if(!get_option('skill-four-categoria-sobreMi') && !defined(get_option('skill-four-categoria-sobreMi'))){
            update_option('skill-four-categoria-sobreMi', 'PHP');
        }
        if(!get_option('skill-five-sobreMi') && !defined(get_option('skill-five-sobreMi'))){
            update_option('skill-five-sobreMi', 100);
        }
        if(!get_option('skill-five-categoria-sobreMi') && !defined(get_option('skill-five-categoria-sobreMi'))){
            update_option('skill-five-categoria-sobreMi', 'MYSQL');
        }
        if(!get_option('skill-six-sobreMi') && !defined(get_option('skill-six-sobreMi'))){
            update_option('skill-six-sobreMi', 50);
        }
        if(!get_option('skill-six-categoria-sobreMi') && !defined(get_option('skill-six-categoria-sobreMi'))){
            update_option('skill-six-categoria-sobreMi', 'ANGULAR');
        }
        if(!get_option('skill-seven-sobreMi') && !defined(get_option('skill-seven-sobreMi'))){
            update_option('skill-seven-sobreMi', 25);
        }
        if(!get_option('skill-seven-categoria-sobreMi') && !defined(get_option('skill-seven-categoria-sobreMi'))){
            update_option('skill-seven-categoria-sobreMi', 'NODE JS');
        }
        if(!get_option('imagen-perfil-sobreMi') && !defined(get_option('imagen-perfil-sobreMi'))){
            update_option('imagen-perfil-sobreMi', '');
        }

        //mis servicios
        if(!get_option('background-servicios') && !defined(get_option('background-servicios'))){
            update_option('background-servicios', '');
        }
        if(!get_option('titulo-servicios') && !defined(get_option('titulo-servicios'))){
            update_option('titulo-servicios', 'Mis Servicios');
        }
        if(!get_option('parrafo-servicios') && !defined(get_option('parrafo-servicios'))){
            update_option('parrafo-servicios', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
        }
        if(!get_option('boton-servicios') && !defined(get_option('boton-servicios'))){
            update_option('boton-servicios', 'VER MIS TRABAJOS');
        }
        //uno
        if(!get_option('uno-icono-servicios') && !defined(get_option('uno-icono-servicios'))){
            update_option('uno-icono-servicios', 'icon ion-md-camera');
        }
        if(!get_option('uno-titulo-servicios') && !defined(get_option('uno-titulo-servicios'))){
            update_option('uno-titulo-servicios', 'Fotografía');
        }
        if(!get_option('uno-descripcion-servicios') && !defined(get_option('uno-descripcion-servicios'))){
            update_option('uno-descripcion-servicios', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.');
        }
        //dos
        if(!get_option('dos-icono-servicios') && !defined(get_option('dos-icono-servicios'))){
            update_option('dos-icono-servicios', 'icon ion-md-cube');
        }
        if(!get_option('dos-titulo-servicios') && !defined(get_option('dos-titulo-servicios'))){
            update_option('dos-titulo-servicios', 'Branding');
        }
        if(!get_option('dos-descripcion-servicios') && !defined(get_option('dos-descripcion-servicios'))){
            update_option('dos-descripcion-servicios', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.');
        }
        //tres
        if(!get_option('tres-icono-servicios') && !defined(get_option('tres-icono-servicios'))){
            update_option('tres-icono-servicios', 'icon ion-md-brush');
        }
        if(!get_option('tres-titulo-servicios') && !defined(get_option('tres-titulo-servicios'))){
            update_option('tres-titulo-servicios', 'Diseño');
        }
        if(!get_option('tres-descripcion-servicios') && !defined(get_option('tres-descripcion-servicios'))){
            update_option('tres-descripcion-servicios', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.');
        }
        //cuatro
        if(!get_option('cuatro-icono-servicios') && !defined(get_option('cuatro-icono-servicios'))){
            update_option('cuatro-icono-servicios', 'icon ion-md-code-working');
        }
        if(!get_option('cuatro-titulo-servicios') && !defined(get_option('cuatro-titulo-servicios'))){
            update_option('cuatro-titulo-servicios', 'Programación');
        }
        if(!get_option('cuatro-descripcion-servicios') && !defined(get_option('cuatro-descripcion-servicios'))){
            update_option('cuatro-descripcion-servicios', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit.');
        }

        //mis trabajos - mi CV
        if(!get_option('curriculum-titulo-izquierda') && !defined(get_option('curriculum-titulo-izquierda'))){
            update_option('curriculum-titulo-izquierda', 'Te ofresco la Mejor Calidad');
        }
        if(!get_option('background-curriculum') && !defined(get_option('background-curriculum'))){
            update_option('background-curriculum', '');
        }
        if(!get_option('curriculum-parrafo-izquierda') && !defined(get_option('curriculum-parrafo-izquierda'))){
            update_option('curriculum-parrafo-izquierda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
        }
        if(!get_option('curriculum-boton-izquierda') && !defined(get_option('curriculum-boton-izquierda'))){
            update_option('curriculum-boton-izquierda', 'CONTRATAME');
        }
        //trabajo uno
        if(!get_option('curriculum-trabajo-uno-titulo') && !defined(get_option('curriculum-trabajo-uno-titulo'))){
            update_option('curriculum-trabajo-uno-titulo', 'UI/UX Desarrollador');
        }
        if(!get_option('curriculum-trabajo-uno-anio') && !defined(get_option('curriculum-trabajo-uno-anio'))){
            update_option('curriculum-trabajo-uno-anio', '2013-2016');
        }
        if(!get_option('curriculum-trabajo-uno-descripcion') && !defined(get_option('curriculum-trabajo-uno-descripcion'))){
            update_option('curriculum-trabajo-uno-descripcion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.');
        }
        //trabajo dos
        if(!get_option('curriculum-trabajo-dos-titulo') && !defined(get_option('curriculum-trabajo-dos-titulo'))){
            update_option('curriculum-trabajo-dos-titulo', 'UI/UX Desarrollador');
        }
        if(!get_option('curriculum-trabajo-dos-anio') && !defined(get_option('curriculum-trabajo-dos-anio'))){
            update_option('curriculum-trabajo-dos-anio', '2017-2019');
        }
        if(!get_option('curriculum-trabajo-dos-descripcion') && !defined(get_option('curriculum-trabajo-dos-descripcion'))){
            update_option('curriculum-trabajo-dos-descripcion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.');
        }
        //estudio uno
        if(!get_option('curriculum-estudio-uno-titulo') && !defined(get_option('curriculum-estudio-uno-titulo'))){
            update_option('curriculum-estudio-uno-titulo', 'Universidad Online');
        }
        if(!get_option('curriculum-estudio-uno-anio') && !defined(get_option('curriculum-estudio-uno-anio'))){
            update_option('curriculum-estudio-uno-anio', '2006-2010');
        }
        if(!get_option('curriculum-estudio-uno-descripcion') && !defined(get_option('curriculum-estudio-uno-descripcion'))){
            update_option('curriculum-estudio-uno-descripcion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.');
        }
        //estudio dos
        if(!get_option('curriculum-estudio-dos-titulo') && !defined(get_option('curriculum-estudio-dos-titulo'))){
            update_option('curriculum-estudio-dos-titulo', 'UI/UX Desarrollador');
        }
        if(!get_option('curriculum-estudio-dos-anio') && !defined(get_option('curriculum-estudio-dos-anio'))){
            update_option('curriculum-estudio-dos-anio', '2011-2013');
        }
        if(!get_option('curriculum-estudio-dos-descripcion') && !defined(get_option('curriculum-estudio-dos-descripcion'))){
            update_option('curriculum-estudio-dos-descripcion', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.');
        }
        //btn descarga cv
        if(!get_option('curriculum-boton-descarga-enlace') && !defined(get_option('curriculum-boton-descarga-enlace'))){
            update_option('curriculum-boton-descarga-enlace', '');
        }
        if(!get_option('curriculum-boton-descarga-texto') && !defined(get_option('curriculum-boton-descarga-texto'))){
            update_option('curriculum-boton-descarga-texto', 'Descarga mi CV');
        }

        //estadisticas
        if(!get_option('background-estadisticas') && !defined(get_option('background-estadisticas'))){
            update_option('background-estadisticas', '');
        }
        if(!get_option('estadisticas-uno-titulo') && !defined(get_option('estadisticas-uno-titulo'))){
            update_option('estadisticas-uno-titulo', 'Premios Recibidos');
        }
        if(!get_option('estadisticas-uno-cantidad') && !defined(get_option('estadisticas-uno-cantidad'))){
            update_option('estadisticas-uno-cantidad', 15);
        }
        if(!get_option('estadisticas-dos-titulo') && !defined(get_option('estadisticas-dos-titulo'))){
            update_option('estadisticas-dos-titulo', 'Proyectos Finalizados');
        }
        if(!get_option('estadisticas-dos-cantidad') && !defined(get_option('estadisticas-dos-cantidad'))){
            update_option('estadisticas-dos-cantidad', 250);
        }
        if(!get_option('estadisticas-tres-titulo') && !defined(get_option('estadisticas-tres-titulo'))){
            update_option('estadisticas-tres-titulo', 'Clientes Felices');
        }
        if(!get_option('estadisticas-tres-cantidad') && !defined(get_option('estadisticas-tres-cantidad'))){
            update_option('estadisticas-tres-cantidad', 1210);
        }
        if(!get_option('estadisticas-cuatro-titulo') && !defined(get_option('estadisticas-cuatro-titulo'))){
            update_option('estadisticas-cuatro-titulo', 'Descargas');
        }
        if(!get_option('estadisticas-cuatro-cantidad') && !defined(get_option('estadisticas-cuatro-cantidad'))){
            update_option('estadisticas-cuatro-cantidad', 503);
        }

    }