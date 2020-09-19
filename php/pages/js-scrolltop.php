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
	bottom: 24px;
	right: 0;
	width: 40px;
	height: 40px;
	background: $gray-300;
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
let scrollTop = document.getElementById( "js-scrollTop" );
window.addEventListener('scroll', () => {
  let pageOffsetY = window.pageYOffset || document.documentElement.scrollTop;
  console.log(scrollTop);
  if(pageOffsetY < 500){
    scrollTop.style.opacity = pageOffsetY/500;
  } else{
    scrollTop.style.opacity = 100;
  }
});
scrollTop.addEventListener('click', () =>{
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
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
