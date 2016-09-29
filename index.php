<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chancedotcom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="entry-content wrap">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>

			<h1 class="entry-title">Website Tips and Studio Blog</h1>

<div class="wrap textcenter">
<div class="blognav">
<a href="http://wpstrategy.com/category/how-to/" class="btn btn-medium alignleft">How To</a>
<a href="http://wpstrategy.com/category/wordpress/" class="btn btn-medium alignleft">WordPress</a>
<a href="http://wpstrategy.com/category/woocommerce/" class="btn btn-medium alignleft">WooCommerce</a>
<a href="http://wpstrategy.com/category/portland/" class="btn btn-medium alignleft">Portland</a>
</div>
</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<div class="wrap"><?php chancedotcom_paging_nav(); ?></div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
