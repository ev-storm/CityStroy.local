<!DOCTYPE html>
<html lang="ru">

<title>Контакты</title>
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
	.menu__main > li:nth-child(7) > a {
		color: #28bbff;
		font-weight: 300;
	}
	.menu-mob_main > li:nth-child(7) > a {
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
						<h1> КОНТАКТЫ</h1>
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
					<a href="#recvis_con">
					<div class="down" 
					onmouseenter="down__button.play()" 
					onmouseleave="down__button.stop()"	>
					<dotlottie-player
					id="down__button"
					class="down__button"
					src="/assets/animation/down.json" 
					background="transparent" 
					speed="1">
					</dotlottie-player></a>
					</div>
				</div>
			</div>

			<div class="title-mob swiper-container">
        <div class="swiper-wrapper">
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/5.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/6.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/7.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/8.jpg" alt=""></div>
						<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/9.jpg" alt=""></div>
        </div>
    	</div>

			<div class="video__con">
					<video class="video" loop="true" muted="true" autoplay="true" poster="">
						<source src="../assets/video/contact.mp4" type="video/mp4">
					</video>
			</div>

		</article>


		<article class="recvis_con" id="recvis_con">
			
		<div class="recvis_ recL">
			<div class="recvis_back">
				<div class="recvis-main_title">
					<h1>Реквезиты ООО «СитиСтрой»</h1>
				</div>

				<div class="recvis_main">
					<div class="recvis_main_1">
						<div class="recvis">
							<div class="recvis_title">
								<h1>Полное наименование фирмы:</h1>
								<h2 id="text">Общество с ограниченной <br> ответственностью «СитиСтрой»</h2>
							</div>
							<div id="copy" class="recvis_copy">
								<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
								</svg>
								<h3>Скопировано</h3>
							</div>
						</div>

						<div class="recvis">
							<div class="recvis_title">
								<h1>Директор:</h1>
								<h2 id="text2">Богдан Сергей Зосимович</h2>
							</div>
							<div class="recvis_copy">
								<svg id="copy2" width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
								</svg>
								<h3>Скопировано</h3>
							</div>
						</div>

						<div class="recvis">
							<div class="recvis_title">
								<h1>Юридический адрес:</h1>
								<h2>121087 <br>г. Москва, Береговой проезд, д.7, офис 3</h2>
							</div>
							<div class="recvis_copy">
								<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
								</svg>
								<h3>Скопировано</h3>
							</div>
						</div>

						<div class="recvis">
							<div class="recvis_title">
								<h1>Расчётный счёт:</h1>
								<h2>40702810038000029979</h2>
							</div>
							<div class="recvis_copy">
								<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
								</svg>
								<h3>Скопировано</h3>
							</div>
						</div>

					</div>

					<div class="recvis_main_2">

						<div class="recvis_duble">
							<div class="recvis">
								<div class="recvis_title">
									<h1>ИНН:</h1>
									<h2>7730212956</h2>
								</div>
								<div class="recvis_copy">
									<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
									</svg>
									<h3>Скопировано</h3>
								</div>
							</div>

							<div class="recvis">
								<div class="recvis_title">
									<h1>ОГРН:</h1>
									<h2>1167746840117</h2>
								</div>
								<div class="recvis_copy">
									<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
									</svg>
									<h3>Скопировано</h3>
								</div>
							</div>
						</div>

						<div class="recvis_duble">
							<div class="recvis">
								<div class="recvis_title">
									<h1>КПП:</h1>
									<h2>773001001</h2>
								</div>
								<div class="recvis_copy">
									<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
									</svg>
									<h3>Скопировано</h3>
								</div>
							</div>

							<div class="recvis">
								<div class="recvis_title">
									<h1>БИК:</h1>
									<h2>044525225</h2>
								</div>
								<div class="recvis_copy">
									<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
									</svg>
									<h3>Скопировано</h3>
								</div>
							</div>
						</div>

						<div class="recvis_duble">
							<div class="recvis">
								<div class="recvis_title">
									<h1>ОКПО</h1>
									<h2>04440612</h2>
								</div>
								<div class="recvis_copy">
									<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
									</svg>
									<h3>Скопировано</h3>
								</div>
							</div>

							<div class="recvis">
								<div class="recvis_title">
									<h1>ОКАТО</h1>
									<h2>45268595000</h2>
								</div>
								<div class="recvis_copy">
									<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
									</svg>
									<h3>Скопировано</h3>
								</div>
							</div>
						</div>

						<div class="recvis">
							<div class="recvis_title">
								<h1>Корреспондентский счёт:</h1>
								<h2>30101810038000000225</h2>
							</div>
							<div class="recvis_copy">
								<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
								</svg>
								<h3>Скопировано</h3>
							</div>
						</div>
					</div>

				</div>

			</div>	
		</div>	

			<div class="recvis_ recR">
				<div class="recvis-main_title">
					<h1>Контакты</h1>
				</div>

				<div class="recvis">
					<div class="recvis_title">
						<h1>Адрес:</h1>
						<h2>г. Москва, Береговой проезд, д. 7<br>
								Пн-Сб: с 9-00 до 21-00 Вс - выходной</h2>
					</div>
					<div class="recvis_copy">
						<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
						</svg>
						<h3>Скопировано</h3>
					</div>
				</div>

				<div class="recvis">
					<div class="recvis_title">
						<h1>Телефон:</h1>
						<h2>+7 (926) 363-42-78<br>
								+7 (495) 109-29-96</h2>
					</div>
					<div class="recvis_copy">
						<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
						</svg>
						<h3>Скопировано</h3>
					</div>
				</div>

				<div class="recvis">
					<div class="recvis_title">
						<h1>E-mail:</h1>
						<h2>csfitout@gmail.com<br>
								office@citystroy-restaurants.ru</h2>
					</div>
					<div class="recvis_copy">
						<svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.796 11.8314L10.8179 7.44423C10.8344 4.14223 13.5158 1.47412 16.8178 1.47412H36.7373C40.051 1.47412 42.7373 4.16041 42.7373 7.47412V31.979C42.7373 35.2927 40.051 37.979 36.7373 37.979H33.2842M7.39453 48.3363H27.2842C30.5979 48.3363 33.2842 45.65 33.2842 42.3363V17.8314C33.2842 14.5177 30.5979 11.8314 27.2842 11.8314H7.39453C4.08082 11.8314 1.39453 14.5177 1.39453 17.8314V42.3363C1.39453 45.65 4.08082 48.3363 7.39453 48.3363Z" stroke="#0093D8" stroke-width="2"/>
						</svg>
						<h3>Скопировано</h3>
					</div>
				</div>
				<div class="recvis">
					<div class="recvis_title">
					<a href="#"><h1>Политика конфиденциальности</h1></a>
					</div>
				</div>
			</div>

		</article>




		<div class="map">
			<!-- <div class="map_adres">
				<h3>Адрес:</h3>
				<a href="https://yandex.ru/maps/-/CDSkA28l" target="_blank"><h3>г. Москва, Береговой проезд, д. 7</h3></a>
				<h3>Пн-Сб: с 9-00 до 21-00</h3>
				<h3>Вс - выходной</h3>
			</div> -->
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2d28c45439fe823b6f7eba08d6e39c3af7f77022bbca364b172c1ddd9e17d0c2&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
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