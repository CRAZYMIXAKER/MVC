<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@400;700&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" /> -->
	<!-- <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<?= BASE_URL ?>assets/img/icon.png">
	<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
</head>

<body>
	<div class="wrapper">
		<div class="hero">
			<header class="header">
				<div class="header__logo">
					<a href="<?= BASE_URL ?>" class="header__link">
						<img src="<?= BASE_URL ?>assets/img/icon.png" alt="logo" class="header__img" />
					</a>
					<div class="header__title">Site name</div>
				</div>
				<nav class="navigation">
					<ul class="navigation__list">
						<? if ($user['id_access'] === '1') : ?>
							<? if ($title !== "Users") : ?>
								<li class="navigation__item">
									<a href="<?= BASE_URL ?>users/all" class="navigation__link"> Users </a>
								</li>
							<? endif; ?>
						<? endif; ?>

						<? if ($user === null) : ?>
							<li class="navigation__item">
								<a href="<?= BASE_URL ?>auth/login" class="navigation__link">Login</a>
							</li>
						<? else : ?>
							<? if ($title !== "ArticleAdd") : ?>
								<li class="navigation__item">
									<a href="<?= BASE_URL ?>article/add" class="navigation__link">Add</a>
								</li>
							<? endif; ?>
							<li class="navigation__item">
								<a href="<?= BASE_URL ?>auth/logout" class="navigation__link"> logout </a>
								<a href="#" class="navigation__user"> <?= $user['name'] ?> </a>
							</li>
						<? endif; ?>
					</ul>
				</nav>
			</header>
			<div class="main">
				<div class="main__body">
					<?= $content ?>
				</div>
			</div>

			<footer class="footer">
				<div class="footer__logo">
					<img class="footer__img" src="<?= BASE_URL ?>assets/img/icon.png" />
				</div>
				<div class="footer__text"> Какой-то текст </div>
			</footer>
		</div>
	</div>


</body>

</html>