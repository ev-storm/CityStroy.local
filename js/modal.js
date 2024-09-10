
	$('.modal-over').hide();
	$('.modal-con').hide();

	$('.form-ban-back').hide();
	$('.form-ban-con').hide();


	$('.modal__btn').click(function(){
		
		$('.modal-over').fadeIn(300);

	
		

		$('.modal-con').show();
		$('.modal-con').css({
			'transform': 'translateY(0px)',
			'transition': '0.5s',
			'opacity':'1'
		})
	});

	$('.modal-over').click(function(event){
		// Если клик произошел на фон, а не на содержимое
		if (event.target === this) {
				$('.modal-over').fadeOut(600);

				$('.modal-con').fadeOut(400);
				$('.modal-con').css({
						'transform': 'translateY(-100%)',
						'transition': '0.5s',
						'opacity':'0'
				});
		}
	});

	$('.modal__logo-closed').click(function(){
		$('.modal-over').fadeOut(600);

		$('.modal-con').fadeOut(600);
		$('.modal-con').css({
				'transform': 'translateY(-100%)',
				'transition': '0.5s',
				'opacity':'0'
		});
	});
// -----------------------------------------


$('.plan-con').hide();




$('.open-pdf').click(function(){
	$('.plan-con').fadeIn(0);
	$('.plan-con').css({
		'display':'flex'
	});
});

$('.plan-close').click(function(){
	$('.plan-con').fadeOut(0);
});


$('.plan-con').click(function(event){
	// Если клик произошел на фон, а не на содержимое
	if (event.target === this) {
		$('.plan-con').fadeOut(0);
	}
});




// -----------------------------------------
$('.form-ban-back').hide();
$('.form-ban-con').hide();

$('.modal__KP').click(function(){

	$('.form-ban-back').fadeIn(300);
	

	$('.form-ban-con').show();
	$('.form-ban-con').css({
		'transform': 'translateY(0px)',
		'transition': '0.5s',
		'opacity':'1'
	})
});

$('.form-ban-back').click(function(event){
		// Если клик произошел на фон, а не на содержимое
		if (event.target === this) {
				$('.form-ban-back').fadeOut(600);

				$('.form-ban-con').fadeOut(400);
				$('.form-ban-con').css({
						'transform': 'translateY(-100%)',
						'transition': '0.5s',
						'opacity':'0'
				});
		}
});

$('.close-form-ban').click(function(){
		$('.form-ban-back').fadeOut(600);

		$('.form-ban-con').fadeOut(400);
		$('.form-ban-con').css({
				'transform': 'translateY(-100%)',
				'transition': '0.5s',
				'opacity':'0',
		});
});






// -----------------------------------------



$(window).scroll(function() {

let cof = $(this).scrollTop();



if(cof < 1000){
	// $('.info-banner').css({
	// 	'transform': 'translateX(-200%)',
	// 	'transition': 'all 0.5s ease-out',
	// })
	$('.commer-banner-con').css({
		'transform': 'translateX(200%)',
		'transition': 'all 0.5s ease-out',
	})
	// $('.kit-info-banner').css({
	// 	'transform': 'translateX(-200%)',
	// 	'transition': 'all 0.5s ease-out',
	// })
	

}
if(cof < 200){
	$('.commer-banner-mini').css({
		'left': '200%'
	})
}
if(cof > 201){
	$('.commer-banner-mini').css({
		'left': '90%'
	})
}
if ($(window).width() <= 600) {
	if (cof < 600) {
			$('.commer-banner-mini').css({
					'left': '100%'
			});
	}
	if(cof > 601){
		$('.commer-banner-mini').css({
			'left': '80%'
		})
	}
}

// if(cof>2300){
// 	$('.info-banner').css({
// 		'transform': 'translateX(0px)',
// 		'transition': 'all 0.5s ease-out',
// 	})
// }

// $('.info-close__banner').click(function(){
// 	$('.info-banner').fadeOut(400)
// 	$('.info-banner').css({
// 		'transform': 'translateX(-200%)',
// 		'transition': 'all 0.5s ease-out',
// 	})
// })


if(cof > 1900 && cof < 1930){
	$('.commer-banner-con').css({
		'transform': 'translateX(0px)',
		'transition': 'all 0.5s ease-out',
	})
}

// Проверяем, что текущая страница не /технология (в закодированном виде)





$('.commer-close').click(function(){
	$('.commer-banner-con').css({
		'transform': 'translateX(200%)',
		'transition': 'all 0.5s ease-out',
	})
})

$('.commer-banner-mini').click(function(){
	$('.commer-banner-con').css({
		'transform': 'translateX(0px)',
		'transition': 'all 0.5s ease-out',
		'z-index': '999999'
	})
})

$('.commer-btn').click(function(){
	$('.commer-banner-con').css({
		'transform': 'translateX(200%)',
		'transition': 'all 0.5s ease-out',
	})
})


// if(cof>3300){
// 	$('.kit-info-banner').css({
// 		'transform': 'translateX(0px)',
// 		'transition': 'all 0.5s ease-out',
// 	})
// }

// $('.kit-info-close__banner').click(function(){
// 	$('.kit-info-banner').fadeOut(400)
// 	$('.kit-info-banner').css({
// 		'transform': 'translateX(-200%)',
// 		'transition': 'all 0.5s ease-out',
// 	})
// })



});








