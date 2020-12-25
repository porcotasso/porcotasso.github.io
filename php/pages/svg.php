<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("SVGファイルとは", "イラレからの書き出し設定", "書き出したコードについて", "SVG表示方法", "SVGスプライトとは", "SVGスプライトの使い方", "SVGスプライトファイル作成時のコツ"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
			<h2><?php echo $navList[0]; ?></h2>
            <p>SVGとはScalable Vector Graphicsの略でXMLに基づくマークアップ言語でもある二次元ベクターイメージの画像形式です。</p>
        </section>
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
			<h2><?php echo $navList[2]; ?></h2>
            <h3>id="Layer_1"</h3>
            <p>イラレ編集時のレイヤー名です。一つのレイヤーの場合はsvgタグに記載され複数のレイヤーの場合はgタグに記載されます。</p>
            <h3>viewBox</h3>
            <p>viewBoxはsvgタグの中に記述する属性です。viewBoxを指定することで、描画エリアのアスペクト比、およびその中の要素の相対的なサイズを決定します。viewBoxで指定できる値は4つです。viewBox="x, y, width, height"x,yは左上からみたx座標とy座標の位置、そしてwidth,heightは描画エリアの幅(座標値)と高さ(座標値)です。4つの値は、カンマもしくは半角スペースで区切って使うことができます。</p>
            <p>さらに削除できる属性は削除します。<br>
                <code>x="0"</code>と<code>y="0"</code>はSVGコンテナー<span>（アートボード）</span>のX/Y座標を表しますが、デフォルト値が<code>0</code>なので削除してよい。あと、<code>version="1.1"</code>と<code>xml:space="preserve"</code>は、“<q cite="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/xml:space">SVG 2以降非推奨</q>”とのことなので、今のうちから削除しても良いです。</p>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[3]; ?></h2>
            <p>SVGファイルをHTMLで表示する方法は以下の6種類。</p>
            <h3>img要素で設置</h3>
            <p>他のフォーマットの画像と同じようにimg要素で画像を表示</p>
<pre class="prettyprint">
<img src="logomark.svg" width="32" height="32">
</pre>
            <h3>object要素で設置</h3>
            <p>object要素で画像を表示</p>
<pre class="prettyprint">
<object type="image/svg+xml" data="logomark.svg" width="256" height="256"></object>
</pre>
            <h3>背景画像として表示する</h3>
            <p>CSSのbackgroundプロパティを使って背景画像として表示</p>
<pre class="prettyprint">
<div style="width:32px; height:32px; background-image:url(logomark.svg); background-size:100%;"></div>
</pre>
            <h3>svg要素を直接書き込む</h3>
            <p>SVGファイル内のsvg要素をHTMLにコピペして画像を表示</p>
<pre class="prettyprint">
<svg id="logomark" x="0px" y="0px" width="155px" height="155px" viewBox="0 0 155 155" enable-background="new 0 0 155 155">
  <polygon id="logomark-polyline" fill-rule="evenodd" clip-rule="evenodd" fill="#0CB9C7" points="128.25,26 147.19,96.69 95.44,148.44 24.75,129.5 5.81,58.81 57.56,7.06 "/>
</svg>
</pre>
            <h3>file_get_contentsを使う</h3>
            <p>php file_get_contents を使ってsvgのmarkup language を読み込む。これはSVGスプライトとして使える。</p>
<pre class="prettyprint">
$str = file_get_contents('/aaa.png'); echo $str;
</pre>
            <h3>use要素で設置する</h3>
            <p>SVGのuse要素を使ってSVGファイルの任意のid属性を持つ要素だけ読み込み</p>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[4]; ?></h2>
            <p>複数SVGオブジェクトの記述を１つのファイルの中にまとめる。任意の場所で任意のSVGオブジェクトを呼び出す。</p>
<pre class="prettyprint">
<svg aria-hidden="true" style="position: absolute; overflow: hidden;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <symbol id="name01">
            <path></path>
        </symbol>
        <symbol id="name02">
            <path></path>
        </symbol>
    </defs>
</svg>
</pre>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[5]; ?></h2>
            <h3>1.SVG読み込み</h3>
            <p>bodyの下にsvgを読み込むコードを書く</p>
<pre class="prettyprint">
< ?php include_once('/'); ? >
</pre>
            <h3>2.svgタグを書く</h3>
            <p>svgを表示したい場所に記述。重要な点として、ここにclassとviewBoxを追加して、cssからサイズを調整すること。viewBoxがここにないとcssが動かない。</p>
<pre class="prettyprint">
<svg class="svg-logo" viewBox="0 0 247 54">
    <use xlink:href = "#name01"></use>
</svg>
</pre>
            <h3>3.スタイル追加</h3>
            <p>svgにもuseにもclassをつけられる</p>
<pre class="prettyprint">
<svg class="style">
    <use xlink:href = "#name01" class="style01"></use>
    <use xlink:href = "#name02" class="style02"></use>
</svg>
</pre>
            <h3>4.スタイルの種類</h3>
            <p>追加できるスタイルの種類</p>
<pre class="prettyprint">
.style{
    fill: transparent; <!--  わかりやすくするために塗りを透明にしています。  -->
    stroke: pink; <!--  線の色を指定します。  -->
    stroke-width: 5px; <!--  線の太さを指定します。  -->
    stroke-opacity: .5; <!--  線の透明度を指定します。  -->
    stroke-dasharray: 15 5; <!--  線の間隔を指定します。点線や破線といったパターンにすることが可能です。  -->
    stroke-linecap: パスの端の部分の形状を指定
    stroke-linejoin パスのつなぎ目の部分の形状を指定
    stroke-dashoffset 線の始まりの位置を指定
}
</pre>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[6]; ?></h2>
            <h3>必要なファイルは２つ</h3>
            <p>必要なファイルは２つあります。１つは、サイトに使用する.svgファイル。２つ目は画像内容を把握してpathを書き出す為のファイルでこちらはサイトには使わない。</p>
            <p>サイトに使用するファイルでは、イラレで編集する為のコードを削除したり細かい設定変更をしているので、イラレで新たにこのファイル全体を上書きすることなどはせず、コードの部分部分を必要に応じて、編集する。例えば新たにアイコンが追加されたら、symbolタグをそのファイルに追加していく。</p>
            <p>２つ目のファイルは、実際のデータをイラレで開いて把握し、pathコードを作るためのファイル。アイコンごとにアートボードを作成してポジションの基準を常にx=0, y= 0で書き出すようにする。</p>
            <p>１つ目のファイルでは、全ての画像のポジションをx=0, y= 0にした方が、コード編集が楽になる。データ的には複数の画像が重なっている状態だが、このファイルでイメージ内容を把握することはないので問題ない。</p>
        </section>
        
            <cite class="ly-cite"><a class="ly-cite_link" href="https://www.e-webseisaku.com/column/web/6544/" <?php echo $targetBlank ?>>SVGスプライトの利用② 「使い方」</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://css-tricks.com/using-svg/" <?php echo $targetBlank ?>>css tricks</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://lopan.jp/about-svg/" <?php echo $targetBlank ?>>SVGでやることのまとめ</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://lopan.jp/about-svg-sprites/" <?php echo $targetBlank ?>>使いまわせるSVG</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://blog.webico.work/lottie-sample" <?php echo $targetBlank ?>>Lottieでウェブアニメーションを作ってみた　SVG+JSのウェブアニメーション</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
