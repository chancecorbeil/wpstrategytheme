<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Chancedotcom
 */

get_header(); ?>

	<section id="primary" class="content-area boilerplates">
		<main id="main" class="site-main" role="main">

			<div class="entry-content wrap">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					Boilerplates
				</h1>

				<?php get_search_form( $echo ); ?>

				<form action="/" method="get" class="boilerplatesearch">
					<fieldset>
						<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
						<input type="image" alt="Search" class="searchsubmitbutton" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
					</fieldset>
				</form>


				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				?>

			<?php endwhile; ?>

			<?php chancedotcom_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
