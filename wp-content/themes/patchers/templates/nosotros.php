<?php
/**
 * Template Name: Quienes Somos
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
    if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    }
    ?>
</section>
<div class="container">
    <?php the_breadcrumb();?>
</div>

<div class="wrapper" id="p-nosotros">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-12 col-md-12 col-lg-9 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'quienes' ); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

            </div><!-- #primary -->
            
            <aside class="col-12 col-md-12 col-lg-3" id="sidebar-news">
                <h3>Últimas noticias</h3>
            <?php 
            // the query
            $the_query = new WP_Query( array(
                'cat' => '41',
                'posts_per_page' => 3,
            )); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-12 position-relative">
                    <?php the_post_thumbnail(); ?>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p><?php __('Noticias no disponibles.'); ?></p>
            <?php endif; ?>
            </aside>

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
