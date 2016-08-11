<?php
/**
 * the-proletariat functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the-proletariat
 */

if ( ! function_exists( 'the_proletariat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_proletariat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on the-proletariat, use a find and replace
	 * to change 'the-proletariat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'the-proletariat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'the-proletariat' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'the_proletariat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'the_proletariat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_proletariat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_proletariat_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_proletariat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_proletariat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-proletariat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-proletariat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Home Callouts 2', 'the-proletariat' ),
		'id'            => 'home-callout-2',
		'description'   => esc_html__( 'Add widgets here.', 'the-proletariat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Home Callouts 3', 'the-proletariat' ),
		'id'            => 'home-callout-3',
		'description'   => esc_html__( 'Add widgets here.', 'the-proletariat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'the_proletariat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_proletariat_scripts() {

	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Work+Sans:400,800|Source+Code+Pro|Roboto');
	
	wp_enqueue_style( 'the-proletariat-style', get_stylesheet_uri() );

	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css');

	/*wp_enqueue_script( 'the-proletariat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'the-proletariat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );*/

	wp_enqueue_script('the-proletariat-scripts', get_template_directory_uri().'/scripts.js', array('jquery'), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_proletariat_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Woocommerce support

 Product card implementation
 http://codepen.io/virgilpana/pen/RNYQwB


 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'proletariat_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'proletariat_wrapper_end', 10);

function proletariat_wrapper_start() {
  echo '<main id="main" class="site-main" role="main">';
}

function proletariat_wrapper_end() {
  echo '</main>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/**
 * add custom post types
 */

require get_template_directory() . '/inc/proles-posttype.php';

/**
* Hide the admin bar, I never want to see that thing.
*/
add_filter('show_admin_bar', '__return_false');
