import gulp from 'gulp';
import { path } from './gulp/config/path.js';
import { plugins } from './gulp/config/plugins.js';

// global process
global.app = {
  isBuild: process.argv.includes('--build'),
  isDev: !process.argv.includes('--build'),
  imgNames: process.env.npm_config_img?.split(',').map((s) => s.trim()) || null,
  path: path,
  gulp: gulp,
  plugins: plugins,
};

// Импорт задач
import { reset } from './gulp/tasks/reset.js';
import { resetcss } from './gulp/tasks/resetcss.js';
import { fonts } from './gulp/tasks/fonts.js';
import { fontscss } from './gulp/tasks/fontscss.js';
import { tailwind } from './gulp/tasks/tw.js';
import { imagesResponsive } from './gulp/tasks/imagesResponsive.js';
import { svg } from './gulp/tasks/svg.js';

// Наблюдатель за изменениями в файлах
function watcher() {
  gulp.watch([path.watch.pages, path.watch.css, path.watch.components], gulp.series(tailwind));
}

// Построение сценариев выполнения задач
const dev = gulp.series(resetcss, tailwind, watcher);
const build = gulp.series(reset, fonts, fontscss, tailwind, svg, imagesResponsive);
const buildimg = gulp.series(imagesResponsive);

// Экспорт сценариев для добавления в скрипт в package.json
export { dev };
export { build };
export { buildimg };

// Выполнение сценария по умолчанию
gulp.task('default', dev);
