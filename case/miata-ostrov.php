<!DOCTYPE html>
<html lang="ru">

<title>МЯТА PLATINUM</title>
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
	.menu__main > li:nth-child(6) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(6) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>

<body>
		<article>
		
			<div class="case__title">
				<h1>МЯТА PLATINUM</h1>
			</div>

			<div class="title__button case__btn-down">
					<a href="#case__about">
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
			

			<img class="case__cover-mob" src="../assets/img/cart/miata/1.jpg" alt="">
			<div class="case__cover case-miata-ostrov">
			</div>

		

			<div id="case__about" class="case__about">
				<div class="case__video">
					<video id="myVideo" class="case__about-video" controls="true" loop="true" muted="true" autoplay="true" playsinline>
							<source src="../assets/video/case/miata-ostrov.mp4" type="video/mp4" />
						
					</video>
					<div class="glow" id="glowEffect"></div>
					
					<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
						<h1 class="video-title_5">Мы в YouTube
							<svg width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
						</h1>
					</a>
				</div>

				<div class="case__about-title">
					<h1>МЯТА PLATINUM</h1>
					<h2><span>Объект:</span> Кальянная <br>
							<span>Локация:</span> ТЦ Остров мечты <br>
							<span>Площадь объекта:</span> 500 м2 <br>
							<span>Срок реализации проекта:</span> 30 дней</h2>
					<button class="button case__btn modal__btn">Записаться на экскурсию</button>
				</div>
			</div>

			<div class="case__report">

				<div class="case__report-point">
					<h1>Задача</h1>
					<h2>Заказчик обратился в нашу компанию на стадии создания дизайн-проекта и технологии.
					Была поставлена задача разработать все инженерные проекты, согласовать их с торговым центром и произвести строительно-монтажные работы в течение одного месяцев.</h2>
				</div>

				<div class="case__report-point">
					<h1>Технические условия</h1>
					<h2>У заказчика было всего 30 дней до запуска. Хотя, как правило срок реализации подобных объектов составляет от 60 до 90 дней, в зависимости от сложности объекта. Для заказчика потенциальный сдвиг сроков запуска кальянной грозил большими издержками из-за простоя арендованного помещения и нанятого персонала. Заказчик обратился в нашу компанию, и мы не только открыли кальянную вовремя, в такой короткий срок, но и сохранили качество работ, без увеличения затрат относительно первоначальной сметы. Раньше на этом месте располагался фуд-корт, в котором было много электрических выводов, точек подключения воды и канализационных сливов, а также мест подключения приточной и вытяжной вентиляции. Благодаря таким техническим условиям, мы легко и эффективно спроектировали технологию, все помещения кальянной и обеспечили 10-ти кратный воздухообмен, в соответствии с нормативами для курильных комнат. Единственно, что не хватало — мощности по «холоду». Для этого мы спроектировали сплит-системы, а внешние блоки разместили на крыше ТРЦ.</h2>
				</div>

				<div class="case__report-point">
					<h1>Проектирование</h1>
					<h2>Проведя аудит уже спроектированной рабочей документации, мы нашли нестыковки и предложили переделать часть проектов. Во время перепроектирования Заказчику было предложено несколько решений по оптимизации, которые привели к снижению затрат и сроков реализации проекта.</h2>
				</div>

				<div class="case__report-point">
					<h1>СМР</h1>
					<h2>Наша команда, имеющая все необходимые допуски, работала в три смены круглосуточно. Мы выстроили все логистические цепочки, своевременно обеспечивающие персонал необходимыми материалами и оборудованием. Значительно ускорить реализацию проекта помогло наше умение взаимодействовать со службами ТРЦ, своевременно вносить их корректировки и согласовывать необходимую документацию.</h2>
				</div>
</div>

			<!-- SWIPER__CASE -->
		<div class="case__swiper-con">
			<div class="swiper case__swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/1.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/2.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/3.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/4.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/5.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/6.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/7.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/8.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/9.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/miata/10.jpg"/></div>
				</div>

				<div class="swiper-button-next case__swiper-btn"></div>
				<div class="swiper-button-prev case__swiper-btn"></div>

			</div>

			<div thumbsSlider="" class="swiper case__swiper-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/1.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/2.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/3.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/4.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/5.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/6.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/7.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/8.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/9.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/miata/10.jpg"/></div>
				</div>
			</div>

		</div>



		</article>



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

<script>

</script>