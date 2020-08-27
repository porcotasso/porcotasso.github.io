<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("hamburgerのデザイン", "クリックしたらクラスをつける", "クラスを利用して変形", "メニューを出す", "背景のコンテンツを固定する", "黒透過背景をつける"); ?>
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
			<p>ハンバーガー（js-hamburger）をクリックしたらメニュー（js-headerNav）にactiveクラスをつけて表示させます。今回は大枠にクラスをつけることで下層のいろんな部分にスタイルを追加します。ハンバーガーを×印に変更し、ロゴや背景を変更してメニューを表示します。</p>
			<ul>
				ハンバーガーを×印に変更
				ロゴや背景を変更
			</ul>
<pre class="prettyprint">
var hamburger = document.getElementById("js-hamburger");
var headerNav = document.getElementById("js-headerNav");
hamburger.onclick = function() {
  // メニューのトグル
  headerNav.classList.toggle("active");
};
</pre>
		</section>
		<section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
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
		</section>
		<section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
            <p>display:none; からblockもしくはwidth:0; から100%などの変更をしてメニューを表示させます。</p>
		</section>
		<section class="ly-section" id="4">
            <h2><?php echo $navList[4]; ?></h2>
			<p>背景のコンテンツを固定をするのにbodyにoverflowをhiddenにします。背景のタグにposition:fixed;にして、.getBoundingClientRect()でY位置を取得して固定する方法もあるようですが、解除した際にposition:static;にしてもトップに戻ってしまい解決しなかったです。</p>
<pre class="prettyprint">
var bodyOverflow = document.getElementsByTagName("body");
// 背景のスクロールを止める
if(bodyOverflow[0].style.overflow == 'hidden'){
bodyOverflow[0].style.overflow = '';
} else {
bodyOverflow[0].style.overflow = 'hidden';
}

//positionにステータスを追加し背景の位置を取得追加するパターン（うまくいかなかった）
var clientRect = wrapPosFix.getBoundingClientRect();　　
var posY = String( clientRect.top)  + 'px';
if(wrapPosFix.style.position == 'fixed'){
	wrapPosFix.style.position = 'static';
	wrapPosFix.style.top = 0;   
} else {
	wrapPosFix.style.position = 'fixed';
	wrapPosFix.style.top = posY;
}
</pre>			
		</section>
		<section class="ly-section" id="5">
            <h2><?php echo $navList[5]; ?></h2>
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
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
