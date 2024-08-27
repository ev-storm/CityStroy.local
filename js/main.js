// $('#btn').click(function(){
// 	$( "#btnBD" ).click();
// });
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

// // Скрываем прелоадер, когда вся страница загружена
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
initSwiper()





// Выполнить инициализацию Swiper при загрузке страницы и изменении размера окна
$(document).ready(function() {
	initSwiper();
	$(window).resize(function() {
			initSwiper();
	});
});



let portfolio_ticker = new Swiper(".portfolio_ticker", {
	slidesPerView: 4,
	spaceBetween: 0,
	loop: true,
	autoplay: {
			enabled: true,
			delay: 0,
	},
	speed: 2500,
	
	breakpoints: {
			600: { // Когда ширина экрана 600px или меньше
					slidesPerView: 6,
			},
	},
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





	var caseSwiper = new Swiper(".case__swiper-2", {
			spaceBetween: 10,
			slidesPerView: 4,
			loop: true,
			freeMode: true,
			watchSlidesProgress: true,
	});

	var caseSwiper2 = new Swiper(".case__swiper", {
			spaceBetween: 10,
			loop: true,
			navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
			},
			thumbs: {
					swiper: caseSwiper,
			},
	});


	const CartSwiper = new Swiper('.carts-back', {
		loop: true,
		effect: 'fade',
		fadeEffect: {
				crossFade: true
		},
		autoplay: {
				delay: 3000,
				disableOnInteraction: false,
		},
		speed: 2000, // Установка скорости анимации
	});
	
	const titleMobSwiper = new Swiper('.title-mob', {
		loop: true,
		effect: 'fade',
		fadeEffect: {
				crossFade: true
		},
		autoplay: {
				delay: 3000,
				disableOnInteraction: false,
		},
		speed: 2000, // Установка скорости анимации
	});








///////////////-------element-animation--------/////////////////

		// Функция, которая добавляет класс анимации при видимости элемента
function animateOnScrolling() {
	const elements = document.querySelectorAll('.element-animation, .element-animation_up');

	elements.forEach(elm => {
			const rect = elm.getBoundingClientRect();
			const viewportHeight = window.innerHeight;

			// Проверяем, пересекает ли элемент область видимости
			if (rect.top <= viewportHeight && rect.bottom >= 0) {
					elm.classList.add('element-show');
			} else {
					// Можно удалить класс, если элемент выходит за пределы видимости (при необходимости)
					elm.classList.remove('element-show');
			}
	});
}

// Проверка наличия IntersectionObserver
if ('IntersectionObserver' in window) {
	let options = { threshold: [0.1] };

	let observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
					if (entry.isIntersecting) {
							entry.target.classList.add('element-show');
					}
			});
	}, options);

	document.querySelectorAll('.element-animation, .element-animation_up').forEach(elm => {
			observer.observe(elm);
	});
} else {
	// Если IntersectionObserver не поддерживается, регистрируем слушатель события прокрутки
	window.addEventListener('scroll', animateOnScrolling);
	window.addEventListener('resize', animateOnScrolling); // Для адаптации при изменении размера окна
	animateOnScrolling(); // Проверка на старте, чтобы увидеть элементы, которые уже на экране
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
				$('.case__title').css({'z-index':'0'})
			}
			if(cof<600){
				$('.case__title').children('h1').fadeIn()
				$('.case__title').css({'z-index':'99'})
			}
			if(cof>600){
				$('.case__btn-down').hide()
			}
			if(cof<600){
				$('.case__btn-down').show()
			}

			// if(cof>800){
			// 	$('.title-mob').hide()
			// }
			// if(cof<800){
			// 	$('.title-mob').fadeIn()
			// }

			// if(cof>2300){
			// 	$('.info-banner').css({
			// 		'transform': 'translateX(0px)',
			// 		'transition': 'all 0.5s ease-out',
			// 	})
			// }

			// $('.info-close__banner').click(function(){
			// 	$('.info-banner').fadeOut(400)
			// 	$('.info-banner').css({
			// 		'transform': 'translateX(-500px)',
			// 		'transition': 'all 0.5s ease-out',
			// 	})
			// })

		

			
		


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
	const videoElement2 = document.querySelector('.video_you_2');
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
							case 'v5':
								videoElement.src = '/assets/video/d1.mp4';
								videoTitle.innerHTML = 'О дизайне ресторанов, кафе, баров и кальянных Часть 1';
								break;
							case 'v6':
								videoElement.src = '/assets/video/d2.mp4';
								videoTitle.innerHTML = 'О дизайне ресторанов, кафе, баров и кальянных Часть 2';
								break;
							case 'v7':
								videoElement.src = '/assets/video/d3.mp4';
								videoTitle.innerHTML = 'О дизайне ресторанов, кафе, баров и кальянных Часть 3';
								break;
							case 'v8':
								videoElement.src = '/assets/video/d4.mp4';
								videoTitle.innerHTML = 'О дизайне ресторанов, кафе, баров и кальянных Часть 3';
								break;
							case 'v9':
							videoElement2.src = '/assets/video/v-1_vdnh.mp4';
							videoTitle.innerHTML = 'Первый этап строительства ресторана IL Patio и Планета Суши на ВДНХ';
							break;		
							case 'v10':
							videoElement2.src = '/assets/video/v-2_vdnh.mp4';
							videoTitle.innerHTML = 'Второй этап строительства ресторана IL Patio и Планета Суши на ВДНХ';
							break;
					}
			});
	});
});


