const gulp = require('gulp')
const sass = require('gulp-sass')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')
const flexBugsFixers = require('postcss-flexbugs-fixes')
const cssWring = require('csswring')

const autoprefixerOption = {
    grid: true
}

const postcssOption = [
    flexBugsFixers,
    autoprefixer(autoprefixerOption)
    // cssWring
]

gulp.task('sass', () => {
    return gulp.src('./scss/common.scss')
    // return gulp.src('./scss/bootstrap/bootstrap.scss')
    .pipe(sass())
    .pipe(postcss(postcssOption))
    .pipe(gulp.dest('./css'))
})

gulp.task('watch', () => {
    return gulp.watch('./scss/**/*.scss', gulp.series('sass'))
})