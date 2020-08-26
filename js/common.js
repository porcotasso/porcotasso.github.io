// HEADER MENU 
  // hamburgerクリックで
  // メニューをアニメーションで開閉
  // 黒透過背景を追加
  // 下層コンテンツのスクロールを止める

var hamburger = document.getElementById("js-hamburger");
var headerNav = document.getElementById("js-headerNav"); //親要素にクラスを追加して子要素を操作する
var blackCover = document.getElementById("js-blackCover");
var bodyOverflow = document.getElementsByTagName("body");
// var wrapPosFix = document.getElementById("js-wrapPosFix");
hamburger.onclick = function() {
  headerNav.classList.toggle("active");
  blackCover.classList.toggle("active");
  if(bodyOverflow[0].style.overflow == 'hidden'){
    bodyOverflow[0].style.overflow = '';
  } else {
    bodyOverflow[0].style.overflow = 'hidden';
  }


  // var clientRect = wrapPosFix.getBoundingClientRect();　　//背景の位置を取得
  // var posY = String( clientRect.top)  + 'px';　　　　//背景のY値を取得
  // if(wrapPosFix.style.position == 'fixed'){
  //   wrapPosFix.style.position = 'static';
  //   wrapPosFix.style.top = 0;
    
  // } else {
  //   wrapPosFix.style.position = 'fixed';　                //背景のY値のまま固定
  //   wrapPosFix.style.top = posY;
  // }
};

// HEADER SMALL after scroll
function init() {
	var px_change = 80;
	let header = document.getElementById('js-header');
	window.addEventListener('scroll', function (e) {
    var y = document.documentElement.scrollTop || document.body.scrollTop;
		if ( y > px_change) {
			header.classList.add('smaller');
		} else if (header.classList.contains('smaller')) {
			header.classList.remove('smaller');
		}
	});
}
window.onload = init();


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
// 			$(".js-headerSmaller").addClass("smaller");
// 		} else if ($(".js-headerSmaller").hasClass("smaller")) {
// 			$(".js-headerSmaller").removeClass("smaller");
// 		}
// 	});
// }
// window.onload = init();


// escape code in pre tag
var escapeHtml = (function (String) {
  var escapeMap = {
    '&': '&amp;',
    "'": '&#x27;',
    '`': '&#x60;',
    '"': '&quot;',
    '<': '&lt;',
    '>': '&gt;'
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


// console.log(nextElementSibling);
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