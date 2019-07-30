		<?php 

			$inspire_options_hp = get_option('inspire_options_hp');

			if (isset($inspire_options_hp['show_slider'])) {

				$results_slider_posts = get_posts(array(
					'numberposts'		=> -1,
					'meta_key'			=> 'cmb_slider_feature',
					'meta_value'		=> 'checked',
					'orderby'			=> 'post_date',
					'order'				=> 'DESC',
					'post_type'    		=> 'post',
					'post_status'     	=> 'publish',
					'suppress_filters'  => true,
				));

				$order_array = mb_get_updated_order_array($results_slider_posts);


	 	?>
			<div class="flexslider">
				<ul class="slides">

					<?php 
						for ($i = 0; $i < count($results_slider_posts); $i++) {
							$current_id = $order_array[$i];  
							//get the array key for the object from $results_slider_posts where ID is = $current_id
							for ($n = 0; $n < count($results_slider_posts); $n++) { 
								if ($results_slider_posts[$n]->ID == $current_id) {
									$current_key = $n;
									break;	
								}
							}
							date_default_timezone_set('America/Bogota');
							setlocale(LC_ALL,"es_ES");
							$result_cmb_slider_use_cap_header = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_use_cap_header', true);
							$result_cmb_slider_cap_header = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_cap_header', true);
							$result_cmb_slider_use_cap_text = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_use_cap_text', true);
							$result_cmb_slider_cap_text = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_cap_text', true);
							$result_cmb_slider_use_link = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_use_link', true);
							$result_cmb_slider_link = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_link', true);
							$result_cmb_slider_use_media = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_use_media', true);
							$result_cmb_slider_media = get_post_meta($results_slider_posts[$current_key]->ID, 'cmb_slider_media', true);

							if ($result_cmb_slider_use_media == 'checked') {
								if (!empty($result_cmb_slider_media)) {
								?>
									<li class="slide-home">
										<?php echo $result_cmb_slider_media; ?>
									</li>
								<?php	
								}
									
							} else {
								if (has_post_thumbnail($results_slider_posts[$current_key]->ID)) {
								?> 
									<li class="slide-home">
										<?php 
											$td_slider_link = !empty($result_cmb_slider_use_link) ? $result_cmb_slider_link : get_permalink($results_slider_posts[$current_key]->ID);
											printf("<a href='%s'>%s</a>",  esc_url($td_slider_link),get_the_post_thumbnail($results_slider_posts[$current_key]->ID, 'full'));
											$aCategories = getCategoriesPost($results_slider_posts[$current_key]->ID);
											$sCategories = "";

											foreach($aCategories as $category)
											{
												if(strcmp($sCategories,"") == 0)
												{
													$sCategories = $category["name"];
												}else{
													$sCategories .= ",".$category["name"];
												}
											}
										 ?>

										<div class="slider-text">
											<input type="hidden" class="value_tag" value="<?php echo $sCategories; ?>"/>
											<?php 
												if ($result_cmb_slider_use_cap_header == "checked" && !empty($result_cmb_slider_cap_header)) {
												?>
													<a href="<?php echo get_permalink($results_slider_posts[$current_key]->ID); ?>">
														<div class="slider-title"><h1><?php echo $result_cmb_slider_cap_header; ?></h1></div>
														<div class="slider-date"><p><?php 
															$date = new DateTime($results_slider_posts[$current_key]->post_date);
															echo ucwords(strftime("%h %e, %Y",$date->getTimestamp())); 
															?></p></div>
													</a>
												<?php		
												}
											?>

											<?php 
												if ($result_cmb_slider_use_cap_text == "checked" && !empty($result_cmb_slider_cap_text)) {
												?>
													<a href="<?php echo get_permalink($results_slider_posts[$current_key]->ID); ?>">
														<div class="slider-title"><h1><?php echo $results_slider_posts[$current_key]->post_title; ?></h1></div>
														<div class="slider-excerpt"><p><?php echo $result_cmb_slider_cap_text; ?></p></div>
														<div class="slider-date"><p><?php echo $results_slider_posts[$current_key]->post_date; ?></p></div>
													</a>
												<?php
												}
											?>

										</div>

									</li>
								<?php
								}
									
							} //if media or thumbnail
									
						} //fori
					?>

				</ul>
				<div class="gradiente_slides">
					<div class="content_slide">
						<div class="content_cell">
							<div class="name_blog">Blog</div>
							<div class="title_slide"></div>
							<div class="meta_slide">
								<div class="meta_date">
									<div class="clock_banner">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
											<g>
												<g>
													<path d="M587.572,186.881c-32.266-75.225-87.096-129.934-162.949-162.285C386.711,8.427,346.992,0.168,305.497,0.168    c-41.488,0-80.914,8.181-118.784,24.428C111.488,56.861,56.415,111.535,24.092,186.881C7.895,224.629,0,264.176,0,305.664    c0,41.496,7.895,81.371,24.092,119.127c32.323,75.346,87.403,130.348,162.621,162.621c37.877,16.247,77.295,24.42,118.784,24.42    c41.489,0,81.214-8.259,119.12-24.42c75.853-32.352,130.683-87.403,162.956-162.621C603.819,386.914,612,347.16,612,305.664    C612,264.176,603.826,224.757,587.572,186.881z M538.724,440.853c-24.021,41.195-56.929,73.876-98.375,98.039    c-41.195,24.021-86.332,36.135-134.845,36.135c-36.47,0-71.27-7.024-104.4-21.415c-33.129-14.384-61.733-33.294-85.661-57.215    c-23.928-23.928-42.973-52.811-57.214-85.997c-14.199-33.065-21.08-68.258-21.08-104.735c0-48.52,11.921-93.428,35.807-134.509    c23.971-41.231,56.886-73.947,98.039-98.04c41.146-24.092,85.99-36.142,134.502-36.142c48.52,0,93.649,12.121,134.845,36.142    c41.446,24.164,74.283,56.879,98.375,98.039c24.092,41.153,36.135,85.99,36.135,134.509    C574.852,354.185,562.888,399.399,538.724,440.853z" fill="#FFFFFF"/>
													<path d="M324.906,302.988V129.659c0-10.372-9.037-18.738-19.41-18.738c-9.701,0-18.403,8.366-18.403,18.738v176.005    c0,0.336,0.671,1.678,0.671,2.678c-0.671,6.024,1.007,11.043,5.019,15.062l100.053,100.046c6.695,6.695,19.073,6.695,25.763,0    c7.694-7.695,7.188-18.86,0-26.099L324.906,302.988z" fill="#FFFFFF"/>
												</g>
											</g>
										</svg>
									</div>
									<span id="date_article_banner"></span>
								</div>
								<div class="meta_categories">
									<div class="tag_banner">
										<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											viewBox="0 0 59.998 59.998" style="enable-background:new 0 0 59.998 59.998;" xml:space="preserve">
											<path d="M59.206,0.293c-0.391-0.391-1.023-0.391-1.414,0L54.085,4H30.802L1.532,33.511c-0.666,0.666-1.033,1.553-1.033,2.495
											s0.367,1.829,1.033,2.495l20.466,20.466c0.687,0.687,1.588,1.031,2.491,1.031c0.907,0,1.814-0.347,2.509-1.041l28.501-29.271V5.414
											l3.707-3.707C59.597,1.316,59.597,0.684,59.206,0.293z M53.499,28.874L25.574,57.553c-0.596,0.596-1.566,0.596-2.162,0L2.946,37.087
											c-0.596-0.596-0.596-1.566,0.003-2.165L31.636,6h20.449l-4.833,4.833C46.461,10.309,45.516,10,44.499,10c-2.757,0-5,2.243-5,5
											s2.243,5,5,5s5-2.243,5-5c0-1.017-0.309-1.962-0.833-2.753l4.833-4.833V28.874z M47.499,15c0,1.654-1.346,3-3,3s-3-1.346-3-3
											s1.346-3,3-3c0.462,0,0.894,0.114,1.285,0.301l-1.992,1.992c-0.391,0.391-0.391,1.023,0,1.414C43.987,15.902,44.243,16,44.499,16
											s0.512-0.098,0.707-0.293l1.992-1.992C47.386,14.106,47.499,14.538,47.499,15z"/>
										</svg>
									</div>
									<span id="front_tag"></span></div>
							</div>
							<a id="link_read_more_slide"><div class="read_more_slide">Leer más</div></a>
						</div>
					</div>	
					
				</div>

			</div>
			
		<?php
			}	//end if show_slider
		?>