<!DOCTYPE html>
<html lang="ru">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection	" content="telephone=no">
	<meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
	<title>Проектирование</title>

		<!-- link -->
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/shema.css">
		<link rel="stylesheet" href="../css/media.css">
		<link rel="stylesheet" href="../css/case.css">
		<link rel="stylesheet" href="../css/modal.css">
		<link rel="stylesheet" href="../css/carts.css">
		<link rel="stylesheet" href="../css/font.css">	
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
	<meta property="og:image" content="../assets/img/cart/main.jpg" />
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
	include('../components/preloader.php')
?>
<!-- HEADER -->
<?php
	include('../components/header.php')
?>

<script defer src="../js/shema.js"></script>
<style>
	.menu__main > li:nth-child(4) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(4) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>

<body>
	<div class="container">
		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text">
					<div>
						<h1> ДИЗАЙН ПРОЕКТИРОВАНИЕ РЕМОНТ  </h1>
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

			<div class="title-mob swiper-container">
        <div class="swiper-wrapper">
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/5.jpg" alt=""></div>
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
	<?php
		include('../components/shema.php')
	?>

	<div class="step_con step_con-mob">
		<div class="step">
			<h1>Сначала запускаются <span>Технология</span> и <span>Дизайн,</span> далее разрабатываются архитектурный и инженерные разделы, только после этого считается смета, а потом - стройка.</h1>
		</div>
		<img class="step_right" src="/assets/img/icon/right.svg"></img>

		<div class="step">
			<h1>Далее обязательно разрабатывается раздел <span>АР</span>. Он объединяет <span>Дизайн</span> и <span>Технологию.</span> Раздел <span>АР</span> является техническим заданием на проектирование инженерных разделов</h1>
		</div>
		<img class="step_right " src="/assets/img/icon/right.svg"></img>

		<div class="step">
			<h1>После разработки раздела <span>АР</span>, разрабатываются инженерные разделы: <span>ОВиК</span>, <span>ВК</span>, <span>СКС</span>, <span>ЭОМ</span> и если есть конструкции из металла, то раздел <span>КМ</span>.</h1>
		</div>
		<img class="step_right " src="/assets/img/icon/right.svg"></img>
	
		<div class="step">
			<h1><span>ЭОМ</span> разрабатывается последним, так как в нем сведена вся информация от всех потребителей энергии со всех проектов.</h1>
		</div>
	</div>

	<div class="warn_con  warn-mob">
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