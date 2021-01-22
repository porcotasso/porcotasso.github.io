document.addEventListener('DOMContentLoaded',() => {
  
// HEADER HAMBURGER MENU 
const headerBurger = document.getElementById('js-headerBurger');
const header = document.getElementById('js-header');
const headerMenu = document.getElementById('js-headerMenu');
let bodytag = document.getElementById('js-body');
const blackCover = document.getElementById('js-blackCover');

headerBurger.addEventListener('click', () => {
  headerBurger.classList.toggle('avtive-headerMenu');
  header.classList.toggle('avtive-headerMenu');
  headerMenu.classList.toggle('avtive-headerMenu');
  blackCover.classList.toggle('avtive-headerMenu');
  bodytag.classList.toggle('avtive-headerMenu');
});

blackCover.addEventListener('click', () => {
  headerBurger.classList.toggle('avtive-headerMenu');
  header.classList.toggle('avtive-headerMenu');
  headerMenu.classList.toggle('avtive-headerMenu');
  blackCover.classList.toggle('avtive-headerMenu');
  bodytag.classList.toggle('avtive-headerMenu');
});


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

  // スクロールでトップに戻る動き
  let btnScrollTop1 = document.getElementById( "js-scrollTop" );
  let minHeaderTtl = document.getElementById( "js-min-HeaderTtl" );
  // window.addEventListener('scroll', () => {
  //   let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
  //   if(pageOffsetY > 400){
  //     btnScrollTop.style.opacity = 0.4;
  //   } else {
  //     btnScrollTop.style.opacity = pageOffsetY/1000;
  //   }
  // });
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
  };
  scrollTop(btnScrollTop1, 280);
  scrollTop(minHeaderTtl, 280);

  // スクロールでトップに戻るボタンの表示
  let start_pos = 0;
  let opacity = 0;
  let display = 'block';
  const btnScrollTop = document.getElementById( "js-scrollTop" );
  window.addEventListener('scroll', function(e){
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop; //  上からのスクロール距離
      var current_pos =scrollTop;

        if (current_pos > start_pos) {
          //down
          if (opacity > 0 ) {
            opacity -= 0.2;
            display = 'block';
          } else {
            opacity = 0;
            display = 'none';
          }
        } else {
          //up
          if (scrollTop < 600) {
            if (opacity > 0 ) {
              opacity -= 0.2;
              display = 'block';
            } else {
              opacity = 0;
              display = 'none';
            }
          } else {
            if (opacity < 1){
              opacity += 0.1;
              display = 'block';
            } else {
              opacity = 1;
              display = 'block';
            }
          }
        }

        start_pos = current_pos;
        btnScrollTop.style.opacity = opacity;
        btnScrollTop.style.display = display;
        // console.log(opacity);
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



const headerMenuTtl = Array.from(document.getElementsByClassName('js-headerMenuTtl'));
headerMenuTtl.forEach((value, index) => {
	headerMenuTtl[index].addEventListener('click', () => {
console.log('dddd');
headerMenuTtl[index].nextElementSibling.classList.toggle('is-active');
	}, false)
});