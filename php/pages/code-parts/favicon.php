<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $favicon["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>favicon　apple-touch-icon　Windows用アイコン</p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <ol>
                    <li>favicon、apple-touch-icon、Windows用アイコンとは</li>
                    <li>表示される場所</li>
                    <li>フォーマットは「ico」（かpng）</li>
                    <li>Googleのガイドライン</li>
                    <li>作成方法</li>
                    <li>記述方法</li>
                    <li>apple-touch-icon　Windows用アイコン</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>favicon、apple-touch-icon、Windows用アイコンとは</h2>
            <p>閲覧中のタブなどに表示し潜在層にサイトを認知させる目的がある。</p>
            <h3>faviconとは</h3>
            <p>favorite icon”の略語でウェブサイトのシンボルマーク・イメージとして、サイトに配置するアイコンの俗称。ここではブラウザのタブ、ブックマークしたページタイトルの左に表示されるものとする。</p>
            <h3>apple-touch-icon</h3>
            <p>iPhoneやiPadのsafariや、AndroidでWebサイトをホーム画面に追加した時に表示されるアイコン。特に最近はPCより利用の多いスマホ対応が重要。ここではfaviconとは別の認識とする。</p>
            <h3>Windows用アイコン</h3>
            <p>Windows8やWindows10のスタート画面にWebサイトをピン留めした時の表示をリッチにしたい場合は、Windows用アイコンの設定を行いましょう。</p>
        </section>
        <section class="ly-section">
            <h2>表示される場所</h2>
            <ul>
                <li>ブラウザのタブ</li>
                <li>ブックマークしたページタイトルの左</li>
                <li>スマホからショートカットを作成したアイコン</li>
                <li>検索結果ページのタイトル左</li>
            </ul>
            <p>現在は様々なサイズのデバイスがありサイズも20以上あると言われ、全て対策するには各種サイズを用意する必要があるが最大のサイズで画像を用意しておけば自動で縮小されて表示される。パソコン用（タブやブックマーク）とスマホ対応である程度カバーできる。特殊な例としてWindowsのスタートメニューに表示されるパネル、タスクバーにピン留めした際に表示される画像もあるが、そこまで対応する必要かどうかは検討次第で、どこまで対応するのかをまず確認したほうが良い。サイトを目立たせる・ブランディング効果が目的なら最低限上記の2パターン用意で良い。多くの記事ではタブや検索結果に使用されるfavicon（16×16）のみ説明しているものが多いがそれ以外にスマホやタブレットでショートカットを作る際の最大サイズ（180×180）も別途用意しておくと良い。</p>
            <h3>App Iconについて</h3>
            <cite class="ly-cite"><a href="https://developer.apple.com/design/human-interface-guidelines/ios/icons-and-images/app-icon/" <?php echo $targetBlank ?>>App Icon – Icons and Images – iOS – Human Interface Guidelines – Apple Developer</a></cite>
            <h3>Google公式ページガイドライン</h3>
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
        </section>
        <section class="ly-section">
            <h2>フォーマットは「ico」（かpng）</h2>
            <p>基本的にfavicon（ファビコン）のファイルフォーマットは「ico」。中にはpng対応しているブラウザもあるがバージョンによって異なるため“ico”形式の方が良い。複数の画像サイズをまとめるマルチアイコンとして活用できるので“16×16”だけでなく、Retina用のサイズ（32×32）、その他“48×48”を含めた“ico”ファイルを用意し、スマホのショートカット作成時に表示される最大のサイズ（180×180）を“png”形式で用意する必要があります。“ico”ファイルは自動的に適したサイズに縮小されるため、大きめのサイズでひとつ用意しておくという手もあります。（上記のようにサイズを指定するのは綺麗に見せるためです。）
            </p>
            <p>透過させるデザインの場合は、当然“png”で書き出す必要があるため、そちらを流用して各種サイズを用意するか、または対応する最大のサイズを一枚用意しておくと良いでしょう。icoとpngではheader内に記述する方法も異なる。ひとまとめにできない。</p>
            <p>Photoshopでは書き出せないので“ICO Format プラグイン”をインストールするか、変換ツールサービスを利用する。</p>
            <p>手作業で書き出すのではなく変換サービスで大きめな“ico”形式のファイルをアップしておくとそれぞれに適したサイズに縮小されるので対応したい最大のサイズを選び“ico”形式に書き出してくれる無料ツールの利用がおすすめ。</p>
            <h3>結局どうデータを作るの？</h3>
            <p>元となるjpgデータを準備する。サイズは大きい方がいい</p>
            <p>作成ツール(X Icon editor)でico形式で書き出す</p>
            <p>マルチアイコンのfavicon.icoがexportされるので名前はそのままでサイト内にコピー</p>
            <p>apple-touch-icon用に180x180のpng画像（apple-touch-icon.png）を書き出しサイト内にコピー</p>
            <p>headタグ内に画像の場所書く
                <code>link rel="icon" href="/favicon.ico" <br>
                    link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"
                </code>
                
            </p>
        </section>
        <section class="ly-section">
            <h2>作成ツール</h2>
            <small><a href="https://favicon-generator.mintsu-dev.com/" <?php echo $targetBlank ?>>Faviconジェネレーター</a></small>
            <p>ひとつの画像をアップロードすることによって、以下のサイズを含むマルチアイコンとして“ico”ファイルを書き出すことができる便利なツールとなっています。（例えば256×256を含めて書き出したい場合、そのサイズで画像をアップします。）</p>
            <ul>
                <li>16×16</li>
                <li>24×24</li>
                <li>32×32</li>
                <li>48×48</li>
                <li>64×64</li>
                <li>128×128</li>
                <li>256×256</li>
            </ul>
            <p>これだと複数のファイルをアップロードする必要がなくなるため、マルチアイコンの“ico”ファイルを書き出すには非常に便利で、透過（png）にも対応している</p>
        </section>
        <section class="ly-section">
            <h2>記述方法</h2>
            <pre>
                <code>
                    <!-- ファビコン -->
                    <link rel="icon" href="/favicon.ico">
                    
                    <!-- スマホ用アイコン -->
                    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
                    
                    <!-- Windows用アイコン -->
                    <meta name="application-name" content="{サイト名}"/>
                    <meta name="msapplication-square70x70logo" content="small.jpg"/>
                    <meta name="msapplication-square150x150logo" content="medium.jpg"/>
                    <meta name="msapplication-wide310x150logo" content="wide.jpg"/>
                    <meta name="msapplication-square310x310logo" content="large.jpg"/>
                    <meta name="msapplication-TileColor" content="#FAA500"/>
                    Windows向けの設定は、必ず必要という訳ではありません
                </code>
            </pre>
            <p>各ページのheader内に下記のような画像ファイルへのurlを記述します。（絶対パス・相対パスのどちらでも構いません。）そのため、共通テンプレートとして使用しているhtml（もしくはphp）ファイルに適宜追加しておくだけで良いでしょう。まずはPCで表示されるタブや、スマホでの検索結果ページに表示されるページタイトル横の指定です。</pre>
            <pre><link rel="icon" href="/favicon.ico" /></pre>
            <p>ただ、ルートディレクトリに“favicon.ico”という拡張子・ファイル名で画像を置いてあれば、特に記述がなくともクローラーがfavicon（ファビコン）と認識するようです。できれば各サイズに対応しておくこと。</p>
            <p>続いてスマホの場合（ショートカットを作った際に表示されるアイコン）は、以下のように記述します。「rel=”apple-touch-icon”」と記載されていますが、実際には“Android”でも認識します。180pxというのはRetina用iPhoneアプリアイコンのサイズです。</p>
            <pre><link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"></pre>
            <p>ただし、Androidのバージョンなどによってうまく表示できない場合は、以下の記述を追加して確認してみてください。（この場合のサイズは“192×192”となっています。）</p>
            <pre><link rel="icon" type="image/png" href="android-touch-icon.png" sizes="192x192"></pre>
            <p>気軽にチェックできる“Favicon checker”といったツールもある。</p>
        </section>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://webdesign-trends.net/entry/7251" <?php echo $targetBlank ?>>Webに関わるすべての人のためのメディア</a></cite>        
            <cite class="ly-cite"><a href="https://keywordfinder.jp/blog/seo/favicon/" <?php echo $targetBlank ?>>キーワードファインダーSEOブログ</a></cite>        
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>