<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt ly-innnerWidth">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("touchEventとは","touchEventの種類","TouchListの種類","Touchオブジェクト"); ?>
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
			<p>iOSやAndroidなどのモバイルデバイスに実装されている、JavaScriptで扱えるイベントのことを指します。タッチイベントを使えば、ユーザーがスクリーンに触れたときの動作を取得することができます。</p>
            <p>4つのtouchEventにはそれぞれ３つのTouchListがあり、各TouchListには触った指ごとにTouchオブジェクトの情報（idや座標値）が格納されます。</p>
            <dl>
                <dt>touchEvent</dt>
                <dd>画面を触るとき、どのタイミングでプログラムを発火させるかを決める４種類</dd>
            </dl>
            <dl>
                <dt>TouchList</dt>
                <dd>画面に何度もふれるときに、タイミングや場所によって、TouchListに格納するTouchオブジェクトを選別する。そのタイミングや場所の分類方法３種類</dd>
            </dl>
            <dl>
                <dt>Touchオブジェクト</dt>
                <dd>画面に触れたときに触った指ごとに発生する。idや座標のデータを含むオブジェクト</dd>
            </dl>
		</section>
		<section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
			<p>ユーザーが、画面をタッチで操作すると、操作の内容によって、以下のようなイベントが発生します。</p>
			<table>
				<thead>
					<tr><th>イベント</th><th>発生するタイミング</th></tr>
				</thead>
				<tbody>
					<tr><td>touchstart</td><td>タッチ面に指が触れた時</td></tr>
					<tr><td>touchend</td><td>タッチしていた指を離した時</td></tr>
					<tr><td>touchmove</td><td>タッチしながら指を移動させた時</td></tr>
					<tr><td>touchcancel</td><td>何らかの理由でタッチが取り消された時</td></tr>
				</tbody>
			</table>
<pre class="prettyprint">
// touchstartイベント
	touchArea1.addEventListener("touchstart", () => {
})
// touchendイベント
	touchArea1.addEventListener("touchend", () => {
})
// touchmoveイベント
touchArea1.addEventListener("touchmove", () => {
	event.preventDefault();  // 画面スクロールを防止
})
// touchcancelイベント
	touchArea1.addEventListener("touchcancel", () => {
})
</pre>
        </section>
		<section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
            <p>TouchEventは３種のTouchListをもっています。</p>
            <table>
                <tbody>
                <tr><td>touches</td><td>すべてのTouchオブジェクトを格納</td></tr>
                <tr><td>changedTouches</td><td>変更されたTouchオブジェクトを格納</td></tr>
                <tr><td>targetTouches</td><td>イベントのターゲットと同じ要素でタッチを始めたTouchオブジェクトを格納</tr>
                </tbody>
            </table>
        </section>
        <section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
            <p>各タッチの情報は、Touchオブジェクトから取得することができます。Touchオブジェクトは触った指ごとに発生し、もし４本の指でタッチしたら４つのTouchオブジェクトが発生します。Touchオブジェクトから取得できる主な情報は下表のとおり。</p>
            <table>
                <tbody>
                    <tr><td>identifier</td><td>各タッチに付与される番号。<br>指のIDのようなもので、指を離すまではidentifierは変わりません</td></tr>
                    <tr><td>screenX</td><td>端末のスクリーンの左端からの距離（px）</td></tr>
                    <tr><td>screenY</td><td>端末のスクリーンの上端からの距離（px）</td></tr>
                    <tr><td>clientX</td><td>ブラウザのビューポートの左端からの距離（px）</td></tr>
                    <tr><td>clientY</td><td>ブラウザのビューポートの上端からの距離（px）</td></tr>
                    <tr><td>pageX</td><td>ドキュメントの上端からの距離（px）</td></tr>
                    <tr><td>pageY</td><td>ドキュメントの上端からの距離（px）</td></tr>
                    <tr><td>target</td><td>その指をタッチ開始した位置にあるElement<br>*指を移動しても、targetはタッチ開始時の位置のElementのまま</td></tr>
                </tbody>
            </table>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://web-breeze.net/js-touch-event/" <?php echo $targetBlank ?>>https://web-breeze.net/js-touch-event/</a></cite>

            <cite class="ly-cite"><a class="ly-cite_link" href="https://webtools.dounokouno.com/htmlescape/" <?php echo $targetBlank ?>>Web制作小物ツール</a></cite>

		</section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
