const $ = jQuery;
const JSCCommon = {
	// часть вызов скриптов здесь, для использования при AJAX
	btnToggleMenuMobile: [].slice.call(document.querySelectorAll(".toggle-menu-mobile--js")),
	menuMobile: document.querySelector(".menu-mobile--js"),
	menuMobileLink: [].slice.call(document.querySelectorAll(".menu-mobile--js ul li a")),
	body: document.querySelector("body"),

	modalCall() {
		$(".link-modal").fancybox({
			arrows: false,
			infobar: false,
			touch: false,
			type: 'inline',
			autoFocus:false,
			i18n: {
				en: {
					CLOSE: "Закрыть",
					NEXT: "Вперед",
					PREV: "Назад",
					// PLAY_START: "Start slideshow",
					// PLAY_STOP: "Pause slideshow",
					// FULL_SCREEN: "Full screen",
					// THUMBS: "Thumbnails",
					// DOWNLOAD: "Download",
					// SHARE: "Share",
					// ZOOM: "Zoom"
				},
			},
		});
		$(".modal-close-js").click(function () {
			$.fancybox.close();
		})
	},
 
	// табы  . 
	tabscostume(tab) {
		$('.' + tab + '__caption').on('click', '.' + tab + '__btn:not(.active)', function (e) {
			$(this).closest('.' + tab).find('.' + tab + '__content').find(".form-control").val('').removeAttr("required");
			$(this).closest('.' + tab).find('.' + tab + '__content').eq($(this).index()).find(".form-control").attr("required", "required");
			$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('.' + tab).find('.' + tab + '__content').hide().removeClass('active')
				.eq($(this).index()).fadeIn().addClass('active');

		});
	},
	// /табы  
	inputMask() {
		// mask for input
		$('input[type="tel"]').attr("pattern", "[+][0-9]{1}[(][0-9]{3}[)][0-9]{3}-[0-9]{2}-[0-9]{2}").inputmask("+9(999)999-99-99");
	}
	// /inputMask

};

