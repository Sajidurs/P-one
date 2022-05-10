<?php 
/**
 * Theme Functions Code Goes Here
 * 
 * @package One
 * 
 * @since 1.00
 */




function one_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post'));
    load_theme_textdomain('one', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
		add_editor_style("/assets/css/editor.css");
		//css blank takbe
		
		add_image_size( 'category-thumb', 300, 9999 );
		the_post_thumbnail('category-thumb');
		the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );
		the_post_thumbnail( 'thumbnail', array( "left","bottom" ) );
		//Regenerate thumbnail plugin lagbe
	
}
add_action('after_setup_theme', 'halim_setup');