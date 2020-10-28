<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
			<?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("box-sizingを全体に使う", "html", "body", "homebrewでgitをインストール", "anyenvをインストール", "nodenvをインストール"); ?>
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
            <p>box-sizingは「要素の幅（width）と高さ（height）の中にpaddingとborderを含めるかどうか」という設定</p>
            <p>値をcontent-boxにすると、幅や余白を%指定したいときには不向き（親要素からはみ出てしまったりしやすい）</p>
            <p>値をborder-boxにして、borderとpaddingをwidthに含めることができるので幅と余白の%指定が楽になる。border-boxを指定するときは「*」を使って全ての要素に対してborder-boxを指定しておくと楽</p>
            <cite class="ly-cite"><a href="https://saruwakakun.com/html-css/reference/box-sizing" <?php echo $targetBlank ?>>box-sizing:border-boxの使い方</a></cite>
<pre class="prettyprint">
*,
*::before,
*::after {
box-sizing: border-box;
}
</pre>
        </section>
        <!-- html -->
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
            <p>htmlはルートとなるトップレベル要素なのでルート要素と呼ばれる。</p>
            <p><code>-webkit-text-size-adjust: 100%;</code>スマホを横向きにすると文字サイズが勝手に大きくなることがあるのですが、それを防ぐことができます。</p>
            <p><code>-webkit-tap-highlight-color: rgba(0, 0, 0, 0);</code>スマートフォンやタブレットなどのタッチデバイスでタップした時のハイライトする色を設定。ブラウザの方で親切でやってくれているものではあるのですが、そもそもボタンの方にタップされたら凹ませるなどのデザインをしている場合は、それだけでフィードバックが事足りているのでかえってハイライトが邪魔だったりします。 なので、透明にして無効にする。</p>
            <code>font-size: 62.5%;</code>
            <p>基本的にブラウザではルート要素のフォントサイズが16px。いろんなデバイス、画面サイズでサイトを表示することを考えた時、フォントサイズの単位はremを使ったほうがいい。なので、ブラウザ設定の16pxに62.5%をかけて、ルート要素のフォントサイズをまず10pxにする。数値計算がわかりやすいように10pxにする。</p>        
<pre class="prettyprint">
-webkit-text-size-adjust: 100%;
-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
font-size: 62.5%;
</pre>
        </section>
        <!-- body -->
        <section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
            <h3>font-family</h3>
            <p><code>font-family:"游ゴシック Medium",YuGothic,YuGothicM,"Hiragino Kaku Gothic ProN","Hiragino Kaku Gothic Pro",メイリオ,Meiryo,sans-serif;</code></p>
            <h3>基本のフォントサイズ</h3>
            <p>基本のフォントサイズをpcモバイルとも16pxにする。chrome対策にbodyの単位はemに設定</p>
            <p><code>font-size: 1.6em;</code></p>
            <h3>基本の文字間</h3>
            <p>フォントサイズを基準にするようにemを使う。</p>
            <p><code>letter-spacing: 0.04em;</code></p>
            <h3>基本の文字の太さ</h3>
            <p>フォントの基本の太さのサイズをnormalにする。<br>
            normal-標準の太さを設定（数値指定の"400"に該当）<br>
            bold-太字を設定（数値指定の"700"に該当）</p>
            <p><code>font-weight: normal;</code></p>
            <h3>基本の行間</h3>
            <p>あらゆる状況で問題がないように、無難な数値にしておく</p>
            <p><code>line-height: 1.5;</code></p>
            <h3>改行の設定</h3>
            <p>単語の区切りで改行するが、場合によっては単語の途中でも改行。禁則処理：可能な限り保たれる！コンテナ（テキストの表示領域）幅より長い英単語：強制的に折り返される 記号の連続の折り返し：対応　テーブル内のセルにかけてもちゃんと効く。行内で適切に改行できる場所が他にない場合に限って単語の途中でも改行するようにします。</p>
            <p><code>word-break:break-word;</code></p>
            <h3>アンチエイリアス</h3>
            <p>コンピュータでの文字表示はピクセル単位より細かく描画することができません。このため、物体の輪郭にジャギーと呼ばれるギザギザが発生してしまいます。このジャギーを軽減し少しでも目立たなくするために、文字の輪郭を背景となじませるように、色を滑らかに変化させることをアンチエイリアスといい、その処理をアンチエイリアシングといいます。黒い文字を表現する場合でも、黒だけではギザギザのジャギーがでてしまうので文字の黒と背景との中間色も境界線に配置し滑らかに見せることができるのです。font-smoothingではこのアンチエイリアスをコントロールするCSSプロパティになります。</p>
            <h4>Webkit系（Chrome, Safari, Microsoft Edge, Opera）</h4>
            <cite class="ly-cite"><a href="https://qiita.com/umashiba/items/8cb47825624c5cb043d6" <?php echo $targetBlank ?>>ベンダープレフィックス</a></cite>
            <p><code>-webkit-font-smoothing: antialiased; //なめらか</code></p>
            <h4>Firefox</h4>
            <p><code>-moz-osx-font-smoothing: grayscale; //なめらか</code></p>
            <h3>その他の基本の設定</h3>
            <p><code>color: $font-black;<br>background-color: $bg-white;<br>text-align: left;</code></p>
