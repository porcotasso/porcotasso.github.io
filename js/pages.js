document.addEventListener('DOMContentLoaded',() => {
  
//目次クリックで目次リスト開閉
  let tocTgl = document.getElementsByClassName('js-tocTgl');
  let tocTtl = document.getElementById('js-tocTtl');
  tocTtl.addEventListener('click', () => tocTgl[0].classList.toggle('is-open'));


//目次が画面のトップについたらスタイル変更
  let tocTop = document.getElementById('js-tocTop');  
  const optionTocTop = {
    root: null,
    rootMargin: "0px 0px -99% 0px",
    threshold: 0.0,
  };
  const callback1 = (entries) => {
    entries.forEach( entry => {
      if(entry.isIntersecting) {
        tocTop.classList.add('tocTop');
      } else {
        tocTop.classList.remove('tocTop');
      }
    });
  };
  const observer1 = new IntersectionObserver(callback1, optionTocTop);
  observer1.observe(tocTop);


//ページの位置に応じて目次に位置を示す表示 IntersectionObserver
  const tocList = document.querySelectorAll('.js-tocList');
  const tocContent = document.querySelectorAll('.tocContent');
  const tocMap = new Map();
  //1. option設定 
  const option = {
    root: null,
    rootMargin: "-74% 0px -20% 0px",
    threshold: 0.0,
  };
  // 2.実行するcallback関数作成
  const callback = (entries) => {
    entries.forEach((entry) => {
      if (entry.intersectionRatio) {
        tocMap.get(entry.target).classList.add('active');
      } else {
        tocMap.get(entry.target).classList.remove('active');
      }
    });
  };
  //3.初期化オブジェクト作成
  const io = new IntersectionObserver(callback, option);
  //4.監視
  tocContent.forEach((content, i) => {
    io.observe(content);
    tocMap.set(content, tocList.item(i));
    tocMap.set(tocList.item(i), content);
  });


// 目次で移動するscrollIntoView
  tocList.forEach((item) => {
    item.addEventListener('click', (event) => {
      tocMap.get(event.currentTarget).scrollIntoView({
        behavior: "smooth"
      });
      tocTgl[0].classList.remove('is-open');
    });
  });
});



//swiper set 'initialSlide'
let pageNumber = Number(document.getElementById('js-articleCntTtl').getAttribute('name'));
// var swiperSliderTtl = document.getElementsByClassName('js-swiperSliderTtl');
// var array = Array.prototype.slice.call(swiperSliderTtl);//配列に変換
// let pageNumber = 0;
	

// for (let n = 0; n < array.length; n++) {
//   console.log(array[n].outerText.normalize('NFD'));
//   console.log(articleCntTtl.normalize('NFD'));

//   // console.log(array[n].outerText);
//   // console.log(articleCntTtl);
//   if (array[n].outerText.normalize( "NFD" ) == articleCntTtl.normalize( "NFD" )){
//     console.log(array[n].outerText);
//     console.log(articleCntTtl);
//     pageNumber = n;
//     console.log(pageNumber);
//     console.log('aaaaa');
//     break;
//   }


//swiper
var mySwiper = new Swiper ('.swiper-container', {
  
  initialSlide: pageNumber,
  centeredSlides: true,
	// autoplay: {
	// 	delay: 2500,
	// },
	loop: true,
	// speed: 500,
	// ここから
	// pagination: {
	// 	el: '.swiper-pagination',
	// },
	// navigation: {
	// 	nextEl: '.swiper-button-next',
	// 	prevEl: '.swiper-button-prev',
	// },
	// ここまでを追加
	slidesPerView: 9,    // 追加...1度に表示するスライド枚数
	spaceBetween: 4,    // 追加...スライド間の余白
	// ブレイクポイントを設定
	breakpoints: {
		767: {
		slidesPerView: 5,
		spaceBetween: 0,
		}
	}
});

// swiper をスライドするたびに真ん中の番号を更新する

let pagesActive = document.getElementsByClassName('swiper-slide-active');
pagesActive[0].classList.add('pagesActive');//今のページのタイトルをクリックをできなくする
let pagesActiveNumber = Number(pagesActive[0].getAttribute('data-swiper-slide-index'));//番号を代入
document.getElementById('js-numberArea').insertAdjacentHTML('afterbegin', pagesActiveNumber + 1);

function aaaa (){
  let numberArea = document.getElementById('js-numberArea');
  numberArea.insertAdjacentHTML('afterend','<span class="articleCnt_index_active" id="js-numberAreaNew"></span>');
  numberArea.remove();
  let pagesActive = document.getElementsByClassName('swiper-slide-active');//新規に番号を取得
  let pagesActiveNumber = Number(pagesActive[0].getAttribute('data-swiper-slide-index'));//番号を代入
  let numberAreaNew = document.getElementById('js-numberAreaNew');
  numberAreaNew.insertAdjacentHTML('afterbegin', pagesActiveNumber + 1 );//番号を表示
  numberAreaNew.id = 'js-numberArea';
};

let bbb = document.getElementById('js-swiperWrapper');
bbb.addEventListener('touchend', aaaa, false); //イベントの種類はtouch系しか動かない