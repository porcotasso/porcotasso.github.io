
//home summary logo
const logoMark = document.getElementById('js-logoMark');
function showElementAnimation() {
var scrollY = window.pageYOffset;
logoMark.style.left = scrollY/2 - 100;
logoMark.style.top = scrollY/4 - 60;
logoMark.style.opacity = 0.3 - scrollY/1200;
}
showElementAnimation();
window.addEventListener('scroll', showElementAnimation);


const tagMarkJavascript = Array.from(document.getElementsByClassName('js-tagMark-javascript'));
const tagMarkSvg = Array.from(document.getElementsByClassName('js-tagMarkSvg'));
const tagMarkHtml = Array.from(document.getElementsByClassName('js-tagMark-html'));
// let tagMarkElements =[ ... tagMark];

const relatedcodeJs = document.getElementById('js-relatedcodeJs');
const relatedcodeHtml = document.getElementById('js-relatedcodeHtml');


tagMarkJavascript.forEach((value, index) => {
	tagMarkJavascript[index].addEventListener('click', () => {
		relatedcodeJs.classList.toggle('is-active');
	}, false)
});
tagMarkHtml.forEach((value, index) => {
	tagMarkHtml[index].addEventListener('click', () => {
		relatedcodeHtml.classList.toggle('is-active');
	}, false)
});

// // 	console.log(value);
// // console.log(index);
// // console.log(array);

// 	  if(aaa[index].className == 'bl-recentCnt_tagMark js-tagMark is-active'){
// 		  aaa[index].classList.remove('is-active');
// console.log('active');
// console.log(event.currentTarget);
// console.log(value);
// console.log(index);
// } else {
// 	let active = document.getElementsByClassName('js-tagMark');
// 	for (var i = 0; i < active.length; i++) {
// 		active[i].classList.remove('is-active');
// 	}
// 	console.log('no');

// }
// tagMark[index].classList.toggle('is-active');
// tagMark[index].nextElementSibling.classList.toggle('is-active');
//   }, false);
// });