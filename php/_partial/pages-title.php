<header>
	<div class="articleCnt_headerBox">
		<h1 id="js-articleCntTtl" name="<?php echo($pageNumber) ?>"><?php echo $title ?></h1>
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
	<div class="cntList">
		<div class="swiper-container" id="js-swiperWrapper">
			<div class="swiper-wrapper" >
				<?php foreach($allPages as $value){ ?>
					<a href="<?php echo '/codenote/'. $value["pageName"].'.html'; ?>" class="swiper-slide js-swiperSliderTtl">
						<p class="swiper-slide_ttl"><?php echo $value["title"];?></p>
					</a>
				<?php } ?>
			</div>
			<!-- <div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div> 
			<div class="swiper-button-next"></div> -->
		</div>
		<div class="cntList_index">
			<span class="cntList_index_active" id="js-numberArea"></span>
			<span class="cntList_index_slash">/</span>
			<span class="cntList_index_all"><?php echo (count($allPages)) ?></span>
		</div>
	</div>
</header>


<nav class="bl-toc js-tocTgl" id="js-tocTop">
	<div class="bl-toc_box">
		<p class="miniHeaderTtl" id="js-min-HeaderTtl"><?php echo $title ?></p>
		<div class="bl-toc_ttl" id="js-tocTtl">目次</div>
	</div>
	<ul class="bl-toc_lists">
	<?php for($i = 0; $i < count($navList); $i++){ ?>
		<li class="tocList js-tocList">
			<div><?php echo $navList[$i]; ?></div>
		</li>
	<?php } ?>
	</ul>
</nav>
<p class="articleCnt_summary"><?php echo $lead ?></p>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script> -->
<script src="/js/codenote.js"></script>