<?php
/**
 * Theme_102Somerton functions and definitions
 *
 * @package 102Somerton
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'Theme_102Somerton_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function Theme_102Somerton_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Theme_102Somerton, use a find and replace
	 * to change 'Theme_102Somerton' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'Theme_102Somerton', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'Theme_102Somerton' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'Theme_102Somerton_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // Theme_102Somerton_setup
add_action( 'after_setup_theme', 'Theme_102Somerton_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function Theme_102Somerton_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'Theme_102Somerton' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'Theme_102Somerton_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function Theme_102Somerton_scripts() {
	wp_enqueue_style( 'Style-102Somerton-fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'Style-102Somerton-normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'Style-102Somerton-foundation', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'Style-102Somerton-lightbox', get_template_directory_uri() . '/css/colorbox.css' );
	wp_enqueue_style( 'Style-102Somerton-site', get_template_directory_uri() . '/css/site.css' );

	wp_enqueue_script( 'JS-102Somerton-jQuery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '20120206', true );
	wp_enqueue_script( 'JS-102Somerton-jQ-autocomplete', get_template_directory_uri() . '/js/vendor/jquery.autocomplete.js', array(), '20120206', true );
	wp_enqueue_script( 'JS-102Somerton-jQ-cookie', get_template_directory_uri() . '/js/vendor/jquery.cookie.js', array(), '20120206', true );
	wp_enqueue_script( 'JS-102Somerton-lightbox', get_template_directory_uri() . '/js/jquery.colorbox-min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'JS-102Somerton-foundation', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '20120206', true );
	wp_enqueue_script( 'JS-102Somerton-site', get_template_directory_uri() . '/js/site.js', array('jquery'), '20120206', true );
}
add_action( 'wp_enqueue_scripts', 'Theme_102Somerton_scripts' );

/**
 * Redirect to checkout on add to cart
 */
function Theme_102Somerton_edd_redirect_to_checkout_on_add( $data ) {
	global $edd_options;
 
	$redirect_url = get_permalink( $edd_options['purchase_page'] );
 
	if ( edd_get_current_page_url() != $redirect_url ) {
		wp_redirect( $redirect_url, 303 ); 
		exit;
	}
}
add_action( 'edd_add_to_cart', 'Theme_102Somerton_edd_redirect_to_checkout_on_add', 999 );