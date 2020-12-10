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
		<?php if (isset($pagePre)) { ?>
			<a href="<?php echo $pagePre ?>" class="otherCnt_pre"><?php echo $pagePreTtl ?></a>
		<?php } ?>	
		<?php if (isset($pageNext)) { ?>
			<a href="<?php echo $pageNext ?>" class="otherCnt_nxt"><?php echo $pageNextTtl ?></a>
		<?php } ?>	
	</div>
</div>

<p class="articleCnt_summary"><?php echo $lead ?></p>  