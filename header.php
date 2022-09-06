<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php require_once get_template_directory(  ).'/inc/theme-options/custom-css-for-frontend.php'; ?>
    <?php wp_head();?>
	<?php 
		echo	"<style>
					header{
						background-image: url('".get_theme_mod('redmoon_bg_header_url_setting')."') !important;
					}
					.seccion-servicios{
						background-image: url(".get_option('background-servicios').") !important;
					}
					.izquierda-curriculum{
						background-image: url(".get_option('background-curriculum').")!important;
					}
					.seccion-contador{
						background-image: url(".get_option('background-estadisticas').")!important;
					}
					footer{
						background-image: url(".get_option('background-contacto').")!important;
					}
				</style>";
	?>
</head>
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

	<!--Comienzo Header-->
	<header>
		<div class="float-uno-header"></div>
		<div class="float-dos-header">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="700" width="1000">
				<path d="M 0 0 L 400 0 M 400 0 L 700 655 L 0 655 L 0 0" style="fill: rgba(238, 82, 83,.8); stroke: none; stroke-width: 3px;" />
			</svg>
		</div>
		<div class="contenido-header">
			<div id="tipeador">
				<h2><?php echo get_option('titulo-header'); ?></h2>
			</div>
			<span id="typed"></span>
			<p>
				<?php echo esc_html(get_option('parrafo-header'));?>
			</p>
			<div class="redes-header">
				<?php 
					$facebook = (get_option('link-facebook') != '') ?  get_option('link-facebook') : false; 
					if($facebook):
						echo '<a href="'.$facebook.'"><button><i class="icon ion-logo-facebook"></i></button></a>';
					endif;
					/**/ 
					$twitter = (get_option('link-twitter') != '') ?  get_option('link-twitter') : false; 
					if($twitter):
						echo '<a href="'.$twitter.'"><button><i class="icon ion-logo-twitter"></i></button></a>';
					endif;
					/**/
					$instagram = (get_option('link-instagram') != '') ?  get_option('link-instagram') : false; 
					if($instagram):
						echo '<a href="'.$instagram.'"><button><i class="icon ion-logo-instagram"></i></button></a>';
					endif;
					/**/
					$linkedin = (get_option('link-linkedin') != '') ?  get_option('link-linkedin') : false; 
					if($linkedin):
						echo '<a href="'.$linkedin.'"><button><i class="icon ion-logo-linkedin"></i></button></a>';
					endif;
					/**/
					$youtube = !empty(get_option('link-youtube')) ?  get_option('link-youtube') : false; 
					if($youtube):
						echo '<a href="'.$youtube.'"><button><i class="icon ion-logo-youtube"></i></button></a>';
					endif;
				?>
			</div>
		</div>
	</header>
	<!--Fin Header-->