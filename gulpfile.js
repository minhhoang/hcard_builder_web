var gulp = require('gulp');
var gutil = require('gulp-util');
var less = require('gulp-less');
var rename = require('gulp-rename');
var prefix = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');


gulp.task('scripts', function() {
    var patterns = [
        'public/js/**/!(compiled|hcard)*.js',
        'public/js/hcard.js',
    ];
    gulp.src(patterns)
        .pipe(concat('compiled.js'))
        .pipe(gulp.dest('public/js'));
});

gulp.task('less', function() {
    gulp.src('public/less/hcard.less')
        .pipe(less()).on('error', function(err){ gutil.log(gutil.colors.red('ERR'), err.message)})
        .pipe(prefix("last 3 versions", "ie 8", "> 1%", "Firefox ESR", "Opera 12.1"))
        .pipe(rename('hcard.css'))
        .pipe(gulp.dest('public/css'));
});


gulp.task('watch', function() {
    gulp.watch('public/less/*.less', ['less']);
    gulp.watch('public/js/**/!(compiled)*.js', ['scripts']);
});