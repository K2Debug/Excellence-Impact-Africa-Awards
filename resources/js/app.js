const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

menuButton?.addEventListener('click', () => {
    const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
    menuButton.setAttribute('aria-expanded', String(!isOpen));
    mobileMenu?.toggleAttribute('hidden', isOpen);
    menuButton.setAttribute('aria-label', isOpen ? 'Open menu' : 'Close menu');
});
const testimonialDeck = document.querySelector('[data-testimonials]');
const testimonials = testimonialDeck ? [...testimonialDeck.querySelectorAll('.recognition-testimonial')] : [];

if (testimonials.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    let activeTestimonial = 0;

    window.setInterval(() => {
        if (document.hidden) return;

        testimonials[activeTestimonial].classList.remove('is-active');
        testimonials[activeTestimonial].setAttribute('aria-hidden', 'true');
        activeTestimonial = (activeTestimonial + 1) % testimonials.length;

        window.setTimeout(() => {
            testimonials[activeTestimonial].classList.add('is-active');
            testimonials[activeTestimonial].setAttribute('aria-hidden', 'false');
        }, 900);
    }, 9000);
}