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


//home
const logoMark = document.getElementById('js-logoMark');

function showElementAnimation() {
	console.log('---');
	// let logoMarkLeft = logoMark.style.left;
	// let logoMarkLeftNum = parseFloat(logoMarkLeft);
	// var showTiming = window.innerHeight > 768 ? 200 : 40; // 要素が出てくるタイミングはここで調整
	var showTiming = 0;
	var scrollY = window.pageYOffset;
	// if(scrollY > 100){
		logoMark.style.left = scrollY - 100 + scrollY*scrollY/1000;
		logoMark.style.top = scrollY/3 - 80;
		logoMark.style.opacity = 0.3 - scrollY/1200;
	// }
	console.log(scrollY);
	// var windowH = window.innerHeight;
	// var elemClientRect = logoMark.getBoundingClientRect(); 
	// var elemY = scrollY + elemClientRect.top; 
	// console.log('scrollY');
	// console.log(scrollY);
	// console.log('elemClientRect');
	// console.log(elemClientRect);
	// if(scrollY + windowH - showTiming > elemY) {
	//   logoMark.style.left = scrollY -100;
	//   // logoMark.style.top = 100 + scrollY;
	// } else if(scrollY + windowH < elemY) {
	//   logoMark.style.left = -scrollY - 100;
	//   // logoMark.style.top = 100 - scrollY;
	// }
  }
  showElementAnimation();
  window.addEventListener('scroll', showElementAnimation);