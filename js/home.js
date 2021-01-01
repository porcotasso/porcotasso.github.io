//swiper
var mySwiper = new Swiper ('.swiper-container', {
	autoplay: {
		delay: 2500,
	},
	loop: true,
	speed: 500,
	// ここから
	pagination: {
		el: '.swiper-pagination',
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// ここまでを追加
	slidesPerView: 3,    // 追加...1度に表示するスライド枚数
	spaceBetween: 4,    // 追加...スライド間の余白
	// ブレイクポイントを設定
	breakpoints: {
		767: {
		slidesPerView: 1,
		spaceBetween: 0,
		}
	}
});


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