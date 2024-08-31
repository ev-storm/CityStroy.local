
	document.addEventListener("DOMContentLoaded", function() {
		
		var shElement = document.querySelector('.sh');
	


		if ( shElement ) {

		//---------------SCROLL----------------------------------------------------------
		document.addEventListener("scroll", () => {
			const items = document.querySelectorAll('.sh-mob__item');
			const itemsDown = document.querySelectorAll('.shema__down');
			const scrollTop = window.scrollY;

			if (items.length === 0) {
					console.warn("Элементы с классом .sh-mob__item не найдены.");
					return;
			}
			if (itemsDown.length === 0) {
					console.warn("Элементы с классом .sh-mob__item не найдены.");
					return;
			}


			items.forEach((item, index) => {
				const itemOffset = item.getBoundingClientRect().top + scrollTop;

				if (scrollTop + window.innerHeight > itemOffset) {
						setTimeout(() => {
								item.classList.add('visible');
						}, index * 300);
				} else {
						item.classList.remove('visible');
						item.classList.add('hidden');
						setTimeout(() => {
								if (item.classList.contains('hidden')) {
										item.classList.remove('hidden');
								} 
						}, 300); 
					}
				});

			itemsDown.forEach((item, index) => {
				const itemOffset = item.getBoundingClientRect().top + scrollTop;

				if (scrollTop + window.innerHeight > itemOffset) {
					setTimeout(() => {
						item.classList.add('visible');
					}, index * 300); 
				} else {
						item.classList.remove('visible');
						item.classList.add('hidden');
						setTimeout(() => {
							if (item.classList.contains('hidden')) {
										item.classList.remove('hidden');
									}
						}, 300);
					}
			});
		});

		//-------------BANNER-----------------------------------------------------------
		
			const buttonsMob = document.querySelectorAll('.fork-m__btn button, .AR'); 
			const bannerMob = document.getElementById('banner');
			const bannerTitle = document.getElementById('banner-title');
			const bannerText = document.getElementById('banner-text');
			let bannerTimeout__m; 

			if (bannerMob) {
					buttonsMob.forEach(button => {
							button.addEventListener('click', () => {
									const banTitleMob = button.getAttribute('data-message');
									const banTextMob = button.getAttribute('value');
									bannerTitle.textContent = banTitleMob;
									bannerText.textContent = banTextMob;

									bannerMob.classList.add('show');

									if (bannerTimeout__m) {
											clearTimeout(bannerTimeout__m);
									}

									bannerTimeout__m = setTimeout(() => {
											bannerMob.classList.remove('show'); 
									}, 8000);
							});
					});

					window.addEventListener('scroll', () => {
							if (bannerMob.classList.contains('show')) {
									bannerMob.classList.remove('show');

									if (bannerTimeout__m) {
											clearTimeout(bannerTimeout__m);
											bannerTimeout__m = null;
									}
							}
					});

			} else {
					console.error('Элемент с id "banner" не найден');
			}
		

		//----------------ITEMS-------------------------------------
		document.querySelectorAll('.sh-mob__item').forEach(item => {
			item.addEventListener('click', () => {
					const isActive = item.classList.contains('active');
					if (!isActive) {
							document.querySelectorAll('.sh-mob__item').forEach(otherItem => {
									otherItem.classList.remove('active'); // Закрываем другие элементы
							});
							item.classList.add('active');
						}
				});
		});


		////////////////////////////    PC   ///////////////////////////////////////////////////
		///---------------SCROLL----------------------------------------------------------

		document.addEventListener("scroll", () => {
			const sh__items = document.querySelectorAll('.sh__item');
			const sh__itemsDown = document.querySelectorAll('.sh__down');
			const sh__scrollTop = window.scrollY;

			// Проверяем наличие элементов
			if (sh__items.length === 0) {
					console.warn("Элементы с классом .sh__item не найдены.");
					return;
			}
			if (sh__itemsDown.length === 0) {
					console.warn("Элементы с классом .sh__down не найдены.");
					return;
			}

			// Анимация для sh__items
			sh__items.forEach((item, index) => {
					const itemOffset = item.getBoundingClientRect().top + sh__scrollTop;

					if (sh__scrollTop + window.innerHeight > itemOffset) {
							setTimeout(() => {
									item.classList.add('visible');
									item.classList.remove('hidden');
							}, index * 300); // Задержка для поочередного появления
					} else {
							item.classList.remove('visible');
							item.classList.add('hidden');
					}
			});

			// Анимация для sh__down
			sh__itemsDown.forEach((item, index) => {
					const itemOffset = item.getBoundingClientRect().top + sh__scrollTop;

					if (sh__scrollTop + window.innerHeight > itemOffset) {
							setTimeout(() => {
									item.classList.add('visible');
									item.classList.remove('hidden');
							}, (index + sh__items.length) * 300); // Задержка для поочередного появления
					} else {
							item.classList.remove('visible');
							item.classList.add('hidden');
					}
			});
		});

		//-------------BANNER-----------------------------------------------------------

		
			const buttons__sh = document.querySelectorAll('.sh__fork-btn button, .AR'); 
			const banner__sh = document.getElementById('sh__banner');
			const bannerTitle__sh = document.getElementById('sh__banner-title');
			const bannerText__sh = document.getElementById('sh__banner-text');
			let bannerTimeout__sh; // Переменная для хранения идентификатора таймера

			if (buttons__sh) {
					buttons__sh.forEach(button => {
							button.addEventListener('click', () => {
									const banTitle__sh = button.getAttribute('data-message');
									const banText__sh = button.getAttribute('value');
									bannerTitle__sh.textContent = banTitle__sh;
									bannerText__sh.textContent = banText__sh;

									banner__sh.classList.add('show');

									if (bannerTimeout__sh) {
											clearTimeout(bannerTimeout__sh);
									}

									bannerTimeout__sh = setTimeout(() => {
										banner__sh.classList.remove('show'); 
									}, 8000);
							});
					});

					window.addEventListener('scroll', () => {
							if (banner__sh.classList.contains('show')) {
									banner__sh.classList.remove('show');

									if (bannerTimeout__sh) {
											clearTimeout(bannerTimeout__sh);
											bannerTimeout__sh = null;
									}
							}
					});

					window.addEventListener('scroll', () => {
						if (banner__sh.classList.contains('show')) {
								banner__sh.classList.remove('show');

								if (bannerTimeout__sh) {
										clearTimeout(bannerTimeout__sh);
										bannerTimeout__sh = null;
								}
						}
					});

					const closeBannerButton = document.querySelector('.close__banner-con');

					closeBannerButton.addEventListener('click', () => {

						if (banner__sh.classList.contains('show')) {
									banner__sh.classList.remove('show');
							}
					});
				

			} else {
					console.error('Элемент с id "banner" не найден');
			}

		

		document.addEventListener('DOMContentLoaded', () => {
			const buttons__sh = document.querySelectorAll('.sh__fork-btn button, .AR'); 
			const banner__sh = document.getElementById('sh__banner');
			const bannerTitle__sh = document.getElementById('sh__banner-title');
			const bannerText__sh = document.getElementById('sh__banner-text');
			let bannerTimeout__sh; // Переменная для хранения идентификатора таймера

			if (buttons__sh) {
							buttons__sh.forEach(button => {
											button.addEventListener('click', () => {
															const banTitle__sh = button.getAttribute('data-message');
															const banText__sh = button.getAttribute('value');
															bannerTitle__sh.textContent = banTitle__sh;
															bannerText__sh.textContent = banText__sh;

															banner__sh.classList.add('show');

															if (bannerTimeout__sh) {
																			clearTimeout(bannerTimeout__sh);
															}

															bannerTimeout__sh = setTimeout(() => {
																	banner__sh.classList.remove('show'); 
															}, 8000);
											});
							});

							// Добавление обработчика события прокрутки, чтобы скрыть баннер
							window.addEventListener('scroll', () => {
											if (banner__sh.classList.contains('show')) {
															banner__sh.classList.remove('show');

															if (bannerTimeout__sh) {
																			clearTimeout(bannerTimeout__sh);
																			bannerTimeout__sh = null;
															}
											}
							});

							// Добавление обработчика для кнопки закрытия баннера
							const closeBannerButton = document.querySelector('.close__banner-con');

							if (closeBannerButton) {
									closeBannerButton.addEventListener('click', () => {
													if (banner__sh.classList.contains('show')) {
																	banner__sh.classList.remove('show');
													}
									});
							} else {
									console.error('Кнопка закрытия баннера не найдена (.close__banner-con)');
							}

							// Добавление обработчика для кнопки .button-sh__banner
							const buttonCloseBanner = document.querySelector('.button-sh__banner');
							
							if (buttonCloseBanner) {
									buttonCloseBanner.addEventListener('click', () => {
													if (banner__sh.classList.contains('show')) {
																	banner__sh.classList.remove('show');
													}
									});
							} else {
									console.error('Кнопка закрытия баннера не найдена (.button-sh__banner)');
							}

			} else {
							console.error('Элемент с id "banner" не найден');
			}
		});

		//----------------ITEMS-------------------------------------
		document.querySelectorAll('.sh__item').forEach(item => {
			item.addEventListener('mouseenter', () => {
					const isActive = item.classList.contains('active');
					if (!isActive) {
							document.querySelectorAll('.sh__item').forEach(otherItem => {
									otherItem.classList.remove('active'); // Закрываем другие элементы
							});
							item.classList.add('active'); // Активируем текущий элемент
					}
			});
		});

		// Функция для закрытия .sh__item при клике вне его
		function closeItems(event) {
			const isClickInside = Array.from(document.querySelectorAll('.sh__item')).some(item => item.contains(event.target));

			if (!isClickInside) {
					document.querySelectorAll('.sh__item').forEach(item => {
							item.classList.remove('active'); // Закрываем все элементы
					});
			}
		}
		// Добавляем слушатель к документу
		document.addEventListener('click', closeItems);

	}
});

