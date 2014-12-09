<?php
/**
 * feed functions and definitions
 *
 * @package feed
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'feed_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function feed_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on feed, use a find and replace
	 * to change 'feed' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'feed', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'feed' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'chat', 'image', 'video', 'quote', 'link', 'gallery', 'status',
	// ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'feed_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // feed_setup
add_action( 'after_setup_theme', 'feed_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function feed_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'feed' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'feed_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function feed_scripts() {
	wp_enqueue_style( 'feed-style', get_stylesheet_uri() );

	wp_enqueue_script( 'feed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'feed-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'feed_scripts' );

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


/* ACF Code */

define( 'ACF_LITE', true );

include_once('inc/acf/acf.php');

function my_acf_admin_head()
{
	?>
	<style type="text/css">
	.acf-radio-list label img {top: 4px; position: relative; margin-right: 5px;}
	.acf-radio-list li {  margin-right: 8px !important; padding: 4px 8px 8px 4px; border-radius: 5px; background-color: #DDDDDD; color: #777777;}
	.acf-radio-list input[type="radio"] {}
	.acf-radio-list label {}

	.selected {background: red;}
	</style>

	<script type="text/javascript">
	(function($){


	})(jQuery);
	</script>
	<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_posts-2',
		'title' => 'Posts',
		'fields' => array (
			array (
				'key' => 'field_5485d8360dbd7',
				'label' => 'Post Type',
				'name' => 'post_type',
				'type' => 'radio',
				'choices' => array (
					'Standard' => 'Standard',
					'Status' => 'Status',
					'CheckIn' => 'CheckIn',
					'Image' => 'Image',
					'Link' => 'Link',
					'Quote' => 'Quote',
					'Chat' => 'Chat',
					'Video' => 'Video',
					'Gallery' => 'Gallery',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'Standard',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


