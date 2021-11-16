<h1>Login</h1>
<form method="POST">
	<div>
		<label for="auth-login">Login</label>
		<input type="text" id="auth-login" name="login">
	</div>
	<div>
		<label for="auth-password">Password</label>
		<input type="password" id="auth-password" name="password">
	</div>
	<div>
		<input type="checkbox" id="login-remember" name="remember">
		<label for="login-remember">
			Remember auth to 1 month
		</label>
	</div>
	<hr>
	<button>Auth now</button>
	<? if ($authErr) : ?>
		<hr>
		<div>
			Incorrect auth data
		</div>
	<? endif; ?>
</form>
<a href="<?= BASE_URL ?>auth/reg">Registration</a>