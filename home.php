<?php
/**
 * Blog posts index template.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$fallback_image = get_template_directory_uri() . '/images/coline-beulin-oLWGI-Q76Yc-unsplash.jpg';
?>
<main class="pt-28 pb-20 bg-slate-900 min-h-screen text-white case-grid-pattern">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="mb-14 max-w-3xl" data-aos="fade-up">
            <span class="inline-flex items-center px-4 py-1.5 rounded-full bg-cortex-accent/20 border border-cortex-accent/50 text-cortex-accent text-xs font-bold tracking-widest uppercase mb-4">
                Cortex Blog
            </span>
            <h1 class="font-display text-4xl md:text-5xl font-bold mb-5">News & Insights</h1>
            <p class="text-slate-300 text-lg leading-relaxed">Latest updates, case studies, and insights from Cortex Technologies Corp.</p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (empty($thumbnail_url)) {
                        $thumbnail_url = $fallback_image;
                    }
                    $categories = get_the_category();
                    $category_label = !empty($categories) ? $categories[0]->name : 'Article';
                    ?>
                    <article <?php post_class('group rounded-2xl overflow-hidden border border-white/10 bg-slate-800/70 hover:border-cortex-accent/60 hover:shadow-2xl hover:shadow-cortex-primary/10 transition-all duration-300'); ?> data-aos="fade-up">
                        <a href="<?php the_permalink(); ?>" class="block h-52 relative overflow-hidden" aria-label="Read <?php the_title_attribute(); ?>">
                            <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 to-transparent"></div>
                            <span class="absolute left-4 top-4 inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-white/90 text-slate-900"><?php echo esc_html($category_label); ?></span>
                        </a>
                        <div class="p-7">
                            <p class="text-slate-400 text-sm mb-3"><?php echo esc_html(get_the_date('F j, Y')); ?></p>
                            <h2 class="font-display text-2xl font-bold mb-3 leading-tight">
                                <a href="<?php the_permalink(); ?>" class="hover:text-cortex-accent transition-colors"><?php the_title(); ?></a>
                            </h2>
                            <p class="text-slate-300 leading-relaxed mb-5"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-cortex-accent font-semibold hover:text-cortex-primary transition-colors">
                                Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="mt-12 text-slate-100">
                <?php
                the_posts_pagination(
                    array(
                        'mid_size'  => 1,
                        'prev_text' => __('Previous', 'cortex-ph'),
                        'next_text' => __('Next', 'cortex-ph'),
                    )
                );
                ?>
            </div>
        <?php else : ?>
            <div class="rounded-2xl border border-white/10 bg-slate-800/70 p-8" data-aos="fade-up">
                <h2 class="font-display text-2xl font-bold mb-2">No posts yet</h2>
                <p class="text-slate-300">Publish your first post to populate the blog page.</p>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
