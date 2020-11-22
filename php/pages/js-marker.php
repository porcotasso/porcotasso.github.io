<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt ly-innnerWidth">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("黄色いマーカー", "関連コード:サイズと位置を取得"); ?>
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
			<p>スクロールしたタイミングで<span class="el-marker">黄色いマーカー</span>を引くjavascriptです。</p>
 
<pre class="prettyprint">
マーカーを引きたいとこに<span class="el-marker">クラス</span>をつける

var saClass = 'el-marker'; //1.DOM内の指定のクラスの要素の変数をつくり
var saShowClass = 'show';
var triggerMarginDefault = 200;
 
var saElm = document.querySelectorAll('.' + saClass); //2. 複数あるsaClassの要素をNodelistとして取得
var saFunc = function() {
  var dataMargin = saClass + '_margin'; //sa_magin
  var dataTrigger = saClass + '_trigger'; //sa_trigger
  var dataDelay = saClass + '_delay'; //sa_delay
  for(var i = 0; i < saElm.length; i++) {  //3. saElmをループでまわし、各要素をelmに代入。
    var triggerMargin = triggerMarginDefault;　//200
    var elm = saElm[i];//各saElm
    var showPos = 0; //変数作成
    if(elm.dataset[dataMargin] != null) {
      triggerMargin = parseInt(elm.dataset[dataMargin]);　//4.NodeLIstから要素のdataset[dataMargin]をtriggerMarginとして数値で取得。
    }
    if(elm.dataset[dataTrigger]) {
      showPos = document.querySelector(elm.dataset[dataTrigger]).getBoundingClientRect().top + triggerMargin; //5.要素の上からの位置に200px追加
    } else {
      showPos = elm.getBoundingClientRect().top + triggerMargin;
    }
    if (window.innerHeight > showPos) { //6.それが現在のブラウザの高さより少なくなったら、setTimeoutで0.1秒後にshowクラスを追加。
      var delay = (elm.dataset[dataDelay])? elm.dataset[dataDelay] : 100;
      setTimeout(function(index) {
        saElm[index].classList.add('show');
      }.bind(null, i), delay);//bindメソッドで関数に対してthisや引数を指定している。indexってどこからでてきたん？ということですが、ここのiがindex部分の引数に代入されます。.bindメソッドに使われるthisを指定しない場合、bindの第一引数に null を設定します。
    }
  }
}
window.addEventListener('load', saFunc);
window.addEventListener('scroll', saFunc);
</pre>
</sction>
<section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
			<p>モニター、ブラウザ、要素などのサイズと位置を取得。</p>

<h3>screen.height, screen.width</h3>
<p>モニタサイズ(解像度)</p>
<p>screen.height: <span id="screenHeightElm"></span></p>
<p>screen.width: <span id="screenWidthElm"></span></p>
<pre class="prettyprint">
document.getElementById('screenHeightElm').textContent = screen.height;
document.getElementById('screenWidthElm').textContent = screen.width;
</pre>


<h3>screen.availHeight, screen.availWidth</h3>
<p>タスクバーなどを除くモニタ有効域の高さ</p>
<p>screen.availheight: <span id="screenAvailHeightElm"></span></p>
<p>screen.availwidth: <span id="screenAvailWidthElm"></span></p>
<pre class="prettyprint">
document.getElementById('screenAvailHeightElm').textContent = screen.availHeight;
document.getElementById('screenAvailWidthElm').textContent = screen.availWidth;
</pre>


<h3>window.innerHeight, window.innerWidth</h3>
<p>ブラウザ内の表示域(スクロールバーを含む)。今、表示されているブラウザの幅。PCでブラウザの幅を変えると数値が変わる。</p>
<p>window.innerHeight: <span id="windowInnerHeightElm"></span></p>
<p>window.innerWidth: <span id="windowInnerWidthElm"></span></p>
<pre class="prettyprint">
document.getElementById('windowInnerHeightElm').textContent = window.innerHeight;
document.getElementById('windowInnerWidthElm').textContent = window.innerWidth;
</pre>


<h3>window.outerHeight, window.outerWidth</h3>
<p>ブラウザ表示域(ブラウザ全体の外周)</p>
<p>window.outerHeight: <span id="windowOuterHeightElm"></span></p>
<p>window.outerWidth: <span id="windowOuterWidthElm"></span></p>
<pre class="prettyprint">
document.getElementById('windowOuterHeightElm').textContent = window.outerHeight;
document.getElementById('windowOuterWidthElm').textContent = window.outerWidth;
</pre>

<h3>.getBoundingClientRect()</h3>
<p>ブラウザの表示の中で、その要素の上からの高さ。要素が一番上までいくと0になる。</p>
<p>.getBoundingClientRect().top: <span id="getBoundingClientRectTopElm"></span></p>
<p>.getBoundingClientRect().left: <span id="getBoundingClientRectLeftElm"></span></p>
<pre class="prettyprint">
document.getElementById('getBoundingClientRectTopElm').textContent = document.getElementById('getBoundingClientRectTopElm').getBoundingClientRect().top;
document.getElementById('getBoundingClientRectLeftElm').textContent = document.getElementById('getBoundingClientRectLeftElm').getBoundingClientRect().left;
</pre>

<cite class="ly-cite"><a href="https://murashun.jp/blog/20191110-33.html" <?php echo $targetBlank ?>>ウィンドウのサイズを調べる</a></cite>
<cite class="ly-cite"><a href="https://web-designer.cman.jp/javascript_ref/window/size/" <?php echo $targetBlank ?>>JavaScriptでウインドウサイズを取得</a></cite>
<cite class="ly-cite"><a href="https://techacademy.jp/magazine/14652" <?php echo $targetBlank ?>>JavaScriptでbindメソッドを使う方法</a></cite>
<cite class="ly-cite"><a href="https://techacademy.jp/magazine/14652" <?php echo $targetBlank ?>>JavaScriptでbindメソッドを使う方法</a></cite>
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
<?php include("../_partial/wrapper-foot.php"); ?>
