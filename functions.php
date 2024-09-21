<?php
if (!function_exists('webhavva_setup')) {
    function webhavva_setup()
    {
        add_theme_support('custom-logo',
            array(
                'height' => 29,
                'width' => 72,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'webhavva_setup');
}

/* Enqueue scripts and styles */
add_action('wp_enqueue_scripts', 'webhavva_scripts');

function webhavva_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri ());
    wp_enqueue_style('webhavva-style', get_template_directory_uri() . '/assets/css/page-landing.css', array('main'));
    wp_enqueue_script('webhavva-scripts', get_template_directory_uri() . '/assets/js/page-landing.js', array(), false, true);
    wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array('main'));
    wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10.0.0/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), false, true);
    wp_enqueue_script('footer-scripts', get_template_directory_uri() . '/assets/js/footer.js', array(), false, true);
}

/* Register menus */
function webhavva_menus()
{
    $locations = array(
        'header' => __('Header Menu', 'webhavva'),
        'footer' => __('Footer Menu', 'webhavva'),
    );

    register_nav_menus($locations);
}

add_action('init', 'webhavva_menus');

/* ACF add options page */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}
