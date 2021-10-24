// const colors = require('./css/tailwind.css/colors');

module.exports = {
  mode: 'jit',
  purge: [
    './*.html'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      // teste
      width: {
        '43': '10.75rem'
      },
      // colors: {
      //   'cyan': colors.cyan
      // }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
