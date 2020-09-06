<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("hamburgerのデザイン", "クリックしたらクラスをつける", "背景のコンテンツを固定する", "黒透過背景をつける"); ?>
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
            <p>ハンバーガーのラインは3つのspanでラインをつくり、親タグで全体の位置とサイズを調整します。floatを使っているのはロゴを中心にしたかったからで、レイアウトによっては必要ありません。</p>
<pre class="prettyprint">
.menu-trigger{
	display: inline-block;
	box-sizing: border-box;
	float: right;
	position: relative;
	top: -6px;
	margin: -24px $gutter-width 0 0;
	width: 34px;
	height: 24px;
	span{
		position: absolute;
		left: 0;
		width: 100%;
		height: 2px;
		background-color: #333;
		border-radius: 4px;
		transition: all .4s;
		&:nth-of-type(1) {
			top: 0;
		}
		&:nth-of-type(2) {
			top: 11px;
		}
		&:nth-of-type(3) {
			bottom: 0;
		}
	}
}
</pre>
		</section>
		<section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
			<p>ハンバーガー（js-hamburger）をクリックしたらメニュー（js-headerNav）にactiveクラスをつけます。今回は大枠にクラスをつけることで下層のいろんな部分にスタイルを追加します。ハンバーガーを×印に変更し、メニューを表示しロゴや背景を変更します。</p>
<pre class="prettyprint">
var hamburger = document.getElementById("js-hamburger");
var headerNav = document.getElementById("js-headerNav");
hamburger.onclick = function() {
  headerNav.classList.toggle("active");
};
</pre>

            <h3>ハンバーガーを×印に変更</h3>
            <p>各ラインをそれぞれのスタイルを追加して変形をします。</p>
<pre class="prettyprint">
.menu-trigger{
	span{
		background:#fff;
		&:nth-of-type(1) {
			transform:rotate(-45deg);
			top: 12px;
		}
		&:nth-of-type(2) {
			width: 0;
			left: 15px;
		}
		&:nth-of-type(3) {
			transform:rotate(45deg);
			top: 12px;
		}
	}
}
</pre>
			<h3>メニューを表示</h3>
			<p>display:none; からblockもしくはwidth:0; から100%などの変更をしてメニューを表示させます。</p>
<pre class="prettyprint">
.headerMenu{
	display: block;
	opacity: 1;
	width: 84%;
	animation: headerMenu .3s ease-out both;
}
</pre>

			<h3>ロゴと背景の色を変更</h3>
