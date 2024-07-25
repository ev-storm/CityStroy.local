$('#btn').click(function(){
	$( "#btnBD" ).click();
});
$('#btnBD').hide();


///////////////----PRELOADER-----/////////////////
function hidePreloader() {
	var preloader = document.getElementById('preloader');

	preloader.style.display = 'none';

	$('.menu').css({
		'opacity': 1,
		'transition': 'all 1s ease-out',
		'transform': 'translateY(0vw)',
	})
	
	setTimeout(function() {
		$('.title__text').css({
				'opacity': 1,
				'transition': 'all 1s ease-out',
				'transform': 'translateY(0vw)',
		});
	}, 200);
}

var timeoutId = setTimeout(hidePreloader, 3000);

// Скрываем прелоадер, когда вся страница загружена
window.addEventListener('load', function() {
	clearTimeout(timeoutId); // Останавливаем таймер, если страница загрузилась раньше
	hidePreloader(); // Скрываем прелоадер
});



///////////////----SWIPER-----/////////////////

// swiper
function initSwiper() {
	// Удаляем предыдущий экземпляр Swiper, если он существует
	if (typeof swiperTicker !== 'undefined') {
			swiperTicker.destroy(true, true);
	}

	// Получаем текущую ширину окна
	let slidesPerView = $(window).width() <= 600 ? 2 : 6;


	swiperTicker = new Swiper(".ticker", {
			slidesPerView: slidesPerView,
			spaceBetween: 0,
			loop: true,
			autoplay: {
					enabled: true,
					delay: 0,
			},
			speed: 2500,
	});
}

// Выполнить инициализацию Swiper при загрузке страницы и изменении размера окна
$(document).ready(function() {
	initSwiper();
	$(window).resize(function() {
			initSwiper();
	});
});


let portfolio_ticker = new Swiper(".portfolio_ticker", {
	slidesPerView: 6,
	spaceBetween: 0,
	loop: true,	
	autoplay: {
		enabled: true,
		delay: 0,
  },
	speed: 2500,
});




var swiperWord = new Swiper(".title__slide", {
	spaceBetween: 70,
	slidesPerView: 1,
	loop: true,
	direction: "vertical",
	autoplay: {
		enabled: true,
		delay: 1000,
  },
	speed: 1000,
});


var swiper = new Swiper(".case__swiper-2", {
	spaceBetween: 10,
	slidesPerView: 4,
	freeMode: true,
	watchSlidesProgress: true,
});

var swiper2 = new Swiper(".case__swiper", {
	spaceBetween: 10,
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
	thumbs: {
		swiper: swiper,
	},
});


///////////////---------------/////////////////

		function onEntry(entry) {
			entry.forEach(change => {
				if (change.isIntersecting) {
				change.target.classList.add('element-show');
				}
			});
		}
		
		let options = {
			threshold: [0.1] };
		let observer = new IntersectionObserver(onEntry, options);
		let elements = document.querySelectorAll('.element-animation');
		let elements_up = document.querySelectorAll('.element-animation_up');
		
		for (let elm of elements) {
			observer.observe(elm);
		}

		for (let elm of elements_up) {
			observer.observe(elm);
		}

// MENU

