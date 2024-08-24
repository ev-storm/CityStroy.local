<!DOCTYPE html>
<html lang="ru">

<title>Дизайн</title>
<!-- HEAD -->
<?php
	include('../components/head.php')
?>
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
					<a href="#des_about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/7.jpg" alt=""></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="../assets/img/desi/desi.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="des_about" class="about">
		<h1 class="about__title">Разрабатываем Дизайн проект для Заказчика со следующими разделами:</h1>
		<div class="about__item desi-about__item">
			<h3>
				<img src="/assets/img/icon/des_2.svg" alt="">
				Дизайн ресторана как маркетинговый инструмент
			</h3>
			<h3>
				<img src="/assets/img/icon/des_3.svg" alt="">
				Процесс создания дизайна ресторана
			</h3>
			<h3 >
				<img src="/assets/img/icon/des_1.svg" alt="">
				Особенности и факторы, которые учитывает дизайнер
			</h3>
			<h3 >
				<img src="/assets/img/icon/des_4.svg" alt="">
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
		<div class="desi-sh ">

			<div class="desi-sh_item element-animation">
				<h2>Успешный бизнес</h2>
			</div>
			<img class="shema__right" src="/assets/img/icon/right.svg"></img>

			<div class="desi-sh_item element-animation">
				<h2>Профессиональные проектировщики и строители</h2>
			</div>
			<img class="shema__right" src="/assets/img/icon/right.svg"></img>
			
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

				<div class="desi-inf_item desi-inf__bez">
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
		<article class="des-list__main">
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
					<h3 class="des-h3">
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
		
	<!-- VIDEO -->
	<div class="video_con">
		<h1 class="video-title">О дизайне ресторанов, кафе, баров и кальянных</h1>
		<h2 class="video-title_2">Дина Дмитриева</h2>
		<div class="video-block">
			<div class="video_b">
				<video class="video_you"  controls="true" loop="true" muted="true" autoplay="true" poster="">
						<source class="main-video" src="/assets/video/d1.mp4" type="video/mp4" />
				</video>
				<a href="https://www.youtube.com/watch?v=HyhMKgziaQs&t=34s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
				<h1 class="video-title_4">О дизайне ресторанов, кафе, баров и кальянных Часть 2</h1>
				<svg class="svgYou" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
					</svg>
				</a>
			</div>

		<div class="video_rule element-animation">
					<div class="video_r">
						<button id="v5" class="video-button v-btn_activ"></button>
					</div>
					<div class="video_r">
						<button id="v6" class="video-button"></button>
					</div>
					<div class="video_r">
						<button id="v7" class="video-button"></button>
					</div>
					<div class="video_r">
						<button id="v8" class="video-button"></button>
					</div>
					
				</div> 

		</div>
	</div>



</body>

<!-- FOTTER -->
<?php
	include('../components/footer.php')
?>

<!-- MODAL -->
<?php
	include('../components/modal.php')
?>
<!-- BIG-BANNER -->
<?php
	include('../components/big-form.php')
?>
<!-- INFO-BANNER -->
<?php
	include('../components/info-banner.php')
?>

</html>
