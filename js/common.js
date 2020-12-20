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





window.addEventListener('DOMContentLoaded', function() {

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


  // 目次scrollIntoView
  tocList.forEach((item) => {
    item.addEventListener('click', (event) => {
      console.log("aaaaaa");
      tocMap.get(event.currentTarget).scrollIntoView({
        behavior: "smooth"
      });
      tocTgl[0].classList.remove('is-open');
    });
  });

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



document.addEventListener('DOMContentLoaded', function(){
  let start_pos = 0;
  let opacity = 0;
  const btnScrollTop = document.getElementById( "js-scrollTop" );
  window.addEventListener('scroll', function(e){
       var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
       var current_pos =scrollTop;
       if(scrollTop > 400){
          if (current_pos > start_pos　&& opacity > 0) {
            //down
            opacity -= 0.5;
          }else{
            //up
            opacity += 0.2;
          }
        } else {
          opacity -= 0.1;
        }
        start_pos = current_pos;
        btnScrollTop.style.opacity = opacity;
        console.log(opacity);
   });
 });

// スクロールでトップに戻るボタン
let btnScrollTop = document.getElementById( "js-scrollTop" );
// window.addEventListener('scroll', () => {
//   let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
//   if(pageOffsetY > 400){
//     btnScrollTop.style.opacity = 0.4;
//   } else {
//     btnScrollTop.style.opacity = pageOffsetY/1000;
//   }
// });
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
