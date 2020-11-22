<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt ly-innnerWidth">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("favicon、アイコンの種類", "画像フォーマット", "コード"); ?>
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
            <h2 >favicon、アイコンの種類</h2>
            <p>現在は様々なサイズのデバイスがあり表示されるサイズの種類数は多いですが、最大のサイズで画像を用意しておけば自動で縮小されるので全種類用意する必要はないでしょう。</p>
            <p>favicon、アイコンは主に４つに分けられます。</p>
            <h3>favicon</h3>
            <p>ブラウザのタブ、ブックマークしたページタイトルの左に表示されるもの</p>
            <h3>apple-touch-icon</h3>
            <p>iPhoneやiPadのsafariでWebサイトのショートカットをホーム画面に作成した時に表示されるアイコン。</p>
            <p>App Iconについて</p>
            <cite class="ly-cite"><a href="https://developer.apple.com/design/human-interface-guidelines/ios/icons-and-images/app-icon/" <?php echo $targetBlank ?>>App Icon – Icons and Images – iOS – Human Interface Guidelines – Apple Developer</a></cite>
            <h3>android-touch-icon</h3>
            <p>AndroidでWebサイトのショートカットをホーム画面に作成した時に表示されるアイコン。</p>
            <p>Google公式ページガイドライン</p>
            <blockquote>
                <p>検索結果の横にファビコンを表示するには、次のガイドラインに準拠する必要があります。なお、すべてのガイドラインが満たされても、ファビコンが検索結果に表示されるかは保証されません。</p>
                <ul>
                    <li>Googleがファビコンのファイルとホームページをクロールできること（Googleをブロックしないこと）。</li>
                    <li>ファビコンがウェブサイトのブランドを視覚的に表したものとなっており、ユーザーが検索結果を見た際に一目でサイトを見分けられるようになっていること。</li>
                    <li>ファビコンのサイズが48ピクセルの倍数になっていること（例: 48 x 48 ピクセル、96 x 96 ピクセル、144 x 144 ピクセルなど）。SVG ファイルの場合は、サイズに関して特別な指定はありません。有効なファビコン形式は、すべてサポートされています。Google では画像サイズを 16 x 16 ピクセルに変換するため、その解像度で適切に表示されるか、あらかじめご確認ください。16 × 16 ピクセルのファビコンは指定しないでください。</li>
                    <li>ファビコンの URL は固定されている必要があります（URL は頻繁に変更しないでください）。</li>
                    <li>わいせつな表現やヘイト表現に関連するシンボル（例: かぎ十字章）などの不適切なファビコンは表示されません。該当する表現がファビコン内で見つかった場合は、デフォルトのアイコンに置き換えられます。</li>
                </ul>
                <footer>引用元：<cite class="ly-cite"><a href="https://support.google.com/webmasters/answer/9290858?hl=ja" <?php echo $targetBlank ?>>検索結果に表示されるファビコンを定義する – Search Console ヘルプ</a></cite>
                </footer>
            </blockquote>
            <h3>Windows用アイコン</h3>
            <p>Windows8やWindows10のスタート画面にWebサイトをピン留めした時の表示をリッチにしたい場合は、Windows用アイコンの設定を行いましょう。</p>  
        </section>
        <section class="ly-section" id="2">
            <h2>画像フォーマット</h2>
            <p>faviconはico形式、apple-touch-icon、android-touch-icon、Windows用アイコンはpng形式で作ります。画像をルートディレクトリに置く場合はheadタグに特に記述がなくともクローラーがfaviconと認識します。画像をルートディレクトリ以外に置く場合はhaedタグ内などに画像の場所を指定します。ファビコン、アイコン用フォルダを作ってまとめた方がわかりやすいです。</p>
            <h3>ico形式</h3>
            <p>元となる大きめの高画質画像を準備します。faviconは基本表示サイズが小さいので小さく表示されてもちゃんと見えるようにする必要があります。元画像ができたらfaviconジェネレーターでicoファイルを作成します。</p>
            <cite class="ly-cite"><a href="https://favicon-generator.mintsu-dev.com/" <?php echo $targetBlank ?>>favicon ジェネレーター</a></cite>
            <h3>png画像</h3>
            <p>使う場所の用途を理解して実寸サイズでそれぞれ制作します。</p>
            <p>apple-touch-icon：180x180pxのpng画像</p>
            <p>android-touch-icon：192x192pxのpng画像</p>
            <p>Windows用アイコン：70x70px、150x150、310x150、310x310のpng画像</p>
        </section>
        <section class="ly-section" id="3">
            <h2>コード</h2>
            <h3>favicon、apple-touch-icon、android-touch-ico用コード</h3>
            <p>この３つの設定はheadタグでコードを追加します。</p>

<pre class="prettyprint">
<link rel="icon" href="/image/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="/image/favicon/apple-touch-icon.png">
<link rel="android-touch-icon" sizes="192x192" href="/image/favicon/android-touch-icon.png">
</pre>

            <h3>Windows用アイコン</h3>
            <p>browserconfig.xmlファイルをルートディレクトリにファイル作成して、それぞれの画像を指定します。</p>
<code class="displayCode">
&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;browserconfig&gt;<br>
　&lt;msapplication&gt;<br>
　　&lt;tile&gt;<br>
　　　&lt;square70x70logo src=&quot;/image/favicon/tileImg-70x70.png&quot;/&gt;<br>
　　　&lt;square150x150logo src=&quot;/image/favicon/tileImg-150x150.png&quot;/&gt;<br>
　　　&lt;square310x310logo src=&quot;/image/favicon/tileImg-310x310.png&quot;/&gt;<br>
　　　&lt;wide310x150logo src=&quot;/image/favicon/tileImg-310x150.png&quot;/&gt;<br>
　　　&lt;TileColor&gt;#ffffff&lt;/TileColor&gt;<br>
　　&lt;/tile&gt;<br>
　&lt;/msapplication&gt;<br>
&lt;/browserconfig&gt; 
</code>
        </section>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://webdesign-trends.net/entry/7251" <?php echo $targetBlank ?>>Webに関わるすべての人のためのメディア</a></cite>        
            <cite class="ly-cite"><a href="https://gray-code.com/html_css/setting-favicon-for-smartphone/" <?php echo $targetBlank ?>>スマホ向けのファビコンを設定する</a></cite>        
        </section>
    </article>
</main>
<script>


</script>
<?php include("../_partial/wrapper-foot.php"); ?>
