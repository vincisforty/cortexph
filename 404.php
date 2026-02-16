<?php
/**
 * 404 template.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="pt-28 pb-20 bg-slate-900 min-h-screen text-white flex items-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <p class="text-cortex-accent text-xs uppercase tracking-[0.2em] font-bold mb-4">404 Error</p>
        <h1 class="font-display text-5xl md:text-6xl font-bold mb-5">Page Not Found</h1>
        <p class="text-slate-300 text-lg mb-8">The page you are looking for does not exist or has moved.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-6 py-3 rounded-full bg-cortex-primary text-white font-semibold hover:bg-cortex-secondary transition-all duration-300">
            Back to Homepage <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</main>
<?php
get_footer();
