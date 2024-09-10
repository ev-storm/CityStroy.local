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
		<h1 class="about__title">Быстро согласовываем рабочую документацию с администрацией здания</h1>
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
					<h1>Опыт взаимодействия со службами ТЦ/БЦ</h1>
				</div>
				<h3>Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ</h3>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Глубоко и детально прорабатываем проект в множество циклов</h1>
				</div>
				<h3>Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений</h3>
			</div>
			<div>
				<div>
					<!-- <img src="/assets/img/icon/Frame 34.svg" alt=""> -->
					<h1>Глубоко и детально прорабатываем проект в множество циклов</h1>
				</div>
				<h3>Анализируем все технические условия на предмет предполагаемого объекта в конкретной локации. Не все локации подходят и не все ТУ удовлетворяют требованиям проектируемых объектов</h3>
			</div>
		</div>
		<button class="button-about button modal__KP">ОБСУДИТЬ ПРОЕКТИРОВАНИЕ</button>
	</article>
	<div class="info-block_1">

			<h1 class="info_title" >Сокращаем срок сдачи объекта
			и ваши финансовые расходы</span></h1>

			<div class="info_check-con info_check-con-proj">

				<div class="info_check info_check-proj move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_2"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<h2>Оптимизируем общий бюджет проектировочных решений</h2>
						<h3 class="info_check-proj-h3">Находим технические решения для оптимизации расходов за счет богатого 7-летнего опыта проектирования и строительства ресторанов: от самых маленьких до двух- трехуровневых объектов большой площади.</h3>
						</div>
				</div>

				<div class="info_check move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_2"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<h2>Уберегаем от финансовых потерь из-за неточностей в проектировании</h2>
						<h3 class="info_check-proj-h3">Делаем сквозной контроль всех разделов проектирования на предмет ошибок и наложений, исключая ошибки от перекрестного проектирования разными подрядчиками, которые приводят к увеличению общего бюджета строительства.</h3>
						</div>
				</div>
				<div class="info_check move-con" >
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_3"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<h2>Быстро согласовываем рабочую документацию с администрацией здания</h2>
						<h3 class="info_check-proj-h3">Накоплен большой опыт взаимодействия со службами эксплуатации ТЦ и БЦ. Знаем весь процесс согласования рабочей и сдачи исполнительной документации ТЦ/БЦ. Это позволяет быстро вносить в проект корректировки от администрации здания и оперативно согласовывать с ней все решения.</h3>
						</div>
				</div>

				<div class="info_check move-con">
					<dotlottie-player 
						class="info_ok_player move"
						id="info_ok_player_4"
						src="/assets/animation/ok.json" 
						background="transparent" 
						speed="1" 
						loop="false"
						autoplay="true">
					</dotlottie-player>
					<div class="info_check-title">
						<h2>Создаем проект по которому не будет изменений в смете и сроках при СМР</h2>
						<h3 class="info_check-proj-h3">Мы разрабатываем проекты в множество циклов, в каждом из которых происходят значительные изменения от первоначальной версии. 
							Такой подход позволяет создать максимально-точный и грамотный проект, по которому не будет изменений в смете и сроках при строительстве.</h3>
						</div>
				</div>
			</div>

		</div>


	<!-- СХЕМА -->
	<?php
		include('../components/shema.php')
	?>
	<div class="step_con step_con-mob">
	<div class="step-container">
		<div class="step">
			<h1>Сначала запускаются <span>Технология</span> и <span>Дизайн,</span> далее разрабатываются архитектурный и инженерные разделы, только после этого считается смета, а потом - стройка.</h1>
		</div>
	
	<img class="_R" src="/assets/icon/R.svg"></img>

	<div class="step">
		<h1>Далее обязательно разрабатывается раздел <span>АР</span>. Он объединяет <span>Дизайн</span> и <span>Технологию.</span> Раздел <span>АР</span> является техническим заданием на проектирование инженерных разделов</h1>
	</div>

	</div>

	<img class="long_R" src="/assets/icon/long_R.svg"></img>
	<img class="R" src="/assets/icon/R.svg"></img>

	<div class="step-container">

		<div class="step">
			<h1>После разработки раздела <span>АР</span>, разрабатываются инженерные разделы: <span>ОВиК</span>, <span>ВК</span>, <span>СКС</span>, <span>ЭОМ</span> и если есть конструкции из металла, то раздел <span>КМ</span>.</h1>
		</div>
	
		<img class="_R" src="/assets/icon/R.svg"></img>

	<div class="step">
		<h1><span>ЭОМ</span> разрабатывается последним, так как в нем сведена вся информация от всех потребителей энергии со всех проектов.</h1>
	</div>

	</div>
	<img class="long_R" src="/assets/icon/long_R.svg"></img>
	<img class="R" src="/assets/icon/R.svg"></img>

	<div class="step-container">

	<div class="step">
		<h1>От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика</h1>
	</div>

	<img class="_R" src="/assets/icon/R.svg"></img>

	<div class="step">
		<h1>Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</h1>
	</div>

	</div>

</div>

<div class="warn_con  warn-mob">
	<div class="warn">
		<img src="/assets/img/icon/!.svg" alt="">
		<h1>От соблюдения такой последовательности этапов зависит количество ошибок и перерасход ресурсов Заказчика.<br>
		Эта зависимость прямо пропорциональна масштабу проекта – чем больше объект, тем строже нужно соблюдать эту этапность.</h1>
	</div>
</div>

	



	<!-- FOTTER -->
	<?php
		include('../components/footer.php')
	?>


</body>
</html>