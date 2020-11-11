<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
			<?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("box-sizingを全体に使う", "html", "body", "p, liタグ", "pタグ", "img", "abbr", "address", "a", "dl,dt,dd","blockqoute", "強調系タグ", "sub,sup", " pre,code,kbd,samp", "figure", "svg"); ?>
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
            <p><code>-webkit-text-size-adjust: 100%;</code></p>
            <p>スマホを横向きにすると文字サイズが勝手に大きくなることがあるのですが、それを防ぐことができます。</p>
            <p><code>-webkit-tap-highlight-color: rgba(0, 0, 0, 0);</code></p>
            <p>スマートフォンやタブレットなどのタッチデバイスでタップした時のハイライトする色を設定。ブラウザの方で親切でやってくれているものではあるのですが、そもそもボタンの方にタップされたら凹ませるなどのデザインをしている場合は、それだけでフィードバックが事足りているのでかえってハイライトが邪魔だったりします。 なので、透明にして無効にする。</p>
            <p><code>font-size: 62.5%;</code></p>
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
        <!-- p li -->
        <section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
            <p>p と li　が文章中で同じような見せ方で利用されることを基本として文字スタイルを合わせる。</p>
            <p>大きなコンテナの中でpやliを繰り返し使った時、最後のpやliの下のスペースが邪魔になることがある。ここではliは下のスペースを作らず、line-heightのみで、バランスを調整する。pは別途margin-bottomを追加する。</p>
            <p>またリストタグのlist-styleをどうしておくかについて、文章中のリストだけでなく、メニュー、パンくずリストなどでも使われるので、list-styleの設定をnoneにするかどうかはサイトの内容によって変えます。ここではdefaultのままで、いらない場合にはclassを追加するようにする。  list-style分のスペースを作るためにフォントサイズに比例して幅を変える</p>
<pre class="prettyprint">
p, li{
  letter-spacing: 0.05em;
  line-height: 1.9;
}
ul{
   padding-left: 1.8em;
 }
</pre>
        </section>
        <!-- p -->
        <section class="ly-section" id="4">
            <h2><?php echo $navList[4]; ?></h2>
            <p>pタグは「Paragraph」の略です。長いひとかたまりの文章だけでなく、テキストを使ういろいろな場所で使われるので、用途ごとに対応できるスタイルの指定が必要になります。<br>このサイトでの考え方では、複数行にわたる文章にpタグを使用して、長文が読みやすいスタイルを指定するのを優先します。具体的にはline-heightを1.8~2 letter-space0.05em など通常よりスペースを開けています。フォントサイズは長文が読みやすいサイズを目的とします。mobileで14px、PCで16pxあたり？を基本に考えています。</p>
            <p>listなどと一緒にmargin-bottomを追加します。listの中のlistにはmargin-bottom を使いません。</p>
            <p>ラベルなどで使う際には余計なスタイルをリセットして使用します。</p>
<pre class="prettyprint">
p,
 ol,
 ul,
 dl {
   margin-top: 0;
   margin-bottom: 2rem;
 }
</pre>
        </section>
        <!-- img -->
        <section class="ly-section" id="5">
            <h2><?php echo $navList[5]; ?></h2>
            <p>経験上、画面幅を超えて表示させたいことは基本なかったので、先にmax-width: 100%;を追加しておく。そのほかの設定はbootstrap-rebootから</p>
<pre class="prettyprint">
img{
    vertical-align: middle;
    border-style: none;
    max-width: 100%;
    height: auto;
}
</pre>
        </section>
        <!-- abbr -->
        <section class="ly-section" id="6">
            <h2><?php echo $navList[6]; ?></h2>
            <p>「ABBR」とは、「abbreviation」の略で、略語を示すタグです。例えばWWW（World Wide Web）やInc.（incorporated）、HTTP（HyperText Transfer Protocol）、HTML(Hypertext Markup Language)、XML(Extensible Markup Language)、Ltd.（Limited）などの言葉を略す際に使用されます。
同様の意味を持つタグに <code>acronym</code> があり、LAN(Local Area Network)やSOHO(Small Office Home Office)など、略語が頭字語（省略される各単語の頭文字から成るもの）である場合に使用します。
なお、title属性を指定することで、省略する前の言葉を示すことが可能です。</p>
<pre class="prettyprint"><p><abbr title="World Wide Web">WWW</abbr></p></pre>
<p>abbr[data-original-title]のツールチップ用なのでいらないかも？なので削除、cursor: help;　はホバー時のマウスカーソルの形状を？マークにする。text-decoration-skip-ink: none;は上線や下線が文字のアセンダーやディセンダーを通過するときにどのように引くのかを指定。noneはgやhでも気にせずそのまま上に線を引く。</p>

<pre class="prettyprint">
abbr[title]{
   text-decoration: underline;
   -webkit-text-decoration: underline dotted;
   text-decoration: underline dotted;
   cursor: help;
   border-bottom: 0;
   -webkit-text-decoration-skip-ink: none;
   text-decoration-skip-ink: none;
 }
