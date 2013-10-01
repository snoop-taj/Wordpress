<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>
<div class="before-content-area clearfix">
	<?php if ( ! dynamic_sidebar( 'Before Content Area' ) ) : ?>
	  <!--Widgetized 'Before Content Area' for the home page-->
	<?php endif ?>
</div>
<div class="clearfix">
	<div class="grid_6">
		<div class="left-content-area">
			<?php if ( ! dynamic_sidebar( 'Left Content Area' ) ) : ?>
			  <!--Widgetized 'Left Content Area' for the home page-->
			<?php endif ?>
		</div>
	</div>
	<div class="grid_6">
		<div class="right-content-area">
			<?php if ( ! dynamic_sidebar( 'Right Content Area' ) ) : ?>
			  <!--Widgetized 'Right Content Area' for the home page-->
			<?php endif ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>