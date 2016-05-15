<?php
/**
 * Flexible Footer Widgets functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Flexible_Footer_Widgets
 */

if ( ! function_exists( 'flexible_footer_widgets_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function flexible_footer_widgets_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Flexible Footer Widgets, use a find and replace
	 * to change 'flexible-footer-widgets' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'flexible-footer-widgets', get_template_directory() . '/languages' );


	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
	) );
}
endif;
add_action( 'after_setup_theme', 'flexible_footer_widgets_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flexible_footer_widgets_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'flexible-footer-widgets' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here for the first footer column.', 'flexible-footer-widgets' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'flexible-footer-widgets' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here for the second footer column.', 'flexible-footer-widgets' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'flexible-footer-widgets' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here for the third footer column', 'flexible-footer-widgets' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'flexible_footer_widgets_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flexible_footer_widgets_scripts() {
	wp_enqueue_style( 'flexible-footer-widgets-style', get_stylesheet_uri() );

	wp_enqueue_script( 'flexible-footer-widgets-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'flexible_footer_widgets_scripts' );
