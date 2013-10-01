       
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
				
				<?php $audio =  get_post_meta(get_the_ID(), 'tz_audio_mp3', true); ?>
				
					<div class="audio-wrapper">
						<audio src="<?php echo stripslashes(htmlspecialchars_decode($audio)); ?>" preload="none"></audio>
					</div>
			
					<!--BEGIN .entry-content -->
					<div class="entry-content">
							<?php the_content(''); ?>
					<!--END .entry-content -->
					</div>
			
			<!--END .hentry-->  
			</article>