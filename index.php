<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection	" content="telephone=no">
	<meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
	<title>Главная</title>

		<!-- link -->
		<link rel="stylesheet" href="../css/font.css">	
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/shema.css">
		<link rel="stylesheet" href="../css/media.css">
		<link rel="stylesheet" href="../css/case.css">
		<link rel="stylesheet" href="../css/modal.css">
		<link rel="stylesheet" href="../css/carts.css">
		<link rel="stylesheet" href="../css/more.css">
		<link rel="stylesheet" href="../css/preloader.css">

		<script defer src="../js/main.js"></script>
		<script defer src="../js/modal.js"></script>
		<script src="../libs/jquery-3.7.1.min.js"></script>
		<script defer src="../libs/inputmask.min.js"></script>
		<script defer src="../libs/just-validate3.3.3.min.js"></script>
		<script defer src="../js/script-new.js"></script>
		<script defer src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
	

	
	<!-- OpenGraph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https:" />
	<meta property="og:title" content="Дизайн, проектирование и ремонт коммерческих помещений"/>
	<meta property="og:description" content="Главная" />
	<meta property="og:image" content="../assets/img/cart/main.jpg"/>
	<!-- telegram_image1x1 -->
	<meta name="twitter:card" content="../assets/img/cart/main.jpg" />
	<!-- SEO -->
	<meta name="keywords" content="теги СЕО">
	<!-- fav -->
	<link type="image/x-icon" href="/assets/img/icon/fav.ico" rel="shortcut icon">
	<link type="Image/x-icon" href="/assets/img/icon/fav.ico" rel="icon">
</head>
<!-- PRELOADER -->
<?php
	include('components/preloader.php')
?>
<!-- HEADER -->
<?php
	include('components/header.php')
?>
<script defer src="../js/shema.js"></script>
<style>
	.menu__main > li:nth-child(1) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(1) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>




<body>
	
		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text">
					<div>
						<h1> ДИЗАЙН ПРОЕКТИРОВАНИЕ РЕМОНТ</h1>
						<div class="swiper title__slide">
							<div class="swiper-wrapper title__item">
								<div class="swiper-slide"><h1>КОММЕРЧЕСКИХ <br>ПОМЕЩЕНИЙ</h1></div>
								<div class="swiper-slide"><h1>РЕСТОРАНОВ</h1></div>
								<div class="swiper-slide"><h1>МАГАЗИНОВ</h1></div>
								<div class="swiper-slide"><h1>КАФЕ</h1></div>
							</div>	
						</div>
					</div>

					<h2>
					Строительство ресторанов и кафе
					в Москве «под ключ»
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


			<div class="title-mob swiper-container">
        <div class="swiper-wrapper">
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg" alt=""></div>
        </div>
    	</div>

			<div class="video__con">
					<video  class="video" loop="true" muted="true" autoplay="true" playsinline>
						<source src="/assets/video/City_low.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="anchor-about" class="about">
	
		<h1 class="about__title">Помогаем открыть заведение, которое эффективно функционирует и окупается, прорабатывая при строительстве все ключевые аспекты его успеха</h1>
		<div class="about__item">
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract-1.png" alt="">
				Укладывамся в срок и не выходим за бюджет сметы во время ремонта и СМР	
			</h3>
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract.png" alt="">
				Сокращаем бюджет строительства за счет оптимальных инженерных решений
			</h3>
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract-2.png" alt="">
				Закладываем основу окупаемости через технологический проект кухни
			</h3>
			<h3 class="element-animation">
				<img src="/assets/img/icon/Subtract.svg" alt="">
				Работаем на увеличение прибыли, создавая атмосферный дизайн интерьера
			</h3>
		</div>



		<div class="about__column">

			<div class="element-animation">
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1 class="about__column_2">Оптимизируем общий бюджет проектировочных решений</h1>
				</div>
				<h3>Находим технические решения для оптимизации расходов за счет богатого 7-летнего опыта проектирования и строительства ресторанов: от самых маленьких до двух- трехуровневых объектов большой площади.</h3>
			</div>

			<div class="element-animation">
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Уберегаем от финансовых потерь из-за неточностей в проектировании</h1>
				</div>
				<h3>Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений, исключая ошибки от перекрестного проектирования разными подрядчиками, которые приводят к увеличению общего бюджета строительства.</h3>
			</div>
		
			<div class="element-animation">
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Быстро согласовываем рабочую документацию с администрацией здания</h1>
				</div>
				<h3>Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ. Это позволяет быстро вносить в проект корректировки от администрации здания и оперативно согласовывать с ней все решения.</h3>
			</div>

			<div class="element-animation">
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Создаем проект по которому не будет изменений в смете и сроках при СМР</h1>
				</div>
				<h3>Мы разрабатываем проекты в множество циклов, в каждом из которых происходят значительные изменения от первоначальной версии.

