	<!DOCTYPE html>
<html lang="ru">

<title>СМР</title>
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
	.menu__main > li:nth-child(5) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(5) > a {
		color: #28bbff;
		font-weight: 300;
	}
</style>

<body>
		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text title__srm">
					<div>
						<h1> СТРОИТЕЛЬНО-МОНТАЖНЫЕ РАБОТЫ</h1>
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
						<h2>Строительство ресторанов и кафе в Москве «под ключ» <br>
							<!-- <p>Архитектурные решения / Отопление, вентиляция и кондиционирование Водоснабжение и канализация / <br> Структурированные кабельные системы /Электроснабжение и электроосвещение / Конструкции металлические</p> -->
						</h2>
					</div>
<!-- 					
					<div>
						<h1 class="title_smr"> СТРОИТЕЛЬНО-МОНТАЖНЫЕ <br> И ОТДЕЛОЧНЫЕ РАБОТЫ РЕСТОРАНОВ</h1>
					</div>

					<h2>
						Строим коммерческие помещения с нуля до пуска в 
						эксплуатацию и постгарантийного обслуживания
					</h2>
				</div> -->
				
				<div class="title__button">
					<button class="button modal__btn">
						СВЯЗАТЬСЯ С НАМИ
					</button>
					<a href="#smr_about">
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
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/2.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/6.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/9.jpg" alt=""></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="/assets/video/SMR.mp4" type="video/mp4">
					</video>
			</div>

		</article>


	<!-- SCREEN_2 ABOUT-->
	<article id="smr_about" class="about">
		<h1 class="about__title">Укладываемся в срок арендных каникул и не выходим за бюджет сметы за счет того, что:</h1>
		<div class="about__item about__smr">
			<h3>
				<img src="/assets/icon/2.svg" alt="">
				Cчитаем в смете все и сразу, не занижая количество и стоимость работ
			</h3>
			<h3>
				<img src="/assets/icon/9.svg" alt="">
				Специализируемся на строительстве в ТЦ и БЦ
			</h3>
			<h3 >
				<img src="/assets/icon/1.svg" alt="">	
				Жестко контролируем движение по графику производства работ
			</h3>
			<h3 >
				<img src="/assets/icon/10.svg" alt="">
				Обеспечиваем выполнение работ в 2-3 смены
			</h3>
			<h3 >
				<img src="/assets/icon/3.svg" alt="">
				Координируем работу смежных организаций
			</h3>
		</div>
		<div class="about__column">
			<div>
				<div>
					<h1 class="about__column_2">Создаем проект, смету и сроки СМР</h1>
				</div>
				<h3>Мы разрабатываем проекты в множество циклов, в каждом из которых происходят значительные изменения от первоначальной версии. Такой подход позволяет создать максимально-точный и грамотный проект, по которому не будет изменений в смете и сроках при строительстве.</h3>
			</div>
			<div>
				<div>
					<h1>Глубокое погружение в каждый проект</h1>
				</div>
				<h3>В целях экономии средств Заказчика уделяем внимание аспектам, выходящих за рамки нашей ответственности и даем рекомендации по исправлению/избеганию ошибок смежников</h3>
			</div>
			<div>
				<div>
					<h1>Рекомендации по исправлению/избеганию ошибок смежников</h1>
				</div>
				<h3>Выполняем весь спектр задач в рамках нашей основной компетенции, координируем субподрядные и смежные компании, работаем на один общий результат</h3>
			</div>
			<div>
				<div>
					<h1>Ежедневные фото и видео отчёты</h1>
				</div>
				<h3>На всех объектах установлено круглосуточное видеонаблюдение с доступом для Заказчика на удобное устройство. Каждый день от руководителя стройки приходит видео отчет о проделанной работе за предыдущий день</h3>
			</div>
		</div>
		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>

	<!-- SCREEN_3 ABOUT-->
	<article  class="about__3">
			
			<div class="cart-teh smr">
				<img class="element-animation " src="/assets/img/smr/1.png" alt="">
				<div class="title-teh_con element-animation">
					<h1 class="title-teh">Специализация в ресторанной тематике</h1>
					<h2 class="text-teh">Работая с 2016 года в ремонте коммерческой недвижимости, основную часть опыта мы приобрели на объектах ресторанного назначения: от самых маленьких до двух- трехуровневых ресторанов большой площади. Наш опыт и знания позволяют решить любую задачу в сфере ресторанного бизнеса.</h2>
				</div>
			</div> 
			
			<div class="smeta_con ">
				<h1><span class="element-animation">Честные сметы.</span> Как известно, есть два метода работы с Клиентом.</h1>
				
				<div class="cart-teh element-animation smeta">	
					<img  src="/assets/img/smr/$.svg" alt="">
					<div class="title-teh_con smeta-title">
						<h1 class="title-teh">Первый метод</h1>
						<h2 class="text-teh">Первый метод расчёта сметы рассчитан на тех, кто подбирает подрядчика преимущественно по цене. <br> <br>Зная это, подрядчики готовят сметы такие, чтобы выиграть конкурентную борьбу и подписать договор, а дальше разными методами «разгоняют» заказчика на дополнительные сметы, аргументируя это ошибками, допущенными самим же заказчиком по незнанию.<br> <br> Таких мест очень много и поле для «маневров» здесь большое, особенно в том случае, когда проектируют и строят разные компании.
						</h2>
					</div>
				</div>

				<div class="cart-teh element-animation smeta">	
					<img  src="/assets/img/smr/2.svg" alt="">
					<div class="title-teh_con smeta-title">
						<h1 class="title-teh">Второй метод</h1>
						<h2 class="text-teh">Второй метод расчёта сметы заключается в том, что подрядная компания считает все и сразу, учитывая все возможные затраты, проектирует правильно, без «закладок» и возможных будущих изменений.<br> <br> Смета получается дороже, чем у тех, кто идёт по первому пути, но это даёт заказчику максимально приближенный вариант к действительным затратам, наиболее правдивую картину предстоящих инвестиций.<br> <br> Второй метод в итоге реализации проекта даёт существенную экономию заказчику, в сравнении с первым. В первом варианте Заказчик втянут в процесс и дороги назад нет, как нет потолка затрат.
						</h2>
					</div>
				</div>

				<div class="cart-teh element-animation smeta">	
					<img src="/assets/img/smr/3.svg" alt="">
					<div class="title-teh_con smeta-title">
						<h1 class="title-teh">Во втором случае заказчик видит реальную сметную стоимость всех разделов проекта</h1>
						<h2 class="text-teh">Он убережён не только от неизвестного количества дополнительных затрат в ходе реализации инвестиций, но и от роста издержек (простой уже нанятого персонала, аренда, штрафы, налоги), но и, что наиболее важно, - от недополученной прибыли от срыва сроков начала работы ресторана. У второго метода есть один большой минус - при недостатке доверия у Заказчика часто складывается впечатление, что его «разводят» и хотят на нем излишне «навариться».<br><br> Ценность честности очевидна только при негативном опыте Заказчика, который столкнулся прежде с заниженной сметой, а в итоге переплатил в процессе, и, например, за год от начала инвестирования вернул себе гораздо меньше денег, чем если бы работал с такой компанией как наша
						</h2>
					</div>
				</div>

				<div class="cart-teh element-animation smeta">	
					<img src="/assets/img/smr/4.svg" alt="">
					<div class="title-teh_con smeta-title">
						<h1 class="title-teh">Как мы считаем сметы?</h1>
						<h2 class="text-teh">Мы считаем сметы только на основании проектов и только после личной встречи с Заказчиком и осмотра объекта. Именно тогда мы можем получить наиболее полную картину расходов.<br><br> Расчет на основании одной лишь площади и без встречи с Заказчиком мы не делаем и считаем подобный расчет крайне непрофессиональным.<br><br> Надеемся, что именно из этого и сложилась наша репутация на рынке.
						</h2>
						<button class="button smeta-btn modal__btn">НАЗНАЧИТЬ ВСТРЕЧУ</button>
					</div>
				</div>

				<div class="cart-teh element-animation smeta ">	
					<img src="/assets/img/smr/5.svg" alt="">
					<div class="title-teh_con smeta-title">
						<h1 class="title-teh">Уже есть смета?<br>Проведем её аудит</h1>
						<h2 class="text-teh">Мы считаем сметы только на основании проектов и только после личной встречи с Заказчиком и осмотра объекта. Именно тогда мы можем получить наиболее полную картину расходов.<br><br> Расчет на основании одной лишь площади и без встречи с Заказчиком мы не делаем и считаем подобный расчет крайне непрофессиональным.<br><br> Надеемся, что именно из этого и сложилась наша репутация на рынке.
						</h2>
						<div>
							<button class="button smeta-btn modal__btn">КОНСУЛЬТАЦИЯ</button>
							<button class="button smeta-btn modal__btn">ПОЛУЧИТЬ АУДИТ</button>
						</div>
					</div>
				</div>
			</div>

			<div class="cart-teh smeta-team ">	
				<div class=" title-teh_con">
					<img class=" element-animation" src="/assets/img/smr/6.svg" alt="">
					<h1 class=" element-animation title-teh">Команда инженеров и строителей</h1>
					<h2 class=" element-animationtext-teh">Наша команда сформировалась исходя из точки приложения усилий.
					Объекты мы сдаем в срок и добиваемся результата системной планомерной работой.</h2>
				</div>
				<img class="element-animation" src="/assets/img/smr/3.jpeg" alt="">
			</div> 

			<<div class="smeta_con ">
				<h1> Мы собрали коллектив,<span class="element-animation">«заточенный»</span> на рестораны:</h1>
				<div class="smeta-cart_con element-animation">
					<div class="smeta-cart ">
						<img src="/assets/img/smr/7.svg" alt="">
						<h1>Инженеры</h1>
						<h2>Весь состав ИТР нашей компании с высшим строительным и инженерным образованием.</h2>
					</div>

					<div class="smeta-cart element-animation">
						<img src="/assets/img/smr/8.svg" alt="">
						<h1>Дизайнеры</h1>
						<h2>Наши дизайнеры имеют множественный успешный опыт ресторанных проектов.</h2>
					</div>

					<div class="smeta-cart element-animation">
						<img src="/assets/img/smr/9.svg" alt="">
						<h1>Технологи</h1>
						<h2>Многие технологи помимо технического образования, до нас долго работали поварами в ресторане и знают изнутри как сделать правильно и удобно, а значит у команды ресторана есть где вкладывать душу в работу, что напрямую отражается на качестве кухни и репутации ресторана.</h2>
					</div>
					
					<div class="smeta-cart element-animation">
						<img src="/assets/img/smr/10.svg" alt="">
						<h1>Строители</h1>
						<h2>Команда строителей обладает разносторонней квалификацией и имеет опыт в ремонте ресторанов, умеет воплотить все задумки дизайнера и пожелания Заказчика.</h2>
					</div>
				</div>
			</div>


			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/1.webp" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Взаимодействие и согласования со службами ТЦ или БЦ</h1>
					<h2 class="text-teh">Основной пул наших объектов был реализован в торговых и бизнес-центрах. Мы часто сдаем свои объекты службам ТЦ до открытия и запуска в эксплуатацию самого ТЦ.<br><br>Это снижает риски владельцев ТЦ, а их команде легче управлять своими критическими линиями.</h2>
					<ul>
						<li>Хорошо представляем себе работу со службами эксплуатации ТЦ</li>
						<li>Знаем, как спроектировать и согласовать все разделы проектов</li>
						<li>Умеем договориться с инженерами ТЦ о нестандартных решениях</li>
						<li>Заранее готовим исполнительную документацию</li>
					</ul>
				</div>
			</div>

			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/2.webp" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Координация смежных организаций</h1>
					<h2 class="text-teh">Проектирование и ремонт/ реконструкция ресторанов - довольно длительный и технологически сложный процесс. Координация деятельности смежных организаций с нашей стороны даёт Заказчику не только выигрыш во времени, но и снижает его управленческие расходы.</h2>
					<ul>
						<li>Координируем работу всех смежных организаций, контролируем их.</li>
						<li>Следим за графиком производства работ.</li>
						<li>Контролируем технические задания на производство изделий.</li>
						<li>Склеиваем весь процесс для достижения одного общего результата.</li>
					</ul>
				</div>
			</div>

			<div class="smeta-banner element-animation_up">
				<h1>Следует отметить, что мы можем не выполнять эту работу</h1>
				<h2>По опыту, успех проекта и сдача его в срок возможны только при общей координации подрядчиков.<br>
						Это экономит средства и силы Заказчика на разбирательствах с каждым исполнителем и исключает риск отсрочки открытия ресторана.<br>
						Заказчик экономит так, как если бы он нанимал дорогостоящую EPCM компанию для управления проектом.
					</h2>
			</div> 

			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/4.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Сервисное обслуживание</h1>
					<h2 class="text-teh">Мы дарим своим клиентам после запуска объекта в эксплуатацию один год сервисного обслуживания.<br><br>Даже если мы не строили Ваш ресторан, мы готовы взять его на сервисное обслуживание и выполнить отдельные виды работ</h2>
					<ul>
						<li>Целый год ресторан находится под присмотром</li>
						<li>После 1 года обслуживания возможен сервис на договорных условиях</li>
					</ul>
				</div>
			</div>

			<div class="cart-teh">
				<img class="element-animation" src="/assets/img/smr/2.jpg" alt="">
				<div class="title-teh_con">
					<h1 class="title-teh">Сдача объектов в срок</h1>
					<h2 class="text-teh">При должном финансировании укладываемся в сжатые сроки, обеспечивая выполнение работ в 2-3 смены. Нелишне повторить, что это экономит Заказчику гораздо больше денег, чем на «дешевых» сметах, где срыв сроков неизбежен.</h2>
					<ul>
						<li>Ресторан начинает работать в срок, прибыль не упускается, издержки сокращаются.</li>
					</ul>
				</div>
			</div>

	</article>




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
		include('../components/footer.php')
	?>
	<!-- BIG-BANNER -->
	<?php
		include('../components/big-form.php')
	?>
	<!-- INFO-BANNER -->
	<?php
		include('../components/info-banner.php')
	?>
	<!-- MODAL-BANNER -->
	<?php
		include('../components/modal.php')
	?>
</body>
</html>
