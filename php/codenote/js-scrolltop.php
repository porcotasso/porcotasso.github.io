<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
      <?php $navList = array("コード", "シンプルなパターン"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
            <h3>html</h3>
            <p>idとclassのあるaタグを準備します。</p>
<pre class="prettyprint">
<a id="js-scrollTop" class="el-scrollTop"></a>
</pre>
            <h3>css</h3>
            <p>矢印もCSSで追加します。</p>
<pre class="prettyprint">
.el-scrollTop{
	position: fixed;
	bottom: 64px;
	right: 0;
	width: 40px;
	height: 40px;
	background: $bg-white;
	border: 1px solid $border-gray;
	border-right: none;
	border-radius: 4px 0 0 4px;
	opacity: 0;
	&:after{
		content: "";
		position: absolute;
		display: inline-block;
		width: 8px;
		height: 8px;
		right: 16px;
		bottom: 14px;
		border-bottom: 1px solid $font-gray;
		border-right: 1px solid $font-gray;
		transform: rotate(-135deg);
		transition-duration: .3s;
	}
}
</pre>
            <h3>javascript</h3>
            <p>2つイベントがあります。上のscrollイベントは、下にスクロールするほど透明度が低くなってはっきり表示されるイベントです。下のクリックイベントでトップにスクロールしながら戻ります。</p>
<pre class="prettyprint">
let btnScrollTop = document.getElementById( "js-scrollTop" );
window.addEventListener('scroll', () => {
  let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
  if(pageOffsetY > 400){
    btnScrollTop.style.opacity = 0.4 ;
  } else{
    btnScrollTop.style.opacity = pageOffsetY/1000;
  }
});

scrollTop(btnScrollTop, 180);
function scrollTop(el, duration) {
  el.addEventListener('click', function() {
    let currentY = window.pageYOffset; 
    let step = duration/currentY > 1 ? 10 : 100; // 三項演算子
    let timeStep = duration/currentY * step; // スクロール時間
    let intervalId = setInterval(scrollUp, timeStep);
    // timeStepの間隔でscrollUpを繰り返す。
    // clearItervalのために返り値intervalIDを定義する。
    function scrollUp(){
      currentY = window.pageYOffset;
      if(currentY === 0) {
          clearInterval(intervalId); // ページ最上部に来たら終了
      } else {
          scrollBy( 0, -step ); // step分上へスクロール
      }
    }
  });
}
</pre>
        <p>ちなみに画面のトップからの高さを測る<code>window.pageYOffset || document.documentElement.btnScrollTop</code>はスクロールが一番上にいくと値が<code>0</code>ではなく、<code>undefined</code>になる模様。</p>

<pre class="prettyprint">
let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
</pre>

          <p>ほぼこちらを参考にさせていただいてます。もっとシンプルなコードも書かれてますがそちらはsafariで動かなかったので複雑な方を使用。（2020.09.18）。</p>
          <cite class="ly-cite"><a class="ly-cite_link" href="https://flex-box.net/js-scrolltop/#co-index-4" <?php echo $targetBlank ?>>Javascriptのみでトップへ戻るボタンを実装</a></cite>
		</section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
            <p>aタグのhref属性を#topにするだけでトップに戻ります。ただスクロールさせるjsを追加する場合は邪魔になるので削除します。</p>
<pre class="prettyprint">
<a href="#top" class="el-scrollTop"></a>
</pre>

            </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php") ?>