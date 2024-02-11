/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/**/*.{html,php,js}"],
  theme: {
    extend: {
      backgroundImage: {
        'hero': "url('./login_vero/img/farm.jpg')",
        'vaca': "url('/login_vero/img/fondo.jpg')"
      }
    },
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ]
}

