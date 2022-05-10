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
        'primary-menu' => __('Primary Menu', 'one')
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
		add_editor_style("/css/editor.css");
		
	
}
add_action('after_setup_theme', 'one_setup');

// Enqueing Files
function one_assets() {
    
    //Calling From Web
    wp_enqueue_style( 'font-opensans', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-domain1', '//fonts.googleapis.com', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'font-domain2', '//fonts.gstatic.com', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome-1', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome-2', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.0.0', 'all' );

    // Calling From Local
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'lib-css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owlcarousel-css2', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owlcarousel-css3', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.default.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owlcarousel-css4', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.default.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owlcarousel-css5', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.green.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'owlcarousel-css6', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.green.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );

    // Calling JS
    wp_enqueue_script( 'jquery-js', '//code.jquery.com/jquery-3.4.1.min.js' );
    wp_enqueue_script( 'js-jsdelivr', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js' );
    wp_enqueue_script( 'js-wow2', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-wow', get_template_directory_uri() . '/lib/wow/wow.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-owlcarouse2', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'js-lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

}   
add_action('wp_enqueue_scripts', 'one_assets');