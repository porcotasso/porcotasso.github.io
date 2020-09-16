<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
			<?php if (file_exists($filename)) { ?>
				<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
			<?php } ?>
            <p><?php echo $lead ?></p>  
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("Nodeとは", "主なノードの種類", "属性ノード", "HTMLコレクション", "Nodelist", "要素の探し方"); ?>
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
            <p>DOMでは文書を木構造(tree)としてとらえ、枝分かれの部分や枝の先端をノード(node)と呼びます。タグやその中の属性、テキストがそれぞれノードになります。ノードとは各要素(HTMLではエレメントやタグという)自体のことを表す。特定のノードを基準としたときに、その上にあるノードを「親:parent」ノードと表現し、その下にあるノードを「子:childまたはchildren」ノードと表現する。また同一階層にあるノードのことを「兄弟姉妹:siblings」ノードと表現する。例えば「そのタグの子ノード全体を取得して、その親ノードから削除する」のような使い方をする。 </p>
            <h3>DOMとは</h3>
            <p>Document Object Model の略で、javascriptなどのプログラムからxmlやhtmlで書かれた文書を扱うための仕組みの標準。xml,html同様W3C(World Wide Web Consortium ダブリュースリーシー)が標準の策定をしています。DOMは「WEBページとプログラミング言語を繋ぐ役割を持つ」</p>
        </section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
<table>
<thead>
<tr>
<th>ノードの種類</th>
<th>概要</th>
</tr>
</thead>
<tbody>
<tr>
<td>ドキュメントノード</td>
<td>ドキュメント全体を表すDocumentオブジェクト</td>
</tr>
<tr>
<td>要素ノード</td>
<td>要素を表すオブジェクト</td>
</tr>
<tr>
<td>テキストノード</td>
<td>テキストを表すオブジェクト</td>
</tr>
<tr>
<td>コメントノード</td>
<td>コメントを表すオブジェクト</td>
</tr>
<tr>
<td>属性ノード</td>
<td>属性を表すオブジェクト</td>
</tr>
</tbody>
</table>


            <p>例えば以下のようなリストではulタグやliタグがエレメントノードになります。ulタグの中に3つのliタグがありますからulで枝分かれしていると見るわけです。liタグの中の「りんご」「みかん」といった文字列はテキストノードといいます。</p>
<pre class="prettyprint">
<ul>
<li>りんご</li>
<li>みかん</li>
<li>バナナ</li>
</ul>
</pre>
          </sction>
          <section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>


<h3>属性ノード</h3>
<p>属性は Attribute の訳語です。
属性とはタグ内に「属性名="値"」という形で書かれるものです。src="images/hoge.png" では、src が属性名で images/hoge.png が値です。属性ノードには src の他に class, id, title, href, alt, for, colspan, rowspan, type などたくさんあります。</p>
<h3>属性ノードの値の変更</h3>
<p>属性ノードの値の変更には2つの方法があります。</p>
<p>属性名="値" を使う方法</p>
<pre class="prettyprint">
<img src="image/motogazou.png" alt="" id="n1" />
document.getElementById("n1").src = "images/example.png";
</pre>

<p> setAttribute("属性名","値") を使う方法</p>
<pre class="prettyprint">
element.setAttribute('属性名', '属性値');

<img src="image/motogazou.png" alt="" id="n1" />
document.getElementById("n1").setAttribute("src","images/example.png");
</pre>

<p>classだけは、classがプログラムで別の意味を持つためclassNameにしなければなりません。</p>
<pre class="prettyprint">
document.getElementById("n1").setAttribute("class","mushi");
document.getElementById("n1").className = "mushi";
</pre>

<h3>属性ノードの値の読み取り</h3>
<pre class="prettyprint">
document.getElementById("area01").getAttribute("src");
</pre>

<h3>属性があるかないか</h3>
<pre class="prettyprint">
element.hasAttribute('属性名');
</pre>

<h3>属性の削除</h3>
<pre class="prettyprint">
element.removeAttribute('属性名');
</pre>

