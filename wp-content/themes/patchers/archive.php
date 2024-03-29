<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper py-0" id="archive-wrapper">
	<?php 
	$category = get_queried_object();
	echo get_field('hero_content', 'category_'.$category->term_id);
	?>
	<div class="<?php echo esc_attr( $container ); ?>-fluid px-0" id="content" tabindex="-1">
			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
				<div class="container px-md-0">
					<?php the_breadcrumb(); ?>
				</div>

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						//the_archive_title( '<h1 class="page-title">', '</h1>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->
					<section id="container-articles">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>


						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>
					</section>
				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-12">
						<?php understrap_pagination(); ?>
					</div>
				</div>
			</div>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
