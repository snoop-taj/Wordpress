
			<!--BEGIN .hentry -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('post-holder'); ?>>
			
				<header class="entry-header">
				
				<?php if(!is_singular()) : ?>
				
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to:', 'theme1787');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<?php else :?>
				
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
				<?php endif; ?>
				
				<?php get_template_part('includes/post-formats/post-meta'); ?>
				
				</header>
				
				
				<?php $random = theme1787_random(10); ?>
			
				<script type="text/javascript">
					jQuery(function(){
						jQuery('#gallery_post_<?php echo $random; ?>').slides({
							container: 'slides_container_gallery',
							effect: 'fade',
							crossfade: true,
							generateNextPrev: false
						});
						
					});
				</script>
			
				<!--BEGIN .slider -->
					
					<div id="gallery_post_<?php echo $random ?>" class="gallery_post">
					
					<div class="slides_container_gallery">
						<?php 
							$args = array(
									'orderby'		 => 'menu_order',
									'post_type'      => 'attachment',
									'post_parent'    => get_the_ID(),
									'post_mime_type' => 'image',
									'post_status'    => null,
									'numberposts'    => -1,
							);
							$attachments = get_posts($args);
						?>
							
							<?php if ($attachments) : ?>
							
							<?php foreach ($attachments as $attachment) : ?>
									
									<?php 
									$attachment_url = wp_get_attachment_image_src( $attachment->ID, 'full' );
									$url = $attachment_url['0'];
									$image = aq_resize($url, 600, 300, true);
									?>
									
									<div class="g_item">
										<img 
										alt="<?php echo apply_filters('the_title', $attachment->post_title); ?>"
										src="<?php echo $image ?>"
										width="600"
										height="300"
										/>
									</div>
							
							<?php endforeach; ?>
							
							<?php endif; ?>
						</div>

					<!--END .slider -->
					</div>
			
					<!--BEGIN .entry-content -->
					<div class="entry-content">
							<?php the_content(''); ?>
					<!--END .entry-content -->
					</div>
			
			<!--END .hentry-->  
			</article>