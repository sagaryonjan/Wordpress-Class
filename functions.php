<?php
/**
 * Wordpress Class functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wordpress_Class
 */

if ( ! function_exists( 'wordpress_class_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wordpress_class_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wordpress Class, use a find and replace
	 * to change 'wordpress_class' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wordpress_class', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wordpress_class' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wordpress_class_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	//add logo support added in wordpress 4.5
	add_theme_support('custom-logo',array(
	    'flex-width' => true,
	    'flex-height' => true,
    ));

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support('woocommerce');
}
endif;
add_action( 'after_setup_theme', 'wordpress_class_setup' );

/*For Debugging*/

function debug($data){
    print_r($data);
    die;
}



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpress_class_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wordpress_class_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpress_class_content_width', 0 );





/**
 * Enqueue scripts and styles.
 */
function wordpress_class_scripts() {
	wp_enqueue_style( 'wordpress_class-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wordpress_class-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wordpress_class-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpress_class_scripts' );


/**
 * Image Uploader
 */
add_action('admin_enqueue_scripts', 'blog_image_uploader');
function blog_image_uploader() {
    wp_enqueue_media();
    wp_enqueue_script('blog-widget-image-upload', get_template_directory_uri() . '/js/image-uploader.js', false, '20150309', true);
}

function awesome_custom_post(){
	$labels = array(
		'name' => 'portfulio',
		'singular_name' => 'portfulio',
		'add_new' => 'Add Portfulio Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Iteam',
		'not_found' => 'No Item Found',
		'not_found_in_trash' => 'No Item Found In Trash',
		'parent_item_colan' => 'Parent Item'
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_quaryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revision',
			  'custom-fields', 


			),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_form_search' => false,


		);
	register_post_type('portfulio', $args);
}

add_action('init', 'awesome_custom_post' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Wordpress Related Register widget area.
 */
require get_template_directory() . '/inc/wordpress_class_function.php';

//get tempate
require get_template_directory() . '/inc/wordpress_customizer_function.php';

//include for widget function
require get_template_directory() . '/inc/wordpress_widget_include.php';



