<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
      <?php $navList = array("box-sizingを全体に使う", "html", "body", "p, liタグ", "pタグ", "img", "abbr", "address", "a", "dl,dt,dd","blockqoute", "強調系タグ", "sub,sup", " pre,code,kbd,samp", "figure", "svg", "table", "form", "その他"); ?>
        <?php include("../_partial/pages-title.php"); ?>
  
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
            <p>box-sizingは「要素の幅（width）と高さ（height）の中にpaddingとborderを含めるかどうか」という設定</p>
            <p>値をcontent-boxにすると、幅や余白を%指定したいときには不向き（親要素からはみ出てしまったりしやすい）</p>
            <p>値をborder-boxにして、borderとpaddingをwidthに含めることができるので幅と余白の%指定が楽になる。border-boxを指定するときは「*」を使って全ての要素に対してborder-boxを指定しておくと楽</p>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://saruwakakun.com/html-css/reference/box-sizing" <?php echo $targetBlank ?>>box-sizing:border-boxの使い方</a></cite>
<pre class="prettyprint">
*,
*::before,
*::after {
box-sizing: border-box;
}
</pre>
        </section>
        <!-- html -->
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
            <cite class="ly-cite"><a class="ly-cite_link" href="https://qiita.com/umashiba/items/8cb47825624c5cb043d6" <?php echo $targetBlank ?>>ベンダープレフィックス</a></cite>
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
        <section class="ly-section tocContent">
            <h2><?php echo $navList[3]; ?></h2>
            <p>p と li　が文章中で同じような見せ方で利用されることを基本として文字スタイルを合わせる。</p>
            <p>大きなコンテナの中でpやliを繰り返し使った時、最後のpやliの下のスペースが邪魔になることがある。ここではliは下のスペースを作らず、line-heightのみで、バランスを調整する。pは別途margin-bottomを追加する。</p>
            <p>またリストタグのlist-styleをどうしておくかについて、文章中のリストだけでなく、メニュー、パンくずリストなどでも使われるので、list-styleの設定をnoneにするかどうかはサイトの内容によって変えます。ここではdefaultのままで、いらない場合にはclassを追加するようにする。  list-style分のスペースを作るためにフォントサイズに比例して幅を変える</p>
            <p>p文章のフォントサイズとline-heightはよく迷う。読みやすいよう16pxを保ちたいが、幅が狭いデバイスだと一行の文字数が少なく、逆に読みにくい。line-heightについて、font-sizeが16pxなら文字同士の相互干渉が強くなるので、2くらい離させたい。</p>
<pre class="prettyprint">
p, li{
  letter-spacing: 0.05em;
  line-height: 2;
}
ul{
   padding-left: 1.8em;
 }
</pre>
        </section>
        <!-- p -->
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
            <h2><?php echo $navList[10]; ?></h2>
            <p>「BLOCKQUOTE」とは、引用・転載文であることを示すタグです。比較的長いテキストを段落ごと引用する際に使用されます。短いテキストの場合はblockquoteタグではなく、qタグを使用して引用・抜粋を行います。</p>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://nandemo-nobiru.com/2159/" <?php echo $targetBlank ?>>なんでものびるWEB</a></cite>
<pre class="prettyprint">
blockquote {
   margin: 0 0 1rem;
   background:$bg-light-gray;
   padding:16px;
 }
</pre>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[11]; ?></h2>
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
        <section class="ly-section tocContent">
            <h2><?php echo $navList[12]; ?></h2>
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
        <section class="ly-section tocContent">
            <h2><?php echo $navList[13]; ?></h2>
            <h3>pre</h3>
            <p>Preformatted Text（整形済テキスト）という意味で、入力したソースのまま表示することができます。不要な空欄、タブもそのまま表示されるので使用できません。特殊文字は表示できないので、記号を使ってエスケープする必要があります。半角スペースや改行をそのまま表示。プログラムのコードを表示する場合に使用。プログラムのコードを表示する場合は、codeと組み合わせて使用されます。</p>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://webtools.dounokouno.com/htmlescape/" <?php echo $targetBlank ?>>Web制作小物ツール</a></cite>
            <h3>code</h3>
            <p>Computer Codeの略。codeタグで囲んだ文字列がソースコードであることを示します。等幅フォントで表示される。改行やインデントなどはcodeでは反映されない（サイトによってはされると書いてあるようですが）。ソースコードの文字列を表示して見せるときに使います。defaultだとコードの途中で単語で改行されて読みにくいので、word-break: break-all;で文字で改行に変更</p>
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
        <section class="ly-section tocContent">
            <h2><?php echo $navList[14]; ?></h2>
            <p>figureフィギュアはHTML5から登場したタグで「自己完結するコンテンツ」を表します。その部分だけを抜き出しても意味が成り立つようなものに対して使います。図表やイラスト、写真などに対してよく使われる。無くても本文は成り立つが、あると嬉しい図表や、補足情報、説明を載せるときに使います。多くの場合、図表やイラスト、写真、コードなどにキャプション（注釈）を付けた形で使われます。figcaptionと合わせて使われることが多い</p>
