<?php include("../_partial/wrapper-head.php"); ?>
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
                <?php $navList = array("スクロールジャンク"); ?>
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
            <cite class="ly-cite"><a href="https://blog.webico.work/passive-event-listeber01" <?php echo $targetBlank ?>>スクロールジャンク</a></cite>  
            <cite class="ly-cite"><a href="https://qiita.com/yukiTTT/items/773356c2483b96c9d4e0" <?php echo $targetBlank ?>>スクロールジャンク</a></cite>  
            <cite class="ly-cite"><a href="https://qiita.com/yukiTTT/items/773356c2483b96c9d4e0" <?php echo $targetBlank ?>>スクロールジャンク</a></cite>  

		</section>

    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
