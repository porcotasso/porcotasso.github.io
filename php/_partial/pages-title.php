<header>
	<div class="articleCnt_headerBox">
		<h1 id="js-articleCntTtl"><?php echo $title ?></h1>
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

		<?php /*
		<div class="otherCnt">
			<?php if (isset($pageLast)) { ?>
				<a href="<?php echo $pageLast ?>" class="otherCnt_pre"><p class="otherCnt_ttl"><?php echo $pageLastTtl ?></p></a>
			<?php } ?>	
			<?php if (isset($pagePre)) { ?>
				<a href="<?php echo $pagePre ?>" class="otherCnt_pre"><p class="otherCnt_ttl"><?php echo $pagePreTtl ?></p></a>
			<?php } ?>	
			<?php if (isset($pageNext)) { ?>
				<a href="<?php echo $pageNext ?>" class="otherCnt_nxt"><p class="otherCnt_ttl"><?php echo $pageNextTtl ?></p></a>
			<?php } ?>
			<?php if (isset($pageFirst)) { ?>
				<a href="<?php echo $pageFirst ?>" class="otherCnt_pre"><p class="otherCnt_ttl"><?php echo $pageFirstTtl ?></p></a>
			<?php } ?>	
		</div>
		*/ ?>

	</div>  
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php foreach($allPages as $value){ ?>
				<a href="<?php echo '/pages/'. $value["html"]; ?>" class="swiper-slide swiper-slide_ttl js-swiperSliderTtl">
					<?php echo $value["title"];?>
				</a>
			<?php } ?>
		</div>
		<!-- <div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div> 
		<div class="swiper-button-next"></div> -->
	</div>
	<div class="articleCnt_index">
		<span class="articleCnt_index_active" id="js-swiperNumber"></span>
		<span class="articleCnt_index_slash">/</span>
		<span class="articleCnt_index_all"><?php echo (count($allPages)) ?></span>
	</div>
</header>


<nav class="bl-toc js-tocTgl" id="js-tocTop">
	<p class="miniHeaderTtl"><?php echo $title ?></p>
	<div class="bl-toc_ttl" id="js-tocTtl">目次</div>
	<ul class="bl-toc_lists">
	<?php for($i = 0; $i < count($navList); $i++){ ?>
		<li class="tocList js-tocList">
			<div><?php echo $navList[$i]; ?></div>
		</li>
	<?php } ?>
	</ul>
</nav>
<p class="articleCnt_summary"><?php echo $lead ?></p>
<script src="/js/pages.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>