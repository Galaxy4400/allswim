import svgmin from 'gulp-svgmin';
import { globSync } from 'glob';

export const svg = (done) => {
  const files = globSync(app.path.src.svg);

  if (files.length === 0) return done();

  return app.gulp
    .src(app.path.src.svg, { allowEmpty: true })
    .pipe(
      svgmin({
        js2svg: { pretty: true },
        plugins: [{ removeViewBox: false }, { cleanupIDs: false }],
      }),
    )
    .pipe(app.gulp.dest(app.path.build.svg));
};
