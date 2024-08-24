<div class="form-ban-back">
	<div class="form-ban-con">

		<h1 class="title__form-ban">Коммерческое предложение</h1>
		<img class="close-form-ban" src="../assets/img/icon/banner-close.svg" alt="">
		<div class="swiper btnSwiper">
			<div class="swiper-wrapper">

				<div class="swiper-slide btnSlide">
					<form class="big-form" action="#" method="POST" enctype="multipart/form-data">

						<div class="form-section"><h1 class="form-title">Что вас интересует?</h1>
							<div class="input-form-ban">
								<label>
									<input name="que" type="checkbox" checked/>
									<span>Строительство объекта "под ключ"</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="que" type="checkbox" />
									<span>Дизайн интерьера</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="que" type="checkbox" />
									<span>Ремонт и строительно-монтажные работы</span>
								</label>
							</div>
							<div class="che input-form-ban">
								<label>
									<input name="que" type="checkbox" />
									<span>Проектирование технологии (кухни)</span>
								</label>
							</div>
							<div class="che input-form-ban">
								<label>
									<input class="input" name="que" type="checkbox" />
									<span>Инженерное проектирование </span>
								</label>
							</div>
						</div>

						<div class="form-section"><h1 class="form-title">Укажите площадь помещения м&#178</h1>
							<input type="number" class="input-form-ban" id="number-P" value="250" name="number-P"/>
							<input  type="range" class="input-form-ban" id="range-P" value="250" name="range-P" min="0" max="500"/>
						</div>

						<div class="form-section"><h1 class="form-title">Укажите высоту потолков м&#178</h1>
							<input type="number" class="input-form-ban" id="number-H" value="2.5" name="number-H"/>
							<input type="range" class="input-form-ban" id="range-H" value="2.5" step="0.1" name="range-H" min="0" max="5"/>
						</div>

				</div>

				<div class="swiper-slide btnSlide">

						<div class="form-section"><h1 class="form-title">Где находится помещение?</h1>
								<div class="input-form-ban">
									<label>
										<input name="loc" type="radio" checked/>
										<span>ТЦ/БЦ</span>
									</label>
								</div>
								<div class="input-form-ban">
									<label>
										<input name="loc" type="radio" />
										<span>В отдельном строении</span>
									</label>
								</div>
								<div class="input-form-ban">
									<label>
										<input name="loc" type="radio" />
										<span>В жилом здании</span>
									</label>
								</div>
						</div>

						<div class="form-section"><h1 class="form-title">Где территориально расположено помещение?</h1>
								<div class="input-form-ban">
									<label>
										<input name="map" type="radio" checked/>
										<span>Москва, в пределах МКАД</span>
									</label>
								</div>
								<div class="input-form-ban">
									<label>
										<input name="map" type="radio" />
										<span>Москва, за пределом МКАД</span>
									</label>
								</div>
								<div class="input-form-ban">
									<label>
										<input name="map" type="radio" />
										<span>Подмосковье</span>
									</label>
								</div>
						</div>

				</div>

				<div class="swiper-slide btnSlide">
					
					<div class="form-section"><h1 class="form-title">Какое заведение планируется открыть?</h1>
						<div class="res-form">
							<div class="input-form-ban">
								<label>
									<input name="res" type="radio" checked/>
									<span>Ресторан</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="res" type="radio" />
									<span>Бар</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="res" class="over-res" type="radio" />
									<span>Другое</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="res" type="radio" />
									<span>Кальянная</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="res" type="radio" />
									<span>Кафе</span>
								</label>
							</div>
							<div class="input-form-ban">
								<label>
									<input name="res" type="text" class="over-res-in input modal__input input-name" placeholder="Тип заведения">
								</label>
							</div>
						</div>
					</div>

					<div class="form-section"><h1 class="form-title">Укажите предполагаемое количество посадочных мест</h1>
							<input type="number" class="input-form-ban" id="number-M" value="200" name="number-M"/>
							<input type="range" class="input-form-ban" id="range-M" value="200"  name="range-M" min="0" max="500"/>
					</div>

					<div class="form-section"><h1 class="form-title">Заведение планируется открыть по франшизе?</h1>
						<div class="input-form-ban">
							<label>
								<input name="fran" type="radio" checked/>
								<span>Да, по франшизе</span>
							</label>
						</div>
						<div class="input-form-ban">
							<label>
								<input name="fran" type="radio" checked/>
								<span>Нет</span>
							</label>
						</div>
					</div>
				</div>

				<div class="swiper-slide btnSlide">

					<div class="form-section"><h1 class="form-title">Какие разделы необходимы в проекте?</h1>
						<!-- <div class="input-form-ban">
							<label>
								<input name="proj" type="radio" checked/>
								<span>Все разделы (пронкт под ключ)</span>
							</label>
						</div> -->
						<div class="input-form-ban">
							<label>
								<input name="proj" type="checkbox" checked/>
								<span>Спецификация и расстановка технологического оборудования</span>
							</label>
						</div>
						<div class="input-form-ban">
							<label>
								<input name="proj" type="checkbox" checked/>
								<span>Водоснабжение, канализация, вентиляция, электроснабжение</span>
							</label>
						</div>
						<div class="input-form-ban">
							<label>
								<input name="proj" type="checkbox" checked/>
								<span>Отделка стен, полов и потолков</span>
							</label>
						</div>
					</div>

					<div class="form-section"><h1 class="form-title">Контактные данные</h1>
						<div class="input-form-ban">
							<label class="modal__lab in-cont" for="">Имя
								<input class="modal__input big-input__name" type="text" data-validate-field="name" name="Имя" placeholder="Введите имя">
							</label>
						</div>

						<div class="input-form-ban ">
							<label class="modal__lab in-cont" for="">Телефон
								<input class="modal__input big-input__tel" type="tel" data-validate-field="tel" name="Телефон" placeholder="Введите телефон">
							</label>
						</div>
						
						
					</div>

			
						<div class="modal__check-con big-btn-con">
							<input id="big__check-btn" type="checkbox">
							<label type="checkbox" class="modal__check-text" for="big__check-btn">
								<span class="modal__check big__check-btn"></span>
								Согласие на обработку данных
								<a href="../pages/assent.php"><img class="modal__check-que" src="/assets/img/icon/que.svg" alt=""></a>
							</label>
							
						<button  id="btn-big-form" class="button button-banner-big">Отправить</button>
						</div>
						
					

			


					</form>
				</div>
			</div>

			

		</div>
		<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-pagination"></div>
	</div>


</div>