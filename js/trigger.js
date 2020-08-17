
// id:menu-triggerをクリックしたらid:js-headerTriggerがオンオフ
var menuTrigger = document.getElementById("menu-trigger");
var headerTrigger = document.getElementById("js-headerTrigger");
menuTrigger.onclick = function() {
  headerTrigger.classList.toggle("active");
};

// 次の要素を取得
// var elements = document.getElementById("menuTrigger0");
// var menu = elements.nextElementSibling;
// elements.onclick = function() {
//   menu.classList.toggle("active");
// };

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
// for(i=0; i < elements.length; i++){
//   console.log("bbb");
//   var aaa = document.getElementById("menu-trigger");
//   var nextElementSibling = elements[i].nextElementSibling;
//   elements[i].onclick = function() {
//     nextElementSibling[i].classList.toggle("active");
//   console.log("ccc");

//   };
// }


console.log(nextElementSibling);
elements.onclick = function() {
  nextElementSibling.classList.toggle("active");
};

// jquery ver
// $(function () {
//   $('.menu-trigger').on('click', function () {
//     $(this).toggleClass('active');
//     $('.header-nav').toggleClass('active');
//     $('.menu-tel-box').removeClass('active');
//   });