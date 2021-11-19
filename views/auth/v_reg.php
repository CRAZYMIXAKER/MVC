<div class="page">
	<div class="page__title">Регистрация</div>

	<form class="form" method="POST">
		<div class="form__item">
			<input class="form__input" type="text" name="login" value="<?= $fields['login'] ?>" required />
			<span class="form__span"></span>
			<label class="form__label">Логин</label>
			<div class="error"><?= $registrationValidate['login'] ?></div>
		</div>
		<div class="form__item">
			<input class="form__input" type="text" name="email" value="<?= $fields['email'] ?>" required />
			<span class="form__span"></span>
			<label class="form__label">Почта</label>
			<div class="error"><?= $registrationValidate['email'] ?></div>
		</div>
		<div class="form__item">
			<input class="form__input" type="text" name="name" value="<?= $fields['name'] ?>" required />
			<span class="form__span"></span>
			<label class="form__label">Имя</label>
			<div class="error"><?= $registrationValidate['name'] ?></div>
		</div>
		<div class="form__item">
			<input class="form__input" type="password" name="password" required />
			<span class="form__span"></span>
			<label class="form__label">Пароль</label>
			<div class="error"><?= $registrationValidate['password'] ?></div>
		</div>
		<div class="form__item">
			<input class="form__input" type="password" name="passwordConfirm" required />
			<span class="form__span"></span>
			<label class="form__label">Подтвердите пароль</label>
			<div class="error"><?= $registrationValidate['passwordConfirm'] ?></div>
		</div>
		<button class="form__button">Регистрация</button>
	</form>

	<div class="question">
		<div class="question__text">Уже зарегистрированы?</div>
		<a href="<?= BASE_URL ?>auth/login" class="question__link">Войти</a>
	</div>
</div>