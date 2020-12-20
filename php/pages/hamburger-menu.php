<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
		<?php $navList = array("hamburgerのデザイン", "クリックしたらクラスをつける", "背景のコンテンツを固定する", "黒透過背景をつける"); ?>
         <?php include("../_partial/pages-title.php"); ?>        
            
            
                
            
        <section class="ly-section tocContent">
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
		<section class="ly-section tocContent">
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
		<section class="ly-section tocContent">
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
			<cite class="ly-cite"><a class="ly-cite_link" href="https://qiita.com/tochiji/items/4e9e64cabc0a1cd7a1ae" <?php echo $targetBlank ?>>「preventDefault()を使うための前提知識</a></cite>

<pre class="prettyprint">
//bodyにイベントをつけてると反応するが、下層のタグだと反応しない
function handleTouchMove(event) {
	event.preventDefault();
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
			<cite class="ly-cite"><a class="ly-cite_link" href="https://necomesi.jp/blog/tsmd/posts/180" <?php echo $targetBlank ?>>「端っこ」におけるスクロールの挙動を制御する overscroll-behavior プロパティ </a></cite>
<pre class="prettyprint">
overscroll-behavior: contain; // 親要素にスクロールが伝わらないようにする。「スクロールチェーン」の挙動を無効化
</pre>

			<h3>試したこと5:pointer-eventsを使う</h3>
			<p>z-indexで後ろの要素が操作できないことを利用できないかと思い調べると、pointer-eventsというプロパティがありました。pointer-eventsは、要素に対するホバーやクリックなどのマウスイベントをキャンセルできるプロパティです。初期値は「auto」で通常通りホバーやクリックのイベントを受け取りますが、「none」を指定するとイベントを受け取りません。しかしこれもダメでした。今回の問題はスマホでのタッチイベントがターゲットなので、クリックイベントの操作ではコントロールできないと予想。</p>

			<h3>試したこと6:スクロールしきったら１ピクセル戻しスクロールチェーンを起こさない</h3>
			<cite class="ly-cite"><a class="ly-cite_link" href="https://www.imuza.com/entry/2018/06/12/172357" <?php echo $targetBlank ?>>iPhoneでモーダルの背景のスクロールを止める</a></cite>
			<p>スクロールしきったら１ピクセルずらす方法を試す。これまでのエラーは解消するが、あらたなエラーがでる。メニューの1度目のクリックではメニューが動かない。スクロールしきった時に少し戻る動きが変。使えないっぽい。</p>

<pre class="prettyprint">
function handleTouchMove(e) {
  // event.preventDefault();
  var elem = document.getElementById("header-menu");
  var scroll = elem.scrollTop;
  var range = elem.scrollHeight - elem.offsetHeight - 1;
  if (scroll <= 0) {
      e.preventDefault();
      elem.scrollTop = 1;
  } else if(scroll > range) {
      e.preventDefault();
      elem.scrollTop = range;
  }
}
</pre>

			<h3>現状</h3>
			<p>bodyにpreventDefault()をつけるとメニューもスクロールがとまってしまい、また背景（mainなど）につけると、そもそもイベントが反応しないので、とりあえずpreventDefault()ははずしておく。style.overflow = 'hidden';でandoroid の対応だけしておく。と、していたが、メニューを隠したあとで背景が止まる挙動がある。ただ、再現パターンの特定が難しい。同じ動作で起きるときと起きない時がある。予想では、メニューを隠す方法が、黒背景クリックと、ハンバーガークリックに二つあるのが.style.overflow = 'hiddenのトグルが効かないことがあるのでは。なのでandroid用の背景のスクロールを止める.style.overflow = 'hiddenも削除。あと黒背景の色の透明度を下げて、背景の動きをみせない。実操作では問題なさそう。ただ課題が残ってることを忘れないために0.9で、ちらっと見える状態にしておく。</p>
			<p></p>
			<p>今後の対応としては、psition:fixed;を使うか、背景を見せないか、overscroll-behavior: containがiOSで使えるようになるのを待つか、スクロール時にヘッダーメニューをそもそも見せないか、どれか。</p>
		</section>

		<section class="ly-section tocContent">
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
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
