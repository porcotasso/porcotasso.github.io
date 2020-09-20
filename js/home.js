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