// const colors = require('./css/tailwind.css/colors');

module.exports = {
  mode: 'jit',
  purge: [
    './src/*.html'
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      width: {
        '88': '22rem'
      },
      transitionProperty: {
        'bg-color': 'background-color'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
