
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

// close button
const relatedClose = Array.from(document.getElementsByClassName('js-relatedClose'));

relatedClose.forEach((value, index) => {
	console.log(relatedClose[index]);
	relatedClose[index].addEventListener('click', () => {
		console.log('aaaaa');
		let related = Array.from(document.getElementsByClassName('is-active'));
		related.forEach((value, index) => {
			related[index].classList.remove('is-active');
		});
	}, false)
});

// 全てのタグのクリック　表示されているリストを削除
const tag = Array.from(document.getElementsByClassName('js-tag'));
tag.forEach((value, index) => {
	tag[index].addEventListener('click', () => {
		let related = Array.from(document.getElementsByClassName('is-active'));
		related.forEach((value, index) => {
			related[index].classList.remove('is-active');
		});
	}, false)
});

const tagJavascript = Array.from(document.getElementsByClassName('js-tag-javascript'));
const javascript = document.getElementById('js-javascript');
tagJavascript.forEach((value, index) => {
	tagJavascript[index].addEventListener('click', () => {
		javascript.classList.toggle('is-active');
	}, false)
});

const tagHtml = Array.from(document.getElementsByClassName('js-tag-html'));
const html = document.getElementById('js-html');
tagHtml.forEach((value, index) => {
	tagHtml[index].addEventListener('click', () => {
		html.classList.toggle('is-active');
	}, false)
});

const tagSvg = Array.from(document.getElementsByClassName('js-tag-svg'));
const svg = document.getElementById('js-svg');
tagSvg.forEach((value, index) => {
	tagSvg[index].addEventListener('click', () => {
		svg.classList.toggle('is-active');
	}, false)
});

// // 	console.log(value);
// // console.log(index);
// // console.log(array);

// 	  if(aaa[index].className == 'bl-recentCnt_tag js-tag is-active'){
// 		  aaa[index].classList.remove('is-active');
// console.log('active');
// console.log(event.currentTarget);
// console.log(value);
// console.log(index);
// } else {
// 	let active = document.getElementsByClassName('js-tag');
// 	for (var i = 0; i < active.length; i++) {
// 		active[i].classList.remove('is-active');
// 	}
// 	console.log('no');

// }
// tag[index].classList.toggle('is-active');
// tag[index].nextElementSibling.classList.toggle('is-active');
//   }, false);
// });