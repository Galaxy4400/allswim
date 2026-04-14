export const html = () => {
  return app.gulp
    .src(app.path.src.html, { allowEmpty: true })
    .pipe(
      app.plugins.fileInclude({
        prefix: '@@',
        basepath: '@file',
      }),
    )
    .pipe(app.gulp.dest(app.path.build.html));
};
