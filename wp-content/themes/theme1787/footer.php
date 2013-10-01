			</div><!--.container-->
		</div><!--.primary_content_wrap-->
		<footer id="footer">
			<div class="top-footer">
				<div class="container_12 clearfix">
					<div class="grid_12">
						<?php $footer_title = of_get_option('footer_title'); ?>
							<?php if($footer_title){?>
						  <h3><?php echo of_get_option('footer_title'); ?></h3>
						<?php } else { ?>
						  <h3><?php _e('Our Contacts','theme1787');?></h3>
						<?php } ?>
						<div id="widget-footer" class="clearfix">
							<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
							  <!--Widgetized Footer-->
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
			<div id="copyright" class="clearfix">
				<?php if ( of_get_option('footer_menu') == 'true') { ?>  
					<nav class="footer">
						<?php wp_nav_menu( array(
							'container'       => 'ul', 
							'menu_class'      => 'footer-nav', 
							'depth'           => 0,
							'theme_location' => 'footer_menu' 
							)); 
						?>
					</nav>
				<?php } ?>
				<div id="footer-text">
					<?php $myfooter_text = of_get_option('footer_text'); ?>
					
					<?php if($myfooter_text){?>
						<?php echo of_get_option('footer_text'); ?>
					<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a> <?php _e('is proudly powered by', 'theme1787'); ?> <a href="http://wordpress.org">WordPress</a> <a href="<?php if ( of_get_option('feed_url') != '' ) { echo of_get_option('feed_url'); } else bloginfo('rss2_url'); ?>" rel="nofollow" title="<?php _e('Entries (RSS)', 'theme1787'); ?>"><?php _e('Entries (RSS)', 'theme1787'); ?></a> and <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow"><?php _e('Comments (RSS)', 'theme1787'); ?></a>
					<?php } ?>
					<?php if( is_front_page() ) { ?>
					More <a rel="nofollow" href="http://www.templatemonster.com/category/computer-repair-wordpress-themes/" target="_blank">Computer Repair WordPress Themes at TemplateMonster.com</a>
					<?php } ?>
				</div>
			</div>
		</footer>
	</div><!--.content-box-->
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>