// scroll menu
	$(window).scroll(function() {
		let cof = $(this).scrollTop();
		let blur = "blur("+cof/30+"px)";
		let top = 15-cof/10+"vw";

		$('.video').css({
			'filter': blur,
		});

		$('.menu__main').css({
			'padding-top': top,
		});

		if(cof>300){
			$('.menu__main').css({
				'padding-top': 0,
			})
		}

		if(cof<300){
			$('.menu').css({
				'background': '#00000000',
				'box-shadow': '30px 40px 80px #00000000',
				'backdrop-filter': 'blur(0px)'
			})
			$('.menu').mouseenter(function(){
				$(this).css({
					'background': '#00000000',
					'box-shadow': '30px 40px 80px #00000000',
					'backdrop-filter': 'blur(0px)'
				})
			});
			$('.menu').mouseleave(function(){
				$(this).css({
					'background': '#00000000',
					'box-shadow': '30px 40px 80px #00000000',
					'backdrop-filter': 'blur(0px)'
				})
			});
		}

		if(cof>300){
			$('.menu').css({
				'background': '#161616c9',
				'box-shadow': '30px 40px 80px #00000000',
				'backdrop-filter': 'blur(8px)'
			})

			$('.menu').mouseenter(function(){
				$(this).css({
					'background': '#040404',
					// 'box-shadow': '0px 0px 30px #05212ee6',
				})
			});

			if(cof>600){
				$('.case__title').children('h1').fadeOut()
			}
			
			$('.menu').mouseleave(function(){
				$(this).css({
					'background': '#161616c9',
					'box-shadow': '30px 40px 80px #00000000',
					'backdrop-filter': 'blur(8px)'
				})
			});
		}
	});

	//BURGER
		$('.mob-menu').css({
			'transform': 'translateX(100%)',
		})

		$('.mob_close').hide()

	$('.mob_open').click(function(){

		$('.mob-menu').css({
			'transform': 'translateX(0)',
			'transition': 'all 0.5s ease-in-out',
		})
		$('.mob_close').fadeIn(200);
		$('.mob_open').fadeOut(400);
		
	})

	$('.mob_close').click(function(){
		
		$('.mob-menu').css({
			'transform': 'translateX(100%)',
			'transition': 'all 0.5s ease-in-out',
		})
		$('.mob_close').fadeOut(400);
		$('.mob_open').fadeIn(200);

	})

	var hammertime = new Hammer(document.body, {
    enable: true,
    recognizers: [[Hammer.Swipe, { direction: Hammer.DIRECTION_HORIZONTAL }]]
		});

		hammertime.on('swipeleft', function(ev) {

			$('.mob-menu').css({
				'transform': 'translateX(0)',
				'transition': 'all 0.5s ease-in-out',
			})
			$('.mob_close').fadeIn(200);
			$('.mob_open').fadeOut(400);

		});

		hammertime.on('swiperight', function(ev) {

			$('.mob-menu').css({
				'transform': 'translateX(100%)',
				'transition': 'all 0.5s ease-in-out',
			})
			$('.mob_close').fadeOut(400);
			$('.mob_open').fadeIn(200);

		});



///////////////----VIDEO-----/////////////////
	
$('#v1').click(function(){
	$(".video_you").attr('src','/assets/video/1.mp4');
	$(".video-title_4").html('Первый этап строительства кальянной Мята на ВДНХ');
});

$('#v2').click(function(){
	$(".video_you").attr('src','/assets/video/2.mp4');
	$(".video-title_4").html('Промежуточный этап строительства кальянной Мята на ВДНХ');
});

$('#v3').click(function(){
	$(".video_you").attr('src','/assets/video/3.mp4');
	$(".video-title_4").html('Третий этап строительства кальянной Мята на ВДНХ');
});

$('#v4').click(function(){
	$(".video_you").attr('src','/assets/video/4.mp4');
	$(".video-title_4").html('Завершающий этап строительства кальянной Мята на ВДНХ');
});



// ///////////////----ПЕРЕХОД-----/////////////////
	function myLoop() {

		let i = 0;
		let interval = setInterval(function(){

		if ( i === 6) {
				clearInterval(interval); // остановка интервала при достижении значения 6
				i = 1; // сброс счетчика до начального значения
				setTimeout(myLoop, 1); // запуск функции заново через 1 секунду
		} else { i++; }

		$('.portfolio_back').css({
			'background-image': "url('/assets/img/portfolio/"+i+".jpg')",
			'transition': 'background-image 1.2s ease-in 1.2s',
			'image-rendering': 'smooth',
		});

		$('.bsb').css({
			'background-image': "url('/assets/img/cart/bsb/"+i+".jpg')",
		'transition': 'background-image 1.2s ease-in 1.2s',
		'image-rendering': 'smooth',
		});

		$('.ch').css({
			'background-image': "url('/assets/img/cart/ch/"+i+".jpg')",
		'transition': 'background-image 1.2s ease-in 1.2s',
		'image-rendering': 'smooth',
		});

		$('.river').css({
			'background-image': "url('/assets/img/cart/river/"+i+".jpg')",
		'transition': 'background-image 1.2s ease-in 1.2s',
		'image-rendering': 'smooth',
		});
		
		$('.pasta').css({
			'background-image': "url('/assets/img/cart/pasta/"+i+".jpg')",
		'transition': 'background-image 1.2s ease-in 1.2s',
		'image-rendering': 'smooth',
		});
		}, 3000);
	}
