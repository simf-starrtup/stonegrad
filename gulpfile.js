var gulp = require('gulp'),
    gutil = require('gulp-util'),
    autoprefixer = require('autoprefixer'),
    babel = require('gulp-babel'),
    // bs = require('browser-sync').create(),
    cleancss = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    stylus = require('gulp-stylus'),
    uglify = require('gulp-uglify'),
    postcss = require('gulp-postcss'),
    minifyCSS = require('gulp-minify-css'),
    flexibility = require('postcss-flexibility');

/* Directories */
var dirs = {
    src: './assets',
    dest: './public'
};

/**
 * Error reporting helper function.
 * Code from https://github.com/brendanfalkowski
 *
 * @param err
 */
var errorReport = function(err)
{
    var lineNumber = (err.lineNumber) ? 'LINE ' + err.lineNumber + ' -- ' : '';

    notify({
        title: 'Task failed [' + err.plugin + ']',
        message: lineNumber + 'See console.',
        sound: 'Basso'
    }).write(err);

    gutil.beep();

    // Report the error on the console
    var report = '';
    var chalk = gutil.colors.bgMagenta.white;

    report += chalk('TASK:') + ' [' + err.plugin + ']\n';
    report += chalk('ISSUE:') + ' ' + err.message + '\n';
    if (err.lineNumber) { report += chalk('LINE:') + ' ' + err.lineNumber + '\n'; }
    if (err.fileName)   { report += chalk('FILE:') + ' ' + err.fileName + '\n'; }
    console.log(report);

    // Prevent the 'watch' task from stopping
    this.emit('end');
};



// Styles css bootstrap.min.css
gulp.task('styles-css', function() {
    return gulp.src([
        './node_modules/bootstrap/dist/css/bootstrap-grid.min.css',
        dirs.src + '/css/style.css',
        dirs.src + '/css/font-awesome.min.css',
    ])
    .pipe(concat('app.min.css'))
    .pipe(cleancss())
    .pipe(gulp.dest(dirs.dest + '/css'));
});

// Images

gulp.task('images', function () {
    return gulp.src(dirs.src + '/images/**/*')
        .pipe(gulp.dest(dirs.dest + '/images'));
});

// Fonts
gulp.task('fonts', function () {
    return gulp.src(dirs.src + '/fonts/*.*')
        .pipe(gulp.dest(dirs.dest + '/fonts'));
});

// Scripts-vendor
gulp.task('scripts-vendor', function () {
    return gulp.src([
        // Source
        './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
        //'./node_modules/bootstrap/dist/js/bootstrap.min.js'
        //dirs.src + '/js/jquery.nice-select.min.js',
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('vendor.js'))
    .pipe(sourcemaps.write())
    .pipe(uglify())
    .pipe(gulp.dest(dirs.dest + '/js'));
});

// Scripts
gulp.task('scripts-app', function () {

    return gulp.src([
        // Project scripts
        dirs.src + '/js/script.js',
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('app.js'))
    .pipe(sourcemaps.write())
    //.pipe(babel())
    .pipe(uglify())
    .pipe(gulp.dest(dirs.dest + '/js'));
});




/*------------*/
/* Watch Task */
/*------------*/

gulp.task('watch', function()
{
    gulp.watch(dirs.src + '/css/*.css', { usePolling: true }, ['styles-css']);
    gulp.watch(dirs.src + '/js/*.js', { usePolling: true },  ['scripts-app']);
});


/*------------*/
/* Build task */
/*------------*/
gulp.task('build', ['styles-css' , 'images', 'fonts' , 'scripts-vendor' , 'scripts-app']);