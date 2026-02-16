document.addEventListener('DOMContentLoaded', function () {
    const casePage = document.querySelector('.case-study-page');
    if (!casePage) {
        return;
    }

    const counters = Array.from(casePage.querySelectorAll('.case-counter[data-target]'));

    function formatValue(value, prefix, suffix) {
        return `${prefix}${Math.round(value).toLocaleString()}${suffix}`;
    }

    function animateCounter(element) {
        const target = Number(element.dataset.target || 0);
        const duration = Number(element.dataset.duration || 1600);
        const prefix = element.dataset.prefix || '';
        const suffix = element.dataset.suffix || '';

        if (!target || Number.isNaN(target)) {
            return;
        }

        let startTime = null;

        function tick(timestamp) {
            if (!startTime) {
                startTime = timestamp;
            }

            const elapsed = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = target * eased;

            element.textContent = formatValue(current, prefix, suffix);

            if (progress < 1) {
                requestAnimationFrame(tick);
            }
        }

        requestAnimationFrame(tick);
    }

    function runCounterObserverFallback() {
        if (counters.length === 0 || !('IntersectionObserver' in window)) {
            return;
        }

        const observer = new IntersectionObserver(
            function (entries, instance) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting || entry.target.dataset.counted === '1') {
                        return;
                    }

                    entry.target.dataset.counted = '1';
                    animateCounter(entry.target);
                    instance.unobserve(entry.target);
                });
            },
            { threshold: 0.45 }
        );

        counters.forEach(function (counter) {
            observer.observe(counter);
        });
    }

    function runParallaxFallback() {
        const parallaxEl = casePage.querySelector('[data-case-parallax]');
        if (!parallaxEl) {
            return;
        }

        let ticking = false;

        function updateParallax() {
            const y = window.scrollY * 0.045;
            parallaxEl.style.transform = `translateY(${y}px)`;
            ticking = false;
        }

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        });
    }

    async function initMotionDevAnimations() {
        try {
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion) {
                runCounterObserverFallback();
                return;
            }

            // motion.dev ESM import from CDN (no build step required)
            const { animate, inView, stagger } = await import('https://cdn.jsdelivr.net/npm/motion@12.23.24/+esm');

            const groups = Array.from(casePage.querySelectorAll('[data-motion-group]'));
            groups.forEach(function (group) {
                const items = Array.from(group.querySelectorAll('[data-motion-item]'));
                if (items.length === 0) {
                    return;
                }

                items.forEach(function (item) {
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(22px)';
                });

                inView(
                    group,
                    function () {
                        if (group.dataset.motionPlayed === '1') {
                            return;
                        }

                        group.dataset.motionPlayed = '1';
                        animate(
                            items,
                            { opacity: [0, 1], y: [22, 0] },
                            { duration: 0.7, delay: stagger(0.08), easing: [0.22, 1, 0.36, 1] }
                        );
                    },
                    { amount: 0.2 }
                );
            });

            counters.forEach(function (counter) {
                inView(
                    counter,
                    function () {
                        if (counter.dataset.counted === '1') {
                            return;
                        }

                        counter.dataset.counted = '1';
                        animateCounter(counter);
                        animate(counter, { scale: [0.92, 1], opacity: [0.7, 1] }, { duration: 0.45, easing: [0.22, 1, 0.36, 1] });
                    },
                    { amount: 0.55 }
                );
            });

            const parallaxEl = casePage.querySelector('[data-case-parallax]');
            if (parallaxEl) {
                animate(
                    parallaxEl,
                    { rotateX: [0.8, 0], y: [16, 0] },
                    { duration: 1.1, easing: [0.22, 1, 0.36, 1] }
                );
            }
        } catch (error) {
            // Keep page fully functional if CDN is blocked or unavailable.
            runCounterObserverFallback();
            runParallaxFallback();
        }
    }

    initMotionDevAnimations();
});
