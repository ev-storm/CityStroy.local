<!DOCTYPE html>
<html lang="ru">
<title>IL PATIO & ПЛАНЕТА СУШИ</title>
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
				<h1>IL PATIO & ПЛАНЕТА СУШИ</h1>
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
			

			<img class="case__cover-mob" src="../assets/img/cart/IL_&_sushi/1.jpg" alt="">
			<div class="case__cover case-IL_suhsi">
			</div>

		

			<div id="case__about" class="case__about">
				<div class="case__video">
					<video id="myVideo" class="case__about-video" controls="true" loop="true" muted="true" autoplay="true" playsinline>
							<source src="../assets/video/case/il_&_su.mp4" type="video/mp4" />
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
					<h1>IL PATIO & ПЛАНЕТА СУШИ </h1>
					<h2><span>Объект:</span> Ресторан <br>
							<span>Локация:</span> ТРЦ Остров Мечты <br>
							<span>Площадь объекта:</span> 409 м2 <br>
							<span>Срок реализации проекта:</span> 116 дней</h2>
					<button class="button case__btn modal__btn">Записаться на экскурсию</button>
				</div>
			</div>

			<div class="case__report">

				<div class="case__report-point">
					<h1>Задача</h1>
					<h2>Заказчик обратился к нам со своим дизайн-проектом и технологией. Требовалось спроектировать инженерные проекты, согласовать их с торговым центром, произвести строительно-монтажные работы, скоординировать все субподрядные компании, укомплектовать ресторан оборудованием, мебелью, декором, провести пуско-наладочные работы и запустить ресторан в эксплуатацию. Интересно отметить, что именно с данного ресторана сеть iL PATIO начала ребрендинг своих заведений — на момент строительства данная концепция дизайна была абсолютно новой и еще не использовалась в других заведениях сети.</h2>
				</div>

				<div class="case__report-point">
					<h1>Технические условия</h1>
					<h2>Ресторан расположен на двух этажах. Высота до перекрытий 6,5м, за счет чего под потолочным пространством удалось разместить все необходимые коммуникации. Из-за особенностей планировки исходного помещения в ресторане была очень грамотно организована технология — основные цеха расположены последовательно друг за другом, чтобы персоналу было удобно работать. Отметим, что в данном ТРЦ все технические условия на вентиляцию были достаточными. Торговым центром на крыше были установлены вентиляторы достаточной мощности для потребностей ресторана, благодаря чему в данном проекте удалось минимизировать расходы на систему вентиляции. Следует отметить, что и мощности по холоду было достаточно, поэтому не пришлось проектировать систему охлаждения на фреоне. Относительно электрической мощности технические условия были совершенно недостаточны. Мы согласовали решение поменять вводной автомат в ГРЩ и увеличить сечение кабельной трассы.</h2>
				</div>

				<div class="case__report-point">
					<h1>Инженерные системы</h1>
					<h2>Заменили вводной кабель и установили электрический щит на первый этаж. Водомерный распределительный узел был установлен также на первом этаже. Было необходимо проложить электрические кабели и трубы водоснабжения, в том числе трубы для фанкойлов, на второй этаж, сделав это так, чтобы коммуникации не заняли дополнительное место. Мы приняли решение сделать проколы в плите перекрытия в месте расположения кухонной перегородки, разделяющей зал и технологию. Таким образом, мы сэкономили место и заказчику не пришлось строить дополнительные короба для прокладки коммуникаций, а также вносить существенные изменения в проект технологии и дизайна. Еще одно техническое решение, которое нам удалось согласовать с администрацией ТРЦ — возможность провести трубы канализации технологии под нижним этажом, чтобы не возводить подиум и сохранить единый уровень пола во всех помещениях ресторана (аналогичное решение было использовано в ряде других наших проектов). Это сэкономило средства Заказчика и создало безопасную среду работы персонала. На втором этаже мы спроектировали и возвели антресольный этаж, создав третий уровень в месте размещения технологии, выиграв тем самым дополнительные 30 м2 полезной площади для технических нужд.</h2>
				</div>

				<div class="case__report-point">
					<h1>СМР</h1>
					<h2>Работы на объекте велись круглосуточно. Наша компания выполняла все строительно-монтажные работы на объекте.<br>
						<span>Помимо общестроительных работ, согласно дизайн-проекту, сделали:</span>
						<ul>
							<li>Лифт для подачи блюд со второго этажа на первый</li>
							<li>Реконструировали лестницу, ведущую на второй этаж</li>
							<li>Разработали и выполнили панорамное, разделенное на горизонтальные сегменты, остекление второго этажа с электроприводом. Нижняя часть остекления выполняет роль ограждения, а два верхних сегмента сдвигаются вниз, открывая свободный обзор на концертную сцену торгового центра</li>
							<li>Декоративную арку на втором этаже, разделяющую два зала</li>
							<li>Металлический самонесущий каркас для круглых капителей</li>
							<li>Круглые капители колон в виде лопастей пропеллера и светодиодной подсветкой по окружности</li>
							<li>Инкрустированные объемные иероглифы в стенах в двух залах на двух этажах</li>
							<li>Отдельно вынесенные в зал туалеты с индивидуальным металлическим каркасом для крепления инсталляций</li>
							<li>Перегородки, разделяющие зал и пространство над лестницей на высоте 13,5 метров от уровня пола первого этажа. Для этого был возведен временный промежуточный этаж вокруг лестничного марша</li>
							<li>Стойку reception, встроенную в несущие металлические колонны на фасаде</li>
							<li>Входные проемы без дверей при входе в ресторан</li>
							<li>Барную стойку на втором этаже</li>
							<li>Большие люстры над столами</li>
							<li>Большие горизонтальные и вертикальные вывески на высоте 9 метров</li>
						</ul>
					</h2>
				</div>

				<div class="case__report-point">
					<h1>Комплектация</h1>
					<h2>Кроме СМР и работ субподрядчиков мы укомплектовали объект компьютерно-кассовым и слаботочным оборудованием, смонтировали и произвели пусконаладочные работы со специалистами компании правообладателем бренда.</h2>
				</div>

				<div class="case__report-point">
					<h1>Сервисное обслуживание</h1>
					<h2>Мы выполняли сервисное обслуживание в течение двух лет. На данный момент ресторан находится на постгарантийном обслуживании.</h2>
				</div>
			</div>


			<!-- SWIPER__CASE -->
		<div class="case__swiper-con">
			<div class="swiper case__swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/IL_&_sushi/1.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/IL_&_sushi/2.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/IL_&_sushi/3.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/IL_&_sushi/4.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/IL_&_sushi/5.jpg"/></div>
				</div>

				<div class="swiper-button-next case__swiper-btn"></div>
				<div class="swiper-button-prev case__swiper-btn"></div>

			</div>

			<div thumbsSlider="" class="swiper case__swiper-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/IL_&_sushi/1.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/IL_&_sushi/2.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/IL_&_sushi/3.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/IL_&_sushi/4.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/IL_&_sushi/5.jpg"/></div>
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