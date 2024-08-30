

// inputmask
const form = document.querySelector('.popup_form');
const telSelector = form.querySelector('.input-tel');
const inputmask = new Inputmask('+7 (999) 999-99-99');
inputmask.mask(telSelector);

const validation = new JustValidate('.popup_form');


validation
	.addField('.input__name', [
		{
			rule: 'minLength',
			value: 3,
			errorMessage: 'Введите более 3 символов'
		},
		{
			rule: 'maxLength',
			value: 30,
			errorMessage: 'Введите менее 30 символов'
		},
		{
			rule: 'required',
			value: true,
			errorMessage: 'Введите имя'
		}
	])
	.addField('.input-mail', [
		{
			rule: 'required',
			value: true,
			errorMessage: 'Email обязателен',
		},
		{
			rule: 'email',
			value: true,
			errorMessage: 'Введите корректный Email',
		},
	])
	.addField('.input-tel', [
		{
			rule: 'required',
			value: true,
			errorMessage: 'Телефон обязателен',
		},
		{
			rule: 'function',
			validator: function () {
				const phone = telSelector.inputmask.unmaskedvalue();
				return phone.length === 10;
			},
			errorMessage: 'Введите корректный телефон',
		},
	])
	.onSuccess((event) => {
		console.log('Validation passes and form submitted', event);

		let formData = new FormData(event.target);

		
		

		let xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					console.log('Отправлено');

					$('.modal-over').fadeOut(600);
					$('.modal-con').fadeOut(400);
					$('.modal-con').css({
						'transform': 'translateY(-100%)',
						'transition': '0.7s',
						'opacity':'0'
					})


					$('.banner__mail').removeClass('hide');
					$('.banner__mail').addClass('show');

					setTimeout(() => {
						$('.banner__mail').addClass('hide');
					}, 3000);
				}
			}
		}

		xhr.open('POST', 'mail.php', true);
		xhr.send(formData);

		event.target.reset();
	});





// --------TRIP FORM ------------------
const tripForm = document.querySelector('.trip-form');
const tripTelSelector = tripForm.querySelector('.trip-input__tel');
const inputmaskTrip = new Inputmask('+7 (999) 999-99-99');
inputmaskTrip.mask(tripTelSelector);

const validationTripForm = new JustValidate('.trip-form');


validationTripForm
	.addField('.trip-input__name', [
		{
			rule: 'minLength',
			value: 3,
			errorMessage: 'Введите более 3 символов'
		},
		{
			rule: 'maxLength',
			value: 30,
			errorMessage: 'Введите менее 30 символов'
		},
		{
			rule: 'required',
			value: true,
			errorMessage: 'Введите имя!'
		}
	])
	.addField('.trip-input__tel', [
		{
			rule: 'required',
			value: true,
			errorMessage: 'Телефон обязателен',
		},
		{
			rule: 'function',
			validator: function () {
				const phone = tripTelSelector.inputmask.unmaskedvalue();
				return phone.length === 10;
			},
			errorMessage: 'Введите корректный телефон',
		},
	])
	.onSuccess((event) => {
		console.log('Validation passes and form submitted', event);

		let infoFormData = new FormData(event.target);
		

		let xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					console.log('Отправлено');

					$('.info-banner').fadeOut(400)
					$('.info-banner').css({
						'transform': 'translateX(-100%)',
						'transition': 'all 0.5s ease-out',
					})

					$('.banner__mail').removeClass('hide');
					$('.banner__mail').addClass('show');

					setTimeout(() => {
						$('.banner__mail').addClass('hide');
					}, 3000);
				}
			}
		}

		xhr.open('POST', 'mail.php', true);
		xhr.send(infoFormData);

		event.target.reset();
	});

	
// --------KIT FORM ------------------
const kitForm = document.querySelector('.kit-form');
const kitTelSelector = kitForm.querySelector('.kit-input__tel');
const inputmaskKit = new Inputmask('+7 (999) 999-99-99');
inputmaskKit.mask(kitTelSelector);

const validationKitForm = new JustValidate('.kit-form');