<pre class="prettyprint">
 figure {
   margin: 0 0 1rem;
 }
</pre>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[15]; ?></h2>
            <p>svgタグ</p>
<pre class="prettyprint">
svg {
   overflow: hidden;
   vertical-align: middle;
 }
</pre>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[16]; ?></h2>
            <h3>table</h3>
            <p>border-collapseは隣り合ったテーブルセルの間隔を指定するプロパティ。collapse->隣接するボーダーラインを重ねあわせて表示するよう指定。テーブルで表を作るときにラインがきれいに収まるように。</p>
            <h3>caption</h3>
            <p>CAPTIONはテーブルのタイトルを指定するタグ。table開始タグの直後に1つだけ記述します。</p>
            <h3>th</h3>
            <p>inherit は CSS のキーワードで、要素のプロパティの計算値を親要素から取得するよう指定します。 CSS の一括指定 all を含め、すべての CSS プロパティに適用することができます。</p>
<pre class="prettyprint">
table {
  border-collapse: collapse;
}
caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}
th {
  text-align: inherit;
}
</pre>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[16]; ?></h2>
            <h3>LABEL</h3>
            <p>フォームの中でフォームの項目名と構成部品（チェックボックス、ラジオボタンなど）を関連付けるためのタグです。関連付けを行うことにより、ブラウザでラベル（もしくはラベルのアクセスキー）をクリックした際に、その構成部品をクリックしたのと同じ動作が可能になります。</p>
            <h3>outline</h3>
            <p>輪郭線のスタイルや色、太さをまとめて指定するプロパティです。input要素、textarea要素、select要素に使用すると、リンクやフォーム部分がフォーカス状態になった時の輪郭線を指定することができます。borderとは違い、outlineはボックスのサイズに影響しません。また、outline-topやoutline-leftのようなプロパティはなく、上下左右を個別に設定することはできません。</p>
            <h3>OPTGROUP</h3>
            <p>セレクトボックスの選択肢（OPTION～OPTION）をグループ化するタグ。</p>
            <h3>overflow: visible;</h3>
            <p>overflowは「要素のボックスからはみ出た部分をどう扱うか」を指定します。visible->初期値。はみ出た部分が、はみ出たままの状態で表示される場合あり。button,inputはテキストを折り返さない</p>
            <h3>text-transform: none;</h3>
            <p>テキストにおける英数字の大文字、小文字の表示を指定するプロパティです。button,selectは値をnone（初期値）にして変換を行わない。</p>
            <h3>word-wrap: normal;</h3>
            <p>word-wrapプロパティは、W3Cで審議中の仕様をInternet Explorerが独自に採用したもの。なので削除。</p>
            <h3>type属性について</h3>
            <p>
              type属性は、フォーム部品の種類を指定する際に使用します。input要素は、type属性にどのような値を指定するかによって、 一行テキストボックス・チェックボックス・ラジオボタン・送信ボタン・リセットボタン等、 フォーム部品の種類を指定し分けることができます。 type属性の初期値は、type="text"（一行テキストボックス）です。<br>
              type="submit"送信ボタンを作成する<br>type="reset"リセットボタンを作成する<br>type="button"汎用ボタンを作成する<br>
              この３つのtypeの形状を、-webkitでボタンにするということ。
            </p>
            <h3>appearanceプロパティ</h3>
            <p>appearanceプロパティとは、OS（オペレーティングシステム）によって異なる標準的な部品（ユーザーインタフェース）のスタイルを解除するためのプロパティです。主にinputタグに対する既定の装飾を解除することに使用できます。</p>
            <h3>:not</h3>
            <p>「指定したもの以外」を指定する時に使う擬似クラス。</p>
            <h3>:disabled</h3>
            <p>:disabled 疑似クラスセレクターは、無効な要素を表します。無効な要素とは、アクティブ化（選択、クリック、入力など）したりフォーカスを得たりすることができないものです。要素には有効な状態、つまりアクティブ化したりフォーカスを得たりすることができる状態もあります。</p>
            <p>ex:input type="text" placeholder="名前" disabled</p>
            <h3>:not(:disable)</h3>
            <p>inputが無効な要素ではないものは、カーソルをポインターにする、ということ。</p>
            <h3>type="radio" type="checkbox" box-sizing: border-box;</h3>
            <p>ラジオボタンとチェックボックスのborderとpaddingをwidthに含めること</p>
            <p>input[type="date"], inputフォームでカレンダーから日付を選べる。<br>
            input[type="time"], inputフォームで時刻を選択。<br>
            timeタグはコンピュータやブラウザが日付や時刻を理解できるようにするのを目的に、グレゴリオ暦による時刻で正確に示す際に使用します。日時を記述するのに必ずtimeタグを使用しなくてはならないわけではないです。datetime属性は日付や時刻を指定します。datetime属性を省略する場合には、timeタグの中に記述します。<br> 
            input[type="datetime-local"], HTML5 で使えるようになった。ユーザーが簡単に日付と時刻、つまり年、月、日と時、分を入力することができる入力コントロールを生成します。ユーザーのローカルタイムゾーンが使用されます。<br>
            input[type="month"] ユーザーが年と月を入力できるようにする入力フィールドを作成し、年と月を簡単に入力できるようにします。<br>
            date,time,datetime-local,monthのレイアウトをlistbox;にするということ</p>
            <h3>textarea</h3>
            <p>overflow: auto;要素の内容が多すぎてブロック整形コンテキストに収まらない場合にどうするか。auto->ユーザーエージェントに依存。 <br>resize: vertical;ユーザーが要素の高さのリサイズできる</p>
            <h3>fieldset</h3>
            <p>formタグで定義するフォームの入力項目をグループ化するためのタグです。グループ化を行うことにより、グループの間をtabキーで簡単に移動することが可能になります。</p>
            <h3>legend</h3>
            <p>fieldsetタグでグループ化されたフォームにlegendでタイトルを付けることが可能です。</p>
