<div class="sh-mob">
	
	<!-- АНАЛИЗ -->
	<div class="sh-mob__item">
		<h1>Анализ Т.У.</h1>
		<h2>Сбор данных</h2>
		<h2>Технических условий</h2>
	</div>
	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- ТЕХНОЛОГИЯ -->
	<div class="sh-mob__item">
		<h1>Технология <br> 
				Дизайня</h1>
		<h2>Разработка технологий</h2>
		<h2>Дизайн порект</h2>
	</div>
	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- ПРОЕКТИРОВАНИЕ -->
	<div class="sh-mob__item">
		<h1>Проектирование <br> </h1>

		<img class="shema__img" src="/assets/img/icon/Group 9136 (1).svg" alt="">

		<div class="fork-m">
			<h1>Технологи<br>Дизайн</h1>
			<div class="node_1"></div>
			<button data-message="Содержимое для AP">AP</button>
			<div class="node_2"></div>

			<div class="fork-m__btn">
					<button data-message="Содерж444444имое для ОВиК">ОВиК</button>

					<button data-message="Содержим4ля ОВиК">ВК</button>

					<button data-message="4 для ОВиК">СКС</button>

					<button data-message="СодержgerВиК">ЭОМ</button>

					<button data-message="СодthrtОВиК">KM</button>

			</div>
		
		</div>
	</div>

	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- СMЕТА -->
	<div class="sh-mob__item">
		<h1>Смета</h1>
		<h2>Честные смены</h2>
		<h2>Подсчёт всего и сразу</h2>
	</div>
	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- СМР -->
	<div class="sh-mob__item">
		<h1>СМР</h1>
		<h2>Выполнение всех работ согласно проекту</h2>
		<h2>Инженеры и проектировщики</h2>
		<h2>Квалифицированные строители</h2>
	</div>
	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- ГАРАНТИЯ -->
	<div class="sh-mob__item">
		<h1>Гарантийное обслуживание</h1>
		<h2>1 год сервисного обслуживания</h2>
		<h2>Постгарантийное обслуживание на договорных условиях</h2>
	</div>

	<div class="sh-mob__banner" id="banner">
        <h1 id="banner-title">Lorem ipsum dolor</h1>
        <h2 id="banner-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
  </div>

</div>


<script>


	document.addEventListener("scroll", () => {
			// Находим все элементы с классом .sh-mob__item
			const items = document.querySelectorAll('.sh-mob__item');
			const itemsDown = document.querySelectorAll('.shema__down');

			// Проверяем, если элементы найдены
			if (items.length === 0) {
					console.warn("Элементы с классом .sh-mob__item не найдены.");
					return; // Если нет элементов, выходим из функции
			}
			if (itemsDown.length === 0) {
					console.warn("Элементы с классом .sh-mob__item не найдены.");
					return; // Если нет элементов, выходим из функции
			}

			// Получаем текущее значение прокрутки
			const scrollTop = window.scrollY;

			items.forEach((item, index) => {
					// Получаем верхнюю координату элемента относительно окна
					const itemOffset = item.getBoundingClientRect().top + scrollTop;

					// Проверяем, виден ли элемент
					if (scrollTop + window.innerHeight > itemOffset) {
							// Элемент виден
							setTimeout(() => {
									item.classList.add('visible');
							}, index * 300);  // задержка для каждого элемента (появление)
					} else {
							// Элемент скрыт
							item.classList.remove('visible');
							item.classList.add('hidden');

							// Удаляем класс 'hidden' с задержкой, если он не виден
							setTimeout(() => {
									if (item.classList.contains('hidden')) {
											item.classList.remove('hidden');
									}
							}, 300); // задержка для скрытия
					}
			});

			itemsDown.forEach((item, index) => {
					// Получаем верхнюю координату элемента относительно окна
					const itemOffset = item.getBoundingClientRect().top + scrollTop;

					// Проверяем, виден ли элемент
					if (scrollTop + window.innerHeight > itemOffset) {
							// Элемент виден
							setTimeout(() => {
								item.classList.add('visible');
							}, index * 300);  // задержка для каждого элемента (появление)
					} else {
							// Элемент скрыт
							item.classList.remove('visible');
							item.classList.add('hidden');

							// Удаляем класс 'hidden' с задержкой, если он не виден
							setTimeout(() => {
									if (item.classList.contains('hidden')) {
											item.classList.remove('hidden');
									}
							}, 300); // задержка для скрытия
					}
			});

	});


	const buttons = document.querySelectorAll('.fork-m__btn button'); 
	const banner = document.getElementById('banner');
	const bannerTitle = document.getElementById('banner-title');
	const bannerText = document.getElementById('banner-text');

	buttons.forEach(button => {
		button.addEventListener('click', () => {
				const message = button.getAttribute('data-message');
				bannerTitle.textContent = message; // Изменяем заголовок на сообщение кнопки
				bannerText.textContent = message; // Изменяем текст на сообщение кнопки
				
				banner.classList.add('show'); // Показываем баннер с анимацией

				// banner.classList.remove('show'); // Скрываем баннер
				setTimeout(() => {
            banner.classList.remove('show'); // Скрываем баннер через 1000 мс
        }, 8000);

		});

		window.addEventListener('scroll', () => {
    	// Скрываем баннер, если он виден
			if (banner.classList.contains('show')) {
					banner.classList.remove('show');
			}
		});

	})

document.querySelectorAll('.sh-mob__item').forEach(item => {
	item.addEventListener('click', () => {
        // Переключаем класс active для элемента
        item.classList.toggle('active');
        
        // Если хотите, чтобы только одно h2 было открыто одновременно:
        document.querySelectorAll('.sh-mob__item').forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active'); // Закрываем другие элементы
            }
        });
    });
});



</script>