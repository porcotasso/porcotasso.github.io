function init() {
	var px_change = 80;
	window.addEventListener('scroll', function (e) {
		if ($(window).scrollTop() > px_change) {
			$(".js-headerSmaller").addClass("smaller");
		} else if ($(".js-headerSmaller").hasClass("smaller")) {
			$(".js-headerSmaller").removeClass("smaller");
		}
	});
}
window.onload = init();