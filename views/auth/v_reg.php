<h1>Registration</h1>
<form class="form" method="POST">
	<div class="form_item">
		<label>Login</label>
		<input type="text" name="login" value="<?= $fields['login'] ?>">
		<div class="error"><?= $registrationValidate['login'] ?></div>
	</div>
	<div class="form_item">
		<label>Email</label>
		<input type="text" name="email" value="<?= $fields['email'] ?>">
		<div class="error"><?= $registrationValidate['email'] ?></div>
	</div>
	<div class="form_item">
		<label>Name</label>
		<input type="text" name="name" value="<?= $fields['name'] ?>">
		<div class="error"><?= $registrationValidate['name'] ?></div>
	</div>
	<div class="form_item">
		<label>Password</label>
		<input type="text" name="password">
		<div class="error"><?= $registrationValidate['password'] ?></div>
	</div>
	<div class="form_item">
		<label>Password Confirm</label>
		<input type="text" name="passwordConfirm">
		<div class="error"><?= $registrationValidate['passwordConfirm'] ?></div>
	</div>
	<button>Registration</button>
</form></br>
<a href="<?= BASE_URL ?>">Index</a>


<!-- 
<div class="question">
		<div class="question__text">Уже зарегистрированы?</div>
		<a class="question__link">Войти</a>
	</div> -->