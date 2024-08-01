<!DOCTYPE html>
<html lang="ru">

<title>Чайхана №1</title>
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
				<h1>Чайхана №1</h1>
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
			

			<img class="case__cover-mob" src="../assets/img/cart/ch/1.jpg" alt="">
			<div class="case__cover case-ch">
			</div>

		

			<div id="case__about" class="case__about">
				<div class="case__video">
					<video  id="myVideo" class="case__about-video" controls="true" loop="true" muted="true" autoplay="true" playsinline>
							<source src="../assets/video/case/ch.mp4" type="video/mp4" />
					</video>
					<div class="glow" id="glowEffect"></div>
					<a href="https://www.youtube.com/watch?v=xEbphigR2JE&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
						<h1 class="video-title_5">Мы в YouTube
							<svg width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
						</h1>
					</a>
				</div>

				<div class="case__about-title">
					<h1>Чайхана №1</h1>
					<h2><span>Объект:</span>  Ресторан <br>
							<span>Локация:</span> ТРЦ Саларис <br>
							<span>Площадь объекта:</span> 900 м2 <br>
							<span>Срок реализации проекта:</span>  4 месяца </h2>
					<button class="button case__btn modal__btn">Записаться на экскурсию</button>
				</div>
			</div>

			<div class="case__report">

				<div class="case__report-point">
					<h1>Задача</h1>
					<h2>У Заказчика был в наличии дизайн-проект и технология. Требовалось разработать инженерные проекты, согласовать их с торговым центром, произвести строительно-монтажные работы, укомплектовать оборудованием, мебелью, декором, провести наладочные работы и запустить ресторан в эксплуатацию.
				</h2>
				</div>

				<div class="case__report-point">
					<h1>Технические условия</h1>
					<h2>Площадка под ресторан находится на фуд-корте в угловой части торгового центра. Почти со всех сторон ресторана предполагалось установить панорамное остекление, как снаружи, так и изнутри помещения. Фасадное остекление было сделано застройщиком торгового центра, а внутреннее должно было быть сделано нами. У ресторана имеется большая летняя веранда, которая растянулась по всей длине фасада. Ресторан Чайхона №1 — самый большой по площади ресторан в ТРЦ Саларис. Так как ресторан Чайхона №1 является «якорным» арендатором в этом торговым центре, мы были допущены к работам на стадии строительства торгового центра. Это позволило нам применить инженерные технические решения, которые впоследствии упростили и удешевили эксплуатацию ресторана. Благодаря высоте, которая составляла 7,5м до перекрытия, мы использовали потолочное пространство для размещения большинства коммуникаций, сократив тем самым сроки монтажа.</h2>
				</div>

				<div class="case__report-point">
					<h1>Инженерные системы</h1>
					<h2>Так как мы начали проектирование и ремонт до открытия торгового центра, мы воспользовались случаем и спроектировали, согласовали и реализовали прокладку труб бытовой и технической канализации под потолком нижнего этажа, что позволило уйти от необходимости делать пандусы в технологической зоне (около 300м2), сэкономить средства Заказчика и сделать безопасной эксплуатацию ресторана в будущем. Вторым важным инженерным решением было применение рекуперации тепла вентиляционного воздуха. Для объектов с большой площадью всегда существует проблема нагрева приточного воздуха, так как ТРЦ не всегда может предоставить достаточное количества тепловой энергии. Использование электроэнергии для таких целей заметно сокращает прибыль ресторана. Примененные нами приточно-вытяжные установки с рекуператором канального типа отбирают часть тепла, которое просто выбрасывается в атмосферу из вентиляционного воздуха, очищают и возвращают его в приточный. Использование рекуперации воздуха от кухонного теплового оборудования существенно уменьшило расходы ресторана на тепловую и электрическую энергию.</h2>
				</div>

				<div class="case__report-point">
					<h1>Расчёт экономии для Заказчика:</h1>
					<h2>Мощность установленного рекуператора 42,7 КВт. Он заменяет электрический нагреватель такой же мощности. При цене 1 КВт ч э/э ПАО «Мосэнергосбыт» для потребителей МО в размере 7 руб с НДС, за 1 час работы он экономит 42,7 КВт * 7 р/КВт ч = 300 руб/час. При 12-ти часовом рабочем дне 2 установленных рекуператора экономят 3600*2*30=216 тыс. руб в месяц. При цене рекуператора 2700 евро (+10% на монтаж) = 2970 евро*75 р/евро (2019 г) = 223*2= 446 тыс. руб. 446/216=2,06 месяца. Вывод: за 2 месяца наше техническое решение (рекуператоры) полностью окупило себя и теперь приносит ресторану экономию (прибыль) около 220 тыс. руб в месяц или 1,5 млн. руб в год с учётом длительности холодного периода.</h2>
				</div>

				<div class="case__report-point">
					<h1>СМР</h1>
					<h2>Работы на объекте велись круглосуточно. Наша компания выполняла все строительно-монтажные работы на объекте. Помимо общестроительных работ, согласно дизайн-проекту, сделали:<br>
						<ul>
							<li>Точные копии несущих колон, которые интегрировали в интерьер ресторана</li>
							<li>Отдельную большую детскую комнату (30м2) со своим санузлом</li>
							<li>VIP комнату</li>
							<li>Сцену с концертным оборудованием и большой LED экран</li>
							<li>Внутреннее фасадное безрамное остекление со стороны фуд-корта</li>
							<li>Подиум вокруг сцены для размещения части посадочных мест на уровне повыше</li>
							<li>Выполненные по индивидуальному заказу металлические декоративные арки между колонн.</li>
						</ul>
					</h2>
				</div>
			</div>

			<!-- SWIPER__CASE -->
			<div class="case__swiper-con">
			<div class="swiper case__swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/1.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/2.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/3.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/4.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/5.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/6.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/7.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/8.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/9.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/ch/10.jpg"/></div>
				</div>

				<div class="swiper-button-next case__swiper-btn"></div>
				<div class="swiper-button-prev case__swiper-btn"></div>

			</div>

			<div thumbsSlider="" class="swiper case__swiper-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/1.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/2.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/3.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/4.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/5.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/6.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/7.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/8.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/9.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/ch/10.jpg"/></div>
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