<?php




add_action ('wp_enqueue_scripts', 'carclub_scripts');

function carclub_scripts () {
    wp_enqueue_style ('carclub_styles', get_template_directory_uri() . '/assets/css/style.css', array (), filemtime (get_template_directory() . '/assets/css/style.css'));
}


if ( ! function_exists( 'theme_setup_functions' ) ) {

/**
 * Setup theme
 */
function theme_setup_functions() {
    /*
        * Makes custom available for translation.
        *
        * Translations can be added to the /languages/ directory.
        * If you're building a theme based on custom, use a find and
        * replace to change 'custom' to the name of your theme in all
        * template files.
        */
    load_theme_textdomain( 'carclubmk', get_template_directory() . '/languages' );

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    /*
        * Switches default core markup for search form, comment form,
        * and comments to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    /*
        * Gutenberg full-width group support
        */

    add_theme_support( 'align-wide' );

    /*
        * This theme uses a custom image size for featured images, displayed on
        * "standard" posts and pages.
        */
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

    // phpcs:ignore
    // set_post_thumbnail_size(300, 400, true);

    add_image_size( 'ccmk_medium', 400, 300, false );
    add_image_size( 'ccmk_small', 200, 200, false );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(
        array(
            'primary'  => __( 'Primary', 'projectsengine' ),
            'footer'   => __( 'Footer', 'projectsengine' ),
        )
    );

    /*
        * Enable excerpt for page by default.
        * See https://codex.wordpress.org/Function_Reference/add_post_type_support
        */
    add_post_type_support( 'page', 'excerpt' );
}

add_action( 'after_setup_theme', 'theme_setup_functions' );

}
?>
