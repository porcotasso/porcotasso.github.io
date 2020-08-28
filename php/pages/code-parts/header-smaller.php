<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("javascript", "init, loadについて"); ?>
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
            <p>上部から80pxの位置を超えたときに、ヘッダーの高さが変わるようにします。ハンバーガーメニューのためにidを使っているのでクラスで要素を取得しています。ちなみにgetElementsByClassName()が返すのは、HTMLCollectionであってElementではないので、[番号]でどの要素を選ぶのか指定が必要です。
			</p>
<pre class="prettyprint">
function init() {
	var px_change = 80;
	let headerSmaller = document.getElementsByClassName('js-headerSmaller');
	window.addEventListener('scroll', function (e) {
    var y = document.documentElement.scrollTop || document.body.scrollTop;
		if ( y > px_change) {
			headerSmaller[0].classList.add('smaller');
		} else if (headerSmaller[0].classList.contains('smaller')) {
			headerSmaller[0].classList.remove('smaller');
		}
	});
}
window.onload = init();
</pre>
		</section>
		<section class="ly-section" id="1">
			<h2><?php echo $navList[1]; ?></h2>
function init() はパッケージ変数の初期化に使われます。ここでの意味合いはY値の初期化が目的になりますが、別の適当な関数名にしても動いたので、ここでは必要ないのかも。。。window.onload　windowオブジェクトが読み込まれたタイミングで処理が実行されている　画像が読み込まれたタイミングで処理を実行する例　複数の「onloadイベント」書いてしまうと上書きされてしまい、最後に書いたイベントだけが実行される　その場合はwindow.addEventListener('load', function() {
  console.log('リンゴ');をつかう。
})
		</section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
