<?php
/**
 * The template for displaying the author.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Chancedotcom
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="wrap">

<!– This sets the $curauth variable –>

<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>

<h1 class="entry-title">About the Author: <?php echo $curauth->nickname; ?></h1>
<div class="authorprofile">
<h3>Website</h3>
<p><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></p>
<h3>Profile</h3>
<p><img src="https://wpstrategy.com/wp-content/uploads/2015/03/chance-274x300.jpg" alt="Chance Corbeil" width="274" height="300" class="alignleft size-thumbnail wp-image-706" /><?php echo $curauth->user_description; ?></p>
</div>

<h2 class="postsby">Posts by <?php echo $curauth->nickname; ?></h2>
<br/>

<ul class="linelist">
<!– The Loop –>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
<?php the_title(); ?></a>,
<span class="authordate"><?php the_time('d M Y'); ?> in <?php the_category('&');?></span>
</li>

<?php endwhile; else: ?>
<p><?php _e('No posts by this author.'); ?></p>

<?php endif; ?>

<!– End Loop –>

</ul>

</div>
</div>
</div>

<?php get_footer(); ?>
