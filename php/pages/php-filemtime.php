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
                <?php $navList = array("ファイルの更新時刻を取得する"); ?>
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
			<p></p>
<pre class="prettyprint">
&lt;?php if (file_exists($filename)) { ?&gt;
	&lt;?php echo date (&quot;Y.m.d&quot;, filemtime($filename)).&#039; updated&#039;; ?&gt;
&lt;?php } ?&gt;
//出力例: 2020.09.08 updated

&lt;?php if (file_exists($filename)) { ?&gt;
	&lt;?php echo date (&quot;F d Y H:i:s.&quot;, filemtime($filename)).&#039; updated&#039;; ?&gt;
&lt;?php } ?&gt;
//出力例: September 08 2020 22:10:11. updated
</pre>

<cite class="ly-cite"><a href="https://www.php.net/manual/ja/function.filemtime.php" <?php echo $targetBlank ?>>PHP マニュアル</a></cite>
		</section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