function eventHandler() {
	// полифил для object-fit
	objectFitImages();
	// Picture element HTML5 shiv
	document.createElement("picture");
	// для свг
	svg4everybody({});

	JSCCommon.modalCall();

	JSCCommon.tabscostume('tabs');

	// JSCCommon.mobileMenu();

	JSCCommon.inputMask();

	// JSCCommon.CustomInputFile();
	// добавляет подложку для pixel perfect
	// $(".main-wrapper").after('<div class="screen" style="background-image: url(screen/main.png);"></div>')
	// /добавляет подложку для pixel perfect



	// const url = document.location.href;
	// $.each($(".top-nav__nav a "), function() {

	// 	if (this.href == url) {
	// 		if ($(this).hasClass("top-nav__link") == true) {

	// 			$(this).addClass('top-nav__link-active');
	// 		}
	// 		if ($(this).hasClass("footer__link") == true) {

	// 			$(this).addClass('footer__link-active');
	// 		} 
	// 	}; 
	// }); 
	$(" .top-nav li a, .scroll-link, .headerBlock__scroll").click(function () {
		const elementClick = $(this).attr("href");
		const destination = $(elementClick).offset().top;

		$('html, body').animate({ scrollTop: destination }, 1100);

		return false;
	});
	// /закрыть/открыть мобильное меню

	function heightses() {

		const w = $(window).width();

	// 	// $(".main-wrapper").css("margin-bottom", $('footer').height())
	// 	// $(".otz__item .text-wrap ").height('auto').equalHeights();
	// 	// 
	// 	// скрывает моб меню

		const topH = $("header ").innerHeight();

		// $(window).scroll(function () {
		// 	if ($(window).scrollTop() > topH) {
		// 		$('.top-nav  ').addClass('fixed');
		// 	} else {
		// 		$('.top-nav  ').removeClass('fixed');
		// 	}

		
		// });

		const telOffset = $(window).height() * .6;
		$(window).scroll(function(){
			const scrolled = $(this).scrollTop();
			if (scrolled > telOffset){
				//телефон прилип
				$('.headerBlock__tel').addClass('tel-fixed');
			} else if (scrolled < telOffset) {
				// телефон отлип
				$('.headerBlock__tel').removeClass('tel-fixed');
			}
		});
 
	}

	$(window).resize(function () {
		heightses();

	});

	heightses();
 
	$(".viber-link").each(function () {

		if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			$(this).attr('href', $(this).data("desktop"));
		}
	});

	let now = new Date();
	$('.curentYear').text(now.getFullYear());
 
	
	var isIE11 = !!window.MSInputMethodContext && !!document.documentMode;
	if (isIE11) {
		$("body").prepend(`<p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p>`)

	}



	var gets = (function () {
		var a = window.location.search;
		var b = new Object();
		a = a.substring(1).split("&");
		for (var i = 0; i < a.length; i++) {
			let c = a[i].split("=");
			b[c[0]] = c[1];
		}
		return b;
	})();
	// form
	$("form").each(function () { //Change
		var th = $(this);
		th.find('.utm_source').val(decodeURIComponent(gets['utm_source'] || ''));
		th.find('.utm_term').val(decodeURIComponent(gets['utm_term'] || ''));
		th.find('.utm_medium').val(decodeURIComponent(gets['utm_medium'] || ''));
		th.find('.utm_campaign').val(decodeURIComponent(gets['utm_campaign'] || ''));
		$(this).attr({
			"action": 'action.php',
			"method": "post",
		})
	});


	// qwiz
	$(" .qwiz-radio-btn").each(function () { 
		let parent = $(this).parents(".sQwiz__item");
		parent.find(".sQwiz__toggle-block").on('input change copy paste','input', function () {
			if ($(this).val() != '') {
				parent.find(".sQwiz__next").removeClass("disabled")
			}
			else {
				parent.find(".sQwiz__next").addClass("disabled")
			}
		})
		$(this).change(function () {  
			if (!$(this).hasClass("toggle-input-js")) {
				parent.find(".sQwiz__next").removeClass("disabled")
			}

			else if (parent.find(".sQwiz__toggle-block").find('input').val() != '') {
				console.log('1')
				parent.find(".sQwiz__next").removeClass("disabled")
			}
			else {
				console.log('2')
				parent.find(".sQwiz__next").addClass("disabled")

			} 
			if ($(this).is(':checked') && $(this).hasClass("toggle-input-js")) {
				
				parent.find(".sQwiz__toggle-block").slideDown();
			}
			else {
				parent.find(".sQwiz__toggle-block").slideUp();
				
				}
			})
	})

	$('.btn-last-js').click(function(){
		$('.sQwiz__top').addClass('topBlockHidden');
	})

	//Слайдер теста расчёта финансов
	var testSwiper = new Swiper('.jsTestSlider', {
		effect: 'slide',
		speed: 800,
		simulateTouch: false,
		longSwipes: false,
		followFinger: false,
		allowTouchMove: false,
		allowNext: false,
		// autoHeight: true,
		pagination: {
			el: '.scr2__ind',
			type: 'custom',
			renderCustom: function (swiper, current, total) {
				var progress = '<div class="jsTestInd" style="width:' + current * 100 / 6 + '%"></div>';
				if (current == 1) {

					var progresText = '<div class="jsTestCounter">Осталось 6 вопросов</div>'
				} else {
					var progresText = '<div class="jsTestCounter">Вопрос ' + (current - 1) + '/' + (total - 1) + '</div>';
				}
				return progress + progresText;
			},
		},
	});
	//Переключение слайда по кнопке
	var jsNextQuest = document.querySelectorAll('.jsNextQuest', '.jsTestSlider');
	for (var i = 0; i < jsNextQuest.length; ++i) {
		jsNextQuest[i].addEventListener("click", function (e) {
			e.preventDefault();
			testSwiper.slideNext();
		});
	}


	var jsSlideBack = document.querySelectorAll('.jsSlideBack');
	for (var i = 0; i < jsSlideBack.length; ++i) {
		jsSlideBack[i].addEventListener("click", function (e) {
			e.preventDefault();
			testSwiper.slidePrev();
		});
	}
	// Простановка значений при переключении
	testSwiper.on('slideChangeTransitionEnd', function () {
		var testCounter = document.querySelector('.jsTestCounter');
		if (testSwiper.activeIndex == 0) {
			// $('.jsSlideBack').hide();
			// testCounter.textContent = "Осталось 6 вопросов";
		} else {
			// testCounter.textContent = "Вопрос " + (testSwiper.activeIndex ) + "/6";
			// $('.jsSlideBack').show();
		}
		//Управление кнопкой "Назад"
		if (testSwiper.activeIndex == 0) {
			$('.jsSlideBack').hide();
		} else {
			$('.jsSlideBack').show();
		}
	});

	$(".headerBlock .icon-rbk").click(function () {
		$(".headerBlock__rbk-block").fadeToggle();
	})

};
if (document.readyState !== 'loading') {
	eventHandler();
} else {
	document.addEventListener('DOMContentLoaded', eventHandler);
}
