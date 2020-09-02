<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("SVGファイルとは", "イラレからの書き出し設定", "書き出したコードについて", "SVG表示方法"); ?>
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
        <section class="ly-section" id="0">
			<h2><?php echo $navList[0]; ?></h2>
            <p>SVGとはScalable Vector Graphicsの略でXMLに基づくマークアップ言語でもある二次元ベクターイメージの画像形式です。</p>
        </section>
        <section class="ly-section" id="1">
			<h2><?php echo $navList[1]; ?></h2>
            <p>イラレから書き出す際の設定について</p>
            <h3>SVG プロファイル</h3>
            <p>いろいろ規格があるけど、現在、W3Cで勧告されているいちばん新しい規格「SVG 1.1」を選択。</p>
            <h3>CSS プロパティ</h3>
            <p>「スタイル要素」を選択。「スタイル属性 (実体参照)」がいちばん“レンダリング速度が速くなりファイルサイズも小さくなる。またHTML/CSSに馴染みのある人には「スタイル要素」がいちばん読みやすい。</p>
            <h3>小数点以下の桁数</h3>
            <p>アンカーポイントやパスラインの座標位置の厳密度を表します。「3」と入力。小さなアイコンなので細かいニュアンスもちゃんと描画されるように、最適とされる「3」を指定します。</p>
            <h3>エンコーディング</h3>
            <p>HTMLのcharsetと同じ「Unicode (UTF-8)」にする。</p>
            <h3>tspanエレメントの出力を制御</h3>
            <p>チェックがない場合、文字の詰め具合カーニングが調整されてるテキストに対して一文字ずつtspan要素で括ってx属性で左右に動かしてカーニングを再現する。ソースコードがものすごく読みづらくなっちゃいます。なので、テキストがある場合にはチェックした方が良いです。</p>
            <h3>パス上テキストにtextPathエレメントを使用</h3>
            <p>パスラインに沿わせたテキストがある場合に、textPath要素を使って、ちゃんとパスラインに沿ったテキストとしてデータを書き出してくれます。チェックしてないと、一文字ずつtext要素で括って、x/y属性やrotate属性を駆使して、あたかもパスラインに沿ってるかのように配置した状態で書き出されます。なので、パスラインに沿ったテキストがある場合には、チェックした方が良いです。</p>
            <h3>レスポンシブ</h3>
            <p>チェックするとsvg要素からwidth属性とheight属性が出力されない。width/height属性があってもCSSでサイズを変更することはできるので、念のためwidth/height属性を残したほうがよいのでは。</p>
            <h3>スライスデータを含める</h3>
            <p>スライス機能を利用している場合に、その情報がmetadata要素として出力されます。利用してなくても、いろんなエンティティ宣言が書き出されてしまうので、Webサイトで使う分には、チェックすることはなさそうです。</p>
            <h3>XMP を含める</h3>
            <p>イラレで作成・編集されたことを記録するさまざまな情報（メタデータ）が書き出されます。とても長いので、Webサイトで使う分には、チェックすることはありません。</p>
        </section>
        <section class="ly-section" id="2">
			<h2><?php echo $navList[2]; ?></h2>
            <h3>id="Layer_1"</h3>
            <p>イラレ編集時のレイヤー名です。一つのレイヤーの場合はsvgタグに記載され複数のレイヤーの場合はgタグに記載されます。</p>
            <h3>viewBox</h3>
            <p>viewBoxはsvgタグの中に記述する属性です。viewBoxを指定することで、描画エリアのアスペクト比、およびその中の要素の相対的なサイズを決定します。viewBoxで指定できる値は4つです。viewBox="x, y, width, height"x,yは左上からみたx座標とy座標の位置、そしてwidth,heightは描画エリアの幅(座標値)と高さ(座標値)です。4つの値は、カンマもしくは半角スペースで区切って使うことができます。</p>
            <p>さらに削除できる属性は削除します。<br>
                <code>x="0"</code>と<code>y="0"</code>はSVGコンテナー<span>（アートボード）</span>のX/Y座標を表しますが、デフォルト値が<code>0</code>なので削除してよい。あと、<code>version="1.1"</code>と<code>xml:space="preserve"</code>は、“<q cite="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/xml:space">SVG 2以降非推奨</q>”とのことなので、今のうちから削除しても良いです。</p>
        </section>
        <section class="ly-section" id="3">
			<h2><?php echo $navList[3]; ?></h2>
            <p>SVGファイルをHTMLで表示する方法は以下の4種類。</p>
            <h3>img/object要素で設置</h3>
            <p>他のフォーマットの画像と同じようにimg要素で画像を表示</p>
            <h3>背景画像として表示する</h3>
            <p>CSSのbackgroundプロパティを使って背景画像として表示</p>
            <h3>svg要素を直接書き込む</h3>
            <p>SVGファイル内のsvg要素をHTMLにコピペして画像を表示</p>
            <h3>use要素で設置する</h3>
            <p>SVGのuse要素を使ってSVGファイルの任意のid属性を持つ要素だけ読み込み</p>
            <cite class="ly-cite"><a href="https://lopan.jp/about-svg/" <?php echo $targetBlank ?>>SVGでやることのまとめ</a></cite>
            <cite class="ly-cite"><a href="https://lopan.jp/about-svg-sprites/" <?php echo $targetBlank ?>>使いまわせるSVG</a></cite>
            <cite class="ly-cite"><a href="https://blog.webico.work/lottie-sample" <?php echo $targetBlank ?>>Lottieでウェブアニメーションを作ってみた　SVG+JSのウェブアニメーション</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
