<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>

	<!-- GENERAL -->
	<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/style.css'; ?>" />

	<!-- OPTIONS -->
	<?php $inspire_options = get_option('inspire_options'); ?>

	<!-- DYNAMIC HEADER TEMPLATE -->
	<?php get_template_part('inc/templates/dynamic_header'); ?>
	
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KPDLNPC');</script>
	<!-- End Google Tag Manager -->

	<!-- WORDPRESS MAIN HEADER CALL -->
	<?php wp_head(); ?>

	

</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPDLNPC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<!-- BEGIN BG WRAPPER -->
	<div id="bg-wrapper">
	
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
		<div id="header">
			
			<div id="header-social" <?php if ($inspire_options['social_icons_size'] == 'big') echo 'class="big"'; ?>>

				<?php if (!empty($inspire_options['facebook_url'])) echo '<a href="'. $inspire_options['facebook_url'] .'" class="social facebook" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['twitter_url'])) echo '<a href="'. $inspire_options['twitter_url'] .'" class="social twitter" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['pinterest_url'])) echo '<a href="'. $inspire_options['pinterest_url'] .'" class="social pinterest" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['flickr_url'])) echo '<a href="'. $inspire_options['flickr_url'] .'" class="social flickr" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['tumblr_url'])) echo '<a href="'. $inspire_options['tumblr_url'] .'" class="social tumblr" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['vimeo_url'])) echo '<a href="'. $inspire_options['vimeo_url'] .'" class="social vimeo" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['instagram_url'])) echo '<a href="'. $inspire_options['instagram_url'] .'" class="social instagram" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['google_url'])) echo '<a href="'. $inspire_options['google_url'] .'" class="social google" target="_blank" /></a>'; ?>
				<?php if (!empty($inspire_options['rss_url'])) echo '<a href="'. $inspire_options['rss_url'] .'" class="social rss" target="_blank" /></a>'; ?>

			</div>
			
			<div id="header-search" <?php if ($inspire_options['social_icons_size'] == 'big') echo 'class="big"'; ?>>
				
				<a href="#" class="search-icon"></a>
				
			</div>

			<div id="pop_out_search">

				<?php get_search_form(); ?>
				
			</div>
			
			<div id="logo">
				<?php 
					if (!empty($inspire_options['logo_url'])) {
						echo '<a href="'. home_url() .'"><img src="'. $inspire_options['logo_url'] .'"></a>';
					} else {
						echo '<a href="'. home_url() .'"><img src="'. get_template_directory_uri() .'/images/logo2.png"></a>';
					}
				?>
			</div>

			<!-- MAIN NAVIGATION MENU -->
			<?php wp_nav_menu(array( 
				'theme_location' => 'main_navigation_menu',
				'menu_id' => 'menu',
				'container' => false,
				'show_home' => '1'
				));
			 ?>
			 
			 <select id="navigation_select">
			 </select>

		</div>
		<!-- END HEADER -->
		