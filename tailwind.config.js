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
        'dark-green': '#48745D',
        'light-green': '#C9EDC1',
        'xlight-green': '#E6F8E2',
        'light-grey': '#F2F2F2',
        'blue-grey': '#F2F2F2',
        'purple': '#3B477B',
        'light-purple': '#723B7B',
      },
    },
  },
  plugins: [],
}