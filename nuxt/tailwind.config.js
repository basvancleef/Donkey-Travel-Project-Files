/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './assets/**/*.{vue,js,css}',
    './components/**/*.{vue,js}',
    './layouts/**/*.vue',
    './pages/**/*.vue',
    './plugins/**/*.{js,ts}',
    './nuxt.config.ts{js,ts}',
  ],
  theme: {
    extend: {},
    fontFamily: {
      'sans': 'Poppins'
    },
    screens: {
      'sm': '340px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1536px',
    },
    plugins: [
      require('@tailwindcss/forms'),
    ],
  }
}
