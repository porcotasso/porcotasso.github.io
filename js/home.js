
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
// const relatedClose = Array.from(document.getElementsByClassName('js-relatedClose'));

// relatedClose.forEach((value, index) => {
// 	relatedClose[index].addEventListener('click', () => {
// 		let related = Array.from(document.getElementsByClassName('is-active'));
// 		related.forEach((value, index) => {
// 			related[index].classList.remove('is-active');
// 		});
// 	}, false)
// });


const tag = Array.from(document.getElementsByClassName('js-tag'));
const tagJavascript = Array.from(document.getElementsByClassName('js-tag-javascript'));


const relatedList = Array.from(document.getElementsByClassName('js-relatedList'));
const relatedJavascript = Array.from(document.getElementsByClassName('js-related-javascript'));
const activeRelated = document.getElementById('active-list');


// // 全てのタグのクリック　表示されているリストを削除
tag.forEach((value, index) => {
	tag[index].addEventListener('click', () => {
		let activeTag = document.getElementById('active-tag');
		if(activeTag !== null){
			console.log('not first click');
			console.log(activeTag);
			console.log(tag[index].id);
			if(tag[index].id == 'active-tag'){
			console.log('click same tag');
			//クリックしたタグを非アクティブに
			tag[index].removeAttribute('id');
			// 	//クリックしたタグの関連リストを非表示
			document.getElementById('tag[index].getAttribute("name")').classList.removeAttribute('id');
			} else {
				console.log('click not same tag');
				//既に表示されているタグを非アクティブに
				document.getElementById('active-tag').removeAttribute('id');
				//クリックしたタグをアクティブに
				tag[index].setAttribute('id', 'active-tag');
				//既に表示されている他の関連リストを非表示
				document.getElementById('active-list').removeAttribute('id');
				// document.getElementById('js-related-javascript').classList.remove('active-list');
				//クリックしたタグの関連リストを表示
				// relatedListのnameが一致する
				document.getElementById(tag[index].getAttribute('name')).setAttribute('id', 'active-list');

			}
		} else {
			console.log('first click');
			//クリックしたタグをアクティブに
			tag[index].setAttribute('id', 'active-tag');
			//クリックしたタグの関連リストを表示
			document.getElementById(tag[index].getAttribute('name')).setAttribute('id', 'active-list');
			// document.getElementById('js-related-javascript').classList.add('active-list');

		}
	}, false);
});

// 	tag[index].addEventListener('click', () => {
// 		let related = Array.from(document.getElementsByClassName('is-active'));
// 		let activeTag = Array.from(document.getElementsByClassName('active-tag'));
// 		tag[index].classList.toggle('active-tag');
// 		related.forEach((value, index) => {
// 			related[index].classList.remove('is-active');
// 			activeTag[index].classList.remove('active-tag');
// 		});
// 	}, false)



// const tagJavascript = Array.from(document.getElementsByClassName('js-tag-javascript'));
// const javascript = document.getElementById('js-javascript');
// tagJavascript.forEach((value, index) => {
// 	tagJavascript[index].addEventListener('click', () => {
// 		javascript.classList.toggle('is-active');
// 	}, false)
// });

// const bb = Array.from(document.getElementsByClassName('active-tag'));


// const tagHtml = Array.from(document.getElementsByClassName('js-tag-html'));
// const html = document.getElementById('js-html');
// tagHtml.forEach((value, index) => {
// 	tagHtml[index].addEventListener('click', () => {
// 		html.classList.toggle('is-active');
// 	}, false)
// });

// const tagSvg = Array.from(document.getElementsByClassName('js-tag-svg'));
// const svg = document.getElementById('js-svg');
// tagSvg.forEach((value, index) => {
// 	tagSvg[index].addEventListener('click', () => {
// 		svg.classList.toggle('is-active');
// 	}, false)
// });










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