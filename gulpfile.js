// npm install --save-dev gulp-

var gulp = require('gulp'),
	gutil = require('gulp-util'),
	compass = require('gulp-compass'),	
	connect = require('gulp-connect'),	
	gulpif = require('gulp-if'),
	minifyJSON = require('gulp-jsonminify'),
	minifyHTML = require('gulp-minify-html'),
	uglify = require('gulp-uglify'),
	browserify = require('gulp-browserify'), // Browserify lets you require('modules') in the browser by bundling up all of your dependencies.											
	concat = require('gulp-concat');		 // Like importing jQuery, mustache

// gulp.task('log', function() {
// 	gutil.log('My first gulp workflow');
// });

var env,
	jsSources,
	sassSources,
	sassStyle;

jsSources = [
	'./js/gallery.js',
	'./js/modal-window.js',
	'./js/smoothscroll.js',
	'./js/template.js'
];
sassSources = ['sass/style.scss'];

gulp.task('js', function() {
	gulp.src(jsSources)
		.pipe(concat('script.js'))
		.pipe(browserify())
		.pipe(gulp.dest('/js'))
		.pipe(connect.reload())
});

gulp.task('compass', function() {
	gulp.src(sassSources)
		.pipe(compass({
			config: './config.rb',
			sass: 'sass',
			css: './',
		}))
		.on('error', function(error) {
			console.log(error);
			this.emit('end');
		})
		.pipe(gulp.dest('/'))
		.pipe(connect.reload())
})

// gulp.task('all', ['coffee', 'js', 'compass']);

gulp.task('watch', function() {
	gulp.watch(jsSources, ['js']);
	gulp.watch('sass/**/*.scss', ['compass']);
});

gulp.task('connect', function() {
	connect.server({
		root: '/',
		livereload: true
	});
});

gulp.task('default', ['js', 'compass', 'connect', 'watch']);
