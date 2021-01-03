document.addEventListener('DOMContentLoaded',() => {
  
// HEADER HAMBURGER MENU 
  var burger = document.getElementById('js-burger');
  var headerNav = document.getElementById('js-headerNav');
  var body = document.getElementById('js-body');
  burger.onclick = function() {
    headerNav.classList.toggle('active');
    body.classList.toggle('active');
  };

// HOME MENU OPEN/CLOSE #menu-triggerをクリックで#js-headerがオンオフ
  const accordionTrigger = document.getElementsByClassName('js-accordionTrigger');
  for (let i = 0; i < accordionTrigger.length; i++){
    let titleEach = accordionTrigger[i];
    let content = titleEach.nextElementSibling;
    titleEach.addEventListener('click', () => {
      titleEach.classList.toggle('is-active');
      content.classList.toggle('is-open');
      Array.prototype.forEach.call(accordionTrigger, function(element) {
        element.classList.toggle('not-focus');
        });
      });
  }
});


// escape code in pre tag
  var escapeHtml = (function (String) {
    var escapeMap = {
      // '&': '&amp;',
      "'": '&#x27;',
      '`': '&#x60;',
      '"': '&quot;',
      '<': '&lt;',
      '>': '&gt;',
    };
    var escapeReg = '[';
    var reg;
    for (var p in escapeMap) {
      if (escapeMap.hasOwnProperty(p)) {
        escapeReg += p; 
      }
    }
    escapeReg += ']';
    reg = new RegExp(escapeReg, 'g');
    return function escapeHtml (str) {
      str = (str === null || str === undefined) ? '' : '' + str;
      return str.replace(reg, function (match) {
        return escapeMap[match];
      });
    };
  }(String));
  var pre = document.querySelectorAll('pre');
  for(var i = 0; i < pre.length; i++) {
    pre[i].innerHTML = escapeHtml(pre[i].innerHTML);
  }

//marker 
var saClass = 'el-marker';
var saShowClass = 'show';
var triggerMarginDefault = 200;
var saElm = document.querySelectorAll('.' + saClass); //.showがついたelement のオブジェクト
var saFunc = function() {
  var dataMargin = saClass + '_margin'; //el-marker_margin
  var dataTrigger = saClass + '_trigger'; //el-marker_trigger
  var dataDelay = saClass + '_delay'; //el-marker_delay
  for(var i = 0; i < saElm.length; i++) {  //
    var triggerMargin = triggerMarginDefault;　//200
    var elm = saElm[i];//各saElm
    var showPos = 0; //変数作成
    if(elm.dataset[dataMargin] != null) {
      triggerMargin = parseInt(elm.dataset[dataMargin]);　//文字列を整数に変換
    }
    if(elm.dataset[dataTrigger]) {
      showPos = document.querySelector(elm.dataset[dataTrigger]).getBoundingClientRect().top + triggerMargin; //指定の要素の上からの高さ＋200px
    } else {
      showPos = elm.getBoundingClientRect().top + triggerMargin;
    }
    if (window.innerHeight > showPos) { //windowのviewportの高さが、指定の要素のviewportの上からの高さ＋200pxを超えたらー＞要素が下から200pxより上に行ったら
      var delay = (elm.dataset[dataDelay])? elm.dataset[dataDelay] : 100;
      setTimeout(function(index) {
        saElm[index].classList.add('show');
      }.bind(null, i), delay);
    }
  }
}
window.addEventListener('load', saFunc);
window.addEventListener('scroll', saFunc);


//swiper set 'initialSlide'
var articleCntTtl = document.getElementById('js-articleCntTtl').textContent;
var swiperSliderTtl = document.getElementsByClassName('js-swiperSliderTtl');
var array = Array.prototype.slice.call(swiperSliderTtl);//配列に変換
let pageNumber = 0;
for (let n = 0; n < array.length; n++) {
  if (array[n].outerText == articleCntTtl){
    pageNumber = n ;
  }
}

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
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
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