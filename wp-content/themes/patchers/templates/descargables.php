<?php
/**
 * Template Name: Descargables
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


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'quienes' ); ?>

						<?php if( have_rows('informes') ): 

                        while( have_rows('informes') ): the_row(); 
                            
                            // vars informes
                            $image = get_sub_field('imagen');
                            $link = get_sub_field('archivo');
                            
                            ?>
                            <div id="informes">
                                <div class="container">
                                    <div class="row mb-4">
                                        <div class="col-12 col-md-5 px-0 img-resultado">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        </div>
                                        <div class="col-12 col-md-7 cont-resultado border">
                                            <h3><?php the_sub_field('titulo'); ?></h3>
                                            
                                            <a href="<?php echo $link['url']; ?>" target="_blank"><?php the_sub_field('texto'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3>Principales resultados del estudio</h3>
                        <?php endwhile; ?>

                        <?php endif; ?>

                        <!-- Ciudades -->
                        <?php

                        // Stop if there's nothing to display.
                        if ( ! have_rows( 'ciudades' ) ) {
                            return false;
                        }

                        if ( have_rows( 'ciudades' ) ) : ?>

                                <?php while ( have_rows( 'ciudades' ) ) : the_row();

                                    // Ciudades Sub Repeater.
                                    if ( have_rows( 'ciudad' ) ) : ?>

                                   
                                        <div class="ciudades">
                                            <div class="container">
                                            <?php
                                            while ( have_rows( 'ciudad' ) ) : the_row();
                                                $nombre = get_sub_field( 'nombre' );
                                                $imagen_city = get_sub_field('imagen');
                                            ?>

                                            <div class="ciudad-single row mb-4">
                                                <div class="col-12 col-md-5 px-0 img-resultado">
                                                    <img src="<?php echo $imagen_city['url']; ?>" alt="<?php echo $imagen_city['alt']; ?>" />
                                                </div>
                                                
                                                <?php // Ciudades Sub Repeater.
                                                if ( have_rows( 'descargables' ) ) : ?>

                                                <div class="col-12 col-md-7 cont-resultado border">
                                                    <div class="ciudades">
                                                        <h3><?php echo esc_html( $nombre ); ?></h3>
                                                        <?php
                                                        while ( have_rows( 'descargables' ) ) : the_row();
                                                            $titulo = get_sub_field( 'titulo' );
                                                            $archivo = get_sub_field( 'archivo' );
                                                        ?>
                                                            <a href="<?php echo esc_html( $archivo ); ?>"><?php echo esc_html( $titulo ); ?></a>
                                                        <?php endwhile; ?> 
                                                    </div>
                                                </div>

                                                <?php endif; ?>
                                            </div>
                                            <?php endwhile; ?> 
                                            </div>
                                        </div><!-- ciudades -->
                                    <?php endif; ?>
                                <?php endwhile; ?>
                        <?php endif; ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
