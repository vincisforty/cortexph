<?php
/**
 * Shared case study layout.
 *
 * @package Cortex_PH
 */

if (!defined('ABSPATH')) {
    exit;
}

if (empty($case_data) || !is_array($case_data)) {
    return;
}

$brand            = $case_data['brand'] ?? '';
$kicker           = $case_data['kicker'] ?? '';
$headline         = $case_data['headline'] ?? '';
$summary          = $case_data['summary'] ?? '';
$lead             = $case_data['lead'] ?? '';
$hero_image       = $case_data['hero_image'] ?? '';
$logo_image       = $case_data['logo_image'] ?? '';
$site_url         = $case_data['site_url'] ?? '';
$context          = $case_data['context'] ?? array();
$growth           = $case_data['growth_engine'] ?? array();
$stats            = $case_data['stats'] ?? array();
$pillars          = $case_data['pillars'] ?? array();
$framework        = $case_data['framework'] ?? array();
$gallery          = $case_data['gallery'] ?? array();
$related          = $case_data['related'] ?? array();
$context_image    = $case_data['context_image'] ?? $hero_image;
$growth_image     = $case_data['growth_image'] ?? $hero_image;
$framework_intro  = $case_data['framework_intro'] ?? 'Each case was designed as a full-funnel creative system, from awareness to loyalty and repeat purchase.';
$home_url         = home_url('/');
?>
<main class="case-study-page text-slate-900">
    <section class="relative min-h-[90vh] flex items-center overflow-hidden case-grid-pattern pt-24">
        <div class="case-orb case-orb-one"></div>
        <div class="case-orb case-orb-two"></div>
        <div class="case-orb case-orb-three"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900/85 to-slate-950"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7" data-aos="fade-right" data-motion-group>
                    <span class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-cortex-accent/20 border border-cortex-accent/40 text-cortex-accent text-xs font-bold tracking-widest uppercase mb-7" data-motion-item>
                        <?php echo esc_html($kicker); ?>
                    </span>
                    <h1 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-7 max-w-4xl text-white" data-motion-item>
                        <?php echo esc_html($headline); ?>
                    </h1>
                    <p class="text-lg md:text-xl text-slate-200 leading-relaxed max-w-3xl mb-6 case-copy-readable" data-motion-item>
                        <?php echo esc_html($summary); ?>
                    </p>
                    <p class="text-slate-300 leading-relaxed max-w-2xl case-copy-readable" data-motion-item>
                        <?php echo esc_html($lead); ?>
                    </p>

                    <div class="flex flex-wrap gap-3 mt-10" data-motion-item>
                        <a href="<?php echo esc_url($home_url . '#portfolio-overview'); ?>" class="inline-flex items-center px-6 py-3 rounded-full bg-cortex-primary text-white font-semibold hover:bg-cortex-secondary transition-all duration-300">
                            Back to Portfolio <i class="fas fa-arrow-up-right-from-square ml-2 text-xs"></i>
                        </a>
                        <?php if (!empty($site_url)) : ?>
                            <a href="<?php echo esc_url($site_url); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-6 py-3 rounded-full border border-white/30 text-white hover:border-cortex-accent hover:text-cortex-accent transition-all duration-300">
                                Visit Live Site <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="lg:col-span-5" data-aos="fade-left" data-motion-group>
                    <div class="case-hero-panel" data-case-parallax>
                        <?php if (!empty($hero_image)) : ?>
                            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($brand); ?> visual" class="w-full h-[500px] object-cover object-center">
                        <?php endif; ?>
                        <?php if (!empty($logo_image)) : ?>
                            <div class="absolute top-6 left-6 bg-white/95 rounded-xl px-4 py-3 shadow-lg">
                                <img src="<?php echo esc_url($logo_image); ?>" alt="<?php echo esc_attr($brand); ?> logo" class="h-8 w-auto">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-950 border-y border-white/10 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
                <span class="text-cortex-accent text-xs uppercase tracking-[0.2em] font-bold">Results</span>
                <h2 class="font-display text-3xl md:text-4xl font-bold mt-3">Results Snapshot</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6" data-motion-group>
                <?php foreach ($stats as $index => $stat) : ?>
                    <article class="case-results-card rounded-2xl p-8" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($index * 90); ?>" data-motion-item>
                        <h3 class="text-white font-semibold text-2xl mb-4"><?php echo esc_html($stat['label'] ?? ''); ?></h3>
                        <p class="font-display text-5xl md:text-6xl font-bold text-cortex-primary mb-3 leading-none">
                            <?php if (!empty($stat['target'])) : ?>
                                <span
                                    class="case-counter"
                                    data-target="<?php echo esc_attr((int) $stat['target']); ?>"
                                    data-prefix="<?php echo esc_attr($stat['prefix'] ?? ''); ?>"
                                    data-suffix="<?php echo esc_attr($stat['suffix'] ?? ''); ?>"
                                >
                                    <?php echo esc_html(($stat['prefix'] ?? '') . '0' . ($stat['suffix'] ?? '')); ?>
                                </span>
                            <?php else : ?>
                                <?php echo esc_html($stat['value'] ?? ''); ?>
                            <?php endif; ?>
                        </p>
                        <p class="text-slate-300 text-base leading-relaxed"><?php echo esc_html($stat['description'] ?? ''); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 items-center" data-motion-group>
                <div class="lg:col-span-6" data-motion-item>
                    <span class="text-cortex-secondary text-xs uppercase tracking-[0.2em] font-bold">Brand Context</span>
                    <h2 class="font-display text-4xl font-bold mt-4 mb-6">Brand Context</h2>
                    <div class="space-y-5">
                        <?php foreach ($context as $paragraph) : ?>
                            <p class="text-slate-700 text-lg leading-relaxed case-copy-readable"><?php echo esc_html($paragraph); ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="lg:col-span-6" data-motion-item>
                    <?php if (!empty($context_image)) : ?>
                        <figure class="case-feature-image-wrap">
                            <img src="<?php echo esc_url($context_image); ?>" alt="<?php echo esc_attr($brand); ?> brand context" class="case-feature-image">
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Growth System section hidden from frontend -->
    <!--
    <section class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 items-center" data-motion-group>
                <div class="lg:col-span-6" data-motion-item>
                    <span class="text-cortex-secondary text-xs uppercase tracking-[0.2em] font-bold">Growth System</span>
                    <h2 class="font-display text-4xl font-bold mt-4 mb-6">Growth System</h2>
                    <div class="space-y-5">
                        <?php foreach ($growth as $paragraph) : ?>
                            <p class="text-slate-700 text-lg leading-relaxed case-copy-readable"><?php echo esc_html($paragraph); ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="lg:col-span-6" data-motion-item>
                    <?php if (!empty($growth_image)) : ?>
                        <figure class="case-feature-image-wrap">
                            <img src="<?php echo esc_url($growth_image); ?>" alt="<?php echo esc_attr($brand); ?> growth system" class="case-feature-image">
                        </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    -->

    <?php if (!empty($pillars)) : ?>
    <section class="py-24 bg-white text-slate-900 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-12" data-aos="fade-up">
                <span class="text-cortex-secondary text-xs uppercase tracking-[0.2em] font-bold">Execution Highlights</span>
                <h2 class="font-display text-4xl font-bold mt-4 mb-4">Core Workstreams Delivered</h2>
                <p class="text-slate-600">A coordinated mix of strategy, creative execution, and lifecycle optimization designed for measurable growth.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6" data-motion-group>
                <?php foreach ($pillars as $index => $pillar) : ?>
                    <article class="case-light-card rounded-2xl p-7" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($index * 100); ?>" data-motion-item>
                        <?php if (!empty($pillar['icon'])) : ?>
                            <span class="case-light-icon mb-4"><i class="<?php echo esc_attr($pillar['icon']); ?>"></i></span>
                        <?php endif; ?>
                        <h3 class="text-slate-900 font-semibold text-xl mb-2"><?php echo esc_html($pillar['title'] ?? ''); ?></h3>
                        <p class="text-slate-600 leading-relaxed"><?php echo esc_html($pillar['description'] ?? ''); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="py-24 bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 items-start" data-motion-group>
                <div class="lg:col-span-5" data-motion-item>
                    <span class="text-cortex-accent text-xs uppercase tracking-[0.2em] font-bold">Creative Marketing Framework</span>
                    <h2 class="font-display text-4xl font-bold mt-4 mb-5">How We Turned Strategy Into Conversion</h2>
                    <p class="text-slate-700 text-lg leading-relaxed case-copy-readable mb-7"><?php echo esc_html($framework_intro); ?></p>
                    <?php if (!empty($site_url)) : ?>
                        <a href="<?php echo esc_url($site_url); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center text-cortex-primary font-semibold hover:text-cortex-secondary transition-colors">
                            Visit Live Site <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="lg:col-span-7 space-y-5" data-motion-group>
                    <?php foreach ($framework as $index => $item) : ?>
                        <article class="case-framework-split-card rounded-2xl p-6" data-aos="fade-up" data-aos-delay="<?php echo esc_attr(90 + ($index * 80)); ?>" data-motion-item>
                            <?php if (!empty($item['icon'])) : ?>
                                <div class="case-framework-split-icon"><i class="<?php echo esc_attr($item['icon']); ?>"></i></div>
                            <?php endif; ?>
                            <div>
                                <h3 class="text-slate-900 text-2xl font-semibold mb-2"><?php echo esc_html($item['title'] ?? ''); ?></h3>
                                <p class="text-slate-600 leading-relaxed"><?php echo esc_html($item['description'] ?? ''); ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-10" data-aos="fade-up">
                <div>
                    <span class="text-cortex-accent text-xs uppercase tracking-[0.2em] font-bold">Campaign Visuals</span>
                    <h2 class="font-display text-4xl font-bold mt-4">Creative Direction in Action</h2>
                </div>
                <p class="text-slate-600 max-w-2xl">A modern blend of commerce storytelling, performance-led messaging, and bold visual merchandising.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-motion-group>
                <?php foreach ($gallery as $index => $image) : ?>
                    <figure class="case-gallery-card <?php echo !empty($image['large']) ? 'md:col-span-2 lg:col-span-2' : ''; ?>" data-aos="zoom-in" data-aos-delay="<?php echo esc_attr(100 + ($index * 80)); ?>" data-motion-item>
                        <img src="<?php echo esc_url($image['src'] ?? ''); ?>" alt="<?php echo esc_attr($image['alt'] ?? $brand); ?>" class="h-[300px] <?php echo !empty($image['large']) ? 'md:h-[380px]' : ''; ?>">
                    </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-100 text-slate-900 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10" data-aos="fade-up">
                <h2 class="font-display text-4xl font-bold">Explore More Case Studies</h2>
                <p class="text-slate-600 mt-4">Discover how Cortex builds growth systems for different audience segments and product categories.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-4" data-motion-group>
                <?php foreach ($related as $item) : ?>
                    <a href="<?php echo esc_url($item['url'] ?? '#'); ?>" class="case-study-link case-study-link-light rounded-2xl p-5 block" data-aos="fade-up" data-motion-item>
                        <?php if (!empty($item['image'])) : ?>
                            <div class="case-related-image-wrap mb-4">
                                <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title'] ?? 'Related case'); ?>" class="case-related-image">
                            </div>
                        <?php endif; ?>
                        <p class="text-cortex-accent text-xs uppercase tracking-[0.18em] font-semibold mb-2">Portfolio</p>
                        <h3 class="text-slate-900 font-display text-2xl mb-2"><?php echo esc_html($item['title'] ?? ''); ?></h3>
                        <p class="text-slate-600 text-sm"><?php echo esc_html($item['blurb'] ?? ''); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
