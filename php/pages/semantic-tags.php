<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            
            <nav class="ly-toc">
                <div class="ly-toc_ttl">目次</div>
                <?php $navList = array("セマンティックHTMLが重要な理由", "主なタグの役割"); ?>
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
        <h2>セマンティックHTMLが重要な理由</h2>
            <p>セマンティックHTMLにする理由として３つあげられます。</p>
            <p>一つ目は検索エンジンの最適化です。GoogleがボットでHTMLコンテンツをスキャンする際に、検索エンジンが理解しやすいように作っておくことでSEOにおいて優位になります。GoogleもセマンティックHTMLを推奨しています。</p>
            <p>二つ目はアクセシビリティの改善です。例えば、視覚障害を持ったユーザは、ウェブサイトの文章を読み上げるスクリーンリーダーなどのツールを使っています。その際に見出しや段落など適切にタグ付けすると、スクリーンリーダーが解析しやすくなり、より分かりやすい形態でコンテンツを提供できるようになります。</p>
            <p>三つ目はコードをわかりやすくする目的です。きちんと構造化されたHTMLを書くことで人間が読んでも分かりやすくメンテナンスが楽になります。</p>
        </section>
        <section class="ly-section" id="2">
            <h2>主なタグの役割</h2>
            <h3>header</h3>
            <p>ページ全体のヘッダーや、セクション内のヘッダーを表します。イントロダクション、ナビゲーション等のグループを表す。</p>
            <h3>footer</h3>
            <p>自身の祖先要素の内で直近のセクショニングコンテンツかセクショニングルート要素のフッターを表す。</p>
            <h3>main</h3>
            <p>ページの主要な内容を表します</p>
            <h3>nav</h3>
            <p>グローバルナビゲーションなどの主要なナビゲーションを表します。</p>
            <h3>artile</h3>
            <p>独立した1つのコンテンツです。ドキュメント、ページ、アプリケーション、あるいはサイトの中で自己完結した内容に使います。</p>
            <h3>section</h3>
            <p>区切りを表します。見出しを伴う意味的なグループ化が可能な、文書の一般的なセクションを表します。</p>
            <h3>aside</h3>
            <p>補足情報や余談的なブロックを表します。メインコンテンツとの関連性が希薄で、メインコンテンツから切り離すことが可能なセクションを表します。</p>
        </section>

        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a class="ly-cite_link" href="http://www.tohoho-web.com/html/memo/html5.htm#flow" <?php echo $targetBlank ?>>とほほのWWW入門</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://wunderstand.net/1417/" <?php echo $targetBlank ?>>html5のarticle・section等、まとめる要素まとめ</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
