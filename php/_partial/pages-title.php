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
		<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
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