<?php
/**
 * Mangkosme case study page.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$case_data = array(
    'brand'      => 'Mangkosme',
    'kicker'     => 'Portfolio Page: Mangkosme',
    'headline'   => 'Mangkosme',
    'summary'    => 'Mangkosme is a dynamic home and business appliance destination redefining value and accessibility in the Philippine market, combining best-in-class warehouse sale experiences with a robust online outlet presence.',
    'lead'       => 'Operated and scaled through a digitally driven online-to-offline growth system connecting performance marketing, social community building, and high-impact warehouse sales.',
    'hero_image' => get_template_directory_uri() . '/images/screen-mangkosme.png',
    'context_image' => get_template_directory_uri() . '/images/grid-mangkosme-2.webp',
    'growth_image' => get_template_directory_uri() . '/images/grid-mangkosme-4.webp',
    'logo_image' => get_template_directory_uri() . '/images/sitelogo-mangkosme.png',
    'site_url'   => 'https://mangkosme.com/',
    'stats'      => array(
        array(
            'label'       => 'Warehouse Operations',
            'value'       => 'Best-in-Class Processes',
            'icon'        => 'fas fa-warehouse',
            'description' => 'Accelerated warehouse sales with scalable systems and efficient execution.',
        ),
        array(
            'label'       => 'Community Reach',
            'target'      => 500000,
            'prefix'      => '',
            'suffix'      => '+ followers',
            'icon'        => 'fas fa-users',
            'description' => 'Strong Facebook community with high engagement, reach, and customer affinity.',
        ),
        array(
            'label'       => 'SME Support',
            'value'       => 'Negosyo-Focused Bundles',
            'icon'        => 'fas fa-briefcase',
            'description' => 'Tailored appliance packages empowering SMEs and first-time negosyo owners.',
        ),
    ),
    'context'    => array(
        'Mangkosme is a dynamic home and business appliance destination redefining value and accessibility in the Philippine market, combining best-in-class warehouse sale experiences with a robust online outlet presence.',
        'A broad portfolio spanning trusted global appliance brands across multiple categories drives high warehouse conversion while serving both everyday consumers and business buyers.',
    ),
    'growth_engine' => array(
        'The online-to-offline model connects performance marketing, social community building, and high-impact warehouse sales to turn awareness into in-store conversion.',
        'Data-led segmentation, retargeting, and email marketing move customers from online discovery to in-store purchase with stronger conversion efficiency.',
        'Built strong on bulk sales, the model supports SMBs expanding operations and new negosyo owners starting with limited capital.',
    ),
    'pillars'    => array(
        array(
            'icon'        => 'fas fa-bullhorn',
            'title'       => 'Performance Marketing',
            'description' => 'Always-on paid media strategy continuously fed qualified demand into the funnel.',
        ),
        array(
            'icon'        => 'fas fa-people-group',
            'title'       => 'Social Community Building',
            'description' => 'Community growth strengthened affinity, trust, and repeat purchase behavior.',
        ),
        array(
            'icon'        => 'fas fa-dolly',
            'title'       => 'Warehouse Sales System',
            'description' => 'Operationally strong warehouse events converted high-intent traffic at scale.',
        ),
    ),
    'framework'  => array(
        array(
            'icon'        => 'fas fa-warehouse',
            'title'       => 'Warehouse-First Conversion',
            'description' => 'Operational excellence made warehouse campaigns faster, smoother, and conversion-focused.',
        ),
        array(
            'icon'        => 'fas fa-people-group',
            'title'       => 'Community Flywheel',
            'description' => 'Social content and engagement loops turned audience growth into sustained brand affinity.',
        ),
        array(
            'icon'        => 'fas fa-briefcase',
            'title'       => 'Negosyo Enablement',
            'description' => 'Business-ready appliance bundles supported entrepreneurial buying behavior.',
        ),
    ),
    'framework_intro' => 'Mangkosme\'s online-to-offline system combines performance media, social community momentum, and warehouse conversion mechanics to sustain scalable growth and negosyo-focused demand.',
    'gallery' => array(
        array(
            'src'   => get_template_directory_uri() . '/images/grid-mangkosme-2.webp',
            'alt'   => 'Mangkosme main campaign visual',
            'large' => true,
        ),
        array(
            'src' => get_template_directory_uri() . '/images/grid-mangkosme-1.webp',
            'alt' => 'Mangkosme warehouse campaign visual',
        ),
        array(
            'src' => get_template_directory_uri() . '/images/screen-mangkosme.png',
            'alt' => 'Mangkosme website interface',
        ),
        array(
            'src' => get_template_directory_uri() . '/images/grid-mangkosme-3.webp',
            'alt' => 'Mangkosme brand engagement visual',
        ),
        array(
            'src' => get_template_directory_uri() . '/images/grid-mangkosme-4.webp',
            'alt' => 'Mangkosme warehouse event visual',
        ),
    ),
    'related' => array(
        array(
            'title' => 'SharkNinja',
            'url'   => home_url('/sharkninja/'),
            'blurb' => 'Premium appliance growth powered by omnichannel execution.',
            'image' => 'https://sharkninja.com.ph/cdn/shop/articles/03_Shark_Ninja_Article_01.png?v=1759725056&width=1200',
        ),
        array(
            'title' => 'ConcepStore',
            'url'   => home_url('/concepstore/'),
            'blurb' => 'Curated product strategy and conversion-focused ecommerce journeys.',
            'image' => get_template_directory_uri() . '/images/grid-concepstore-1.webp',
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
