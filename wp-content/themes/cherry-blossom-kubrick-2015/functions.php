<?php
/**
 * Kubrick 2014 functions and definitions
 *
 * @package Kubrick 2014
 */

if ( ! function_exists( 'kubrick_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kubrick_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Kubrick 2014, use a find and replace
	 * to change 'kubrick' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'kubrick', get_template_directory() . '/languages' );

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 668; /* pixels */
	}

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	$args = array(
		'width'         => 1080,
		'height'        => 309,
		'default-image' => get_template_directory_uri() . '/images/cropped-cherryblossom.jpg',
		'uploads'       => true,
	);
	add_theme_support( 'custom-header', $args );
	// Add Editor Style
	add_editor_style( 'editor-style.css' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kubrick_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );
}
endif; // kubrick_setup
add_action( 'after_setup_theme', 'kubrick_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kubrick_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'kubrick' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'kubrick_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kubrick_scripts() {

	wp_register_style( 'kubrick-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.1.0', 'all' );
	wp_enqueue_style( 'kubrick-font-awesome' );

	wp_enqueue_style( 'kubrick-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kubrick-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'kubrick-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kubrick_scripts' );

/**
 * Register Google Fonts
 */
function kubrick_google_fonts() {
	$protocol = is_ssl() ? 'https' : 'http';

	/*	translators: If there are characters in your language that are not supported
		by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'kubrick' ) ) {
		wp_register_style( 'kubrick-open-sans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,latin-ext", array(), null );
		wp_enqueue_style( 'kubrick-open-sans' );
	}
}
add_action( 'wp_enqueue_scripts', 'kubrick_google_fonts' );

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