myLoop();





// ///////////////----INFO----/////////////////

//  $('.info_sleep').slideUp(400);
	
// $('.info-cart').mouseenter(function(){
// 	$(this).children('.info_2-img').slideUp(400);
// 	$(this).children('.info_sleep').slideDown(400);
// });

// $('.info-cart').mouseleave(function(){
// 	$(this).children('.info_2-img').stop(function(){$(".info_2-img").mouseover();}).slideDown(400);
// 	 $(this).children('.info_sleep').stop(function(){$(".info_sleep").mouseover();}).slideUp(400);
// });




document.querySelectorAll('.info-cart').forEach(cart => {
	const img = cart.querySelector('.info_2-img');
	const infoSleep = cart.querySelector('.info_sleep');
	const iTitle = cart.querySelector('.iTitle');

	// Обработчик для mouseenter и touchstart
	cart.addEventListener('mouseenter', () => {
			img.classList.add('icart_up');
			img.classList.remove('icart_down');
			infoSleep.classList.add('icart_up');
			infoSleep.classList.remove('icart_down');
			iTitle.classList.add('icart_up');
			iTitle.classList.remove('icart_down');
	});

	// Обработчик для mouseleave и touchend
	cart.addEventListener('mouseleave', () => {
			img.classList.add('icart_down');
			img.classList.remove('icart_up');
			infoSleep.classList.add('icart_down');
			infoSleep.classList.remove('icart_up');
			iTitle.classList.add('icart_down');
			iTitle.classList.remove('icart_up');
	});

	// Для мобильных устройств
	cart.addEventListener('touchstart', () => {
			img.classList.toggle('icart_up');
			img.classList.toggle('icart_down');
			infoSleep.classList.toggle('icart_up');
			infoSleep.classList.toggle('icart_down');
			iTitle.classList.toggle('icart_up');
			iTitle.classList.toggle('icart_down');
	});




	
	// При окончании касания
	cart.addEventListener('touchend', () => {
			// Дополнительно можно управлять состояниями, если это требуется
	});
});












$('.recvis_copy').click(function(){

	$(this).children('h3').css({
		'opacity': '1',
		'transform':'translateY(-0.1vw)',
		'transition': 'var(--duration2)',
	})

		setTimeout(() => {
		$(this).children('h3').css({
			'opacity': '0',
			'transform':'translateY(-0.5vw)',
			'transition': 'var(--duration2)',
		})
	}, 1000);

	

});

$('.recvis').click(function(){

		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(this).children('.recvis_title').children('h2').text()).select();
		document.execCommand("copy");
		$temp.remove();
		
});



// ЭФФЕКТ КЕНЕТА
// let kenBurnsEffect = () => {
// 	let elements = document.querySelectorAll('.ken-burns');
// 	element = elements[0];
// 	element_1 = elements[1];
// 	element_2 = elements[2];
// 	element_3 = elements[3];
	
// 	let scale = 1.1;
// 	let dx = 0;
// 	let dy = 0;

// 	let updateBgPosition = () => {
// 			element.style.backgroundPosition = `${dx}px ${dy}px`;
// 			element_1.style.backgroundPosition = `${dx}px ${dy}px`;
// 			element_2.style.backgroundPosition = `${dx}px ${dy}px`;
// 			element_3.style.backgroundPosition = `${dx}px ${dy}px`;
// 	};

// 	let updateBgScale = () => {
// 			element.style.backgroundSize = `${scale * 100}%`;
// 			element_1.style.backgroundSize = `${scale * 100}%`;
// 			element_2.style.backgroundSize = `${scale * 100}%`;
// 			element_3.style.backgroundSize = `${scale * 100}%`;
// 	};
// 	let animate = () => {
// 		dx -= 0.005;
// 		dy += 0.005;
// 		scale += 0.0002;

// 			updateBgPosition();
// 			updateBgScale();

// 			requestAnimationFrame(animate);
// 	};
// 	function kenBurnsEffect(element, scale = 1.5, duration = 100) {
// 		element.style.transition = `transform ${duration}s linear`;
// 		element.style.transform = `scale(${scale})`;
// 	}
// 	animate();
// };
// setInterval(kenBurnsEffect, 10000);
// kenBurnsEffect();
