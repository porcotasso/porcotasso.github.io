<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $semanticTags["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。</p>
            <nav>
                <div>目次</div>
                <ol>
                    <li>ベースグループ</li>
                    <li>レイアウトグループ</li>
                    <li>ブロックモジュールグループ</li>
                    <li>エレメントモジュールグループ</li>
                    <li>エレメントモジュールモディファイヤーグループ</li>
                    <li>ヘルパーグループ</li>
                    <li>ユニークグループ</li>
                    <li>プログラムグループ</li>
                </ol>
            </nav>
        </header>
        header要素…ページ全体のヘッダーや、セクション内のヘッダーを表します
footer要素…ページ全体のヘッターや、セクション内のヘッターを表します
main要素…ページの主要な内容を表します
nav要素…グローバルナビゲーションなどの主要なナビゲーションを表します
artile要素…独立した1つのコンテンツを表します
section要素…区切りを表します
aside要素…補足情報や余談的なブロックを表します
        <section>
            <h2>header要素</h2>
            <p>タイトル導入部。ナビゲーションなどが含まれる。ページ内で複数使える。</p>
            <p>ページ全体のheader</p>
            <pre>
                <code>
    &lt;body&gt;
        &lt;header&gt;
        &lt;/header&gt;
    &lt;/body&gt;
                </code>
            </pre>
        </section>

        <section>
            <h3>参考</h3>
            <cite><a href="https://wunderstand.net/1417/" target="_blank" rel="noopener noreferrer">html5のarticle・section等、まとめる要素まとめ</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
