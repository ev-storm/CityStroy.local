<!DOCTYPE html>
<html lang="ru">

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
		font-weight: 200;
	}
</style>

<body>

		<!-- SCREEN_1-TITLE -->
		<article id="anchor_title" class="title__con">
			<div class="title">
				<div class="title__text">
					<div>
						<h1> ВЫПОЛНЕННЫЕ ПРОЕКТЫ </h1>
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
				</div>
			</div>

			<div class="video__con">
					<div class="video portfolio_back"></div>
			</div>

		</article>

	<!-- SWIPER-TICKER -->
	<div class="swiper portfolio_ticker">
		<h1 class="portfolio_ticker__name">НАШИ КЛИЕНТЫ</h1>
    <div class="swiper-wrapper">
      <div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/1.png"></div>
      <div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/2.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/3.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/4.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/5.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/6.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/7.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/8.png"></div>
      <div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/9.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/10.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/11.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/12.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/13.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/14.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/15.png"></div>
      <div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/16.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/17.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/18.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/19.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/20.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/21.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/22.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/23.png"></div>
			<div class="swiper-slide portfolio_ticker__slide"><img src="../assets/img/blue_logo_swiper/24.png"></div>
    </div>
	</div> 



	<!-- CART -->
	<h1 class="cart-title" >ВЫПОЛНЕННЫЕ ПРОЕКТЫ</h1>
	<div class="cart">
		<div class="cart__item bsb"> 
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Саларис</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/BSB.png" alt="BLACK STAR BURGER">
					<h1 class="cart__title">BLACK STAR BURGER</h1>
					<h2 class="cart__sub-title">Бургерная 180 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item ch">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Саларис</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/ch.png" alt="ЧАЙХАНА №1">
					<h1 class="cart__title">ЧАЙХАНА №1</h1>
					<h2 class="cart__sub-title">Ресторан 900 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item river">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ЖК Зил Арт</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/R.png" alt="">
					<h1 class="cart__title">RIVER ONE</h1>
					<h2 class="cart__sub-title">КАЛЬЯННАЯ 250 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="cart__item pasta">
			<div class="cart__filter">
				<div class="cart__content">
					<h3 class="cart__location">ТЦ Ривьева</h3>
					<img class="cart__logo" src="../assets/img/icon/logo/PASTA.png" alt="">
					<h1 class="cart__title">PASTA CUP</h1>
					<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
					<div class="cart__link">
						<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						<button class="cart__youtube">
							<a href="https://www.youtube.com/watch?v=kIabk_lPW04&t=56s&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
								<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
								</svg>
							</a>
						</button>
					</div>
				</div>
			</div>
		</div>
		
	</div>




	<?php
		include('../components/banner.php')
	?>
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