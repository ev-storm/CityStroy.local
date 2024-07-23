$('#btn').click(function(){
	$( "#btnBD" ).click();
});
$('#btnBD').hide();



// window.addEventListener('load', function () {
// 	var preloader = document.getElementById('preloader');
// 	var preloaderHidden = false;

// 	// Функция для скрытия прелоадера
// 	function hidePreloader() {
// 			if (!preloaderHidden) {
// 					preloader.style.display = 'none'; // или используйте preloader.classList.add('hidden'), если вы применяете классы CSS для скрытия
// 					preloaderHidden = true;
// 			}
// 	}
// 	// Устанавливаем таймер на 3 секунды (3000 мс)
// 	setTimeout(hidePreloader, 3000);


// 	hidePreloader(); // Скрыть прелоадер


// 	$('.menu').css({
// 					'opacity': 1,
// 					'transition': 'all 1s ease-out',
// 					'transform': 'translateY(0vw)',
// 				})
		
// 				setTimeout(function() {
// 					$('.title__text').css({
// 							'opacity': 1,
// 							'transition': 'all 1s ease-out',
// 							'transform': 'translateY(0vw)',
// 					});
// 				}, 200);
// });





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

// Скрываем прелоадер через 3 секунды
var timeoutId = setTimeout(hidePreloader, 3000);

// Скрываем прелоадер, когда вся страница загружена
window.addEventListener('load', function() {
	clearTimeout(timeoutId); // Останавливаем таймер, если страница загрузилась раньше
	hidePreloader(); // Скрываем прелоадер
});




// 	window.addEventListener('load', function () {
//     var preloader = document.getElementById('preloader');
//     var preloaderHidden = false;

//     function hidePreloader() {
			
// 					if (!preloaderHidden) {
// 							preloader.style.display = 'none';
// 							preloaderHidden = true; 
// 					}
//     }

//     // Устанавливаем таймер на 3 секунды (3000 мс)
//     setTimeout(hidePreloader, 3000);

//     // Скрываем прелоадер снова, если страница загружена быстрее
//     hidePreloader();

// 		$('.menu').css({
// 			'opacity': 1,
// 			'transition': 'all 1s ease-out',
// 			'transform': 'translateY(0vw)',
// 		})

// 		setTimeout(function() {
// 			$('.title__text').css({
// 					'opacity': 1,
// 					'transition': 'all 1s ease-out',
// 					'transform': 'translateY(0vw)',
// 			});
// 		}, 200);

// });


