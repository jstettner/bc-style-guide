var gulp = require('gulp');
var sass = require('gulp-sass')
var php2html = require("gulp-php2html");

gulp.task('php', function () {
  gulp.src("./components/index.php")
      .pipe(php2html())
      .pipe(gulp.dest("./dist"));
});

gulp.task('sass', function () {
  return gulp.src('./assets/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./dist/css'))
});

gulp.task('fonts', function () {
  return gulp.src('./assets/node_modules/blockchain-css/fonts/**')
    .pipe(gulp.dest('./dist/fonts'))
});

gulp.task('watch', function () {
  gulp.watch('./components/*.php', ['php']);
  gulp.watch('./assets/*.scss', ['sass']);
});

gulp.task('default', ['fonts', 'sass', 'php', 'watch']);
