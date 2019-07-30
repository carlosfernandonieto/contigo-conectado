<div class="column_rigth">
	<div class="form_send_in_blue">
	<?php echo do_shortcode( '[sibwp_form id=1]' ); ?>
	</div>
	<div id="sidebar">
		<div class="seccion_title">
			<h2>POST RECIENTES</h2>
		</div>
		<ul class="recent_post">
			<?php 
				$posts = get_posts(["exclude"=>get_the_ID(),"numberposts"=>4]);
				foreach($posts as $post){
			?>
					<li class="li_post">
						<a href="<?php echo get_permalink($post->ID); ?>">
							<div class="li_image_post">
								<?php  
									$post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"medium");
								?>
								<div class="li_image_circle">
									<img src="<?php echo $post_thumbnail_src[0]; ?>" alt="">
								</div>
								
								<div class="li_date item_month"><?php echo mb_localize_datetime(format_datetime_str(get_option('date_format'), $post->post_date));?></div> 
							</div>
							<div class="li_title_post">
								<h2><?php echo $post->post_title; ?></h2>
							</div>
						</a>
					</li>
			<?php } ?>
		</ul>
	</div>
	<div id="related_posts">
		<div class="seccion_title">
			<h2>Tal vez te interese:</h2>
		</div>
		<ul class="recent_post">
			<?php 
				$categories = getCategoriesPost(get_the_ID());
				$sCategoriesIds = "";
				$like_string = mb_cookie_get_key_value ("inspire_cookie", "likes");
				
				foreach($categories as $category){
					if(strcmp($sCategoriesIds,"") == 0)
					{
						$sCategoriesIds = "".$category["id"];
					}else{
						$sCategoriesIds .= ",".$category["id"];
					}
				} 
				$posts = get_posts(["exclude"=>get_the_ID(),"numberposts"=>3,"category"=>$sCategoriesIds]);
				foreach($posts as $post){
					$likes = get_post_meta($post->ID, 'inspire_likes', true);
					if (empty($likes)) $likes = 0;
			?>
					<li class="li_post">
						<a href="<?php echo get_permalink($post->ID); ?>">
							<div class="li_image_post_related">
								<?php  
									$post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),"medium");
								?>
								<img src="<?php echo $post_thumbnail_src[0]; ?>" alt="">
							</div>
							<div class="li_title_post">
								<div class="categories">
								<svg class="icon_categories" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 463.552 463.552" style="enable-background:new 0 0 463.552 463.552;" xml:space="preserve" width="512px" height="512px">
									<g>
									<path d="M445.752,256.346l-179.9-180c-9.5-9.5-22.2-14.8-35.6-14.8c-1.1,0-2.2,0-3.3,0.1l-130.1,8.6c-14.1,0.9-25.5,12.3-26.4,26.4   l-3.1,46.2c-6.6-3.8-12.9-8.6-18.6-14.3c-13.9-13.9-22.5-31.2-24.3-48.8c-1.7-16.7,3.1-31.6,13.5-42c22.1-22.1,62.8-17.2,90.9,10.8   c4.7,4.7,12.3,4.7,17,0s4.7-12.3,0-17c-37.6-37.3-93.6-42.1-125-10.7c-15.6,15.6-22.8,37.3-20.4,61.4c2.3,23.1,13.4,45.6,31.2,63.4   c10,10,21.6,17.9,33.9,23.3l-3.8,57.9c-1,14.5,4.4,28.7,14.7,39l180,180c11.4,11.4,26.5,17.6,42.6,17.6l0,0   c16.1,0,31.2-6.3,42.6-17.6l104.3-104.3c11.4-11.4,17.6-26.5,17.6-42.6C463.452,282.746,457.152,267.646,445.752,256.346z    M428.852,324.446l-104.4,104.4c-6.8,6.8-15.9,10.6-25.6,10.6l0,0c-9.7,0-18.8-3.8-25.6-10.6l-180-180c-5.4-5.4-8.2-12.8-7.7-20.4   l3.5-52.4c2,0.3,4,0.6,6,0.8c3,0.3,6,0.5,8.9,0.5c20.5,0,38.8-7.2,52.4-20.8c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0   c-10.4,10.4-25.3,15.2-42,13.5c-2.3-0.2-4.5-0.6-6.7-1l3.6-53.6c0.1-2.2,1.9-3.9,4.1-4.1l130.1-8.6c0.6,0,1.2-0.1,1.8-0.1   c7,0,13.8,2.8,18.7,7.7l179.9,179.9c6.8,6.8,10.6,15.9,10.6,25.6C439.452,308.546,435.652,317.646,428.852,324.446z" fill="#006DF0"/>
									</g>
								</svg>
										<?php $categories = getCategoriesPost($post->ID); 
										foreach($categories as $category){
											?>
											<?php echo $category["name"]?>
										<?php } ?>
								</div>
								<h2><?php echo $post->post_title; ?></h2>
							</div>
							<div class="li_description_post">
								<?php 
									$result_cmb_excerpt = get_post_meta($post->ID, 'cmb_excerpt', true);
									if (empty($result_cmb_excerpt)) mb_make_excerpt($post->post_content, 150, true);
								?>
								<p><?php echo $result_cmb_excerpt; ?></p>
							</div>
							</a>
							<div class="item">
								<div class="meta">
									<div class="heart<?php if (mb_is_value_in_delim_string($like_string,$post->ID,",")) echo " liked"; ?>"><?php echo $likes; ?></div>
									<div class="count_views_post">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 456.793 456.793" style="enable-background:new 0 0 456.793 456.793;" xml:space="preserve">
											<g>
												<g>
													<path d="M448.947,218.474c-0.924-1.168-23.057-28.933-61-56.81c-50.707-37.253-105.879-56.944-159.551-56.944    c-53.673,0-108.845,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.396l7.845,9.923    c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.878,56.943,159.551,56.943c53.672,0,108.844-19.691,159.551-56.943    c37.943-27.877,60.076-55.643,61-56.811l7.846-9.923L448.947,218.474z M368.273,269.874    c-31.354,22.9-81.072,50.199-139.877,50.199s-108.524-27.299-139.877-50.199c-21.516-15.715-37.641-31.609-46.834-41.478    c9.197-9.872,25.32-25.764,46.833-41.478c31.354-22.901,81.072-50.2,139.877-50.2c58.804,0,108.525,27.299,139.876,50.2    c21.516,15.715,37.641,31.609,46.834,41.477C405.91,238.268,389.785,254.161,368.273,269.874z" fill="#00c8ff"/>
													<path d="M228.396,160.728c-16.416,0-31.465,5.849-43.183,15.572c9.273,2.715,16.049,11.279,16.049,21.431    c0,12.334-9.999,22.333-22.333,22.333c-6.482,0-12.316-2.764-16.396-7.174c-1.168,4.982-1.807,10.169-1.807,15.507    c0,37.373,30.297,67.669,67.67,67.669c37.372,0,67.668-30.296,67.668-67.669S265.77,160.728,228.396,160.728z" fill="#00c8ff"/>
												</g>
											</g>
										</svg>
										<?php echo round(getPostViews($post->ID)/2, 0, PHP_ROUND_HALF_UP); ?>
									</div>
									<a href="<?php echo get_permalink($post->ID); ?>/#comments"><span class="comment"><?php echo $post->comment_count; ?></span></a>
									<div title="Leer Después" <?php echo "id='".$post->ID."'"; ?> class="<?php if(count($readLater) == 0) echo 'read_later_class'; else echo 'read_later_selectec_class'; ?>" onclick="saveReadLate(<?php echo $user_id; ?>,<?php echo $post->ID; ?>,<?php echo count($readLater); ?>)">
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
										<style type="text/css">
											.st0{fill:#00c8ff;stroke:#202020;stroke-miterlimit:10;}
										</style>
										<polygon id="XMLID_1861_" class="st0" points="40.4,45.6 25,33.6 9.6,45.6 9.6,4.4 40.4,4.4 "/>
									</svg>
									</div>
								</div>
							</div>
					</li>
			<?php } ?>
		</ul>
	</div>
</div>
<!-- END SIDEBAR -->