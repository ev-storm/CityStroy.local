<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<?php
	include('../components/head.php')
?>
<?php
	include('../components/preloader.php')
?>
<!-- HEADER -->
<?php
	include('../components/header.php')
?>
<style>
	.menu__main > li:nth-child(4) > a {
		color: #28bbff;
		font-weight: 200;
	}
</style>

<body>
	<div class="container">
		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text">
					<div>
						<h1> ДИЗАЙН &nbsp ПРОЕКТИРОВАНИЕ &nbsp РЕМОНТ &nbsp </h1>
						<div class="swiper title__slide">
							<div class="swiper-wrapper title__item">
								<div class="swiper-slide"><h1>ПОМЕЩЕНИЙ</h1></div>
								<div class="swiper-slide"><h1>РЕСТОРАНОВ</h1></div>
								<div class="swiper-slide"><h1>МАГАЗИНОВ</h1></div>
								<div class="swiper-slide"><h1>КАФЕ</h1></div>
							</div>	
						</div>
					</div>

					<h2>
						Строим коммерческие помещения с нуля до пуска в 
						эксплуатацию и постгарантийного обслуживания
					</h2>
				</div>

				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<div class="down" 
					onmouseenter="down__button.play()" 
					onmouseleave="down__button.stop()"	>
					<dotlottie-player
					id="down__button"
					class="down__button"
					src="/assets/animation/down.json" 
					background="transparent" 
					speed="1">
					</dotlottie-player>
					</div>
				</div>
			</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="/assets/video/proj.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article class="about">
		<h1 class="about__title">За счёт строительного опыта и технических компетенций:</h1>
		<div class="about__item">
			<h3>
				<img src="/assets/img/icon/Subtract-1.png" alt="">
				Cокращаем сроки сдачи объекта
			</h3>
			<h3>
				<img src="/assets/img/icon/Subtract.png" alt="">
				Оптимизируем бюджет без потери качества
			</h3>
			<h3 >
				<img src="/assets/img/icon/Subtract-2.png" alt="">
				Уберегаем заказчика от переплат и ошибок
			</h3>
		</div>
		<div class="about__column ab_proj">
			<div>
				<div >
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1 class="about__column_2">Оптимальные инженерные решения</h1>
				</div>
				<h3>Находим технические решения для оптимизации расходов. Проектируем только то, что действительно надо</h3>
			</div>
			<div>
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Взаимодействие со службами ТЦ/БЦ</h1>
				</div>
				<h3>Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ</h3>
			</div>
			<div>
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Детальная проработка проекта</h1>
				</div>
				<h3>Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений</h3>
			</div>
			<div>
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Анализ технических условий</h1>
				</div>
				<h3>Анализируем все технические условия на предмет предполагаемого объекта в конкретной локации. Не все локации подходят и не все ТУ удовлетворяют требованиям проектируемых объектов</h3>
			</div>
		</div>
		<button class="button-about button modal__btn">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>


	<!-- СХЕМА -->
	<h1 class="shema-title" >Дорожная карта реализации объекта</h1>
	<div class="shema element-animation">
		<div class="shema__item ">
			<h1 class="shema__title">АНАЛИЗ Т.У.</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item">Сбор исходных данных</li>
				<li class="shema__sub-title__item">Анализ технических условий</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<!-- ТЕХНОЛОГИЯ -->
		<div class="shema__item ">
			<h1 class="shema__title">ТЕХНОЛОГИЯ<br>ДИЗАЙН</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item">Разработка технологий</li>
				<li class="shema__sub-title__item">Дизайн проект</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<!-- ПРОЕКТИРОВАНИЕ -->
		<div class="shema__proj">
			<div class="shema__item project">
			<h1 class="shema__title">ПРОЕКТИРОВАНИЕ</h1>
			<img class="shema__img" src="/assets/img/icon/Group 9136 (1).svg" alt="">

			<div class="fork">
				<div class="fork-node-left-title">
					<div>
						<h3>Технологии</h3>
						<h3>Дизайн</h3>
					</div>
				</div>
				<div class="fork-node-left">
					<div></div>
				</div>
				<div class="fork-node-centre">
					<h3 class="fork-el_ ar">АР</h3>
				</div>
				<div class="fork-node-right">
					<div class="fork-node-right-line"></div>
				</div>
				<div class="fork-el">
					<h3 class="fork-el_ ovik">ОВиК</h3>
					<h3 class="fork-el_ vk">ВК</h3>
					<h3 class="fork-el_ ckc">СКС</h3>
					<h3 class="fork-el_ eom">ЭОМ</h3>
					<h3 class="fork-el_ km">КМ</h3>
				</div>
			</div>
			</div>
		</div>
		<!-- ИНФО-ТАБЛО -->
		<div class="proj-table">
			<h2 class="proj-title"></h2>
			<h3 class="proj-text"></h3>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<!-- СМЕТА -->
		<div class="shema__item ">
			<h1 class="shema__title">СМЕТА</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item" >Честные смены</li>
				<li class="shema__sub-title__item">Подсчёт всего и сразу</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<!-- С.Р.М. -->
		<div class="shema__item">
			<h1 class="shema__title">С.Р.М.</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item">Выполнение всех работ <br> согласно проекту</li>
				<li class="shema__sub-title__item">Инженеры и проектировщики</li>
				<li class="shema__sub-title__item">Квалифицированные строители</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
			<!-- ГАРАНТИЙНОЕ И СЕРВИСНОЕ ОБСЛУЖИВАНИЕ -->
		<div class="shema__item">
			<h1 class="shema__title GSO">ГАРАНТИЙНОЕ И СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</h1>
			<ul class="shema__sub-title">
				<!-- <li class="shema__sub-title__item">ГАРАНТИЙНОЕ И СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</li> -->
				<li class="shema__sub-title__item">1 год сервисного обслуживания</li>
				<li class="shema__sub-title__item">Постгарантийное обслуживание <br> на договорных условиях</li>
			</ul>
		</div>
	</div>

	<div class="step_con">
		<div class="step">
			<h1>Сначала запускаются <span>Технология</span> и <span>Дизайн,</span> далее разрабатываются архитектурный и инженерные разделы, только после этого считается смета, а потом - стройка.</h1>
		</div>
		<img class="step_right" src="/assets/img/icon/right.png"></img>
		<div class="step">
			<h1>Далее обязательно разрабатывается раздел <span>АР</span>. Он объединяет <span>Дизайн</span> и <span>Технологию.</span> Раздел <span>АР</span> является техническим заданием на проектирование инженерных разделов</h1>
		</div>
		<img class="step_right" src="/assets/img/icon/right.png"></img>
		<div class="step">
			<h1>После разработки раздела <span>АР</span>, разрабатываются инженерные разделы: <span>ОВиК</span>, <span>ВК</span>, <span>СКС</span>, <span>ЭОМ</span> и если есть конструкции из металла, то раздел <span>КМ</span>.</h1>
		</div>
		<img class="step_right" src="/assets/img/icon/right.png"></img>
		<div class="step">
			<h1><span>ЭОМ</span> разрабатывается последним, так как в нем сведена вся информация от всех потребителей энергии со всех проектов.</h1>
		</div>
	</div>

	<div class="warn_con">
		<div class="warn">
			<img src="/assets/img/icon/!.svg" alt="">
			<h1>От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика.<br>
			Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</h1>
		</div>
	</div>




<!-- BANNER -->
<?php
		include('../components/banner.php')
	?>
</body>

<!-- FOTTER -->
<?php
	include('../components/footer.php')
?>

<!-- MODAL -->
<?php
	include('../components/modal.php')
?>

</html>