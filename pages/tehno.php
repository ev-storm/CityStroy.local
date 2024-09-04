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
							<h1> ТЕХНОЛОГИЧЕСКОЕ ПРОЕКТИРОВАНИЕ</h1>
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
							кухни и зала для ресторанов за 8-10 дней в Москве «под ключ» <br>
							<p>перегородки и стены, спецификация и расстановка оборудования, планировка посадочных мест,<br> планы привязки инженерных коммуникаций</p>
						</h2>
				</div>
						<!-- <div>
							<h1>ТЕХНОЛОГИЧЕСКОЕ ПРОЕКТИРОВАНИЕ</h1>
						</div>
						<h2>
							кухни и зала для ресторанов за 8-10 дней в Москве «под ключ» <br>
							<p>перегородки и стены, спецификация и расстановка оборудования, планировка посадочных мест,<br> планы привязки инженерных коммуникаций</p>
						</h2>

					</div> -->

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
			<h1 class="about__title">Наши проектировочные решения создают основу окупаемости за счет:</h1>

			<div class="about__item teh">
				<h3>
					<img src="/assets/icon/16.svg" alt="">
					Повышения качества кухни и его удержания на высоком уровне
				</h3>
				<h3>
					<img src="/assets/icon/3.svg" alt="">
					Увеличения эффективности работы персонала и проходимости заведения
				</h3>
				
				<h3 >
					<img src="/assets/icon/2.svg" alt="">
						Уменьшения ежемесячных операционных расходов
				</h3>
								<!-- <h3 >
					<img src="/assets/img/icon/teh_5.svg" alt="">
					Водоснабжение, канализация, вентиляция, электроснабжение
				</h3>
				<h3> -->
				<h3>
					<img src="/assets/icon/19.svg" alt="">
					<a href="#tehno-plan-con">Нестандартное оборудование</a>
				</h3>
				<h3>
					<img src="/assets/icon/17.svg" alt="">
					Сокращаете количество персонала
				</h3>
				<h3 >
					<img src="/assets/icon/8.svg" alt="">
					Увеличиваете площадь под посадочные места
				</h3>
			</div>
			

			<h2 class="about__column-title teh-span"><span>Технологический проект</span> — основа для успешной работы ресторана</h2>
			<h3 class="about__column-sub-title sub-teh-span">В проекте мы прорабатываем ключевые факторы, влияющие на
			качество кухни, скорость работы персонала и проходимость заведения</h3>
			<div class="about__column about__teh teh">

				<div>
					<div>
						<h1 class="about__column_2 teh-about__column">Оптимально используем пространство помещения</h1>
					</div>
					<h3>Применяем оригинальные решения и задействуем при необходимости всю высоту помещения, тем самым увеличиваем общую полезную площадь под размещение посадочных мест</h3>
				</div>
				<div>
					<div>
						<h1>Делаем заведение удобным для персонала</h1>
					</div>
					<h3>Разрабатываем планировку технологических помещений ресторана с точки зрения оптимального движения потоков продуктов на разных стадиях производства<br>Это делает зону технологии удобной для персонала, увеличивая его эффективность, что сокращает время ожидания заказов и увеличивает проходимость ресторана.</h3>
				</div>
				<div>
					<div>
						<h1>Подбираем оборудование для
						оптимизации производственных процессов</h1>
					</div>
					<h3>Подбираем технологическое оборудование с учетом кулинарного профиля ресторана, на основе большого опыта взаимодействия с производителями профессионального оборудования</h3>
				</div>

				<div>
					<div>
						<h1>Как результат:</h1>
					</div>
					<h3>- Вы обслуживаете больше гостей одновременно<br>
							- Снижаете операционные и управленческие расходы на содержание персонала<br>
							- Вы не роняете качество и скорость обработки заказов в периоды пиковой загрузки<br>
							- Гости лояльны к вам из-за стабильного качества и адекватного времени ожидания<br>
							- Гости рекомендуют вас друзьям и чаще возвращаются сами<br>
				</div>
				
			</div>
			<p class="blue">Ресторан работает лучше и быстрее окупается!</p></h3>
			<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
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

		<div class="tehno-plan-con" id="tehno-plan-con">
			<div class="tehno-plan">
				<div class="tehno-plan__text">
					<h1>Бесплатно разработаем</h1>
					<h2>концепцию кухни для ресторана в Москве от 300м²</h2>
					<h3>- план предварительного зонирования: <br>
								расположение перегородок, выделение основных зон 
								<p>( туалета, кухни, 	бара, зала, подсобных помещений )</p> <br>
						- план расстановки кухонного оборудования с размерами <br>
						- план примернной планировки посадочных мест в зале</h3>
					<form class="kit-form" action="#" method="POST" enctype="multipart/form-data">

							<input class="modal__input plan-input kit-input__name" type="text" data-validate-field="name" name="Имя" placeholder="Введите имя">

							<input class="modal__input plan-input kit-input__tel " type="tel" data-validate-field="tel" name="Телефон" placeholder="Введите телефон">

							<div class="modal__check-con">
								<input id="kit__check-btn-tehno" type="checkbox">
								<label type="checkbox" class="modal__check-text" for="kit__check-btn-tehno">
									<span class="kit__check-btn modal__check"></span>
									Согласие на обработку данных
									<a href="../pages/assent.php"><img class="modal__check-que" src="/assets/img/icon/que.svg" alt=""></a>
								</label>
						</div>

						<button  id="btn-kit-banner-tehno" class="button kit-button-banner-tehno kit-button-banner">Отправить</button>
						<!-- <input id="btn" type="submit" class="button" value="Отправить"> -->
					</form>
				</div>
				<div class="plan-img-pdf">
					<div class="tehno-plan__img open-pdf">
						<img class="tehno-plan__img__search" src="/assets/img/icon/search.svg" alt="">
						<img class="tehno-plan__img__main" src="/assets/img/icon/plan.svg" alt="">
					</div>
					<button class="open-pdf open-pdf-btn button">Открыть PDF</button>	
					<a href="/assets/img/plan/city.pdf" target="_blank">
						<button class="tehno-plan__pdf button">Скачать PDF</button>	
					</a>
				</div>
			</div>
			<h1>В результате вы узнаете:</h1>
			<div>
				<h3>- какая необходима площадь под технологию и подсобные помещения<br>
						- какие сложности могут возникнуть при проектировании<br>
						- какие нужны дополнительные инженерные коммуникации для оборудования<br>
				</h3>
				<h3>- какая площадь необходима под зал<br>
				- какие необходимы технические решения<br>
						- как пересекаются технологические потоки<br>
						
				</h3>
			</div>
			<p>*Данное предложение не является публичной офертой. Исполнитель – СитиСтрой – самостоятельно определяет объем услуг/работ на свое усмотрение. Исполнитель -СитиСтрой- вправе отказаться от оказания данной услуги/проведении работ в любой момент без объяснения причин.
			</p>
		</div>

	
		<div class="plan-con">
			<img class="plan-close" src="/assets/img/icon/burger-close.svg" alt="">
			<div class="plan">
				<div class="swiper planSwiper">
					<div class="swiper-wrapper">
							<div class="swiper-slide plan-slide"><img src="/assets/img/plan/1.jpg" alt=""></div>
							<div class="swiper-slide plan-slide"><img src="/assets/img/plan/2.jpg" alt=""></div>
							<div class="swiper-slide plan-slide"><img src="/assets/img/plan/3.jpg" alt=""></div>
							<div class="swiper-slide plan-slide"><img src="/assets/img/plan/4.jpg" alt=""></div>
							<div class="swiper-slide plan-slide"><img src="/assets/img/plan/5.jpg" alt=""></div>
							<div class="swiper-slide plan-slide"><img src="/assets/img/plan/6.jpg" alt=""></div>
						</div>
						<div class="swiper-pagination plan-pag"></div>
					</div>
				</div>
		</div>


	<!-- --------------------------------------- -->

	<!-- FOTTER -->
	<?php
		include('../components/footer.php')
	?>
	
</body>


</html>