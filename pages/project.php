<!DOCTYPE html>
<html lang="ru">


<title>Проектирование</title>
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
						<h1> ИНЖЕНЕРНОЕ ПРОЕКТИРОВАНИЕ </h1>
						<div class="swiper title__slide">
							<div class="swiper-wrapper title__item">
							
								<div class="swiper-slide"><h1>РЕСТОРАНОВ</h1></div>
								<div class="swiper-slide"><h1>МАГАЗИНОВ</h1></div>
								<div class="swiper-slide"><h1>КАФЕ</h1></div>
								<div class="swiper-slide"><h1>КОММЕРЧЕСКИХ ...</h1></div>
								<div class="swiper-slide"><h1>ПОМЕЩЕНИЙ</h1></div>
							</div>	
						</div>
					</div>
					<h2>
					Строительство ресторанов и кафе
					в Москве «под ключ» <br>
					<p>Архитектурные решения / Отопление, вентиляция и кондиционирование Водоснабжение и канализация / <br> Структурированные кабельные системы / Электроснабжение и электроосвещение / Конструкции металлические</p>
					</h2>
				</div>

				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<a href="#proj_about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/9.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/11.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/10.jpg" alt=""></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="/assets/video/proj.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="proj_about" class="about">
		<h1 class="about__title">Сокращаем срок сдачи объекта и финансовые расходы за счет того, что:</h1>
		<div class="about__item proj_about__item">
			<h3>
				<img src="/assets/icon/10.svg" alt="">
				Cокращаем сроки сдачи объекта
			</h3>
			<h3>
				<img src="/assets/icon/7.svg" alt="">
				Оптимизируем бюджет без потери качества
			</h3>
			<h3 >
				<img src="/assets/icon/14.svg" alt="">
				Уберегаем заказчика от переплат и ошибок
			</h3>
		</div>

		<div class="about__column ab_proj">
			<div>
				<div >
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1 class="about__column_2">Оптимальные инженерные решения</h1>
				</div>
				<h3>Находим технические решения для оптимизации расходов. Проектируем только то, что действительно надо</h3>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Взаимодействие со службами ТЦ/БЦ</h1>
				</div>
				<h3>Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ</h3>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Детальная проработка проекта</h1>
				</div>
				<h3>Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений</h3>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Анализ технических условий</h1>
				</div>
				<h3>Анализируем все технические условия на предмет предполагаемого объекта в конкретной локации. Не все локации подходят и не все ТУ удовлетворяют требованиям проектируемых объектов</h3>
			</div>
		</div>
		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>


	<!-- СХЕМА -->
	<?php
		include('../components/shema.php')
	?>

	



	<!-- FOTTER -->
	<?php
		include('../components/footer.php')
	?>


</body>
</html>