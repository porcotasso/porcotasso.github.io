const gulp = require('gulp')
const sass = require('gulp-sass')
const postcss = require('gulp-postcss')
const autoprefixer = require('autoprefixer')

const autoprefixerOption = {
    grid: true
}
const postcssOption =[ autoprefixer(autoprefixerOption)]

gulp.task('sass', () => {
    return gulp.src('./scss/bootstrap/bootstrap.scss')
    .pipe(sass())
    .pipe(postcss(postcssOption))
    .pipe(gulp.dest('./css'))
    }
)