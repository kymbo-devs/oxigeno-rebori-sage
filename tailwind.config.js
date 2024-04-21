/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {},
      fontFamily: {
        gilroy: ['Gilroy', 'sans-serif'],
        raleway: ['Raleway', 'sans-serif'],
        mulish: ['Mulish', 'sans-serif'],
      },
    },
  },
  plugins: [],
};

export default config;
