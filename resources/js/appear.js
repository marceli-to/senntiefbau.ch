/**
 * Scroll-triggered appear animations using IntersectionObserver.
 * Elements with [data-appear] fade/rise into view when scrolled into the viewport.
 * Supports staggered delays via [data-appear-delay="100"] (ms).
 * Respects prefers-reduced-motion.
 */
if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const delay = el.dataset.appearDelay || 0;
          setTimeout(() => el.classList.add('is-visible'), delay);
          observer.unobserve(el);
        }
      });
    },
    { threshold: 0.25 }
  );

  document.querySelectorAll('[data-appear]').forEach((el) => observer.observe(el));
}
