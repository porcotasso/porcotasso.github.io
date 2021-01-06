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

