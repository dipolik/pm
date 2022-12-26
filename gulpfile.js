'use strict';
let production = true;
let production_webp = false;
const gulp = require('gulp'),
    my_paths = require('path'),
    my_autoprefixer = require('gulp-autoprefixer'),
    my_rigger = require('gulp-rigger'),
    my_fileinclude = require('gulp-file-include'),
    my_sass = require('gulp-sass'),
    my_uglify = require('gulp-uglify-es').default,
    my_htmlmin = require('gulp-htmlmin'),
    my_gulpif = require("gulp-if"),
    my_imageminWebp = require("imagemin-webp"),
    my_imagemin = require("gulp-imagemin"),
    my_imageminPngquant = require("imagemin-pngquant"),
    my_imageminMozjpeg = require("imagemin-mozjpeg"),
    my_browserSync = require('browser-sync'),
    my_webp = require('gulp-webp'),
    my_del = require('del'),
    my_reload = my_browserSync.reload;


// Создаем пути для работы Gulp
const path = {
    build: {
        build_html: './public',
        build_js: './public/js',
        build_css: './',
        build_fonts: './public/fonts',
        build_img: './public/img',
    },
    src: {
        src_html: './src/*.html',
        src_js: './src/js/*.js',
        src_css: './src/css/*.scss',
        src_fonts: './src/fonts/**',
        src_img: './src/img/**/*.{jpg,jpeg,png,gif,ico,svg}',
    },
    watch: {
        watch_html: './src/**/*.html',
        watch_js: './src/**/*.js',
        watch_css: './src/**/*.scss',
        watch_fonts: './src/fonts/**',
        watch_img: './src/img/**/*.{jpg,jpeg,png,gif,ico,svg}',
    }
};

// Задача Webserver – создает локальный хостинг для верстки
gulp.task("webserver", function () {
    my_browserSync({
        server: {
            baseDir: "public/",
            index: "index.html"
        },
        host: 'localhost',
        port: '3000',
        tunnel: true
    });
    gulp.watch(path.watch.watch_css, gulp.series('css:build'));
    gulp.watch(path.watch.watch_html, gulp.series('html:build'));
    // gulp.watch(path.watch.watch_css).on('change', my_reload);
    // gulp.watch(path.watch.watch_html).on('change', my_reload);

});



// Задача для работы с изображениями
gulp.task("images:build", () => {
    return gulp.src(path.src.src_img)
        .pipe(my_gulpif(production, my_imagemin([
            my_imageminPngquant({
                quality: [0.5, 0.7]
            }),
            my_imageminMozjpeg({
                progressive: true,
                quality: 70
            }),
        ])))
        .pipe(gulp.dest(path.build.build_img))
        .pipe(my_webp({
                quality: 70,
                lossless: true,
                alphaQuality: 70
            }
            , my_gulpif(production_webp, my_imageminWebp({
                lossless: true,
                quality: 70,
                alphaQuality: 70
            }))))
        .pipe(gulp.dest(path.build.build_img));
});

// Задача для сборки шрифтов
gulp.task("fonts:build", function () {
    return gulp.src(path.src.src_fonts)
        .pipe(gulp.dest(path.build.build_fonts))
        .pipe(my_reload({stream: true}));
});

// Задача для сборки HTML
gulp.task("html:build", function () {
    return gulp.src(path.src.src_html)
        .pipe(my_fileinclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(my_gulpif(production, my_htmlmin({
                collapseWhitespace: true,
                removeComments: true
            })
        ))
        .pipe(gulp.dest(path.build.build_html))
        .pipe(my_reload({stream: true}));
});

// Задача для сборки JS
gulp.task("js:build", function () {
    return gulp.src(path.src.src_js)
        .pipe(my_rigger())
        .pipe(my_uglify())
        .pipe(gulp.dest(path.build.build_js))
        .pipe(my_reload({stream: true}));
});

// Задача для сборки CSS
gulp.task("css:build", function () {
    return gulp.src(path.src.src_css)
        .pipe(my_sass({outputStyle: 'compressed'}).on('error', my_sass.logError))
        .pipe(my_autoprefixer())
        .pipe(gulp.dest(path.build.build_css))
        .pipe(my_reload({stream: true}));
});

// Задача для сборки файлов
let build = gulp.parallel(
    'html:build',
    'css:build',
    'js:build',
    'images:build',
    'fonts:build'
);
gulp.task('build', build);

// Задача для отслеживания изменений файлов
gulp.task('watch', function () {
    let watch_css = gulp.watch(path.watch.watch_css, gulp.series('css:build'));
    let watch_js = gulp.watch(path.watch.watch_js, gulp.series('js:build'));
    let watch_html = gulp.watch(path.watch.watch_html, gulp.series('html:build'));
    let watch_img = gulp.watch(path.watch.watch_img, gulp.series('images:build'));
    let watch_fonts = gulp.watch(path.watch.watch_fonts, gulp.series('fonts:build'));
    watch_img.on('unlink', function (filepath) {
        let filePathFromSrc = my_paths.relative(my_paths.resolve('src'), filepath);
        let destFilePath = my_paths.resolve('assets', filePathFromSrc);
        my_del(destFilePath);
        let webp_destFilePath = destFilePath.replace(/jpg|jpeg|png/gi, 'webp');
        my_del(webp_destFilePath);
    });
    watch_css.on('unlink', function (filepath) {
        let filePathFromSrc = my_paths.relative(my_paths.resolve('src'), filepath);
        let destFilePath = my_paths.resolve('assets', filePathFromSrc);
        my_del(destFilePath);
    });
    watch_js.on('unlink', function (filepath) {
        let filePathFromSrc = my_paths.relative(my_paths.resolve('src'), filepath);
        let destFilePath = my_paths.resolve('assets', filePathFromSrc);
        my_del(destFilePath);
    });
    watch_html.on('unlink', function (filepath) {
        let filePathFromSrc = my_paths.relative(my_paths.resolve('src'), filepath);
        let destFilePath = my_paths.resolve('', filePathFromSrc);
        my_del(destFilePath);
    });
    watch_fonts.on('unlink', function (filepath) {
        let filePathFromSrc = my_paths.relative(my_paths.resolve('src'), filepath);
        let destFilePath = my_paths.resolve('', filePathFromSrc);
        my_del(destFilePath);
    });
});


