<?php
/**
 * Template Name: Sidebar on Left
 * The template for displaying the sidebar to the left of the content.
 *
 *
 * @package Chancedotcom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main oddcolors" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div class="wrap">

<div class="sidebar col-md-4 nocolpadr">
				<?php get_sidebar(); ?>
</div>

<div class="col-md-8">
				<?php get_template_part( 'content', 'page' ); ?>
</div>

</div>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
