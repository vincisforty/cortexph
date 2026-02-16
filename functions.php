<?php
/**
 * Cortex PH theme bootstrap.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

function cortex_ph_setup() {
    add_theme_support('title-tag');
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

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'cortex-ph'),
        )
    );
}
add_action('after_setup_theme', 'cortex_ph_setup');

function cortex_ph_enqueue_assets() {
    $theme_uri = get_template_directory_uri();
    $theme_dir = get_template_directory();

    wp_enqueue_style('cortex-theme', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('cortex-google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('cortex-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    wp_enqueue_style('cortex-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_style('cortex-custom', $theme_uri . '/css/style.css', array('cortex-theme'), filemtime($theme_dir . '/css/style.css'));
    wp_enqueue_style('cortex-case-study', $theme_uri . '/css/case-study.css', array('cortex-custom'), filemtime($theme_dir . '/css/case-study.css'));

    wp_enqueue_script('cortex-tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    wp_add_inline_script(
        'cortex-tailwind',
        "tailwind.config = {\n" .
        "  theme: {\n" .
        "    extend: {\n" .
        "      colors: {\n" .
        "        cortex: {\n" .
        "          primary: '#da8622',\n" .
        "          secondary: '#a22446',\n" .
        "          accent: '#f4ce7b',\n" .
        "          dark: '#0F172A',\n" .
        "          light: '#f1d6cc'\n" .
        "        }\n" .
        "      },\n" .
        "      fontFamily: {\n" .
        "        sans: ['Inter', 'sans-serif'],\n" .
        "        display: ['Plus Jakarta Sans', 'sans-serif']\n" .
        "      },\n" .
        "      backgroundImage: {\n" .
        "        'hero-pattern': \"url('" . esc_url($theme_uri . "/images/coline-beulin-oLWGI-Q76Yc-unsplash.jpg") . "')\"\n" .
        "      }\n" .
        "    }\n" .
        "  }\n" .
        "};",
        'before'
    );

    wp_enqueue_script('cortex-aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('cortex-main', $theme_uri . '/js/main.js', array('cortex-aos-js'), filemtime($theme_dir . '/js/main.js'), true);
    wp_enqueue_script('cortex-case-study-js', $theme_uri . '/js/case-study.js', array('cortex-main'), filemtime($theme_dir . '/js/case-study.js'), true);
}
add_action('wp_enqueue_scripts', 'cortex_ph_enqueue_assets');

function cortex_ph_seed_case_study_pages() {
    $pages = array(
        'sharkninja' => 'SharkNinja',
        'concepstore' => 'ConcepStore',
        'mangkosme' => 'Mangkosme',
    );

    foreach ($pages as $slug => $title) {
        if (get_page_by_path($slug, OBJECT, 'page')) {
            continue;
        }

        wp_insert_post(
            array(
                'post_type'    => 'page',
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_content' => '',
            )
        );
    }
}
add_action('after_switch_theme', 'cortex_ph_seed_case_study_pages');

function cortex_ph_maybe_seed_case_study_pages() {
    if (get_option('cortex_ph_seeded_case_pages')) {
        return;
    }

    cortex_ph_seed_case_study_pages();
    update_option('cortex_ph_seeded_case_pages', 1);
}
add_action('init', 'cortex_ph_maybe_seed_case_study_pages');
