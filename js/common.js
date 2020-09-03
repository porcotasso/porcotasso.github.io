function handleTouchMove(event) {
  event.preventDefault();
}
//スクロール禁止
document.addEventListener('touchmove', handleTouchMove, { passive: false });
//スクロール復帰
document.removeEventListener('touchmove', handleTouchMove, { passive: false });

// HEADER HAMBURGER MENU 
var hamburger = document.getElementById("js-hamburger");
var headerNav = document.getElementById("js-headerNav");
var blackCover = document.getElementById("js-blackCover");
var bodyOverflow = document.getElementsByTagName("body");

hamburger.onclick = function() {
  // メニューのトグル
  headerNav.classList.toggle("active");
  // 背景のスクロールを止める
  if(bodyOverflow[0].style.overflow == 'hidden'){
    bodyOverflow[0].style.overflow = '';
  } else {
    bodyOverflow[0].style.overflow = 'hidden';
  }
  // 黒背景のトグル
  blackCover.classList.toggle("active");
  // 黒背景のクリックでメニュー閉じる
  blackCover.onclick = function() {
    headerNav.classList.remove("active");
    blackCover.classList.remove("active");
    bodyOverflow[0].style.overflow = '';
  }
};

// HEADER SMALL after scroll
function headerSmaller() {
	var px_change = 80;
	let headerSmaller = document.getElementsByClassName('js-headerSmaller');
	window.addEventListener('scroll', () => {
    var y = document.documentElement.scrollTop || document.body.scrollTop;
		if ( y > px_change) {
			headerSmaller[0].classList.add('smaller');
		} else if (headerSmaller[0].classList.contains('smaller')) {
			headerSmaller[0].classList.remove('smaller');
		}
	});
}
window.onload = headerSmaller();


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
    // '&': '&amp;',
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