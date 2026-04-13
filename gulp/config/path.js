const buildFolder = './dist';
const srcFolder = './src';

export const path = {
  build: {
    html: `${buildFolder}/`,
    css: `${buildFolder}/assets/css/`,
    js: `${buildFolder}/assets/js/`,
    images: `${buildFolder}/assets/img/`,
    fonts: `${buildFolder}/assets/fonts/`,
    svg: `${buildFolder}/assets/svg/`,
  },
  src: {
    html: `${srcFolder}/html/pages/**/*.njk`,
    htmlRoot: `${srcFolder}/html`,
    css: `${srcFolder}/css/tailwind.css`,
    js: `${srcFolder}/scripts/**/*.js`,
    images: `${srcFolder}/assets/images/**/*.{jpg,jpeg,png,gif,webp,avif}`,
    fonts: `${srcFolder}/fonts/*.ttf`,
    svg: `${srcFolder}/assets/svg/*.svg`,
  },
  watch: {
    html: `${srcFolder}/html/**/*.njk`,
    css: `${srcFolder}/css/**/*.css`,
    js: `${srcFolder}/scripts/**/*.js`,
    images: `${srcFolder}/assets/images/**/*`,
    svg: `${srcFolder}/assets/svg/*.svg`,
  },
  clean: buildFolder,
  buildFolder,
  srcFolder,
};