validationKitForm
	.addField('.kit-input__name', [
		{
			rule: 'minLength',
			value: 3,
			errorMessage: 'Введите более 3 символов'
		},
		{
			rule: 'maxLength',
			value: 30,
			errorMessage: 'Введите менее 30 символов'
		},
		{
			rule: 'required',
			value: true,
			errorMessage: 'Введите имя!'
		}
	])
		.addField('.kit-input__tel', [
			{
				rule: 'required',
				value: true,
				errorMessage: 'Телефон обязателен',
			},
			{
				rule: 'function',
				validator: function () {
					const phone = kitTelSelector.inputmask.unmaskedvalue();
					return phone.length === 10;
				},
				errorMessage: 'Введите корректный телефон',
			},
		])
	.onSuccess((event) => {
		console.log('Validation passes and form submitted', event);

		let infoKitFormData = new FormData(event.target);
		

		let xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					console.log('Отправлено');

					$('.kit-info-banner').fadeOut(400)
					$('.kit-info-banner').css({
						'transform': 'translateX(-100%)',
						'transition': 'all 0.5s ease-out',
					})

					$('.banner__mail').removeClass('hide');
					$('.banner__mail').addClass('show');

					setTimeout(() => {
						$('.banner__mail').addClass('hide');
					}, 3000);
				}
			}
		}

		xhr.open('POST', 'mail.php', true);
		xhr.send(infoKitFormData);

		event.target.reset();
	});









//---------- BIG FORM  -----------------

const bigForm = document.querySelector('.big-form');
const bigSelector = bigForm.querySelector('.big-tel');
const inputmaskBig = new Inputmask('+7 (999) 999-99-99');
inputmaskBig.mask(bigSelector);

const validationBigForm = new JustValidate('.big-form');

validationBigForm
	.addField('.big-input__name', [
		{
			rule: 'minLength',
			value: 3,
			errorMessage: function () {
					const firstSlideIndex = document.querySelector('.swiper-wrapper .slide-cont').parentNode.swiperSlideIndex;
					swiper.slideTo(firstSlideIndex);
					return 'Введите более 3 символов'
			},
		},
		{
			rule: 'maxLength',
			value: 30,
			errorMessage: function () {
				const firstSlideIndex = document.querySelector('.swiper-wrapper .slide-cont').parentNode.swiperSlideIndex;
				swiper.slideTo(firstSlideIndex);
				return 'Введите менее 30 символов'
		},
		},
		{
			rule: 'required',
			value: true,
			errorMessage: function () {
				const firstSlideIndex = document.querySelector('.swiper-wrapper .slide-cont').parentNode.swiperSlideIndex;
				swiper.slideTo(firstSlideIndex);
				return 'Введите имя!'
			},
		}
	])
	.addField('.big-tel', [
		{
			rule: 'required',
			value: true,
		},
		 {
			rule: 'function',
			validator: function () {
				const phoneBig = bigSelector.inputmask.unmaskedvalue();
				errorMessage: 'Введите телефон';
				return phoneBig.length === 10;
			},
			errorMessage: function () {
				const firstSlideIndex = document.querySelector('.swiper-wrapper .slide-cont').parentNode.swiperSlideIndex;
				swiper.slideTo(firstSlideIndex);
				return 'Введите корректный телефон'
			},
		},
	
	])
	.onSuccess((event) => {
		console.log('Validation passes and form submitted', event);

		let bigFormData = new FormData(event.target);
		

		let xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function () {
			if (xhr.readyState === 4) {
				if (xhr.status === 200) {
					console.log('Отправлено');

					$('.form-ban-back').fadeOut(600);

					$('.form-ban-con').fadeOut(400);
					$('.form-ban-con').css({
							'transform': 'translateY(-100%)',
							'transition': '0.5s',
							'opacity':'0'
					});

				
					$('.banner__mail').removeClass('hide');
					$('.banner__mail').addClass('show');

					setTimeout(() => {
						$('.banner__mail').addClass('hide');
					}, 3000);
				}
			}
		}

		xhr.open('POST', 'commer-mail.php', true);
		xhr.send(bigFormData);

		event.target.reset();
	});




	
