<?php

for ( $i = 0; $i < count( $results_query ); $i++ ) {

	$result_cmb_comp_feat_img = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_feat_img', true );
	$result_cmb_comp_media = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_media', true );
	$result_cmb_comp_title = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_title', true );
	$result_cmb_comp_excerpt = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_excerpt', true );
	$result_cmb_comp_meta = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_meta', true );
	$result_cmb_comp_quote = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_quote', true );
	$result_cmb_comp_feat_img_lightbox = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_feat_img_lightbox', true );
	$result_cmb_comp_media_link = get_post_meta( $results_query[ $i ]->ID, 'cmb_comp_media_link', true );
	$result_cmb_excerpt = get_post_meta( $results_query[ $i ]->ID, 'cmb_excerpt', true );

	$result_cmb_exist = get_post_meta( $results_query[ $i ]->ID, 'cmb_exist', true );

	//defaults
	if ( empty( $result_cmb_exist ) ) {
		$result_cmb_comp_feat_img = "checked";
		$result_cmb_comp_title = "checked";
		$result_cmb_comp_excerpt = "checked";
		$result_cmb_comp_meta = "checked";
	}
	$tags = wp_get_post_tags( $results_query[ $i ]->ID );
	$tagsName = "";

	foreach ( $tags as $key => $tag ) {
		$tagsName .= $tag->name . " ";
	}
	$user_id = get_current_user_id();
	$readLater = get_list_by_user_id_and_post_id( $user_id, $results_query[ $i ]->ID );
	?>

	<div data-article="<?php echo $tagsName; ?>" class="item column<?php echo $columns; ?>" data-post_ID="<?php echo $results_query[$i]->ID; ?>" data-nonce="<?php echo wp_create_nonce('like_post'); ?>">
		<div class="item_month"><?php echo mb_localize_datetime(format_datetime_str(get_option('date_format'), $results_query[$i]->post_date));?></div>
		<div class="item-thumb">
			<?php
			//FEATURED IMAGE
			if ( has_post_thumbnail( $results_query[ $i ]->ID ) && $result_cmb_comp_feat_img == "checked" ) {
				if ( $result_cmb_comp_feat_img_lightbox == "checked" ) {
					$post_thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $results_query[ $i ]->ID ), "full" );
					echo get_the_post_thumbnail( $results_query[ $i ]->ID, array( $featured_img_width, 9999 ) );
					printf( '<a href="%s"><span class="zoom"></span></a>', esc_url( $post_thumbnail_src[ 0 ] ) );
				} else {
					printf( "<a href='%s'>%s</a>", esc_url( get_permalink( $results_query[ $i ]->ID ) ), get_the_post_thumbnail( $results_query[ $i ]->ID, array( $featured_img_width, 9999 ) ) );
				}
			}
			?>

		</div>

		<?php 
								//MEDIA
								if ($result_cmb_comp_media == "checked") {
								?>
		<div class="item-media">
			<?php echo $result_cmb_comp_media_link; ?>
		</div>
		<?php
		}
		?>

		<?php 
								//TITLE
								if ($result_cmb_comp_title == "checked") {
								?>
		<div class="item-title<?php if ($result_cmb_comp_title=='checked' && $result_cmb_comp_excerpt=='checked') echo " double " ?>">
			<div class="categories">
				<span><svg class="icon_categories" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 463.552 463.552" style="enable-background:new 0 0 463.552 463.552;" xml:space="preserve" width="512px" height="512px">
												<g>
													<path d="M445.752,256.346l-179.9-180c-9.5-9.5-22.2-14.8-35.6-14.8c-1.1,0-2.2,0-3.3,0.1l-130.1,8.6c-14.1,0.9-25.5,12.3-26.4,26.4   l-3.1,46.2c-6.6-3.8-12.9-8.6-18.6-14.3c-13.9-13.9-22.5-31.2-24.3-48.8c-1.7-16.7,3.1-31.6,13.5-42c22.1-22.1,62.8-17.2,90.9,10.8   c4.7,4.7,12.3,4.7,17,0s4.7-12.3,0-17c-37.6-37.3-93.6-42.1-125-10.7c-15.6,15.6-22.8,37.3-20.4,61.4c2.3,23.1,13.4,45.6,31.2,63.4   c10,10,21.6,17.9,33.9,23.3l-3.8,57.9c-1,14.5,4.4,28.7,14.7,39l180,180c11.4,11.4,26.5,17.6,42.6,17.6l0,0   c16.1,0,31.2-6.3,42.6-17.6l104.3-104.3c11.4-11.4,17.6-26.5,17.6-42.6C463.452,282.746,457.152,267.646,445.752,256.346z    M428.852,324.446l-104.4,104.4c-6.8,6.8-15.9,10.6-25.6,10.6l0,0c-9.7,0-18.8-3.8-25.6-10.6l-180-180c-5.4-5.4-8.2-12.8-7.7-20.4   l3.5-52.4c2,0.3,4,0.6,6,0.8c3,0.3,6,0.5,8.9,0.5c20.5,0,38.8-7.2,52.4-20.8c4.7-4.7,4.7-12.3,0-17s-12.3-4.7-17,0   c-10.4,10.4-25.3,15.2-42,13.5c-2.3-0.2-4.5-0.6-6.7-1l3.6-53.6c0.1-2.2,1.9-3.9,4.1-4.1l130.1-8.6c0.6,0,1.2-0.1,1.8-0.1   c7,0,13.8,2.8,18.7,7.7l179.9,179.9c6.8,6.8,10.6,15.9,10.6,25.6C439.452,308.546,435.652,317.646,428.852,324.446z" fill="#006DF0"/>
												</g>
												</svg>
											</span>
			
				<?php $categories = getCategoriesPost($results_query[$i]->ID); 
												foreach($categories as $category){
													?>
				<span>
					<?php echo $category["name"]?>
				</span>
				<?php } ?>
			</div>
			<h2 <?php if($result_cmb_comp_quote=="checked" ) echo "class='quote_header'"; ?>><a href="<?php echo get_permalink($results_query[$i]->ID); ?>"><?php echo $results_query[$i]->post_title; ?></a></h2>
		</div>
		<?php
		}
		?>
		<?php 
								//EXCERPT
								if ($result_cmb_comp_excerpt == "checked") {

									if ($result_cmb_comp_quote == "checked") {
									?>
		<div class="item-excerpt quote">
			<a href="<?php echo get_permalink($results_query[$i]->ID); ?>">
				<blockquote>
					<?php if (!empty($result_cmb_excerpt)) {echo do_shortcode($result_cmb_excerpt);} else {echo mb_make_excerpt($results_query[$i]->post_content, $default_excerpt_len, true);} ?> </blockquote>
			</a>
		</div>
		<?php
		} else {
			?>
		<div class="item-excerpt">
			<a href="<?php echo get_permalink($results_query[$i]->ID); ?>">
				<p>
					<?php if (!empty($result_cmb_excerpt)) {echo do_shortcode($result_cmb_excerpt);} else {echo mb_make_excerpt($results_query[$i]->post_content, $default_excerpt_len, true);} ?>
				</p>
			</a>
		</div>
		<?php
		}
		}
		?>

		<?php 
							//META
							if ($result_cmb_comp_meta == "checked") {
								$likes = get_post_meta($results_query[$i]->ID, 'inspire_likes', true);
								if (empty($likes)) $likes = 0;
							?>
		<div class="meta">
			<div class="heart<?php if (mb_is_value_in_delim_string($like_string,$results_query[$i]->ID," , ")) echo " liked "; ?>">
				<?php echo $likes; ?>
			</div>
			<div class="date">
				<?php echo mb_localize_datetime(format_datetime_str("F", $results_query[$i]->post_date));?>
			</div>
			<div class="count_views_post">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 456.793 456.793" style="enable-background:new 0 0 456.793 456.793;" xml:space="preserve">
					<g>
						<g>
							<path d="M448.947,218.474c-0.924-1.168-23.057-28.933-61-56.81c-50.707-37.253-105.879-56.944-159.551-56.944    c-53.673,0-108.845,19.691-159.551,56.944c-37.944,27.876-60.077,55.642-61,56.81L0,228.396l7.845,9.923    c0.923,1.168,23.056,28.934,61,56.811c50.707,37.252,105.878,56.943,159.551,56.943c53.672,0,108.844-19.691,159.551-56.943    c37.943-27.877,60.076-55.643,61-56.811l7.846-9.923L448.947,218.474z M368.273,269.874    c-31.354,22.9-81.072,50.199-139.877,50.199s-108.524-27.299-139.877-50.199c-21.516-15.715-37.641-31.609-46.834-41.478    c9.197-9.872,25.32-25.764,46.833-41.478c31.354-22.901,81.072-50.2,139.877-50.2c58.804,0,108.525,27.299,139.876,50.2    c21.516,15.715,37.641,31.609,46.834,41.477C405.91,238.268,389.785,254.161,368.273,269.874z" fill="#00c7ff"/>
							<path d="M228.396,160.728c-16.416,0-31.465,5.849-43.183,15.572c9.273,2.715,16.049,11.279,16.049,21.431    c0,12.334-9.999,22.333-22.333,22.333c-6.482,0-12.316-2.764-16.396-7.174c-1.168,4.982-1.807,10.169-1.807,15.507    c0,37.373,30.297,67.669,67.67,67.669c37.372,0,67.668-30.296,67.668-67.669S265.77,160.728,228.396,160.728z" fill="#00c7ff"/>
						</g>
					</g>
				</svg>
				<?php echo round(getPostViews($results_query[$i]->ID)/2, 0, PHP_ROUND_HALF_UP); ?>
			</div>
			<a href="<?php echo get_permalink($results_query[$i]->ID); ?>/#comments"><span class="comment"><?php echo $results_query[$i]->comment_count; ?></span></a>
			<div class="share_social_media">
				<a title="Compartir en Facebook" target="_blank" class="share_face_home_link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($results_query[$i]->ID); ?>"><span class="share_home"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve" class="svg_facebook_home">
											<g>
												<path id="f_1_" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184   c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452   v20.341H37.29v27.585h23.814v70.761H89.584z"/>
											</g>
											</svg></span></a>
			
				<a title="Compartir en Twitter" class="share_face_home_link" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink($results_query[$i]->ID); ?>" target="_blank"><span class="share_home"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="svg_twitter_home">
											<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
												c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
												c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
												c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
												c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
												c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
												C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
												C480.224,136.96,497.728,118.496,512,97.248z"/>
											</svg></span></a>
			
				<a title="Compartir en LinkedIn" class="share_face_home_link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($results_query[$i]->ID); ?>&title=<?php echo $results_query[$i]->post_title; ?>" target="_blank"><span class="share_home"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 512.02 512.02" style="enable-background:new 0 0 512.02 512.02;" xml:space="preserve" class="svg_linkedin_home">
									<g transform="translate(0 -1)">
										<path d="M61.813,5.424c33.545,0,61.793,28.248,61.793,61.793c0,35.31-30.014,62.676-61.793,61.793
											C29.151,129.893,0.02,102.527,0.02,67.217C-0.863,32.789,27.386,5.424,61.813,5.424"/>
										<path d="M96.241,508.596H25.62c-9.71,0-17.655-7.945-17.655-17.655V181.976
											c0-9.71,7.062-17.655,16.772-17.655h71.503c9.71,0,17.655,7.945,17.655,17.655v309.848
											C113.896,500.651,105.951,508.596,96.241,508.596"/>
										<path d="M511.137,272.017c0-65.324-48.552-116.524-113.876-116.524h-18.538
											c-35.31,0-69.738,16.772-88.276,44.138c-6.179,6.179-8.828,8.828-8.828,8.828v-35.31c0-3.531-5.297-8.828-8.828-8.828h-88.276
											c-3.531,0-8.828,3.531-8.828,7.945v329.269c0,3.531,5.297,7.062,8.828,7.062h97.103c3.531,0,8.828-3.531,8.828-7.062V310.858
											c0-32.662,24.717-60.028,57.379-60.91c16.772,0,31.779,6.179,43.255,17.655c10.593,10.593,15.007,25.6,15.007,42.372v189.793
											c0,3.531,5.297,8.828,8.828,8.828h88.276c3.531,0,8.828-5.297,8.828-8.828V272.017H511.137z"/>
									</g>
									</svg></span></a>
			
			</div>
			<div title="Leer Después" <?php echo "id=".$results_query[$i]->ID; ?> class="
				<?php if(count($readLater) == 0) echo 'read_later_class'; else echo 'read_later_selectec_class'; ?>" onclick="saveReadLate(
				<?php echo $user_id; ?>,
				<?php echo $results_query[$i]->ID; ?>,
				<?php echo count($readLater); ?>)">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 18.8 24.3" style="enable-background:new 0 0 18.8 24.3;" xml:space="preserve">
<path class="st0" d="M13.5,2.7H6.1c-1.3,0-2.4,1.1-2.4,2.4v15.6c0,0.4,0.2,0.7,0.5,0.8c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.4-0.1,0.6-0.3
	l4.6-4.6l4.6,4.6c0.2,0.2,0.6,0.3,0.9,0.2c0.3-0.1,0.5-0.5,0.5-0.8V5.1C15.8,3.8,14.8,2.7,13.5,2.7z M5.5,18.5V5.1
	c0-0.3,0.3-0.6,0.6-0.6h7.4c0.3,0,0.6,0.3,0.6,0.6v13.5l-3.7-3.7c-0.3-0.3-0.9-0.3-1.2,0L5.5,18.5z"/>
</svg>

			</div>
		</div>
		<?php
		}
		?>

	</div>

	<?php
}