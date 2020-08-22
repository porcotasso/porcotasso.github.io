<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $favicon["title"] ?>

<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>Favicon、アイコンを設置する方法</p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <ol>
                    <li>Favicon、アイコンの種類</li>
                    <li>フォーマット</li>
                    <li>コード</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>Favicon、アイコンの種類</h2>
            <p>faviconはfavorite icon”の略語でウェブサイトのシンボルマーク・イメージとして、サイトに配置するアイコンの俗称です。閲覧中のタブなどに表示し潜在層にサイトを認知させる目的があります。現在は様々なサイズのデバイスがあり全サイズを準備するのは大変ですが、最大のサイズで画像を用意しておけば自動で縮小されるので全種類用意する必要はないでしょう。</p>
            <p>Favicon、アイコンは主に４つに分けられます。</p>
            <h3>Favicon</h3>
            <p>ブラウザのタブ、ブックマークしたページタイトルの左に表示されるもの</p>
            <h3>apple-touch-icon</h3>
            <p>iPhoneやiPadのsafariでWebサイトのショートカットをホーム画面に作成した時に表示されるアイコン。</p>
            <p>App Iconについて</p>
            <cite class="ly-cite"><a href="https://developer.apple.com/design/human-interface-guidelines/ios/icons-and-images/app-icon/" <?php echo $targetBlank ?>>App Icon – Icons and Images – iOS – Human Interface Guidelines – Apple Developer</a></cite>
            <h3>android-touch-icon</h3>
            <p>AndroidでWebサイトのショートカットをホーム画面に作成した時に表示されるアイコン。</p>
            <p>Google公式ページガイドライン</p>
            <blockquote cite="https://support.google.com/webmasters/answer/9290858?hl=ja">
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
            <h3>実際に必要なもの</h3>     
        </section>
        <section class="ly-section">
            <h2>画像フォーマット</h2>
            <p>faviconはico形式、apple-touch-icon、android-touch-icon、Windows用アイコンはpng形式で作ります。画像をルートディレクトリに置く場合はheadタグに特に記述がなくともクローラーがfaviconと認識します。画像をルートディレクトリ以外に置く場合はhaedタグ内などに画像の場所を指定します。ファビコン、アイコン用フォルダを作ってまとめた方がわかりやすいです。</p>
            <h3>ico形式</h3>
            <p>元となる大きめの高画質画像を準備します。Faviconは基本表示サイズが小さいので小さく表示されてもちゃんと見えるようにする必要があります。元画像ができたらFaviconジェネレーターでicoファイルを作成します。</p>
            <cite class="ly-cite"><a href="https://favicon-generator.mintsu-dev.com/" <?php echo $targetBlank ?>>Favicon ジェネレーター</a></cite>
            <h3>png画像</h3>
            <p>使う場所の用途を理解して実寸サイズでそれぞれ制作します。</p>
            <p>apple-touch-icon：180x180pxのpng画像</p>
            <p>android-touch-icon：192x192pxのpng画像</p>
            <p>Windows用アイコン：70x70px、150x150、310x150、310x310のpng画像</p>

            <h2>コード</h2>
            <h3>Favicon、apple-touch-icon、android-touch-ico用コード</h3>
            <p>この３つの設定はheadタグでコードを追加します。</p>
            <pre class="prettyprint linenums">
                <link rel="icon" href="/image/favicon/favicon.ico">
                <link rel="apple-touch-icon" sizes="180x180" href="/image/favicon/apple-touch-icon.png">
                <link rel="android-touch-icon" sizes="192x192" href="/image/favicon/android-touch-icon.png">
            </pre>
            <h3>Windows用アイコン</h3>
            <p>browserconfig.xmlファイルをルートディレクトリにファイル作成して、それぞれの画像を指定します。</p>
            <pre>
                <?xml version="1.0" encoding="utf-8"?>
                <browserconfig>
                <msapplication>
                <tile>
                <square70x70logo src="image/favicon/tileImg-70x70.png"/>
                <square150x150logo src="image/favicon/tileImg-150x150.png"/>
                <square310x310logo src="image/favicon/tileImg-310x310.png"/>
                <wide310x150logo src="image/favicon/tileImg-310x150.png"/>
                <TileColor>#ffffff</TileColor>
                </tile>
                </msapplication>
                </browserconfig> 
            </pre>
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
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
