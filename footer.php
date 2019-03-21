<!--Comienzo seccion pie de pagina-->
<footer>
		<div class="float-footer"></div>
		<div class="box-form-suscribe">
			<div class="interna-box-form-suscribe">
				<form>
					<input type="email" name="" placeholder="Ingresa tu email para suscribirte">
					<button type="submit">SUSCRIBIRME</button>
				</form>
			</div>
		</div>
		<div class="interna-footer">
			<div class="header-interna-footer">
				<span class="texto-seccion-footer">CONTACTANOS</span>
				<h3>Resuelve tu consulta</h3>
			</div>
			<div class="body-footer">
				<div class="individual-body-footer">
					<h4>Contacto</h4>
					<p class="texto-body-individual">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.
					</p>
					<p class="generic-texto-body-footer">
						<strong><i class="icon ion-md-pin"></i> Dirección:</strong> Av. Transilvania 078
					</p>
					<p class="generic-texto-body-footer">
						<strong><i class="icon ion-md-call"></i> Teléfono:</strong> +549 3462 555555
					</p>
					<p class="generic-texto-body-footer">
						<strong><i class="icon ion-md-mail"></i> Email:</strong> info@misitio.com
					</p>
					<p class="generic-texto-body-footer">
						<strong><i class="icon ion-md-pin"></i> Dirección:</strong> Av. Transilvania 078
					</p>
					<div class="social-footer">
						<p class="title-social-footer">Buscanos en:</p>
						<div class="buttons-social-footer">
						    <a href="#"><button><i class="icon ion-logo-facebook"></i></button></a>
						    <a href="#"><button><i class="icon ion-logo-twitter"></i></button></a>
						    <a href="#"><button><i class="icon ion-logo-instagram"></i></button></a>
						    <a href="#"><button><i class="icon ion-logo-linkedin"></i></button></a>
						    <a href="#"><button><i class="icon ion-logo-youtube"></i></button></a>
						</div>
					</div>
				</div>
				<!---->
				<div class="individual-body-footer">
					<?php echo do_shortcode('[contact-form-7 id="56" title="Formulario de contacto 1"]'); ?>
				</div>
				<!---->
			</div>
		</div>
	</footer>
	<!--Fin pie de pagina-->

	<!--Comienzo derechos-->
	<div class="derechos">
		<p>Derechos reservados 2019 &copy; Red Moon | Diego A. Fernandez</p>
	</div>
	<!--Fin derechos-->
<?php wp_footer(); ?>
</body>
</html> 