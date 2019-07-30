<?php setPostViews(get_the_ID()); ?>
<?php get_header(); ?>

		<?php 
			//get user like string from cookie for use in later check
			$like_string = mb_cookie_get_key_value ("inspire_cookie", "likes");
			$likes = get_post_meta(get_the_ID(), 'inspire_likes', true);
			if (empty($likes)) $likes = 0;

			$inspire_options_post = get_option('inspire_options_post');

			$layout = $inspire_options_post['post_style'];		//single, full, full_sidebar

			switch ($layout) {
				case "single":
					$featured_img_width = 650;
					break;
				case "full":
					$featured_img_width = 990;
					break;
				case "full_sidebar":
					$featured_img_width = 990;
					break;
				default:
					$featured_img_width = 650;
					break;
			}
			$post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
			if ($post_thumbnail_src[1] < $featured_img_width) $featured_img_width = $post_thumbnail_src[1];

			//get attachments
			 $args = array(
			   'post_type' => 'attachment',
			   'numberposts' => -1,
			   'post_status' => null,
			   'post_parent' => $post->ID
			  );

			  $project_attachments = get_posts( $args );
			  //var_dump($project_attachments);

		?>

		

		<div id="content" class="<?php echo $layout; ?>">


			<!-- BEGIN LOOP -->
			<?php while ( have_posts() ) : the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class($layout); ?> data-post_ID="<?php the_ID(); ?>" data-nonce="<?php echo wp_create_nonce('like_post'); ?>">


					<!-- FEATURED IMAGE FOR SINGLE & FULL-->
					<?php
						if (has_post_thumbnail(get_the_ID()) && ( $layout == "single" || $layout == "full") && isset($inspire_options_post['show_featured'])) {
						?>
							<div class='post-img'>
								<div class='flexslider flexslider_single'>
									<ul class="slides">
										<?php printf("<li><a href='%s'><img width='%d' src='%s'></a></li>", esc_url($post_thumbnail_src[0]), esc_attr($featured_img_width), esc_url($post_thumbnail_src[0])); ?>

										<?php 
											for ($i = 0; $i < count($project_attachments); $i++) {
												if (get_post_thumbnail_id(get_the_ID()) != $project_attachments[$i]->ID) {
													$attachment_src = wp_get_attachment_image_src($project_attachments[$i]->ID, 'full');
													printf("<li><a href='%s'><img width='%d' src='%s'></a></li>", esc_url($attachment_src[0]), esc_attr($featured_img_width), esc_url($attachment_src[0]));
												}
											}

										?>
									</ul>
								</div>
							</div>
						<?php
						}
					?>


					<!-- TITLE AND META -->
					<div class="post-title">
						<div class="categories">
							<span><svg class="icon_categories" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 463.552 463.552" style="enable-background:new 0 0 463.552 463.552;" xml:space="preserve" width="512px" height="512px">
								<g>
									<path d="M445.752,256.346l-179.9-180c-9.5-9.5-22.2-14.8-35.6-14.8c-1.1,0-2.2,0-3.3,0.1l-130.1,8.6c-14.1,0.9-25.5,12.3-26.4,26.4   l-3.1,46.2c-6.6-3.8-12.9-8.6-18.6-14.3c-13.9-13.9-22.5-31.2-24.3-48.8c-1.7-16.7,3.1-31.6,13.5-42c22.1-22.1,62.8-17.2,90.9,10.8   c4.7,4.7,12.3,4.7,17,0s4.7-12.3,0-17c-37.6-37.3-93.6-42.1-125-10.7c-15.6,15.6-22.8,37.3-20.4,61.4c2.3,23.1,13.4,45.6,31.2,63.4   c10,10,21.6,17.9,33.9,23.3l-3.8,57.9c-1,14.5,4.4,28.7,14.7,39l180,180c11.4,11.4,26.5,17.6,42.6,17.6l0,0   c16.1,0,31.2-6.3,42.6-17.6l104.3-104.3c11.4-11.4,17.6-26.5,17.6-42.6C463.452,282.746,457.152,267.646,445.752,256.346z    M428.852,324.446l-104.4,104.4c-6.8,6.8-15.9,10.6-25.6,10.6l0,0c-9.7,0-18.8-3.8-25.6-10.6l-180-180c-5.4-5.4-8.2-12.8-7.7-20.4   l3.5-52.4c2,0.3,4,0.6,6,0.8c3,0.3,6,0.5,8.9,0.5c20.5,0,38.8-7.2,52.4-20.8c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0   c-10.4,10.4-25.3,15.2-42,13.5c-2.3-0.2-4.5-0.6-6.7-1l3.6-53.6c0.1-2.2,1.9-3.9,4.1-4.1l130.1-8.6c0.6,0,1.2-0.1,1.8-0.1   c7,0,13.8,2.8,18.7,7.7l179.9,179.9c6.8,6.8,10.6,15.9,10.6,25.6C439.452,308.546,435.652,317.646,428.852,324.446z" fill="#006DF0"/>
								</g>
								</svg>
							</span>
							<?php $categories = getCategoriesPost(get_the_ID()); 
								foreach($categories as $category){
									?>
									<span><?php echo $category["name"]?></span>
								<?php } ?>
						</div>
						<h1><?php the_title(); ?></h1>
						<div class="item">
							<div class="meta">
								<div class="heart<?php if (mb_is_value_in_delim_string($like_string,get_the_ID(),",")) echo " liked"; ?>"><?php echo $likes; ?></div>
								<a href="<?php echo get_permalink(get_the_ID()); ?>/#comments"><span class="comment"><?php echo ($project_attachments[$i]->comment_count == "")?0:$project_attachments[$i]->comment_count; ?></span></a>
								<div class="count_views_post">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 456.793 456.793" style="enable-background:new 0 0 456.793 456.793;" xml:space="preserve">
										<g>
											<g>
												<path d="M448.947,218.474c-0.924-1.168-23.057-28.933-61-56.81c-50.707-37.253-105.879-56.944-159.551-56.944    c-53.673,0-108.845,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.396l7.845,9.923    c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.878,56.943,159.551,56.943c53.672,0,108.844-19.691,159.551-56.943    c37.943-27.877,60.076-55.643,61-56.811l7.846-9.923L448.947,218.474z M368.273,269.874    c-31.354,22.9-81.072,50.199-139.877,50.199s-108.524-27.299-139.877-50.199c-21.516-15.715-37.641-31.609-46.834-41.478    c9.197-9.872,25.32-25.764,46.833-41.478c31.354-22.901,81.072-50.2,139.877-50.2c58.804,0,108.525,27.299,139.876,50.2    c21.516,15.715,37.641,31.609,46.834,41.477C405.91,238.268,389.785,254.161,368.273,269.874z" fill="#00c8ff"/>
												<path d="M228.396,160.728c-16.416,0-31.465,5.849-43.183,15.572c9.273,2.715,16.049,11.279,16.049,21.431    c0,12.334-9.999,22.333-22.333,22.333c-6.482,0-12.316-2.764-16.396-7.174c-1.168,4.982-1.807,10.169-1.807,15.507    c0,37.373,30.297,67.669,67.67,67.669c37.372,0,67.668-30.296,67.668-67.669S265.77,160.728,228.396,160.728z" fill="#00c8ff"/>
											</g>
										</g>
									</svg>
									<?php echo round(getPostViews(get_the_ID())/2, 0, PHP_ROUND_HALF_UP);?>
								</div>
								<div title="Leer Después" id="<?php echo get_the_ID(); ?>" class="<?php if(count($readLater) == 0) echo 'read_later_class'; else echo 'read_later_selectec_class'; ?>" onclick="saveReadLate(<?php echo $user_id; ?>,<?php echo $results_query[$i]->ID; ?>,<?php echo count($readLater); ?>)">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										viewBox="0 0 18.8 24.3" style="enable-background:new 0 0 18.8 24.3;" xml:space="preserve">
										<path class="st0" d="M13.5,2.7H6.1c-1.3,0-2.4,1.1-2.4,2.4v15.6c0,0.4,0.2,0.7,0.5,0.8c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.4-0.1,0.6-0.3
										l4.6-4.6l4.6,4.6c0.2,0.2,0.6,0.3,0.9,0.2c0.3-0.1,0.5-0.5,0.5-0.8V5.1C15.8,3.8,14.8,2.7,13.5,2.7z M5.5,18.5V5.1
										c0-0.3,0.3-0.6,0.6-0.6h7.4c0.3,0,0.6,0.3,0.6,0.6v13.5l-3.7-3.7c-0.3-0.3-0.9-0.3-1.2,0L5.5,18.5z"/>
									</svg>

								</div>
							</div>
						</div>
					</div>

					<div class="image_article">
						<!-- FEATURED IMAGE FOR FULL_SIDEBAR-->
						<?php
							if (has_post_thumbnail(get_the_ID()) && $layout == "full_sidebar" && isset($inspire_options_post['show_featured'])) { 
							?>
								<div class='post-img full'>
									<div class='flexslider flexslider_single'>
										<ul class="slides">
											<?php printf("<li><a href='%s'><img width='%d' src='%s'></a></li>", esc_url($post_thumbnail_src[0]), esc_attr($featured_img_width), esc_url($post_thumbnail_src[0])); ?>

											<?php 
												for ($i = 0; $i < count($project_attachments); $i++) {
													if (get_post_thumbnail_id(get_the_ID()) != $project_attachments[$i]->ID) {
														$attachment_src = wp_get_attachment_image_src($project_attachments[$i]->ID, 'full');
														printf("<li><a href='%s'><img width='%d' src='%s'></a></li>", esc_url($attachment_src[0]), esc_attr($featured_img_width), esc_url($attachment_src[0]));
													}
												}

											?>
										</ul>
									</div>
								</div>
							<?php
							}
						?>
						<div class="text_article">
							
						</div>
					</div>
					
					<!-- MAIN CONTENT AND TAGS -->
					<div class="post-entry">

						<?php the_content(); ?>
						
						<?php wp_link_pages(); ?>
						
						<div class="clearfix"></div>
						
						<div class="tags">
							<?php the_tags("",""); ?>
						</div>
						<!-- SHARE THE LOVE -->
						<?php if (isset($inspire_options_post ['show_share'])) get_template_part('inc/templates/template_post_share_ariadna'); ?>	
					</div>
					<!-- COMMENTS -->
					<?php if (isset($inspire_options_post ['show_comments'])) comments_template( '', true ); ?>
					<!-- POST PAGINATION -->
					<?php if (isset($inspire_options_post ['show_pagination'])) get_template_part('inc/templates/template_post_pagination'); ?>
				</div>
				<!-- class: post -->

			<?php endwhile; ?>
			<!-- END LOOP -->
			<?php if ($layout == "single" || $layout == "full_sidebar") get_sidebar(); ?>
			
		</div> <!-- id:content -->


			
<?php get_footer(); ?>