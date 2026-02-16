<?php
/**
 * Site footer.
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
<footer class="bg-slate-950 text-slate-400 py-16 border-t border-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-start gap-12 mb-12">
            <div class="max-w-md text-center md:text-left">
                <a href="<?php echo esc_url($home_url); ?>" class="mb-6 inline-block md:block">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo_cortex.svg'); ?>" alt="Cortex Logo" class="h-12 w-auto">
                </a>
                <p class="text-slate-500">
                    Building the future of online retail-one brand, one platform, one experience at a time.
                </p>
            </div>

            <div class="text-center md:text-right">
                <ul class="flex flex-wrap justify-center md:justify-end gap-8">
                    <li><a href="<?php echo esc_url($home_url . '#about'); ?>" class="hover:text-cortex-primary transition-colors">About Us</a></li>
                    <li><a href="<?php echo esc_url($home_url . '#portfolio-overview'); ?>" class="hover:text-cortex-primary transition-colors">Portfolio</a></li>
                    <li><a href="<?php echo esc_url($blog_url); ?>" class="hover:text-cortex-primary transition-colors">Blogs</a></li>
                    <li><a href="<?php echo esc_url($home_url . '#contact'); ?>" class="hover:text-cortex-primary transition-colors">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="pt-8 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center text-sm">
            <p>&copy; <?php echo esc_html(date('Y')); ?> Cortex Technologies Corp. All rights reserved.</p>
            <p class="mt-2 md:mt-0">Designed with <i class="fas fa-heart text-red-500 mx-1"></i> by Cortex Team</p>
        </div>
    </div>
</footer>

<div class="relative z-[60]" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-slate-900/20 backdrop-blur-sm transition-opacity opacity-0 pointer-events-none" id="mobileMenuBackdrop"></div>

    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div class="pointer-events-auto w-screen max-w-xs transform translate-x-full transition-transform duration-300 ease-in-out" id="mobileMenuPanel">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-2xl">
                        <div class="px-4 py-6 sm:px-6 border-b border-slate-100">
                            <div class="flex items-center justify-end">
                                <button type="button" class="rounded-md text-slate-400 hover:text-slate-500 focus:outline-none" id="closeMobileMenuBtn">
                                    <span class="sr-only">Close panel</span>
                                    <i class="fas fa-times text-xl"></i>
                                </button>
                            </div>
                        </div>
                        <div class="relative mt-6 flex-1 px-4 sm:px-6">
                            <div class="flex flex-col space-y-6">
                                <a href="<?php echo esc_url($home_url); ?>" class="text-lg font-medium text-slate-900 hover:text-cortex-primary transition-colors mobile-link">Home</a>
                                <a href="<?php echo esc_url($home_url . '#about'); ?>" class="text-lg font-medium text-slate-900 hover:text-cortex-primary transition-colors mobile-link">About</a>
                                <div class="space-y-3">
                                    <a href="<?php echo esc_url($home_url . '#portfolio-overview'); ?>" class="text-lg font-medium text-slate-900 hover:text-cortex-primary transition-colors mobile-link block">Portfolio</a>
                                    <div class="pl-4 border-l border-slate-200 space-y-3">
                                        <a href="<?php echo esc_url(home_url('/sharkninja/')); ?>" class="text-base font-medium text-slate-700 hover:text-cortex-primary transition-colors mobile-link block">SharkNinja</a>
                                        <a href="<?php echo esc_url(home_url('/concepstore/')); ?>" class="text-base font-medium text-slate-700 hover:text-cortex-primary transition-colors mobile-link block">ConcepStore</a>
                                        <a href="<?php echo esc_url(home_url('/mangkosme/')); ?>" class="text-base font-medium text-slate-700 hover:text-cortex-primary transition-colors mobile-link block">Mangkosme</a>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url($blog_url); ?>" class="text-lg font-medium text-slate-900 hover:text-cortex-primary transition-colors mobile-link">Blogs</a>
                                <a href="<?php echo esc_url($home_url . '#contact'); ?>" class="text-lg font-medium text-slate-900 hover:text-cortex-primary transition-colors mobile-link">Contact</a>
                            </div>

                            <div class="mt-10 pt-10 border-t border-slate-100">
                                <a href="<?php echo esc_url($home_url . '#contact'); ?>" class="flex w-full items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-slate-800 mobile-link">
                                    Connect with us
                                </a>
                                <p class="mt-6 text-center text-sm text-slate-500">
                                    Ready to transform your digital presence?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
