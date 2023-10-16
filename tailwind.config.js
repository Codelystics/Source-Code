/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
      colors: {
        'violet': '#6B0078',
        'white': '#ffffff',
        'gradPurp': '#AF71F1',
        'black': '#000000',
        'yellow': '#F7AF36',
      }
    },
    plugins: [],
  }