<h3>要素ノードを取り出すためのプロパティ</h3>
<table>
<thead>
<tr>
<th>プロパティ名</th>
<th>概要</th>
</tr>
</thead>
<tbody>
<tr>
<td>parentElement</td>
<td>親要素ノードへの参照。（親要素ノードがない場合はnull）</td>
</tr>
<tr>
<td>children</td>
<td>子要素ノードへの参照を格納するHTMLCollection</td>
</tr>
<tr>
<td>firstElementChild</td>
<td>最初の子要素ノード。（子要素ノードがない場合はnull）</td>
</tr>
<tr>
<td>lastElementChild</td>
<td>最後の子要素ノード。（子要素ノードがない場合はnull）</td>
</tr>
<tr>
<td>nextElementSibling</td>
<td>兄弟要素ノードの中で次の要素ノード。（次の兄弟要素ノードをもたない場合はnull）</td>
</tr>
<tr>
<td>previousElementSibling</td>
<td>兄弟要素ノードの中で1つ前の要素ノード。（前の兄弟要素ノードをもたない場合はnull）</td>
</tr>
<tr>
<td>childElementCount</td>
<td>子要素ノードの数。（= children.length）</td>
</tr>
</tbody>
</table>

<h3>子ノードを取得して、操作する</h3>
<pre class="prettyprint">
var nodeList = elementNodeReference.childNodes;
</pre>
<h3>親ノードを取得して、操作する</h3>
<pre class="prettyprint">
var parentNode = elementNodeReference.parentNode
</pre>
          </sction>
          <section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>

            <p>DOMを取得するにあたって、複数のものを習得した場合の戻り値の１つがHTMLCollectionです。HTMLCollectionでは「id」と「name」から要素の抽出が可能です。</p>
            <p>戻すメソッド:document.getElementsByTagName()
            document.getElementsByClassName()</p>
            <p>使えるメソッド  HTMLCollection.item()
            HTMLCollection.namedItem()</p>
            <h3>NodeList</h3>
            <p>戻すメソッド: document.getElementsByName(), document.querySelectorAll()</p>
            <p>使えるメソッド: NodeList.item()
            NodeList.entries()
            NodeList.forEach()
            NodeList.keys()
            NodeList.values()</p>
          </sction>
          <section class="ly-section" id="4">
            <h2><?php echo $navList[4]; ?></h2>


			<p>javascriptでDOM要素をとる方法には、getElementシリーズと、querySelector系とがあります。getElementsByの方がquerySelectorAllよりも速い。しかしセレクタ指定ができない。</p>
      <p>違い2つ。<br>
      静的に取得するか動的に取得するか、と速度
      </p>
      <h3>動的なNodeList</h3>
      <p>ページを表現するDOMにリアルタイムに接続したオブジェクト。このオブジェクトを経由して行われた変更はほかのすべての動的なNodeListにも反映されることになる。つまり、単一のDOMへのリンクになっている。getElementsByClassName, getElementsByTagNames で返ってくるNodeListはLive NodeListなので、取得した後に追加したDOMも反映されます。</p>
      <h3>静的なNodeList</h3>
      <p>動的ではないNodeList。生成した段階のDOMがコピーされるもので、このNodeList経由でデータを変更しても、ほかのNodeListには影響を与えない。まったく独立している。
静的なNoteListが、生成した段階のROMをごっそり別のものとしてディープコピーします。
querySelectorAll, jQueryで取得したNodeListはStatic NodeListなので、取得した瞬間にdocument上にあるDOMを取得し、更新はされません。
</p>
<h3>ディープコピー(deep copy)</h3>はなく、オブジェクトとメモリ上のデータの両方をコピーします。コピー元のプロパティを変更しても、コピー先のプロパティは変更されません。例えば、変更前後の値を比較する際に、ディープコピーが使われる。</p>
              <p>ディープコピーとは、オブジェクトのみのコピーで
              <h3>シャローコピー(shallow copy)</h3>
