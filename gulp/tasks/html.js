import nunjucksRender from 'gulp-nunjucks-render';

export const html = () => {
  return app.gulp
    .src(app.path.src.html)
    .pipe(
      app.plugins.plumber(
        app.plugins.notify.onError({
          title: 'HTML',
          message: 'Error: <%= error.message %>',
        }),
      ),
    )
    .pipe(
      nunjucksRender({
        path: [app.path.src.htmlRoot],
        envOptions: {
          autoescape: true,
          trimBlocks: true,
          lstripBlocks: true,
        },
      }),
    )
    .pipe(app.gulp.dest(app.path.build.html));
};
