<?php
/**
 * Template Name: Homepage
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

<div class="wrapper py-0" id="full-width-page-wrapper">
    <div class="container-fluid px-0 vh-100" id="slider-home">
        <?php if( have_rows('videos', 2535) ): ?>
            <div class="carousel_bg h-100">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade carousel-thumbnails h-100 pointer-event" data-ride="carousel" data-interval="false">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner h-100" role="listbox">
                            <div class="cont-preview">
                            <?php
                            $active = 'active';
                            while ( have_rows('videos', 2535) ) : the_row();

                                $image = get_sub_field('poster_home');
                                $video = get_sub_field('enlace_del_video');
                                ?>
                                
                                <div class="carousel-item h-100 <?php echo $active ?>">
                                    <div class="cont-preview position-absolute">
                                        <img class="d-block vw-100 vh-100 img-fluid" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                        <div class="position-absolute bg-primary btn-video"><a class="btn bg-primary align-self-center d-flex" href="#">Ver video <i class="material-icons">play_circle_filled_white</i></a></div>
                                    </div>
                                    <div class="cont-video position-absolute w-100 h-100">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="<?php echo $video; ?>&autoplay=0"  allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                </div><!-- /item -->
                                <?php $active = '';
                            endwhile;
                            ?>
                            </div>
                        </div>
                        <!--/.carousel-inner-->
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                            $active = 'active';
                            $num = 0;
                            while ( have_rows('videos', 2535) ) : the_row();
                            $image = get_sub_field('poster');
                                ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $num ?>" class="<?php echo $active ?>"><img class="d-block w-100 h-100 img-fluid" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>"></li>
                                <?php
                                $active = '';
                                $num += 1;
                            endwhile; ?>
                        </ol>
                    </div>
            </div><!-- /row -->
        <?php endif; ?>
    </div>
	<div class="<?php echo esc_attr( $container ); ?>-fluid px-0" id="content">
		<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main-home" role="main">
                <h1 class="invisible" style="height:0;">Contigo Conectados</h1>

					<?php while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                            <?php 
                                $term = get_field('categoria_1');
                                $term2 = get_field('categoria_2');
                                $term3 = get_field('categoria_3');
                                $term4 = get_field('categoria_4');
                                $term5 = get_field('categoria_5');
                                $term6 = get_field('categoria_6');
                                $term7 = get_field('categoria_7');
                                $term8 = get_field('categoria_8');
                                $term9 = get_field('categoria_9');
                                if( $term ): ?>
                                    <?php 
                                        $category = get_category( $term ); 
                                        $category_link = get_category_link($term);
                                    ?> 
                                    <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-lg-8 bg-primary s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term);?>)">
                                    <a href="<?php echo esc_url( $category_link ); ?>" class="d-block h-100 pt-4">
                                        <div class="c-text-cat text-center position-absolute mx-auto bg-blanco-o pt-3 pb-4">
                                            <h2><?php print_r($category->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category->description); ?></p>
                                            <a href="<?php echo esc_url( $category_link ); ?>" class="btn-h-b btn-cat">Ver más</a>
                                        </div>
                                    </a>
                                    </div>
                                    <?php 
                                        
                                        if( $term2 ): ?>
                                        <?php 
                                            $category2 = get_category( $term2 ); 
                                            $category2_link = get_category_link($term2);
                                        ?> 
                                    <div data-aos="fade-up" data-aos-duration="1500" class="col-12 col-lg-4 bg-azul_claro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term2);?>)">
                                        <a href="<?php echo esc_url( $category2_link ); ?>" class="d-block h-100 pt-4 c-blanco">
                                        <div class="c-text-cat text-center position-absolute mx-auto bg-azul-o pt-3 pb-4">
                                            <h2><?php print_r($category2->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category2->description); ?></p>
                                            <a href="<?php echo esc_url( $category2_link ); ?>" class="btn-h-a btn-cat">Ver más</a>
                                        </div>
                                            
                                        </a>    
                                        <?php endif; ?>
                                    </div>
                                    
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <?php 
                                
                                $category3_link = get_category_link($term3);
                                if( $term3 ): ?>
                                <?php 
                                    $category3 = get_category( $term3 ); 
                                ?> 
                            <div data-aos="fade-up" data-aos-duration="1000"  class="col-12 col-lg-3 bg-azul_oscuro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term3);?>)">
                                <a href="<?php echo esc_url( $category3_link ); ?>" class="d-block h-100 pt-4 c-blanco">
                                    <div class="c-text-cat w-100 text-center position-absolute mx-auto bg-morado-o pt-3 pb-4 c-blanco">
                                        <h2><?php print_r($category3->name); ?></h2>
                                        <p class="mx-auto w-75"><?php print_r($category3->description); ?></p>
                                        <a href="<?php echo esc_url( $category3_link ); ?>" class="btn-h-a btn-cat">Ver más</a>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1500" class="col-12 col-lg-3 bg-azul_claro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term4);?>)">
                                <?php 
                                
                                $category4_link = get_category_link($term4);
                                if( $term4 ): ?>
                                    <?php $category4 = get_category( $term4 ); ?> 
                                    <a href="<?php echo esc_url( $category4_link ); ?>" class="d-block h-100 pt-4 c-blanco">
                                        <div class="c-text-cat w-100 text-center position-absolute mx-auto bg-amarillo-o pt-3 pb-4">
                                            <h2><?php print_r($category4->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category4->description); ?></p>
                                            <a href="<?php echo esc_url( $category4_link ); ?>" class="btn-h-a btn-cat">Ver más</a>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-lg-6 bg-primary c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term5);?>)">
                                <?php 
                                
                                $category5_link = get_category_link($term5);
                                if( $term5 ): ?>
                                    <?php $category5 = get_category( $term5 ); ?> 
                                    <a href="<?php echo esc_url( $category5_link ); ?>" class="d-block h-100 pt-4">
                                       <div class="c-text-cat text-center position-absolute mx-auto bg-blanco-o pt-3 pb-4">
                                            <h2><?php print_r($category5->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category5->description); ?></p>
                                            <a href="<?php echo esc_url( $category5_link ); ?>" class="btn-h-b btn-cat">Ver más</a>
                                       </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="1500" class="col-12 col-lg-6 bg-azul_oscuro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term6);?>)">
                                <?php 
                                
                                $category6_link = get_category_link($term6);
                                if( $term6 ): ?>
                                    <?php $category6 = get_category( $term6 ); ?> 
                                    <a href="<?php echo esc_url( $category6_link ); ?>" class="d-block h-100 pt-4 c-blanco">
                                        <div class="c-text-cat text-center position-absolute mx-auto bg-morado-o pt-3 pb-4 ">
                                            <h2><?php print_r($category6->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category6->description); ?></p>
                                            <a href="<?php echo esc_url( $category6_link ); ?>" class="btn-h-a btn-cat">Ver más</a>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-lg-6 bg-azul_claro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term7);?>)">
                            <?php 
                                
                                $category7_link = get_category_link($term7);
                                if( $term7 ): ?>
                                    <?php $category7 = get_category( $term7 ); ?> 
                                    <a href="<?php echo esc_url( $category7_link ); ?>" class="d-block h-100 pt-4 c-blanco">
                                       <div class="c-text-cat text-center position-absolute mx-auto bg-amarillo-o pt-3 pb-4 ">
                                       <h2><?php print_r($category7->name); ?></h2>
                                        <p class="mx-auto w-75"><?php print_r($category7->description); ?></p>
                                        <a href="<?php echo esc_url( $category7_link ); ?>" class="btn-h-a btn-cat">Ver más</a>
                                       </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div data-aos="fade-up" data-aos-duration="1500" class="col-12 col-lg-6 bg-azul_claro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term8);?>)">
                                <?php 
                                
                                $category8_link = get_category_link($term8);
                                if( $term8 ): ?>
                                    <?php $category8 = get_category( $term8 ); ?> 
                                    <a href="<?php echo esc_url( $category8_link ); ?>" class="d-block h-100 pt-4">
                                        <div class="c-text-cat text-center position-absolute mx-auto bg-blanco-o pt-3 pb-4">
                                            <h2><?php print_r($category8->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category8->description); ?></p>
                                            <a href="<?php echo esc_url( $category8_link ); ?>" class="btn-h-b btn-cat">Ver más</a>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-lg-6  bg-azul_oscuro c-blanco s-home" style="background:url(<?php echo get_field('imagen_categoria', 'category_'.$term9);?>)">
                                <?php 
                                
                                $category9_link = get_category_link($term9);
                                if( $term9 ): ?>
                                    <a href="<?php echo esc_url( $category8_link ); ?>" class="d-block h-100 pt-4 c-blanco">
                                        <?php $category9 = get_category( $term9 ); ?> 
                                       <div class="c-text-cat text-center position-absolute mx-auto bg-azul-o pt-3 pb-4">
                                            <h2><?php print_r($category9->name); ?></h2>
                                            <p class="mx-auto w-75"><?php print_r($category9->description); ?></p>
                                            <a href="<?php echo esc_url( $category9_link ); ?>" class="btn-h-a btn-cat">Ver más</a>
                                       </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
					<?php endwhile; // end of the loop. ?>
                    
				</main><!-- #main -->

			</div><!-- #primary -->
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
