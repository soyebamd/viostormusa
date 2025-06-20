<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue Styles and Scripts
 */
function gloria_script() {
    // Main WordPress stylesheet (style.css in theme root)
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null);

    // Plugins CSS
    wp_enqueue_style('plugins-css', get_template_directory_uri() . '/css/plugins.css', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper.css', array(), null);

    // Custom Theme CSS
    wp_enqueue_style('custom-style-css', get_template_directory_uri() . '/css/style.css', array(), null);

    // Color Scheme
    wp_enqueue_style('color-scheme-css', get_template_directory_uri() . '/css/colors/scheme-01.css', array(), null);

    // jQuery (comes with WordPress)
    wp_enqueue_script('jquery');

    // JS Scripts
    wp_enqueue_script('plugins-js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), null, true);
    wp_enqueue_script('designesia-js', get_template_directory_uri() . '/js/designesia.js', array('jquery'), null, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.js', array('jquery'), null, true);
    wp_enqueue_script('custom-swiper-js', get_template_directory_uri() . '/js/custom-swiper-1.js', array('swiper-js'), null, true);
    wp_enqueue_script('custom-marquee-js', get_template_directory_uri() . '/js/custom-marquee.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'gloria_script');












/**
 * Theme Setup
 */





// TOP BAR
function viostormusa_customize_topbar($wp_customize) {
    $wp_customize->add_section('topbar_section', array(
        'title' => __('Top Bar Settings', 'viostormusa'),
        'priority' => 10,
    ));

    // Business Hours
    $wp_customize->add_setting('topbar_hours', array(
        'default' => 'Monday - Friday 08.00 - 18.00',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('topbar_hours', array(
        'label' => __('Business Hours', 'viostormusa'),
        'section' => 'topbar_section',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('topbar_email', array(
        'default' => 'contact@wastewise.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('topbar_email', array(
        'label' => __('Email', 'viostormusa'),
        'section' => 'topbar_section',
        'type' => 'text',
    ));

    // Phone
    $wp_customize->add_setting('topbar_phone', array(
        'default' => '+1 123 456 789',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('topbar_phone', array(
        'label' => __('Phone Number', 'viostormusa'),
        'section' => 'topbar_section',
        'type' => 'text',
    ));


    // Header Button Text
$wp_customize->add_setting('header_button_text', array(
    'default' => 'Schedule Pickup',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('header_button_text', array(
    'label' => __('Header Button Text', 'yourtheme'),
    'section' => 'topbar_section',
    'type' => 'text',
));

// Header Button Link
$wp_customize->add_setting('header_button_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control('header_button_url', array(
    'label' => __('Header Button URL', 'yourtheme'),
    'section' => 'topbar_section',
    'type' => 'url',
));


    // Social Links
    $socials = ['facebook', 'x_twitter', 'youtube', 'pinterest', 'instagram'];
    foreach ($socials as $social) {
        $wp_customize->add_setting("topbar_$social", array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("topbar_$social", array(
            'label' => ucfirst(str_replace('_', ' ', $social)) . ' URL',
            'section' => 'topbar_section',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'viostormusa_customize_topbar');


// #END TOP BAR


// REGISTER MENU
function viostormusa_register_menus() {
    register_nav_menu('main-menu', __('Main Menu'));
}
add_action('after_setup_theme', 'viostormusa_register_menus');

// #END REGISTER MENU



 function viostormusa_setup() {
    // Add title tag support
    add_theme_support('title-tag');

    // Add featured image support
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-custom-theme'),
        'footer-menu' => __('Footer Menu', 'my-custom-theme'),
    ));

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // Add HTML5 support for search form, comment form, and others
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'viostormusa_setup');

/**
 * Register Widget Areas (Sidebar)
 */
function viostormusa_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'my-custom-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'my-custom-theme'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'viostormusa_widgets_init');

/**
 * Load Theme Textdomain for Translation
 */
function viostormusa_load_textdomain() {
    load_theme_textdomain('my-custom-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'viostormusa_load_textdomain');




// REGISTER POST TYPE

// HOW IT WORKS

function register_how_it_works_cpt() {
    register_post_type('how_it_works', [
        'labels' => [
            'name' => 'How It Works',
            'singular_name' => 'How It Works Step',
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-list-view',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'how-it-works'],
        'show_in_rest' => true, // enable for Gutenberg
    ]);
}
add_action('init', 'register_how_it_works_cpt');


// FRONT END SHOURT CODE FOR HOW IT WORKS

function hiw_cpt_shortcode($atts) {
    ob_start();

    ?>
    <div class="row g-4">
        <?php
        $hiw_query = new WP_Query([
            'post_type' => 'how_it_works',
            'posts_per_page' => 12,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ]);

        if( $hiw_query->have_posts() ):
            while( $hiw_query->have_posts() ): $hiw_query->the_post(); ?>
                <div class="col-md-3">
                    <div class="relative">
                        <?php if (has_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="w-70px mb-4 wow scaleIn" alt="<?php the_title_attribute(); ?>" />
                        <?php endif; ?>
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <?php

    return ob_get_clean();
}

add_shortcode('how_it_works_grid', 'hiw_cpt_shortcode');
