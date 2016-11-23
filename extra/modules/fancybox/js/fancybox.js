window.extraFancyboxOverrideOptions = {
	margin      : [140, 90, 120, 90],
	arrows      : false,
	closeBtn    : false,
	openEffect  : 'elastic',
	closeEffect : 'elastic',
	openSpeed   : 300,
	closeSpeed  : 300,
	nextSpeed   : 300,
	prevSpeed   : 300,
	openOpacity : false,
	closeOpacity: false,
	mouseWheel  : true
};
$(document).ready(function () {

	var $html = $("html"),
		$header = $('.extra-fancybox-header'),
		$counter = $header.find('.extra-fancybox-counter'),
		$current = $counter.find('.current'),
		$total = $counter.find('.total'),
		$navButtons = $header.find('.extra-fancybox-prev, .extra-fancybox-next'),
		$lastOpened = null;

	$('.extra-fancybox-close').on('click', function () {
		$.fancybox.close();
	});
	$('.extra-fancybox-next').on('click', function () {
		$.fancybox.next();
	});
	$('.extra-fancybox-prev').on('click', function () {
		$.fancybox.prev();
	});
	$(document)
		.on("afterLoad", function () {
			if ($.fancybox.coming.type == 'image') {
				$.fancybox.coming.openEffect = 'elastic';
				$.fancybox.coming.closeEffect = 'elastic';
				$.fancybox.coming.openOpacity = false;
				$.fancybox.coming.closeOpacity = false;
				if (wWidth > 600) {
					$.fancybox.coming.margin = [140, 90, 120, 90];
				} else {
					$.fancybox.coming.margin = [70, 10, 70, 10];
				}
			}
			else if ($.fancybox.coming.type == 'iframe') {
				if (wWidth > 600) {
					$.fancybox.coming.margin = [140, 90, 120, 90];
				} else {
					$.fancybox.coming.margin = [70, 10, 70, 10];
				}
				$.fancybox.coming.aspectRatio = true;
				$.fancybox.coming.width = 1280;
				$.fancybox.coming.height = 720;
			}
			else {
				$.fancybox.coming.openEffect = 'fade';
				$.fancybox.coming.closeEffect = 'fade';
				$.fancybox.coming.openOpacity = false;
				$.fancybox.coming.closeOpacity = false;
				$.fancybox.coming.arrows = false;
				$.fancybox.coming.closeBtn = false;
				$.fancybox.coming.aspectRatio = false;
				$.fancybox.coming.width = 'auto';
				$.fancybox.coming.height = 'auto';
			}
		})

		.on("beforeShow", function () {

			// THIS IS A GROUP
			if ($.fancybox.current.group.length < 2) {
				$counter.hide();
				$navButtons.hide();
			}

			// THIS IS NOT A GROUP
			else {
				$counter.show();
				$navButtons.show();
			}

			// REMOVE CLASS FROM IMAGE
			if ($lastOpened) {
				$lastOpened.removeClass('extra-fancybox-hidden');
			}

			// SET CURRENT OPENED IMAGE
			if ($.fancybox.current.element) {
				$lastOpened = $.fancybox.current.element;
				$lastOpened.addClass('extra-fancybox-hidden');
			}

			// ADD CLASSES TO HTML
			$html.addClass('extra-fancybox-open');
			if ($.fancybox.current.type == 'image') {
				$html.addClass('extra-fancybox-type-image');
			}

			// UPDATE COUNTER
			$current.html($.fancybox.current.index + 1);
			$total.html($.fancybox.current.group.length);
		})

		.on("beforeClose", function () {
			$html.removeClass('extra-fancybox-open extra-fancybox-type-image');
		})
		.on("afterClose", function () {
			if ($lastOpened) {
				$lastOpened.removeClass('extra-fancybox-hidden');
			}
		});
});