$('.video_case__2').slideUp();

$('.button-video-more').click(function(){

	$('.video_case__2').slideDown();

});







		///////////////----CART SEARCH-----/////////////////

	// if (window.location.pathname === '/pages/portfolio.php') {


document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    const clearBtn = document.querySelector('.clear-btn');
    const dropdown = document.querySelector('.dropdown');
    const divItems = document.querySelectorAll('.carts');
		const notFound = document.querySelector('.not-found');

    function updateDropdown() {
        const filter = searchInput.value.trim().toLowerCase();
        const options = Array.from(divItems)
            .filter(item => item.querySelector('.cart__title').textContent.toLowerCase().includes(filter))
            .map(item => `<div class="option" data-class="${item.className}">${item.querySelector('.cart__title').textContent}</div>`)
            .join('');
        dropdown.innerHTML = options;
        dropdown.style.display = options ? 'block' : 'none';

				// const activeItems = Array.from(divItems).filter(item => item.style.display === 'block');
				// notFound.style.display = activeItems.length ? 'none' : 'block';
			

				
        if (filter === '') {
            Array.from(divItems).forEach(item => {
                item.style.display = 'block';
							
            });
        } else {
            Array.from(divItems).forEach(item => {
                item.style.display = item.querySelector('.cart__title').textContent.toLowerCase().includes(filter) ? 'block' : 'none';
            });
        }
    }


    searchInput.addEventListener('focus', function() {
        updateDropdown();
    });

    searchInput.addEventListener('input', function() {
        updateDropdown();
    });

    dropdown.addEventListener('click', function(event) {
        if (event.target.classList.contains('option')) {
            searchInput.value = event.target.textContent;
            const selectedClass = event.target.dataset.class.split(' ').filter(c => c.startsWith('class')).join('');
            Array.from(divItems).forEach(item => {
                item.style.display = item.classList.contains(selectedClass) ? 'block' : 'none';
            });
            dropdown.style.display = 'none';
        }
    });

			document.addEventListener('click', function(event) {
			    if (!event.target.closest('.container-input')) {
			        dropdown.style.display = 'none';
			    }
			});

    clearBtn.addEventListener('click', function() {
        searchInput.value = '';
        Array.from(divItems).forEach(item => {
            item.style.display = 'block';
        });
        dropdown.style.display = 'none';
    });


		function filterItems() {
			const filter = searchInput.value.toLowerCase();
			divItems.forEach(item => {
					if (item.textContent.toLowerCase().includes(filter)) {
							item.style.display = 'block';
					} else {
							item.style.display = 'none';
					}
			});
			updateNotFound();
	}

	function clearSearch() {
			searchInput.value = '';
			filterItems();
	}

	function updateNotFound() {
			const activeItems = Array.from(divItems).filter(item => item.style.display === 'block');
			notFound.style.display = activeItems.length ? 'none' : 'block';
	}

	function observeDisplayChanges() {
			const observer = new MutationObserver(updateNotFound);
			divItems.forEach(item => {
					observer.observe(item, { attributes: true, attributeFilter: ['style'] });
			});
	}




		// Инициализация
		notFound.style.display = 'none';
		searchInput.addEventListener('input', filterItems);
		clearBtn.addEventListener('click', clearSearch);
		observeDisplayChanges();
		filterItems(); // Изначально запустить фильтрацию

	
	});
// };







document.addEventListener('DOMContentLoaded', function() {
	// Получаем все элементы с классом desi-inf_item
	const moveCon = document.querySelectorAll('.move-con');

	moveCon.forEach(item => {
			// Находим анимационный плеер внутри каждого desi-inf_item
			const player = item.querySelector('.move');

			// Добавляем обработчик события на mouseenter для начала анимации
			item.addEventListener('mouseenter', () => {
					// Запускаем анимацию
					player.seek(0);
					player.play();
			});
	});
});

