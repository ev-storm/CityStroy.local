<header>
	<nav class="menu" 
		onmouseenter="logo__player.play()" 
		onmouseleave="logo__player.stop()">
		<div class="menu__logo"
			alt="logo">
			<a class="logo__a" href="#anchor_title">
				<dotlottie-player 
					id="logo__player"
					class="logo__player"
					src="/assets/animation/logo-2.json" 
					background="transparent" 
					speed="1" 
					loop="false"
					autoplay="false">
				</dotlottie-player>
			</a>
		</div>

		<ul  class="menu__main">
				<li><a class="menu__main__item" href="../index.php">Главная</a></li>
				<li><a class="menu__main__item" href="/pages/tehno.php">Технологии</a></li>
				<li><a class="menu__main__item" href="/pages/design.php">Дизайн</a></li>
				<li><a class="menu__main__item" href="/pages/project.php">Проектирование</a></li>
				<li><a class="menu__main__item" href="/pages/SMR.php">Ремонт и СМР</a></li>
				<li><a class="menu__main__item" href="/pages/portfolio.php">Портфолио</a></li>
				<li><a class="menu__main__item" href="/pages/contact.php">Контакты</a></li>

				<li><button class="button-menu button modal__btn">Связаться с нами</button></li>
		</ul>

		<ul class="menu__link">
			<li>
				<a class="youtube" href="https://www.youtube.com/@CityStroy" target="_blank">
					<svg class="menu__link__item" width="111" height="82" viewBox="0 0 111 82" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.64 13.5457C107.361 8.58451 103.607 4.68574 98.8293 3.35769C90.1794 0.948243 55.4777 0.948242 55.4777 0.948242C55.4777 0.948242 20.7765 0.948243 12.1262 3.35769C7.34901 4.68574 3.59478 8.58451 2.31597 13.5457C-0.00414956 22.5289 -0.00415039 41.2828 -0.00415039 41.2828C-0.00415039 41.2828 -0.00414956 60.0368 2.31597 69.0201C3.59478 73.9813 7.34901 77.88 12.1262 79.2078C20.7765 81.6174 55.4777 81.6174 55.4777 81.6174C55.4777 81.6174 90.1794 81.6174 98.8293 79.2078C103.607 77.88 107.361 73.9813 108.64 69.0201C110.96 60.0368 110.96 41.2828 110.96 41.2828C110.96 41.2828 110.951 22.5289 108.64 13.5457ZM44.3645 58.5694L73.1926 41.286L44.3645 24.0023V58.5694Z" fill="white"/>
					</svg>
				</a>
			</li>
			<li>
				<a class="mail" href="../pages/contact.php">
					<svg class="menu__link__item" width="111" height="84" viewBox="0 0 111 84" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M108.527 12.9778C107.25 7.86684 103.499 3.85035 98.727 2.4822C90.0864 0 55.4221 0 55.4221 0C55.4221 0 20.7582 0 12.1173 2.4822C7.34524 3.85035 3.59506 7.86684 2.31763 12.9778C1.70982 15.4049 1.26141 18.5242 0.930597 21.8058L2.03105 22.4337L2.04135 22.4396L50.0465 49.3323C53.3864 51.2033 57.4589 51.2033 60.7988 49.3323L108.825 22.428L108.832 22.4239L108.839 22.42L109.912 21.8265C109.581 18.5373 109.133 15.41 108.527 12.9778ZM110.426 28.408L63.7313 54.5669C58.5696 57.4585 52.2757 57.4585 47.1141 54.5669L0.414726 28.4056C5.7818e-09 35.4174 0 41.5525 0 41.5525C0 41.5525 0 60.8728 2.31763 70.1273C3.59506 75.2383 7.34524 79.2547 12.1173 80.6227C20.7582 83.105 55.4221 83.105 55.4221 83.105C55.4221 83.105 90.0864 83.105 98.727 80.6227C103.499 79.2547 107.25 75.2383 108.527 70.1273C110.845 60.8728 110.845 41.5525 110.845 41.5525C110.845 41.5525 110.842 35.4188 110.426 28.408Z" fill="white"/>
					</svg>
				</a>
			</li>
			<li>
				<a class="phone" href="../pages/contact.php">
					<svg class="menu__link__item" width="77" height="78" viewBox="0 0 77 78" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.06392 54.8884C1.81474 55.9875 1.54172 57.6133 1.37295 59.0036C1.1494 60.2219 0.989944 61.5355 0.821176 62.9258C0.662884 64.2299 0.842018 66.4943 2.48691 68.6011C4.12683 70.712 7.91897 76.3972 16.9726 77.4962C26.0306 78.5957 35.6595 72.4623 36.9763 71.6249C38.2925 70.7922 59.0172 60.1921 68.9129 40.6397C77.1143 24.3746 76.3341 20.7918 76.4038 17.064C76.4773 13.3416 73.4308 4.66741 69.2965 2.42394C65.2313 0.271545 61.4897 -0.182646 60.6802 0.215314C59.8752 0.613814 59.254 1.95409 58.0422 3.79673C56.8989 5.73526 51.2159 15.0038 50.3868 16.8102C49.5616 18.622 49.1044 19.8946 50.7396 21.4212C52.4537 22.9574 56.1015 27.3018 57.1506 28.6697C58.2084 29.9657 58.2092 31.2064 57.0713 33.0628C55.9286 34.9966 53.1965 41.2228 45.9773 48.1498C40.3832 53.5324 33.839 56.805 31.896 57.8146C29.8844 58.7283 29.0294 57.6321 28.2593 56.4586C27.5485 55.4577 26.3409 54.1484 25.4118 53.0383C24.4778 51.9325 23.6971 51.5069 22.5892 50.6233C21.4709 49.8259 20.3084 50.0156 19.3542 50.396C18.4696 50.7897 8.94981 53.5309 5.06392 54.8884Z" fill="white"/>
						</svg>
				</a>
			</li>
		</ul>

	</nav>



	<nav class="mob-menu_con">
		<div class="mob-menu_logo">
		<a href="#anchor_title">
			<img class="mob_logo" src="../assets/img/icon/logo.svg" alt="">
		</a>
			<img class="mob_open" src="../assets/img/icon/burger-open.svg" alt="">
			<img class="mob_close" src="../assets/img/icon/burger-close.svg" alt="">
		</div>

		<div class="mob-menu">
			<ul class="menu-mob_main">
				<li><a href="../index.php">Главная</a></li>
				<li><a href="/pages/tehno.php">Технология</a></li>
				<li><a href="/pages/design.php">Дизайн</a></li>
				<li><a href="/pages/project.php">Проектирование</a></li>
				<li><a href="/pages/SMR.php">Ремонт и СМР</a></li>
				<li><a href="/pages/portfolio.php">Портфолио</a></li>
				<li><a href="/pages/contact.php">Контакты</a></li>
			</ul>
			<button class="button-menu-mob modal__btn">СВЯЗАТЬСЯ С НАМИ</button>

			<ul class="menu-mob_link">
				<li>
					<!-- youtube -->
					<a href="https://www.youtube.com/@CityStroy">
						<img class="menu__link__item" src="../assets/img/icon/youTube.svg">
					</a>
				</li>
				<li>
					<!-- phone -->
					<a href="tel:+79263634278">
						<img class="menu__link__item" src="../assets/img/icon/phone.svg">
					</a>
				</li>
				<li>
					<!-- mail -->
					<a href="mailto:csfitout@gmail.com">
						<img class="menu__link__item" src="../assets/img/icon/mail.svg">
					</a>
				</li>
			</ul>
		</div>
	</nav>



</header>