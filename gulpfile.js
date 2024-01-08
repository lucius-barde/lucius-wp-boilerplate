const gulp = require('gulp');
const less = require('gulp-less');

gulp.task('styles', function () {
  return gulp.src('assets/css/style.less')
    .pipe(less())
    .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
  gulp.watch('assets/css/*.less', gulp.series('styles'));
});

gulp.task('default', gulp.series('styles', 'watch'));