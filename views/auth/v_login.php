<div class="page">
	<div class="page__title">Авторизация</div>

	<form class="form" method="POST">
		<div class="form__item">
			<input class="form__input" type="text" name="login" required />
			<span class="form__span"></span>
			<label class="form__label">Логин</label>
		</div>
		<div class="form__item">
			<input class="form__input" type="password" name="password" required />
			<span class="form__span"></span>
			<label class="form__label">Пароль</label>
		</div>

		<div class="form__item">
			<div class="checkbox">
				<input class="checkbox__input" id="checkbox" type="checkbox" name="remember">
				<label class="checkbox__label" for="checkbox"> Запомнить меня на 30 дней</label>
			</div>
		</div>

		<button class="form__button">Авторизоваться</button>

		<? if ($authErr) : ?>
			<div class="error"> Incorrect auth data </div>
		<? endif; ?>
	</form>

	<div class="question">
		<div class="question__text">У вас нет аккаунта?</div>
		<a class="question__link" href="<?= BASE_URL ?>auth/reg">Зарегистрироваться</a>
	</div>
</div>