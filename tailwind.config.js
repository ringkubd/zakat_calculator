module.exports = {
    mode: 'jit',
    important: true,
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                fade: 'fadeIn 5s ease-in-out',
            },
            keyframes: theme => ({
                fadeIn: {
                    '0%': { backgroundColor: theme('colors.red.300') },
                    '100%': { backgroundColor: theme('colors.transparent') },
                },
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/aspect-ratio')
    ],
}
