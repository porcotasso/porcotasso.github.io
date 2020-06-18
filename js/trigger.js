$(function () {
  $('.menu-trigger').on('click', function () {
    $(this).toggleClass('active');
    $('.header-nav').toggleClass('active');
    $('.menu-tel-box').removeClass('active');
  });

  $('.menu-tel').on('click', function () {
    $('.menu-tel-box').toggleClass('active');
    $('.header-nav').removeClass('active');
    $('.menu-trigger').removeClass('active');
  });
});