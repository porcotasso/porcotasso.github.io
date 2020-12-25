<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("phpで現在のURLを取得"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                

		<section class="ly-section tocContent">
            <h2>phpで現在のURLを取得</h2>
            <p><em>$_SERVER</em>というスーパーグローバル変数にアクセスすることで値を取得することができます。</p>
            <p>$_SERVERはPHPスクリプトが置かれているウェブサーバーのヘッダ情報などを提供する配列（配列変数）でサーバー変数情報はウェブサーバーによって生成され、種類や内容はサーバーに依存します。</p>
            <p>スーパーグローバル変数とはプログラム実行時に自動的に定義され、プログラムのどこからでも何も宣言せず直接アクセスできる変数で、PHP 4.1から導入されました。</p>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://blog.codecamp.jp/php-request-url" <?php echo $targetBlank ?>>Code Camps</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://wepicks.net/phpref-server/" <?php echo $targetBlank ?>>wepicks</a></cite>
		</section>
        <section class="ly-section">
            <h3>参考</h3>
            
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
