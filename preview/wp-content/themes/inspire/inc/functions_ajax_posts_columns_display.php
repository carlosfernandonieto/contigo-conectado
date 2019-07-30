<?php

			for ($i = 0; $i < count($results_query); $i++) { 

				$result_cmb_comp_feat_img = get_post_meta($results_query[$i]->ID, 'cmb_comp_feat_img', true);
				$result_cmb_comp_media = get_post_meta($results_query[$i]->ID, 'cmb_comp_media', true);
				$result_cmb_comp_title = get_post_meta($results_query[$i]->ID, 'cmb_comp_title', true);
				$result_cmb_comp_excerpt = get_post_meta($results_query[$i]->ID, 'cmb_comp_excerpt', true);
				$result_cmb_comp_meta = get_post_meta($results_query[$i]->ID, 'cmb_comp_meta', true);
				$result_cmb_comp_quote = get_post_meta($results_query[$i]->ID, 'cmb_comp_quote', true);
				$result_cmb_comp_feat_img_lightbox = get_post_meta($results_query[$i]->ID, 'cmb_comp_feat_img_lightbox', true);
				$result_cmb_comp_media_link = get_post_meta($results_query[$i]->ID, 'cmb_comp_media_link', true);
				$result_cmb_excerpt = get_post_meta($results_query[$i]->ID, 'cmb_excerpt', true);

				$result_cmb_exist = get_post_meta($results_query[$i]->ID, 'cmb_exist', true);

				//defaults
				if (empty($result_cmb_exist)) {
					$result_cmb_comp_feat_img = "checked";
					$result_cmb_comp_title = "checked";
					$result_cmb_comp_excerpt = "checked";
					$result_cmb_comp_meta = "checked";
				} 
				$tags = wp_get_post_tags($results_query[$i]->ID);
				$tagsName = "";
				
				foreach ($tags as $key => $tag) {
					$tagsName .= $tag->name . " ";
				}
				$user_id = get_current_user_id();
				$readLater = get_list_by_user_id_and_post_id($user_id,$results_query[$i]->ID);
			?> 

					<div data-article="<?php echo $tagsName; ?>" class="item column<?php echo $columns; ?>" data-post_ID="<?php echo $results_query[$i]->ID; ?>" data-nonce="<?php echo wp_create_nonce('like_post'); ?>">
						<div class="item-thumb">
						<input type="hidden" value="<?php echo count($readLater); ?>">
						<?php
							//FEATURED IMAGE
							if (has_post_thumbnail($results_query[$i]->ID) && $result_cmb_comp_feat_img == "checked") {
								if ($result_cmb_comp_feat_img_lightbox == "checked") {
									$post_thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($results_query[$i]->ID),"full");
									echo get_the_post_thumbnail($results_query[$i]->ID, array($featured_img_width,9999));	
									printf('<a href="%s"><span class="zoom"></span></a>', esc_url($post_thumbnail_src[0]));	
								} else {
									printf("<a href='%s'>%s</a>",  esc_url(get_permalink($results_query[$i]->ID)),get_the_post_thumbnail($results_query[$i]->ID, array($featured_img_width,9999)));
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
									<div class="item-title<?php if ($result_cmb_comp_title=='checked' && $result_cmb_comp_excerpt=='checked') echo " double" ?>">
										<h2 <?php if($result_cmb_comp_quote == "checked") echo "class='quote_header'"; ?>><a href="<?php echo get_permalink($results_query[$i]->ID); ?>"><?php echo $results_query[$i]->post_title; ?></a></h2>
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
											<a href="<?php echo get_permalink($results_query[$i]->ID); ?>"><blockquote> <?php if (!empty($result_cmb_excerpt)) {echo do_shortcode($result_cmb_excerpt);} else {echo mb_make_excerpt($results_query[$i]->post_content, $default_excerpt_len, true);} ?> </blockquote></a>
										</div>
									<?php		
									} else {
									?>
										<div class="item-excerpt">
											<a href="<?php echo get_permalink($results_query[$i]->ID); ?>"><p><?php if (!empty($result_cmb_excerpt)) {echo do_shortcode($result_cmb_excerpt);} else {echo mb_make_excerpt($results_query[$i]->post_content, $default_excerpt_len, true);} ?></p></a>
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
									<span class="heart<?php if (mb_is_value_in_delim_string($like_string,$results_query[$i]->ID,",")) echo " liked"; ?>"><?php echo $likes; ?></span>
									<span class="date"><?php echo mb_localize_datetime(format_datetime_str(get_option('date_format'), $results_query[$i]->post_date));?></span>
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
									<div title="Leer Después" <?php echo "id=".$results_query[$i]->ID; ?> class="<?php if(count($readLater) == 0) echo 'read_later_class'; else echo 'read_later_selectec_class'; ?>" onclick="saveReadLate(<?php echo $user_id; ?>,<?php echo $results_query[$i]->ID; ?>,<?php echo count($readLater); ?>)">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 viewBox="0 0 487.803 487.803" style="enable-background:new 0 0 487.803 487.803;" xml:space="preserve">
										<g>
											<path d="M480.6,296.133L416,91.033c-9.1-29.9-40.9-46.8-70.8-37.7c-7.1,2.2-11.2,9.7-9,16.8s9.7,11.2,16.8,9
												c15.7-4.8,32.3,4.1,37.1,19.8v0.1l46.2,146.9c-14.7-8.3-31.6-13-49.6-13c-51.8,0-94.6,39.2-100.4,89.4h-85
												c-6.6-49.4-49-87.6-100.2-87.6c-18.1,0-35.1,4.8-49.8,13.1l46.8-148.8v-0.1c4.8-15.7,21.4-24.6,37.1-19.8c7.1,2.2,14.7-1.9,16.8-9
												c2.2-7.1-1.9-14.7-9-16.8c-29.9-9.1-61.6,7.8-70.8,37.7l-64.4,205.3c-0.2,0.6-0.3,1.1-0.4,1.7c-4.7,11.7-7.4,24.5-7.4,37.8
												c0,55.7,45.4,101.1,101.1,101.1c51.2,0,93.6-38.2,100.2-87.6h85.5c7.4,48.5,49.4,85.8,99.9,85.8c55.7,0,101.1-45.4,101.1-101.1
												C487.9,320.633,485.3,307.833,480.6,296.133z M101.2,409.933c-40.9,0-74.1-33.2-74.1-74.1s33.2-74.1,74.1-74.1s74.1,33.2,74.1,74.1
												S142,409.933,101.2,409.933z M386.8,408.133c-40.9,0-74.1-33.2-74.1-74.1s33.3-74.1,74.1-74.1s74.1,33.2,74.1,74.1
												S427.7,408.133,386.8,408.133z"/>
										</g>
										</svg>
									</div>
								</div>
							<?php
							}
						?>

					</div>

			<?php
			}

