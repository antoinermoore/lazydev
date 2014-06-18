<?php
/**
 * lazydelivery functions and definitions
 *
 * @package lazydelivery
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

if ( ! function_exists( 'lazydelivery_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lazydelivery_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lazydelivery, use a find and replace
	 * to change 'lazydelivery' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'lazydelivery', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'lazydelivery' ),
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
	add_theme_support( 'custom-background', apply_filters( 'lazydelivery_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // lazydelivery_setup
add_action( 'after_setup_theme', 'lazydelivery_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function lazydelivery_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'lazydelivery' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Footer', 'lazydelivery' ),
		'id'            => 'footer-1',
		'description'   => 'add content to footer',
		'before_widget' => '<aside id="%1$s" class="widget footer-widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Home-1', 'lazydelivery' ),
		'id'            => 'home-1',
		'description'   => 'The "How it works" Home page widget',
		'before_widget' => '<div id="%1$s" class="widget home-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Home-2', 'lazydelivery' ),
		'id'            => 'home-2',
		'description'   => 'The "deals" Home page widget',
		'before_widget' => '<div id="%1$s" class="widget home-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
        
        register_sidebar( array(
		'name'          => __( 'Home-3', 'lazydelivery' ),
		'id'            => 'home-3',
		'description'   => 'The "media Partners" Home page widget',
		'before_widget' => '<div id="%1$s" class="widget home-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'lazydelivery_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lazydelivery_scripts() {
	wp_enqueue_style( 'lazydelivery-style', get_stylesheet_uri() );
        wp_enqueue_style('lazydelivery-FontAwesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
        wp_enqueue_style('lazydelivery-GoogleFonts', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|Special+Elite|Roboto:400,300,700');

        wp_enqueue_script('lazydelivery-masonry-setting', get_template_directory() .'/js/masonry-setting.js', array(masonry), '20141706', true);
	wp_enqueue_script( 'lazydelivery-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'lazydelivery-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lazydelivery_scripts' );

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
