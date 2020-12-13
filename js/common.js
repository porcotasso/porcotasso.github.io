//bodyにイベントをつけてると反応するが、下層のタグだと反応しない
// function handleTouchMove(event) {
// 	event.preventDefault();
// }

// HEADER HAMBURGER MENU 
var hamburger = document.getElementById("js-hamburger");
var headerNav = document.getElementById("js-headerNav");
var blackCover = document.getElementById("js-blackCover");
var bodyOverflow = document.getElementsByTagName("body");
hamburger.onclick = function() {
  // メニューのトグル
  headerNav.classList.toggle("active");
  if (headerNav.classList.contains('active')) {
      //スクロール禁止
      // bodyOverflow[0].addEventListener('touchmove', handleTouchMove, { passive: false });
      // console.log('click');
  } else {
      //スクロール復帰
      // bodyOverflow[0].removeEventListener('touchmove', handleTouchMove, { passive: false });
      // console.log('close');
  }

  //背景のスクロールを止める android
  // if(bodyOverflow[0].style.overflow == 'hidden'){
  //   bodyOverflow[0].style.overflow = '';
  // } else {
  //   bodyOverflow[0].style.overflow = 'hidden';
  // }

  // 黒背景のトグル
  blackCover.classList.toggle("active");
  // 黒背景のクリックでメニュー閉じる
  if (blackCover.classList.contains('active')) {
    blackCover.addEventListener('touchstart', () => {
      headerNav.classList.remove("active");
      blackCover.classList.remove("active");
    })
  };
  // blackCover.onclick = function() {
    // headerNav.classList.remove("active");
    // blackCover.classList.remove("active");
    // bodyOverflow[0].style.overflow = '';
  // }
};

// HEADER scroll
function headerScroll() {
  var start_pos = 0;
	let headerScroll = document.getElementsByClassName('js-headerScroll');
	window.addEventListener('scroll', () => {
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var current_pos = scrollTop;
    console.log(scrollTop);
    console.log(current_pos);
    console.log(start_pos);
    if (current_pos - 10 > start_pos) {
      headerScroll[0].classList.add('scroll');
    }else if(current_pos + 10 < start_pos){
      headerScroll[0].classList.remove('scroll');
    }
    start_pos = current_pos;
    console.log(start_pos);
    console.log('-------');
	});
}
window.addEventListener('DOMContentLoaded', headerScroll());
// window.onload = headerScroll();


// toc toggle & toc miniHeader
  // -> toc toggle 
let tocTgl = document.getElementsByClassName('js-tocToggle');
let tocTtl = document.getElementById('js-tocTtl');

tocTtl.addEventListener('click', () => tocTgl[0].classList.toggle('active'));

  // -> toc miniHeader
window.addEventListener('DOMContentLoaded', function() {
  let headerScroll = document.getElementById('js-miniHeader');  
  //1. option設定 
  const option = {
    root: null,
    rootMargin: "0px 0px -98% 0px",
    threshold: 0.0,
  };
  //IntersectionObserverのcallback関数の作成
  const callback1 = (entries) => {
    entries.forEach( entry => {
      if(entry.isIntersecting) {
        // 要素が交差した際の動作
        headerScroll.classList.add('smaller');
        tocTgl[0].classList.remove('active');
      } else {
        // 要素が交差から外れた際の動作
        headerScroll.classList.remove('smaller');
      }
    });
  };
  const observer1 = new IntersectionObserver(callback1, option);
  observer1.observe(headerScroll);
});




// HOME MENU OPEN/CLOSE #menu-triggerをクリックで#js-headerがオンオフ
document.addEventListener("DOMContentLoaded",() => {
  const title = document.querySelectorAll('.js-accordionTrigger');
  for (let i = 0; i < title.length; i++){
    let titleEach = title[i];
    let content = titleEach.nextElementSibling;
    titleEach.addEventListener('click', () => {
      titleEach.classList.toggle('is-active');
      content.classList.toggle('is-open');
    });
  }
});



// HEADER SMALL jQuery
// function init() {
// 	var px_change = 80;
// 	window.addEventListener('scroll', function (e) {
// 		if ($(window).scrollTop() > px_change) {
// 			$(".js-headerScroll").addClass("smaller");
// 		} else if ($(".js-headerScroll").hasClass("smaller")) {
// 			$(".js-headerScroll").removeClass("smaller");
// 		}
// 	});
// }
// window.onload = init();


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


// 次の要素を取得
// var elements = document.getElementById("hamburger0");
// var menu = elements.nextElementSibling;
// elements.onclick = function() {
//   menu.classList.toggle("active");
// };

// for(i=0; i < elements.length; i++){
//   console.log("bbb");
//   var aaa = document.getElementById("menu-trigger");
//   var nextElementSibling = elements[i].nextElementSibling;
//   elements[i].onclick = function() {
//     nextElementSibling[i].classList.toggle("active");
//   console.log("ccc");
//   };
// }


// elements.onclick = function() {
//   nextElementSibling.classList.toggle("active");
// };

// HEADER MENU OPEN/CLOSE jquery ver
// $(function () {
//   $('.menu-trigger').on('click', function () {
//     $(this).toggleClass('active');
//     $('.header-menu').toggleClass('active');
//     $('.menu-tel-box').removeClass('active');
//   });




 

//スクロールでトップに戻るボタン
let btnScrollTop = document.getElementById( "js-scrollTop" );
window.addEventListener('scroll', () => {
  let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
  if(pageOffsetY > 400){
    btnScrollTop.style.opacity = 0.4 ;
  } else{
    btnScrollTop.style.opacity = pageOffsetY/1000;
  }
});
scrollTop(btnScrollTop, 180);
function scrollTop(el, duration) {
  el.addEventListener('click', function() {
    let currentY = window.pageYOffset; 
    let step = duration/currentY > 1 ? 10 : 100; // 三項演算子
    let timeStep = duration/currentY * step; // スクロール時間
    let intervalId = setInterval(scrollUp, timeStep);
    // timeStepの間隔でscrollUpを繰り返す。
    // clearItervalのために返り値intervalIDを定義する。
    function scrollUp(){
      currentY = window.pageYOffset;
      if(currentY === 0) {
          clearInterval(intervalId); // ページ最上部に来たら終了
      } else {
          scrollBy( 0, -step ); // step分上へスクロール
      }
    }
  });
}
