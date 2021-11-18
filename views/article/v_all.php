<div class="page">
	<div class="page__title">Статьи</div>

	<? if ($articleAdded) : ?>
		<div class="message message_green">You added article</div>
	<? endif; ?>

	<? if ($articleDeleted) : ?>
		<div class="message message_red">You deleted article</div>
	<? endif; ?>

	<? foreach ($articles as $article) : ?>
		<div class="article">
			<div class="article__title">
				<a class="article__name" href="<?= BASE_URL ?>article/article/<?= $article['id_article'] ?>"> <?= $article['title'] ?> </a>
				<em class="article__date"><?= $article['dt_add'] ?></em>
			</div>
			<div class="article__content"> <?= $article['content'] ?> </div>
		</div>
	<? endforeach; ?>
</div>