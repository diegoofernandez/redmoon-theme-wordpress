<?php 
 
 /*==========================================================================
    Agregando el menu de opciones en WP PANEL
 ==========================================================================*/   
 if(!function_exists('redmoon_main_options')):
    function redmoon_main_options(){
        
        add_menu_page(__('Opciones Red Moon', 'redmoon'), __('Opciones del tema', 'redmoon'), 'manage_options', 'redmoon-opciones-inicio', 'pagina_main_options_redmoon', 'dashicons-admin-generic', 20);
    }
 endif;

 add_action('admin_menu', 'redmoon_main_options');
  

 /*==========================================================================
   Plantilla de las opciones
  ==========================================================================*/
 function pagina_main_options_redmoon(){

    if(!current_user_can( 'edit_theme_options' )){
        wp_die( __('No tienes autorización para realizar este cambio') );
    }


    //validacion de estilos generales
    if(isset($_POST['color-fuente-con-fondo']) && isset($_POST['color-fuente-sin-fondo']) && isset($_POST['tipografia-principal']) && isset($_POST['tipografia-secundaria']) && $_POST['color-principal']){
        check_admin_referer('actualizacion_estilos_generales', 'formulario_estilos_generales');
        update_option('color-fuente-con-fondo', sanitize_hex_color($_POST['color-fuente-con-fondo'])); 
        update_option('color-fuente-sin-fondo', sanitize_hex_color($_POST['color-fuente-sin-fondo'])); 
        update_option('tipografia-principal', sanitize_text_field($_POST['tipografia-principal'])); 
        update_option('tipografia-secundaria', sanitize_text_field($_POST['tipografia-secundaria'])); 
        update_option('color-principal', sanitize_hex_color($_POST['color-principal'])); 
    }

    //validacion de estilos header
    if(isset($_POST['titulo-header']) && isset($_POST['parrafo-header']) && isset($_POST['imagen-header'])){
        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); 
        update_option('titulo-header', $_POST['titulo-header']); 
        update_option('parrafo-header', sanitize_textarea_field( $_POST['parrafo-header'] ) );
        update_option('imagen-header', esc_url( $_POST['imagen-header']));
    }

    //validacion contacto
    if(isset($_POST['titulo-contacto']) && isset($_POST['parrafo-contacto']) && isset($_POST['direccion-contacto']) && isset($_POST['telefono-contacto']) && isset($_POST['email-contacto']) && isset($_POST['background-contacto'])){
        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); 
        update_option('titulo-contacto', sanitize_text_field( $_POST['titulo-contacto'] )); 
        update_option('parrafo-contacto', sanitize_textarea_field( $_POST['parrafo-contacto'] )); 
        update_option('direccion-contacto', sanitize_text_field( $_POST['direccion-contacto'] ));
        update_option('telefono-contacto', sanitize_text_field( $_POST['telefono-contacto'] ));
        update_option('email-contacto', sanitize_email( $_POST['email-contacto'] ));
        update_option( 'background-contacto', sanitize_text_field($_POST['background-contacto']) );
    }

    //validacion menu social
    if(isset($_POST['link-facebook']) && isset($_POST['link-twitter']) && isset($_POST['link-instagram']) && isset($_POST['link-linkedin']) && isset($_POST['link-youtube'])){
        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' );
        if($_POST['link-facebook'] == ''){
            update_option('link-facebook', ''); 
        }else{
            update_option('link-facebook', esc_url( $_POST['link-facebook'] ));
        }
        if($_POST['link-twitter'] == ''){
            update_option('link-twitter', '');
        }else{
            update_option('link-twitter', esc_url( $_POST['link-twitter'] ));
        }
        if($_POST['link-instagram'] == ''){
            update_option( 'link-instagram', '');
        }else{
            update_option('link-instagram', esc_url( $_POST['link-instagram'] ));
        }
        if($_POST['link-linkedin'] == ''){
            update_option('link-linkedin', '');
        }else{
            update_option('link-linkedin', esc_url( $_POST['link-linkedin'] ));
        }
        if($_POST['link-youtube'] == ''){
            update_option('link-youtube', '');
        }else{
            update_option('link-youtube', esc_url( $_POST['link-youtube'] ));
        }
    }

    //validacion texto footer
    if(isset($_POST['texto-footer'])){
        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' );
        update_option('texto-footer', sanitize_textarea_field( $_POST['texto-footer'] ));
    }

    //validacion información sobre mi
    if(isset($_POST['titulo-sobre-mi']) && isset($_POST['imagen-perfil-sobreMi']) && isset($_POST['parrafo-sobreMi']) && isset($_POST['skill-one-categoria-sobreMi']) && isset($_POST['skill-one-sobreMi']) && isset($_POST['skill-two-categoria-sobreMi']) && isset($_POST['skill-two-sobreMi']) && isset($_POST['skill-three-categoria-sobreMi']) && isset($_POST['skill-three-sobreMi']) && isset($_POST['skill-four-categoria-sobreMi']) && isset($_POST['skill-four-sobreMi']) && isset($_POST['skill-five-categoria-sobreMi']) && isset($_POST['skill-five-sobreMi']) && isset($_POST['skill-six-categoria-sobreMi']) && isset($_POST['skill-six-sobreMi']) && isset($_POST['skill-seven-categoria-sobreMi']) && isset($_POST['skill-seven-sobreMi'])){

        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' );
        update_option('titulo-sobreMi', sanitize_textarea_field( $_POST['titulo-sobre-mi'] ));
        update_option('imagen-perfil-sobreMi', sanitize_textarea_field( $_POST['imagen-perfil-sobreMi'] ));
        update_option('parrafo-sobreMi', sanitize_textarea_field( $_POST['parrafo-sobreMi'] ));
        update_option('skill-one-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-one-categoria-sobreMi'] ));
        update_option('skill-one-sobreMi', sanitize_textarea_field( $_POST['skill-one-sobreMi'] ));
        update_option('skill-two-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-two-categoria-sobreMi'] ));
        update_option('skill-two-sobreMi', sanitize_textarea_field( $_POST['skill-two-sobreMi'] ));
        update_option('skill-three-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-three-categoria-sobreMi'] ));
        update_option('skill-three-sobreMi', sanitize_textarea_field( $_POST['skill-three-sobreMi'] ));
        update_option('skill-four-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-four-categoria-sobreMi'] ));
        update_option('skill-four-sobreMi', sanitize_textarea_field( $_POST['skill-four-sobreMi'] ));
        update_option('skill-five-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-five-categoria-sobreMi'] ));
        update_option('skill-five-sobreMi', sanitize_textarea_field( $_POST['skill-five-sobreMi'] ));
        update_option('skill-six-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-six-categoria-sobreMi'] ));
        update_option('skill-six-sobreMi', sanitize_textarea_field( $_POST['skill-six-sobreMi'] ));
        update_option('skill-seven-categoria-sobreMi', sanitize_textarea_field( $_POST['skill-seven-categoria-sobreMi'] ));
        update_option('skill-seven-sobreMi', sanitize_textarea_field( $_POST['skill-seven-sobreMi'] ));

    }

    //validacion información servicios
    if(isset($_POST['background-servicios']) && isset($_POST['titulo-servicios']) && isset($_POST['parrafo-servicios']) && isset($_POST['boton-servicios']) && isset($_POST['uno-icono-servicios']) && isset($_POST['uno-titulo-servicios']) && isset($_POST['uno-descripcion-servicios']) && isset($_POST['dos-icono-servicios']) && isset($_POST['dos-titulo-servicios']) && isset($_POST['dos-descripcion-servicios']) && isset($_POST['tres-icono-servicios']) && isset($_POST['tres-titulo-servicios']) && isset($_POST['tres-descripcion-servicios']) && isset($_POST['cuatro-icono-servicios']) && isset($_POST['cuatro-titulo-servicios']) && isset($_POST['cuatro-descripcion-servicios'])){

        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' );
        update_option('background-servicios', sanitize_text_field($_POST['background-servicios']));
        update_option('titulo-servicios', sanitize_text_field($_POST['titulo-servicios']));
        update_option('parrafo-servicios', sanitize_textarea_field($_POST['parrafo-servicios']));
        update_option('boton-servicios', sanitize_text_field($_POST['boton-servicios']));
        update_option('uno-icono-servicios', sanitize_text_field($_POST['uno-icono-servicios']));
        update_option('uno-titulo-servicios', sanitize_text_field($_POST['uno-titulo-servicios']));
        update_option('uno-descripcion-servicios', sanitize_textarea_field($_POST['uno-descripcion-servicios']));
        update_option('dos-icono-servicios', sanitize_text_field($_POST['dos-icono-servicios']));
        update_option('dos-titulo-servicios', sanitize_text_field($_POST['dos-titulo-servicios']));
        update_option('dos-descripcion-servicios', sanitize_textarea_field($_POST['dos-descripcion-servicios']));
        update_option('tres-icono-servicios', sanitize_text_field($_POST['tres-icono-servicios']));
        update_option('tres-titulo-servicios', sanitize_text_field($_POST['tres-titulo-servicios']));
        update_option('tres-descripcion-servicios', sanitize_textarea_field($_POST['tres-descripcion-servicios']));
        update_option('cuatro-icono-servicios', sanitize_text_field($_POST['cuatro-icono-servicios']));
        update_option('cuatro-titulo-servicios', sanitize_text_field($_POST['cuatro-titulo-servicios']));
        update_option('cuatro-descripcion-servicios', sanitize_textarea_field($_POST['cuatro-descripcion-servicios']));

    }

    //validacion información curriculum
    if(isset($_POST['curriculum-titulo-izquierda']) && isset($_POST['background-curriculum']) && isset($_POST['curriculum-parrafo-izquierda']) && isset($_POST['curriculum-boton-izquierda']) && isset($_POST['curriculum-trabajo-uno-titulo']) && isset($_POST['curriculum-trabajo-uno-anio']) && isset($_POST['curriculum-trabajo-uno-descripcion']) && isset($_POST['curriculum-trabajo-dos-titulo']) && isset($_POST['curriculum-trabajo-dos-anio']) && isset($_POST['curriculum-trabajo-dos-descripcion']) && isset($_POST['curriculum-trabajo-dos-anio']) && isset($_POST['curriculum-estudio-uno-titulo']) && isset($_POST['curriculum-estudio-uno-anio']) && isset($_POST['curriculum-estudio-uno-descripcion']) && isset($_POST['curriculum-estudio-dos-titulo']) && isset($_POST['curriculum-estudio-dos-anio']) && isset($_POST['curriculum-estudio-dos-descripcion']) && isset($_POST['curriculum-boton-descarga-enlace']) && isset($_POST['curriculum-boton-descarga-texto'])){

        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' );
        update_option('curriculum-titulo-izquierda', sanitize_text_field($_POST['curriculum-titulo-izquierda']));
        update_option('background-curriculum', sanitize_text_field($_POST['background-curriculum']));
        update_option('curriculum-parrafo-izquierda', sanitize_textarea_field($_POST['curriculum-parrafo-izquierda']));
        update_option('curriculum-boton-izquierda', sanitize_text_field($_POST['curriculum-boton-izquierda']));
        update_option('curriculum-trabajo-uno-titulo', sanitize_text_field($_POST['curriculum-trabajo-uno-titulo']));
        update_option('curriculum-trabajo-uno-anio', sanitize_text_field($_POST['curriculum-trabajo-uno-anio']));
        update_option('curriculum-trabajo-uno-descripcion', sanitize_textarea_field($_POST['curriculum-trabajo-uno-descripcion']));
        update_option('curriculum-trabajo-dos-titulo', sanitize_text_field($_POST['curriculum-trabajo-dos-titulo']));
        update_option('curriculum-trabajo-dos-anio', sanitize_text_field($_POST['curriculum-trabajo-dos-anio']));
        update_option('curriculum-trabajo-dos-descripcion', sanitize_textarea_field($_POST['curriculum-trabajo-dos-descripcion']));
        update_option('curriculum-trabajo-dos-anio', sanitize_text_field($_POST['curriculum-trabajo-dos-anio']));
        update_option('curriculum-estudio-uno-titulo', sanitize_text_field($_POST['curriculum-estudio-uno-titulo']));
        update_option('curriculum-estudio-uno-anio', sanitize_textarea_field($_POST['curriculum-estudio-uno-anio']));
        update_option('curriculum-estudio-uno-descripcion', sanitize_text_field($_POST['curriculum-estudio-uno-descripcion']));
        update_option('curriculum-estudio-dos-titulo', sanitize_text_field($_POST['curriculum-estudio-dos-titulo']));
        update_option('curriculum-estudio-dos-anio', sanitize_textarea_field($_POST['curriculum-estudio-dos-anio']));
        update_option('curriculum-estudio-dos-descripcion', sanitize_text_field($_POST['curriculum-estudio-dos-descripcion']));
        update_option('curriculum-boton-descarga-enlace', sanitize_text_field($_POST['curriculum-boton-descarga-enlace']));
        update_option('curriculum-boton-descarga-texto', sanitize_text_field($_POST['curriculum-boton-descarga-texto']));

    }

    //validacion información estadisticas
    if(isset($_POST['estadisticas-uno-titulo']) && isset($_POST['estadisticas-uno-cantidad']) && isset($_POST['estadisticas-dos-titulo']) && isset($_POST['estadisticas-dos-cantidad']) && isset($_POST['estadisticas-tres-titulo']) && isset($_POST['estadisticas-tres-cantidad']) && isset($_POST['estadisticas-cuatro-titulo']) && isset($_POST['estadisticas-cuatro-cantidad']) && isset($_POST['background-estadisticas'])){

        check_admin_referer( 'actualizacion_estilos_generales', 'formulario_estilos_generales' );
        update_option('estadisticas-uno-titulo', sanitize_text_field($_POST['estadisticas-uno-titulo']));
        update_option('estadisticas-uno-cantidad', sanitize_text_field($_POST['estadisticas-uno-cantidad']));
        update_option('estadisticas-dos-titulo', sanitize_text_field($_POST['estadisticas-dos-titulo']));
        update_option('estadisticas-dos-cantidad', sanitize_text_field($_POST['estadisticas-dos-cantidad']));
        update_option('estadisticas-tres-titulo', sanitize_text_field($_POST['estadisticas-tres-titulo']));
        update_option('estadisticas-tres-cantidad', sanitize_text_field($_POST['estadisticas-tres-cantidad']));
        update_option('estadisticas-cuatro-titulo', sanitize_text_field($_POST['estadisticas-cuatro-titulo']));
        update_option('estadisticas-cuatro-cantidad', sanitize_text_field($_POST['estadisticas-cuatro-cantidad']));
        update_option('background-estadisticas', sanitize_text_field($_POST['background-estadisticas']));

    }

    require_once get_template_directory(  ).'/inc/theme-options/styles-options.php';
    ?>

     <div class="Box-Theme-Options" id="padre-options">
        <h2>Bienvenido a las opciones de Red Moon Portfolio</h2>
        <div class="Box-Theme-Options-Menu" id="menus-options">
            <a id="home-enlace-options"><div><p>Estilos Generales</p></div></a>
            <a id="header-enlace-options"><div><p>Header Contenido</p></div></a>
            <a id="contacto-enlace-options"><div><p>Contacto Sección</p></div></a>
            <a id="social-enlace-options"><div><p>Social Menu's</p></div></a>
            <a id="derechos-enlace-options"><div><p>Derechos de footer</p></div></a>
            <a id="sobre-mi-options"><div><p>Sección Sobre mí</p></div></a>
            <a id="mis-servicios-options"><div><p>Sección servicios</p></div></a>
            <a id="mi-curriculum-options"><div><p>Sección CV</p></div></a>
            <a id="estadisticas-options"><div><p>Estadísticas</p></div></a>
        </div>
        <div class="Box-Theme-Options-Main" id="view-home-options">
            <h3>Estilos Generales</h3>
            <div class="Box-Theme-Options-Main-Interna">
                <form method="post">
                    <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>COLOR DE FUENTE CON FONDO</label>
                        <input type="text" name="color-fuente-con-fondo" value="<?php echo get_option('color-fuente-con-fondo');  ?>">
                    </div>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>COLOR DE FUENTE SIN FONDO</label>
                        <input type="text" name="color-fuente-sin-fondo" value="<?php echo get_option('color-fuente-sin-fondo');  ?>">
                    </div>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>TIPOGRAFÍA PRINCIPAL</label>
                        <input type="text" name="tipografia-principal" value="<?php echo get_option('tipografia-principal');  ?>">
                    </div>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>TIPOGRAFÍA SECUNDARIA</label>
                        <input type="text" name="tipografia-secundaria" value="<?php echo get_option('tipografia-secundaria');  ?>">
                    </div>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>COLOR PRINCIPAL</label>
                        <input type="text" name="color-principal" value="<?php echo get_option('color-principal');  ?>">
                    </div>
                    <input class="Btn-Enviar" type="submit" value="Guardar">
                </form>
            </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-header-options">
            <h3>Header Contenido</h3>
            <div class="Box-Theme-Options-Main-Interna">
                <form method="post">
                    <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>TÍTULO DE CABECERA</label>
                        <input type="text" name="titulo-header" value="<?php echo get_option('titulo-header');  ?>">
                    </div>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>PÁRRAFO DE CABECERA</label>
                        <textarea name="parrafo-header"><?php echo get_option('parrafo-header');  ?></textarea>
                    </div>
                    <div class="Box-Theme-Options-Main-Interna-Container-Input">
                        <label>IMAGEN DE FONDO DE CABECERA</label>
                        <input type="text" name="imagen-header" value="<?php echo get_option('imagen-header');  ?>">
                    </div>
                    <input class="Btn-Enviar" type="submit" value="Guardar">
                </form>
            </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-contacto-options">
            <h3>Información de contacto</h3>
                <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>IMAGEN DE FONDO CONTACTO</label>
                            <input type="text" name="background-contacto" value="<?php echo get_option('background-contacto');  ?>" placeholder="Url de imagen de contacto">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO DE SECCIÓN CONTACTO</label>
                            <input type="text" name="titulo-contacto" value="<?php echo get_option('titulo-contacto');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN CONTACTO</label>
                            <textarea name="parrafo-contacto"><?php echo get_option('parrafo-contacto');  ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>MI DIRECCIÓN<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="direccion-contacto" value="<?php echo get_option('direccion-contacto');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TELÉFONO<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="telefono-contacto" value="<?php echo get_option('telefono-contacto');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>EMAIL<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="email-contacto" value="<?php echo get_option('email-contacto');  ?>">
                        </div>
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-social-options">
            <h3>Social menú's link's</h3>
                <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>FACEBOOK<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="link-facebook" value="<?php echo get_option('link-facebook');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TWITTER<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="link-twitter" value="<?php echo get_option('link-twitter');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>INSTAGRAM<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="link-instagram" value="<?php echo get_option('link-instagram');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>LINKEDIN<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="link-linkedin" value="<?php echo get_option('link-linkedin');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>YOUTUBE<br><small>Si no quieres informarla deja el campo en blanco</small></label>
                            <input type="text" name="link-youtube" value="<?php echo get_option('link-youtube');  ?>">
                        </div>
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-footer-options">
            <h3>Texto Pie de página</h3>
                <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>ESCRIBA EL TEXTO QUE DESEA</label>
                            <textarea name="texto-footer"><?php echo get_option('texto-footer');  ?></textarea>
                        </div> 
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-sobre-mi-options">
            <h3>Sobre mí</h3>
            <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO SOBRE MI</label>
                            <input type="text" name="titulo-sobre-mi" value="<?php echo get_option('titulo-sobreMi');  ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>IMAGEN PERFIL SOBRE MI</label>
                            <input type="text" name="imagen-perfil-sobreMi" value="<?php echo get_option('imagen-perfil-sobreMi');  ?>" placeholder="Ingrese la url de la imagen de perfil">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>PÁRRAFO</label>
                            <textarea name="parrafo-sobreMi"><?php echo get_option('parrafo-sobreMi'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>Ingrese los valores y las nombres de sus habilidades deseadas que se mostrarán en la sección 'Skills' en animación con barras</p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 1 (categoria)</label>
                            <input type="text" name="skill-one-categoria-sobreMi" value="<?php echo get_option('skill-one-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 1 (porcentaje)</label>
                            <input type="text" name="skill-one-sobreMi" value="<?php echo get_option('skill-one-sobreMi'); ?> ">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 2 (categoria)</label>
                            <input type="text" name="skill-two-categoria-sobreMi" value="<?php echo get_option('skill-two-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 2 (porcentaje)</label>
                            <input type="text" name="skill-two-sobreMi" value="<?php echo get_option('skill-two-sobreMi'); ?> ">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 3 (categoria)</label>
                            <input type="text" name="skill-three-categoria-sobreMi" value="<?php echo get_option('skill-three-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 3 (porcentaje)</label>
                            <input type="text" name="skill-three-sobreMi" value="<?php echo get_option('skill-three-sobreMi'); ?> ">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 4 (categoria)</label>
                            <input type="text" name="skill-four-categoria-sobreMi" value="<?php echo get_option('skill-four-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 4 (porcentaje)</label>
                            <input type="text" name="skill-four-sobreMi" value="<?php echo get_option('skill-four-sobreMi'); ?> ">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 5 (categoria)</label>
                            <input type="text" name="skill-five-categoria-sobreMi" value="<?php echo get_option('skill-five-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 5 (porcentaje)</label>
                            <input type="text" name="skill-five-sobreMi" value="<?php echo get_option('skill-five-sobreMi'); ?> ">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 6 (categoria)</label>
                            <input type="text" name="skill-six-categoria-sobreMi" value="<?php echo get_option('skill-six-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 6 (porcentaje)</label>
                            <input type="text" name="skill-six-sobreMi" value="<?php echo get_option('skill-six-sobreMi'); ?> ">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>SKILL 7 (categoria)</label>
                            <input type="text" name="skill-seven-categoria-sobreMi" value="<?php echo get_option('skill-seven-categoria-sobreMi'); ?>">
                            <label class="padding-left-label">SKILL 7 (porcentaje)</label>
                            <input type="text" name="skill-seven-sobreMi" value="<?php echo get_option('skill-seven-sobreMi'); ?> ">
                        </div>
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-mis-servicios-options">
            <h3>Mis servicios</h3>
                <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>IMAGEN DE FONDO SERVICIOS</label>
                            <input type="text" name="background-servicios" value="<?php echo get_option('background-servicios'); ?>" placeholder="Ingrese la url de la imagen">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO SECCIÓN SERVICIOS</label>
                            <input type="text" name="titulo-servicios" value="<?php echo get_option('titulo-servicios'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>PÁRRAFO SERVICIOS</label>
                            <textarea name="parrafo-servicios"><?php echo get_option('parrafo-servicios'); ?></textarea>
                        </div> 
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>BOTÓN SERVICIOS</label>
                            <input type="text" name="boton-servicios" value="<?php echo get_option('boton-servicios'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                Los siguientes campos especifican el contenido de las cartas / slider de servicios. Recuerde usar los iconos de <a href="https://ionicons.com/" target="_blank">Ionicons</a> respetando el siguiente formato: icon ion-md-{name-icon}
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                PROPIEDADES CARD 1
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>ICONO CARD 1</label>
                            <input type="text" name="uno-icono-servicios" value="<?php echo get_option('uno-icono-servicios'); ?>">
                            <label class="padding-left-label">TÍTULO CARD 1</label>
                            <input type="text" name="uno-titulo-servicios" value="<?php echo get_option('uno-titulo-servicios'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN CARD 1</label>
                            <textarea name="uno-descripcion-servicios"><?php echo get_option('uno-descripcion-servicios'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                PROPIEDADES CARD 2
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>ICONO CARD 2</label>
                            <input type="text" name="dos-icono-servicios" value="<?php echo get_option('dos-icono-servicios'); ?>">
                            <label class="padding-left-label">TÍTULO CARD 2</label>
                            <input type="text" name="dos-titulo-servicios" value="<?php echo get_option('dos-titulo-servicios'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN CARD 2</label>
                            <textarea name="dos-descripcion-servicios"><?php echo get_option('dos-descripcion-servicios'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                PROPIEDADES CARD 3
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>ICONO CARD 3</label>
                            <input type="text" name="tres-icono-servicios" value="<?php echo get_option('tres-icono-servicios'); ?>">
                            <label class="padding-left-label">TÍTULO CARD 3</label>
                            <input type="text" name="tres-titulo-servicios" value="<?php echo get_option('tres-titulo-servicios'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN CARD 3</label>
                            <textarea name="tres-descripcion-servicios"><?php echo get_option('tres-descripcion-servicios'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                PROPIEDADES CARD 4
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>ICONO CARD 4</label>
                            <input type="text" name="cuatro-icono-servicios" value="<?php echo get_option('cuatro-icono-servicios'); ?>">
                            <label class="padding-left-label">TÍTULO CARD 4</label>
                            <input type="text" name="cuatro-titulo-servicios" value="<?php echo get_option('cuatro-titulo-servicios'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN CARD 4</label>
                            <textarea name="cuatro-descripcion-servicios"><?php echo get_option('cuatro-descripcion-servicios'); ?></textarea>
                        </div>
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-mi-curriculum-options">
            <h3>Mi Curriculum</h3>
                <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO SECCIÓN</label>
                            <input type="text" name="curriculum-titulo-izquierda" value="<?php echo get_option('curriculum-titulo-izquierda'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>IMAGEN DE FONDO</label>
                            <input type="text" name="background-curriculum" value="<?php echo get_option('background-curriculum'); ?>" placeholder="Ingrese la url de la imagen de fondo">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>PÁRRAFO SECCIÓN</label>
                            <textarea type="text" name="curriculum-parrafo-izquierda"><?php echo get_option('curriculum-parrafo-izquierda'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>BOTÓN SECCIÓN</label>
                            <input type="text" name="curriculum-boton-izquierda" value="<?php echo get_option('curriculum-boton-izquierda'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                Contenido trabajo uno
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO DE TRABAJO</label>
                            <input type="text" name="curriculum-trabajo-uno-titulo" value="<?php echo get_option('curriculum-trabajo-uno-titulo'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>FECHA DE TRABAJO</label>
                            <input type="text" name="curriculum-trabajo-uno-anio" value="<?php echo get_option('curriculum-trabajo-uno-anio'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN DE TRABAJO</label>
                            <textarea name="curriculum-trabajo-uno-descripcion"><?php echo get_option('curriculum-trabajo-uno-descripcion'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                Contenido trabajo dos
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO DE TRABAJO</label>
                            <input type="text" name="curriculum-trabajo-dos-titulo" value="<?php echo get_option('curriculum-trabajo-dos-titulo'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>FECHA DE TRABAJO</label>
                            <input type="text" name="curriculum-trabajo-dos-anio" value="<?php echo get_option('curriculum-trabajo-dos-anio'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN DE TRABAJO</label>
                            <textarea name="curriculum-trabajo-dos-descripcion"><?php echo get_option('curriculum-trabajo-dos-descripcion'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                Contenido estudio uno
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO DE ESTUDIO</label>
                            <input type="text" name="curriculum-estudio-uno-titulo" value="<?php echo get_option('curriculum-estudio-uno-titulo'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>FECHA DE ESTUDIO</label>
                            <input type="text" name="curriculum-estudio-uno-anio" value="<?php echo get_option('curriculum-estudio-uno-anio'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN DE ESTUDIO</label>
                            <textarea name="curriculum-estudio-uno-descripcion"><?php echo get_option('curriculum-estudio-uno-descripcion'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input-Valores-Barras">
                            <p>
                                Contenido estudio dos
                            </p>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO DE ESTUDIO</label>
                            <input type="text" name="curriculum-estudio-dos-titulo" value="<?php echo get_option('curriculum-estudio-dos-titulo'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>FECHA DE ESTUDIO</label>
                            <input type="text" name="curriculum-estudio-dos-anio" value="<?php echo get_option('curriculum-estudio-dos-anio'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>DESCRIPCIÓN DE ESTUDIO</label>
                            <textarea name="curriculum-estudio-dos-descripcion"><?php echo get_option('curriculum-estudio-dos-descripcion'); ?></textarea>
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>ENLACE CV</label>
                            <input type="text" name="curriculum-boton-descarga-enlace" value="<?php echo get_option('curriculum-boton-descarga-enlace'); ?>" placeholder="Ingrese enlace donde dscargar y visualizar CV">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TEXTO BOTÓN DESCARGA</label>
                            <input type="text" name="curriculum-boton-descarga-texto" value="<?php echo get_option('curriculum-boton-descarga-texto'); ?>">
                        </div>
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
        <!---->
        <div class="Box-Theme-Options-Main" id="view-estadisticas-options">
            <h3>Estadísticas</h3>
                <div class="Box-Theme-Options-Main-Interna">
                    <form method="post">
                        <?php wp_nonce_field( 'actualizacion_estilos_generales', 'formulario_estilos_generales' ); ?>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>IMAGEN DE FONDO ESTADÍSTICAS</label>
                            <input type="text" name="background-estadisticas" value="<?php echo get_option('background-estadisticas'); ?>" placeholder="Url de imagen de fondo">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO ESTAD. 1</label>
                            <input type="text" name="estadisticas-uno-titulo" value="<?php echo get_option('estadisticas-uno-titulo'); ?>">
                            <label class="padding-left-label">CONTADOR ESTAD. 1</label>
                            <input type="text" name="estadisticas-uno-cantidad" value="<?php echo get_option('estadisticas-uno-cantidad'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO ESTAD. 2</label>
                            <input type="text" name="estadisticas-dos-titulo" value="<?php echo get_option('estadisticas-dos-titulo'); ?>">
                            <label class="padding-left-label">CONTADOR ESTAD. 2</label>
                            <input type="text" name="estadisticas-dos-cantidad" value="<?php echo get_option('estadisticas-dos-cantidad'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO ESTAD. 3</label>
                            <input type="text" name="estadisticas-tres-titulo" value="<?php echo get_option('estadisticas-tres-titulo'); ?>">
                            <label class="padding-left-label">CONTADOR ESTAD. 3</label>
                            <input type="text" name="estadisticas-tres-cantidad" value="<?php echo get_option('estadisticas-tres-cantidad'); ?>">
                        </div>
                        <div class="Box-Theme-Options-Main-Interna-Container-Input">
                            <label>TÍTULO ESTAD. 4</label>
                            <input type="text" name="estadisticas-cuatro-titulo" value="<?php echo get_option('estadisticas-cuatro-titulo'); ?>">
                            <label class="padding-left-label">CONTADOR ESTAD. 4</label>
                            <input type="text" name="estadisticas-cuatro-cantidad" value="<?php echo get_option('estadisticas-cuatro-cantidad'); ?>">
                        </div>
                        <input class="Btn-Enviar" type="submit" value="Guardar">
                    </form>
                </div>
        </div>
     </div>
     <?php
 }

 