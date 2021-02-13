<?php
/**
 * ProTechInfinity News functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ProTechInfinity_News
 */

if ( ! function_exists( 'pro_news_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pro_news_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ProTechInfinity News, use a find and replace
		 * to change 'pro_news' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pro_news', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'pro_news' ),
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
		add_theme_support( 'custom-background', apply_filters( 'pro_news_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pro_news_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pro_news_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pro_news_content_width', 640 );
}
add_action( 'after_setup_theme', 'pro_news_content_width', 0 );

/***
    Submenu showing in responsive.
*/
class Child_Wrap extends Walker_Nav_Menu
{
   function start_lvl(&$output, $depth=0, $args = array())
   {
       $indent = str_repeat("\t", $depth);
       $output .= "\n$indent<div class=\"mobnav-subarrow icon-arrow-down-6\"></div><ul class=\"sub-menu\">\n";
   }
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pro_news_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pro_news' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pro_news' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="title">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'pro_news_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pro_news_scripts() {
	wp_enqueue_style( 'pro_news-style', get_stylesheet_uri() );
	/*
	CSS
	============================================= */
	wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/css/linearicons.css' );
	wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css' );
	wp_enqueue_style( 'animate.min', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'flexslider' , get_template_directory_uri(). '/css/flexslider.css');
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/css/jquery-ui.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' ); 

	/*
	jQurey
	============================================= */
	wp_enqueue_script( 'jquery-2.2.4.min', get_template_directory_uri() . '/js/vendor/jquery-2.2.4.min.js', array(), '20151215', true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'easing.min', get_template_directory_uri() . '/js/easing.min.js', array(), '20151215', true );
	wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/js/hoverIntent.js', array(), '20151215', true );
	wp_enqueue_script( 'superfish.min', get_template_directory_uri() . '/js/superfish.min.js', array(), '20151215', true );
	wp_enqueue_script( 'ajaxchimp.min', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), '20151215', true );
	wp_enqueue_script( 'popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'accordion', get_template_directory_uri() . '/js/mn-accordion.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array(), '20151215', true );
	wp_enqueue_script( 'nice-select.min', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), '20151215', true );
	wp_enqueue_script( 'carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/js/mail-script.js', array(), '20151215', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array(), '20151215', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '20151215', true );
	wp_enqueue_script( 'maphilight.min', get_template_directory_uri() . '/js/jquery.maphilight.min.js', array(), '20151215', true );
	wp_enqueue_script( 'pro_news-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );	 

	wp_enqueue_script( 'pro_news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );


	

	wp_enqueue_script( 'pro_news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pro_news_scripts' );


add_action( 'admin_enqueue_scripts', 'load_custom_script' );  
function load_custom_script() {
    
    wp_enqueue_style( 'metabox-style', get_bloginfo('template_url') . '/css/metabox.css' );

    wp_enqueue_script('custom_js_script', get_bloginfo('template_url').'/js/custom-script.js', array('jquery'));
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/*
## Custom Meta Box 
***************************/
require get_template_directory(). '/inc/custom-meta-box.php'; 

/*
## Custom Post Type 
***************************/
require get_template_directory(). '/inc/custom-metaboxes.php'; 

/*
## ePapers Custom Meta Box functions
*****************************************/
require get_template_directory(). '/inc/custom-post-types.php'; 

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


show_admin_bar( false );