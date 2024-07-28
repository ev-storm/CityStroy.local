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

document.addEventListener('DOMContentLoaded', function() {
	const buttons = document.querySelectorAll('.video-button');
	const videoElement = document.querySelector('.video_you');
	const videoTitle = document.querySelector('.video-title_4');
	
	// Удаляем предыдущие классы и добавляем событие клика для каждой кнопки
	buttons.forEach(button => {
			button.addEventListener('click', function() {
					// Убираем активные классы со всех кнопок
					buttons.forEach(btn => {
							btn.classList.remove('v-btn_activ');
							btn.classList.add('v-btn_dis');
					});

					// Добавляем активный класс к нажимаемой кнопке
					this.classList.remove('v-btn_dis');
					this.classList.add('v-btn_activ');

					// Изменяем видео и заголовок в зависимости от кнопки
					switch (this.id) {
							case 'v1':
										videoElement.src = '/assets/video/1.mp4';
										videoTitle.innerHTML = 'Первый этап строительства кальянной Мята на ВДНХ';
										break;
							case 'v2':
									videoElement.src = '/assets/video/2.mp4';
									videoTitle.innerHTML = 'Промежуточный этап строительства кальянной Мята на ВДНХ';
									break;
							case 'v3':
									videoElement.src = '/assets/video/3.mp4';
									videoTitle.innerHTML = 'Третий этап строительства кальянной Мята на ВДНХ';
									break;
							case 'v4':
									videoElement.src = '/assets/video/4.mp4';
									videoTitle.innerHTML = 'Завершающий этап строительства кальянной Мята на ВДНХ';
									break;
					}
			});
	});
});




		///////////////----CART ПЕРЕХОД-----/////////////////

// function myLoop() {

// 	let i = 0;
// 	let interval = setInterval(function(){

// 	if ( i === 6) {
// 			clearInterval(interval); // остановка интервала при достижении значения 6
// 			i = 1; // сброс счетчика до начального значения
// 			setTimeout(myLoop, 1); // запуск функции заново через 1 секунду
// 	} else { i++; }

// 	$('.portfolio_back').css({
// 		'background-image': "url('/assets/img/portfolio/"+i+".jpg')",
// 		'transition': 'background-image 1.2s ease-in 1.2s',
// 		'image-rendering': 'smooth',
// 	});

// 	$('.bsb').css({
// 		'background-image': "url('/assets/img/cart/bsb/"+i+".jpg')",
// 	'transition': 'background-image 1.2s ease-in 1.2s',
// 	'image-rendering': 'smooth',
// 	});

// 	$('.ch').css({
// 		'background-image': "url('/assets/img/cart/ch/"+i+".jpg')",
// 	'transition': 'background-image 1.2s ease-in 1.2s',
// 	'image-rendering': 'smooth',
// 	});

// 	$('.river').css({
// 		'background-image': "url('/assets/img/cart/river/"+i+".jpg')",
// 	'transition': 'background-image 1.2s ease-in 1.2s',
// 	'image-rendering': 'smooth',
// 	});

// 	$('.pasta').css({
// 		'background-image': "url('/assets/img/cart/pasta/"+i+".jpg')",
// 	'transition': 'background-image 1.2s ease-in 1.2s',
// 	'image-rendering': 'smooth',
// 	});
// 	}, 3000);
// }
// myLoop();

const CartSwiper = new Swiper('.swiper-container', {
	loop: true,
	effect: 'fade',
	fadeEffect: {
			crossFade: true
	},
	autoplay: {
			delay: 3000,
			disableOnInteraction: false,
	},
	speed: 1000, // Установка скорости анимации
});


//////////////////////////////////////////////////////////////

$(document).ready(function() {
	// Обработчик события наведения мыши для элементов с классом .cart__item
	$('.cart__item').on('mouseenter', function() {
			// Удаляем класс .cart__active у всех элементов .cart__item
			$('.cart__item').removeClass('cart__active');
			
			// Добавляем класс .cart__active к текущему элементу
			$(this).addClass('cart__active');
	});

	// Убираем класс .cart__active, когда мышь уходит с элемента
	$('.cart__item').on('mouseleave', function() {
			$(this).removeClass('cart__active');
	});
});







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



//////////////////////-------INFO-CART----------///////////////////
// document.querySelectorAll('.info-cart').forEach(cart => {
// 	const img = cart.querySelector('.info_2-img');
// 	const infoSleep = cart.querySelector('.info_sleep');
// 	const iTitle = cart.querySelector('.iTitle');

