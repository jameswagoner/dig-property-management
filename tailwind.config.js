const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        orange: colors.orange,
        'swiss-coffee': '#e3dddb',
        neptune: '#77abb7',
        azure: '#3963b4',
        cinder: '#161722',
        steel: {
          '50':  '#f8fafb',
          '100': '#f2f6f8',
          '200': '#e1e8ef',
          '300': '#ccd3e5',
          '400': '#a6acd4',
          '500': '#7983bd',
          '600': '#565e9b',
          '700': '#2b4772',
          '800': '#323757',
          '900': '#272d43',
        },
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography')
  ],
};
