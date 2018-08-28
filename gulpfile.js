const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const browserSync = require('browser-sync').create();

gulp.task('sass', function () {
    return gulp.src('app/scss/*.scss')
    .pipe(sass())
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(browserSync.reload({
        stream: true
      }))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('copy', function() {
    gulp.src('app/*.html')
    .pipe(gulp.dest('dist'))
  });

gulp.task('script', function() {
    gulp.src('app/js/script.js')
    .pipe(babel({
        presets: ['env']
    }))
    .pipe(browserSync.reload({
        stream: true
      }))
    .pipe(gulp.dest('dist/js'));
});

gulp.task('browserSync', function() {
    browserSync.init({
      server: {
        baseDir: 'dist'
      },
    })
  });

gulp.task('watch', ['browserSync', 'sass', 'script', 'copy'], function() {
    gulp.watch('app/js/*.js', ['script']);
    gulp.watch('app/scss/*.scss', ['sass']);
    gulp.watch('app/*.html', ['copy']);
    gulp.watch('app/*.html', browserSync.reload); 
    gulp.watch('app/js/script.js', browserSync.reload);
    gulp.watch('app/scss/*.scss', browserSync.reload);
  });

gulp.task('default', ['sass', 'script', 'watch', 'browserSync', 'copy']);
