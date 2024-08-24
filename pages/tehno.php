<!DOCTYPE html>
<html lang="ru">

<title>Технология</title>
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
	.menu__main > li:nth-child(2) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(2) > a {
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
							<h1> ТЕХНОЛОГИЯ</h1>
						</div>

						<h2>
							Строим рестораны с нуля до пуска в эксплуатацию и постгарантийного обслуживания
						</h2>
					</div>

					<div class="title__button">
						<button class="button modal__btn">
							СВЯЗАТЬСЯ С НАМИ
						</button>
						<a href="#teho-about">
							<div class="down" 
							onmouseenter="down__button_teh.play()" 
							onmouseleave="down__button_teh.stop()"	>
								<dotlottie-player
									id="down__button_teh"
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/6.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/13.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/5.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/7.jpg" alt=""></div>
        </div>
    	</div>

				<div class="video__con">
						<video class="video" loop="true" muted="true" autoplay="true" poster="">
							<source src="/assets/video/tehno.mp4" type="video/mp4">
						</video>
				</div>

		</article>
		
	<!-- SCREEN_2 ABOUT-->
		<article id="teho-about" class="about">
			<h1 class="about__title">Разрабатываем Технологический проект для Заказчика со следующими разделами:</h1>

			<div class="about__item teh">
				<h3>
					<img src="/assets/img/icon/teh_1.svg" alt="">
					Перегородки и стены
				</h3>
				<h3>
					<img src="/assets/img/icon/teh_6.svg" alt="">
					Нестандартное оборудование
				</h3>
				<h3 >
					<img src="/assets/img/icon/teh_5.svg" alt="">
					Водоснабжение, канализация, вентиляция, электроснабжение
				</h3>
				<h3>
					<img src="/assets/img/icon/teh_3.svg" alt="">
					Технологические потоки
				</h3>
				<h3>
					<img src="/assets/img/icon/teh_4.svg" alt="">
					Отделка стен, полов и потолков
				</h3>
				<h3 >
					<img src="/assets/img/icon/teh_2.svg" alt="">
					Спецификация и расстановка технологического оборудования
				</h3>
			</div>
			


			<div class="about__column teh">
				<div>
					<div>
						<img src="/assets/img/icon/Frame 34.svg" alt="">
						<h1 class="about__column_2">Обмеры</h1>
					</div>
					<h3>Выполняем квалифицированные обмеры помещения – чем меньше ошибок на этом этапе, тем меньше переделок произойдёт в последствии = экономия средств и времени Заказчика</h3>
				</div>
				<div>
					<div>
						<img src="/assets/img/icon/Frame 34.svg" alt="">
						<h1>Расчет мощности</h1>
					</div>
					<h3>Рассчитаем необходимую мощность электроэнергии, потребность в воде, объемы вентиляционного воздуха и канализации</h3>
				</div>
				<div>
					<div>
						<img src="/assets/img/icon/Frame 34.svg" alt="">
						<h1>Планировка</h1>
					</div>
					<h3>Разрабатываем планировку технологических помещений ресторана с точки зрения оптимального движения потоков продуктов на разных стадиях производства</h3>
				</div>
				<div>
					<div>
						<img src="/assets/img/icon/Frame 34.svg" alt="">
						<h1>Оборудование</h1>
					</div>
					<h3>Подбираем технологическое оборудование с учетом кулинарного профиля ресторана, на основе большого опыта взаимодействия с производителями профессионального оборудования</h3>
				</div>
			</div>
			<button class="button-about button modal__btn">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
		</article>

	
		<!-- SCREEN_3 CART-->
		<article>
			<!-- 1 -->
			<div class="cart-teh сart-teh__mob">
				<img class="element-animation" src="/assets/img/teh/1.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Перегородки и стены</h1>
					<h2 class="text-teh">Этот раздел включает в себя план перегородок и внутренних стен здания с подробными размерами и конструктивными особенностями, с указанием проемов, дверей, рольставней и их технических характеристик, экспликацию помещений.</h2>
					<ul>
						<li>Авторский надзор на объекте при осуществлении СМР</li>
						<li>Консультации со смежными организациями</li>
						<li>При необходимости - в кратчайшие сроки внесение изменений в прое</li>
						<li>При необходимости выполним раздел демонтажных работ</li>
					</ul>
				</div>
			</div>
			<!-- 2 -->
			<div class="cart-teh сart-teh__mob">
				<img class="element-animation" src="/assets/img/teh/2.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Спецификация и расстановка технологического оборудования</h1>
					<h2 class="text-teh">Спецификация технологического оборудования содержит подробные технические характеристики, размеры, потребляемые мощности.<br> <br>По запросу Заказчика предложим производителя и марку/тип оборудования. <br><br>
					По заданию Заказчика разрабатываем планировку помещений в соответствии с САНПИН и СНИП, также и подробную схему расстановки оборудования с указанием нумерации по каждой позиции.</h2>
					<h3>
						Разработаем ТЗ к холодильным камерам для последующего приобретения и монтажа
					</h3>
				</div>
			</div>
			<!-- 3 -->
			<div class="cart-teh сart-teh__mob">
				<img class="element-animation" src="/assets/img/teh/3.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Водоснабжение, канализация, вентиляция, электроснабжение</h1>
					<h2 class="text-teh">В этих разделах будут указаны все расстояния, высоты, габариты, места расположения, способы подвода (отвода) и распределения:</h2>
					<ul>
						<li>Воды и канализации, сливные трапы</li>
						<li>Розеток, выводов кабеля к месту установки технологического и слаботочного оборудования</li>
						<li>Избыточного тепла от оборудования, места установки вентиляционных решеток и зонтов</li>
					</ul>
				</div>
			</div>
			<!-- 4 -->
			<div class="cart-teh сart-teh__mob">
				<img class="element-animation" src="/assets/img/teh/4.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Технологические потоки</h1>
					<h2 class="text-teh">Составим подробный план технологических потоков, который включает в себя перемещение продуктов, работников кухни, официантов и другого персонала, учитывая количество работников, рабочих смен, времени работы ресторана и количества перемещаемых продуктов в день.</h2>
					<h3>
						Для удобства работы персонала разработаем технологические инструкции
					</h3>
				</div>
			</div>
			<!-- 5 -->
			<div class="cart-teh сart-teh__mob">
				<img class="element-animation" src="/assets/img/teh/5.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Отделка стен, полов и потолков</h1>
					<h2 class="text-teh">В данных разделах:</h2>
					<ul>
						<li>Укажем, какую именно нужно будет предусмотреть отделку стен, места их усиления для подвесного оборудования</li>
						<li>Обозначим, с учетом пожеланий Заказчика и санитарных норм, в каких помещения какая именно должна быть уложена плитка</li>
						<li>Распишем раскладку подвесного потолка, модель, материал отделки, места расположения светильников</li>
					</ul>
					<h3>
						Для удобства работы персонала разработаем технологические инструкции
					</h3>
				</div>
			</div>
			<!-- 6 -->
			<div class="cart-teh сart-teh__mob">
				<img  class="element-animation" src="/assets/img/teh/6.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Нестандартное оборудование</h1>
					<h2 class="text-teh">В случае, если на рынке нет необходимого оборудования, мы выполним эскизные решения нестандартного технологического или иного оборудования, барных и кассовых стоек, используемых на данной точке с подробным описание конструктивных особенностей, используемых материалов, технических и технологических требований.</h2>
					<ul>
						<li>Поможем составить меню ресторана исходя из конструктивных особенностей и технических условий</li>
					</ul>
					<h3>
						Предлагаем Заказчику готовые условия по приобретению, поставке, монтажу оборудования.
					</h3>
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
<!-- BIG-BANNER -->
<?php
	include('../components/big-form.php')
?>
<!-- INFO-BANNER -->
<?php
	include('../components/info-banner.php')
?>



</html>