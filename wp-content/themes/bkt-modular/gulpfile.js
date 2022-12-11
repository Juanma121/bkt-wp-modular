require('dotenv').config();

const gulp = require('gulp');
const plugins = {
    autoprefixer: require('gulp-autoprefixer'),
    clean: require('gulp-clean'),
    concat: require('gulp-concat'),
    notify: require('gulp-notify'),
    plumber: require('gulp-plumber'),
    rename: require('gulp-rename'),
    sass: require('gulp-sass')(require('sass')),
    sassLint: require('gulp-sass-lint'),
    terser: require('gulp-terser'),
};
const browserSync  = require('browser-sync').create();

const config = require('./config');

var sassLintHandler = function(err) {
    plugins.notify.onError({
        title: "SCSS Linter failed!",
        message: "<%= error.message %>",
    })(err);
    this.emit('end');
};

var buildSass =  env => {
    return gulp.src(config.sassPath + '/**/*.scss')
        .pipe(plugins.sassLint({ config: '.sass-lint.yml' }))
        .pipe(plugins.sassLint.format())
        .pipe(plugins.plumber({errorHandler: sassLintHandler }))
        .pipe(plugins.sassLint.failOnError())
        .pipe(plugins.plumber.stop())
        .pipe(plugins.sass({
            outputStyle: env === 'production' ? 'compressed' : 'expanded',
            includePaths:[
                ...config.vendor.sass,
                config.sassPath,
            ],
            errLogToConsole: true
        }).on('error', plugins.notify.onError( error => {
            return "Error: " + error.message;
        })))
        .pipe(plugins.autoprefixer('last 10 version'))
        .pipe(gulp.dest( config.destPath + '/css' ))
        .pipe(browserSync.stream());
};

gulp.task('buildDev:sass', () => { return buildSass(process.env.NODE_ENV); } );
gulp.task('build:sass', () => { return buildSass("production"); } );

gulp.task('build:css', (done) => {
    if (config.vendor.css.length === 0) {
        done();
        return;
    }
    return gulp.src([
        ...config.vendor.css
    ])
    .pipe(plugins.concat('vendor.css'))
    .pipe(gulp.dest(config.destPath + '/css'))
    .pipe(browserSync.stream());
});

gulp.task('build:javascript', () => {
    return gulp.src([
        ...config.vendor.js,
        config.jsPath + '/vendor/**/*.js',
        config.jsPath + '/**/_*.js',
        config.jsPath + '/**/*.js',
        config.jsPath + '/_*.js',
        config.jsPath + '/*.js',
    ])
    .pipe(plugins.concat('main.js'))
    .pipe(gulp.dest(config.destPath + '/js'))
    .pipe(plugins.rename('main.min.js'))
    .pipe(plugins.terser(config.uglify.front))
    .pipe(gulp.dest(config.destPath + '/js'));
});

gulp.task('build:javascriptadmin', () => {
    return gulp.src([
        config.jsAdminPath + '/**/_*.js',
        config.jsAdminPath + '/**/*.js',
        config.jsAdminPath + '/_*.js',
        config.jsAdminPath + '/*.js',
    ])
    .pipe(plugins.concat('admin.js'))
    .pipe(gulp.dest(config.destPath + '/js'))
    .pipe(plugins.rename('admin.min.js'))
    .pipe(plugins.terser(config.uglify.admin))
    .pipe(gulp.dest(config.destPath + '/js'));
});

gulp.task('build:javascriptlogin', () => {
    return gulp.src([
        config.jsLoginPath + '/**/_*.js',
        config.jsLoginPath + '/**/*.js',
        config.jsLoginPath + '/_*.js',
        config.jsLoginPath + '/*.js',
    ])
    .pipe(plugins.concat('login.js'))
    .pipe(gulp.dest(config.destPath + '/js'))
    .pipe(plugins.rename('login.min.js'))
    .pipe(plugins.terser(config.uglify.login))
    .pipe(gulp.dest(config.destPath + '/js'));
});

gulp.task('build:vendor', () => {
    return gulp.src([
        config.vendorPath + '/**/*',
    ])
    .pipe(gulp.dest(config.destPath + '/vendor' ));
});

gulp.task('build:image', () => {
    return gulp.src([
        config.imgPath + '/**/*'
    ])
    .pipe(gulp.dest(config.destPath + '/img'));
});

gulp.task('build:fonts', () => {
    return gulp.src([
        ...config.vendor.fonts,
        config.fontPath + '/**/*'
    ])
    .pipe(gulp.dest(config.destPath + '/fonts'));
});

gulp.task('clean', function () {
    return gulp.src([
            config.destPath
        ], { read: false, allowEmpty: true })
    .pipe(plugins.clean());
});

gulp.task('watch', function(){
    browserSync.init({
      files: [
          '{inc,lib,templates}/**/*.php',
          '*.php',
          config.destPath + '**/*'
        ],
      proxy: config.devUrl,
      snippetOptions: {
        whitelist: ['/wp-admin/admin-ajax.php'],
        blacklist: ['/wp-admin/**']
      }
    });
    gulp.watch(config.sassPath + '/**/*.scss', gulp.series('buildDev:sass'));
    gulp.watch(config.jsPath + '/**/*.js', gulp.series('build:javascript'));
    gulp.watch(config.jsAdminPath + '/**/*.js', gulp.series('build:javascriptadmin'));
    gulp.watch(config.jsLoginPath + '/**/*.js', gulp.series('build:javascriptlogin'));
    gulp.watch(config.imgPath + '/**/*', gulp.series('build:image'));
    gulp.watch(config.fontPath + '/**/*', gulp.series('build:fonts'));
    gulp.watch(config.vendorPath + '/**/*', gulp.series('build:vendor'));
    gulp.watch(config.destPath + "/**/{*.css,*.js}").on('change', browserSync.reload);
});

gulp.task('build:watch', gulp.series('build:javascriptadmin', 'build:javascriptlogin', 'buildDev:sass', 'build:css', 'build:fonts', 'build:javascript', 'build:image', 'build:vendor', 'watch'));

gulp.task('build',  gulp.series('clean', gulp.parallel('build:javascriptadmin', 'build:javascriptlogin', 'build:sass', 'build:css', 'build:fonts', 'build:javascript', 'build:image', 'build:vendor')));

gulp.task('default', gulp.series('build'));
