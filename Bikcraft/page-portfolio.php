<?php
// Template Name: Portifolio
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
		<section class="container animar-interno">
			<ul class="rslides">
				<?php if(have_rows('quote_portfolio')) : while(have_rows('quote_portfolio')) : the_row(); ?>
				<li>
					<a href="<?php the_sub_field('quote_link'); ?>" class="quote_link">
						<blockquote class="quote_clientes">
							<?php the_sub_field('quote'); ?>
							<cite><?php the_sub_field('nome_quote'); ?></cite>
						</blockquote>
					</a>
				</li>
				<?php endwhile; else: endif; ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
				<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>