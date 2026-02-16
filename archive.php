<?php
/**
 * Archive template.
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
        <header class="mb-10" data-aos="fade-up">
            <h1 class="font-display text-4xl font-bold mb-3"><?php the_archive_title(); ?></h1>
            <p class="text-slate-300"><?php the_archive_description(); ?></p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="space-y-5">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="rounded-2xl border border-white/10 bg-slate-800/70 p-7" data-aos="fade-up">
                        <h2 class="font-display text-2xl font-bold mb-2"><a href="<?php the_permalink(); ?>" class="hover:text-cortex-accent transition-colors"><?php the_title(); ?></a></h2>
                        <p class="text-slate-300"><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
            <div class="mt-10"><?php the_posts_pagination(); ?></div>
        <?php else : ?>
            <p class="text-slate-300">No archived entries yet.</p>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
