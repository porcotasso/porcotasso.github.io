function init() {
	var px_change = 80;
	window.addEventListener('scroll', function (e) {
		if ($(window).scrollTop() > px_change) {
			$(".js-headerMenu").addClass("smaller");
		} else if ($(".js-headerMenu").hasClass("smaller")) {
			$(".js-headerMenu").removeClass("smaller");
		}
	});
}
window.onload = init();