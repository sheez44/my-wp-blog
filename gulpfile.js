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
	htmlSources,
	jsSources,
	outputDir,
	sassStyle;

env = process.env.NODE_ENV || 'development';  // in gitbash 'NODE_ENV=production gulp'

if(env === 'development') { 
	outputDir = './builds/development/';
	sassStyle = 'expanded';
} else {
	outputDir = './builds/production/';
	sassStyle = 'compressed';
};

jsSources = [
	'./builds/components/scripts/gallery.js',
	'./builds/components/scripts/modal-window.js',
	'./builds/components/scripts/smoothscroll.js',
	'./builds/components/scripts/template.js'
];
sassSources = ['./builds/components/sass/style.scss'];
htmlSources = [outputDir + '/*.html'];
jsonSources = [outputDir + '/js/*.json'];

gulp.task('js', function() {
	gulp.src(jsSources)
		.pipe(concat('script.js'))
		.pipe(browserify())
		.pipe(gulpif(env === 'production', uglify())) // If the env variable is set to production then run uglify
		.pipe(gulp.dest(outputDir + '/js'))
		.pipe(connect.reload())
});

gulp.task('compass', function() {
	gulp.src(sassSources)
		.pipe(compass({
			sass: './builds/components/sass',
			css: './',
			image: outputDir + '/images',
			style: sassStyle,
			comments: true
		}))
		.on('error', function(error) {
			console.log(error);
			this.emit('end');
		})
		.pipe(gulp.dest(outputDir + '/css'))
		.pipe(connect.reload())
})

// gulp.task('all', ['coffee', 'js', 'compass']);

gulp.task('watch', function() {
	gulp.watch(jsSources, ['js']);
	gulp.watch('./builds/components/sass/*.scss', ['compass']);
	gulp.watch('./builds/development/*.html', ['html']);
	gulp.watch('./builds/development/*.json', ['json']);
});

gulp.task('connect', function() {
	connect.server({
		root: outputDir,
		livereload: true
	});
});

gulp.task('html', function() {
	gulp.src('./builds/development/*.html')
	.pipe(gulpif(env === 'production', minifyHTML()))
	.pipe(gulpif(env === 'production', gulp.dest(outputDir)))
	.pipe(connect.reload())
});

gulp.task('json', function() {
	gulp.src('./builds/development/js/*.json')
	.pipe(gulpif(env === 'production', minifyJSON()))
	.pipe(gulpif(env === 'production', gulp.dest('./builds/production/js')))
	.pipe(connect.reload())
});


gulp.task('default', ['html', 'js', 'compass', 'json', 'connect', 'watch']);
