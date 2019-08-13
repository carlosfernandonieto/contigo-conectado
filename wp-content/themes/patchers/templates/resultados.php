<?php
/**
 * Template Name: Resultados Estudio
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
</div>

<div class="wrapper" id="p-resultados">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-12 col-md-12 col-lg-6 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'resultados-estudio' ); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

            </div><!-- #primary -->
            <aside class="col-12 col-md-6">
            <?php
                // check if the repeater field has rows of data
                if( have_rows('categorias') ):
                    echo "<div class='container'>";
                        echo "<div class='row'>";
                        // loop through the rows of data
                        while ( have_rows('categorias') ) : the_row();
                            $image = get_sub_field('icono');
                            echo "<div class='col-6 col-md-4 px-0 c-resultado text-center'>";
                            // display a sub field value
                            echo "<img src='".$image['url']."' alt='".$image['alt']."' class='mx-auto' />";
                            echo "<h2 class='c-blanco text-uppercase'>";the_sub_field('titulo_resultado');echo "</h2>";
                            echo "<a href='"; the_sub_field('url'); echo "'>Ver Más</a>";
                            echo "</div>";
                        endwhile;
                        echo "</div>";
                    echo "</div>";
                else :
                    // no rows found
                endif;
            ?>
            </aside>
		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
