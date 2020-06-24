var menuTrigger = document.getElementById("menu-trigger");
var headerNav = document.getElementById("header-nav");

menuTrigger.onclick = function() {
  this.classList.toggle("active");
  headerNav.classList.toggle("active");
};


// jquery ver
// $(function () {
//   $('.menu-trigger').on('click', function () {
//     $(this).toggleClass('active');
//     $('.header-nav').toggleClass('active');
//     $('.menu-tel-box').removeClass('active');
//   });