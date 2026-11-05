/** @type {import('tailwindcss').Config} */
export default {
    content: ['./resources/views/**/*.blade.php', './resources/js/**/*.js'],
    theme: {
        extend: {
            colors: {
                imperial: { DEFAULT: '#0E0F3B', deep: '#171947' },
                steel: { DEFAULT: '#2878D9', dark: '#1f63b6' },
                platinum: { soft: '#f3f5f7' },
                amber: { bright: '#F7931E', tint: '#fff6d6' },
            },
            fontFamily: {
                serif: ['var(--font-serif)', 'Georgia', 'serif'],
                sans: ['var(--font-sans)', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [require('@tailwindcss/forms')],
};
