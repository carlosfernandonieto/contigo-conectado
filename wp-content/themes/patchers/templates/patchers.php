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

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<section class="hero-category position-relative">
    <?php 
    if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    }
    ?>
    <h1 class="position-absolute"><?php the_title(); ?></h1>
    <p class="position-absolute"><?php the_content(); ?></p>
</section>
<div class="container">
    <?php the_breadcrumb();?>
</div>

<div class="wrapper" id="patchers">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
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

                                <div class="video col-12 col-sm-6 col-lg-4">
                                    <a class="d-block video-y video-btn" data-toggle="modal" data-target="#myModal" data-src="<?php echo $video; ?>">
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                                        <h2><?php echo $titulo; ?></h2>
                                        <p>
                                            <?php if( $descripcion ): ?>
                                                <?php echo $descripcion; ?>
                                            <?php endif; ?>
                                        </p>
                                        <span><?php echo $duracion; ?></span>
                                    </a>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div><!-- .row end -->
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
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
        <div class="container">
        <h3>Artículos Destacados</h3>
            <div class="owl-carousel" role="listbox">
                        <?php
                        $args = array(
                            'posts_per_page' => 9,
                            'meta_key' => 'meta-checkbox',
                            'meta_value' => 'yes'
                        );
                        $query = new WP_Query( $args );
                        ?>
                        
                        <?php if($query->have_posts()) : ?>
                            <?php while($query->have_posts()) : $query->the_post() ?>
                                <div class="col">
                                        <div class="service-media"> <?php the_post_thumbnail(); ?> </div>
                                        <div class="service-desc">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php the_excerpt(); ?>
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
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    });
</script>

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
