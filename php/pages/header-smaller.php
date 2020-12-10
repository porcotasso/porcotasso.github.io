<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-toc">
                <div class="ly-toc_ttl">目次</div>
                <?php $navList = array("javascript"); ?>
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

<pre class="prettyprint">
<header class="js-headerSmaller"> 

function headerSmaller() {
	var px_change = 80;
	let headerSmaller = document.getElementsByClassName('js-headerSmaller');
	window.addEventListener('scroll', () => {
    var y = document.documentElement.scrollTop || document.body.scrollTop;
		if ( y > px_change) {
			headerSmaller[0].classList.add('smaller');
		} else if (headerSmaller[0].classList.contains('smaller')) {
			headerSmaller[0].classList.remove('smaller');
		}
	});
}
window.onload = headerSmaller();
</pre>

<p>上部から80pxの位置を超えたときに、ヘッダーの高さが変わるようにします。ハンバーガーメニューのためにidを使っているのでクラスで要素を取得しています。</p>
<h3>コードの流れ</h3>
<p>windowオブジェクトでscrollイベントが発生を取得</p>
<pre class="prettyprint">
window.addEventListener('scroll', () => {}
</pre>
<p>Element.scrollTop プロパティで、要素の内容が垂直にスクロールするピクセル数を取得</p>
<pre class="prettyprint">
var y = document.documentElement.scrollTop || document.body.scrollTop;
</pre>
<p>垂直にスクロールするピクセル数がpx_change変数を超えた時はsmallerクラスを追加し、超えてなくてsmallerクラスがついている時はクラスをはずします。</p>
<pre class="prettyprint">
if ( y > px_change) {
    headerSmaller[0].classList.add('smaller');
} else if (headerSmaller[0].classList.contains('smaller')) {
    headerSmaller[0].classList.remove('smaller');
}
</pre>
<p>windowオブジェクトが読み込まれたタイミングでheaderSmallerを作動させます</p>
<pre class="prettyprint">
window.onload = headerSmaller();
</pre>

<p>onloadはページや画像などを読み込んでから処理を実行するときに利用するイベントハンドラーです。データを読み込んでから処理を実行したいときなどに使用します。複数の「onloadイベント」書いてしまうと上書きされてしまい最後に書いたイベントだけが実行されます。その場合はaddEventListenerを使います。</p>
<pre class="prettyprint">
window.addEventListener('load', function() {
    console.log('hello');
})
</pre>
<p>ちなみにgetElementsByClassName()が返すのは、HTMLCollectionであってElementではないので、[番号]でどの要素を選ぶのか指定が必要です。</p>
		</section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
