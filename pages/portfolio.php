<!DOCTYPE html>
<html lang="ru">

<!-- HEAD -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection	" content="telephone=no">
	<meta name="description" content="Cитистрой. Дизайн, проектирование и ремонт коммерческих помещений">
	<title>Портфолио</title>

		<!-- link -->
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/shema.css">
		<link rel="stylesheet" href="../css/media.css">
		<link rel="stylesheet" href="../css/case.css">
		<link rel="stylesheet" href="../css/modal.css">
		<link rel="stylesheet" href="../css/carts.css">
		<link rel="stylesheet" href="../css/font.css">	
		<link rel="stylesheet" href="../css/more.css">
		<link rel="stylesheet" href="../css/preloader.css">

		<script defer src="../js/main.js"></script>
		<script defer src="../js/modal.js"></script>
		<script src="../libs/jquery-3.7.1.min.js"></script>
		<script defer src="../libs/inputmask.min.js"></script>
		<script defer src="../libs/just-validate3.3.3.min.js"></script>
		<script defer src="../js/script-new.js"></script>
		<script defer src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
		

	
	<!-- OpenGraph -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https:" />
	<meta property="og:title" content="Дизайн, проектирование и ремонт коммерческих помещений"/>
	<meta property="og:description" content="Главная" />
	<meta property="og:image" content="../assets/img/cart/main.jpg" />
	<!-- telegram_image1x1 -->
	<meta name="twitter:card" content="../assets/img/cart/main.jpg" />
	<!-- SEO -->
	<meta name="keywords" content="теги СЕО">
	<!-- fav -->
	<link type="image/x-icon" href="/assets/img/icon/fav.ico" rel="shortcut icon">
	<link type="Image/x-icon" href="/assets/img/icon/fav.ico" rel="icon">
</head>
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

	<div class="title-mob swiper-container">
		<div class="swiper-wrapper">
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/6.jpg" alt=""></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/4.jpg" alt=""></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/3.jpg" alt=""></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/5.jpg" alt=""></div>
				<div class="swiper-slide title-mob__slide"><img src="/assets/img/case/cover/1.jpg" alt=""></div>
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

