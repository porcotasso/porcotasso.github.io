<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
      <?php $navList = array("Nodeとは", "主なノードの種類", "element node", "attribute node", "Nodelist", "HTMLcollection", "HTML element", "要素の取得方法", "コピー方法"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
            <p>DOMでは文書を木構造(tree)としてとらえ、枝分かれの部分や枝の先端をノード(node)と呼びます。<br>タグやその中の属性、テキストがそれぞれノードになります。<br>ノードとは各要素(HTMLではエレメントやタグという)自体のことを表します。<br>特定のノードを基準としたときに、その上にあるノードを「親:parent」ノードと表現し、その下にあるノードを「子:childまたはchildren」ノードと表現します。<br>また同一階層にあるノードのことを「兄弟姉妹:siblings」ノードと表現します。例えば「そのタグの子ノード全体を取得して、その親ノードから削除する」のような使い方をします。 </p>
            <h3>DOMとは</h3>
            <p>Document Object Model の略で、javascriptなどのプログラムからxmlやhtmlで書かれた文書を扱うための仕組みの標準のことです。<br>DOMは「WEBページとプログラミング言語を繋ぐ役割」を果たします。</p>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
            <table class="nodeType">
              <thead>
                <tr>
                  <th>ノードの種類</th>
                  <th>概要</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>document node</td>
                  <td>ドキュメント全体を表すDocumentオブジェクト</td>
                </tr>
                <tr>
                  <td>element node</td>
                  <td>要素を表すオブジェクト</td>
                </tr>
                <tr>
                  <td>text node</td>
                  <td>テキストを表すオブジェクト</td>
                </tr>
                <tr>
                  <td>comment node</td>
                  <td>コメントを表すオブジェクト</td>
                </tr>
                <tr>
                  <td>attribute node</td>
                  <td>属性を表すオブジェクト</td>
                </tr>
              </tbody>
            </table>
          </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[2]; ?></h2>
            <p>例えば以下のようなリストではulタグやliタグがelement nodeになります。ulタグの中に3つのliタグがありますからulで枝分かれしていると見るわけです。</p>
            <p>liタグの中の「りんご」「みかん」といった文字列はtext nodeといいます。</p>
<pre class="prettyprint">
<ul>
<li>りんご</li>
<li>みかん</li>
<li>バナナ</li>
</ul>
</pre>

            <h3>element nodeを取り出すためのプロパティ</h3>
            <table class="nodeType">
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

            <h4>子ノードを取得して、操作する</h4>
<pre class="prettyprint">
var nodeList = elementNodeReference.childNodes;
</pre>
            <h4>親ノードを取得して、操作する</h4>
<pre class="prettyprint">
var parentNode = elementNodeReference.parentNode;
</pre>
          </section>
          <section class="ly-section tocContent">
            <h2><?php echo $navList[3]; ?></h2>
              <h3>attribute node</h3>
              <p>attribute(属性)とはタグ内に「属性名="値"」という形で書かれるものです。src="images/hoge.png" では、src が属性名で images/hoge.png が値です。<br>attribute nodeには src の他に class, id, title, href, alt, for, colspan, rowspan, type などたくさんあります。</p>
              <h3>attribute nodeの値の変更</h3>
              <p>attribute nodeの値の変更には2つの方法があります。</p>
              <h4>属性名="値" を使う方法</h4>
<pre class="prettyprint">
<img src="" alt="" id="n1" />
document.getElementById("n1").src = "images/example.png";
</pre>

              <h4> setAttribute("属性名","値") を使う方法</h4>
<pre class="prettyprint">
element.setAttribute('属性名', '属性値');

<img src="" alt="" id="n1" />
document.getElementById("n1").setAttribute("src","images/example.png");
</pre>

<p>classだけは、classがプログラムで別の意味を持つためclassNameにしなければなりません。</p>
<pre class="prettyprint">
document.getElementById("n1").setAttribute("class","mushi");
document.getElementById("n1").className = "mushi";
</pre>

              <h3>attribute nodeの値の読み取り</h3>
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

          </section>
          <section class="ly-section tocContent">
            <h2><?php echo $navList[4]; ?></h2>
            <p>DOMを取得するにあたって、nodeの集合を表すオブジェクトがNode Listです。見た目、配列に似ていますが配列ではないです。</p>
            <h3>取得方法</h3>
            <ul>
              <li>querySelectorAll</li>
              <li>getElementsByName</li>
              <li>jQuery</li>
            </ul>
            <h3>状態</h3>
            <p>ディープコピー(deep copy)で取得したStatic Node List。生成した段階のDOMがコピーされるもので、このNodeList経由でデータを変更しても、ほかのNodeListには影響を与えない。まったく独立している。静的なNoteListが、生成した段階のROMをごっそり別のものとしてディープコピーします。
querySelectorAll, jQueryで取得したNodeListはStatic NodeListなので、取得した瞬間にdocument上にあるDOMを取得し、更新はされません。</p>
            <h3>扱い方</h3>
            <p>そのままでは扱えない。利用するには</p>
            <ul>
              <li><code>nodelist[0]</code>の様に、[]内にインデックスを記入する</li>
              <li><code>nodelist.item(0)</code>の様に、itemメソッドを使う。</li>
            </ul>
            <p>DOMの規程ではどちらの記法でも大丈夫。</p>
            
            <h3>lengthプロパティが使える</h3>
            <p><code>let length = nodeList.length</code>で、中身をカウントできます。</p>

            <h3>forEachメソッドでループ的な利用方法（正確にはループではない）</h3>
<pre class="prettyprint">
const elements = document.querySelectorAll('element'));
elements.forEach((value, index) => {
  //処理
  elements[index].classList.add('aaa');
}
</pre>
          </section>
          <section class="ly-section tocContent">
            <h2><?php echo $navList[5]; ?></h2>
            <p>DOMを取得するにあたって、html要素の集合を表すオブジェクトがhtml Colllectionです。見た目、配列に似ていますが配列ではないです。</p>
            <h3>取得方法</h3>
            <ul>
              <li>getElementsByClassName</li>
              <li>getElementsByTagName</li>
            </ul>
            <h3>状態</h3>
            <p>シャローコピー(shallow copy)で取得したLive Node List<br>動的に内容が変更されます。取得した後に追加したDOMも反映されます。</p>
            <h3>扱い方</h3>
            <p>そのままでは扱えない。利用するには</p>
            <ul>
              <li><code>htmlCollection[0]</code>の様に、[]内にインデックスを記入する</li>
              <li><code>htmlCollection.item(0)</code>の様に、itemメソッドを使う。</li>
              <li>name属性を指定して要素を取得できる。</li>
            </ul>

            <h3>array、もしくはスプレッド演算子(...)で配列に変更後、forEachメソッドでループ的な利用方法</h3>
<pre class="prettyprint">
const elements =  Array.from(document.getElementsByClassName('element'));
elements.forEach((value, index) => {
  //処理
  elements[index].classList.add('aaa');
}
</pre>
          </section>

          <section class="ly-section tocContent">
            <h2><?php echo $navList[6]; ?></h2>
            <p>DOMを取得するにあたって、element要素の集合を表すオブジェクトがhtml elementです。</p>
            <h3>取得方法</h3>
            <ul>
              <li>getElementById</li>
              <li>querySelector</li>
            </ul>
            <h3>扱い方</h3>
            <p>そのままで扱える。性質的に取得しているのは１つの要素。</p>
          </section>

          <section class="ly-section tocContent">
            <h2><?php echo $navList[7]; ?></h2>
            <p>javascriptでDOM要素をとる方法には、getElementシリーズと、querySelector系とがあります。getElementsByの方がquerySelectorAllよりも速いです。</p>
            
            <h3>querySelector()</h3>
            <p>「querySelector()」を使うとid属性値・class属性値などを意識せずにjQuery感覚でHTML要素をセレクタ指定することができます。<br>簡単に言うと「querySelector()」だけであらゆるHTML要素を取得することができる。最初に合致したHTML要素を取得した時点でプログラムは終了するので複数の要素を取得するには自作のループ処理を作成するか「querySelectorAll()」を使うこと。</p>
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
          </section>

          <section class="ly-section tocContent">
            <h2><?php echo $navList[8]; ?></h2>
            <h3>ディープコピー(deep copy)</h3>
            <p>オブジェクトとメモリ上のデータの両方をコピーします。コピー元のプロパティを変更しても、コピー先のプロパティは変更されません。例えば、変更前後の値を比較する際に、ディープコピーが使われる。</p>
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


            <cite class="ly-cite"><a class="ly-cite_link" href="https://seiai.ed.jp/sys/text/htm4/chp09/h09a36.html" <?php echo $targetBlank ?>>class属性の変更でスタイルを変える</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://qiita.com/KDE_SPACE/items/e21bb31dd4d9c162c4a6" <?php echo $targetBlank ?>>ノードの取得／属性の取得・設定</a></cite>
          </section>


    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