<pre class="prettyprint">
body {
  margin: 0;
  font-family:"游ゴシック Medium",YuGothic,YuGothicM,"Hiragino Kaku Gothic ProN","Hiragino Kaku Gothic Pro",メイリオ,Meiryo,sans-serif;
  font-size: 1.6em; 
  font-weight: normal;
  -webkit-font-smoothing: antialiased;
  line-height: 1.5;
  color: $font-black;
  letter-spacing: 0.04em;
  text-align: left;
  background-color: $bg-white;
  word-break:break-word;
}
</pre>
        </section>
        <section class="ly-section">
            <h2>Pタグ</h2>
            <p>pタグは「Paragraph」の略です。長いひとかたまりの文章だけでなく、テキストを使ういろいろな場所で使われるので、用途ごとに対応できるスタイルの指定が必要になります。<br>このサイトでの考え方では、複数行にわたる文章にpタグを使用して、長文が読みやすいスタイルを指定するのを優先します。具体的にはline-heightを1.8~2 letter-space0.05em など通常よりスペースを開けています。フォントサイズは長文が読みやすいサイズを目的とします。mobileで14px、PCで16pxあたりを基本に考えています。</p><p>ラベルなどで使う際には余計なスタイルをリセットして使用します。</p>
<pre class="prettyprint">
p{
    margin: 0 0 2rem;
}
</pre>
        </section>
        <section class="ly-section">
            <h2>aタグ</h2>
<pre class="prettyprint">
a{
    outline: 0;
    cursor: pointer;
    text-decoration:none;
    color: #222;
}
</pre>
        </section>
        <section class="ly-section">
            <h2>リストタグ</h2>
            <p>文章中のリストだけでなく、メニュー、パンくずリストなどでも使われるので、list-styleの設定をnoneにするかどうか、サイトの内容によって変えます。</p>
        </section>
        <section class="ly-section">
            <h2>モバイルの左右幅。ガターについて</h2>
            <p>機種によってモバイルの幅が違い、狭いものと広いものの差は、かなり大きいので、端の幅はピクセル固定せずに425px 20px 320px 16pxのように比率で変えたほうが見やすいと考えています。</p>
        </section>
        <section class="ly-section">
            <h2>preタグとcodeタグ</h2>
            <h3>pre</h3>
            <p>Preformatted Text（整形済テキスト）という意味で、入力したソースのまま表示することができます。不要な空欄、タブもそのまま表示されるので使用できません。特殊文字は表示できないので、記号を使ってエスケープする必要があります。</p>
            <cite class="ly-cite"><a href="https://webtools.dounokouno.com/htmlescape/" <?php echo $targetBlank ?>>Web制作小物ツール</a></cite>
            <h3>code</h3>
            <p>Computer Codeの略。codeタグで囲んだ文字列がソースコードであることを示します。等幅フォントで表示される。改行やインデントなどはcodeでは反映されない（サイトによってはされると書いてあるようですが）。</p>
        </section>
        <section>
            <h2>timeタグ</h2>
            <p>timeタグはコンピュータやブラウザが日付や時刻を理解できるようにするのを目的に、グレゴリオ暦による時刻で正確に示す際に使用します。日時を記述するのに必ずtimeタグを使用しなくてはならないわけではないです。datetime属性は日付や時刻を指定します。datetime属性を省略する場合には、timeタグの中に記述します。</p>
        </section>
        <section>
            <h2>blockquote・q・citeタグ</h2>
            <cite class="ly-cite"><a href="https://nandemo-nobiru.com/2159/" <?php echo $targetBlank ?>>なんでものびるWEB</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
