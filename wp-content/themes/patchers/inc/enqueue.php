<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

function owl_carousel(){
    wp_enqueue_script('owl-carousel-min', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', "owl_carousel");

function custom_js(){
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', "custom_js");

function owl_css() {
    wp_enqueue_style( 'owl_css', get_template_directory_uri() . '/css/owl.carousel.min.css' );
}
add_action( 'wp_enqueue_scripts', 'owl_css' );

function theme_gsap_script() {
    wp_enqueue_script( 'gsap-js', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

function jquery_resultados(){
    wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), false, true  );
}
add_action('wp_enqueue_scripts', "jquery_resultados");

function animate_number(){
    wp_enqueue_script('animate_number.js', get_template_directory_uri().'/js/resultados/jquery.animateNumber.min.js', false ,'1.0', 'all' );
}
add_action('wp_enqueue_scripts', "animate_number");

function acciones_uso(){
    wp_enqueue_script('acciones_uso.js', get_template_directory_uri().'/js/resultados/acciones_uso.js', false ,'1.0', 'all' );
}
add_action('wp_enqueue_scripts', "acciones_uso");

// Call the function
function scripts_resultados() {

	// Specify the conditional tag
	if ( is_page( 'mediacion' ) ) {
		  
	  // If page matches, then load the following files
	  wp_enqueue_script('main_medi.js', get_template_directory_uri().'/js/resultados/main_medi.js', false ,'1.0', 'all' );
	  
	 
	 }
	 // Specify the conditional tag
	if ( is_page( 'oportunidades' ) ) {
		  
		// If page matches, then load the following files
		wp_enqueue_script('main_opor.js', get_template_directory_uri().'/js/resultados/main_opor.js', false ,'1.0', 'all' );
		
	}
	if ( is_page( 'riesgos' ) ) {
		  
		// If page matches, then load the following files
		wp_enqueue_script('main_ries.js', get_template_directory_uri().'/js/resultados/main_ries.js', false ,'1.0', 'all' );
		
	}

	if ( is_page( 'uso-y-acceso' ) ) {
		  
		// If page matches, then load the following files
		wp_enqueue_script('main.js', get_template_directory_uri().'/js/resultados/main.js', false ,'1.0', 'all' );
		
	}
  }
  
  // Hook into the WordPress Function
  add_action( 'wp_enqueue_scripts', 'scripts_resultados' );

