function init() {
	var px_change = 80;

	window.addEventListener('scroll', function (e) {
		if ($(window).scrollTop() > px_change) {
			$("header").addClass("smaller");

		} else if ($("header").hasClass("smaller")) {
			$("header").removeClass("smaller");
		}
	});
}
window.onload = init();