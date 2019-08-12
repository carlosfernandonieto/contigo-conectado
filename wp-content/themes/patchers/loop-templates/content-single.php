<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div id="c-img-article">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>	
	</div>
	<div class="container px-0 my-4">

		<?php the_breadcrumb(); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-1 pl-0" id="share-media">
				<span>Compartir</span>
				<ul class="list-group text-center">
					<li><i class="fa fa-facebook-f"></i></li>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-linkedin"></i></li>
				</ul>
			</div>
			<section class="c-article col-12 col-lg-8">
				<header class="entry-header">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
				<?php the_time('M j, Y') ?>
				</div><!-- .entry-meta -->

				</header><!-- .entry-header -->



				<div class="entry-content">

				<?php the_content(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
					)
				);
				?>

				</div><!-- .entry-content -->
			</section>
			<aside class="col-12 col-lg-3" id="related-posts">
				<?php $orig_post = $post;
					global $post;
					$tags = wp_get_post_tags($post->ID);
					if ($tags) {
					$tag_ids = array();
					foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
					$args=array(
					'tag__in' => $tag_ids,
					'post__not_in' => array($post->ID),
					'posts_per_page'=>3, // Number of related posts that will be shown.
					'caller_get_posts'=>1
					);
					$my_query = new wp_query( $args );
					if( $my_query->have_posts() ) {

					echo '<div id="relatedposts"><h3>Artículos Relacionados</h3>';

					while( $my_query->have_posts() ) {
					$my_query->the_post(); ?>

					<article><div class="relatedthumb"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
						<div class="relatedcontent">
						<h4><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<?php the_time('M j, Y') ?>
						<?php the_excerpt(); ?>
						</div>
					</article>
					<? }
					echo '</div>';
					}
					}
					$post = $orig_post;
				wp_reset_query(); ?>
			</aside>
		</div><!-- fin row -->
	</div>

</article><!-- #post-## -->
