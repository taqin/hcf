var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var mamp 				= require('gulp-mamp');

//MAMP init
var options = {};
options.user = 'healthca_funmin';
options.port = 80;
options.site_path = '/Users/Leonidas/Code/hcf'; // something like /Users/username/sites/mymampsite  
 
gulp.task('start', function(cb){
    mamp(options, 'start', cb);
});
 
gulp.task('stop', function(cb){
    mamp(options, 'stop', cb);
});
 
gulp.task('mamp', ['start']);


// Static server
gulp.task('browser-sync', function() {
    browserSync.init(["/wp-content/themes/hcf-2016/css/*.css",
        "/wp-content/themes/hcf-2016/js/*.js",
        '/wp-content/themes/hcf-2016/*.php', 
        '/wp-content/themes/hcf-2016/page-templates/*.php', 
        '/wp-content/themes/hcf-2016/*.css'], {
        proxy: 'hcf:80'
    });
});

gulp.task('watch', ['mamp','browser-sync'], function () {
    gulp.watch("/wp-content/themes/hcf-2016/*.css").on("change", browserSync.reload);
});

/*
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
    gulp.watch("*.html").on("change", browserSync.reload);
    gulp.watch("*.css").on("change", browserSync.reload);
});
*/