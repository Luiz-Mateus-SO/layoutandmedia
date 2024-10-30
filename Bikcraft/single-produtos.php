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
				<img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft <?php the_title(); ?>">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>"></div>
			<div class="grid-8"><img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft <?php the_title(); ?>"></div>
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