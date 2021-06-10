<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("セマンティックHTMLが重要な理由", "主なタグの役割"); ?>
        <?php include("../_partial/pages-title.php"); ?>


        <section class="ly-section tocContent">
        <h2>セマンティックHTMLが重要な理由</h2>
            <p>セマンティックHTMLにする理由として３つあげられます。</p>
            <h3>1.検索エンジンの最適化</h3>
            <p>GoogleがボットでHTMLコンテンツをスキャンする際に、検索エンジンが理解しやすいように作っておくことでSEOにおいて優位になります。GoogleもセマンティックHTMLを推奨しています。</p>
            <h3>2.アクセシビリティの改善</h3>
            <p>例えば、視覚障害を持ったユーザは、ウェブサイトの文章を読み上げるスクリーンリーダーなどのツールを使っています。その際に見出しや段落など適切にタグ付けすると、スクリーンリーダーが解析しやすくなり、より分かりやすい形態でコンテンツを提供できるようになります。</p>
            <h3>3.作業をする側にコードをわかりやすく</h3>
            <p>きちんと構造化されたHTMLを書くことで人間が読んでも分かりやすくメンテナンスが楽になります。</p>
        </section>
        <section class="ly-section tocContent">
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
