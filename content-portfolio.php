<?php
/**
 * @package Chancedotcom
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header wrap">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content wrap">
		<div class="col-lg-9 nopaddingleftdesktop primaryblogcontent">



<div class="browser large">
<div class="title-bar">
    <div class="btns">
      <div class="close"></div>
      <div class="min"></div>
      <div class="max"></div>
    </div>
    <div class="location-bar"></div>
  </div>
<?php the_post_thumbnail(large); ?>
</div>

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'chancedotcom' ),
				'after'  => '</div>',
			) );
		?>

		<?php chancedotcom_post_nav(); ?>

		<div class="entry-meta">
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
		</div><!-- .entry-meta -->

		<div class="leadformcontainerandtitle">
		<h2>Need a developer? Let’s talk.</h2>
		<div class="leadformcontainer">
		<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]'); ?>
		</div>
		</div>

		</div>

		<div class="col-lg-3 blog-sidebar-container nopaddingrightdesktop">



			<?php if ( ! dynamic_sidebar( 'blog-sidebar' ) ) : ?>
			<?php endif; // end sidebar widget area ?>
		</div>
		<!-- end blog sidebar-->




		<footer class="entry-footer wrap">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'chancedotcom' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'chancedotcom' ) );



				printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink()
				);
			?>

			<?php edit_post_link( __( 'Edit', 'chancedotcom' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->


	</div><!-- .entry-content -->


</article><!-- #post-## -->
