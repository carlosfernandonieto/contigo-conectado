<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-dark bg-primary px-0 fixed-top">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<div class="cont-btns">
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target=".menu-off" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>	
					</button>
					<a href="#" id="btn-search" class="c-blanco ml-2" data-toggle="collapse" data-target="#searchform" aria-expanded="false" ><i class="fa fa-search"></i></a>
				</div>
					
				<!-- The WordPress Menu goes here -->
			<?php if ( 'container' == $container ) : ?>

			</div><!-- .container -->
			<div class="container-fluid position-absolute" id="offcanvas-menu">
					<div class="row w-100 menu-off collapse navbar-collapse">
						<div class="container d-md-flex mx-auto">
								<div class="col-12 col-md-6">
									<h2 id="btn-nosotros">Nosotros</h2>
									<button id="btn-m-nosotros" role="button" data-toggle="collapse" data-target="#menu-nosotros-off" class="d-none" type="button">Nosotros</button>
									<?php wp_nav_menu(
											array(
												'theme_location'  => '',
												'container_class' => 'submenu-off',
												'container_id'    => 'menu-nosotros-off',
												'menu_class'      => 'navbar-nav ml-auto',
												'fallback_cb'     => '',
												'menu'         => 'Nosotros',
												'depth'           => 1
											)
									); ?>
								</div>
								<div class="col-12 col-md-6 menu-off collapse navbar-collapse">
									<h2 id="btn-resultados">Resultados de estudio</h2>
									<button id="btn-m-resultados" role="button" data-toggle="collapse" data-target="#menu-resultados-off" class="d-none" type="button">Resultados de estudio</button>
									<?php wp_nav_menu(
											array(
												'theme_location'  => '',
												'container_class' => 'submenu-off',
												'container_id'    => 'menu-resultados-off',
												'menu_class'      => 'navbar-nav ml-auto',
												'fallback_cb'     => '',
												'menu'         => 'Resultados_de_estudio',
												'depth'           => 1
											)
									); ?>
								</div>
						</div>
					</div>
					<div class="row w-100 menu-off collapse navbar-collapse">
						<div class="container d-md-flex mx-auto">
								<div class="col-12 col-md-6">
									<h2 id="btn-temas">Temas</h2>
									<button id="btn-m-temas" role="button" data-toggle="collapse" data-target="#menu-temas-off" class="d-none" type="button">Temas</button>
									<?php wp_nav_menu(
											array(
												'theme_location'  => '',
												'container_class' => 'submenu-off',
												'container_id'    => 'menu-temas-off',
												'menu_class'      => 'navbar-nav ml-auto',
												'fallback_cb'     => '',
												'menu'         => 'Temas',
												'depth'           => 1
											)
									); ?>
								</div>
								<div class="col-12 col-md-6">
									<div class="menu-off position-relative" id="cap-menu">
									<?php 
									$image = get_field('capitulo', 2507);
									$glitch = get_field('glitch', 2507);
									$numero_capitulo = get_field('numero_capitulo', 2507);

									if( !empty($image) ): ?>

										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid position-absolute mb-4"/>
										<img src="<?php echo $glitch['url']; ?>" alt="<?php echo $glitch['alt']; ?>" class="img-fluid position-absolute glitch"/>
										<img src="<?php echo $numero_capitulo['url']; ?>" alt="<?php echo $numero_capitulo['alt']; ?>" class="img-fluid position-absolute num-cap"/>
									<?php endif; ?>
									</div>
								</div>
						</div>
					</div>
			</div>
			<?php endif; ?>
			<div class="container-fluid bg-amarillo position-absolute" id="c-searchform">
				<div class="row w-100 collapse navbar-collapse" id="searchform">
					<div class="container">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div><!-- .searchform -->
		</nav><!-- .site-navigation -->


	</div><!-- #wrapper-navbar end -->
