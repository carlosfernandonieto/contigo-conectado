<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
/*$user_id = get_current_user_id();
if($user_id  == 0 && strcmp("/",$_SERVER[REQUEST_URI])==0)
{
	header('Location: https://phpstack-293961-914032.cloudwaysapps.com/resultados');	
}*/

