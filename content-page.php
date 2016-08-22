<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Chancedotcom
 */
?>


		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>

				<div class="noshow">
					<span class="post_date date updated"><?php the_time('j F,Y'); ?></span>
					<span class="vcard author">
						<span class="fn"><?php the_author(); ?></span>
					</span>
				</div>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'chancedotcom' ),
						'after'  => '</div>',
					) );
				?>

			</div><!-- .entry-content -->
			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'chancedotcom' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->
