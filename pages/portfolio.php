<!DOCTYPE html>

<html lang="ru">
<title>Портфолио</title>
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



<!-- SCREEN_1-TITLE -->
<article  class="title__con">
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
			<a href="#anchor_title">
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

<div class="container">
	<div class="container-in">
		<input type="text" class="search-input input-carts" placeholder="Введите текст для поиска...">
	
		<button class="button clear-btn">
			<img class="clear-btn-img" src="/assets/img/icon/urn.svg" alt="">
		</button>
	</div>
	<div class="dropdown"></div>
</div>


<!-- CART -->
<h1 id="anchor_title" class="cart-title" >ВЫПОЛНЕННЫЕ ПРОЕКТЫ</h1>
<div class="not-found">
	<h1 >Проект не найден</h1>
</div>

<div class="carts-con">

	<!-- BLACK STAR BURGER -->

	<div class="carts classBS">
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

	<div class="carts classCH">
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
            <a href="/case/ch.php">
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
	<div class="carts classR1">
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
            <a href="/case/river.php">
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
	<div class="carts classIL&PL">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/6.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/IL_&_sushi/7.jpg" alt=""></div>
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
						<a href="/case/il&su.php">
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
	<div class="carts classPAS">
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
						<a href="/case/pasta.php">
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
	<div class="carts  classMO">
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
						<a href="/case/miata-ostrov.php">
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
	<div class="carts  classIL">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/6.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/7.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/8.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/il-pat/9.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Июнь</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/12.svg" alt="IL PATIO">
				<h1 class="cart__title">IL PATIO</h1>
				<h2 class="cart__sub-title">Ресторан 300 м&#178</h2>
				<div class="cart__link">
						<a href="/case/il_patio.php">
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

	<!-- НИЯМА ТЦ Бутово Молл -->
	<div class="carts classNIB">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/2.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/5.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/6.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/4.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/3.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/niama/2.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТЦ Бутово Молл</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/25.svg" alt="НИЯМА">
				<h1 class="cart__title">НИЯМА</h1>
				<h2 class="cart__sub-title">Ресторан 124 м&#178</h2>
				<div class="cart__link">
						<a href="/case/niama_butovo.php">
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
	<div class="carts classMA">
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
						<a href="/case/miata_aisberg.php">
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
	<div class="carts classCOS">
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
				<img class="cart__logo" src="/assets/img/cart/logo/07.svg" alt="COSTA COFFEE">
				<h1 class="cart__title">COSTA COFFEE</h1>
				<h2 class="cart__sub-title">Кофнейня 250 м&#178</h2>
				<div class="cart__link">
						<a href="/case/costa.php">
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
	<div class="carts classNR">
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
						<a href="/case/niama_reutov.php">
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
	<div class="carts classL">
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
						<a href="/case/luna.php">
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

	<!-- МЯТА PLATINUM Остров мечты-->
	<div class="carts  classMV">
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
				<h3 class="cart__location">МФК Солнце Москвы</h3>
				<img class="cart__logo" src="/assets/img/cart/logo/11.svg" alt="МЯТА PLATINUM<">
				<h1 class="cart__title">МЯТА</h1>
				<h2 class="cart__sub-title">Кальянная 315 м&#178</h2>
				<div class="cart__link">
						<a href="/case/miata-ostrov.php">
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

	<!--CINNABON & DONUTTO -->
	<div class="carts classC&D">
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
						<a href="/case/sinabon.php">
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
	<div class="carts classIL&G">
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
						<a href="/case/il_&_geo.php">
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

	<!--Батони, -->
	<div class="carts classIL&G">
		<div class="carts-back swiper-container">
				<div class="swiper-wrapper">
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/bat/1.jpg" alt=""></div>
						<div class="swiper-slide carts-slide"><img src="../assets/img/cart/bat/2.jpg" alt=""></div>
				</div>
		</div>
		<div class="cart__content">
				<h3 class="cart__location">ТРЦ Саларис</h3>
					<img class="cart__logo" src="/assets/img/cart/logo/26.svg" alt="">
				<h1 class="cart__title">Батони</h1>
				<h2 class="cart__sub-title">Фуд-Корт 68 м&#178</h2>
				<div class="cart__link">
						<a href="/case/il_&_geo.php">
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




</body>

	<!-- --------------------------------------- -->
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


</html>