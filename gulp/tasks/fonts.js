import ttf2woff2 from 'gulp-ttf2woff2';
import newer from 'gulp-newer';
import { globSync } from 'glob';

export const fonts = (done) => {
  const files = globSync(app.path.src.fonts);

  if (files.length === 0) return done();

  return app.gulp
    .src(app.path.src.fonts, {
      encoding: false,
      removeBOM: false,
      allowEmpty: true,
    })
    .pipe(
      newer({
        dest: app.path.build.fonts,
        ext: '.woff2',
      }),
    )
    .pipe(ttf2woff2())
    .pipe(app.gulp.dest(app.path.build.fonts));
};
