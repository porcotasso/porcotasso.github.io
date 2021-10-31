<!doctype html>
<html lang="ja">
<?php /* include("_variable.php"); */ ?> 


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon and App icon -->
    <link rel="icon" href="/images/favicon/favicon.ico">             
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="android-touch-icon" sizes="192x192" href="/images/favicon/android-touch-icon.png" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/home.css">
    <?php date_default_timezone_set('Asia/Tokyo'); ?>
    <title>Porconote</title>
</head>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script> -->
<body class="ly-body" id="js-body">
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/images/common/sprite.svg'); ?>
    <header class="ly-header" id="js-header">  
        <h1 class="headerLogo">
            <svg class="svg-logo" viewBox="0 0 252 52">
                <use xlink:href="#svg-logo"></use>
            </svg>
        </h1>
    </header>
    <nav class="ly-homeNav">
        <!-- <div class="headerMenu" id="js-headerMenu"> -->
        <a class="navLink js-navLink" name="codenote">Codenote</a>
        <a class="navLink js-navLink" name="artnote">Artnote</a>
        <a class="navLink js-navLink" name="profile">Profile</a>
        <!-- </div> -->
    </nav>
    <main class="ly-navCnt">
        <div class="navCnt" id="codenote">
            <div class="el-cover el-cover--codenote js-closeCnt"></div>
            <h2 class="navCnt_ttl">ウェブを楽しむ</h2>
            <p class="navCnt_txt">
                フロントエンドエンジニア、ポルコ•タッソのこつこつ技術メモです。ウェブの技術は日進月歩、<br>
                知らないことは理解するのを楽しもう。<br>
                できないことは身に付くのを楽しもう。<br>
                何かを作れることを楽もう。
            </p>
            <a href="codenote.html" class="navCnt_link">メモを見る</a>
        </div>
        <div class="navCnt" id="artnote">
            <div class="el-cover el-cover--artnote js-closeCnt"></div>
            <h2 class="navCnt_ttl">表現を楽しむ</h2>
            <p class="navCnt_txt">まだ取りかかっていません。しばらく時間がかかります。<br>
            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/porco.tasso/?hl=ja">Instagram</a>にコンテンツを載せています。</p>
        </div>

        <?php /*
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="artwork" src="/images/illust/illust_001.jpg">aaaa</div>
                    <div class="swiper-slide"><img class="artwork" src="/images/illust/illust_002.jpg">aaaa</div>
                    <div class="swiper-slide"><img class="artwork" src="/images/illust/illust_001.jpg">aaaa</div>
                    <div class="swiper-slide"><img class="artwork" src="/images/illust/illust_002.jpg">aaaa</div>
                </div>
            </div>

            <script>
            let mySwiper = new Swiper ('.swiper-container', {
            // 以下にオプションを設定
            loop: true, //最後に達したら先頭に戻る
            speed:300,
            //ページネーション表示の設定
            pagination: { 
                el: '.swiper-pagination', //ページネーションの要素
                type: 'bullets', //ページネーションの種類
                clickable: true, //クリックに反応させる
            },
            slidesPerView:3,
            slidesPerGroup:1,
            centeredSlides:true,
            autoplay: {
                delay: 2000,
            },
            //ナビゲーションボタン（矢印）表示の設定
            //   navigation: { 
            //     nextEl: '.swiper-button-next', //「次へボタン」要素の指定
            //     prevEl: '.swiper-button-prev', //「前へボタン」要素の指定
            //   },
            
            //スクロールバー表示の設定
            scrollbar: { 
                el: '.swiper-scrollbar', //要素の指定
            },
            })
            </script> 
        */ ?>

        <div class="navCnt" id="profile">
            <div class="el-cover el-cover--profile js-closeCnt"></div>
            <h2 class="navCnt_ttl">プロフィール</h2>
            <div class="navCnt_txt">
                <p>ポルコタッソ</p>
            </div>
        </div>
        <div class="onBeforeUnloadCover" id="js-onBeforeUnloadCover"></div>
    </main>

<script>

// toggle tag and relatedList by clicking tag
const navLink = Array.from(document.getElementsByClassName('js-navLink'));
function inactiveNavLink(){
	//inactive an active tag
	document.getElementsByClassName('active-navLink')[0].classList.remove('active-navLink');
}
function inactiveRelatedCnt(){
	//inactive relatedList
	document.getElementsByClassName('active-navCnt')[0].classList.remove('active-navCnt');
}
navLink.forEach((value, index) => {
	navLink[index].addEventListener('click', () => {
		let activeTag = document.getElementsByClassName('active-navLink');
		if(activeTag.length !== 0){
			//not first click
			if(navLink[index].classList.contains('active-navLink') == true){
			//click same tag - inactive clicked tag and relatedList
			navLink[index].classList.remove('active-navLink');
			inactiveRelatedCnt();
			} else {
				//click different tag - inactive different tag and relatedList
				inactiveNavLink();
				inactiveRelatedCnt();
				//active clicked tag and relatedList
				navLink[index].classList.add('active-navLink');
				document.getElementById(navLink[index].getAttribute('name')).classList.add('active-navCnt');
			}
		} else {
			//first click - active clicked tag and relatedList
			navLink[index].classList.add('active-navLink');
			document.getElementById(navLink[index].getAttribute('name')).classList.add('active-navCnt');
		}
	}, false);
});
// close button action
const closeCnt = Array.from(document.getElementsByClassName('js-closeCnt'));
closeCnt.forEach((value, index) => {
	closeCnt[index].addEventListener('click', () => {
		inactiveRelatedCnt();
		inactiveNavLink();
	}, false)
});


// ページを離れる直前の処理
// const onBeforeUnloadCover = docment.getElementById('js-onBeforeUnloadCover'); 
// function mes(event){
//     //   event.returnValue = "ページを離れます。よろしいですか？";
//     onBeforeUnloadCover.classList.add('onBeforeUnload');
// }
 
// window.onbeforeunload = mes;
</script>

    <!-- <a id="js-scrollTop" class="el-scrollTop"><span class="el-scrollTop_txt">トップ</span></a> -->
    <!-- メニューを出した時に出る黒背景 -->
    

    <!-- <ul class="bl-menu">
        <li class="bl-menu_list"><a class="bl-menu_link" href="art.html">art</a></li>
        <li class="bl-menu_list"><a class="bl-menu_link" href="profile.html">profile</a></li>
    </ul> -->
<script src="/js/home.js"></script>
<?php include("_partial/wrapper-foot.php"); ?>
