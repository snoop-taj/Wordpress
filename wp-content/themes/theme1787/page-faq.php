<?php
/**
 * Template Name: FAQs
 */

get_header(); ?>
<div id="content" class="grid_12">
  <h1 class="sp-title"><?php the_title(); ?></h1>
  <?php
  $temp = $wp_query;
  $wp_query= null;
  $wp_query = new WP_Query();
  $wp_query->query('post_type=faq&showposts=-1');
  ?>
  <dl class="faq_list">
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  	<dt><span class="marker"><?php _e('Q?', 'theme1787'); ?></span><?php the_title(); ?></dt>
    <dd id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<span class="marker"><?php _e('A.', 'theme1787'); ?></span><?php the_content(); ?>
    </dd>
  <?php endwhile; ?>
  </dl>
  
  <?php $wp_query = null; $wp_query = $temp;?>

</div><!--#content-->
<?php get_footer(); ?>
