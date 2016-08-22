<?php
/**
 * Chancedotcom Theme Customizer
 *
 * @package Chancedotcom
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function chancedotcom_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';



// Begin section - Home Page
// add new section
	$wp_customize->add_section( 'ExampleWordPressControls_homepage_panel', array(
		'title' => __( 'Homepage', 'ExampleWordPressControls' ),
		'priority' => 150,
	) );

// Add Header Background Image
	$wp_customize->add_setting('homepage_header_background_image', array(
			'default'           => '/wp-content/themes/ExampleWordPressControls/images/up-arrow.png',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'homepage_header_background_image', array(
			'label'    => __('Back To Top Arrow Graphic', 'ExampleWordPressControls'),
			'section' => 'ExampleWordPressControls_homepage_panel',
			'settings' => 'homepage_header_background_image',
	)));
// End Home Page Section

}
add_action( 'customize_register', 'chancedotcom_customize_register' );




// Add customizer settings to CSS from within header.
function WPStrategy_customize_css()
{
		?>
				<style type="text/css">

				header.entry-header {
					background-image: url(<?php echo get_theme_mod( 'homepage_header_background_image', 'wp-content/themes/ExampleWordPressControls/images/up-arrow.png' ); ?>);
				}
				
				</style>
		<?php
}
add_action( 'wp_head', 'WPStrategy_customize_css');
// End - customizer settings to CSS from within header.





/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function chancedotcom_customize_preview_js() {
	wp_enqueue_script( 'chancedotcom_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'chancedotcom_customize_preview_js' );