// swiper
function initSwiper() {
	// Удаляем предыдущий экземпляр Swiper, если он существует
	if (typeof swiperTicker !== 'undefined') {
			swiperTicker.destroy(true, true);
	}

	// Получаем текущую ширину окна
	let slidesPerView = $(window).width() <= 600 ? 2 : 6;

	// Инициализация Swiper
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

// let swiperTicker = new Swiper(".ticker", {
// 	slidesPerView: 6,
// 	spaceBetween: 0,
// 	loop: true,	
// 	autoplay: {
// 		enabled: true,
// 		delay: 0,
//   },
// 	speed: 2500,
// });



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

// LOGO_ANIME	



	// $(".menu").mouseenter(function(){
	// 		$('#logo__player').trigger('play'); 
	// });

	// $(".menu").mouseleave(function(){
	// 	$('#logo__player').trigger('stop'); 
	// });

	// .menu:hover{
	// 	background: #161616;
	// 	transition: all 0.3s ease-out;
	// 	box-shadow: 30px 40px 80px #000000;
	// }

	// let column_w2 = $('.about__column_2').width()/10+"vw";
	// let column_w1 = $('.about__column_1').width();

	// $('.about__column_2').css({
	// 	'width': column_w2,
	// })

	// console.log(column_w1);
	// console.log(column_w2);
		function onEntry(entry) {
			entry.forEach(change => {
				if (change.isIntersecting) {
				change.target.classList.add('element-show');
				}
			});
		}
		
		let options = {
			threshold: [0.5] };
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
	// $('.mob-menu').animate({width:'toggle'},250);
	// $('.mob_close').animate({width:'toggle'},250);
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



		// VIDOE
			document.addEventListener('click', function() {
				var video = document.getElementById('myVideo');
				if (video.paused) {
						video.play();
				}
			});
		// const videoMob = document.getElementById("video-mob");
		// videoMob.onclick = function() {
		// 	if (videoMob.paused) {
		// 		videoMob.play();
		// 	} else {
		// 	v.pause();
		// 	}
   	// };

	

		const videoMob = document.getElementById("video-mob");

		window.addEventListener('load', function () {
			videoMob.play();
		});




// ПЕРЕХОД
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


// СХЕМА
	$('.shema__sub-title').slideUp();
	//$('.fork').slideUp(500);
	$('.fork').fadeOut();
	$('.shema__img').slideDown();

	$(".shema__item").mouseenter(function(){
		$(this).children('.shema__title').css({
			'font-weight':400,
			'transition': 'all 0.5s ease-out',
		});
    $(this).css({'z-index': '21',});
		$(this).children('.shema__sub-title').slideDown(400);
		
		$(this).children('.fork').slideDown(200);
		$(this).children('.fork').fadeIn(400);
		$(this).children('.shema__img').slideUp(400);

		$('.fork-el_').css({
			'font-size':'0.8vw',
			'transition': 'all 0.2s',
		});
		$('.fork-node-right-line').css({
			'height': '85%',
			'transition': 'all 0.2s',
		})

});



$(".shema__item").mouseleave(function(){
	$(this).children('.shema__title').css({
		'font-weight':200,
		'transition': 'all 0.5s ease-out',
	});
	$(this).css({'z-index': '20'});
	$(this).children('.shema__sub-title').stop(function(){$(".shema__item").mouseover();}).slideUp(400);

	$(this).children('.fork').slideUp(400);

	$(this).children('.fork').stop(function(){$(".shema__item").mouseover();}).slideUp(400);

	$(this).children('.shema__img').stop(function(){$(".shema__item").mouseover();}).slideDown(400);

	$('.fork-el_').css({
		'font-size':'0vw',
		'transition': 'all 0.2s',
	});
	$('.fork-node-right-line').css({
		'height': '0%',
		'transition' : 'all 0.2s',
	})
});	


$(".fork-el_").mouseenter(function(){
	$(".proj-table").slideDown(300);
});

$(".proj-table").slideUp(100);

$(".fork-el_").mouseleave(function(){
	$(".proj-table").slideUp(300);
	$(".proj-table").stop(function(){$(".fork-el_").mouseover();}).slideUp(100);
});

	$(".proj-title").html('');
	$(".proj-text").html('');

$(".ar").mouseenter(function(){
	$(".proj-title").html('Aрхитектурные Pешения');
	$(".proj-text").html('Раздел АР разрабатывается сразу после разработки технологического и дизайн-проекта, он объединяет два этих раздела в один, прорабатываются плоскости сопряжения Дизайна и Технологии, накладываются планы, проверяются размеры, выявляются наложения, дорабатываются узлы, разрезы, прорисовываются дополнительные технические планы. <br><br> В итоге раздел АР объединяет все решения и является одним и единым техническим заданием на проектирование инженерных разделов. Без его создания каждый проектировщик инженерных разделов сам объединяет все планы и у всех это получается по-разному, соответственно, копятся нестыковки и неточности, которые потом, во время стройки, вылезают в виде дополнительных затрат для Заказчика и являются проблемной и стрессовой частью всего процесса реализации объекта.');
	$(".proj-table").css({ 'height': '30vw' });
});

$(".ovik").mouseenter(function(){
	$(".proj-title").html('Отопление, Вентиляция и Кондиционирование');
	$(".proj-text").html('Раздел ОВиК из инженерных проектов делается первым, так как в нем отражены самые массивные коммуникации и их расположение и вообще возможность прокладки в том или ином месте, что напрямую влияет на вынужденную корректировку дизайна и технологии, и запускает череду переделок, в том числе и проекта АР.<br><br>В целях сохранения времени и денег, часто предварительные планы проекта ОВиК выполняются на стадии разработки Технологии и Дизайна, чтобы проработать все основные моменты. Благодаря этому, дальнейшее проектирование продвигается без глобальных правок.');
});

$(".vk").mouseenter(function(){
	$(".proj-title").html('Водоснабжение, Канализация');
	$(".proj-text").html('Раздел ВК разрабатывается после согласования раздела АР.Важно оптимально развести трубы бытовой и технической канализации. В некоторых случаях, необходимо спроектировать их так, чтобы избежать устройства пандуса в технологической зоне и учесть все нюансы технологии и бытовых нужд ресторана.');
});

$(".ckc").mouseenter(function(){
	$(".proj-title").html('Структурированные Кабельные Системы');
	$(".proj-text").html('Раздел СКС разрабатывается на основе АР и включает в себя звук, видеонаблюдение, видеотрансляции, бесшовный интернет и компьютерно-кассовое оборудование.');
});

$(".eom").mouseenter(function(){
	$(".proj-title").html('Электроснабжение, Электроосвещение');
	$(".proj-text").html('Раздел ЭОМ проектируется последним, так как он концентрирует в себе все исходные данные, которые возникли в процессе проектирования не только Дизайна и Технологии, но и последующих разделов проекта, по которым возникла необходимость в электроэнергии. Данный раздел должен завершать основное проектирование.');
});

$(".km").mouseenter(function(){
	$(".proj-title").html('Конструкции Металлические');
	$(".proj-text").html('Раздел КМ проектируется в том случае, если в ресторане планируются несущие конструкции из металла, такие как антресольный этаж или лестница на металлическом каркасе.');
});


//СХЕМА-CHILD


	$(".shema__item:first-child").mouseenter(function(){
		$(this).animate({
			left:'5%',
		}, 1);
	});
	$(".shema__item:first-child").mouseleave(function(){
		$(this).animate({
			left: 0,
		}, 1);
	});
	$(".shema__item:last-child").mouseenter(function(){
		$(this).animate({
			left:'-5%',
		}, 1);
	});
	$(".shema__item:last-child").mouseleave(function(){
		$(this).animate({
			left: 0,
		}, 1);
	});

	// MOB




		// function checkWidth() {
		// 	// Проверяем ширину окна
		// 	if (window.innerWidth <= 600) {

		// 		$(".shema__item:first-child").mouseenter(function(){
		// 			$(this).animate({
		// 				left: 0,
		// 			}, 1);
		// 		});

		// 		$(".shema__item:last-child").mouseenter(function(){
		// 			$(this).animate({
		// 				left: 0,
		// 			}, 1);
		// 		});


		// 		$(".shema__item").mouseenter(function(){

			
		// 			$('.fork-el_').css({
		// 				'font-size':'5vw',
		// 				'transition': 'all 0.2s',
		// 			});

		// 			$('.fork-node-right-line').css({
		// 				'height': '85%',
		// 				'transition': 'all 0.2s',
		// 			})
			
		// 		});

		// 		$(".shema__item").mouseleave(function(){
					
				
		// 			$('.fork-el_').css({
		// 				'font-size':'0vw',
		// 				'transition': 'all 0.2s',
		// 			});
		// 			$('.fork-node-right-line').css({
		// 				'height': '0%',
		// 				'transition' : 'all 0.2s',
		// 			})
		// 		});	



		// 	}}
		// 	window.addEventListener('resize', checkWidth); // Вызываем функцию при изменении размера окна
		// 	window.addEventListener('load', checkWidth); // Вызываем функцию при загрузке страницы




	// info-block_2
 $('.info_sleep').slideUp(400);
	
$('.info-cart').mouseenter(function(){
	$(this).children('.info_2-img').slideUp(400);
	$(this).children('.info_sleep').slideDown(400);
});

$('.info-cart').mouseleave(function(){
	$(this).children('.info_2-img').stop(function(){$(".info_2-img").mouseover();}).slideDown(400);
	 $(this).children('.info_sleep').stop(function(){$(".info_sleep").mouseover();}).slideUp(400);
});




// video
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





// COPY


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
