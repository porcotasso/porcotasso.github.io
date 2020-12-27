<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("まずリテラルとは", "関数リテラルとは", "アロー関数とは", "他の書き方について", "アロー関数の中のthisについて", "addEventListenerのクリック要素がe.targetで取得出来ない場合"); ?>
         <?php include("../_partial/pages-title.php"); ?>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[0]; ?></h2>
            <p>ソースコードに直接ベタ書きした文字や数字のこと。下の例だとtaroや8が<em>リテラル</em>となります。</p>
<pre class="prettyprint">
var name = "taro";
var age = 8;
</pre>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[1]; ?></h2>
            <p>関数リテラルとは直接ベタ書きされた関数のことになります。下の例だと</p>
			<p><code>function(base, height){
				return base * height /2;
			};</code></p>
			<p>が関数リテラルです。流れとしては以下のようになります。</p>
			<p>※ literal : 文字通り</p>
			<ol>
				<li>関数リテラルを定義</li>
				<li>その関数リテラルを変数getTriangleに代入</li>
			</ol>
<pre class="prettyprint">
let getTriangle = function(base, height){
	return base * height /2;
};
</pre>
<p>上の関数リテラルは関数に名前が無いので「無名関数」と呼ばれます。</p>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[2]; ?></h2>
			<p>アロー関数とは関数リテラルをシンプルに記述する方法です。</p>
			<h3>アロー関数の基本</h3>
			<p>この形を読むとくときに意識する。</p>
<pre class="prettyprint">
(引数) => {関数の本体}
</pre>
<h3>アロー関数の例</h3>
<pre class="prettyprint">
function(base, height){
	return base * height /2;
};
</pre>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[3]; ?></h2>
			<h3>シンプル化1</h3>
			<p>関数の本体が一文なら{} を省略できる。</p>
<pre class="prettyprint">
let getTriangle = (base, height) => base * height /2;
</pre>   
			<h3>シンプル化2</h3>
			<p>引数がひとつなら、()を省略できる。</p>
<pre class="prettyprint">
let getCircle = radius => radius * radius * math.PI;
</pre>   
			<h3>引数がない場合</h3>
			<p>引数が無い場合、()を省略せずに記述</p>
<pre class="prettyprint">
let show = () => console.log('hello world');
</pre>   
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[4]; ?></h2>
			<p>アロー関数式で宣言された関数は宣言された時点でthisを確定（=束縛）させてしまう。</p>
<pre class="prettyprint">
param ='aaa';
let print = () => {
	console.log(this.param);
	// この時点でparamがaaaで確定
}
let object = {
	param : 'bbb';
	func : print
}
object.func();
//paramを変更してprint関数を実行しても、結果は aaa となる。
</pre>   
			<p>thisを使う場合、アロー関数とES6以前の書き方（通常関数）の書き方で挙動が異なる。</p>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[5]; ?></h2>
			<p>addEventListenerのクリック処理にアロー関数を使った場合、クリック要素がevent.targetに格納される。下記のコードの場合、予想では、targetはid="wrap"になりそうですが、実際クリックされてるのは子要素のpタグで、targetはpタグになる。</p>
<pre class="prettyprint">
<div id="wrap">
  <p>text</p>
</div>
const element = document.querySelector('#wrap')
element.addEventListener('click', (event) => {
      console.log(event.target);
})
</pre>   
			<p>クリックした時に、addEventListenerを設定した要素を取得するにはevent.targetではなくevent.currentTargetを使えばクリックした要素を取得できます。</p>
<pre class="prettyprint">
<div id="wrap">
  <p>text</p>
</div>
const element = document.querySelector('#wrap')
element.addEventListener('click', (event) => {
      console.log(event.currentTarget);
})
</pre>   
            <cite class="ly-cite"><a class="ly-cite_link" href="https://web-guided.com/994/" <?php echo $targetBlank ?>>e.targetで要素を取得出来ない時の原因</a></cite>  
        </section>

    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
