<div class="sh-mob">
	
	<!-- АНАЛИЗ -->
	<div class="sh-mob__item">
		<h1>АНАЛИЗ Т.У.</h1>
		<h2>Сбор данных</h2>
		<h2>Технических условий</h2>
	</div>
	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- ТЕХНОЛОГИЯ -->
	<div class="sh-mob__item th-m">
		<h1>Технология <br> 
				Дизайня</h1>
		<h2>Разработка технологий</h2>
		<h2>Дизайн порект</h2>
	</div>
	<img class="shema__down" src="/assets/img/icon/down.svg"></img>

	<!-- ПРОЕКТИРОВАНИЕ -->
	<div class="sh-mob__item">
		<h1>АНАЛИЗ Т.У.</h1>
		<h2>Сбор данных</h2>
		<h2>Технических условий</h2>
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
		<h1>Гарантийное
		и сервисное обслуживание</h1>
		<h2>1 год сервисного обслуживания</h2>
		<h2>Постгарантийное обслуживание на договорных условиях</h2>
	</div>
</div>


<script>

	document.addEventListener("scroll", () => {
			const items = document.querySelectorAll('.sh-mob__item');
			const itemsDown = document.querySelectorAll('.shema__down');
			const scrollTop = window.scrollY;

			items.forEach((item, index) => {
					const itemOffset = item.getBoundingClientRect().top + scrollTop;

					if (scrollTop + window.innerHeight > itemOffset) {
							setTimeout(() => {
									item.classList.add('visible');
							}, index * 300);  // задержка для каждого элемента (появление)
					} else {
							item.classList.remove('visible');
							item.classList.add('hidden');
							setTimeout(() => {
									item.classList.remove('hidden');
							}, 300); // задержка для скрытия
					}
			});
			
			itemsDown.forEach((item, index) => {
					const itemOffset = item.getBoundingClientRect().top + scrollTop;

					if (scrollTop + window.innerHeight > itemOffset) {
							setTimeout(() => {
									item.classList.add('visible');
							}, index * 300);  // задержка для каждого элемента (появление)
					} else {
							itemsDown.classList.remove('visible');
							itemsDown.classList.add('hidden');
							setTimeout(() => {
									item.classList.remove('hidden');
							}, 300); // задержка для скрытия
					}
			});
	});

</script>