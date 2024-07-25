

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
let bannerTimeout__m; // Переменная для хранения идентификатора таймера

buttonsMob.forEach(button => {
    button.addEventListener('click', () => {
        const banTitleMob = button.getAttribute('data-message');
        const banTextMob = button.getAttribute('value');
        bannerTitle.textContent = banTitleMob;
        bannerText.textContent = banTextMob;

        // Показ баннера
        bannerMob.classList.add('show');

        // Очистка предыдущего таймера, если он существует
        if (bannerTimeout__m) {
            clearTimeout(bannerTimeout__m);
        }

        // Установка нового таймера на скрытие баннера
        bannerTimeout__m = setTimeout(() => {
					bannerMob.classList.remove('show'); 
        }, 8000);
    });
});

// Обработчик для прокрутки страницы
window.addEventListener('scroll', () => {
    if (bannerMob.classList.contains('show')) {
				bannerMob.classList.remove('show');

        // Очистка таймера, если баннер скрыт вручную при прокрутке
        if (bannerTimeout__m) {
            clearTimeout(bannerTimeout__m);
            bannerTimeout__m = null; // Сбрасываем идентификатор таймера
        }
    }
});

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
let bannerTimeout; // Переменная для хранения идентификатора таймера

buttons__sh.forEach(button => {
    button.addEventListener('click', () => {
        const banTitle = button.getAttribute('data-message');
        const banText = button.getAttribute('value');
        bannerTitle__sh.textContent = banTitle;
        bannerText__sh.textContent = banText;

        // Показ баннера
        banner__sh.classList.add('show');

        // Очистка предыдущего таймера, если он существует
        if (bannerTimeout) {
            clearTimeout(bannerTimeout);
        }

        // Установка нового таймера на скрытие баннера
        bannerTimeout = setTimeout(() => {
            banner__sh.classList.remove('show'); 
        }, 8000);
    });
});

// Обработчик для прокрутки страницы
window.addEventListener('scroll', () => {
    if (banner__sh.classList.contains('show')) {
        banner__sh.classList.remove('show');

        // Очистка таймера, если баннер скрыт вручную при прокрутке
        if (bannerTimeout) {
            clearTimeout(bannerTimeout);
            bannerTimeout = null; // Сбрасываем идентификатор таймера
        }
    }
});

//----------------ITEMS-------------------------------------

// document.querySelectorAll('.sh__item').forEach(item => {
// 	item.addEventListener('mouseenter', () => {
// 			const isActive = item.classList.contains('active');
// 			if (!isActive) {
// 					document.querySelectorAll('.sh__item').forEach(otherItem => {
// 							otherItem.classList.remove('active'); // Закрываем другие элементы
// 					});

					
// 					item.classList.add('active');
// 				}
// 		});
// });

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
