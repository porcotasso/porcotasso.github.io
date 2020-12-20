<header>
	<div class="articleCnt_headerBox">
		<h1><?php echo $title ?></h1>
		<ul class="tagLists">
			<?php foreach ( $tag as $name) { ?>
			<li class="tagLists_list">
				<?php echo $name; ?>
			</li>
			<?php } ?>   
		</ul>
		<?php if (file_exists($filename)) { ?>
			<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' 更新'; ?></p>
		<?php } ?>
		<div class="otherCnt">
			<?php if (isset($pageLast)) { ?>
				<a href="<?php echo $pageLast ?>" class="otherCnt_pre"><?php echo $pageLastTtl ?></a>
			<?php } ?>	
			<?php if (isset($pagePre)) { ?>
				<a href="<?php echo $pagePre ?>" class="otherCnt_pre"><?php echo $pagePreTtl ?></a>
			<?php } ?>	
			<?php if (isset($pageNext)) { ?>
				<a href="<?php echo $pageNext ?>" class="otherCnt_nxt"><?php echo $pageNextTtl ?></a>
			<?php } ?>
			<?php if (isset($pageFirst)) { ?>
				<a href="<?php echo $pageFirst ?>" class="otherCnt_pre"><?php echo $pageFirstTtl ?></a>
			<?php } ?>	
		</div>
	</div>  
</header>
<nav class="ly-toc js-tocTgl" id="js-tocTop">
	<p class="miniHeaderTtl"><?php echo $title ?></p>
	<div class="ly-toc_ttl" id="js-tocTtl">目次</div>
	<ul class="ly-toc_lists">
	<?php for($i = 0; $i < count($navList); $i++){ ?>
		<li class="tocList js-tocList">
			<div><?php echo $navList[$i]; ?></div>
		</li>
	<?php } ?>
	</ul>
</nav>
<p class="articleCnt_summary"><?php echo $lead ?></p>