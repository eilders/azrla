<?php
/*
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
 
 
add_action( 'after_setup_theme', 'my_child_theme_setup', 100 );
function my_child_theme_setup() {
	remove_custom_image_header();
	remove_custom_background();
	add_filter('show_admin_bar', '__return_false');
	add_filter('comments_popup_link', '__return_false');
	add_filter('comments_template', '__return_false');
	remove_action('admin_menu', 'twentyeleven_theme_options_add_page');
}

function techild_header_widget(){
	if ( ! dynamic_sidebar( 'header-widget' ) ) :
		
	endif;
}

function azrla_widgets_init() {

	register_widget( 'Twenty_Eleven_Ephemera_Widget' );

	register_sidebar( array(
		'name' => __( 'Middle Sidebar', 'twentyeleven' ),
		'id' => 'middle-sidebar',
		'description' => __( 'The sidebar for the optional Middle Sidebar', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Third Sidebar', 'twentyeleven' ),
		'id' => 'third-sidebar',
		'description' => __( 'The sidebar for the optional Third Sidebar', 'twentyeleven' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


}
add_action( 'widgets_init', 'azrla_widgets_init' );