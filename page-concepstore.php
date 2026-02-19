<?php
/**
 * ConcepStore case study page.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$case_data = array(
    'brand'      => 'ConcepStore',
    'kicker'     => 'Portfolio: ConcepStore',
    'headline'   => 'Elevating Everyday Living Through Curated Home Solutions',
    'summary'    => 'ConcepStore is a premier e-commerce destination redefining how Filipino households discover, select, and purchase home appliances and lifestyle solutions.',
    'lead'       => 'As a proudly curated online store under Concepcion Industrial Corporation, ConcepStore brings together quality products from trusted brands - thoughtfully chosen to solve real-life problems, enhance daily routines, and make modern living more convenient and purposeful.',
    'hero_image' => get_template_directory_uri() . '/images/herobanner-concepstore.webp',
    'context_image' => get_template_directory_uri() . '/images/brandcontext-concepstore.webp',
    'growth_image' => get_template_directory_uri() . '/images/grid-concepstore-1.webp',
    'logo_image' => get_template_directory_uri() . '/images/sitelogo-concepstore.png',
    'site_url'   => 'https://concepstore.ph/',
    'stats'      => array(
        array(
            'label'       => 'Product Positioning',
            'value'       => 'Solution-Driven Appliances',
            'icon'        => 'fas fa-layer-group',
            'description' => 'Curated assortment strategy built for convenience and practical daily value.',
        ),
        array(
            'label'       => 'Customer Experience',
            'value'       => 'Personal Shopper Support',
            'icon'        => 'fas fa-user-check',
            'description' => 'Tailored offers, free shipping within NCR, and warranty-backed confidence.',
        ),
        array(
            'label'       => 'Growth Engine',
            'value'       => 'Loyalty + Lifecycle Workflows',
            'icon'        => 'fas fa-chart-line',
            'description' => 'Retention-focused journeys that strengthened repeat engagement and conversion.',
        ),
    ),
    'context'    => array(
        'ConcepStore - Elevating Everyday Living Through Curated Home Solutions.',
        'ConcepStore is a premier e-commerce destination redefining how Filipino households discover, select, and purchase home appliances and lifestyle solutions under a proudly curated online model.',
    ),
    'growth_engine' => array(
        'ConcepStore achieved measurable growth through a holistic, data-led approach.',
        'By aligning performance marketing, UX enhancements, and audience segmentation, we boosted engagement, average order value, and conversion rates consistently across direct and third-party platforms.',
    ),
    'pillars'    => array(
        array(
            'icon'        => 'fas fa-bullseye',
            'title'       => 'Performance Alignment',
            'description' => 'Media and messaging strategy were tuned to audience intent and channel behavior.',
        ),
        array(
            'icon'        => 'fas fa-magic',
            'title'       => 'UX Enhancements',
            'description' => 'User journey refinements improved product exploration and decision clarity.',
        ),
        array(
            'icon'        => 'fas fa-chart-line',
            'title'       => 'Audience Segmentation',
            'description' => 'Data-led segmentation increased relevance and improved conversion efficiency.',
        ),
    ),
    'framework'  => array(
        array(
            'icon'        => 'fas fa-layer-group',
            'title'       => 'Curated Merchandising',
            'description' => 'Built category storytelling and product framing around practical living scenarios.',
        ),
        array(
            'icon'        => 'fas fa-user-check',
            'title'       => 'Service-Led Conversion',
            'description' => 'Personal shopper flows and trust assets reduced hesitation and improved purchase confidence.',
        ),
        array(
            'icon'        => 'fas fa-chart-line',
            'title'       => 'Data-Led Optimization',
            'description' => 'Campaign segmentation and funnel analytics guided iterative UX and media improvements.',
        ),
    ),
    'framework_intro' => 'ConcepStore\'s growth model aligned performance marketing, UX enhancements, and audience segmentation to create consistently higher engagement, stronger order values, and better conversion outcomes across channels.',
    'gallery' => array(
        array(
            'src'   => 'https://concepstore.ph/cdn/shop/articles/title_6abab136-6085-4dc2-beb6-cd9e99eabd45.jpg?v=1730271741&width=900',
            'alt'   => 'ConcepStore feature banner',
            'large' => true,
        ),
        array(
            'src' => get_template_directory_uri() . '/images/grid-concepstore-1.webp',
            'alt' => 'ConcepStore campaign visual',
        ),
        array(
            'src' => 'https://concepstore.ph/cdn/shop/articles/Showroom_3_1_0b7d7fe6-4ef2-410d-8618-58bfa9314048.jpg?v=1711093210&width=628',
            'alt' => 'ConcepStore showroom visual',
        ),
        array(
            'src' => get_template_directory_uri() . '/images/screen-concepstore.png',
            'alt' => 'ConcepStore website interface',
        ),
    ),
    'related' => array(
        array(
            'title' => 'SharkNinja',
            'url'   => home_url('/sharkninja/'),
            'blurb' => 'Omnichannel growth execution for a global appliance powerhouse.',
            'image' => 'https://sharkninja.com.ph/cdn/shop/articles/03_Shark_Ninja_Article_01.png?v=1759725056&width=1200',
        ),
        array(
            'title' => 'Mangkosme',
            'url'   => home_url('/mangkosme/'),
            'blurb' => 'High-velocity warehouse and social commerce performance model.',
            'image' => get_template_directory_uri() . '/images/grid-mangkosme-2.webp',
        ),
        array(
            'title' => 'Homepage Portfolio',
            'url'   => home_url('/#portfolio-overview'),
            'blurb' => 'Return to the full Cortex portfolio highlights.',
            'image' => get_template_directory_uri() . '/images/coline-beulin-oLWGI-Q76Yc-unsplash.jpg',
        ),
    ),
);

include get_template_directory() . '/template-parts/case-study.php';

get_footer();
