<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Chancedotcom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

<!-- <div id="authorarea" class="wrap">
	<h3>About The Author: <!php echo get_the_author(); ?></h3>
	<!php echo get_avatar( get_the_author_meta( 'user_email' ), 70 ); ?>
<div class="authorinfo">
	<a href="https://twitter.com/ChanceCorbeil" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @ChanceCorbeil</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<!php the_author_meta( 'description' ); ?> Follow me on <a href="http://twitter.com/chancecorbeil">Twitter</a> or find me at <a href="https://plus.google.com/+ChanceCorbeil/posts">Google+</a>.
<a class="author-link" href="<!php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">View all posts by <!php echo get_the_author(); ?> <span class="meta-nav">&rarr;</span></a>
</div>
</div>

-->

			

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
