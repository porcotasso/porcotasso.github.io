
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


const tagMark = document.getElementsByClassName('js-tagMark');

let aaa =[ ... tagMark];
console.log(aaa);
aaa.forEach((value, index, array) => {
// 	console.log(value);
// console.log(index);
// console.log(array);
  aaa[index].addEventListener('click', () => {

	  if(aaa[index].className == 'bl-recentCnt_tagMark js-tagMark is-active'){
		  aaa[index].classList.remove('is-active');
console.log('active');
console.log(event.currentTarget);
console.log(value);
console.log(index);
} else {
	let active = document.getElementsByClassName('js-tagMark');
	for (var i = 0; i < active.length; i++) {
		active[i].classList.remove('is-active');
	}
	console.log('no');

}
tagMark[index].classList.toggle('is-active');
tagMark[index].nextElementSibling.classList.toggle('is-active');
  }, false);
});