<?php include("_partial/wrapper-head.php"); ?>
<main>
    <?php 
    $sort_by_lastmod = function($a, $b) {
    return filemtime($b) - filemtime($a);
    };
    $stack = array();
    foreach($allPages as $list){
        $filename = $baseUrl.$list["file"]; 
        array_push($stack,$filename);   
    }
    usort( $stack, $sort_by_lastmod );
    $n = 5;
    $latestUpdate = array_slice($stack, 0, $n);
    $latestContent = array();
    for($i = 0; $i < $n; $i++){
        foreach($allPages as $list){
            $filename = $baseUrl.$list["file"];
            if(in_array($filename, (array)$latestUpdate[$i])){
                array_push($latestContent,$list);
            }
        }
    } ?>
    <div class="bl-recentCnt ly-innnerWidth">
        <svg class="svg-note" viewBox="0 0 17 20">
            <use xlink:href="#svg-note"></use>
        </svg>
        <h2 class="bl-recentCnt_ttl">最近の更新</h2>
        <ul class="bl-recentCnt_pages">
            <?php foreach($latestContent as $value){ ?>
                <li class="bl-recentCnt_list">
                    <a href="<?php echo '/codenote/'. $value["pageName"].'.html'; ?>" class="bl-recentCnt_link">
                        <div class="bl-recentCnt_linkImg"><p class="bl-recentCnt_linkImgtxt"><?php echo $value["title"];?></p></div>
                        <p class="bl-recentCnt_linkTxt"><?php echo $value["title"];?></p>
                    </a>
                    <div class="bl-recentCnt_detail">
                        <ul class="tagList">
                            <?php foreach ( $value["tag"] as $name) { ?>
                            <li class="tag js-tag" name="<?php echo $name ?>">
                                <?php echo $name; ?>
                            </li>
                            <?php } ?>   
                        </ul>
                        <p class="bl-recentCnt_updateDate"><?php echo date ("Y.m.d", filemtime($baseUrl.$value["file"])); ?></p>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <?php foreach($pageLists as $lists){ ?>
            <div class="relatedList" id="<?php echo $lists["tag"] ?>">
                <div class="bl-recentCnt_relatedTtl">
                    <h3><?php echo $lists["title"]; ?></h3>
                    <div class="bl-recentCnt_relatedClose js-relatedClose">×</div>
                </div>
                <ul class="bl-recentCnt_relatedMenuLists">
                    <?php foreach($lists["pages"] as $value){ ?>
                    <li class="bl-recentCnt_relatedMenuList">
                        <a href="<?php echo '/codenote/'. $value["pageName"].'.html'; ?>" class="bl-recentCnt_relatedLink">
                            <?php echo $value["title"]; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>
    </div>

<?php /*
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($latestContent as $value){ ?>
                <a href="<?php echo '/pages/'. $value["pageName"].'.html'; ?>" class="swiper-slide">
                    <div class="swiper-slide_cnt">
                        <ul class="swiper-slide_tag">
                            <?php foreach ( $value["tag"] as $name) { ?>
                            <li class="swiper-slide_tag_list">
                                <?php echo $name; ?>
                            </li>
                            <?php } ?>   
                        </ul>
                        <h2 class="swiper-slide_title"><?php echo $value["title"];?></h2>
                        <p class="swiper-slide_lead"><?php echo $value["lead"];?></p>
                        <p class="swiper-slide_updateDate"><?php echo date ("Y.m.d", filemtime($baseUrl.$value["file"])); ?></p>
                    </div>
                </a>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div> 
        <div class="swiper-button-next"></div>
    </div>
*/ ?>

    <!-- <div class="ly-innnerWidth">
        <a href="pages/diary.html">
            <div class="ly-diary">
                <h2 class="ly-diary_title">制作日記</h2>
                <p>このサイトはまだ制作中です<br>
                早く人に見てもらいたいけど、できてない部分が多すぎるので地道に毎日編集中。</p>
            </div>
        </a>
    </div> -->
        
    <div class="el-closePopup" id="js-closePopup"></div>

</main>

<?php /*
<nav class="bl-pageNav ly-innnerWidth">
    <h2 class="bl-pageNav_ttl">メニュー</h2>
    <ul class="bl-pageNav_list">
        <?php foreach($pageLists as $list){ ?>
            <li class="bl-pageNav_cnt js-accordionTrigger">
                <div class="bl-pageNav_index">
                    <div class="bl-pageNav_ttl">
                        <h3><?php echo $list["title"]; ?></h3>
                        <span class="bl-pageNav_cntNumber"><?php echo count($list["pages"]) ?></span>
                    </div>
                </div>
            </li>
            <li class="bl-pageNav_menu">
                <ul class="bl-pageNav_menuList">
                    <?php foreach($list["pages"] as $value){ ?>
                    <li>
                        <a href="<?php echo '/pages/'. $value["pageName"].'.html'; ?>" class="bl-pageNav_link">
                            <?php echo $value["title"]; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</nav> 
*/ ?>
            
<!-- <script src="/js/codenote.js"></script> -->
<script>

// toggle tag and relatedList by clicking tag
const tag = Array.from(document.getElementsByClassName('js-tag'));
function inactiveTag(){
	//inactive an active tag
	document.getElementsByClassName('active-tag')[0].classList.remove('active-tag');
}
function inactiveRelatedList(){
	//inactive relatedList
	document.getElementsByClassName('active-list')[0].classList.remove('active-list');
}
tag.forEach((value, index) => {
	tag[index].addEventListener('click', () => {
		let activeTag = document.getElementsByClassName('active-tag');
		if(activeTag.length !== 0){
			//not first click
			if(tag[index].classList.contains('active-tag') == true){
			//click same tag - inactive clicked tag and relatedList
			tag[index].classList.remove('active-tag');
			inactiveRelatedList();
			} else {
				//click different tag - inactive different tag and relatedList
				inactiveTag();
				inactiveRelatedList();
				//active clicked tag and relatedList
				tag[index].classList.add('active-tag');
				document.getElementById(tag[index].getAttribute('name')).classList.add('active-list');
			}
		} else {
			//first click - active clicked tag and relatedList
			tag[index].classList.add('active-tag');
			document.getElementById(tag[index].getAttribute('name')).classList.add('active-list');
		}
	}, false);
});
// close button action
const relatedClose = Array.from(document.getElementsByClassName('js-relatedClose'));
relatedClose.forEach((value, index) => {
	relatedClose[index].addEventListener('click', () => {
		inactiveRelatedList();
		inactiveTag();
	}, false)
});


//popup
const popupTrigger = Array.from(document.getElementsByClassName('js-popupTrigger'));
const closePopup = document.getElementById('js-closePopup');
popupTrigger.forEach((value, index) => {
	popupTrigger[index].addEventListener('click', () => {
		let popup = Array.from(document.getElementsByClassName('js-popup'));
		let activeTrigger = popupTrigger[index].classList.contains('is-active');


		console.log(activeTrigger);
		// closePopup.classList.add('is-active');
		if(activeTrigger != true){
			//click active trigger
			// console.log('click active trigger');
			// popup[0].remove();
			// popupTrigger[index].classList.add('is-active');
			// closePopup.classList.remove('is-active');
			 if(popup[0] != undefined) {
				console.log('there is anotger active click');

			 } else {
				console.log('first click');
				popupTrigger[index].classList.add('is-active');
			 }
			// popup[0].remove();
			// activeTrigger.classList.remove('is-active');
			// popupTrigger[index].classList.add('is-active');
			// popupTrigger[index].parentNode.parentNode.insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data-popup") + '</div>');
			// closePopup.classList.remove('is-active');
			// console.log('already clicked');

		} else {
			popupTrigger[index].classList.remove('is-active');
			// popupTrigger[index].parentNode.parentNode.insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data-popup") + '</div>');
		}

		// if(popup[0] != undefined){
		// 	popup[0].remove();
		// };
		// console.log(popupTrigger[index]);
		// if(popupTrigger[index].classList.contains('is-active') == true){
		// 	popup[0].remove();
		// 	console.log('aaaaa');
		// 	popupTrigger[index].classList.remove('is-active');
		// } else {
		// popupTrigger[index].classList.add('is-active');
		// popupTrigger[index].parentNode.parentNode.insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data-popup") + '</div>');
		// }
	}, false)
});
closePopup.addEventListener('click', () => {
	let popup = Array.from(document.getElementsByClassName('js-popup'));
	if(popup[0] != undefined){
		popup[0].remove();
		closePopup.classList.remove('is-active');
	};
});

</script>
<?php include("_partial/wrapper-foot.php"); ?>