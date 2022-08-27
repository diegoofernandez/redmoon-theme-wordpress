<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(bloginfo( 'name' ).">"); ?></title>
	<?php require_once get_template_directory(  ).'/inc/theme-options/custom-css-for-frontend.php'; ?>
    <?php wp_head();?>
    <?php 
		echo	"<style>
					.seccion-servicios{
						background-image: url(".get_option('background-servicios').");
					}
					.izquierda-curriculum{
						background-image: url(".get_option('background-curriculum').");
					}
					.seccion-contador{
						background-image: url(".get_option('background-estadisticas').");
					}
					footer{
						background-image: url(".get_option('background-contacto').");
					}
				</style>";
	?>
<body>
    
    <nav>
		<div class="box-logo">
				<?php 
					if(get_theme_mod('texto_imagen_logo') == 2){
						?>
						<a href="#"><h1><?php
							echo get_theme_mod('redmoon_logo_texto');?>
						</h1></a><?php
					}else if (get_theme_mod('texto_imagen_logo') == 1){
						?>
						<a href="#"><img src="<?php echo get_theme_mod('redmoon_logo_imagen');?>"></a><?php
					}else{
						echo "No hay logo";
					}
				?>	
		</div>
		<div class="box-nav">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main_menu'
				) );
			?>
		</div>
		<div class="box-nav-responsive">
			<button><span class="icon ion-md-menu"></span></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main_menu'
				) );
			?>
		</div>
	</nav> 