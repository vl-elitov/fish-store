<?php
/**
 * fish functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fish
 */

if (!function_exists('fish_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fish_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on fish, use a find and replace
         * to change 'fish' to the name of your theme in all the template files.
         */
        load_theme_textdomain('fish', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'fish'),
            'menu-in-footer' => esc_html__('Footer', 'fish'),
            'social' => esc_html__('Social Menu', 'fish'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('fish_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));

        function add_additional_class_on_li($classes, $item, $args)
        {
            if (isset($args->add_li_class) && !empty($args->add_li_class)) {
                $classes[] = $args->add_li_class;
            }
            return $classes;
        }

        add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

        function my_acf_google_map_api($api)
        {

            $api['key'] = 'xxx';

            return $api;

        }

        add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

    }
endif;
add_action('after_setup_theme', 'fish_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fish_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('fish_content_width', 640);
}

add_action('after_setup_theme', 'fish_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fish_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'fish'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'fish'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'fish_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function fish_scripts()
{
    wp_enqueue_style('fish-style', get_stylesheet_uri());

    wp_enqueue_script('fish-common', get_template_directory_uri() . '/js/scripts.min.js', array(), '1', true);

}

add_action('wp_enqueue_scripts', 'fish_scripts');

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

/*
 * My classes
 * */
//require get_template_directory() . '/inc/classes/AllClasses.php';
function register_my_product()
{

    /**
     * Post Type: Products.
     */

    $labels = array(
        "name" => __("Products", "fish"),
        "singular_name" => __("Product", "fish"),
    );

    $args = array(
        'label' => __('Products', 'fish'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'delete_with_user' => false,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => false,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Product', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type("Product", $args);
}

add_action('init', 'register_my_product');

/**
 * Walker social menu
 */
require get_template_directory() . '/classes/WalkerSocialMenu.php';