<pre class="prettyprint">
label {
  display: inline-block;
  margin-bottom: 0.5rem;
}
button {
  border-radius: 0;
}
button:focus {
  outline: 1px dotted;
  outline: 1px auto -webkit-focus-ring-color;
}
input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}
button,
 [type="button"],
 [type="reset"],
 [type="submit"] {
   -webkit-appearance: button;
}
button:not(:disabled),
 [type="button"]:not(:disabled),
 [type="reset"]:not(:disabled),
 [type="submit"]:not(:disabled) {
   cursor: pointer;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}
 
input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}
</pre>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[17]; ?></h2>
            <h3>progress</h3>
            <p>タスクの進捗状況をプログレスバーで表示。</p>
            <h3>type="number"</h3>
            <p>数値の入力欄を作成<br>inner-spin-button:数値を上下させる右にあるボタン</p>
            <h3>type="search"</h3>
            <p>検索テキスト入力欄を作成<br>outline-offsetプロパティは、アウトラインのオフセット値を指定する際に使用します。アウトラインは、デフォルトではボーダーのすぐ外側に描かれますが、 outline-offsetプロパティを使用すると、ボーダーから離してオフセット表示することができます。-2pxなので内側にボーダーを表示する。</p>
            <h3>appearance: none; </h3>
            <p>ブラウザ別に設定されているデフォルトスタイルを無効にできる。</p>
            <h3>output</h3>
            <p>outputは、サイトやアプリが計算結果やユーザー操作の結果を挿入することができるコンテナー要素。</p>
            <h3>summary</h3>
            <p>HTML5から追加された要素。キャプションで説明を開閉表示できるdetails要素によって設置された「ディスクロージャー・ウィジェット」のサマリーを指定するために使用するタグ</p>
            <h3>template</h3>
            <p>テンプレの元のデータを非表示に。</p>
            <h3>[hidden]</h3>
            <p>input の属性値がhiddenの場合、非表示。</p>
<pre class="prettyprint">
progress {
  vertical-align: baseline;
}
[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}
[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}
output {
  display: inline-block;
}
summary {
  display: list-item;
  cursor: pointer;
}
template {
  display: none;
}
[hidden] {
  display: none !important;
}
</pre>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
