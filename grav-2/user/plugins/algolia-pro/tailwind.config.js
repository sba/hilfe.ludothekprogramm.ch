const process = require('process');
const colors = require('tailwindcss/colors');
const dirname = process.env.PWD || process.cwd();
const path = require('path');
const normalize = (paths) => {
  return paths.map((_path) => path.normalize(`${dirname}/${_path}`));
}

module.exports = {
  mode: 'jit',
  content: normalize([
    './js/**/*.js',
    './templates/**/*.twig',
    './algolia-pro.yaml',
    './algolia-pro.php',
  ]),
  options: {
    keyframes: true,
    fontFace: true,
  },
  darkMode: 'class',
  theme: {
    extend: {
      zIndex: {
        '500': 500,
      },
      colors: {
        gray: colors.zinc,
      }
    },
  },
  variants: {
    extend: {
      backgroundColor: ['hover'],
      zIndex: ['hover'],
      display: ['group-hover'],
      scrollbar: ['dark', 'rounded'],
    },
  },
  plugins: [require('tailwind-scrollbar')],
}
