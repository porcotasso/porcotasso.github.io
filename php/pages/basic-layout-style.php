<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
        <header>
			<?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-toc">
                <div class="ly-toc_ttl">目次</div>
                <?php $navList = array("ガターについて"); ?>
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
            <p>モバイルの左右幅。機種によってモバイルの幅が違い、狭いものと広いものの差は、かなり大きいので、端の幅はピクセル固定せずに425px 20px 320px 16pxのように比率で変えたほうが見やすいと考えています。</p>
        </section>


    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
