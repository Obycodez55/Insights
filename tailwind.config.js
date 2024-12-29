/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./views/**/*.php", "./public/**/*.php", "./includes/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        nunito: ["Nunito", "sans-serif"]
      },
      colors: {
        primary: {
          gradient: {
            start: "#6a0dad", // purple
            end: "#0000ff" // blue
          }
        }
      },
      backgroundImage: {
        "text-green-gradient": "linear-gradient(to right, #6b46c1 10%, #22c55e 10%, #a855f7)" ,// Define custom gradient
        'purple-teal-blue': 'linear-gradient(to right, #5b21b6, #0d9488, #1e40af)',
        "purple-blue": 'linear-gradient(to right, #6b46c1 30%, #1e3a8a 70%);'
      }
    }
  },
  plugins: []
};
