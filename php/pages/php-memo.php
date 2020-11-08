<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("phpで現在のURLを取得"); ?>
                <ol>
                    <?php for($i = 0; $i < count($navList); $i++){ ?>
                    <li>
                        <a href="#<?php echo $i; ?>" class="">
                            <div class=""><?php echo $navList[$i]; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </nav>
        </header>
		<section class="ly-section" id="1">
            <h2>phpで現在のURLを取得</h2>
            <p><em>$_SERVER</em>というスーパーグローバル変数にアクセスすることで値を取得することができます。</p>
            <p>$_SERVERはPHPスクリプトが置かれているウェブサーバーのヘッダ情報などを提供する配列（配列変数）でサーバー変数情報はウェブサーバーによって生成され、種類や内容はサーバーに依存します。</p>
            <p>スーパーグローバル変数とはプログラム実行時に自動的に定義され、プログラムのどこからでも何も宣言せず直接アクセスできる変数で、PHP 4.1から導入されました。</p>
            <cite class="ly-cite"><a href="https://blog.codecamp.jp/php-request-url" <?php echo $targetBlank ?>>Code Camps</a></cite>
            <cite class="ly-cite"><a href="https://wepicks.net/phpref-server/" <?php echo $targetBlank ?>>wepicks</a></cite>
		</section>
        <section class="ly-section">
            <h3>参考</h3>
            
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
