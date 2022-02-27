module.exports = {
  mode: 'jit',
  content: [                               //CONFIGURE CORRECTLY
    '../*.php',
    '../includes/*.php',
  ],
  prefix: '',
  important: true,
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
