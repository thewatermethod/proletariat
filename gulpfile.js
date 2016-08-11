var gulp = require('gulp'),
	clean = require('gulp-clean'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	sourcemaps = require('gulp-sourcemaps'),
	less = require('gulp-less'),
	minifyCSS = require('gulp-minify-css'),
	runSequence = require('run-sequence'),
	watch = require('gulp-watch');

gulp.task( 'clean' , function() {
	return gulp.src('dist')
	.pipe( clean() );
});

gulp.task( 'cat-js', function(){
	return gulp.src(['js/*.js', '!js/npm.js','!js/customizer.js'])
		.pipe( concat('scripts.js') )
		.pipe( gulp.dest('') );
});

gulp.task( 'min-js', function(){
	return gulp.src('scripts.js')
		.pipe( uglify() )
		.pipe( gulp.dest('') );
});

gulp.task('build-less', function(){
	return gulp.src(['style.less'])
		.pipe( sourcemaps.init() )
		.pipe( less() )
		.pipe( sourcemaps.write('maps') )
		.pipe( gulp.dest('') );
});

gulp.task( 'cat-css', function(){
	return gulp.src(['css/*.css', 'style.css'])
		.pipe( concat('min.css') )
		.pipe( gulp.dest('') );
});

gulp.task('minify-css', function() {
  return gulp.src('dist/min.css')
    .pipe( sourcemaps.init() )
    .pipe( minifyCSS() )
    .pipe( sourcemaps.write() )
    .pipe( gulp.dest('style.css') );
});

gulp.task('watch', function() {
	gulp.watch('style.less', ['compile']);
	gulp.watch('./less/*.less', ['compile']);
	gulp.watch('./js/*.js', ['compile']);
});

gulp.task('compile', function(){
	runSequence(
		'clean',
		'build-less',
		['cat-js', 'cat-css'],
		['minify-css', 'min-js']
	);

});

gulp.task( 'default', function(){
	runSequence(
		'watch',
		'compile'
	);

});
