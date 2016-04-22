///////////////////////////////////////
//
//
// JQUERY READY
//
//
///////////////////////////////////////
$(document).ready(function(){

	// AJAX SVG SPRITE
	$.get(extra_common_params.theme_url + "/extra/assets/img/sprite.svg", function (data) {
		var div = document.createElement("div");
		div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
		document.body.insertBefore(div, document.body.childNodes[0]);
		$("html").addClass("extra-svg-loaded");
	});

	// MENU MOBILE
	$("#mobile-menu-switch-manager").on("change", function() {
		$("html").toggleClass("mobile-menu-open", $(this).is(":checked"));
	});
});