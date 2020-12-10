<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-toc">
                <div class="ly-toc_ttl">目次</div>
                <?php $navList = array("0","1","2","3"); ?>
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
			<h3></h3>
<pre class="prettyprint">
aaaaa
</pre>
<cite class="ly-cite"><a class="ly-cite_link" href="0" <?php echo $targetBlank ?>>aaaaaaaaaa</a></cite>
		</section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
