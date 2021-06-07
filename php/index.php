<!doctype html>
<html lang="ja">
<!-- <?php include("_variable.php"); ?> -->
<!-- code-prettify -->
<!-- <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script> -->

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
        <!-- <div class="headerBurger" id="js-headerBurger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>         -->
    </header>
    <nav class="ly-homeNav">
        <!-- <div class="headerMenu" id="js-headerMenu"> -->
        <a class="navLink js-navLink" name="codenote">Codenote</a>
        <a class="navLink js-navLink" name="artnote">Artnote</a>
        <a class="navLink js-navLink" name="profile">Profile</a>
        <!-- </div> -->
    </nav>
    <div>
        <div class="navCnt" id="codenote">
            <h2 class="bl-summary_ttl">ウェブを楽しむ</h2>
            <div class="bl-summary_txt">
                <p>フロントエンドエンジニア、ポルコ•タッソのこつこつ技術メモです。 </p>
                <p>知らないことは理解するのを楽しもう<br>できないことは身につくのを楽しもう</p>
                <p>まとまってないメモはそのうち清書予定。多分。</p>
            </div>
        </div>
        <div class="navCnt" id="artnote">artnoteeeee</div>
        <div class="navCnt" id="profile">pronoteeeee</div>
    </div>

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
const relatedClose = Array.from(document.getElementsByClassName('js-relatedClose'));
relatedClose.forEach((value, index) => {
	relatedClose[index].addEventListener('click', () => {
		inactiveRelatedCnt();
		inactiveNavLink();
	}, false)
});
</script>






    <a id="js-scrollTop" class="el-scrollTop"><span class="el-scrollTop_txt">トップ</span></a>
    
    <!-- メニューを出した時に出る黒背景 -->
    <div class="el-blackCover" id="js-blackCover"></div>
<main>
    <!-- <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">codenote</div>
            <div class="swiper-slide">artnote</div>
            <div class="swiper-slide">profile</div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
    <script>
  var mySwiper = new Swiper ('.swiper-container', {
    // ここからオプション
    slidesPerView: 'auto',
    loop: true,
    // direction: vertical,
    autoplay: {
        delay: 2000,
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }

  })
</script> -->
    <!-- <ul class="bl-menu">
        <li class="bl-menu_list"><a class="bl-menu_link" href="art.html">art</a></li>
        <li class="bl-menu_list"><a class="bl-menu_link" href="profile.html">profile</a></li>
    </ul> -->
</main>
<script src="/js/home.js"></script>
<?php include("_partial/wrapper-foot.php"); ?>
