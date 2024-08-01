<!DOCTYPE html>
<html lang="ru">

<title>IL PATIO</title>
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
				<h1>IL PATIO</h1>
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
			

			<img class="case__cover-mob" src="../assets/img/cart/il-pat/1.jpg" alt="">
			<div class="case__cover case-il-pat">
			</div>

		

			<div id="case__about" class="case__about">
				<div class="case__video">
					<video id="myVideo" class="case__about-video" controls="true" loop="true" muted="true" autoplay="true" playsinline>
							<source src="../assets/video/case/il-pat.mp4" type="video/mp4" />
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
					<h1>IL PATIO</h1>
					<h2><span>Объект:</span> Ресторан <br>
							<span>Локация:</span> ТРЦ Июнь <br>
							<span>Площадь объекта:</span> 300 м2 <br>
							<span>Срок реализации проекта:</span> 82 дней</h2>
					<button class="button case__btn modal__btn">Записаться на экскурсию</button>
				</div>
			</div>

			<div class="case__report">

				<div class="case__report-point">
					<h1>Задача</h1>
					<h2>Заказчик обратился со своим дизайн-проектом и технологией. Была поставлена задача провести реконструкцию и перепланировку старого ресторана в новый.</h2>
				</div>

				<div class="case__report-point">
					<h1>Технические условия</h1>
					<h2>Технические условия под задачу реконструкции подходили полностью, так как на этом месте прежде был другой ресторан со схожей концепцией. Необходимо было адаптировать существующие коммуникации под новый проект.</h2>
				</div>

				<div class="case__report-point">
					<h1>Инженерные системы</h1>
					<h2>Несмотря на то, что технические условия подходили под ресторан, в разрезе поставленной Заказчиком задачи, мы серьезно переделали существующие инженерные коммуникации. Больше всего изменений пришлось на электрическую часть. Новое оборудование располагалось на новых местах, поэтому пришлось двигать все места подключений в горячих и холодных цехах, прокладывать новые линии, глушить старые. Ввиду этого вводной электрический щит пришлось существенно перебрать. По залу изменений было меньше. Используя существующие линии, дизайнеры добавили много висящих светильников на потолке, бра на стены и декоративную подсветку на кашпо.</h2>
				</div>

				<div class="case__report-point">
					<h1>СМР</h1>
					<h2>Наша компания выполняла все строительно-монтажные работы на объекте. Помимо общестроительных работ, согласно дизайн-проекту, мы сделали:<br>
						<ul>
							<li>Демонтаж старой входной группы и монтаж рольставни с электроприводом в проеме</li>
							<li>Наливной пол в стиль уличной дороги «бетон, покрытый краской»</li>
							<li>Специальную раму для размещения деревянных элементов декора</li>
							<li>Сварной каркас для бара с местами для телевизоров</li>
							<li>Декоративную штукатурку на стенах.</li>
							<li>основные коммуникации и конструктивные элементы (полы, стены, потолки) мы оставили без изменений, но переделали зал с технологией под новую концепцию и дизайн;</li>
							<li>потолок декорировали висячими светильниками;</li>
							<li>разделили помещение на 2 части: внешнюю более просторную зону и внутреннюю, более уютную;</li>
							<li>заменили фасадное остекление;</li>
							<li>перенесли входную дверь на другое место из-за этого поменяли плитку со стороны галереи ТЦ и установили новые пятки под входные двери;</li>
							<li>полностью переделали барное пространство и барную стойку;</li>
							<li>за баром установили пиццу-печь для демонстрационной выпечки;</li>
							<li>смонтировали большое кашпо с подсветкой разделяющее зал на две половины.</li>
						</ul>
					</h2>
				</div>

			</div>


			<!-- SWIPER__CASE -->
		<div class="case__swiper-con">
			<div class="swiper case__swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/1.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/2.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/3.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/4.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/5.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/6.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/7.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/8.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/9.jpg"/></div>
					<div class="swiper-slide case__slide"><img src="../assets/img/cart/il-pat/10.jpg"/></div>
				</div>

				<div class="swiper-button-next case__swiper-btn"></div>
				<div class="swiper-button-prev case__swiper-btn"></div>

			</div>

			<div thumbsSlider="" class="swiper case__swiper-2">
				<div class="swiper-wrapper">
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/1.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/2.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/3.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/4.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/5.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/6.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/7.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/8.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/9.jpg"/></div>
					<div class="swiper-slide case__slide-2"><img src="../assets/img/cart/il-pat/10.jpg"/></div>
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