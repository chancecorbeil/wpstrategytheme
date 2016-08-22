<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package Chancedotcom
 */
?>

</div><!-- #content -->

<!--
<div id="secondary" class="right-sidebar col-md-2">

	<div class=" ">
MORE WAS HERE (PHP)
	</div>

</div>
-->


	<footer id="colophon" class="site-footer col-md-offset-3 col-lg-offset-2 col-md-9 col-lg-10" role="contentinfo">
		<div class="wrap">

				<div class="col-lg-4">
				<?php if ( ! dynamic_sidebar( 'footer-widget-2' ) ) : ?>
				<?php endif; // end sidebar widget area ?>
				</div>
				<div class="col-lg-4">
				<?php if ( ! dynamic_sidebar( 'footer-widget-3' ) ) : ?>
				<?php endif; // end sidebar widget area ?>
				</div>


			<div class="col-md-4 fourthwidgetcontainer">
				<?php if ( ! dynamic_sidebar( 'footer-widget-4' ) ) : ?>
				<?php endif; // end sidebar widget area ?>
			</div>

		</div>

			<div class="site-info">
			© 2016
			</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->


  <!-- Contact Form Popup -->
    <div id="yourModalId" class="yourModalClass popup" role="dialog" aria-labelledby="yourModalHeading" style="display:none;" >

				<div class="leadformcontainerandtitle">
				<h2>Need a developer? Let’s talk.</h2>
				<div class="leadformcontainer">
				<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]'); ?>
				</div>
				</div>

<h2 class="popupphone">or call (503) 893-4705</h2>
    </div>


<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#03A9F4">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#03A9F4">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="apple-touch-startup-image" href="https://wpstrategy.com/wp-content/uploads/2015/03/wp-strategy.png">


<!-- Latest compiled and minified JavaScript for bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800,400italic,300,300italic' rel='stylesheet' type='text/css'>

<?php wp_footer(); ?>


<!-- Fit Text. Resizes font size depending upon the screen size. -->
<script type="text/javascript">
jQuery('.homefeaturetext h2').fitText(1, { minFontSize: '26px'});
jQuery('.entry-content h2').fitText(1.6, { minFontSize: '26px'});
</script>


<!-- Begin Popup Modal -->
<link rel="stylesheet" href="<?php echo dirname( get_bloginfo('stylesheet_url') ); ?>/css/modality.css">
<script src="<?php echo dirname( get_bloginfo('stylesheet_url') ); ?>/js/modality.jquery.min.js" type="text/javascript"></script>
<script src="<?php echo dirname( get_bloginfo('stylesheet_url') ); ?>/js/modality.jquery.js" type="text/javascript"></script>
<script src="<?php echo dirname( get_bloginfo('stylesheet_url') ); ?>/js/modality.js" type="text/javascript"></script>
<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="js/modality.jquery.min.js"></script>
<script>$('#yourModalId').modality( {effect:'slide-up'} );</script> -->
<!-- JavaScript  -->
<script>Modality.init( '#yourModalId', {effect:'slide-up'} );</script>
<!-- End Modal -->


</body>
</html>