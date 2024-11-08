<?php
// Template Name: Single Produtos
get_header();
?>
<style type="text/css">
	.produto_item {
		padding-top: 116px;
	}
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container produto_item animar-interno">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto1'); ?>" alt="L&M <?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>">
			</div>
			<div class="grid-8 rslides_portfolio_produtos rslides">
				<!-- Recuperando e exibindo o campo repetidor 'produtos' -->
				<?php 
				$produtos = get_field('galeria_de_imagens'); // Nome do campo repetidor no ACF
				if ($produtos): 
					// Verificando se existem produtos no campo repetidor
					foreach ($produtos as $produto): 
						// Recuperando a imagem e o link
						$imagem = $produto['foto_produto2']; // Nome do subcampo de imagem
						$link = $produto['site-portfolio-link']; // Nome do subcampo de link
						
						// Verificando se a imagem e o link estão disponíveis
						if ($imagem && $link): 
				?>
							<div class="site-portfolio__item">
								<!-- Link para o site do portfólio -->
								<a href="<?php echo esc_url($link); ?>" class="site-portfolio__link">
									<!-- Exibindo a imagem com base no URL -->
									<img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>">
								</a>
							</div>
				<?php 
						endif; // Fim da verificação para imagem e link
					endforeach; 
				endif; 
				?>
			</div>
			<div class="grid-8 produto_info">
				<?php the_content(); ?>
				<?php if ( have_rows('lista_de_destaques') ) : ?>
						<ul>
								<?php while ( have_rows('lista_de_destaques') ) : the_row(); ?>
										<li><?php the_sub_field('destaque'); ?></li>
								<?php endwhile; ?>
						</ul>
				<?php endif; ?>
			</div>
		</section>
		<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
