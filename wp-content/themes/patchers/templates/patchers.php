<?php
/**
 * Template Name: Patchers
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
<style>
.page-template-patchers .n2-ss-layers-container{
    width:100%!important;
}

.page-template-patchers #n2-ss-1 > div > div.n2-ss-slider-2.n2-ow > div > div.n2-ss-slide.n2-ss-canvas.n2-ow.n2-ss-slide-8.n2-ss-slide-active > div > div:nth-child(3){
    width:100%!important;
    left:0!important;
}

#n2-ss-31 > div > div > div > div.n2-ss-slide.n2-ss-canvas.n2-ow.n2-ss-slide-34.n2-ss-slide-active > div > div{
    width:100%!important;
    left:0!important;
}
</style>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<section class="hero-category position-relative">
        <?php 
            echo get_field('hero_content'); 
        ?>
    <h1 class="invisible"><?php the_title(); ?></h1>
</section>
<div class="container">
    <?php the_breadcrumb();?>
</div>

<div class="wrapper pt-0" id="patchers">

	<div class="<?php echo esc_attr( $container ); ?>-fluid px-0" id="content">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
                    <div id="c-videos" class="row">
                        <?php if( have_rows('videos') ): ?>

                            <?php while( have_rows('videos') ): the_row(); 

                                // vars
                                $image = get_sub_field('poster');
                                $titulo = get_sub_field('titulo');
                                $descripcion = get_sub_field('descripcion');
                                $duracion = get_sub_field('duracion');
                                $video = get_sub_field('enlace_del_video');
                                ?>

                                <div class="video col-12 col-lg-6 col-xl-4 px-0 bg-azul_videos">
                                    <a class="d-block video-y video-btn h-100" data-toggle="modal" data-target="#myModal" data-src="<?php echo $video; ?>">
                                        <div class="c-poster-video position-relative">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid w-100" />
                                            <div class="position-absolute c-duracion"><?php echo $duracion; ?></div>
                                            <div class="position-absolute c-play"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-play-video.png" alt="Play"></div>
                                        </div>
                                        <div class="c-info-video">
                                            <h2><?php echo $titulo; ?></h2>
                                            <p>
                                                <?php if( $descripcion ): ?>
                                                    <?php echo $descripcion; ?>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                        
                                    </a>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div><!-- .row end -->
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                            
                            <div class="modal-body">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>        
                                <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
				</main><!-- #main -->

			</div><!-- #primary -->

		

    </div><!-- #content -->
    <?php $slider = new WP_Query(array(
                'posts_per_page' => 5,
                'meta_key' => 'meta-checkbox',
                'meta_value' => 'yes'
                ));
            ?>

    <section id="featured-slider" class="my-4">
        <div class="container-fluid px-0">
        <h3>Artículos Destacados</h3>
            <div class="owl-carousel" role="listbox">
                        <?php
                        $args = array(
                            'posts_per_page' => 10,
                            'meta_key' => 'meta-checkbox',
                            'meta_value' => 'yes'
                        );
                        $query = new WP_Query( $args );
                        ?>
                        
                        <?php if($query->have_posts()) : ?>
                            <?php while($query->have_posts()) : $query->the_post() ?>
                            <?php $image = get_field('imagen_categoria', $post->ID);?>
                                <div class="col px-0 position-relative">
                                        <div class="service-media h-100 d-flex"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid align-self-end" /> </div>
                                        <div class="service-desc position-absolute bg-blanco-o w-100">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <p class="text-center"><?php dynamic_excerpt(145); ?></p>
						                    <a class="btn-cta" href="<?php the_permalink();?>">Ver más</a>
                                        </div>
                                </div>
                            <?php endwhile ?>
                        <?php endif ?>
                    <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section> 

<script>
    jQuery(document).ready(function($){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:0,
            responsiveClass:true,
            dots: false,
            navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ],
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:true
                },
                1000:{
                    items:3,
                    nav:true
                }
            }
        });
    });
</script>

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