<pre class="prettyprint">
&.active{
	background: #d1dae4;
	.web-ttl{
		a{
			color: #fff;
		}
	}
</pre>
		</section>
		<section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
			<p>表示したメニューはスクロールできるようにしておきますが、なにもしないと背景のコンテンツもスクロールできてしまうので何かしら対応が必要。この時点では深く考えてませんでしたが、すでにデスマーチが流れていた模様。♪パーパラララララ♪</p>
			<h3>試したこと1:overflow:hiddenを使う</h3>
			<p>背景のコンテンツを固定をするのにbodyにoverflowをhiddenにします。が、これはandoroidだけ効いて、iOSには効かないようです。</p>

<pre class="prettyprint">
var bodyOverflow = document.getElementsByTagName("body");
// 背景のスクロールを止める
if(bodyOverflow[0].style.overflow == 'hidden'){
bodyOverflow[0].style.overflow = '';
} else {
bodyOverflow[0].style.overflow = 'hidden';
}
</pre>
			<h3>試したこと2:position:fixed;を使う</h3>
			<p>背景のタグにposition:fixed;にして、.getBoundingClientRect()でY位置を取得して固定する方法もあるようですが、解除した際にposition:static;にしてもトップに戻ってしまい解決しなかったです。これを利用するにはDOM構成を大きく変えて試せば可能性がまだありますが、現状はとりあえず断念。</p>
<pre class="prettyprint">
//positionにステータスを追加し背景(js-wrapPosFix)の位置を取得追加するパターン（うまくいかなかった）
var wrapPosFix = document.getElementById("js-wrapPosFix");
var clientRect = wrapPosFix.getBoundingClientRect();　　
var posY = String(clientRect.top)  + 'px'; //スタイルのステータス用に文字列に変更
if(wrapPosFix.style.position == 'fixed'){
	wrapPosFix.style.position = 'static';
	wrapPosFix.style.top = 0;   
} else {
	wrapPosFix.style.position = 'fixed';
	wrapPosFix.style.top = posY;
}
</pre>
			<p>その際、スクロールしたY値をwindow.pageYOffset ; で取得してstyleに追加しようとしてみましたが、これは値をあてはめれなかったです。</p>
<pre class="prettyprint">
var scrollTop = window.pageYOffset ;
console.log(scrollTop);　//認識されている
console.log(-scrollTop);　//認識されている
element.style.top = -scrollTop;　//代入できない
</pre>
			<h3>試したこと3:preventDefault();を使う</h3>
			<p>preventDefaultは「イベントのデフォルト動作（例：aタグクリック）を発生させない」ということです。イベントのデフォルト動作の中に「touchmove」があり、これを指定のタグ（今回の場合、背景のコンテンツ）につけイベントのデフォルト動作（touchmove）を発生させないことでスクロールを防ぐ、ということになります。結果としてこれも問題があります。bodyにつけるとすべてに効いてしまい、メニューのスクロールが効かなくなる。次にbodyから階層を下げて背景のコンテンツにpreventDefaultのある'handleTouchMove' functionをつけてみたが、クリックしてもそもそもイベントが反応していない。</p>
			<cite class="ly-cite"><a href="https://qiita.com/tochiji/items/4e9e64cabc0a1cd7a1ae" <?php echo $targetBlank ?>>「preventDefault()を使うための前提知識</a></cite>

<pre class="prettyprint">
function handleTouchMove(event) {
	event.preventDefault();
	console.log('preventDefault');//bodyにイベントをつけてると反応するが、下層のタグだと反応しない
}
//スクロール禁止
element.addEventListener('touchmove', handleTouchMove, { passive: false });
//スクロール復帰
element.removeEventListener('touchmove', handleTouchMove, { passive: false });

//もしくは
var handleTouchMove = function(event) {
	if ($(event.target).closest('.header-menu').length > 0) {
		event.stopPropagation();
		console.log('stopPropagation');
	} else {
		event.preventDefault();
		console.log('preventDefault');
	}
};

</pre>
			<h3>試したこと4:pointer-eventsを使う</h3>
			<p>メニューが「もうこれ以上スクロールができない」状態になった時に背景が動きだしてしまうという、つまりスクロールが親要素に伝わる「スクロールチェーン」という現象がおきてしまうようです。それならと、スクロール境界（端っこ）におけるブラウザデフォルトの挙動をコントロールできる overscroll-behavior: contain を試しましたが、これも効かない。canIuse で調べると、iOSはまだ対応していない模様（2020.9.5時点）。この対応を待つのも現実的な判断かも。。</p>
			<cite class="ly-cite"><a href="https://necomesi.jp/blog/tsmd/posts/180" <?php echo $targetBlank ?>>「端っこ」におけるスクロールの挙動を制御する overscroll-behavior プロパティ </a></cite>
<pre class="prettyprint">
overscroll-behavior: contain; // 親要素にスクロールが伝わらないようにする。「スクロールチェーン」の挙動を無効化
</pre>

			<h3>試したこと5:pointer-eventsを使う</h3>
			<p>z-indexで後ろの要素が操作できないことを利用できないかと思い調べると、pointer-eventsというプロパティがありました。pointer-eventsは、要素に対するホバーやクリックなどのマウスイベントをキャンセルできるプロパティです。初期値は「auto」で通常通りホバーやクリックのイベントを受け取りますが、「none」を指定するとイベントを受け取りません。しかしこれもダメでした。今回の問題はスマホでのタッチイベントがターゲットなので、クリックイベントの操作ではコントロールできないと予想。</p>

			<h3>試したこと4:pointer-eventsを使う</h3>
			<p>次試すこと：https://www.imuza.com/entry/2018/06/12/172357</p>




<p>
scrollTop
JavaScriptの、ElementオブジェクトのscrollTopは、要素内の垂直方向のスクロール量を取得、変更するプロパティです。

.offsetHeight
垂直方向のパディングとボーダーを含む要素の高さをピクセル数で表す、読み取り専用のプロパティです。
一般的に要素のoffsetHeightは、 要素のボーダー、要素の垂直方向のパディング、要素の水平スクロールバー(もし、描画されていれば)と要素のCSSのheightを含めて計測されます。


scrollHeight
JavaScriptの、ElementオブジェクトのscrollHeightはスクロール分を含めた全体の高さを取得するプロパティです。scrollHeightプロパティはスクロール分を含めた全体の高さです。スクロールバーがあるかないかで計算方法が変わります。スクロールバーが表示されていない場合、heightとpaddingとborderの合計で、marginを含まない値となります。さて、scrollHeightの特徴はここからです。要素がスクロール可能な状態になっている時、考え方が全く変わってきます。例えば上記のように青い枠線を持った要素のscrollHeightを考えてみましょう。この青い要素は自身よりも大きいサイズの画像を内包していて、スクロール表示させています。
この時、scrollHeightの起点はborderの左上ではなく、paddingの左上となります。そして、スクロールできる分の高さがscrollHeightの数値となるのです。もう1つ例を見ておきます。内包するコンテンツが小さく、スクロールをする必要がなくても、スクロールバーが表示されている状態の場合、scrollHeightの起点はpaddingの左上となり、そして、スクロールバーを含めない、paddingとheightの合計がscrollHeightの値となります。

さて、ChromeやSafariと、Firefoxで取得できるscrollHeightの値が違うことがあります。これの原因は、paddingとスクロールバーの関係です。まずはFirefoxの例を見て下さい。下部にスクロールバーがある時、padding-bottomの幅が削られてしまいます。一方、Chromeの例を見て下さい。下部にスクロールバーがある時、padding-bottomの幅は削られません。Safariも同様です。この削られるか、削られないかの分の幅が、scrollHeightで取得できる値のズレとなって表れます。ブラウザ間で異なる値になる可能性が高いscrollHeightは、プログラムに組み込みにくいということが言えますね。</p>

scrollToメソッドとscrollByメソッドは、指定した位置にスクロールして移動することができるメソッドです。例えばclickイベントと組み合わせて、クリックしたら指定した位置にスクロールさせる、ということができるわけですね。

絶対位置を指定してスクロール/scrollTo
scrollToメソッドでは、絶対位置を指定してスクロールをさせることができます。絶対位置とは、全体に対してどの位置なのか、という指定の方法です。scrollToメソッドは第一引数にx座標、第二引数にy座標のスクロール量を指定します。このスクロール量は、ピクセル単位で指定します。次のプログラムで確認してみましょう。
scrollTo(100, 200);プログラムを実行すると、右に100px、下に200px画面がスクロールします。

相対位置で指定してスクロール/scrollBy
scrollByを使う場合は、相対位置で指定してスクロールさせることができます。相対位置とは現在のスクロール位置を基準として、そこからどれだけの量をスクロールするのか指定することです
scrollBy(100, 200);
このプログラムを実行すると、現在の画面位置から右に100px、下に200px画面がスクロールします。最初の位置が右に50px、下に100px動いた位置だとすると、最終的な位置は右から150px、下に300px動いた位置になるということですね。


TOPへ戻るボタン
最近は縦長のサイトも増えてきて、ページのTOPに戻るボタンの有る無しは結構重要ですよね。そんなページトップへ戻るボタンは、下記のように書くことで実装可能です。
<div class="btn" onclick="scrollToTop()"></div>
<br>

function scrollToTop() {
  scrollTo(0, 0);
 }


 https://www.sejuku.net/blog/62930
		</section>





		<section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
			<p>黒透過背景用のタグを追加し、トグルで表示非表示させます。黒背景をクリックした際に、メニューを閉じるスクリプトも追加。</p>
<pre class="prettyprint">
<!-- メニューを出した時に出る黒背景 -->
<div class="el-blackCover" id="js-blackCover"></div>

var blackCover = document.getElementById("js-blackCover");
// 黒背景のトグル
blackCover.classList.toggle("active");
// 黒背景のクリックでメニュー閉じる
blackCover.onclick = function() {
	headerNav.classList.remove("active");
	blackCover.classList.remove("active");
	bodyOverflow[0].style.overflow = '';
}
</pre>			
        </section>
		<section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
		</section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