// document.addEventListener('DOMContentLoaded', function() {
// 	const searchInput = document.querySelector('.search-input');
// 	const clearBtn = document.querySelector('.clear-btn');
// 	const dropdown = document.querySelector('.dropdown');
// 	const divItems = document.querySelectorAll('.carts');
// 	const notFound = document.querySelector('.not-found');

// 	function updateVisibility() {
// 			const activeItems = Array.from(divItems).filter(item => item.style.display === 'block');
// 			notFound.style.display = activeItems.length ? 'none' : 'block';
// 	}

// 	function updateDropdown() {
// 			const filter = searchInput.value.trim().toLowerCase();
// 			const options = Array.from(divItems)
// 					.filter(item => item.querySelector('.cart__title').textContent.toLowerCase().includes(filter))
// 					.map(item => `<div class="option" data-class="${item.className}">${item.querySelector('.cart__title').textContent}</div>`)
// 					.join('');
// 			dropdown.innerHTML = options;
// 			dropdown.style.display = options ? 'block' : 'none';

// 			if (filter === '') {
// 					Array.from(divItems).forEach(item => {
// 							item.style.display = 'block';
// 					});
// 			} else {
// 					Array.from(divItems).forEach(item => {
// 							item.style.display = item.querySelector('.cart__title').textContent.toLowerCase().includes(filter) ? 'block' : 'none';
// 					});
// 			}

// 			updateVisibility();
// 	}

// 	searchInput.addEventListener('focus', function() {
// 			updateDropdown();
// 	});

// 	searchInput.addEventListener('input', function() {
// 			updateDropdown();
// 	});

// 	dropdown.addEventListener('click', function(event) {
// 			if (event.target.classList.contains('option')) {
// 					searchInput.value = event.target.textContent;
// 					const selectedClass = event.target.dataset.class.split(' ').filter(c => c.startsWith('carts')).join('');
// 					Array.from(divItems).forEach(item => {
// 							item.style.display = item.classList.contains(selectedClass) ? 'block' : 'none';
// 					});
// 					dropdown.style.display = 'none';

// 					updateVisibility();
// 			}
// 	});

// 	document.addEventListener('click', function(event) {
// 			if (!event.target.closest('.container')) {
// 					dropdown.style.display = 'none';
// 			}
// 	});

// 	clearBtn.addEventListener('click', function() {
// 			searchInput.value = '';
// 			Array.from(divItems).forEach(item => {
// 					item.style.display = 'block';
// 			});
// 			dropdown.style.display = 'none';

// 			updateVisibility();
// 	});

// 	updateVisibility();
// });



	
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


			
var swiper = new Swiper(".btnSwiper", {
	pagination: {
		el: ".big-pagination",
		type: "progressbar",
	},
	navigation: {
		nextEl: ".big-next",
		prevEl: ".big-prev",
	},

		allowTouchMove: false,

		simulateTouch: false,
		mousewheel: {
			invert: false, // Если вам нужно изменить направление скроллинга, используйте `true`
	},
});


document.addEventListener('DOMContentLoaded', function() {
	const radioInputs = document.querySelectorAll('.over-res');
	const textInput = document.querySelector('.over-res-in');

	radioInputs.forEach(radio => {
		radio.addEventListener('change', function() {
			if (document.querySelector('.over-res').checked) {
				textInput.classList.add('show');
			} else {
				textInput.classList.remove('show');
			}
		});
	});
});


//////////////////---------COPY------//////////////////

$('.recvis_copy').click(function(){

	$(this).children('h3').css({
		'opacity': '1',
		'transform':'translateY(-1vw)',
		'transition': 'var(--duration2)',
	})

		setTimeout(() => {
		$(this).children('h3').css({
			'opacity': '0',
			'transform':'translateY(-1.5vw)',
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





// script.js
const video = document.getElementById('myVideo');
const glowEffect = document.getElementById('glowEffect');
const canvas = document.createElement('canvas');
const context = canvas.getContext('2d');

function updateGlowColor() {
    if (video.paused || video.ended) return;

    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
    const frame = context.getImageData(0, 0, canvas.width, canvas.height);
    const data = frame.data;
    
    let r = 0, g = 0, b = 0;
    const pixelCount = data.length / 4;
    
    for (let i = 0; i < data.length; i += 4) {
        r += data[i];     // Красный
        g += data[i + 1]; // Зеленый
        b += data[i + 2]; // Синий
    }

    // Найдите средние значения цветов
    r = Math.round(r / pixelCount);
    g = Math.round(g / pixelCount);
    b = Math.round(b / pixelCount);

    // Установите цвет свечения
    glowEffect.style.backgroundColor = `rgba(${r}, ${g}, ${b}, 0.6)`;

    requestAnimationFrame(updateGlowColor);
}

//video.addEventListener('play', updateGlowColor);



