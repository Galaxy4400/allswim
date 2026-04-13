import gulp from 'gulp';
import { path } from './gulp/config/path.js';
import { plugins } from './gulp/config/plugins.js';

global.app = {
  isBuild: process.argv.includes('--build'),
  isDev: !process.argv.includes('--build'),
  path,
  gulp,
  plugins,
};

import { reset } from './gulp/tasks/reset.js';
import { html } from './gulp/tasks/html.js';
import { styles } from './gulp/tasks/styles.js';
import { scripts } from './gulp/tasks/scripts.js';
import { images } from './gulp/tasks/images.js';
import { fonts } from './gulp/tasks/fonts.js';
import { fontscss } from './gulp/tasks/fontscss.js';
import { svg } from './gulp/tasks/svg.js';

function server(done) {
  app.plugins.browsersync.init({
    server: { baseDir: path.buildFolder },
    notify: false,
    port: 3000,
  });
  done();
}

const reload = (done) => {
  app.plugins.browsersync.reload();
  done();
};

function watcher() {
  gulp.watch(path.watch.html, gulp.series(html, reload));
  gulp.watch(path.watch.css, gulp.series(styles, reload));
  gulp.watch(path.watch.js, gulp.series(scripts, reload));
  gulp.watch(path.watch.images, gulp.series(images, reload));
  gulp.watch(path.watch.svg, gulp.series(svg, reload));
}

export const dev = gulp.series(
  reset,
  gulp.parallel(html, styles, scripts, images, svg),
  server,
  watcher,
);

export const build = gulp.series(
  reset,
  fonts,
  fontscss,
  gulp.parallel(html, styles, scripts, images, svg),
);

gulp.task('default', dev);