// CHECK
  // Получаем элементы чекбокса и кнопки
	const checkbox = document.getElementById('modal__check');
	const button = document.getElementById('btn');


	const checkboxButton = document.getElementById('modal__check-btn');
	const buttonBanner = document.getElementById('btn-banner');

	const checkboxButtonBig = document.getElementById('big__check-btn');
	const buttonBannerBig = document.getElementById('btn-big-form');

	const checkboxButtonKit = document.getElementById('kit__check-btn');
	const buttonBannerKit = document.getElementById('btn-kit-banner');

	const checkboxButtonKitTehno = document.getElementById('kit__check-btn-tehno');
	const buttonBannerKitTehno = document.getElementById('btn-kit-banner-tehno');


	// Функция для обновления состояния кнопки
	function updateButtonState() {
	
				if (checkbox.checked) {
						button.classList.remove('disabled'); // Убираем класс 'disabled'
						button.disabled = false; // Разблокируем кнопку
				} else {
						button.classList.add('disabled'); // Добавляем класс 'disabled'
						button.disabled = true; // Блокируем кнопку
				}

			if (checkboxButton.checked) {
					buttonBanner.classList.remove('disabled'); // Убираем класс 'disabled'
					buttonBanner.disabled = false; // Разблокируем кнопку
			} else {
					buttonBanner.classList.add('disabled'); // Добавляем класс 'disabled'
					buttonBanner.disabled = true; // Блокируем кнопку
			}

			if (checkboxButtonBig.checked) {
					buttonBannerBig.classList.remove('disabled'); // Убираем класс 'disabled'
					buttonBannerBig.disabled = false; // Разблокируем кнопку
			} else {
					buttonBannerBig.classList.add('disabled'); // Добавляем класс 'disabled'
					buttonBannerBig.disabled = true; // Блокируем кнопку
			}

			if (checkboxButtonKit.checked) {
				buttonBannerKit.classList.remove('disabled'); // Убираем класс 'disabled'
				buttonBannerKit.disabled = false; // Разблокируем кнопку
			} else {
					buttonBannerKit.classList.add('disabled'); // Добавляем класс 'disabled'
					buttonBannerKit.disabled = true; // Блокируем кнопку
			}



			if (window.location.pathname === '/технология') {
					if (checkboxButtonKitTehno.checked) {
							buttonBannerKitTehno.classList.remove('disabled'); // Убираем класс 'disabled'
							buttonBannerKitTehno.disabled = false; // Разблокируем кнопку
					} else {
							buttonBannerKitTehno.classList.add('disabled'); // Добавляем класс 'disabled'
							buttonBannerKitTehno.disabled = true; // Блокируем кнопку
					}
		}


	}



		// Устанавливаем начальное состояние кнопки
		updateButtonState();


		// Добавляем обработчик события на чекбокс для изменения состояния кнопки
		checkbox.addEventListener('change', updateButtonState);
		checkboxButton.addEventListener('change', updateButtonState);
		checkboxButtonBig.addEventListener('change', updateButtonState);
		checkboxButtonKit.addEventListener('change', updateButtonState);
		checkboxButtonKitTehno.addEventListener('change', updateButtonState);









		if ($(window).width() <= 600) {
		$('.kit-info-banner h2, .info-banner h2').slideUp()
		$('.kit-info-banner a h2, .info-banner a 	h2').slideUp()
		$('.kit-form, .trip-form').slideUp()

		$('.info-banner').click(function(){
			$('.info-banner h2').slideDown()
			$('.info-banner a 	h2').slideDown()
			$('.trip-form').slideDown()
			$('.info-banner').css({
				'top':'38%'
			})

		})
		$('.kit-info-banner').click(function(){
			$('.kit-info-banner h2').slideDown()
			$('.kit-info-banner a h2').slideDown()
			$('.kit-form').slideDown()
			$('.kit-info-banner').css({
				'top':'38%'
			})
		})
		
	}










		


			const numberP = document.getElementById('number-P');
			const rangeP = document.getElementById('range-P');
			const numberH = document.getElementById('number-H');
			const rangeH = document.getElementById('range-H');
			const numberM = document.getElementById('number-M');
			const rangeM = document.getElementById('range-M');

			numberH.addEventListener('input', function() {
				rangeH.value = numberH.value;
			});

			rangeH.addEventListener('input', function() {
				numberH.value = rangeH.value;
			});

			numberP.addEventListener('input', function() {
				rangeP.value = numberP.value;
			});

			rangeP.addEventListener('input', function() {
				numberP.value = rangeP.value;
			});
			
			numberM.addEventListener('input', function() {
				rangeM.value = numberM.value;
			});

			rangeM.addEventListener('input', function() {
				numberM.value = rangeM.value;
			});

			$('input[type=range]').on('input', function(e){
				var min = e.target.min,
						max = e.target.max,
						val = e.target.value;
				
				$(e.target).css({
					'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
				});
			}).trigger('input');


			


			



		







		var planSwiper = new Swiper(".planSwiper", {
			direction: "vertical",
			pagination: {
					el: ".swiper-pagination",
					clickable: true,
			},
			mousewheel: {
					invert: false,
			},
		});

