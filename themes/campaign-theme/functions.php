<?php

function main_files() {
	wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
	wp_enqueue_style('custom-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

}

add_action('wp_enqueue_scripts', 'main_files');

function site_features() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'site_features');

function adjust_queries($query) {
	if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
		$today = date('Ymd');
		$query->set('meta_key', 'event_date');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
		$query->set('meta_query', array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              ));
	}
	
	if (!is_admin() AND is_post_type_archive('candidate') AND $query->is_main_query()) {
		$query->set('orderby', 'meta_value_num');	
		$query->set('meta_key', 'order');	 
		$query->set('order', 'ASC'); 
	}
}

add_action('pre_get_posts', 'adjust_queries');

function campaign_theme_load_theme_textdomain() {
load_theme_textdomain( 'campaign-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'campaign_theme_load_theme_textdomain' );

add_action('init', function() {
	pll_register_string('test-string', 'test');
	pll_register_string('donate-action', 'Spenden');
	pll_register_string('join', 'Mitglied werden');
	pll_register_string('press', 'Presse');
	pll_register_string('events', 'Events');
	pll_register_string('Program', 'Programm');
	pll_register_string('about us', 'Über uns');
	pll_register_string('share', 'Teilen');
});