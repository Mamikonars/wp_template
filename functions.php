<?php
//include castomization file
require_once get_template_directory() . '/inc/customizer.php';
//customizer polylang
require_once get_template_directory() . '/inc/customizer-polylang.php';


add_action('wp_enqueue_scripts', 'ski_scripts');

function ski_scripts()
{
    wp_enqueue_style('wp', get_stylesheet_uri());
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('media-query', get_template_directory_uri() . '/assets/css/media.css');
    //js
    wp_enqueue_script('masonry-js', get_template_directory_uri() . '/assets/js/masonry.min.js', '', '1.0', true);
    wp_enqueue_script('baguetteBox-js', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', '', '1.0', true);
    wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/script.js', '', '1.0', true);
}



add_action('after_setup_theme', 'ski_setup_theme');
function ski_setup_theme()
{

    add_theme_support('title-tag');
    load_theme_textdomain('ski', get_template_directory() . '/languages');

    //Logo registration. Call by  get_custom_logo() or the_custom_logo(), check by has_custom_logo()
    add_theme_support('custom-logo', [
        'height'      => 61,
        'width'       => 166,
        'flex-width'  => false,
        'flex-height' => false,
        'header-text' => '',
        'unlink-homepage-logo' => false, // WP 5.5
    ]);

    add_theme_support('post-thumbnails');

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

    register_nav_menus(array(
        'header_menu' => esc_html__('Header menu', 'ski')
    ));
}

//register customizer from DIR . /inc/
add_action('customize_register', 'ski_castomization');

//register custom type for offers
add_action('init', 'ski_offers_register_post_type');
function ski_offers_register_post_type()
{
    register_post_type('offer', array(
        'labels'             => array(
            'name'               => esc_html__('Offers', 'ski'),
            'singular_name'      => esc_html__('Offer', 'ski'),
            'add_new'            => esc_html__('Add offer', 'ski'),
            'add_new_item'       => esc_html__('Add new offer', 'ski'),
            'edit_item'          => esc_html__('Edit offer', 'ski'),
            'new_item'           => esc_html__('New offer', 'ski'),
            'view_item'          => esc_html__('Preview post', 'ski'),
            'search_items'       => esc_html__('Search offer', 'ski'),
            'not_found'          => esc_html__('Offers not found', 'ski'),
            'not_found_in_trash' => esc_html__('Offers not found', 'ski'),
            'menu_name'          => esc_html__('Offers', 'ski')
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-lightbulb',
        'supports' => ['title', 'thumbnail', 'excerpt']
        
    ));
}

//register custom type for gallery
add_action('init', 'ski_gallery_register_post_type');
function ski_gallery_register_post_type()
{
    register_post_type('gallery', array(
        'labels'             => array(
            'name'               => esc_html__('Gallery', 'ski'),
            'singular_name'      => esc_html__('Gallery', 'ski'),
            'add_new'            => esc_html__('Add gallery', 'ski'),
            'add_new_item'       => esc_html__('Add new gallery', 'ski'),
            'edit_item'          => esc_html__('Edit gallery', 'ski'),
            'new_item'           => esc_html__('New gallery', 'ski'),
            'view_item'          => esc_html__('Preview post', 'ski'),
            'search_items'       => esc_html__('Search gallery', 'ski'),
            'not_found'          => esc_html__('Gallery not found', 'ski'),
            'not_found_in_trash' => esc_html__('Gallery not found', 'ski'),
            'menu_name'          => esc_html__('Gallery', 'ski')
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => ['title', 'editor']
    ));
}

//register custom type for Tean
add_action('init', 'ski_team_register_post_type');
function ski_team_register_post_type()
{
    register_post_type('team', array(
        'labels'             => array(
            'name'               => esc_html__('Team', 'ski'),
            'singular_name'      => esc_html__('Team', 'ski'),
            'add_new'            => esc_html__('Add team member', 'ski'),
            'add_new_item'       => esc_html__('Add new member', 'ski'),
            'edit_item'          => esc_html__('Edit team member', 'ski'),
            'new_item'           => esc_html__('New team member', 'ski'),
            'view_item'          => esc_html__('Preview post', 'ski'),
            'search_items'       => esc_html__('Search team member', 'ski'),
            'not_found'          => esc_html__('Team member not found', 'ski'),
            'not_found_in_trash' => esc_html__('Team member not found', 'ski'),
            'menu_name'          => esc_html__('Team', 'ski')
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'excerpt', 'thumbnail']
    ));
}

//register custom type for Statistics
add_action('init', 'ski_statistic_register_post_type');
function ski_statistic_register_post_type()
{
    register_post_type('statistic', array(
        'labels'             => array(
            'name'               => esc_html__('Statistic', 'ski'),
            'singular_name'      => esc_html__('Statistic', 'ski'),
            'add_new'            => esc_html__('Add Statistics', 'ski'),
            'add_new_item'       => esc_html__('Add new Statistics', 'ski'),
            'edit_item'          => esc_html__('Edit Statistics', 'ski'),
            'new_item'           => esc_html__('New Statistics', 'ski'),
            'view_item'          => esc_html__('Preview post', 'ski'),
            'search_items'       => esc_html__('Search Statistics', 'ski'),
            'not_found'          => esc_html__('Statistics not found', 'ski'),
            'not_found_in_trash' => esc_html__('Statistics not found', 'ski'),
            'menu_name'          => esc_html__('Statistics', 'ski')
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-chart-line',
        'supports' => ['title', 'editor', 'thumbnail']
    ));
}

//register custom type for Testimonials
add_action('init', 'ski_testimonials_register_post_type');
function ski_testimonials_register_post_type()
{
    register_post_type('testimonials', array(
        'labels'             => array(
            'name'               => esc_html__('Testimonials', 'ski'),
            'singular_name'      => esc_html__('Testimonials', 'ski'),
            'add_new'            => esc_html__('Add Testimonial', 'ski'),
            'add_new_item'       => esc_html__('Add new Testimonial', 'ski'),
            'edit_item'          => esc_html__('Edit Testimonial', 'ski'),
            'new_item'           => esc_html__('New Testimonial', 'ski'),
            'view_item'          => esc_html__('Preview post', 'ski'),
            'search_items'       => esc_html__('Search Testimonials', 'ski'),
            'not_found'          => esc_html__('Testimonials not found', 'ski'),
            'not_found_in_trash' => esc_html__('Testimonials not found', 'ski'),
            'menu_name'          => esc_html__('Testimonials', 'ski')
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'exclude_from_search' => true,
        'show_in_nav_menus' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-welcome-view-site',
        'supports' => ['title', 'excerpt', 'thumbnail']
    ));
}


//metabox for offers 
add_action('add_meta_boxes', 'ski_meta_box_price');

function ski_meta_box_price()
{
    add_meta_box(
        'offer_price',
        esc_html__('Offer price', 'ski'),
        'offer_price_cb',
        'offer'  //post type
    );
}

function offer_price_cb($post_obj)
{
    $price = get_post_meta($post_obj->ID, 'offer_price', true); 
    $price = $price ? $price : '';    
    echo "<input type=\"text\" name=\"offer_price\" value=\"${price}\">";
}

add_action('save_post', 'save_price_meta');

function save_price_meta($post_id)
{
    if (isset($_POST['offer_price'])) {
        update_post_meta($post_id, 'offer_price', $_POST['offer_price']);
    }
}

//call
//$price = get_post_meta($id, 'offer_price', true);

//metaboxes for statistics (Clients)
 
add_action('add_meta_boxes', 'ski_meta_box_clients');

function ski_meta_box_clients()
{
    add_meta_box(
        'clients_meta',
        esc_html__('Happy clients', 'ski'),
        'clients_meta_cb',
        'statistic'  //post type
    );
}

function clients_meta_cb($post_obj)
{
    $clients = get_post_meta($post_obj->ID, 'clients_meta', true);
    $clients = $clients ? $clients : '';
    echo "<input type=\"text\" name=\"clients_meta\" value=\"${clients}\">";
}

add_action('save_post', 'save_clients_meta');

function save_clients_meta($post_id)
{
    if (isset($_POST['clients_meta'])) {
        update_post_meta($post_id, 'clients_meta', $_POST['clients_meta']);
    }
}

//metaboxes for statistics (Awards)
add_action('add_meta_boxes', 'ski_meta_box_awards');

function ski_meta_box_awards()
{
    add_meta_box(
        'awards_meta',
        esc_html__('Professional awards', 'ski'),
        'awards_meta_cb',
        'statistic'  //post type
    );
}

function awards_meta_cb($post_obj)
{
    $awards = get_post_meta($post_obj->ID, 'awards_meta', true);
    $awards = $awards ? $awards : '';
    echo "<input type=\"text\" name=\"awards_meta\" value=\"${awards}\">";
}

add_action('save_post', 'save_awards_meta');

function save_awards_meta($post_id)
{
    if (isset($_POST['awards_meta'])) {
        update_post_meta($post_id, 'awards_meta', $_POST['awards_meta']);
    }
}

//metaboxes for statistics (Tops)
add_action('add_meta_boxes', 'ski_meta_box_tops');

function ski_meta_box_tops()
{
    add_meta_box(
        'tops_meta',
        esc_html__('Reached tops', 'ski'),
        'tops_meta_cb',
        'statistic'  //post type
    );
}

function tops_meta_cb($post_obj)
{
    $tops = get_post_meta($post_obj->ID, 'tops_meta', true);
    $tops = $tops ? $tops : '';
    echo "<input type=\"text\" name=\"tops_meta\" value=\"${tops}\">";
}

add_action('save_post', 'save_tops_meta');

function save_tops_meta($post_id)
{
    if (isset($_POST['tops_meta'])) {
        update_post_meta($post_id, 'tops_meta', $_POST['tops_meta']);
    }
}


//tel regex
function tel_number($tel) {
    return preg_replace('/[^+0-9]/', '', $tel);
}


