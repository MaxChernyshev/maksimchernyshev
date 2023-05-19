/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/front/**/*.blade.php",
    // "./resources/front/**/*.js",
  ],

  theme: {
    extend: {
        fontFamily: {
            'montserrat': ['Montserrat'],
        },
    },
  },
  plugins: [],
}

