<div>
	<strong><?= $article['title'] ?></strong>

	<em><?= $article['dt_add'] ?></em>
	<div><a href="<?= BASE_URL ?>category/categoryOne/<?= $article['id_category'] ?>"> <?= $article['name_category'] ?> </a></div>
	<div> <?= $article['content'] ?> </div></br>
	<?php if ($user['id_user'] === $article['id_user'] || $user['id_user'] === '1') : ?>
		<a href="<?= BASE_URL ?>article/delete/<?= $article['id_article'] ?>"> Delete </a></br>
		<a href="<?= BASE_URL ?>article/edit/<?= $article['id_article'] ?>"> Edit </a>
	<? endif; ?>
	<hr>
</div>