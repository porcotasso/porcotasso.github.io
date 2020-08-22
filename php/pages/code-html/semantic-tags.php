<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <p>クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。記述するコンテンツの意味に合ったタグを使ってマークアップすることをセマンティックHTMLと呼びます。検索エンジン最適化
Webにおいて、みなさんが特に気にするのは検索エンジン最適化（SEO）の部分かと思います。Googleで検索した際に上位に表示されてほしい、という話はよく聞きますが、そういった部分にセマンティックHTMLは関わってきます。
検索エンジンは「機械」です。HTMLコンテンツをスキャンする際に、検索エンジンが理解しやすいように作っておくことでSEOにおいて優位になります。GoogleもセマンティックHTMLを推奨しています。
アクセシビリティ
例えば、視覚障害を持ったユーザは、ウェブサイトの文章を読み上げるスクリーンリーダーなどのツールを使っています。その際に見出しや段落など適切にタグ付けすると、スクリーンリーダーが解析しやすくなり、より分かりやすい形態でコンテンツを提供できるようになります。
その他にも、きちんと構造化されたHTMLは機械だけでなく人間が読んでも分かりやすいのでメンテナンスしやすい…などなどメリットがあります。
これらの面からみても「HTMLをセマンティックに書く」ことの重要性が分かるかと思います。</p>
            <nav>
                <div>目次</div>
                <ol>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
        コンテンツ・モデル'セクショニング・コンテンツ'の役割と使う場所
            <h2>header</h2>
            <p>ページ全体のヘッダーや、セクション内のヘッダーを表します。イントロダクション、ナビゲーション等のグループを表す。</p>
            <h2>footer</h2>
            <p>ページ全体のヘッターや、セクション内のヘッターを表します。自身の祖先要素の内で直近のセクショニングコンテンツかセクショニングルート要素のフッターを表す。</p>
            <h2>main</h2>
            <p>ページの主要な内容を表します</p>
            <h2>nav</h2>
            <p>グローバルナビゲーションなどの主要なナビゲーションを表します。主要なナビゲーション (他のページやページ内の他の部分へのリンク) である事を表す。</p>
            <h2>artile</h2>
            <p>独立した1つのコンテンツ。ドキュメント、ページ、アプリケーション、あるいはサイトの中で自己完結した構成物</p>
            <h2>section</h2>
            <p>区切りを表します。見出しを伴う意味的なグループ化が可能な、文書の一般的なセクションを表す。</p>
            <h2>aside</h2>
            <p> 補足情報や余談的なブロックを表します。メインコンテンツとの関連性が希薄で、メインコンテンツから切り離すことが可能なセクションを表す。</p>
        </section>
        <section class="ly-section">
            <h2>header要素</h2>
            <p>タイトル導入部。ナビゲーションなどが含まれる。ページ内で複数使える。</p>
            <p>ページ全体のheader</p>
        </section>

        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="http://www.tohoho-web.com/html/memo/html5.htm#flow" <?php echo $targetBlank ?>>とほほのWWW入門</a></cite>
            <cite class="ly-cite"><a href="https://wunderstand.net/1417/" <?php echo $targetBlank ?>>html5のarticle・section等、まとめる要素まとめ</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
