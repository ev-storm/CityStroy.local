<div class="modal-over">
<div class="modal-con">

		<div class="modal">
			<div class="modal__logo-closed">
				<img class="modal__logo-" src="/assets/img/icon/burger-close.svg" alt="">
				<img class="modal__logo" src="/assets/img/icon/logo.svg" alt="">
				<img class="modal__close" src="/assets/img/icon/burger-close.svg" alt="">
			</div>
			<form class="modal__pop popup_form" action="#" method="POST" enctype="multipart/form-data">
				<label class="modal__lab form__label" for="">Имя
					<input class="input modal__input input__name" type="text" data-validate-field="name" name="Имя"  placeholder="Введите имя" autofocus>
				</label>
				<label class="modal__lab form__label" for="">Email
					<input class="input input-mail modal__input" type="email" data-validate-field="email" name="Email"  placeholder="Введите почту">
				</label>
				<label class="modal__lab form__label" for="">Телефон
					<input class="input modal__input input-tel"  type="tel" data-validate-field="tel" name="Телефон" placeholder="Введите телефон">
				</label>
				<label class="modal__lab form__label" for="">Сообщение
					<textarea class="modal__input textarea" id="textarea"  name="Сообщение" cols="20" rows="4" placeholder="Введите сообщение" maxlength="140"></textarea>
				</label>
				<div class="modal__check-con">
					<input id="modal__check" type="checkbox">
					<label  type="checkbox"  class="modal__check-text" for="modal__check">
						<span class="modal__check"></span>
						Согласие на обработку данных
						<a href="../pages/assent.php"><img class="modal__check-que" src="/assets/img/icon/que.svg" alt=""></a>
					</label>
				</div>

				<button  id="btn" class="button button-modal">Отправить</button>
			</form>

				<!-- FORM BD -->
				<!-- <div class="containerDB">
					<form action="sql/check.php" class="containerDB_form" method="POST" enctype="multipart/form-data">
						<input type="hidden" id="nameBD" type="text" name="name" >
						<input type="hidden" id="emailBD" type="email" name="email">
						<input type="hidden" id="phoneBD" type="tel" name="phone">
						<input type="hidden" id="textareaBD" name="textarea"  ></input>
						<button type="hidden" id="btnBD" >Отправить</button>
					</form>
				</div> -->



			<!-- 
			<div class="popup">
				<form action="#" class="popup_form" method="POST" enctype="multipart/form-data">
					<label class="form__label">
						<input class="input input-name" onkeyup="nameBD.value = this.value" type="text" data-validate-field="name" name="Имя" placeholder="Введите имя">
					</label>
			
					<label class="form__label">
						<input class="input input-mail" onkeyup="emailBD.value = this.value" type="email" data-validate-field="email" name="Email" placeholder="Введите email">
					</label>
			
					<label class="form__label">
						<input class="input input-tel" onkeyup="phoneBD.value = this.value" type="tel" data-validate-field="tel" name="Телефон" placeholder="Введите телефон">
					</label>
			
					<label class="form__label">
						<textarea class="textarea" onkeyup="textareaBD.value = this.value" name="Сообщение" id="" cols="30" rows="10" placeholder="Введите ваше сообщение"></textarea>
					</label>
			
					<label class="form__label">
						<input id="1" method="post" type="checkbox" value="1" />
					</label>
					<button id="btn" >Отправить</button>
				</form>
			</div> -->

		</div>

</div>


