<?php $contato = get_page_by_title('contato'); ?>

<style type="text/css">
.wpp__btn {
	position: fixed;
	bottom: 20px;
	right: 24px;
}

.wpp__btn .wpp__link {
	transition: .2s transform ease-in-out;
	z-index: 999;
}

.wpp__btn .wpp__link:hover {
	transform: scale(1.2);
}


.wpp__btn img {
	max-width: 38px;
	width: 100%;
}

.quebra {
	background: url("<?php the_field('background_footer', $contato); ?>") no-repeat center;
	background-size: cover;
}
</style>

<div class="quebra">
	<blockquote class="quote-externo container">
		<?php the_field('frase_footer', $contato); ?>
		<cite><?php the_field('autor_footer', $contato); ?></cite>
	</blockquote>
</div>

<footer>
			<div class="footer">
				<div class="container">

					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<?php the_field('resumo_historia', $contato); ?>
					</div>

					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- <a href="https://api.whatsapp.com/send?phone=5515991630344&text=Ol%C3%A1!%20Tudo%20bem%3F%20Gostaria%20de%20fazer%20um%20or%C3%A7amento%20com%20voc%C3%AAs"><?php the_field('telefone', $contato); ?></li></a>
							<li>- <?php the_field('email', $contato); ?></li>
							<li>- <?php the_field('endereco1', $contato); ?></li>
						</ul>
					</div>

					<div class="grid-4 footer_redes">
						<h3>Redes Sociais</h3>
						<?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
					</div>

				</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> © Todos os direitos reservados.</p>
				</div>
			</div>

		</footer>
		
		<div class="wpp__btn">
			<a href="<?php the_field('wpp-link', $contato); ?>" class="wpp__link"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.webp" alt="Icone Whatsapp"></a>
		</div>
	<!-- JavaScript -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.11.2.min.js"><\/script>')</script>
	<!-- JavaScript -->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60088262-1', 'auto');
	  ga('send', 'pageview');

	</script>
		<!-- Inicio WordPress Footer -->
		<?php wp_footer(); ?>
  <!-- Final WordPress Footer -->
	</body>
</html>