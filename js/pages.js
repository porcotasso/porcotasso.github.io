document.addEventListener('DOMContentLoaded',() => {
  
//目次クリックで目次リスト開閉
  let tocTgl = document.getElementsByClassName('js-tocTgl');
  let tocTtl = document.getElementById('js-tocTtl');
  tocTtl.addEventListener('click', () => tocTgl[0].classList.toggle('is-open'));


//目次が画面のトップについたらスタイル変更
  let tocTop = document.getElementById('js-tocTop');  
  const optionTocTop = {
    root: null,
    rootMargin: "0px 0px -99% 0px",
    threshold: 0.0,
  };
  const callback1 = (entries) => {
    entries.forEach( entry => {
      if(entry.isIntersecting) {
        tocTop.classList.add('tocTop');
      } else {
        tocTop.classList.remove('tocTop');
      }
    });
  };
  const observer1 = new IntersectionObserver(callback1, optionTocTop);
  observer1.observe(tocTop);


//ページの位置に応じて目次に位置を示す表示 IntersectionObserver
  const tocList = document.querySelectorAll('.js-tocList');
  const tocContent = document.querySelectorAll('.tocContent');
  const tocMap = new Map();
  //1. option設定 
  const option = {
    root: null,
    rootMargin: "-74% 0px -20% 0px",
    threshold: 0.0,
  };
  // 2.実行するcallback関数作成
  const callback = (entries) => {
    entries.forEach((entry) => {
      if (entry.intersectionRatio) {
        tocMap.get(entry.target).classList.add('active');
      } else {
        tocMap.get(entry.target).classList.remove('active');
      }
    });
  };
  //3.初期化オブジェクト作成
  const io = new IntersectionObserver(callback, option);
  //4.監視
  tocContent.forEach((content, i) => {
    io.observe(content);
    tocMap.set(content, tocList.item(i));
    tocMap.set(tocList.item(i), content);
  });


// 目次で移動するscrollIntoView
  tocList.forEach((item) => {
    item.addEventListener('click', (event) => {
      tocMap.get(event.currentTarget).scrollIntoView({
        behavior: "smooth"
      });
      tocTgl[0].classList.remove('is-open');
    });
  });



// スクロールでトップに戻るボタンの表示
  let start_pos = 0;
  let opacity = 0;
  let display = 'block';
  const btnScrollTop = document.getElementById( "js-scrollTop" );
  window.addEventListener('scroll', function(e){
       var scrollTop = window.pageYOffset || document.documentElement.scrollTop; //  上からのスクロール距離
       var current_pos =scrollTop;

        if (current_pos > start_pos) {
          //down
          if (opacity > 0 ) {
            opacity -= 0.2;
            display = 'block';
          } else {
            opacity = 0;
            display = 'none';
          }
        } else {
          //up
          if (scrollTop < 600) {
            if (opacity > 0 ) {
              opacity -= 0.2;
              display = 'block';
            } else {
              opacity = 0;
              display = 'none';
            }
          } else {
            if (opacity < 1){
              opacity += 0.1;
              display = 'block';
            } else {
              opacity = 1;
              display = 'block';
            }
          }
        }

        start_pos = current_pos;
        btnScrollTop.style.opacity = opacity;
        btnScrollTop.style.display = display;
        // console.log(opacity);
   });


// スクロールでトップに戻る動き
	let btnScrollTop1 = document.getElementById( "js-scrollTop" );
	// window.addEventListener('scroll', () => {
	//   let pageOffsetY = window.pageYOffset || document.documentElement.btnScrollTop;
	//   if(pageOffsetY > 400){
	//     btnScrollTop.style.opacity = 0.4;
	//   } else {
	//     btnScrollTop.style.opacity = pageOffsetY/1000;
	//   }
	// });
	scrollTop(btnScrollTop1, 180);
	function scrollTop(el, duration) {
		el.addEventListener('click', function() {
			let currentY = window.pageYOffset; 
			let step = duration/currentY > 1 ? 10 : 100; // 三項演算子
			let timeStep = duration/currentY * step; // スクロール時間
			let intervalId = setInterval(scrollUp, timeStep);
			// timeStepの間隔でscrollUpを繰り返す。
			// clearItervalのために返り値intervalIDを定義する。
			function scrollUp(){
				currentY = window.pageYOffset;
				if(currentY === 0) {
					clearInterval(intervalId); // ページ最上部に来たら終了
				} else {
					scrollBy( 0, -step ); // step分上へスクロール
				}
			}
		});
	};
});
