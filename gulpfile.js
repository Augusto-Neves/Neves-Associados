const gulp = require('gulp');
const { series } = require('gulp');
const sass = require('gulp-sass')(require('node-sass'));
const uglify = require('gulp-uglify');
const uglifycss = require('gulp-uglifycss');
const rename = require('gulp-rename');
const image = require('gulp-image');
const { dest } = require('vinyl-fs');

function moverArquivosHtml() {
    return gulp.src('./*.html')
        .pipe(gulp.dest('./build'));
}

function compilarSass() {
    return gulp.src('./css/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(uglifycss({
            'uglyComments': true
        }))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(gulp.dest('./build/css/dist'))
}

function imagens() {
    return gulp.src('./img/*')
        .pipe(image())
        .pipe(gulp.dest('./build/img'))
}

function javascript() {
    return gulp.src('./js/*')
        .pipe(uglify())
        .pipe(rename({ extname:'.min.js'}))
        .pipe(gulp.dest('./build/js'))
}

module.exports.default = series(moverArquivosHtml, compilarSass, imagens, javascript);