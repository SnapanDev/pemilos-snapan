/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {
      backgroundImage: {
        'foto': "url('/img/')"
      }
    },
  },
  plugins: [],
};
