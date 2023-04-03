const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');

// Sass Task
function scssTask() {
  return src('app/scss/main.scss', { sourcemaps: true })
    .pipe(sass())
    .pipe(postcss([cssnano()]))
    .pipe(dest('dist', { sourcemaps: '.' }));
}
// JavaScript Task
function jsTask() {
  return src('app/js/*.js', { sourcemaps: true })
    .pipe(plumber())
    .pipe(uglify())
    .pipe(concat('main.js'))
    .pipe(dest('dist', { sourcemaps: '.' }));
}

// Watch Task
function watchTask() {
  watch(['app/scss/**/*.scss', 'app/js/**/*.js'], series(scssTask, jsTask));
}

// Default Gulp task
exports.default = series(scssTask, jsTask, watchTask);
