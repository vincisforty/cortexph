<?php
/**
 * Single post template.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$fallback_image = get_template_directory_uri() . '/images/coline-beulin-oLWGI-Q76Yc-unsplash.jpg';
?>
<main class="pt-28 pb-20 bg-slate-900 min-h-screen text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (empty($thumbnail_url)) {
                $thumbnail_url = $fallback_image;
            }
            ?>
            <article class="rounded-3xl border border-white/10 bg-slate-800/70 overflow-hidden" data-aos="fade-up">
                <div class="relative h-64 md:h-96">
                    <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover" loading="eager" fetchpriority="high">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 to-slate-950/20"></div>
                </div>

                <div class="p-8 md:p-12">
                    <div class="flex flex-wrap items-center gap-3 mb-4 text-xs md:text-sm text-slate-300">
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/10 border border-white/15"><?php echo esc_html(get_the_date('F j, Y')); ?></span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full bg-white/10 border border-white/15">By <?php echo esc_html(get_the_author()); ?></span>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            ?>
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-cortex-accent/20 border border-cortex-accent/40 text-cortex-accent"><?php echo esc_html($categories[0]->name); ?></span>
                        <?php endif; ?>
                    </div>

                    <h1 class="font-display text-3xl md:text-5xl font-bold mb-8 leading-tight"><?php the_title(); ?></h1>

                    <div class="cortex-post-content text-slate-100 leading-relaxed">
                    <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php
get_footer();
