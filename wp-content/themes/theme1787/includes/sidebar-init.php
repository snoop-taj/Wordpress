<?php
function elegance_widgets_init() {
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array(
		'name'					=> 'Header',
		'id' 						=> 'header-sidebar',
		'description'   => __( 'Located at the top of pages.'),
		'before_widget' => '<div id="%1$s" class="widget-header">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Before Content Area
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Before Content Area',
		'id' 						=> 'before-content-area',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s" class="grid_3">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Left Content Area
	// Location: at the left of the content
	register_sidebar(array(
		'name'					=> 'Left Content Area',
		'id' 						=> 'left-content-area',
		'description'   => __( 'Located at the left of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Right Content Area
	// Location: at the right of the content
	register_sidebar(array(
		'name'					=> 'Right Content Area',
		'id' 						=> 'right-content-area',
		'description'   => __( 'Located at the right of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> 'Footer',
		'id' 						=> 'footer-sidebar',
		'description'   => __( 'Located at the bottom of pages.'),
		'before_widget' => '<div id="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>