Такой подход позволяет создать максимально-точный и грамотный проект, по которому не будет изменений в смете и сроках при строительстве.</h3>
			</div>
		</div>
		<h3 class="about-warning">*Данное предложение не является публичной офертой. Исполнитель – СитиСтрой – самостоятельно определяет объем услуг/работ на свое усмотрение. <br>Исполнитель -СитиСтрой- вправе отказаться от оказания данной услуги/проведении работ в любой момент без объяснения причин.</h3>

		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>

		
	</article>	


	<!-- SWIPER-TICKER -->
	<div class="swiper ticker">
		<h1 class="ticker__name">НАШИ КЛИЕНТЫ</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (1).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (2).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (3).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (4).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (5).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (6).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (7).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (8).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (9).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (10).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (11).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (12).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (13).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (14).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (15).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (16).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (17).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (18).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (19).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (20).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (21).svg"></div></a>
			<div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (22).svg"></div></a>
      <div class="swiper-slide ticker__slide"><a href="../pages/portfolio.php"><img src="assets/img/logo_swiper/swiper (23).svg"></div></a>
    </div>
	</div> 


	<!-- СХЕМА -->
	<?php
		include('components/shema.php')
	?>


	


	<!-- INFO -->
	<div class="info-con">


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
		<h1 class="info_title" >На протяжении <span class="seven-e"> 7 лет</span> мы разрабатываем:</h1>
		<div class="info-cart_con">

			<div class="info-back">
				<div class="info-cart">
					<img class="info_2-img" src="/assets/img/icon/mac.svg" alt="">
					<h2 class="iTitle">Дизайн-проекты</h2>
					<div class="info_sleep">
						<h3 class="info-2_sub-title" >Повышаем эффективность каждого метра. Уделяем большое внимание зонированию и балансу функций в интерьере</h3>
						<a href="/pages/design.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			<div class="info-back">
				<div class="info-cart">
					<img class="info_2-img" src="/assets/img/icon/plan_kv.svg" alt="">
					<h2 class="iTitle">Проектирование</h2>
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
						<h2 class="iTitle"> Строительство</h2>
						<div class="info_sleep">
							<h3 class="info-2_sub-title">Выполняем этапы строительно-монтажных и отделочных работ согласно проекту, управляем строительными процессами, координируем работу субподрядчиков</h3>
							<a href="/pages/SMR.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			<div class="info-back">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/plita.svg" alt="">
						<h2 class="iTitle">Технология</h2>
						<div class="info_sleep icart_down">
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


	<div class="info-block_2">
		<h1 class="info_title_3" >Мы собрали коллектив, «заточенный» на рестораны:</h1>
		<div class="info-cart_con">

			<div class="info-back">
				<div class="info-cart">
					<img class="info_2-img" src="/assets/img/icon/lin.svg" alt="">
					<h2 class="iTitle">Дизайн-проекты</h2>
					<div class="info_sleep icart_down">
						<h3 class="info-2_sub-title" >Весь состав ИТР нашей компании с высшим строительным и инженерным образованием.</h3>
						<a href="/pages/design.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			<div class="info-back">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/prob.svg" alt="">
						<h2 class="iTitle">Проектирование</h2>
						<div class="info_sleep icart_down">
							<h3 class="info-2_sub-title" >Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.
							</h3>
							<a href="/pages/project.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>

			
			<div class="info-back">
				<div class="info-cart">
						<img class="info_2-img" src="/assets/img/icon/casc.svg" alt="">
						<h2 class="iTitle">Строительство</h2>
						<div class="info_sleep icart_down">
							<h3 class="info-2_sub-title">Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет воплотить все задумки дизайнера и пожелания Заказчика.</h3>
							<a href="/pages/SMR.php"><div class="button info-button">Подробнее</div></a>
						</div>
				</div>
			</div>

			<div class="info-back">
				<div class="info-cart">
						<img  class="info_2-img" src="/assets/img/icon/colp.svg" alt="">
						<h2 class="iTitle">Технологи</h2>
						<div class="info_sleep icart_down">
						<h3 class="info-2_sub-title" id="info-sub_4" >Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу, что напрямую отражается на качестве кухни и репутации ресторана.</h3>
						<a href="/pages/tehno.php"><div class="button info-button">Подробнее</div></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<!-- CART -->
	<?php
		include('components/carts.php')
	?>


	


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
						<button id="v1" class="video-button v-btn_activ"></button>
					</div>
					<div class="video_r">
						<button id="v2" class="video-button"></button>
					</div>
					<div class="video_r">
						<button id="v3" class="video-button"></button>
					</div>
					<div class="video_r">
						<button id="v4" class="video-button"></button>
					</div>
				</div> 

		</div>
	</div>

	<div class="video_con video_case__2">
		<h2 class="video-title_2">Строим лучший ресторан на ВДНХ</h2>
		<h3 class="video-title_3">IL Patio и Планета Суши</h3>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you_2"  controls="true" loop="true" muted="true" autoplay="true" poster="">
						<source class="main-video" src="/assets/video/v-1_vdnh.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=chF9nZqKmco&list=PL6aYZ63FPoLpORt1a0EyzoiqxiDX_ZFc5&index=1&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<h1 class="video-title_4">Первый этап строительства ресторана IL Patio и Планета Суши на ВДНХ
				</h1>
				<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
					</svg>
				</a>
			</div>

		<div class="video_rule element-animation">
					<div class="video_r">
						<button id="v9" class="video-button v-btn_activ"></button>
					</div>
					<div class="video_r">
						<button id="v10" class="video-button"></button>
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
			<button class="button button-video-more">Смотреть еще</button>
		</div>
	</div>




	<div class="map">
		<div class="map_adres">
			<h3>Адрес:</h3>
			<a href="https://yandex.ru/maps/-/CDSkA28l" target="_blank"><h3>г. Москва, Береговой проезд, д. 7</h3></a>
			<h3>Пн-Сб: с 9-00 до 21-00</h3>
			<h3>Вс - выходной</h3>
		</div>
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8d8693730a0869f08ed03da284ecfd94eae03b6b2f37acf1da6a5f8bb7b8ca7b&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>	</div>


	<!-- --------------------------------------- -->
<div class="commer-banner-con">
	<div class="commer-banner">
		<div>
			<img class="commer-close" src="../assets/img/icon/banner-close.svg" alt="">
			<img class="commer-img" src="/assets/img/icon/comm-img.svg" alt="">
			<h1 class="commer-h1">Коммерческое предложение</h1>
		</div>
		<h2 class="commer-h2">Ответьте на 6 вопросов, чтобы узнать стоимость и срок реализации вашего проекта</h2>
		<button class="button commer-btn modal__KP">Заполнить коммерческое предложение</button>
	</div>
	
	<div class="commer-text">
		<h1> + Бесплатно cделаем предварительные планы зонирования, расстановки кухонного оборудования с размерами, планировки посадочных мест*</h1>
	</div>
</div>
<div class="commer-banner-mini">
		<img class="commer-img" src="/assets/img/icon/comm-img.svg" alt="">
</div>

<!-- FOTTER -->
<?php
	include('components/footer.php')
?>
<!-- BIG-BANNER -->
<?php
	include('components/big-form.php')
?>
<!-- INFO-BANNER -->
<?php
	include('components/info-banner.php')
?>
<!-- MODAL-BANNER -->
<?php
	include('components/modal.php')
?>





</body>


</html>
