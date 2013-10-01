    <?php $post_meta = of_get_option('post_meta'); ?>
		<?php if ($post_meta=='true' || $post_meta=='') { ?>
			<div class="post-meta">
				<?php _e('Posted on', 'theme1787'); ?> <time datetime="<?php the_time('Y-m-d\TH:i'); ?>"><?php the_time('F d, Y'); ?></time> <?php _e('by', 'theme1787'); ?> <?php the_author_posts_link() ?>
				<?php if (has_term('', 'category', $post->ID)) { ?> 
					<?php _e(' in', 'theme1787'); ?> 
					<?php the_terms($post->ID, 'category','',', '); ?>	
				<?php } ?>
				<?php if (has_term('', 'portfolio_category', $post->ID)) { ?>
					<?php _e(' in', 'theme1787'); ?> 
					<?php the_terms($post->ID, 'portfolio_category','',', '); ?>
				<?php } ?>
			</div><!--.post-meta-->
		<?php } ?>		
