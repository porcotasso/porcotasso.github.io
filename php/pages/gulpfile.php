<?php include("../_partial/wrapper-head.php"); ?>
<?php $title = $gulpfile["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
			<?php if (file_exists($filename)) { ?>
				<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
			<?php } ?>
            <p><?php echo $lead ?></p>  
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("gulp-htmlhint", "gulp-php2html"); ?>
                <ol>
                    <?php for($i = 0; $i < count($navList); $i++){ ?>
                    <li>
                        <a href="#<?php echo $i + 1; ?>" class="">
                            <div class=""><?php echo $navList[$i]; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>gulp-htmlhint</h2>
            <p>gulp-htmlhintでHTMLのバリデーションを行う</p>
            <cite class="ly-cite"><a href="http://cly7796.net/wp/css/html-validation-with-gulp-htmlhint/" <?php echo $targetBlank ?>>gulp-htmlhintでHTMLのバリデーションを行う</a></cite>
            <cite class="ly-cite"><a href="http://cly7796.net/wp/css/html-validation-with-gulp-htmlhint/" <?php echo $targetBlank ?>>gulp html lint</a></cite>
            <cite class="ly-cite"><a href="http://bashalog.c-brains.jp/15/10/08-121056.php" <?php echo $targetBlank ?>>gulp html lint</a></cite>
            <cite class="ly-cite"><a href="https://qiita.com/hibikikudo/items/adeefff7f6307cb88d54" <?php echo $targetBlank ?>>gulp html lint</a></cite>
            <cite class="ly-cite"><a href="https://qiita.com/s-katsumasa/items/757faa49879e1c8a51ba" <?php echo $targetBlank ?>>gulp html lint</a></cite>
        </section>
        <section class="ly-section">
            <h2>gulp-php2html</h2>
            <p>gulp-php2htmlでphpファイルからhtmlファイルに変換する。ejsを使っていたけど、結局phpを他の用途で利用することが多く変更。</p>
            <p>最初にgulp-php2html をdevelopment dependencyとしてインストール</p>
<pre class="prettyprint">
npm install --save-dev gulp-php2html
</pre>
            <p>それからgulpfile.jsに追加</p>
<pre class="prettyprint">
const php2html = require('gulp-php2html');

gulp.task('php', () => {
  return gulp.src(['./php/pages/*.php', './php/pages/**/*.php'])
    .pipe(php2html({}))
    .pipe(rename({ extname: '.html' }))
    .pipe(gulp.dest('./'))
})
</pre>
            <p>gulp watchにphp2htmlを追加</p>
<pre class="prettyprint">
gulp.task('watch', () => {
    return gulp.watch(['./scss/*.scss', './scss/**/*.scss', './php/pages/*.php', './php/pages/**/*.php'], gulp.series('sass', 'php', 'html'))
})
</pre>
            <cite class="ly-cite"><a href="https://www.npmjs.com/package/gulp-php2html" <?php echo $targetBlank ?>>gulp-php2html</a></cite>
        </section>
        <section class="ly-section">
            <h3>参考</h3>
                   
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
