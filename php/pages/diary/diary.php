<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1>制作日記</h1>
            <p>やってることをメモ的に書いています。</p>
        </header>
        <section class="ly-section">
            <h2>これからやることリスト</h2>
            <ul>
                <li>ホームレイアウト</li>
                <li>PCデザイン</li>
                <li>ロゴ作成</li>
                <li>ぱんくずリスト</li>
                <li>目次の開閉</li>
                <li>CSSカテゴライズまとめ</li>
                <li>ボタンまとめ</li>
                <li>break-wordなどテキストまとめ</li>
                <li>guipfileまとめ</li>
                <li>エスケープのjsまとめ</li>
                <li>svgまとめ</li>
                <li>prettyまとめ</li>
                <li>現実的問題まとめ</li>
                <li>フッター</li>
                <li>コンテンツページ同士のリンク、タイトル左右に矢印</li>
                <li>nginxまとめバーチャルホスト</li>
                <li>githubまとめ</li>
                <li>fishまとめ</li>
                <li>homebrewまとめ</li>
                <li>formまとめ</li>
                <li>typescriptまとめ</li>
                <li>UXまとめ</li>
                <li>UIまとめ</li>
                <li>カルーセル</li>
                <li>スライダー</li>
                <li>ポップ</li>
                <li>全タグ確認</li>
            </ul>
            <h2><time>2020年</time></h2>
            <time class="dairyTime" datetime="2020-08-24">8月24日</time>
            <p>コンテンツモデルページまとめ</p>
            <p>セマンティックHTML</p>
            <p>ホームメニューカテゴリーに矢印追加</p>
            <time class="dairyTime" datetime="2020-08-23">8月23日</time>
            <p>スーパーグローバル関数を調べる。</p>
            <p>gulpfileのphp2htmlをまとめる。</p>
            <p>phpメモページ追加。</p>
            <p>iタグ、dfnタグ追加。目立たすタグページ修正。</p>
            <p>日記ページ作成。timeタグを調べる。</p>
            <p>preタグとcodeタグの違いを調べる。改行やインデントなどはcodeは反映されない。</p>
            <p>faviconページに目次と内部リンクを追加。使った時に、ヘッダーの下に表示される問題が解決。これまで使ってた方法よりかなり楽になった。htmlタグにscroll-padding-top: 80px;を入れる。</p>
            <time class="dairyTime" datetime="2020-08-22">8月22日</time>
            <p>
                faviconページでコードを表示させようとしたところ、勝手に閉じタグが挿入される問題。原因不明。対処方不明。
                <code>　&lt;square70x70logo src=&quot;/image/favicon/tileImg-70x70.png&quot;/&gt;</code>php->htmlの変換では問題ない。
                .htmlファイルをブラウザで表示させる段階で勝手に追加される。例えば上のコード一行だけ書いたhtmlファイルをブラウザで表示させると、勝手に閉じタグがつく。chrome, safari両方同じ。jsでpre内の特殊文字の自動エスケープをしていたので、codeタグに変更してエスケープして表示させ、それ用のスタイルを追加して対応。
            </p>
            <p>各ページのheadタグ内のtitleタグの中を自動にしたい。wrapper-head.php内でどのページで利用するのか判別できてなかったので、<code>$_SERVER['REQUEST_URI']</code>とvariable内のurlで、判別。ついでにtitle leadも各ページで読み込めるようにしておいた。foeach文にbreakを記入するも、ループを抜けれない。foreachを二重に使っていることが原因ではないかと予想。</p>
            <time class="dairyTime" datetime="2020-08-21">8月21日</time>
            <p>code pretty を導入。そのうちcode penも追加したい</p>
            <p>header smallerのJSの挙動がおかしい。上から80pxの部分が反応してない。if文修正。</p>
            <time class="dairyTime" datetime="2020-08-20">8月20日</time>
            <p>ファビコンの使い方があいまいだったので調べて実行。各情報も結構あいまいなものもある。明確にわけれたと思う。</p>
            <time class="dairyTime" datetime="2020-08-19">8月19日</time>
            <p>脱jQueryをする。ヘッダーのsmallerのコードを変更。</p>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
