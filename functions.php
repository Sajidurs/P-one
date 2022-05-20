<?php 
/**
 * Theme Functions Code Goes Here
 * 
 * @package One
 * 
 * @since 1.00
 */

require_once(get_theme_file_path("/inc/class-wp-bootstrap-navwalker.php"));


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
function one_enqueue(){
	wp_enqueue_style('google_font', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap', array(), '1.0.0', 'all' );
	wp_enqueue_style('all_min_css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style('bootstrap_icon', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'animate_main_css', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'bootstrap_main', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );

	wp_enqueue_style( 'theme_default_css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );

	// Start Theme JS File

	 wp_enqueue_script( 'js_main_1', get_template_directory_uri() . '/https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_2', get_template_directory_uri() . '/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_3', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_4', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_5', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_6', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_7', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_8', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_9', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array('jquery'), '1.0.0', true );

	 wp_enqueue_script( 'js_main_10', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

}
add_action('wp_enqueue_scripts','one_enqueue');



// Registering Sidebar 
function one_theme_widget_init(){
	register_sidebar( array(
		'name'          => __( 'Footer - Section 2', 'halim' ),
        'id'            => 'footer2',
        'description'   => __( 'Widgets in this area will be shown on Footer Section 2', 'one' ),
        'before_widget' => '<div class="text-make-white">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => __( 'Bottom Footer - Section 2', 'halim' ),
        'id'            => 'footer_bottom_1',
        'description'   => __( 'Widgets in this area will be shown on Footer Bottom', 'one' ),
        'before_widget' => '<div class="text-make-white">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'one_theme_widget_init' );











// ACF Option Page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $parent = acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Option'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

		// Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Header Social'),
            'menu_title'  => __(' Header Social'),
            'parent_slug' => $parent['menu_slug'],
        ));

		// Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Home Slider'),
            'menu_title'  => __('Home Slider'),
            'parent_slug' => $parent['menu_slug'],
        ));

		// Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Counter Section'),
            'menu_title'  => __('Counter Section'),
            'parent_slug' => $parent['menu_slug'],
        ));

    }
}