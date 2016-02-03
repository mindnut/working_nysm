var gulp = require ('gulp'),
	compass = require( 'gulp-for-compass' ),
	rsync = require('gulp-rsync'),
	open = require('gulp-open'),
	shell = require('gulp-shell');

var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var runSequence = require('run-sequence');
//var shell = require('gulp-shell');
var importer = require('node-sass-globbing');
var plumber = require('gulp-plumber');
var cssmin = require('gulp-cssmin');
var sass_config = {
  importer: importer,
  includePaths: [
    /* If installed globally. */
    //'/usr/lib/node_modules/breakpoint-sass/stylesheets/',
    //'/usr/lib/node_modules/singularitygs/stylesheets/',
    //'/usr/lib/node_modules/compass-mixins/lib/'
    /* If installed locally (--save-dev). */
   // 'node_modules/breakpoint-sass/stylesheets/',
   // 'node_modules/singularitygs/stylesheets/',
    'node_modules/compass-mixins/lib/'
  ]
};

gulp.task('sass', function () {
  gulp.src('./scss/**/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass(sass_config).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(sourcemaps.write('.'))
  //  .pipe(cssmin())
    .pipe(gulp.dest('./css'));
});

gulp.task('css:watch', function () {
  gulp.watch('./css/**/*.css', ['upload']);
});

gulp.task('sass:watch', function () {
  gulp.watch('./scss/**/*.scss', ['compass']);
});


gulp.task('default', ['compass', 'css:watch', 'sass:watch']);


gulp.task('build', function(done) {
    runSequence('upload', 'compass', function() {
        console.log('Run something else');
        done();
    });
});

gulp.task('compass', function() {
	gulp.src('scss/**/*.scss')
	.pipe(compass({
		sassDir: 'scss',
		httpPath:'/',
		cssDir: 'css',
		outputStyle: 'compressed',
		imagesDir: 'images',
		javascriptsDir: 'js',
		fontsDir:'fonts',
		relativeAssets:true,
		trace:true,
		force:true
	
	}));
	})


gulp.task('upload', shell.task([
'rsync -v -r /Users/nlue/sites/working_nysm/css /Volumes/APP/websites_drupal/nysm-dev/nysm/',
'rsync -v -r /Users/nlue/sites/working_nysm/layouts /Volumes/APP/websites_drupal/nysm-dev/nysm/',
'rsync -v -r /Users/nlue/sites/working_nysm/images /Volumes/APP/websites_drupal/nysm-dev/nysm/',
'rsync -v -r /Users/nlue/sites/working_nysm/templates /Volumes/APP/websites_drupal/nysm-dev/nysm/',
'rsync -v -r /Users/nlue/sites/working_nysm/js /Volumes/APP/websites_drupal/nysm-dev/nysm/',
'rsync -v -r /Users/nlue/sites/working_nysm/templates /Volumes/APP/websites_drupal/nysm-dev/nysm/'
]))