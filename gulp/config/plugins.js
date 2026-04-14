import plumber from 'gulp-plumber';
import notify from 'gulp-notify';
import newer from 'gulp-newer';
import ifPlugin from 'gulp-if';
import browserSync from 'browser-sync';
import fileInclude from 'gulp-file-include';

export const plugins = {
  plumber,
  notify,
  newer,
  if: ifPlugin,
  browsersync: browserSync.create(),
  fileInclude,
};
