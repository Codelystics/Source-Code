/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],     
    theme: {
      extend: {
        backgroundImage: {
            'bootcampImage': "url('/public/bootcampImage.svg')"
        }
      },
      colors: {
        'violet': '#6B0078',
        'plum': '#380356',
        'white': '#ffffff',
        'gradPurp': '#AF71F1',
        'lavender': '#93009C',
        'purp': '#B000B2',
        'black': '#000000',
        'yellow': '#F7AF36',
      }
    },
    plugins: [],
  }
