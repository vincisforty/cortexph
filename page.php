<?php
/**
 * Generic page template.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="pt-28 pb-20 bg-slate-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php while (have_posts()) : the_post(); ?>
            <article class="rounded-3xl border border-white/10 bg-slate-800/70 p-8 md:p-12" data-aos="fade-up">
                <h1 class="font-display text-4xl font-bold mb-6"><?php the_title(); ?></h1>
                <div class="prose prose-invert max-w-none prose-headings:font-display prose-a:text-cortex-accent">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php
get_footer();
