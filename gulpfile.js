const gulp = require('gulp')
//Sass
const sass = require('gulp-sass')
// for browser
const postcss = require('gulp-postcss')//CSS解析
const autoprefixer = require('autoprefixer')//接頭辞　ベンダープレフィックス付与
const flexBugsFixers = require('postcss-flexbugs-fixes')//ブラウザによって違う挙動の差異を回避

//error notification
const plumber = require('gulp-plumber');//error check
const notify = require('gulp-notify');// error notice
// sort, minify
const cssdeclsort = require('css-declaration-sorter') // プロパティをソートし直す
// const cssWring = require('csswring')

const autoprefixerOption = {
    grid: true
}

const postcssOption = [
    flexBugsFixers,
    autoprefixer(autoprefixerOption),
    // cssWring
]

gulp.task('sass', () => {
    return gulp.src(['./scss/common.scss', './scss/bootstrap/bootstrap.scss'], { sourcemaps: true })
    // return gulp.src('./scss/bootstrap/bootstrap.scss')
    .pipe(plumber(notify.onError('Error: <%= error.message %>')))
    .pipe(sass())
    .pipe(postcss(postcssOption))
    .pipe(postcss([cssdeclsort({
        order: 'smacss'
      })])) //プロパティをソートし直す
      // alphobetically アルファベット順に
      // smacss SMACSSが定義するレイアウトに最も重要な順に
      // concentric-css Concentric CSSが提唱するボックスモデルの外側から内側の順に
    .pipe(gulp.dest('./css', { sourcemaps: './maps' }))
})

gulp.task('watch', () => {
    return gulp.watch('./scss/**/*.scss', gulp.series('sass'))
})

//create default task  -> 'npm run dev' -> run
gulp.task('default', gulp.series(['watch'], () => {
}));