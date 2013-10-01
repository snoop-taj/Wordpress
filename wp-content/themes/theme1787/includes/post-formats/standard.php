			<article id="post-<?php the_ID(); ?>" <?php post_class('post-holder'); ?>>
					
				<header class="entry-header">
				
				<?php if(!is_singular()) : ?>
				
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to:', 'theme1787');?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
				<?php else :?>
				
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
				<?php endif; ?>
				
				<?php get_template_part('includes/post-formats/post-meta'); ?>
				
				</header>
				
				
				<?php get_template_part('includes/post-formats/post-thumb'); ?>
				
				
				<?php if(!is_singular()) : ?>
				
				<div class="post-content">
					<?php $post_excerpt = of_get_option('post_excerpt'); ?>
					<?php if ($post_excerpt=='true' || $post_excerpt=='') { ?>
					
						<div class="excerpt">
						
						
						<?php 
						
						$content = get_the_content();
						$excerpt = get_the_excerpt();

						if (has_excerpt()) {

								the_excerpt();

						} else {
						
								if(!is_search()) {

								echo my_string_limit_words($content,135);
								
								} else {
								
								echo my_string_limit_words($excerpt,135);
								
								}

						}
						
						
						?>
						
						</div>
						
						
					<?php } ?>
					<footer class="post-footer">
						<a href="<?php the_permalink() ?>" class="button"><?php _e('Read more', 'theme1787'); ?></a>
						<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', 'Comments are closed'); ?>
					</footer>
				</div>
				
				<?php else :?>
				
				<div class="content">
				
					<?php the_content(''); ?>
					
				<!--// .content -->
				</div>
				
				<?php endif; ?>
			 
			</article>