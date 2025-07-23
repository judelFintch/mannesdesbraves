/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.html", "./**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        primary: '#1363C6',
        secondary: '#15ACE1',
        light: '#F4F7FE',
        dark: '#14183E',
      }
    },
  },
  plugins: [],
}

