<div class="articleCnt_ttl">
	<?php if (isset($pagePre)) { ?>
		<a href="<?php echo $pagePre ?>" class="articleCnt_ttl_pre"></a>
	<?php } ?>	
	<h1><?php echo $title ?></h1>
	<?php if (isset($pageNext)) { ?>
		<a href="<?php echo $pageNext ?>" class="articleCnt_ttl_nxt"></a>
	<?php } ?>	
</div>
<?php if (file_exists($filename)) { ?>
	<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
<?php } ?>
<p><?php echo $lead ?></p>  