// 	// Обработчик для mouseenter и touchstart
// 	cart.addEventListener('mouseenter', () => {
// 			img.classList.add('icart_up');
// 			img.classList.remove('icart_down');
// 			infoSleep.classList.add('icart_up');
// 			infoSleep.classList.remove('icart_down');
// 			iTitle.classList.add('icart_up');
// 			iTitle.classList.remove('icart_down');
// 	});

// 	// Обработчик для mouseleave и touchend
// 	cart.addEventListener('mouseleave', () => {
// 			img.classList.add('icart_down');
// 			img.classList.remove('icart_up');
// 			infoSleep.classList.add('icart_down');
// 			infoSleep.classList.remove('icart_up');
// 			iTitle.classList.add('icart_down');
// 			iTitle.classList.remove('icart_up');
// 	});

// 	// Для мобильных устройств
// 	cart.addEventListener('touchstart', () => {
// 		img.classList.toggle('icart_down');
// 		infoSleep.classList.toggle('icart_down');
// 		iTitle.classList.toggle('icart_down');
// });


// });
document.querySelectorAll('.info-cart').forEach(cart => {
	const img = cart.querySelector('.info_2-img');
	const infoSleep = cart.querySelector('.info_sleep');
	const iTitle = cart.querySelector('.iTitle');

	// Храним состояние активного элемента
	let isActive = false;

	// Обработчик для mouseenter и touchstart
	cart.addEventListener('mouseenter', () => {
			if (!isActive) {
					img.classList.add('icart_up');
					img.classList.remove('icart_down');
					infoSleep.classList.add('icart_up');
					infoSleep.classList.remove('icart_down');
					iTitle.classList.add('icart_up');
					iTitle.classList.remove('icart_down');
			}
	});

	// Обработчик для mouseleave
	cart.addEventListener('mouseleave', () => {
			if (!isActive) {
					img.classList.add('icart_down');
					img.classList.remove('icart_up');
					infoSleep.classList.add('icart_down');
					infoSleep.classList.remove('icart_up');
					iTitle.classList.add('icart_down');
					iTitle.classList.remove('icart_up');
			}
	});

	// Для мобильных устройств - обработчик click
	cart.addEventListener('click', () => {
			// Если этот элемент активен, отключаем его
			if (isActive) {
					img.classList.add('icart_down');
					img.classList.remove('icart_up');
					infoSleep.classList.add('icart_down');
					infoSleep.classList.remove('icart_up');
					iTitle.classList.add('icart_down');
					iTitle.classList.remove('icart_up');
					isActive = false; // Деактивируем
			} else {
					// Если другой элемент был активен, деактивируем его
					document.querySelectorAll('.info-cart').forEach(otherCart => {
							if (otherCart !== cart && otherCart.querySelector('.info_2-img').classList.contains('icart_up')) {
									otherCart.querySelector('.info_2-img').classList.add('icart_down');
									otherCart.querySelector('.info_2-img').classList.remove('icart_up');
									otherCart.querySelector('.info_sleep').classList.add('icart_down');
									otherCart.querySelector('.info_sleep').classList.remove('icart_up');
									otherCart.querySelector('.iTitle').classList.add('icart_down');
									otherCart.querySelector('.iTitle').classList.remove('icart_up');
							}
					});

					// Активируем текущий элемент
					img.classList.add('icart_up');
					img.classList.remove('icart_down');
					infoSleep.classList.add('icart_up');
					infoSleep.classList.remove('icart_down');
					iTitle.classList.add('icart_up');
					iTitle.classList.remove('icart_down');
					isActive = true; // Активируем
			}
	});
});




//////////////////////--------CART----------///////////////////

// document.querySelectorAll('.cart__item').forEach(cart => {
// 	const cartIt = cart.querySelector('.cart__item');

// 	// Для мобильных устройств
// 	cart.addEventListener('touchstart', () => {
// 			if (cartIt.classList.contains('cart_up')) {
// 					cartIt.classList.remove('cart_up');
// 					cartIt.classList.add('cart_down');
// 			} else {
// 					cartIt.classList.remove('cart_down');
// 					cartIt.classList.add('cart_up');
// 			}
// 	});
// });

// document.querySelectorAll('.cart__item').forEach(cart => {

// 	// cart.addEventListener('mouseenter', () => {
// 	// 		cart.classList.add('cart-up'); // Добавляем класс для эффекта
// 	// });
// 	// cart.addEventListener('mouseleave', () => {
// 	// 		cart.classList.remove('cart-up'); // Убираем класс эффекта
// 	// });


// 	cart.addEventListener('touchstart', () => {
// 			cart.classList.add('cart-up'); // Добавляем класс для эффекта при касании
// 	});
// 	cart.addEventListener('touchend', () => {
// 			cart.classList.remove('cart-up'); // Убираем класс эффекта после касания
// 	});
// });






//////////////////---------COPY------//////////////////

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
