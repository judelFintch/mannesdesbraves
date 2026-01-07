module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#0F4C81',
        accent: '#F59E0B',
        muted: '#6B7280',
        light: '#F8FAFC',
        dark: '#0B1220'
      },
      fontFamily: {
        sans: ['Inter', 'Ubuntu', 'Open Sans', 'ui-sans-serif', 'system-ui'],
      },
    },
  },
  plugins: [],
}
