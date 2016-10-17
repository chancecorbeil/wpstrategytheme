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









		<div class="relatedposts">

		    <?php $orig_post = $post;
		    global $post;
		    $categories = get_the_category($post->ID);
		    if ($categories) {
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

		    $args=array(
		    'category__in' => $category_ids,
		    'post__not_in' => array($post->ID),
		    'posts_per_page'=> 3, // Number of related posts that will be shown.
		    'caller_get_posts'=>1,
				'post_type' => 'wpstrategy_portfolio'
		    );

		    $my_query = new wp_query( $args );
		    if( $my_query->have_posts() ) {
		    echo '<div id="related_posts"><h3>More website examples</h3><div class="row">';
		    while( $my_query->have_posts() ) {
		    $my_query->the_post();?>

				<div class="col-md-4"><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
		    <div class="relatedcontent">
		    <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		    </div>
		    </div>
		    <?
		    }
		    echo '</div></div>';
		    }
		    }
		    $post = $orig_post;
		    wp_reset_query(); ?>

		</div>


		<div class="leadformcontainerandtitle">
		<h2>Need a developer? Let’s talk.</h2>
		<div class="leadformcontainer">
		<?php echo do_shortcode('[contact-form-7 id="15" title="Contact WP Strategy"]'); ?>
		</div>
		</div>


				<div class="entry-meta">
				<?php if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<p id="breadcrumbs">','</p>');
				} ?>
				</div><!-- .entry-meta -->

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
