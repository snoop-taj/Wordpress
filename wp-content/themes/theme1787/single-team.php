<?php get_header(); ?>
<div id="content" class="grid_8 <?php echo of_get_option('blog_sidebar_pos') ?>">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php 
		$custom = get_post_custom($post->ID);
		$teampos = $custom["my_team_pos"][0];
		$teaminfo = $custom["my_team_info"][0];
		?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <article class="single-post">
        <header class="header-title">
          <h1  class="sp-title"><?php the_title(); ?></h1>
					<?php if($teampos) { ?>
					<span class="page-desc"><?php echo $teampos; ?></span>
					<?php } ?>
        </header>
        <?php if(has_post_thumbnail()) { ?>
					<?php
					$thumb = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'thumbnail'); //get img URL
					$image = aq_resize( $img_url, 160, 160, true ); //resize & crop img
					?>
					<figure class="featured-thumbnail">
						<img src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
					</figure>
				<?php } ?>
				
        <div class="post-content">
          <?php the_content(); ?>
					<span class="page-desc"><?php echo $teaminfo; ?></span>
        </div><!--.post-content-->
      </article>

    </div><!-- #post-## -->

  <?php endwhile; /* end loop */ ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>