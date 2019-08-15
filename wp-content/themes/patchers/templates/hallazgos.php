<?php
/**
 * Template Name: Hallazgos
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<section class="hero-category position-relative">
    <?php 
        echo get_field('hero_content');
	?>
</section>
<div class="container">
    <?php the_breadcrumb();?>
</div><!-- /ruta de navegacion -->

<div class="wrapper" id="p-resultados">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'catresultados' ); ?><!-- /contenido pagina -->

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

            </div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
