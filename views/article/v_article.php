<div class="page">
	<div class="page__title">Статья</div>

	<div class="article">
		<div class="article__title">
			<div class="article__name"> <?= $article['title'] ?> </div>
			<em class="article__date"><?= $article['dt_add'] ?></em>
		</div>
		<div class="article__category">
			<a class="article__link" href="<?= BASE_URL ?>category/categoryOne/<?= $article['id_category'] ?>"> <?= $article['name_category'] ?> </a>
		</div>
		<div class="article__content"> <?= $article['content'] ?> </div>
	</div>
	<?php if ($user['id_user'] === $article['id_user'] || $user['id_access'] === '1') : ?>
		<div class="menu">
			<a class="menu__item" href="<?= BASE_URL ?>article/delete/<?= $article['id_article'] ?>"> Delete </a></br>
			<a class="menu__item" href="<?= BASE_URL ?>article/edit/<?= $article['id_article'] ?>"> Edit </a>
		</div>
	<? endif; ?>
</div>