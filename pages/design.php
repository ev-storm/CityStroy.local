<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection	" content="telephone=no">
	<meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
	<title>Дизайн</title>

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

<style>
	.menu__main > li:nth-child(3) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(3) > a {
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
						<h1> ДИЗАЙН РЕСТОРАНОВ </h1>
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/5.jpg" alt=""></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="../assets/img/desi/desi.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article class="about">
		<h1 class="about__title">Разрабатываем Дизайн проект для Заказчика со следующими разделами:</h1>
		<div class="about__item desi-about__item">
			<h3>
				<img src="/assets/img/icon/Subtract-1.png" alt="">
				Дизайн ресторана как маркетинговый инструмент
			</h3>
			<h3>
				<img src="/assets/img/icon/Subtract.png" alt="">
				Процесс создания дизайна ресторана
			</h3>
			<h3 >
				<img src="/assets/img/icon/Subtract-2.png" alt="">
				Особенности и факторы, которые учитывает дизайнер
			</h3>
			<h3 >
				<img src="/assets/img/icon/Subtract-2.png" alt="">
				Условия успешной реализации дизайн-проекта
			</h3>
		</div>
		<div class="about__column">
			<div>
				<div>
					<img src="../assets/img/icon/Frame 34.svg" alt="">
					<h1 class="about__column_2">Эргономика</h1>
				</div>
				<h3>Создаем интерьер как удобную среду для персонала и гостей</h3>
			</div>
			<div>
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Психология цветовосприятия</h1>
				</div>
				<h3>Учитываем способность зрения человека воспринимать и преобразовывать цвета в ощущение оттенков</h3>
			</div>
			<div>
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Освещение</h1>
				</div>
				<h3>Многоуровневое освещение всех помещений ресторана, применение декоративных светильников и конструкций</h3>
			</div>
			<div>
				<div>
					<img src="/assets/img/icon/Frame 34.svg" alt="">
					<h1>Визуализация</h1>
				</div>
				<h3>Предлагаем варианты планировок и визуализаций всех частей ресторана</h3>
			</div>
		</div>
		<button class="button-about button modal__btn">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>


	<!-- DESI_SHEMA -->
	<div class="desi-sh_con">
		<h1>Дизайн = мощный маркетинговый инструмент</h1>
		<div class="desi-sh">
			<div class="desi-sh_item element-animation">
				<h2>Дизайн</h2>
			</div>
			<img class="shema__right element-animation" src="/assets/img/icon/right.png"></img>
			<div class="desi-sh_item element-animation">
				<h2>Профессиональные проектировщики и строители</h2>
			</div>
			<img class="shema__right element-animation" src="/assets/img/icon/right.png"></img>
			<div class="desi-sh_item element-animation">
				<h2>Успешный бизнес</h2>
			</div>
		</div>
	</div>

		<!-- DESI_INFO -->
		<div class="desi-inf_con">
			<h1>Наш дизайн это:</h1>
			<div class="desi-inf">

				<div class="desi-inf_item">
					<dotlottie-player 
						class="desi-inf__player"
						src="/assets/animation/bez.json" 
						background="transparent" 
						speed="1" 
						loop="true"
						autoplay="true">
					</dotlottie-player>
					<h2>Комфорт</h2>
				</div>

				<div class="desi-inf_item">
					<dotlottie-player 
						class="desi-inf__player"
						src="/assets/animation/komf.json" 
						background="transparent" 
						speed="1" 
						loop="true"
						autoplay="true">
					</dotlottie-player>
					<h2>Безопасность</h2>
				</div>

				<div class="desi-inf_item">
					<dotlottie-player 
						class="desi-inf__player"
						src="/assets/animation/eff.json" 
						background="transparent" 
						speed="1" 
						loop="true"
						autoplay="true">
					</dotlottie-player>
					<h2>Эффективность</h2>
				</div>

			</div>
		</div>

		<!-- DESI_LIST -->
		<article>
			<!-- 1 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/1.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Дизайн ресторана как маркетинговый инструмент</h1>
					<h2 class="text-teh">Основная задача дизайна – способствовать успеху ресторана.
					В связи с этим первостепенную роль в рождении концепции заведения, играет умение дизайнера уловить философию кухни, сформулировать описание целевой аудитории.</h2>
					<ul>
						<li>Это создаёт средство коммуникации с гостями ресторана
						на эмоциональном уровне, дополняет и поддерживает инвестиции ресторатора в основной инструмент – Кухню.</li><br>
						<li>Концепция оформления пространства должна помочь ресторатору
								создать быть физически комфортную и безопасную среду. И конечно же дизайн должен быть реализуем, то есть соответствовать нормам, и финансовым возможностям Заказчика, и современным трендам.</li>
					</ul>
				</div>
			</div>
			<!-- 2 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/2.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Процесс создания</h1>
					<h2 class="text-teh">Можно смело сказать, что красота в дизайне ресторана и вообще общепита, вторична. Начинается все с особенностей меню, оборудования, режима и формы работы заведения.<br><br> Кто придет в ресторан и каким будет средний чек, где расположено заведение и какое количество гостей должно вместить для необходимой выручки?<br><br> К этим и множеству других вопросов дизайнер тщательно готовится, собирает данные, и лишь тогда берется за работу. И не один, а в тандеме с инженерами – специалистами по кухонному оборудованию, кондиционированию и вентиляции, пожарным системам, слаботочным системам, акустике.<br><br> Кроме них привлекаются узкие специалисты, например по озеленению, светотехнике, художники, производители различных индивидуальных изделий. Немаловажную роль играет организация этого процесса.</h2>
				</div>
			</div>
			<!-- 3 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/3.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Особенности и факторы, которые учитывает дизайнер</h1>
					<h2 class="text-teh">Несколько факторов, которые влияют на то, каким получится интерьер:</h2>
					<ul>
						<li>Личность шеф-повара</li>
						<li>Исторический контекст локации</li>
						<li>Геофизические характеристики расположения</li>
						<li>Конструктивные особенности помещения</li>
					</ul>
					<h3>
						Огромную роль играют условия создания проекта, такие как сроки, зачастую сжатые, бюджет и конечно же техническое задание от заказчика
					</h3>
				</div>
			</div>
			<!-- 4 -->
			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/desi/4.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Условия успешной реализации дизайн-проекта</h1>
					<h2 class="text-teh">Дизайн ресторана - это всегда продукт квалифицированной команды, которая на разных этапах решает множество параллельных задач: от составления опросника для технического задания, светорасчетов, вариантов планировок и визуализаций, до согласования образцов отделочных материалов.</h2>
					<ul>
						<li>Для Заказчика очень важна успешная реализация его идеи, отраженной в дизайн проекте.
						Поэтому эффективная реализация дизайн проекта ресторана напрямую связана с профессиональными проектировщиками и строителями, которые создают своими руками задумку дизайнера.</li><br>
						<li>Дизайн, как инструмент создает путь к успеху, возможность, которую можно реализовать только в сплоченной команде инженеров и строителей</li>
					</ul>
				</div>
			</div>
			
		</article>


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
