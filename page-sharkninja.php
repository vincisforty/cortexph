<?php
/**
 * SharkNinja case study page.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$case_data = array(
    'brand'      => 'SharkNinja',
    'kicker'     => 'Portfolio Page: SharkNinja',
    'headline'   => 'SharkNinja Philippines',
    'summary'    => 'SharkNinja Philippines represents the local embodiment of a globally recognized home and lifestyle technology powerhouse, bringing world-class solutions that seamlessly integrate into modern Filipino households.',
    'lead'       => 'SharkNinja\'s heritage is rooted in relentless innovation and consumer-driven design. Combining two powerhouse brands - Shark, the #1 floor-care brand in the United States, and Ninja, one of the most beloved kitchen appliance brands globally - SharkNinja creates products designed to simplify everyday tasks without sacrificing performance or style.',
    'hero_image' => get_template_directory_uri() . '/images/herobanner-sharkninja.webp',
    'context_image' => get_template_directory_uri() . '/images/brandcontext-sharkninja.webp',
    'growth_image' => 'https://cdn.shopify.com/s/files/1/0790/0548/3325/files/Untitled_design_14.jpg?v=1764732100',
    'logo_image' => get_template_directory_uri() . '/images/sitelogo-sharkninja.png',
    'site_url'   => 'https://sharkninja.com.ph/',
    'stats'      => array(
        array(
            'label'       => 'Units Sold',
            'target'      => 15000,
            'prefix'      => 'Over ',
            'suffix'      => '+',
            'icon'        => 'fas fa-box-open',
            'description' => 'Across online and offline channels through strong execution and market penetration.',
        ),
        array(
            'label'       => 'Retail Activation',
            'target'      => 3,
            'prefix'      => '',
            'suffix'      => ' strategic pop-ups',
            'icon'        => 'fas fa-store',
            'description' => 'Executed across high-traffic Metro Manila malls to strengthen physical discovery.',
        ),
        array(
            'label'       => 'Category Expansion',
            'value'       => 'Kitchen + Outdoor',
            'icon'        => 'fas fa-layer-group',
            'description' => 'Broadened portfolio mix to capture emerging consumer demand.',
        ),
    ),
    'context'    => array(
        'SharkNinja Philippines represents the local embodiment of a globally recognized home and lifestyle technology powerhouse, bringing world-class solutions that seamlessly integrate into modern Filipino households.',
        'SharkNinja\'s heritage is rooted in relentless innovation and consumer-driven design. Combining two powerhouse brands - Shark and Ninja - the portfolio simplifies everyday tasks without sacrificing performance or style.',
    ),
    'growth_engine' => array(
        'SharkNinja\'s Philippine rapid growth was built through a full-funnel, omnichannel approach that combined digital marketing, direct-to-consumer optimization, and retail activation.',
        'By leveraging data-driven audience segmentation, improving user experience, and implementing targeted retargeting, we boosted conversions and average order value across online and offline channels.',
        'This integrated approach strengthened brand visibility and made the brand\'s products more accessible to consumers.',
    ),
    'pillars'    => array(
        array(
            'icon'        => 'fas fa-bullseye',
            'title'       => 'Data-Driven Segmentation',
            'description' => 'Audience intelligence guided precision targeting and high-efficiency retargeting.',
        ),
        array(
            'icon'        => 'fas fa-cart-shopping',
            'title'       => 'D2C Optimization',
            'description' => 'UX and conversion improvements improved product discovery and checkout performance.',
        ),
        array(
            'icon'        => 'fas fa-store',
            'title'       => 'Retail Activation',
            'description' => 'Online momentum was reinforced with strategic in-person retail activations.',
        ),
    ),
    'framework'  => array(
        array(
            'icon'        => 'fas fa-bullseye',
            'title'       => 'Performance-Led Acquisition',
            'description' => 'Scaled awareness and qualified traffic through focused paid media and campaign sequencing.',
        ),
        array(
            'icon'        => 'fas fa-cart-shopping',
            'title'       => 'Conversion Architecture',
            'description' => 'Improved D2C experience using UX refinements, merchandising logic, and checkout optimization.',
        ),
        array(
            'icon'        => 'fas fa-store',
            'title'       => 'Omnichannel Activation',
            'description' => 'Connected ecommerce momentum with retail touchpoints for stronger visibility and trust.',
        ),
    ),
    'framework_intro' => 'SharkNinja\'s market acceleration in the Philippines came from a full-funnel system that linked digital acquisition, D2C optimization, and omnichannel retail activation into one conversion engine.',
    'gallery' => array(
        array(
            'src'   => 'https://sharkninja.com.ph/cdn/shop/articles/03_Shark_Ninja_Article_01.png?v=1759725056&width=1200',
            'alt'   => 'SharkNinja hero campaign visual',
            'large' => true,
        ),
        array(
            'src' => 'https://cdn.accentuate.io/9986510160189/1752474617908/DTC_NJA_FB245_WEBR_WebCollage_4.webp?v=1752474617908&transform=cover=1/resize=1024',
            'alt' => 'SharkNinja feature grid visual',
        ),
        array(
            'src' => 'https://cdn.shopify.com/s/files/1/0790/0548/3325/files/Untitled_design_14.jpg?v=1764732100',
            'alt' => 'SharkNinja retail activation visual',
        ),
        array(
            'src' => get_template_directory_uri() . '/images/screen-sharkninja.png',
            'alt' => 'SharkNinja website interface',
        ),
    ),
    'related' => array(
        array(
            'title' => 'ConcepStore',
            'url'   => home_url('/concepstore/'),
            'blurb' => 'Curated ecommerce growth for premium home solutions.',
            'image' => get_template_directory_uri() . '/images/grid-concepstore-1.webp',
        ),
        array(
            'title' => 'Mangkosme',
            'url'   => home_url('/mangkosme/'),
            'blurb' => 'Warehouse-led momentum combined with social community power.',
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
