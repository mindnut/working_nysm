var gulp = require ('gulp'),
	compass = require( 'gulp-for-compass' );

function errorLog(error) {
		console.error.bing(error);
		this.emit('end');

}

gulp.task('styles', function () {
	gulp.src('sass/**/*.scss')
 .pipe(sass())
    .pipe(gulp.dest('sasscss/'));

});


gulp.task('compassstyles', function() {
	gulp.src('scss/**/*.scss')
	.pipe(compass({
		sassDir: 'scss',
		httpPath:'/',
		cssDir: 'css',
		outputStyle: 'expanded',
		imagesDir: 'images',
		javascriptsDir: 'js',
		fontsDir:'fonts',
		relativeAssets:true,
		force:true
	
	}));
	

})

gulp.task('watch', function(){
	gulp.watch('scss/**/*.scss', ['styles']);

});