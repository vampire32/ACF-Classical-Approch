<?php
/**
 * diligent_technologies functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package diligent_technologies
 */
require_once get_template_directory() . '/inc/Walker-Nav-Menu.php';
require_once get_template_directory() . '/inc/custom-contact-form-widget.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function diligent_technologies_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on diligent_technologies, use a find and replace
		* to change 'diligent_technologies' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'diligent_technologies', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'diligent_technologies' ),
            'menu-2'=>esc_html__('Secondary','diligent_technologies')
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'diligent_technologies_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'diligent_technologies_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function diligent_technologies_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'diligent_technologies_content_width', 640 );
}
add_action( 'after_setup_theme', 'diligent_technologies_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function diligent_technologies_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'SideBar', 'diligent_technologies' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'diligent_technologies' ),
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => ' <h5 class="card-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'diligent_technologies_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function diligent_technologies_scripts() {
    wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '6.5.3');
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('my-custom-style', get_stylesheet_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('diligent_technologies-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('diligent_technologies-style', 'rtl', 'replace');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '6.5.3', true);
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('diligent_technologies-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('myswiper', get_template_directory_uri() . '/assets/js/myswiper.js', array(), null, true);

    // Uncomment the following lines if you have comment functionality.
    // if (is_singular() && comments_open() && get_option('thread_comments')) {
    //     wp_enqueue_script('comment-reply');
    // }
}
add_action( 'wp_enqueue_scripts', 'diligent_technologies_scripts' );
// Register Custom Post Type


function my_custom_acf_block_register()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'hero_block',
            'title'             => __('Hero'),
            'description'       => __('A custom hero_block block.'),
            'render_template'   => get_stylesheet_directory() . '/blocks/hero_block/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('hero_block', 'quote'),
            'enqueue_style'     => get_stylesheet_directory_uri() . '/blocks/hero_block/hero.css',
        ));
        acf_register_block_type(array(
            'name'              => 'about_block',
            'title'             => __('About'),
            'description'       => __('A custom about_block block.'),
            'render_template'   => get_stylesheet_directory() . '/blocks/about_sec/about.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('hero_block', 'quote'),
            'enqueue_style'     => get_stylesheet_directory_uri() . '/blocks/about_sec/about.css',

        ));
        acf_register_block_type(array(
            'name'              => 'contact_block',
            'title'             => __('Contact'),
            'description'       => __('A custom contact block block.'),
            'render_template'   => get_stylesheet_directory() . '/blocks/contact_form/contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('hero_block', 'quote'),
            'enqueue_style'     => get_stylesheet_directory_uri() . '/blocks/contact_form/contact.css',

        ));

    }
}
add_action('acf/init', 'my_custom_acf_block_register');
function diligent_technologies_customizer_css() {
    $primary_color = get_field('primary_color', 'option') ?: '#007bff';
    $secondary_color = get_field('secondary_color', 'option') ?: '#6c757d';
    $header_bg_color = get_field('header_bg_color', 'option') ?: '#ffffff';
    $header_text_color = get_field('header_textcolor', 'option') ?: '#000000';
    $button_color = get_field('cta_button_color', 'option') ?: '#000000'; // Ensure you have this setting

    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_html($primary_color); ?>;
            --secondary-color: <?php echo esc_html($secondary_color); ?>;
            --header-bg-color: <?php echo esc_html($header_bg_color); ?>;
            --header-text-color: <?php echo esc_html('#' . ltrim($header_text_color, '#')); ?>;
            --button-color: <?php echo esc_html($button_color); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'diligent_technologies_customizer_css');

function register_custom_contact_form_widget() {
    register_widget('Custom_Contact_Form_Widget');
}
add_action('widgets_init', 'register_custom_contact_form_widget');
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
