<?php
/**
 * sevenX - WP Themes Collection
 * Custom Theme functions for sevenX Wordpress Themes
 *
 * Summary:
 * * Theme Setup
 * * Register Scripts
 * * Widget Areas
 * * Clean Header
 * * Includes
 *
 * Sources/Links:
 * * https://gist.github.com/loschke/8719e6d0e81bc3e74126
 */

// ########################################
// THEME SETUP
// ########################################
// Set Content Width
if ( ! isset( $content_width ) )
    $content_width = 720;

function sevenx_content_width() {
    global $content_width;

    if ( is_page_template( 'tpl-fullwidth.php' ) )
        $content_width = 1180;
}
add_action( 'template_redirect', 'sevenx_content_width' );

if ( ! function_exists( 'sevenx_setup' ) ) :

    function sevenx_setup() {
        // Make theme available for translation.
        load_theme_textdomain( 'sevenx-theme', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );
        
        // Register Template Menus
        register_nav_menus(
            array(
                'primary-nav' => __( 'Primary Menu', 'sevenx-theme' ),
                'sidebar-nav' => __( 'Sidebar Menu', 'sevenx-theme' ),
                'footer-nav' => __( 'Footer Menu', 'sevenx-theme' )
            )
        );

        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ) );
    }
endif; // sevenx_setup
add_action( 'after_setup_theme', 'sevenx_setup' );

// ########################################
// REGISTER SCRIPTS
// ########################################

function sevenx_scripts() {
    // Deactivate jQuery and Embed Methods
    wp_deregister_script( 'jquery' );
    /*wp_deregister_script( 'wp-embed' );*/

    // Register Fonts
    wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0', 'all' );
    /*wp_enqueue_style( 'open_sans', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic', array(), '1.0.0', 'all' );*/

    // Styles
    wp_enqueue_style( 'custom_style', get_stylesheet_uri() );
    /*wp_enqueue_style( 'bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all' );*/

    // Scripts (Footer)
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.min.js', array(), '' , true );
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '2.1.4', true );
    /*wp_enqueue_script( 'bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), '3.3.6', true );*/

    // only need it, if "Enable threaded comments" is activated
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'sevenx_scripts' );

// ########################################
// WIDGET AREAS
// ########################################

// Execute Shortcodes in Sidebar Widgets
add_filter('widget_text', 'do_shortcode');

// Register Widgets
function sevenx_widgets() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'sevenx-theme' ),
            'id'            => 'sidebar-widget',
            'description'   => '',
            'before_widget' => '<section id="%1$s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Social Bar', 'sevenx-theme' ),
            'id'            => 'social-widget',
            'description'   => '',
            'before_widget' => '<section id="%1$s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer', 'sevenx-theme' ),
            'id'            => 'footer-widget',
            'description'   => '',
            'before_widget' => '<section id="%1$s" class="%2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );

}
add_action( 'widgets_init', 'sevenx_widgets' );

// ########################################
// CLEAN HEADER
// ########################################

remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'rest_output_link_wp_head', 10 ); //deactivate REST API
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action('wp_head', 'print_emoji_detection_script', 7 ); // emoji shit :)
remove_action('wp_print_styles', 'print_emoji_styles' );

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// ########################################
// INCLUDES
// ########################################

/*require get_template_directory() . '/inc/extras.php';*/
/*require get_template_directory() . '/inc/customizer.php';*/
/*require get_template_directory() . '/inc/nav-walker.php';*/