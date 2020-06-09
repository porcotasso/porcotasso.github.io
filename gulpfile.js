const gulp = require('gulp')
const sass = require('gulp-sass')

gulp.task('sass', () => {

   return gulp.src('./scss/bootstrap.scss')
   .pipe(sass())
   .pipe(gulp.dest('./css'))
 
}
)