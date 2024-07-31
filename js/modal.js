
$('.modal-over').hide();
$('.modal-con').hide();

$('.modal__btn').click(function(){
	
		$('.modal-over').fadeIn(600);
	

	$('.modal-con').show();
	$('.modal-con').css({
		'transform': 'translateY(0px)',
		'transition': '0.7s',
		'opacity':'1'
	})
});



$('.modal-over, .modal__logo-closed').click(function(){

	$('.modal-over').fadeOut(600);

	$('.modal-con').fadeOut(400);
	$('.modal-con').css({
		'transform': 'translateY(-70%)',
		'transition': '0.7s',
		'opacity':'0'
	})

});





// CHECK
  // Получаем элементы чекбокса и кнопки
	const checkbox = document.getElementById('modal__check');
	const button = document.getElementById('btn');

	// Функция для обновления состояния кнопки
	function updateButtonState() {
			if (checkbox.checked) {
					button.classList.remove('disabled'); // Убираем класс 'disabled'
					button.disabled = false; // Разблокируем кнопку
			} else {
					button.classList.add('disabled'); // Добавляем класс 'disabled'
					button.disabled = true; // Блокируем кнопку
			}
	}

	// Устанавливаем начальное состояние кнопки
	updateButtonState();

	// Добавляем обработчик события на чекбокс для изменения состояния кнопки
	checkbox.addEventListener('change', updateButtonState);



	window.addEventListener('scroll', () => {


		$('.modal-over').fadeOut(600);
		$('.modal-con').fadeOut(400);
		$('.modal-con').css({
			'transform': 'translateY(-70%)',
			'transition': '0.7s',
			'opacity':'0'
		})

		console.log('od')
		
	});