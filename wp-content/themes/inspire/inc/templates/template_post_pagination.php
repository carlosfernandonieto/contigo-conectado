					<?php $inspire_options_post = get_option('inspire_options_post'); ?>
					
					<?php 
						

						
					?>
					<div class="post-pagination <?php echo $inspire_options_post['post_style'] ?>">
					
						<?php
							$prev_post = get_previous_post();
							
							if (!empty( $prev_post )){ 
								$post_thumbnail_src_prev = wp_get_attachment_image_src(get_post_thumbnail_id($prev_post->ID),"medium");
								$deb_prev = "background: -moz-linear-gradient(top, rgba(0,60,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_prev[0]."');
									background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,100,255,1)), color-stop(100%, rgba(0,100,255,0.3))), url('".$post_thumbnail_src_prev[0]."');
									background: -webkit-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_prev[0]."');
									background: -o-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_prev[0]."');
									background: -ms-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_prev[0]."');
									background: linear-gradient(to bottom, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_prev[0]."');
									filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003cff', endColorstr='#003cff', GradientType=0 );";
							?>
								<div class="deg_posts"><a style="<?php echo $deb_prev; ?> background-size: cover;" class="pagination prev" href="<?php echo get_permalink( $prev_post->ID ); ?>"><span>« <?php _e('Previous Post', 'loc_inspire'); ?></span><?php echo $prev_post->post_title; ?></a></div>
							<?php }else { 
								$deb_prev = "background: -moz-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,100,255,1)), color-stop(100%, rgba(0,100,255,0.3))), white;
									background: -webkit-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: -o-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: -ms-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: linear-gradient(to bottom, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003cff', endColorstr='#003cff', GradientType=0 );";
								?>
								<div class="deg_posts"><a style="<?php echo $deb_prev; ?> color:#000;" class="pagination prev last" href="#"><span>« <?php _e('Previous Post', 'loc_inspire'); ?></span><?php _e('There are no older stories', 'loc_inspire'); ?></a></div>
							<?php } ?>
						
						<?php
							$next_post = get_next_post();
							if (!empty( $next_post )){ 
								$post_thumbnail_src_next = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID),"medium");
								$deb_next = "background: -moz-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_next[0]."');
									background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,100,255,1)), color-stop(100%, rgba(0,100,255,0.3))), url('".$post_thumbnail_src_next[0]."');
									background: -webkit-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_next[0]."');
									background: -o-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_next[0]."');
									background: -ms-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_next[0]."');
									background: linear-gradient(to bottom, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), url('".$post_thumbnail_src_next[0]."');
									filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003cff', endColorstr='#003cff', GradientType=0 );";
							?>
								<div class="deg_posts"><a style="<?php echo $deb_next; ?> background-size: cover;" class="pagination next" href="<?php echo get_permalink( $next_post->ID ); ?>"><span><?php _e('Next Post', 'loc_inspire'); ?> »</span><?php echo $next_post->post_title; ?></a></div>
							<?php }else { 
								$deb_prev = "background: -moz-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white);
									background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,100,255,1)), color-stop(100%, rgba(0,100,255,0.3))), white;
									background: -webkit-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: -o-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: -ms-linear-gradient(top, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									background: linear-gradient(to bottom, rgba(0,100,255,1) 0%, rgba(0,100,255,0.3) 100%), white;
									filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003cff', endColorstr='#003cff', GradientType=0 );";
								?>
								<div class="deg_posts"><a style="<?php echo $deb_next; ?>" class="pagination next last" href="#"><span><?php _e('Next Post', 'loc_inspire'); ?> »</span></span><?php _e('No hay más', 'loc_inspire'); ?></a></div>
							<?php } ?>
					
					</div>
