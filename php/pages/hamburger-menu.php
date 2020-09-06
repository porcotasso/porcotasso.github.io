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
			<h3>試したこと1:overflow:hiddenを使う</h3>
			<p>背景のコンテンツを固定をするのにbodyにoverflowをhiddenにします。が、これはandoroidだけ効いて、iOSには効かないようです。この時は深く考えてませんでしたが、すでにデスマーチが流れていた模様。♪</p>
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
			<p>背景のタグにposition:fixed;にして、.getBoundingClientRect()でY位置を取得して固定する方法もあるようですが、解除した際にposition:static;にしてもトップに戻ってしまい解決しなかったです。</p>
<pre class="prettyprint">
var bodyOverflow = document.getElementsByTagName("body");
// 背景のスクロールを止める
if(bodyOverflow[0].style.overflow == 'hidden'){
bodyOverflow[0].style.overflow = '';
} else {
bodyOverflow[0].style.overflow = 'hidden';
}

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
			<p>preventDefaultは「イベントのデフォルト動作（例：aタグクリック）を発生させない」ということです。イベントのデフォルト動作の中に「touchmove」があり、これを指定のタグ（今回の場合、背景のコンテンツ）につけイベントのデフォルト動作（touchmove）を発生させないことでスクロールを防ぐ、ということになります。結果としてこれも問題があります。bodyにつけるとすべてに効いてしまい、メニューのスクロールが効かなくなる。次にbodyから階層を下げて背景のコンテンツにpreventDefaultのある'handleTouchMove' functionをつけてみたが、クリックしても反応していない。メニューが「もうこれ以上スクロールができない」状態になった時に背景が動きだしてしまうという、つまりスクロールが親要素に伝わる「スクロールチェーン」という現象がおきてしまうようです。</p>
			<cite class="ly-cite"><a href="https://qiita.com/tochiji/items/4e9e64cabc0a1cd7a1ae" <?php echo $targetBlank ?>>「preventDefault()を使うための前提知識</a></cite>
			<cite class="ly-cite"><a href="https://necomesi.jp/blog/tsmd/posts/180" <?php echo $targetBlank ?>>「端っこ」におけるスクロールの挙動を制御する overscroll-behavior プロパティ </a></cite>
<pre class="prettyprint">
function handleTouchMove(event) {
	event.preventDefault();
	console.log('preventDefault');
}
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

//スクロール禁止
element.addEventListener('touchmove', handleTouchMove, { passive: false });
//スクロール復帰
element.removeEventListener('touchmove', handleTouchMove, { passive: false });
</pre>
			<p>それならと、スクロール境界（端っこ）におけるブラウザデフォルトの挙動をコントロールできる overscroll-behavior: contain を試しましたが、これも効かない。canIuse で調べると、iOSはまだ対応していない模様（2020.9.5時点）。この対応を待つのも現実的な判断かも。。</p>
<pre class="prettyprint">
overscroll-behavior: contain; // 親要素にスクロールが伝わらないようにする。「スクロールチェーン」の挙動を無効化
</pre>

<h3>試したこと4:pointer-eventsを使う</h3>
<p>z-indexで後ろの要素が操作できないことを利用できないかと思い調べると、pointer-eventsというプロパティがありました。pointer-eventsは、要素に対するホバーやクリックなどのマウスイベントをキャンセルできるプロパティです。初期値は「auto」で通常通りホバーやクリックのイベントを受け取りますが、「none」を指定するとイベントを受け取りません。しかしこれもダメでした。今回の問題はスマホでのタッチイベントがターゲットなので、クリックイベントの操作ではコントロールできないと予想。</p>


<p>次試すこと：https://www.imuza.com/entry/2018/06/12/172357</p>
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
