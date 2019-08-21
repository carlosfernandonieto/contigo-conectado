<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class('d-lg-flex'); ?> id="post-<?php the_ID(); ?>">
	<div class="col-12 col-lg-6 img-articulo pr-lg-0 px-0" data-aos="fade-up" data-aos-duration="2000">
		
		<?php 
		$image = get_field('imagen_categoria', $post->ID);

		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />

		<?php endif; ?>
	</div>
	<div class="col-12 col-lg-6 info-articulo">
		<div class="c-article">
			<header class="entry-header">

				<?php
				the_title(
					sprintf( '<h2 class="entry-title mt-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
				?>

				<?php if ( 'post' == get_post_type() ) : ?>

				<?php endif; ?>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<?php the_excerpt(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		</div>
	</div>

</article><!-- #post-## -->