<div class="carts-con">

	<!-- BLACK STAR BURGER -->
	<div class="carts">
    <div class="carts-back swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide carts-slide"><img src="/assets/img/cart/bsb/1.jpg" alt=""></div>
            <div class="swiper-slide carts-slide"><img src="/assets/img/cart/bsb/2.jpg" alt=""></div>
            <div class="swiper-slide carts-slide"><img src="/assets/img/cart/bsb/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/bsb/4.jpg" alt=""></div>
            <div class="swiper-slide carts-slide"><img src="/assets/img/cart/bsb/5.jpg" alt=""></div>
            <div class="swiper-slide carts-slide"><img src="/assets/img/cart/bsb/6.jpg" alt=""></div>
        </div>
    </div>
    <div class="cart__content">
        <h3 class="cart__location">ТЦ Саларис</h3>
        <img class="cart__logo" src="/assets/img/cart/logo/10.svg" alt="BLACK STAR BURGER">
        <h1 class="cart__title">BLACK STAR BURGER</h1>
        <h2 class="cart__sub-title">Бургерная 180 м²</h2>
        <div class="cart__link">
            <a href="/case/bsb.php">
                <button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
            </a>
            <button class="cart__youtube">
                <a href="https://www.youtube.com/watch?v=G0Mfo7zb9qE&embeds_referring_euri=https%3A%2F%2Fcitystroy-msk.tilda.ws%2F&source_ve_path=Mjg2NjY&feature=emb_logo" target="_blank">
                    <svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
                    </svg>
                </a>
            </button>
        </div>
    </div>
	</div>

	<!-- ЧАЙХАНА №1 -->
	<div class="carts">
    <div class="carts-back swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide carts-slide"><img src="/assets/img/cart/ch/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/ch/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/ch/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/ch/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/ch/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/ch/6.jpg" alt=""></div>
        </div>
    </div>
    <div class="cart__content">
        <h3 class="cart__location">ТЦ Саларис</h3>
        <img class="cart__logo" src="/assets/img/cart/logo/08.svg" alt="ЧАЙХАНА №1">
        <h1 class="cart__title">ЧАЙХАНА №1</h1>
        <h2 class="cart__sub-title">Ресторан 900 м&#178</h2>
        <div class="cart__link">
            <a href="/case/bsb.php">
                <button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
            </a>
            <button class="cart__youtube">
                <a href="https://www.youtube.com/watch?v=xEbphigR2JE&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
                    <svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
                    </svg>
                </a>
            </button>
        </div>
    </div>
	</div>

	<!-- RIVER ONE -->
	<div class="carts">
    <div class="carts-back swiper-container">
        <div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/river/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/river/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/river/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/river/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/river/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/river/6.jpg" alt=""></div>
        </div>
    </div>
    <div class="cart__content">
        <h3 class="cart__location">ЖК Зил Арт</h3>
        <img class="cart__logo" src="/assets/img/cart/logo/02.svg" alt="RIVER ONE">
        <h1 class="cart__title">RIVER ONE</h1>
        <h2 class="cart__sub-title">КАЛЬЯННАЯ 250 м&#178</h2>
        <div class="cart__link">
            <a href="/case/bsb.php">
                <button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
            </a>
            <button class="cart__youtube">
                <a href="https://www.youtube.com/@CityStroy" target="_blank">
                    <svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
                    </svg>
                </a>
            </button>
        </div>
    </div>
	</div>

	
	<!--IL PATIO и ПЛАНЕТА СУШИ -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/01.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/02.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/03.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/04.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/05.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/06.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/07.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТРЦ Остров Мечты</h3>
				<div class="duble-cart__logo">
					<img class="cart__logo" src="/assets/img/cart/logo/12.svg" alt="BLACK STAR BURGER">
					<img class="cart__logo" src="/assets/img/cart/logo/05.svg" alt="BLACK STAR BURGER">
				</div>
				<h1 class="cart__title">IL PATIO и ПЛАНЕТА СУШИ</h1>
				<h2 class="cart__sub-title">Ресторан 409 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/@CityStroy" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>


	<!-- PASTA CUP -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/pasta/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/pasta/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/pasta/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/pasta/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/pasta/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/pasta/6.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Ривьева</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/22.svg" alt="PASTA CUP">
				<h1 class="cart__title">PASTA CUP</h1>
				<h2 class="cart__sub-title">Ресторан 260 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
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

	<!-- МЯТА PLATINUM Остров мечты-->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata/6.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Остров мечты</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/11.svg" alt="МЯТА PLATINUM<">
				<h1 class="cart__title">МЯТА PLATINUM</h1>
				<h2 class="cart__sub-title">Кальянная 500 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/watch?v=G0Mfo7zb9qE&embeds_referring_euri=https%3A%2F%2Fcitystroy-msk.tilda.ws%2F&source_ve_path=Mjg2NjY&feature=emb_logo" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!-- IL PATIO -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/01.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/05.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/06.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/07.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/08.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/09.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Июнь</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/12.svg" alt="IL PATIO">
				<h1 class="cart__title">IL PATIO</h1>
				<h2 class="cart__sub-title">Ресторан 300 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/watch?v=2S-qCGLFUFQ&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!-- НИЯМА ИЮНЬ -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/02.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/05.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/06.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/04.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/03.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/02.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Июнь</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/25.svg" alt="BLACK STAR BURGER">
				<h1 class="cart__title">НИЯМА</h1>
				<h2 class="cart__sub-title">Ресторан 124 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/watch?v=2S-qCGLFUFQ&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!-- МЯТА LOUNGE Айсберг-->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata_2/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata_2/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata_2/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata_2/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata_2/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/miata_2/6.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Айсберг</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/11.svg" alt="МЯТА LOUNGE">
				<h1 class="cart__title">МЯТА LOUNGE</h1>
				<h2 class="cart__sub-title">Кальянная 260 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
						<a href="https://www.youtube.com/watch?v=2S-qCGLFUFQ&ab_channel=%D0%A1%D0%98%D0%A2%D0%98%D0%A1%D0%A2%D0%A0%D0%9E%D0%99" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!--COSTA COFFEE -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/costa/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/costa/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/costa/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/costa/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/costa/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="/assets/img/cart/costa/6.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТРЦ Ривьера</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/07.svg" alt="BLACK STAR BURGER">
				<h1 class="cart__title">COSTA COFFEE</h1>
				<h2 class="cart__sub-title">Кофнейня 250 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/@CityStroy" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!-- НИЯМА Реутов Парк -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama_reutov/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama_reutov/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama_reutov/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama_reutov/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama_reutov/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama_reutov/6.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТРЦ Реутов Парк</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/25.svg" alt="BLACK STAR BURGER">
				<h1 class="cart__title">НИЯМА</h1>
				<h2 class="cart__sub-title">Ресторан 188 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/@CityStroy" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!-- LUNA -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/luna/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/luna/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/luna/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/luna/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/luna/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/luna/20.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">БЦ YES Митино</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/04.svg" alt="BLACK STAR BURGER">
				<h1 class="cart__title">LUNA</h1>
				<h2 class="cart__sub-title">Ресторан 170 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/@CityStroy" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!--CINNABON & DONUTTO -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/cin_&_don/1.png" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">МФК Солнце Москвы</h3>
				<div class="duble-cart__logo">
					<img class="cart__logo" src="/assets/img/cart/logo/17.svg" alt="BLACK STAR BURGER">
					<img class="cart__logo" src="/assets/img/cart/logo/21.svg" alt="BLACK STAR BURGER">
				</div>
				<h1 class="cart__title">CINNABON & DONUTTO</h1>
				<h2 class="cart__sub-title">Кафе 80 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/@CityStroy" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
				</div>
		</div>
	</div>

	<!--IL PATIO и GEORGES -->
	<div class="carts">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_geo/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_geo/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_geo/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_geo/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_geo/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_geo/6.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТРЦ Саларис</h3>
				<div class="duble-cart__logo">
					<img class="cart__logo" src="/assets/img/cart/logo/12.svg" alt="BLACK STAR BURGER">
					<img class="cart__logo" src="/assets/img/cart/logo/20.svg" alt="BLACK STAR BURGER">
				</div>
				<h1 class="cart__title">IL PATIO и GEORGES</h1>
				<h2 class="cart__sub-title">Ресторан 470 м&#178</h2>
				<div class="cart__link">
						<a href="/case/bsb.php">
								<button class="cart__button button">ПОДРОБНЕЕ О ПРОЕКТЕ</button>
						</a>
						<button class="cart__youtube">
								<a href="https://www.youtube.com/@CityStroy" target="_blank">
										<svg class="svgYou-cart" width="30" height="30" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
										</svg>
								</a>
						</button>
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