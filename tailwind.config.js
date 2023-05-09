/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
      'background':'#CBC7C6',
      'oxflordBlue':'#00264D',
      'leafgreen':'#0F6B0E',
      'limegreen':'#24CB1D'
    },
    },
  },
  plugins: [],
}
