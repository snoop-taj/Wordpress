<?php get_header(); ?>
<div id="content" class="grid_8 <?php echo of_get_option('blog_sidebar_pos') ?>">
	<h1 class="sp-title"><?php the_title(); ?></h1>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php 
    $custom = get_post_custom($post->ID);
    $testiname = $custom["my_testi_caption"][0];
		$testiurl = $custom["my_testi_url"][0];
		$testiinfo = $custom["my_testi_info"][0];
    ?>
    <article id="post-<?php the_ID(); ?>" class="testimonial post-holder">
			<div class="post-content">
				<?php if(has_post_thumbnail()) { ?>
					<?php
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
					$image = aq_resize( $img_url, 160, 160, true ); //resize & crop img
					?>
					<figure class="featured-thumbnail">
						<img src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
					</figure>
				<?php } ?>
				<?php the_content(); ?>
				<span class="name-testi">
					<?php if($testiname) { ?>
						<span class="user"><?php echo $testiname; ?></span><br />
					<?php } ?>
					<?php if($testiinfo) { ?>
						<span class="info"><?php echo $testiinfo; ?></span><br />
					<?php } ?>
					<?php if($testiurl) { ?>
						<a href="<?php echo $testiurl; ?>"><?php echo $testiurl; ?></a>
					<?php } ?>
				</span>
			</div>
		</article>
    
  <?php endwhile; else: ?>
    <div class="no-results">
    	<?php echo '<p><strong>' . __('There has been an error.', 'theme1787') . '</strong></p>'; ?>
      <p><?php _e('We apologize for any inconvenience, please', 'theme1787'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php _e('return to the home page', 'theme1787'); ?></a> <?php _e('or use the search form below.', 'theme1787'); ?></p>
      <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
    </div><!--no-results-->
  <?php endif; ?>
  <nav class="oldernewer">
    <div class="older">
      <?php previous_post_link('%link', __('&laquo; Previous post', 'theme1787')) ?>
    </div><!--.older-->
    <div class="newer">
      <?php next_post_link('%link', __('Next Post &raquo;', 'theme1787')) ?>
    </div><!--.newer-->
  </nav><!--.oldernewer-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>