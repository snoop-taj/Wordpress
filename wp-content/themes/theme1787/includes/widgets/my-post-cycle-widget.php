<?php
// =============================== My Post Cycle widget ======================================
class MY_CycleWidget extends WP_Widget {
    /** constructor */
    function MY_CycleWidget() {
        parent::WP_Widget(false, $name = 'My - Post Cycle');	
    }

    /** @see WP_Widget::widget */
    function widget($args, $instance) {		
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);
				$limit = apply_filters('widget_limit', $instance['limit']);
				$category = apply_filters('widget_category', $instance['category']);
				$count = apply_filters('widget_count', $instance['count']);
        ?>
              <?php echo $before_widget; ?>
                  <?php if ( $title )
                        echo $before_title . $title . $after_title; ?>
						
						<?php if($category=="testi"){?>
            		<script type="text/javascript">
									jQuery(function(){
										jQuery('#slides').slides({
											effect: 'fade',
											crossfade: true,
											preload: true,
											generateNextPrev: true,
											autoHeight: true
										});
									});
								</script>
              	<div id="slides">
									<div class="slides_container">
									
									<?php $limittext = $limit;?>
									<?php global $more;	$more = 0;?>
									<?php query_posts("posts_per_page=". $count ."&post_type=" . $category);?>
									
									<?php while (have_posts()) : the_post(); ?>	
									
										<?php 
										$custom = get_post_custom($post->ID);
										$testiname = $custom["testimonial-name"][0];
										$testiurl = $custom["testimonial-url"][0];
										?>
									
									<div class="item">

									<?php if($limittext=="" || $limittext==0){ ?>
										<?php the_excerpt(); ?>
										 <div class="name-testi">
										 <span class="user"><?php echo $testiname; ?></span>,
										 <a href="http://<?php echo $testiurl; ?>"><?php echo $testiurl; ?></a>
										 </div>
									<?php }else{ ?>
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext);?>
										 <div class="name-testi">
										 <span class="user"><?php echo $testiname; ?></span>,
										 <a href="http://<?php echo $testiurl; ?>"><?php echo $testiurl; ?></a>
										 </div>
									<?php } ?>
									</div>
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
								</div>
							</div>
							<!-- end of testimonials -->
              
            
            
						<?php } elseif($category=="portfolio"){ ?>
							<script type="text/javascript">
								jQuery(function(){
									jQuery('#slides').slides({
										effect: 'fade',
										crossfade: true,
										preload: true,
										generateNextPrev: true,
										autoHeight: true
									});
								});
							</script>
							<div id="slides">
								<div class="slides_container">
									<?php $limittext = $limit;?>
									<?php global $more;	$more = 0;?>
									<?php query_posts("posts_per_page=". $count ."&post_type=" . $category);?>
									<?php while (have_posts()) : the_post(); ?>	
									
									<?php
									$thumb = get_post_thumbnail_id();
									$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
									$image = aq_resize( $img_url, 250, 150, true ); //resize & crop img
									?>
									<div class="item">
										<?php if($limittext=="" || $limittext==0){ ?>
										<figure class="featured-thumbnail">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
										</figure>
										<?php }else{ ?>
										<figure class="featured-thumbnail">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
										</figure>
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); } ?>
									</div>
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
								</div>
              </div>
              <!-- end of portfolio_cycle -->
            
						<?php } else { ?>
							
              <script type="text/javascript">
								jQuery(function(){
									jQuery('#slides').slides({
										effect: 'fade',
										crossfade: true,
										preload: true,
										generateNextPrev: true,
										autoHeight: true
									});
								});
							</script>
							<div id="slides">
								<div class="slides_container">
									<?php $limittext = $limit;?>
									<?php global $more;	$more = 0;?>
									<?php query_posts("posts_per_page=" . $count . "&post_type=" . $category);?>
									<?php while (have_posts()) : the_post(); ?>	
									<?php
									$thumb = get_post_thumbnail_id();
									$img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
									$image = aq_resize( $img_url, 250, 150, true ); //resize & crop img
									?>
									<div class="cycle_item">
										<?php if($limittext=="" || $limittext==0){ ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php the_excerpt(); ?>
										<?php }else{ ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<?php $excerpt = get_the_excerpt(); echo my_string_limit_words($excerpt,$limittext); } ?>
									</div>
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
								</div>
							</div>
							<!-- end of post_cycle -->
							<?php }?>
              <?php echo $after_widget; ?>
        <?php
    }

    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {				
        return $new_instance;
    }

    /** @see WP_Widget::form */
    function form($instance) {				
			$title = esc_attr($instance['title']);
			$limit = esc_attr($instance['limit']);
			$category = esc_attr($instance['category']);
			$count = esc_attr($instance['count']);
    ?>
      <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'theme1787'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('Limit Text:', 'theme1787'); ?> <input class="widefat" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" type="text" value="<?php echo $limit; ?>" /></label></p>
      <p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Posts per page:', 'theme1787'); ?><input class="widefat" style="width:30px; display:block; text-align:center" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>" type="text" value="<?php echo $count; ?>" /></label></p>

      <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Show profile link:', 'theme1787'); ?><br />

      <select id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" style="width:150px;" > 
      <option value="testi" <?php echo ($category === 'testi' ? ' selected="selected"' : ''); ?>>Testimonials</option>
      <option value="portfolio" <?php echo ($category === 'portfolio' ? ' selected="selected"' : ''); ?> >Portfolio</option>
      <option value="" <?php echo ($category === '' ? ' selected="selected"' : ''); ?>>Blog</option>
      </select>
      </label></p>
       
      <?php 
    }

} // class Cycle Widget


?>