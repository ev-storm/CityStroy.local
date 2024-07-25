
$('.modal-over').hide();
$('.modal').hide();

$('.modal__btn').click(function(){
	$('.modal-over').fadeIn();
	$('.modal').show();
	$('.modal').css({
		'transform': 'translateY(0px)',
		'transition': '0.7s',
		'opacity':'1'
	})
});

$('.modal-over').click(function(){
	$('.modal-over').fadeOut();
	$('.modal').fadeOut(400);
	$('.modal').css({
		'transform': 'translateY(-50%)',
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