</pre>
        </section>
        <!-- address -->
        <section class="ly-section" id="7">
            <h2><?php echo $navList[7]; ?></h2>
            <p>addressタグはページとサイトに書いてある連絡先情報を示すときに使います。作者の名前、メールアドレス、住所、電話番号、ファックス番号、フォームへのリンクなど</p>
<pre class="prettyprint">
address {
   margin-bottom: 1rem;
   font-style: normal;
   line-height: inherit;
 }
</pre>
        </section>
        <section class="ly-section" id="8">
            <h2><?php echo $navList[8]; ?></h2>
            <p>aタグでhrefがないものは、スタイル省略</p>
<pre class="prettyprint">
a{
    color: $link-blue;
    text-decoration: none;
    background-color: transparent;
}
a:hover {
    color: $hover-blue;
    text-decoration: none;
}
a:not([href]) {
   color: inherit;
   text-decoration: none;
 }
 
 a:not([href]):hover {
   color: inherit;
   text-decoration: none;
 }
</pre>
        </section>
        <section class="ly-section" id="9">
            <h2><?php echo $navList[9]; ?></h2>
            <p>dl要素はdt要素（用語）,dd要素（その用語に対する説明）をともなう記述型リスト。</p>
<pre class="prettyprint">
dt {
   font-weight: bold;
 }
 dd {
   margin-bottom: .5rem;
   margin-left: 0;
 }
</pre>
        </section>
        <section class="ly-section" id="10">
            <h2><?php echo $navList[10]; ?></h2>
            <p>「BLOCKQUOTE」とは、引用・転載文であることを示すタグです。比較的長いテキストを段落ごと引用する際に使用されます。短いテキストの場合はblockquoteタグではなく、qタグを使用して引用・抜粋を行います。</p>
<pre class="prettyprint">
blockquote {
   margin: 0 0 1rem;
   background:$bg-light-gray;
   padding:16px;
 }
</pre>
        </section>
        <section class="ly-section" id="12">
            <h2><?php echo $navList[12]; ?></h2>
            <p>強調系タグ</p>
<pre class="prettyprint">
em,
 mark,
 b,
 strong {
   font-weight: bold;
 }
</pre>
        </section>
        <section class="ly-section" id="13">
            <h2><?php echo $navList[13]; ?></h2>
            <p>「SUB」とは、「Subscript」の略で下付き文字で表示するタグです。化学記号を表す際などに便利です。「SUP」とは、「Superscript」の略で上付き文字で表示するタグです。乗算を表す際などに便利sub、supで指定された上付き文字と下付き文字は、通常の文字サイズよりも少し小さいサイズで表示されます。</p>
<pre class="prettyprint">
sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}
sub {
    bottom: -.25em;
}
sup {
    top: -.5em;
}
</pre>
        </section>
        <section class="ly-section" id="14">
            <h2><?php echo $navList[14]; ?></h2>
            <p>preタグは、半角スペースや改行をそのまま表示。プログラムのコードを表示する場合に使用。
プログラムのコードを表示する場合は、codeと組み合わせて使用されます。</p>
<p>codeコードタグは、ソースコードの文字列を表示して見せるときに使います。defaultだとコードの途中で単語で改行されて読みにくいので、word-break: break-all;で文字で改行に変更</p>
<p>kbdキーボードタグは、ユーザーによる入力（キーボード入力や音声入力など）を表します。kbdは「keyboard」の略です。</p>
<p>sampサンプルタグは、プログラムやコンピューターからの出力内容を表すために使います。</p>
<pre class="prettyprint">
pre,
 code,
 kbd,
 samp {
   font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
   font-size: 1em;
 }
 
 pre {
   margin-top: 3rems;
   margin-bottom: 3rem;
   overflow: auto;
 }
 code{
   word-break: break-all;
   background: $bg-light-gray;
   padding: 2px 4px;
   margin: 0 4px;
 }
</pre>
        </section>
        <section class="ly-section" id="15">
            <h2><?php echo $navList[15]; ?></h2>
            <p><figure>フィギュアはHTML5から登場したタグで「自己完結するコンテンツ」を表します。その部分だけを抜き出しても意味が成り立つようなものに対して使います。図表やイラスト、写真などに対してよく使われる。無くても本文は成り立つが、あると嬉しい図表や、補足情報、説明を載せるときに使います。多くの場合、図表やイラスト、写真、コードなどにキャプション（注釈）を付けた形で使われます。figcaptionと合わせて使われることが多い</p>
<pre class="prettyprint">
 figure {
   margin: 0 0 1rem;
 }
</pre>
        </section>
        <section class="ly-section" id="16">
            <h2><?php echo $navList[16]; ?></h2>
            <p><figure>svgタグ</p>
<pre class="prettyprint">
svg {
   overflow: hidden;
   vertical-align: middle;
 }
</pre>
        </section>




        <section class="ly-section">
            <h2>リストタグのlist-styleクラス作る</h2>
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
