<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
			<?php if (file_exists($filename)) { ?>
				<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
			<?php } ?>
            <p><?php echo $lead ?></p>  
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("コード", "シンプルなパターン"); ?>
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
//スクロールでトップに戻るボタン
let btnScrollTop = document.getElementById( "js-scrollTop" );
window.addEventListener('scroll', () => {
  let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
  if(pageOffsetY < 400){
    btnScrollTop.style.opacity = pageOffsetY/1000;
  } else{
    btnScrollTop.style.opacity = 0.4 ;
  }
});

scrollTop(btnScrollTop, 150); // 遅すぎるとガクガクになるので注意
function scrollTop(el, duration) {
  el.addEventListener('click', function() {
    let currentY = window.pageYOffset; // 現在のスクロール位置を取得
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


<cite class="ly-cite"><a href="https://flex-box.net/js-scrolltop/#co-index-4" <?php echo $targetBlank ?>>Javascriptのみでトップへ戻るボタンを実装</a></cite>
		</section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
            <p>aタグのhref属性を#topにするだけでトップに戻ります。ただスクロールさせるjsを追加する場合は邪魔になるので削除します。</p>
<pre class="prettyprint">
<a href="#top" class="el-scrollTop"></a>
</pre>
            </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
