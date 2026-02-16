<?php
/**
 * Main fallback template.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="pt-28 pb-20 bg-slate-900 min-h-screen text-white case-grid-pattern">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-12" data-aos="fade-up">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-cortex-accent/20 border border-cortex-accent/50 text-cortex-accent text-xs font-bold tracking-widest uppercase mb-4">
                Cortex PH
            </span>
            <h1 class="font-display text-4xl md:text-5xl font-bold mb-4">Latest Content</h1>
            <p class="text-slate-300 text-lg">WordPress fallback template for posts and dynamic content.</p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="space-y-6">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class('rounded-2xl border border-white/10 bg-slate-800/70 p-7 hover:border-cortex-accent/60 transition-colors'); ?> data-aos="fade-up">
                        <h2 class="font-display text-2xl font-bold mb-3">
                            <a href="<?php the_permalink(); ?>" class="hover:text-cortex-accent transition-colors"><?php the_title(); ?></a>
                        </h2>
                        <p class="text-slate-400 text-sm mb-4"><?php echo esc_html(get_the_date()); ?></p>
                        <div class="text-slate-200 leading-relaxed"><?php the_excerpt(); ?></div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="mt-10 text-slate-200">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <div class="rounded-2xl border border-white/10 bg-slate-800/70 p-8" data-aos="fade-up">
                <h2 class="font-display text-2xl font-bold mb-2">No content found</h2>
                <p class="text-slate-300">Create posts or pages to populate this section.</p>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
