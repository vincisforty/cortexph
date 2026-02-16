<?php
/**
 * Site header.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

$home_url = home_url('/');
$posts_page_id = (int) get_option('page_for_posts');
$blog_url = $posts_page_id ? get_permalink($posts_page_id) : home_url('/blog/');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri() . '/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_template_directory_uri() . '/favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_template_directory_uri() . '/favicon/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?php echo esc_url(get_template_directory_uri() . '/favicon/site.webmanifest'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-sans text-slate-800 bg-slate-50 antialiased selection:bg-cortex-primary selection:text-white overflow-x-hidden'); ?>>
<?php wp_body_open(); ?>

<nav class="fixed top-0 w-full z-50 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0">
                <a href="<?php echo esc_url($home_url); ?>" class="flex items-center" aria-label="Cortex Home">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo_cortex.svg'); ?>" alt="Cortex Logo" class="h-12 w-auto">
                </a>
            </div>

            <div class="hidden md:flex flex-1 justify-end items-center space-x-8 mr-6">
                <a href="<?php echo esc_url($home_url); ?>" class="text-slate-100 hover:text-cortex-accent font-medium text-sm transition-colors">Home</a>
                <a href="<?php echo esc_url($home_url . '#about'); ?>" class="text-slate-100 hover:text-cortex-accent font-medium text-sm transition-colors">About</a>
                <div class="relative group">
                    <a href="<?php echo esc_url($home_url . '#portfolio-overview'); ?>" class="inline-flex items-center text-slate-100 hover:text-cortex-accent font-medium text-sm transition-colors">
                        Portfolio <i class="fas fa-chevron-down ml-2 text-[10px] opacity-80"></i>
                    </a>
                    <div class="absolute left-0 top-full pt-3 opacity-0 group-hover:opacity-100 group-focus-within:opacity-100 pointer-events-none group-hover:pointer-events-auto group-focus-within:pointer-events-auto transition-opacity duration-200">
                        <div class="w-56 rounded-xl border border-white/10 bg-slate-900/95 backdrop-blur-md shadow-2xl p-2">
                            <a href="<?php echo esc_url($home_url . '#portfolio-overview'); ?>" class="block px-3 py-2 rounded-lg text-slate-200 hover:bg-white/10 hover:text-cortex-accent text-sm transition-colors">Portfolio Overview</a>
                            <a href="<?php echo esc_url(home_url('/sharkninja/')); ?>" class="block px-3 py-2 rounded-lg text-slate-200 hover:bg-white/10 hover:text-cortex-accent text-sm transition-colors">SharkNinja</a>
                            <a href="<?php echo esc_url(home_url('/concepstore/')); ?>" class="block px-3 py-2 rounded-lg text-slate-200 hover:bg-white/10 hover:text-cortex-accent text-sm transition-colors">ConcepStore</a>
                            <a href="<?php echo esc_url(home_url('/mangkosme/')); ?>" class="block px-3 py-2 rounded-lg text-slate-200 hover:bg-white/10 hover:text-cortex-accent text-sm transition-colors">Mangkosme</a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo esc_url($blog_url); ?>" class="text-slate-100 hover:text-cortex-accent font-medium text-sm transition-colors">Blogs</a>
                <a href="<?php echo esc_url($home_url . '#contact'); ?>" class="text-slate-100 hover:text-cortex-accent font-medium text-sm transition-colors">Contact</a>
            </div>

            <button class="md:hidden text-slate-900 focus:outline-none p-2 rounded-md hover:bg-slate-100 transition-colors" id="mobileMenuBtn" aria-label="Toggle menu">
                <i class="fas fa-bars text-xl text-slate-100 hover:text-cortex-primary"></i>
            </button>
        </div>
    </div>
</nav>
