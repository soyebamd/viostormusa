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

  
    // Business Address
$wp_customize->add_setting('topbar_address', array(
    'default' => '100 S Main St, New York',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('topbar_address', array(
    'label' => __('Business Address', 'viostormusa'),
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


// OUR SERVICES
function register_our_services_cpt() {
    register_post_type('our-services', [
        'labels' => [
            'name' => 'Our Services',
            'singular_name' => 'Service',
        ],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'our-services'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-admin-tools',
    ]);
}
add_action('init', 'register_our_services_cpt');

// Add meta box to Our Services CPT
function tag_line() {
    add_meta_box(
        'our_services_details',      // ID
        'Tag Line',                  // Title
        'render_tag_line',          // Callback
        'our-services',             // Post type
        'normal',                   // Context
        'default'                   // Priority
    );
}
add_action('add_meta_boxes', 'tag_line');

// Render the Tag Line input field
function render_tag_line($post) {
    wp_nonce_field('save_our_services_meta', 'our_services_meta_nonce');

    $tag_line = get_post_meta($post->ID, '_tag_line', true);
    ?>
    <p>
        <label for="tag_line"><strong>Tag Line:</strong></label><br>
        <input type="text" name="tag_line" id="tag_line" value="<?php echo esc_attr($tag_line); ?>" style="width:100%;" />
    </p>
    <?php
}

// Save the Tag Line field value
function save_tag_line_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['our_services_meta_nonce']) || !wp_verify_nonce($_POST['our_services_meta_nonce'], 'save_our_services_meta')) {
        return;
    }

    // Check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) return;

    // Save the meta
    if (isset($_POST['tag_line'])) {
        update_post_meta($post_id, '_tag_line', sanitize_text_field($_POST['tag_line']));
    }
}
add_action('save_post', 'save_tag_line_meta');







function our_services_shortcode() {
    ob_start();
    ?>
    <section class="p-0">
      <div class="container relative z-1000 mt-min-100">
        <div class="row g-0">
          <?php
          $args = [
              'post_type' => 'our-services',
              'posts_per_page' => 12,
              'orderby' => 'menu_order',
              'order' => 'ASC'
          ];
          $query = new WP_Query($args);
          $delay = 0;

          if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
                  $delay += 0.3;
                  ?>
                  <div class="col-lg-3 col-sm-6">
                    <div class="hover overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="hover-scale-1-1 w-100 wow scaleIn" alt="<?php the_title_attribute(); ?>" />
                      <?php endif; ?>

                      <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                        <div class="mb-3"><?php the_excerpt(); ?></div>
                        <a class="btn-line" href="<?php the_permalink(); ?>">View Details</a>
                      </div>

                      <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                      <div class="abs abs-centered z-2 mt-3 w-100 text-center hover-op-0">
                        <h4 class="mb-3"><?php the_title(); ?></h4>
                      </div>
                      <div class="gradient-trans-dark-bottom abs w-100 h-80 bottom-0"></div>
                    </div>
                  </div>
              <?php
              endwhile;
              wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('our_services_grid', 'our_services_shortcode');



// LOGO SCROLLER

function register_logo_scroller_cpt() {
    $labels = array(
        'name' => 'Logo Scroller',
        'singular_name' => 'Logo Item',
        'add_new' => 'Add New Logo Item',
        'add_new_item' => 'Add New Logo Item',
        'edit_item' => 'Edit Logo Item',
        'new_item' => 'New Logo Item',
        'view_item' => 'View Logo Item',
        'search_items' => 'Search Logo Items',
        'not_found' => 'No items found',
        'menu_name' => 'Logo Scroller',
    );

    $args = array(
        'label' => 'Logo Scroller',
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-slides',
        'supports' => array('title', 'thumbnail'),
        'has_archive' => false,
        'show_in_rest' => true,
    );

    register_post_type('logo_scroller', $args);
}
add_action('init', 'register_logo_scroller_cpt');


//Footer 

// Register C


// Register Customizer Options
function theme_customize_footer_settings($wp_customize) {
    // Footer Logo
    $wp_customize->add_section('footer_settings', array(
        'title' => __('Footer Settings', 'viostormusa'),
        'priority' => 130,
    ));

    $wp_customize->add_setting('footer_logo', [
        'sanitize_callback' => 'absint',
    ]);
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control(
        $wp_customize,
        'footer_logo',
        [
            'label' => __('Footer Logo', 'viostormusa'),
            'section' => 'footer_settings',
            'settings' => 'footer_logo',
            'width' => 300,
            'height' => 100,
            'flex_width' => true,
            'flex_height' => true,
        ]
    ));

    // Footer Description
    $wp_customize->add_setting('footer_description', [
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control('footer_description', [
        'type' => 'textarea',
        'label' => __('Footer Text', 'viostormusa'),
        'section' => 'footer_settings',
    ]);
}
add_action('customize_register', 'theme_customize_footer_settings');

// Register Menus
function register_footer_menus() {
    register_nav_menus([
        'footer_menu_1' => __('Footer Menu 1', 'viostormusa'),
        'footer_menu_2' => __('Footer Menu 2', 'viostormusa'),
    ]);
}
add_action('init', 'register_footer_menus');



//BREACRUMB
function custom_global_breadcrumb() {
    echo '<ul class="crumb">';

    // Home link
    echo '<li><a href="' . home_url() . '">Home</a></li>';

    if (is_category() || is_single()) {
        $post_type = get_post_type();

        // If it's a custom post type, show its archive link (if available)
        if ($post_type !== 'post') {
            $post_type_obj = get_post_type_object($post_type);
            if ($post_type_obj && $post_type_obj->has_archive) {
                echo '<li><a href="' . get_post_type_archive_link($post_type) . '">' . esc_html($post_type_obj->labels->name) . '</a></li>';
            }
        }

        // Current post/page title
        if (is_single()) {
            echo '<li class="active">' . get_the_title() . '</li>';
        }

    } elseif (is_page()) {
        $parents = get_post_ancestors(get_the_ID());
        $parents = array_reverse($parents);
        foreach ($parents as $parent) {
            echo '<li><a href="' . get_permalink($parent) . '">' . get_the_title($parent) . '</a></li>';
        }
        echo '<li class="active">' . get_the_title() . '</li>';

    } elseif (is_search()) {
        echo '<li class="active">Search: ' . get_search_query() . '</li>';

    } elseif (is_404()) {
        echo '<li class="active">404 Not Found</li>';

    } elseif (is_archive()) {
        if (is_post_type_archive()) {
            $post_type_obj = get_post_type_object(get_post_type());
            echo '<li class="active">' . $post_type_obj->labels->name . '</li>';
        } elseif (is_category()) {
            echo '<li class="active">' . single_cat_title('', false) . '</li>';
        } elseif (is_tag()) {
            echo '<li class="active">' . single_tag_title('', false) . '</li>';
        } elseif (is_author()) {
            echo '<li class="active">Author: ' . get_the_author() . '</li>';
        } elseif (is_date()) {
            echo '<li class="active">Archives</li>';
        }
    }

    echo '</ul>';
}



// Services feature box

function add_service_features_box() {
    add_meta_box(
        'service_features_box',
        'Service Features',
        'render_service_features_box',
        'our-services',
        'normal',
        'default'
    );

    // Also add to "About Us" page only (ID or slug-based check)
    global $post;

 
        // Option A: Check by page slug
        if ($post && $post->post_type === 'page' && $post->post_name === 'about-us') {
            add_meta_box(  
                'service_features_box',
                'Service Features',
                'render_service_features_box',
                'page',
                'normal',
                'default'
            );
     

        // Option B: Check by specific page ID
        // if ($post->ID == 73339) { ... same add_meta_box code ... }
    }
}
add_action('add_meta_boxes', 'add_service_features_box');


function render_service_features_box($post) {
    wp_nonce_field('save_service_features', 'service_features_nonce');
    $features = get_post_meta($post->ID, '_service_features', true);
    ?>

    <div id="features-wrapper">
        <?php
        if (!empty($features) && is_array($features)) {
            foreach ($features as $index => $feature) {
                ?>
                <div class="feature-group" style="margin-bottom: 15px; border:1px solid #ccc; padding:10px;">
                    <input type="text"
                           name="features[<?php echo $index; ?>][title]"
                           placeholder="Title"
                           value="<?php echo esc_attr($feature['title']); ?>"
                           style="width:45%; margin-right:10px;" />

                    <textarea name="features[<?php echo $index; ?>][desc]"
                              placeholder="Description"
                              style="width:45%;"><?php echo esc_textarea($feature['desc']); ?></textarea>

                    <button class="remove-feature button">Remove</button>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <button type="button" class="button" id="add-feature">Add Feature</button>

    <!-- hidden HTML template for new rows -->
    <div id="feature-template" style="display:none;">
        <div class="feature-group" style="margin-bottom:15px; border:1px solid #ccc; padding:10px;">
            <input type="text"
                   name="features[__index__][title]"
                   placeholder="Title"
                   style="width:45%; margin-right:10px;" />

            <textarea name="features[__index__][desc]"
                      placeholder="Description"
                      style="width:45%;"></textarea>

            <button class="remove-feature button">Remove</button>
        </div>
    </div>

    <script>
    (function(){
        const wrapper = document.getElementById('features-wrapper');
        const addBtn  = document.getElementById('add-feature');
        const templateHTML = document.getElementById('feature-template').innerHTML;

        // start index at one past the highest existing index
        let featureIndex = Array.from(wrapper.querySelectorAll('.feature-group'))
            .map(el => {
                // read the name="features[<n>][title]"
                const input = el.querySelector('input[name^="features["]');
                const match = input.name.match(/features\[(\d+)\]/);
                return match ? parseInt(match[1], 10) : -1;
            })
            .reduce((max, n) => n > max ? n : max, -1) + 1;

        addBtn.addEventListener('click', function(){
            // replace __index__ in template
            const newRow = templateHTML.replace(/__index__/g, featureIndex);
            wrapper.insertAdjacentHTML('beforeend', newRow);
            featureIndex++;
        });

        wrapper.addEventListener('click', function(e){
            if (e.target.classList.contains('remove-feature')) {
                e.preventDefault();
                e.target.closest('.feature-group').remove();
            }
        });
    })();
    </script>

    <?php
}


function save_service_features($post_id) {
    if (!isset($_POST['service_features_nonce']) || !wp_verify_nonce($_POST['service_features_nonce'], 'save_service_features')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (!empty($_POST['features']) && is_array($_POST['features'])) {
        $cleaned = [];
        foreach ($_POST['features'] as $feature) {
            $cleaned[] = [
                'title' => sanitize_text_field($feature['title']),
                'desc' => sanitize_textarea_field($feature['desc']),
            ];
        }
        update_post_meta($post_id, '_service_features', $cleaned);
    } else {
        delete_post_meta($post_id, '_service_features');
    }
}
add_action('save_post', 'save_service_features');