<p>シャローコピーはざっくり言うと参照元のオブジェクトとコピー先のオブジェクトどちらも同じメモリを参照していることをいいます。</p>
<h3>ちがい</h3>
<p>実装的にみてディープコピーはシャローコピーよりもコストのかかる処理となる。実装を工夫することで改善は可能だろうが、本質的に静的なNodeListを生成するquerySelectorAll()はgetElementsByTagName()よりも処理時間がかかることになる。</p>
<h3>使い分け</h3>
<ul>
  <li>要素のリストがほしいだけなら高速に動作するgetElementsByTagName()を使う。</li>
  <li>複雑なCSSクエリを発行する必要がある場合にはquerySelectorAll()を使う。</li>
  <li>その時点での要素のスナップショットがほしいならquerySelectorAll()を使う。</li>
</ul>

          </sction>
          <section class="ly-section" id="5">
            <h2><?php echo $navList[5]; ?></h2>

<h3>querySelector()</h3>
<p>「querySelector()」を使うとid属性値・class属性値などを意識せずにjQuery感覚でHTML要素をセレクタ指定することができます。簡単に言うと「querySelector()」だけであらゆるHTML要素を取得することができる。最初に合致したHTML要素を取得した時点でプログラムは終了するので複数の要素を取得するには自作のループ処理を作成するか、「querySelectorAll()」を使う</p>
<pre class="prettyprint">
const elm = document.querySelector('.elem');
</pre>

<h3>querySelectorAll()</h3>
<p>querySelectorAll()で取得した要素はNodeListと言って、配列によく似たデータ構造が格納されています。そこで、配列を効率よく繰り返し処理できる「forEach」を使って各要素を1つずつ処理</p>
<p>NodeList:配列とは異なります。メソッドとしてforEach()をもっているので反復処理が可能</p>
<p>HTMLCollection:NodeListと同様、やはり配列風オブジェクトですが、加えて名前（ id や name ）によるアクセスも可能。</p>
<pre class="prettyprint">
const elm = document.querySelectorAll('.element');
elm.forEach(function(value) {
    console.log(value);
})
</pre>

<p>idを使ってエレメント(要素)ノードを探します</p>
<pre class="prettyprint">
<div id="main">aaaa</div>
document.getElementById("main");
</pre>
<p>クラス名を使ってエレメントノードを探します</p>
<pre class="prettyprint">
<div class="main">aaaa</div>
document.getElementsByClassName('main');
document.getElementsByClassName('color orange'); // -> [.color.orange]
</pre>

<p>タグ名を使ってエレメントノードを探します。</p>
<pre class="prettyprint">
<h2>aaaa</h2>
document.getElementsByTagName("h2");
</pre>

</sction>

<cite class="ly-cite"><a href="https://seiai.ed.jp/sys/text/htm4/chp09/h09a36.html" <?php echo $targetBlank ?>>class属性の変更でスタイルを変える</a></cite>
<cite class="ly-cite"><a href="https://qiita.com/KDE_SPACE/items/e21bb31dd4d9c162c4a6" <?php echo $targetBlank ?>>ノードの取得／属性の取得・設定</a></cite>

		</section>
    </article>
</main>
<script>
document.getElementById('screenHeightElm').textContent = screen.height;
document.getElementById('screenWidthElm').textContent = screen.width;
document.getElementById('screenAvailHeightElm').textContent = screen.availHeight;
document.getElementById('screenAvailWidthElm').textContent = screen.availWidth;
document.getElementById('windowInnerHeightElm').textContent = window.innerHeight;
document.getElementById('windowInnerWidthElm').textContent = window.innerWidth;
document.getElementById('windowOuterHeightElm').textContent = window.outerHeight;
document.getElementById('windowOuterWidthElm').textContent = window.outerWidth;
document.getElementById('getBoundingClientRectTopElm').textContent = document.getElementById('getBoundingClientRectTopElm').getBoundingClientRect().top;
document.getElementById('getBoundingClientRectLeftElm').textContent = document.getElementById('getBoundingClientRectLeftElm').getBoundingClientRect().left;
</script>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
