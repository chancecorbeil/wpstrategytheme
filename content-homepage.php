<?php
/**
 * The template used for displaying home page content in template-home.php
 *
 * @package Chancedotcom
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(oddcolors); ?>>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'chancedotcom' ),
				'after'  => '</div>',
			) );
		?>






	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'chancedotcom' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
