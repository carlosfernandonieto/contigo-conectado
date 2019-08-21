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
        echo get_field('hero_content');
	?>
</section>
<div class="container">
    <?php the_breadcrumb();?>
</div>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>-fluid px-0" id="p-descargables">

		<div class="row-">

			<div class="col-md-12 content-area px-0" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'descargables' ); ?>

						<?php if( have_rows('informes') ): 

                        while( have_rows('informes') ): the_row(); 
                            
                            // vars informes
                            $image = get_sub_field('imagen');
                            $link = get_sub_field('archivo');
                            
                            ?>
                            <div id="informes">
                                <div class="container-fluid">
                                    <div id="c-informe-g" class="row mb-4" style="background:url(<?php echo $image['url']; ?>) no-repeat;">
                                        <div class="col-12 col-lg-4 cont-resultado mx-auto text-center bg-azul-o c-blanco py-4">
                                            <h3 class="text-uppercase"><?php the_sub_field('titulo'); ?></h3>
                                            <a href="<?php echo $link['url']; ?>" target="_blank"><?php the_sub_field('texto'); ?></a>
                                            <p class="mb-0 mt-2"><a href="<?php echo $link['url']; ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-download.png" alt="Descargar"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h2 class="text-uppercase">Principales resultados del estudio</h2>
                            </div>
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

                                   
                                        <div id="c-ciudades">
                                            <div class="container-fluid">
                                            <?php
                                            while ( have_rows( 'ciudad' ) ) : the_row();
                                                $nombre = get_sub_field( 'nombre' );
                                                $imagen_city = get_sub_field('imagen');
                                            ?>

                                            <div class="ciudad-single row mb-4 mt-4">
                                                <div class="col-12 col-md-8 px-0 img-resultado position-relative">
                                                    <img src="<?php echo $imagen_city['url']; ?>" alt="<?php echo $imagen_city['alt']; ?>" class="img-fluid w-100 h-100"/>
                                                </div>
                                                
                                                <?php // Ciudades Sub Repeater.
                                                if ( have_rows( 'descargables' ) ) : ?>

                                                <div class="col-12 col-md-4 c-resultado px-0">
                                                    <div class="ciudades ciudades d-flex flex-column h-100">
                                                        <h3 class="text-uppercase"><?php echo esc_html( $nombre ); ?></h3>
                                                        <?php
                                                        while ( have_rows( 'descargables' ) ) : the_row();
                                                            $titulo = get_sub_field( 'titulo' );
                                                            $archivo = get_sub_field( 'archivo' );
                                                        ?>
                                                            <a href="<?php echo esc_html( $archivo ); ?>" class="d-block text-center" target="_blank"><?php echo esc_html( $titulo ); ?></a>
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
