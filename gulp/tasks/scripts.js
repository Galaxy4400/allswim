import gulp from 'gulp';
import babel from 'gulp-babel';
import terser from 'gulp-terser';
import rename from 'gulp-rename';
import gulpIf from 'gulp-if';

const isNotMinified = (file) => !file.stem.endsWith('.min');

export const scripts = () => {
  return gulp
    .src(app.path.src.js)
    .pipe(gulpIf(isNotMinified, babel({ presets: ['@babel/preset-env'] })))
    .pipe(gulpIf(isNotMinified, terser()))
    .pipe(gulpIf(isNotMinified, rename({ suffix: '.min' })))
    .pipe(gulp.dest(app.path.build.js));
};
