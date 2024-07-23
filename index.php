<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<?php
	include('components/head.php')
?>
<!-- PRELOADER -->
<?php
	include('components/preloader.php')
?>
<!-- HEADER -->
<?php
	include('components/header.php')
?>

<style>
	.menu__main > li:nth-child(1) > a {
		color: #28bbff;
		font-weight: 200;
	}
</style>

<body>
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
					<a href="#anchor-about">
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
					</a>
				</div>
			</div>

			<div class="video__con">
					<video  class="video" loop="true" muted="true" autoplay="true" playsinline>
						<source src="/assets/video/City.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="anchor-about" class="about">
		<h1 class="about__title">За счёт строительного опыта и технических компетенций:</h1>
		<div class="about__item">
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract-1.png" alt="">
				Cокращаем сроки сдачи объекта
			</h3>
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract.png" alt="">
				Оптимизируем бюджет без потери качества
			</h3>
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract-2.png" alt="">
				Уберегаем заказчика от переплат и ошибок
			</h3>
		</div>
		<div class="about__column">

			<div class="element-animation">
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1 class="about__column_2">Генеральный подрядчик</h1>
				</div>
				<h3>На всех объектах установлено круглосуточное видеонаблюдение с доступом для Заказчика на удобное устройство</h3>
			</div>

			<div class="element-animation">
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Глубокое погружение в каждый проект</h1>
				</div>
				<h3>В целях экономии средств Заказчика уделяем внимание аспектам, выходящих за рамки нашей ответственности и даем рекомендации по исправлению/избеганию ошибок смежников</h3>
			</div>

			<div class="element-animation">
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Ежедневные фото и видео отчёты</h1>
				</div>
				<h3>Выполняем весь спектр задач в рамках нашей основной компетенции, координируем субподрядные и смежные компании, работаем на один общий результат</h3>
			</div>

			<div class="element-animation">
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Ежедневные фото и видео отчёты</h1>
				</div>
				<h3>Каждый день от руководителя стройки приходит видео отчет о проделанной работе за предыдущий день</h3>
			</div>
		</div>

		<button class="button-about button modal__btn">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>

	<!-- SWIPER-TICKER -->
	<div class="swiper ticker">
		<h1 class="ticker__name">НАШИ КЛИЕНТЫ</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (1).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (2).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (3).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (4).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (5).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (6).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (7).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (8).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (9).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (10).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (11).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (12).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (13).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (14).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (15).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (16).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (17).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (18).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (19).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (20).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (21).svg"></div>
			<div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (22).svg"></div>
      <div class="swiper-slide ticker__slide"><img src="assets/img/logo_swiper/swiper (23).svg"></div>
    </div>
	</div> 

	<!-- СХЕМА -->
	<h1 class="shema-title" >Дорожная карта реализации объекта</h1>
	<div class="shema">

		<div class="shema__item sh-1">
			<h1 class="shema__title">АНАЛИЗ Т.У.</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item">Сбор исходных данных</li>
				<li class="shema__sub-title__item">Анализ технических условий</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<img class="shema__down" src="/assets/img/icon/down.svg"></img>
		<!-- ТЕХНОЛОГИЯ -->
		<div class="shema__item sh-2">
			<h1 class="shema__title">ТЕХНОЛОГИЯ<br>ДИЗАЙН</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item">Разработка технологий</li>
				<li class="shema__sub-title__item">Дизайн проект</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<img class="shema__down" src="/assets/img/icon/down.svg"></img>
		<!-- ПРОЕКТИРОВАНИЕ -->
		<div class="shema__proj sh-3">
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
		<img class="shema__down" src="/assets/img/icon/down.svg"></img>
		<!-- СМЕТА -->
		<div class="shema__item sh-4">
			<h1 class="shema__title">СМЕТА</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item" >Честные смены</li>
				<li class="shema__sub-title__item">Подсчёт всего и сразу</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<img class="shema__down" src="/assets/img/icon/down.svg"></img>
		<!-- С.Р.М. -->
		<div class="shema__item sh-5">
			<h1 class="shema__title">С.Р.М.</h1>
			<ul class="shema__sub-title">
				<li class="shema__sub-title__item">Выполнение всех работ <br> согласно проекту</li>
				<li class="shema__sub-title__item">Инженеры и проектировщики</li>
				<li class="shema__sub-title__item">Квалифицированные строители</li>
			</ul>
		</div>
		<img class="shema__right" src="/assets/img/icon/right.png"></img>
		<img class="shema__down" src="/assets/img/icon/down.svg"></img>
			<!-- ГАРАНТИЙНОЕ И СЕРВИСНОЕ ОБСЛУЖИВАНИЕ -->
		<div class="shema__item sh-6">
			<h1 class="shema__title GSO">ГАРАНТИЙНОЕ И СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</h1>
			<ul class="shema__sub-title">
				<!-- <li class="shema__sub-title__item">ГАРАНТИЙНОЕ И СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</li> -->
				<li class="shema__sub-title__item">1 год сервисного обслуживания</li>
				<li class="shema__sub-title__item">Постгарантийное обслуживание <br> на договорных условиях</li>
			</ul>
		</div>
	</div>


	<!-- INFO -->
	<div class="info-block_1">
		<h1 class="info_title" >Для своевременного исполнения своих обязательств всеми участниками, мы:</h1>
		<div class="info_check-con">
			<div class="info_check"
			onmouseenter="info_ok_player_1.play()" 
			onmouseleave="info_ok_player_1.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_1"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Координируем</h2>
					<h3>работу всех смежных организаций, контролируем их.</h3>
					</div>
			</div>

			<div class="info_check"
			onmouseenter="info_ok_player_2.play()" 
			onmouseleave="info_ok_player_2.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_2"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Следим</h2>
					<h3>за графиком производственных работ.</h3>
					</div>
			</div>

			<div class="info_check"
			onmouseenter="info_ok_player_3.play()" 
			onmouseleave="info_ok_player_3.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_3"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Склеиваем</h2>
					<h3>весь процесс для достижения одного общего результата.</h3>
					</div>
			</div>

			<div class="info_check"
			onmouseenter="info_ok_player_4.play()" 
			onmouseleave="info_ok_player_4.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_4"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Контролируем</h2>
					<h3>технические задания на производство изделий.</h3>
					</div>
			</div>
		</div>
	</div>

	<div class="info-block_2">
		<h1 class="info_title_2" >На протяжении <span class="seven-e"> 7 лет</span> мы разрабатываем:</h1>
		<div class="info-cart_con">

			<div class="info-back">
				<div class="info-cart">
					<img class="info_2-img" src="/assets/img/icon/mac.svg" alt="">
					<h2>Дизайн-проекты</h2>
					<div class="info_sleep">
						<h3 class="info-2_sub-title" >Повышаем эффективность каждого метра. Уделяем большое внимание зонированию и балансу функций в интерьере</h3>
						<a href="/pages/design.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			<div class="info-back">
				<div class="info-cart">
					<img class="info_2-img" src="/assets/img/icon/plan_kv.svg" alt="">
					<h2>Проектирование</h2>
						<div class="info_sleep">
							<h3 class="info-2_sub-title" >Разрабатываем технологию и инженерные проекты, оптимизируя бюджет и уменьшая сроки проведения строительных работ
							</h3>
							<a href="/pages/project.php"><div class="button info-button">Подробнее</div></a>
						</div>
				</div>
			</div>

			
			<div class="info-back">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/valik.svg" alt="">
						<h2>Строительство</h2>
						<div class="info_sleep">
							<h3 class="info-2_sub-title">Выполняем этапы строительно-монтажных и отделочных работ согласно проекту, управляем строительными процессами, координируем работу субподрядчиков</h3>
							<a href="/pages/SMR.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			<div class="info-back">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/plita.svg" alt="">
						<h2>Технология</h2>
						<div class="info_sleep">
							<h3 class="info-2_sub-title">Разрабатываем планировки помещений и расстановку технологического оборудования для максимальной эффективности ресторана ПО</h3>
							<a href="/pages/tehno.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>


		</div>
	</div>


	<div class="info-block_3">
		<h1 class="info_title" >Эксплуатация помещения</h1>
		<div class="info_check-con_3">
			<div class="info_check"
			onmouseenter="info_ok_player_5.play()" 
			onmouseleave="info_ok_player_5.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_5"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Хорошо представляем</h2>
					<h3>работу со службами эксплуатации ТЦ.</h3>
					</div>
			</div>

			<div class="info_check"
			onmouseenter="info_ok_player_6.play()" 
			onmouseleave="info_ok_player_6.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_6"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Знаем</h2>
					<h3>как спроектировать и согласовать <br>  все разделы проектов.</h3>
					</div>
			</div>

			<div class="info_check"
			onmouseenter="info_ok_player_7.play()" 
			onmouseleave="info_ok_player_7.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_7"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Умеем</h2>
					<h3>договориться с инженерами <br>ТЦ о нестандартных решениях.</h3>
					</div>
			</div>

			<div class="info_check"
			onmouseenter="info_ok_player_8.play()" 
			onmouseleave="info_ok_player_8.stop()">
				<dotlottie-player 
					class="info_ok_player"
					id="info_ok_player_8"
					src="/assets/animation/ok.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="true">
				</dotlottie-player>
				<div class="info_check-title">
					<h2>Заранее готовим</h2>
					<h3>исполнительную документацию.</h3>
					</div>
			</div>
		</div>
		<h3 class="info_title-sub_3" >Часто мы сдаем свои объекты службам ТЦ до открытия и запуска в эксплуатацию самого ТЦ.
			Это снижает риски владельцев ТЦ, а их команде легче управлять своими критическими линиями.
			</h3>
	</div>


	<div class="info-block_4">
		<h1 class="info_title" >Мы собрали коллектив, «заточенный» на рестораны:</h1>
		<div class="info-cart_con">

			<div class="info-back_2">
				<div class="info-cart">
					<img class="info_2-img" src="/assets/img/icon/lin.svg" alt="">
					<h2>Дизайн-проекты</h2>
					<div class="info_sleep">
						<h3 class="info-2_sub-title" >Весь состав ИТР нашей компании с высшим строительным и инженерным образованием.</h3>
						<a href="/pages/design.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			<div class="info-back_2">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/prob.svg" alt="">
						<h2>Проектирование</h2>
						<div class="info_sleep">
							<h3 class="info-2_sub-title" >Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.
							</h3>
							<a href="/pages/project.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			
			<div class="info-back_2">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/casc.svg" alt="">
						<h2>Строительство</h2>
						<div class="info_sleep">
							<h3 class="info-2_sub-title">Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет воплотить все задумки дизайнера и пожелания Заказчика.</h3>
							<a href="/pages/SMR.php"><div class="button info-button">Подробнее</div></a>
						</div>
				</div>
			</div>

			<div class="info-back_2">
				<div class="info-cart">
						<img  class="info_2-img" src="/assets/img/icon/colp.svg" alt="">
						<h2>Технологи</h2>
						<div class="info_sleep">
						<h3 class="info-2_sub-title" id="info-sub_4" >Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу, что напрямую отражается на качестве кухни и репутации ресторана.</h3>
						<a href="/pages/tehno.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- CART -->
	<h1 class="cart-title" >ВЫПОЛНЕННЫЕ ПРОЕКТЫ</h1>
	<div class="cart">

		<div class="cart__item bsb"> 
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Саларис</h3>
					<img class="cart__logo" src="/assets/img/icon/logo/BSB.png" alt="BLACK STAR BURGER">
					<h1 class="cart__title">BLACK STAR BURGER</h1>
					<h2 class="cart__sub-title">Бургерная 180 м&#178</h2>
					<div class="cart__link">
						<a href="/case/bsb.php">
							<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item ch">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Саларис</h3>
					<img class="cart__logo" src="/assets/img/icon/logo/ch.png" alt="ЧАЙХАНА №1">
					<h1 class="cart__title">ЧАЙХАНА №1</h1>
					<h2 class="cart__sub-title">Ресторан 900 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item river">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ЖК Зил Арт</h3>
					<img class="cart__logo" src="/assets/img/icon/logo/R.png" alt="">
					<h1 class="cart__title">RIVER ONE</h1>
					<h2 class="cart__sub-title">КАЛЬЯННАЯ 250 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="/assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<a href="pages/portfolio.php">
		<div class="cart-button-con"> 
			<button class="button cart-button">СМОТРЕТЬ БОЛЬШЕ</button>
		</div>
	</a>




	<!-- VIDEO -->
	<div class="video_con">
		<h1 class="video-title">Видео-блог о ходе строительства</h1>
		<h2 class="video-title_2">Кальянная Мята на ВДНХ</h2>
		<h3 class="video-title_3">МФК Солнце Москвы</h3>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you"  controls="true" loop="true" muted="true" autoplay="true" poster="">
						<source class="main-video" src="/assets/video/1.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<h1 class="video-title_4">Первый этап строительства кальянной Мята на ВДНХ
				</h1>
				<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
					</svg>
				</a>
			</div>


			<div class="video_rule element-animation">
				<div class="video_r">
					<button id="v1" class="video-button vbt_1"></button>
					<!-- <h1 class="video-button-title vt_1">Первый этап строительства кальянной Мята на ВДНХ</h1> -->
				</div>
				<div class="video_r">
					<button id="v2" class="video-button vbt_2"></button>
					<!-- <h1 class="video-button-title vt_2">Первый этап строительства кальянной Мята на ВДНХ</h1> -->
				</div>
				<div class="video_r">
					<button id="v3" class="video-button vbt_3"></button>
					<!-- <h1 class="video-button-title vt_3">Первый этап строительства кальянной Мята на ВДНХ</h1> -->
				</div>
				<div class="video_r">
					<button id="v4" class="video-button vbt_4"></button>
					<!-- <h1 class="video-button-title vt_4">Первый этап строительства кальянной Мята на ВДНХ</h1> -->
				</div>
			</div>
		</div>
	</div>

	<div class="video-more-con">
		<div class="video-more">		
			<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<h1 class="video-title_5">Мы в YouTube
					<svg width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
						</svg>
				</h1>
			</a>
			<a href="#"><div class="button">Смотреть еще</div></a>
		</div>
	</div>

	<div class="map">
	<div class="map_adres">
		<h3>Адрес:</h3>
		<a href="https://yandex.ru/maps/-/CDSkA28l" target="_blank"><h3>г. Москва, Береговой проезд, д. 7</h3></a>
		<h3>Пн-Сб: с 9-00 до 21-00</h3>
		<h3>Вс - выходной</h3>
	</div>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2d28c45439fe823b6f7eba08d6e39c3af7f77022bbca364b172c1ddd9e17d0c2&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
	</div>

	<?php
		include('components/banner.php')
	?>
</body>

<!-- FOTTER -->
<?php
	include('components/footer.php')
?>

<!-- MODAL -->
<?php
	include('components/modal.php')
?>

</html>
