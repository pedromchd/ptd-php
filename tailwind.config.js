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
        '88': '22rem',
        '205': '51.25rem'
      },
      height: {
        '110': '27.5rem'
      },
      maxWidth: {
        '205': '51.25rem'
      },
      maxHeight: {
        '110': '27.5rem'
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
