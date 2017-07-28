var gulp = require('gulp');
var sass = require('gulp-sass')

gulp.task('sass', function () {
  return gulp.src('./assets/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./src/css'))
});

gulp.task('fonts', function () {
  return gulp.src('./assets/node_modules/blockchain-css/fonts/**')
    .pipe(gulp.dest('./src/fonts'))
});

gulp.task('watch', function () {
  gulp.watch('./assets/*.scss', ['sass']);
});

gulp.task('default', ['fonts', 'sass', 'watch']);
