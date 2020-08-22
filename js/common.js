// HEADER MENU OPEN/CLOSE #menu-triggerをクリックで#js-headerTriggerがオンオフ
var menuTrigger = document.getElementById("menu-trigger");
var headerTrigger = document.getElementById("js-headerTrigger");
menuTrigger.onclick = function() {
  headerTrigger.classList.toggle("active");
};

// HOME MENU OPEN/CLOSE #menu-triggerをクリックで#js-headerTriggerがオンオフ
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

// HEADER SMALL after scroll
function init() {
	var px_change = 80;
	let header = document.getElementsByClassName('js-headerSmaller');
	window.addEventListener('scroll', function (e) {
		if (document.documentElement.scrollTop || document.body.scrollTop > px_change) {
			header[0].classList.add('smaller');
		} else if (header[0].classList.contains('smaller')) {
			header[0].classList.remove('smaller');
		}
	});
}
window.onload = init();

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

// 次の要素を取得
// var elements = document.getElementById("menuTrigger0");
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
//     $('.header-nav').toggleClass('active');
//     $('.menu-tel-box').removeClass('active');
//   });