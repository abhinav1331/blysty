jQuery(document).ready(function($) {
	// init Isotope
	var $grid = $('.grid').isotope({
		// options
		itemSelector: '.grid-item',
		layoutMode: 'packery'
	});
	// layout Isotope after each image loads
	$grid.imagesLoaded().progress( function() {
		$grid.isotope('layout');
	});

	/* Load function */
	readyfun();

	/* Load function */
	$(window).on('load', function() {
		loadfun();
	});

	/* Resize function */
	$(window).on('resize', function() {
		readyfun();
	});

	/* Function for all Events (Load, Ready and Resize) */
	function allEvents() {
		var headheight = $('header').outerHeight();
		$('.page-wraspper').css('padding-top', headheight);

		var target = $('.tab-target').find('.active').find('a').data('tab');

		$('.' + target + '-tab').show();

		/* Post Gallery Height */
		$('.modified-temp .post-gallery, .modified-temp .post-gallery .post-list, .modified-temp .post-gallery .post-list .grid-item').removeAttr('style');
		var s = $('.modified-temp .post-gallery .post-list .grid-item').width();
		$('.modified-temp .post-gallery .post-list .grid-item').width(s);
		var itemHeight = $('.modified-temp .grid-item').outerHeight();
		var rowWidth = 0;
		$('.modified-temp .post-gallery .post-list .grid-item').each(function() {
			rowWidth += $(this).outerWidth();
		});
		$('.modified-temp .post-gallery .post-list').css({
			'width': rowWidth
		});
		var galleryHeight = $('.modified-temp .post-gallery-wrapper').outerHeight();
		var listHeight = $('.modified-temp .post-list').outerHeight();
		var scrollHeight = galleryHeight - listHeight;
		$('.modified-temp .post-gallery-wrapper').css('margin-bottom', "-" + scrollHeight + 'px');

		$(".empty-box").each(function() {
			$(this).removeAttr('style');
			var ht = $(this).parent().outerHeight();
			$(this).css('height', ht - 4);
		});

		var ht = $('.boardsWrapper').outerHeight();
		$(".loginformContainer").css('height', ht);
	}
	/* Function for all Events (Ready) */
	function readyfun() {
		allEvents();
	}

	/* Function for all Events (Load) */
	function loadfun() {
		allEvents();
	}

	/* Function for all Events (Resize) */
	function resizefun() {
		allEvents();
	}

	/* Custom Style */

	/* Gallery Controls */
	$('.prv').on('click', function(event) {
		event.preventDefault();
		var act = $('.post-list').find('.active');
		var fst = $('.post-list .grid-item').first().hasClass('active');
		act.removeClass('active');

		if (!fst) {
			act.prev().addClass('active');
			var c = act.prev().position().left;
			$('.post-gallery-wrapper').animate({ scrollLeft: c }, 'slow');
		} else {
			$('.post-list .grid-item').last().addClass('active');
			var c = $('.post-list .grid-item').last().position().left;
			$('.post-gallery-wrapper').animate({ scrollLeft: c }, 'slow');
		}
	});
	$('.nxt').on('click', function(event) {
		// event.preventDefault();
		var act = $('.post-list').find('.active');
		var lst = $('.post-list .grid-item').last().hasClass('active');
		act.removeClass('active');

		if (!lst) {
			var c = act.next().position().left;
			$('.post-gallery-wrapper').animate({ scrollLeft: c }, 'slow');
			act.next().addClass('active');
		} else {
			var c = $('.post-list .grid-item').first().position().left;
			$('.post-gallery-wrapper').animate({ scrollLeft: c }, 'slow');
			$('.post-list .grid-item').first().addClass('active');
		}
	});
	$('.selectImg').on('click', function() {
		$('#selectImgTarget').trigger('click');
	});
	$("#selectImgTarget").on("change", function(){
		var files = !!this.files ? this.files : [];
		if ( !files.length || !window.FileReader ) return;
		if ( /^image/.test( files[0].type ) ) {
			var reader = new FileReader();
			reader.readAsDataURL( files[0] );
			reader.onloadend = function(){
				$("#selectedImage").css("background-image", "url(" + this.result + ")");
			}
		}
	});
	$('[type=checkbox]').each(function() {
		$(this).after('<div class="checkbox"></div>');
	});

	$(document).on('click', '.checkbox', function() {
		$(this).prev('[type=checkbox]').trigger('click');
	});
	$('[data-toggle=modal]').click(function() {
		setTimeout(function() {
			var pad = $('body').css('padding-right');
			$('#header').css('right', pad);
		}, -2)
	});
	$(document).on('click', function() {
		var hscls = $('body').hasClass('modal-open');
		if (!hscls) {
			$('header').removeAttr('style');
		}
	});
	$('.fle').on('click', function() {
		$(this).next('input').trigger('click');
	});
	$(document).on('click', '.loginformContainer .green-btn', function(e) {
		e.preventDefault();
		var thisAttr = $(this).attr('href');
		if (thisAttr == "#SigForm") {
			$(thisAttr).slideDown();
			$("#logForm").slideUp();
		}
		if (thisAttr == "#logForm") {
			$(thisAttr).slideDown();
			$("#SigForm").slideUp();
		}
	});

	var cs;
	var html = [];
	$('.costom-btn svg').on('mouseover', function() {
		var cs = $(this).css([ "-webkit-animation", "-moz-animation", "-ms-animation", "animation" ]);
		$.each( cs, function( prop, value ) {
			html.push( prop + ": " + value );
		});
	});
	$('.costom-btn').on('mouseleave', function() {
		console.log(html + '');
	});

/*	var withRand = function($con, $item) {
		var interTime = jQuery($con).data('interval') * 3000;
		var $item = jQuery($con).data('target');
		setInterval(function() {
			var pos = jQuery($con + " " + $item).length;
			var randPos = Math.floor(Math.random() * pos);
			jQuery($con + " " + $item).removeClass('ovr');
			setTimeout(function() {
				jQuery.ajax({
					async: true,
					type: "POST",
					url: link+'/wp-content/themes/blysty/ajax/getRandomPin.php',		
					dataType: 'html',
					cache: false,
					data:{format:'raw'},
					success:function(resp){
						jQuery($con + " " + $item).eq(randPos).empty().append(resp);
					}
					
				});
				jQuery($con + " " + $item).eq(randPos).addClass('ovr');
			}, 500)
		}, interTime)
	};
	withRand('.logincon');*/

	var withoutRandom = function($con) {
	var interTime = jQuery($con).data('interval') * 3000;
	var $item = jQuery($con).data('target');
	setInterval(function() {
		var $hasItem = jQuery($con + ' ' + $item).hasClass('ovr');
		if (!$hasItem) {
			jQuery($con + ' ' + $item).first().addClass('ovr');
		} else {
			var pos = jQuery($con).find('.ovr').index();
			var $lastItem = jQuery($con + ' ' + $item).last().hasClass('ovr');
			jQuery.ajax({
				async: true,
				type: "POST",
				url: link+'/wp-content/themes/blysty/ajax/getRandomPin.php',		
				dataType: 'html',
				cache: false,
				data:{format:'raw'},
				success:function(resp){
					jQuery($con + ' ' + $item).eq(pos).removeClass('ovr');
					setTimeout(function(){  jQuery($con + ' ' + $item).eq(pos).empty().append(resp); }, 500);
				}
			});
			if($lastItem) {
				jQuery($con + ' ' + $item).first().addClass('ovr');
			} else {
				jQuery($con + ' ' + $item).eq(pos + 1).addClass('ovr');
			}
		}
	}, interTime)
};
withoutRandom('.logincon');

	$(window).on("load",function() {
		$(".listHeight").mCustomScrollbar({
			theme:"light-3",
			scrollButtons:{enable:true}
		});
	});
});