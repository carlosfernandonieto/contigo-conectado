<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('d-lg-flex mb-4'); ?> id="post-<?php the_ID(); ?>">
	<div class="col-12 col-lg-4 img-articulo pr-lg-0 px-0">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>
	<div class="col-12 col-lg-8 info-articulo">
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

</article><!-- #post-## -->
