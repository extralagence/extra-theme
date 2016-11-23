///////////////////////////////////////
//
//
// JQUERY READY
//
//
///////////////////////////////////////
$(document).ready(function () {

	// AJAX SVG SPRITE
	$.get(extra_common_params.theme_url + "/extra/assets/img/sprite.svg", function (data) {
		var div = document.createElement("div");
		div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
		document.body.insertBefore(div, document.body.childNodes[0]);
		$("html").addClass("extra-svg-loaded");
	});

	// MENU MOBILE
	$("#mobile-menu-switch-manager").on("change", function () {
		$("html").toggleClass("mobile-menu-open", $(this).is(":checked"));
	});

	// BACK TO TOP
	extraInitBackToTop($('body'));

	// SHARE
	extraInitCustomShare($('body'));
});
///////////////////////////////////////
//
//
// BACK TO TOP
//
//
///////////////////////////////////////
function extraInitBackToTop($wrapper) {
	$wrapper.find(".back-to-top").on("click", function (event) {
		event.preventDefault();
		console.log("ici");
		TweenMax.to(window, 1.5, {
			scrollTo: {
				y: 0,
				autoKill: false
			},
			ease    : Power3.easeInOut
		});
	});
}
///////////////////////////////////////
//
//
// SHARE
//
//
///////////////////////////////////////
function extraInitCustomShare($wrapper) {
	var $share = $wrapper.find(".share"),
		$buttonShare = $share.find('.button-share'),
		$shareLinks = $share.find('.extra-social-wrapper'),
		$buttons = $shareLinks.find('.extra-social-button'),
		shareLinksOpen = false,
		shareLinksTimeline = null;

	shareLinksTimeline = new TimelineMax({paused: true});
	shareLinksTimeline.staggerFrom($buttons, 0.6, {y: -60}, 0.08);

	$buttonShare.on('click', function (event) {
		event.preventDefault();

		if (shareLinksOpen) {
			// close
			$buttonShare.removeClass('active');
			shareLinksTimeline.reverse();
		} else {
			// open
			$buttonShare.addClass('active');
			shareLinksTimeline.play();
		}
		shareLinksOpen = !shareLinksOpen;
	});
}

///////////////////////////////////////
//
//
// SEARCH
//
//
///////////////////////////////////////
$(document).ready(function () {
	var $html = $("html"),
		$input = $("#s");
	$input
		.on("focus", open)
		.on("blur", close)
		.on("keyup", escape);
	function open() {
		$html.toggleClass("extra-search-closed", false);
	}

	function close() {
		$html.toggleClass("extra-search-closed", true);
	}

	function escape(event) {
		if (event.which == 27 && !$html.hasClass("extra-search-closed")) {
			close();
		}
	}

	close();

	$html.addClass("extra-search-ready");
});

///////////////////////////////////////
//
//
// SUBMENU MANAGER
//
//
///////////////////////////////////////
$(document).ready(function () {
	var $menu = $(".menu-page, #menu-menu-mobile"),
		$children = $menu.find(".menu-has-children, .menu-item-has-children");
	$children.each(function () {
		var $child = $(this),
			$submenu = $child.children(".menu, .sub-menu"),
			$link = $child.children("a"),
			$button = $('<button class="menu-has-children-toggle"><span class="inner"></span></button>').insertBefore($link),
			isOpen = false;

		if ($child.hasClass("current-menu-item") || $submenu.find(".current-menu-item").length) {
			isOpen = true;
		}

		$button.on("click", function (event) {
			event.preventDefault();
			if (isOpen) {
				close(0.5);
			} else {
				open(0.5);
			}
		});
		function open(time) {
			isOpen = true;
			TweenMax.set($submenu, {
				height: 'auto'
			});
			TweenMax.from($submenu, time, {
				height: 0
			});
			$button.toggleClass("open", true);
		}

		function close(time) {
			isOpen = false;
			TweenMax.to($submenu, time, {
				height: 0
			});
			$button.toggleClass("open", false);
		}

		if (isOpen) {
			open(0);
		} else {
			close(0);
		}
	});
});
///////////////////////////////////////
//
//
// VIDEO RESIZE
//
//
///////////////////////////////////////
$(document).ready(function () {
	fluidvids.init();
});
///////////////////////////////////////
//
//
// DEPLOY MENUS
//
//
///////////////////////////////////////
$(document).ready(function () {
	var $menu = $("#mobile-menu"),
		$children = $menu.find(".menu-has-children, .menu-item-has-children");
	$children.each(function () {
		var $child = $(this),
			$submenu = $child.children(".sub-menu"),
			$link = $child.children("a"),
			$button = $('<button class="menu-has-children-toggle"><span class="inner"></span></button>').insertBefore($link),
			isOpen = false;

		if ($child.hasClass("current-menu-item") || $submenu.find(".current-menu-item").length) {
			isOpen = true;
		}

		$button.on("click", function (event) {
			event.preventDefault();
			if (isOpen) {
				close(0.5);
			} else {
				open(0.5);
			}
		});
		function open(time) {
			isOpen = true;
			TweenMax.set($submenu, {
				height: 'auto'
			});
			TweenMax.from($submenu, time, {
				height: 0
			});
			$button.toggleClass("open", true);
		}

		function close(time) {
			isOpen = false;
			TweenMax.to($submenu, time, {
				height: 0
			});
			$button.toggleClass("open", false);
		}

		if (isOpen) {
			open(0);
		} else {
			close(0);
		}
	});
});