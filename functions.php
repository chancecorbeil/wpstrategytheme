<?php
/**
 * Chancedotcom functions and definitions
 *
 * @package Chancedotcom
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'chancedotcom_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function chancedotcom_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Chancedotcom, use a find and replace
	 * to change 'chancedotcom' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'chancedotcom', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'chancedotcom' ),
		'top' => __( 'Top Menu', 'chancedotcom' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'chancedotcom_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // chancedotcom_setup
add_action( 'after_setup_theme', 'chancedotcom_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function chancedotcom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'chancedotcom' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Social Media', 'chancedotcom' ),
		'id'            => 'socialmediawidget',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Right', 'chancedotcom' ),
		'id'            => 'sidebar-right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Product Service Sidebar', 'chancedotcom' ),
		'id'            => 'product-service-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget product-service-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'chancedotcom' ),
		'id'            => 'blog-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget product-service-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );




	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'chancedotcom' ),
		'id'            => 'footer-widget-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'chancedotcom' ),
		'id'            => 'footer-widget-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'chancedotcom' ),
		'id'            => 'footer-widget-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'chancedotcom' ),
		'id'            => 'footer-widget-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'chancedotcom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function chancedotcom_scripts() {
	wp_enqueue_style( 'chancedotcom-style', get_stylesheet_uri() );

	wp_enqueue_script( 'chancedotcom-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'chancedotcom-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'chancedotcom_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Remove P tag from automatically wrapping span.
*/

function filter_ptags_on_span($content){
   return preg_replace('/<p>((<span([^>]*)>)(.+)(<\/span>))<\/p>/iU', '$1', $content);
}

add_filter('the_content', 'filter_ptags_on_span');

/**
* Remove P tag from automatically wrapping buttons.
*/

function filter_ptags_on_button($content){
	return preg_replace('/<p>((<button([^>]*)>)(.+)(<\/button>))<\/p>/iU', '$1', $content);
}

add_filter('the_content', 'filter_ptags_on_button');




















// function to return a custom field value
function paneltopage_get_custom_field( $value ) {
	global $post;

    $custom_field = get_post_meta( $post->ID, $value, true );
    if ( !empty( $custom_field ) )
	    return is_array( $custom_field ) ? stripslashes_deep( $custom_field ) : stripslashes( wp_kses_decode_entities( $custom_field ) );

    return false;
}

// Register the Metabox
function paneltopage_add_custom_meta_box() {
	add_meta_box( 'paneltopage-meta-box', __( 'Page Panel Feature for Home Page', 'textdomain' ), 'paneltopage_meta_box_output', 'post', 'normal', 'high' );
	add_meta_box( 'paneltopage-meta-box', __( 'Page Panel Feature for Home Page', 'textdomain' ), 'paneltopage_meta_box_output', 'page', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'paneltopage_add_custom_meta_box' );

// Output the Metabox
function paneltopage_meta_box_output( $post ) {
	// create a nonce field
	wp_nonce_field( 'my_paneltopage_meta_box_nonce', 'paneltopage_meta_box_nonce' ); ?>

<p>
	<strong><label for="paneltopage_panelorder"><?php _e( 'Panel Order', 'textdomain' ); ?>:</label></strong>
	<input type="text" name="paneltopage_panelorder" id="paneltopage_panelorder" value="<?php echo paneltopage_get_custom_field( 'paneltopage_panelorder' ); ?>" size="5" />
</p>

	<p>
	<strong><label for="paneltopage_textarea"><?php _e( 'Textarea', 'textdomain' ); ?>:</label></strong><br />
	<textarea name="paneltopage_textarea" id="paneltopage_textarea" cols="60" rows="4"><?php echo paneltopage_get_custom_field( 'paneltopage_textarea' ); ?></textarea>
</p>

<p>
	<strong><label for="paneltopage_ctatextfield"><?php _e( 'Panel Call To Action', 'textdomain' ); ?>:</label></strong>
	<input type="text" name="paneltopage_ctatextfield" id="paneltopage_ctatextfield" value="<?php echo paneltopage_get_custom_field( 'paneltopage_ctatextfield' ); ?>" size="50" />
</p>

	<?php
}

// Save the Metabox values
function paneltopage_meta_box_save( $post_id ) {
	// Stop the script when doing autosave
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

	// Verify the nonce. If insn't there, stop the script
	if( !isset( $_POST['paneltopage_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['paneltopage_meta_box_nonce'], 'my_paneltopage_meta_box_nonce' ) ) return;

	// Stop the script if the user does not have edit permissions
	if( !current_user_can( 'edit_post' ) ) return;

    // Save the textfield
	if( isset( $_POST['paneltopage_ctatextfield'] ) )
		update_post_meta( $post_id, 'paneltopage_ctatextfield', esc_attr( $_POST['paneltopage_ctatextfield'] ) );

    // Save the textarea
	if( isset( $_POST['paneltopage_textarea'] ) )
		update_post_meta( $post_id, 'paneltopage_textarea', esc_attr( $_POST['paneltopage_textarea'] ) );

		// Save the order
	if( isset( $_POST['paneltopage_panelorder'] ) )
		update_post_meta( $post_id, 'paneltopage_panelorder', esc_attr( $_POST['paneltopage_panelorder'] ) );
}
add_action( 'save_post', 'paneltopage_meta_box_save' );



// Configure an Declare support for WooCommerce

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_theme_support( 'woocommerce' );




// Add function for displaying content to Admins Only.
// EXAMPLE: if (if_is_admin()) { echo '<ul><li>'; wp_loginout(); echo '</li><li><a href="/blog/wp-admin/">Admin Panel</a></li><li><a href="/blog/wp-admin/post.php">Add post</a></li><li><a href="http://stat.4u.pl/?******">Stats</a></li></ul>'; }

function if_is_admin () {
	global $user_level;
	get_currentuserinfo();
	if ($user_level == 10) { return true; }
	else { return false; }
}




// Remove Woocommerce Breadcrumbs

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Remove category from woocommerce single product

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Change the add to cart text on single product pages

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +

// Move add to cart button on products archive

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 2 );



function woo_custom_cart_button_text() {

        return __( 'Purchase!', 'woocommerce' );

}

// Move featured image to above the product description tabs

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_show_product_images', 3);


// Remove product images from cart

add_filter( 'woocommerce_cart_item_thumbnail', '__return_false' );

// Images - Add image sizes

add_image_size( 'linelist', 40, 40 ); // 40 pixels wide by 40 pixels tall, soft proportional crop mode

add_image_size( 'serviceitem', 103, 103 ); // 40 pixels wide by 40 pixels tall, soft proportional crop mode
