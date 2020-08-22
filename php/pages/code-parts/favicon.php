<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $favicon["title"] ?>

<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>ファビコン、アイコンを設置する</p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <ol>
                    <li>ファビコン、アイコンの種類</li>
                    <li>フォーマットとコード</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>ファビコン、アイコンの種類</h2>
            <p>faviconはfavorite icon”の略語でウェブサイトのシンボルマーク・イメージとして、サイトに配置するアイコンの俗称です。閲覧中のタブなどに表示し潜在層にサイトを認知させる目的があります。現在は様々なサイズのデバイスがありサイズも20以上。ただ最大のサイズで画像を用意しておけば自動で縮小されるので全種類用意する必要はない。</p>
            <p>ファビコン、アイコンは主に４つに分けられます。</p>
            <h3>favicon</h3>
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
            <h2>フォーマットとコード</h2>
            <p>faviconはico形式、apple-touch-iconとandroid-touch-iconはpng形式で作ります。画像をルートディレクトリに置く場合はheadタグに特に記述がなくともクローラーがfaviconと認識する。画像をルートディレクトリ以外に置く場合はhaedタグ内の画像の場所を指定する。</p>
            <h3>favicon</h3>
            <p>ico形式</p>
            <cite class="ly-cite"><a href="https://favicon-generator.mintsu-dev.com/" <?php echo $targetBlank ?>>Favicon ジェネレーター</a></cite>
            <link rel="icon" href="/images/favicon/favicon.ico"> 
            
            <pre class="prettyprint linenums">
            <link rel="icon" href="/images/favicon/favicon.ico">
            </pre>

            <pre><link rel="icon" href="/images/favicon/favicon.ico"></pre>

            <h3>apple-touch-icon</h3>
            <p>180x180pxのpng画像</p>

            <pre class="prettyprint linenums">
            &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;180x180&quot; href=&quot;/images/favicon/apple-touch-icon.png&quot;&gt;
            </pre>
  
            <pre class="code prettyprint linenums" contenteditable="true" soellcheck="false" style="">
            <ol class="linenums">
            <li class="L0"><span class="tag">&lt;pre&gt;&lt;code</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"prettyprint lang-css"</span><span class="tag">&gt;</span></li>
            <li class="L1"><span class="com">&lt;!-- ここにソースコードを貼り付ける --&gt;</span></li>
            <li class="L2"><span class="tag">&lt;/code&gt;&lt;/pre&gt;</span></li>
            </ol>
            </pre>

            <h3>android-touch-icon</h3>
            <p>192x192pxのpng画像</p>
            <code>link rel="android-touch-icon" sizes="192x192" href="/images/favicon/android-touch-icon.png"</code>
            <h3>Windows用アイコン</h3>
            <p></p>
            <code>
                <!-- Windows用アイコン -->
                <meta name="application-name" content="{サイト名}"/>
                <meta name="msapplication-square70x70logo" content="small.jpg"/>
                <meta name="msapplication-square150x150logo" content="medium.jpg"/>
                <meta name="msapplication-wide310x150logo" content="wide.jpg"/>
                <meta name="msapplication-square310x310logo" content="large.jpg"/>
                <meta name="msapplication-TileColor" content="#FAA500"/>
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
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
