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
		<?php echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'img-fluid') ); ?>	
	</div>
	<div class="container px-md-0 my-4">

		<?php the_breadcrumb(); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="d-none d-md-block col-1 pl-0" id="share-media">
				<div class="entry-meta text-center">
					<p id="p-day" class="mb-1">
						<?php the_time('d'); ?>
					</p>
					<p id="p-month" class="text-uppercase">
						<?php the_time('M'); ?>
					</p>
				</div><!-- .entry-meta -->
				<?php
					  $url = urlencode(get_the_permalink());
					  $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
					  $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));
				?>
				<div id="c-sharebuttons" class="position-relative">
					<ul class="share-buttons pl-0">
						<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-fb@2x.png"></a></li>
						<li><a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>" target="_blank" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-tw@2x.png"></a></li>
						<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" target="_blank" title="LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-in@2x.png"></a></li>
						<li><a href="https://wa.me/?text=<?php echo $title; ?>%20%20<?php echo $url; ?>" target="_blank" title="Pinterest"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-wp@2x.png"></a></li>						
						<li><a href="#" class="social-share"><img src="<?php echo get_template_directory_uri(); ?>/images/btn-share@2x.png" class="img-fluid"></a></li>
					</ul><!-- /Share -->
				</div>
			</div>
			<section class="c-article col-11 col-lg-7">
				<header class="entry-header">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				

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
			<aside class="col-12 col-lg-4" id="related-posts">
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

					echo '<div id="relatedposts"><h3 class="text-uppercase">Artículos Relacionados</h3>';

					while( $my_query->have_posts() ) {
					$my_query->the_post(); ?>

					<article class="position-relative">
						<div class="relatedthumb position-absolute h-100">
							<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" class="d-block h-100">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="relatedcontent position-absolute bg-blanco-o">
							<h4 class="text-center">
								<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h4>
							<p class="text-center"><?php dynamic_excerpt(80); ?></p>
							<a class="btn-cta" href="<?php the_permalink();?>">Ver más</a>
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
