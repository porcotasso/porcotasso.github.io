const gulp = require('gulp')
//Sass
const sass = require('gulp-sass')
// postcss 
const postcss = require('gulp-postcss')//CSS解析
const autoprefixer = require('autoprefixer')//接頭辞　ベンダープレフィックス付与
const flexBugsFixers = require('postcss-flexbugs-fixes')//ブラウザによって違う挙動の差異を回避
//error notification
const plumber = require('gulp-plumber');//error check
const notify = require('gulp-notify');// error notice
// switch Env dev or live
const gulpif = require('gulp-if')　//use if
const minimist = require('minimist') //コマンドライン引数を理解し配列にする
//rewrite
const cssdeclsort = require('css-declaration-sorter') // sort
const cleanCSS = require("gulp-clean-css") //minify
// const cssWring = require('csswring') //minify
// const uglify = require('gulp-uglify')　// minify JavaScript
const rename = require('gulp-rename') //rename
// const ejs = require('gulp-ejs') // ejs - compile html
const php2html = require('gulp-php2html');

const htmlhint = require('gulp-htmlhint');
 
// compile ejs
// gulp.task('ejs', () => {
//   return gulp.src(['./ejs/codenote/*.ejs', './ejs/codenote/**/*.ejs'])
//     .pipe(ejs({}))
//     .pipe(rename({ extname: '.html' }))
//     .pipe(gulp.dest('./'))
// })

// compile php
gulp.task('php', () => {
  return gulp.src(['./php/*.php', ])
    .pipe(php2html({}))
    .pipe(rename({ extname: '.html' }))
    .pipe(gulp.dest('./'))
})
gulp.task('php2', () => {
  return gulp.src(['./php/codenote/*.php', './php/diary/diary.php'])
    .pipe(php2html({}))
    .pipe(rename({ extname: '.html' }))
    .pipe(gulp.dest('./codenote/'))
})

gulp.task('html', function() {
  return gulp.src('index.html','./code-*/*.html')
  .pipe(htmlhint({
    "tagname-lowercase": true,
    "attr-lowercase": false,
    "attr-value-double-quotes": true,
    "attr-value-not-empty": false,
    "attr-no-duplication": true,
    "doctype-first": true,
    "tag-pair": true,
    "empty-tag-not-self-closed": true,
    "spec-char-escape": false, //true -> false
    "id-unique": true,
    "src-not-empty": true,
    "title-require": true,
    "alt-require": true,
    "doctype-html5": true,
    // "id-class-value": "dash",
    "style-disabled": false,
    "inline-style-disabled": false,
    "inline-script-disabled": false,
    // "space-tab-mixed-disabled": "space",
    "id-class-ad-disabled": false,
    "href-abs-or-rel": false,
    "attr-unsafe-chars": true,
    "head-script-disabled": true
  }))
  .pipe(htmlhint.reporter());
});

const autoprefixerOption = {
    grid: true
}
const postcssOption = [
    flexBugsFixers,
    autoprefixer(autoprefixerOption),
    // cssWring
]

const options = minimist(process.argv.slice(2), envOption); //process.argv には第一引数にnode、第２引数には実行ファイル名、第３引数以降にはコマンドライン引数が入る。minimistに渡す場合はprocess.argv.slice(2) がお決まり。
//minimist は第２引数にオプション(ここではenvOption と定義)を与えることができ、envOption.string に定義した値を取得する。またコマンドライン引数に該当の値がない場合はenvOption.defaut に定義した値がデフォルト値となる。
var envOption = {
    string: 'env'
    // default: { env: process.env.NODE_ENV || 'development' } // NODE_ENVに指定がなければ開発モードをデフォルトにする
  };
var live = (options.env === 'live') ? true : false;
// console.log('[build env]', options.env, '[is live]', islive);

gulp.task('sass', () => {
    return gulp.src(['./scss/common.scss', './scss/home.scss', './scss/codenote.scss', './scss/art.scss', './scss/profile.scss'], { sourcemaps: true })
    .pipe(plumber(notify.onError('Error: <%= error.message %>')))
    .pipe(sass())
    .pipe(postcss([cssdeclsort({
        order: 'smacss'
      })])) //sort- alphobetically->アルファベット順　smacss->SMACSS定義重要な順　concentric-css->Concentric CSSが提唱するボックスモデルの外側から内側の順
    .pipe(postcss(postcssOption))
    .pipe(gulpif(live, cleanCSS()))
    // .pipe(gulpif(live, rename({suffix: '.min', }))) //minify
    .pipe(gulp.dest('./css', { sourcemaps: './maps' }))
})

gulp.task('watch', () => {
    return gulp.watch(['./scss/*.scss', './scss/**/*.scss', './php/*.php', './php/codenote/*.php', './php/_partial/*.php'], gulp.series('sass', 'php', 'php2', 'html'))
})

//create default task  -> 'npm run dev' -> run
gulp.task('default', gulp.series(['watch'], () => {
}));