<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Chancedotcom
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="../favicon.ico">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KSHW6H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSHW6H');</script>
<!-- End Google Tag Manager -->

<!-- Begin anchor menu on services page -->
<script>
function checkOffset() {
    if($('#serviceitemsjumplist').offset().top + $('#serviceitemsjumplist').height()
                                           >= $('.entry-footer').offset().top - 10)
        $('#serviceitemsjumplist').css('position', 'absolute');
    if($(document).scrollTop() + window.innerHeight < $('.entry-footer').offset().top)
        $('#serviceitemsjumplist').css('position', 'fixed'); // restore when you scroll up
    $('#serviceitemsjumplist').text($(document).scrollTop() + window.innerHeight);
}
$(document).scroll(function() {
    checkOffset();
});
</script>

<script src="https://use.typekit.net/dmi8ydg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>


<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'chancedotcom' ); ?></a>


		<header id="masthead" class="site-header col-md-3 col-lg-2 sidemenu" role="banner">

			<div class="site-wrap col-md-3 col-lg-2">

				<div class="logowrap">
					<?php if(is_front_page()) : ?>
					<!--  This is a homepage -->
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://wpstrategy.com/wp-content/uploads/2015/03/wp-strategy.png" alt="WP Strategy" width="160" height="260" class="aligncenter size-medium wp-image-63" /></a><span class="hidetitle">WP Strategy</span></h1>
					<?php endif; ?>

					<?php if(!is_front_page()) : ?>
					<!-- This is not a homepage -->
					<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://wpstrategy.com/wp-content/uploads/2015/03/wp-strategy.png" alt="WP Strategy web design" width="160" height="260" class="aligncenter size-medium wp-image-63" /></a></h2>
					<?php endif; ?>



<?php shiftnav_toggle( 'shiftnav-main' , 'Menu' ); ?>



<div class="clearfix"></div>

				</div>


				<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->

<a href="#yourModalId" aria-label="open" class="btn btn-medium aligncenter navcta">Hire us</a>


			</div>

		</header><!-- #masthead -->



	<div id="content" class="site-content col-md-9 col-lg-10">
