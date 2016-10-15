<?php
/**
 * Template Name: Sidebar on Right
 * The template for displaying the sidebar to the right of the content.
 *
 *
 * @package Chancedotcom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main oddcolors" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

<div class="wrap">

				<?php get_template_part( 'content', 'pagesidebarright' ); ?>


</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
