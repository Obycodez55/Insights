/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./views/**/*.php', './public/**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        nunito: ['Nunito', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
